@extends('admin.layout2.main')

@section('body')
  
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users</li>
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
              <div class="card-header">

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Phone #</th>
                      <th>Address</th>
                      <th>Email</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $k=0;
                    @endphp

                    @foreach($users as $user)
                      @php
                      $k++;
                      @endphp
                    <tr>
                      <td>{{$k}}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->phone }}</td>
                      <td>{{ $user->address }}</td>
                      <td>{{ $user->email }}</td>
                      <td><a class="btn rounded-pill btn-info" href="#" data-toggle="modal" data-target="#modal-{{ $user->id }}">Edit</a>
                      <form action="{{ ('/admins/dltuser') }}/{{ ($user->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn rounded-pill btn-danger">Delete </button></td>
                      </form>
                    </tr>
                    
                    <div class="modal fade" id="modal-{{ $user->id }}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title">Edit User</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form method="POST" action="{{ ('/admins/edituser') }}/{{ ($user->id) }}">
                                    @csrf
                                    <div class="modal-body">

                                    <label> Name</label>
                                    <input type="text" required name="name" value="{{ $user->name }}" class="form-control"></input>

                                    <label> Email</label>
                                    <input type="email" required name="email" value="{{ $user->email }}" class="form-control"></input>

                                    <label> Phone</label>
                                    <input type="text" required name="phone" value="{{ $user->phone }}" class="form-control"></input>

                                    <label> address</label>
                                    <input type="text" name="address" value="{{ $user->address }}" class="form-control"></input>

                                    </div>
                                    <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
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

@endsection
