@extends('admin.layout2.main')

@section('body')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>All Restaurants</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active">Restaurant</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <!-- /.row -->
                <!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Logo</th>
                                        <th>Business name</th>
                                        <th>category</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $k=0;
                                    @endphp

                                    @foreach($resturents as $user)

                                        @php
                                            $k++;
                                        @endphp
                                        <tr>
                                            <td>{{$k}}</td>
                                            <td><img src="{{asset("upload/$user->logo")}}" style="width: 100px;height: 100px" alt=""></td>

                                            <td>{{ $user->business }}</td>
                                            <td>{{ $user->category->name }}</td>
                                            <td>{{ $user->address }}</td>
                                            <td  class="d-flex">

                                                <form action="{{ url('/admins/delete/restaurant') }}/{{ ($user->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn rounded-pill btn-danger" onclick="return confirm('Are you sure you want to delete this restaurant?')">Delete </button></td>
                                            </form>
                                        </tr>


                                        <!-- /.modal -->
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <script>
        @if(Session::has('success'))

        toastr.success("{{ session('success') }}");

        @endif

        @if(Session::has('error'))

        toastr.error("{{ session('error') }}");

        @endif

    </script>
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        });
    </script>

@endsection
