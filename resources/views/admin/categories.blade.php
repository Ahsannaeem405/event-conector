@extends('admin.layout2.main')

@section('body')
<style>
  .file-icon{
    font-size: 30px !important;
  }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Categories</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
              <li class="breadcrumb-item active">Categories</li>
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
                    
                    <div class="input-group-append">
                      <button type="button" data-toggle="modal" data-target="#modal-category" class="btn rounded-pill btn-success">
                        Add New Category
                      </button>
                    </div>
                    
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Category Name</th>
                      
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $k=0;
                    @endphp

                    @foreach($catgs as $catg)
                      @php
                      $k++;
                      @endphp
                    <tr>
                      <td>{{$k}}</td>
                      <td>{{ $catg->name }}</td>
                      <td class="d-flex"><a class="btn rounded-pill btn-info categoryedit"  catgid="{{ $catg->id }}">Edit</a>
                      <form action="{{ url('/admins/dltcatg') }}/{{ ($catg->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn rounded-pill btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete </button></td>
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


    <div class="modal fade" id="modal-category">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Category</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" action="{{ url('/admins/addcategory') }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">

                  <label> Name</label>
                  <input type="text" required name="catgname" value="" class="form-control"></input>
                  <label class="mt-4"> logo</label>
                  <input type="file" required name="file" value="" class="form-control dropify" data-height="100"></input>

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
  </div>



  <div class="modal fade" id="modal-editcategory">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
              <h4 class="modal-title">Edit Category</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              </div>
                <div class="modal-body" id="editcategory">
                  
                </div>  
          </div>
          <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
  </div>




  <script>
  @if(Session::has('success'))

  toastr.success("{{ session('success') }}");

  @endif

  @if(Session::has('error'))

  toastr.error("{{ session('error') }}");

  @endif

</script>

      <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
<script>
      $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  });


</script>
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  -->
<script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">

<script>
$(document).ready(function(){
            $('.dropify').dropify();
            $(document).on("click", ".categoryedit", function () {
              var id = $(this).attr('catgid');
              $.ajax({
                  type: 'get',
                  url: '{{url('admins/category_edit')}}',
                  data: {'id': id},
                  success: function (data) {
                      $('#editcategory').empty().append(data);
                      $('#modal-editcategory').modal('show');
                  },
              });
            });
});
</script>

@endsection
