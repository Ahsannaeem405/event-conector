@extends('admin.layout2.main')

@section('body')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>All Roles</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active">Roles</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section id="column-selectors">
            <div class="row m-0">
                <div class="col-12">


                    <div class="card m-0">


                        <div class="card-content">
                            <div class="card-body card-dashboard">

                                <form method="post" action="{{route('roles.store')}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-6">
                                            <div class="form-group">
                                                <label> Role Title :</label>

                                                <input type="text" name="name" class="form-control" placeholder="Enter Role">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="table-responsive border rounded px-1 ">
                                                <h6 class="border-bottom py-1 mx-1 mb-0 font-medium-2"><i class="feather icon-lock mr-50 "></i>Permission</h6>
                                                <table class="table table-borderless">
                                                    <thead>

                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    @foreach($permission as $category=>$values)
                                                        <tr>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <td> <b>{{$category}}:</b></td>
                                                                    @foreach($values as $value)
                                                                        <td>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" name="permission[]" value="{{$value->id}}" id="{{'check'.$value->id}}" class="custom-control-input">
                                                                                <label for="{{'check'.$value->id}}" class="custom-control-label font-15 text-capitalize"> {{ $value->name }}</label>
                                                                            </div>
                                                                </div>
                                                            </div>
                                                            </td>
                                                            @endforeach
                                                        </tr>
                                                    @endforeach


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center mt-2">
                                            <button type="submit" class="btn btn-primary">
                                                Save Role
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main content -->

        <!-- /.content -->
    </div>
    <script>
        @if(Session::has('success'))

        toastr.success("{{ session('success') }}");

        @endif

        @if(Session::has('error'))

        toastr.error("{{ session('error') }}");

        @endif
        @foreach ($errors->all() as $error)
        toastr.error("{{ $error }}");

        @endforeach

    </script>


@endsection
