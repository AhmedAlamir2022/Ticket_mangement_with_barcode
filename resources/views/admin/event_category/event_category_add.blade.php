@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style type="text/css">
    .bootstrap-tagsinput .tag{
        margin-right: 2px;
        color: #b70000;
        font-weight: 700px;
    } 
</style>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Add Event Category  </h4>
            
            <form method="post" action="{{ route('store.event.category') }}" enctype="multipart/form-data">
                @csrf

               

        

              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Event Title </label>
                <div class="col-sm-10">
                    <input name="event_category" class="form-control" type="text" id="example-text-input">

                    @error('event_category')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>
            <!-- end row -->

 

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Event Category Details </label>
                <div class="col-sm-10">
      <textarea class="form-control" name="details">
   
      </textarea>
                </div>
            </div>
            <!-- end row -->

             <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Event category Image </label>
                <div class="col-sm-10">
           <input name="Cat_image" class="form-control" type="file" id="image">
                </div>
            </div>
            <!-- end row -->


              <div class="row mb-3">
                 <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                <div class="col-sm-10">
  <img id="showImage" class="rounded avatar-lg" src="{{ url('upload/no_image.jpg') }}" alt="Card image cap">
                </div>
            </div>
            <!-- end row -->

            
<input type="submit" class="btn btn-info waves-effect waves-light" value="Insert Event category Data">
            </form>
             
           
           
        </div>
    </div>
</div> <!-- end col -->
</div>
 


</div>
</div>


<script type="text/javascript">
    
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>

@endsection 
