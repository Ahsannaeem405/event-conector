<form method="POST" action="{{ url('/admins/editcatg') }}/{{ ($catg->id) }}" enctype="multipart/form-data">
    @csrf
    <label> Name</label>
    <input type="text" required name="name" value="{{ $catg->name }}" class="form-control"></input>
    <label class="mt-4"> logo</label>
    <input type="file" name="file" value="{{$catg->logo}}" class="form-control dropify" data-height="100" data-default-file="{{asset('upload/categoryimages') }}/{{$catg->logo}}"></input>

    </div>
    <div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Save changes</button>
</form>

<script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">

<script>
$(document).ready(function(){
    $('.dropify').dropify();
});
</script>