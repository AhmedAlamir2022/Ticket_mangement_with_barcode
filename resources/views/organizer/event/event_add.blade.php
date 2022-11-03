@extends('organizer.organizer_master')
@section('organizer')
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
 
            <h4 class="card-title">Add Event  </h4>
            
            <form method="post" action="{{ route('store.event1') }}" enctype="multipart/form-data">
                @csrf

               

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Event Category Name</label>
                <div class="col-sm-10">
        <select name="event_category_id" class="form-select" aria-label="Default select example">
            <option selected="">Open this select menu</option>
            @foreach($categories as $cat)
            <option value="{{ $cat->id }}">{{ $cat->event_category }}</option>
            @endforeach
            </select>
               </div>
            </div>
            <!-- end row -->

              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Event Title </label>
                <div class="col-sm-10">
                    <input name="event_title" class="form-control" type="text" id="example-text-input">

                    @error('event_title')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Event Description </label>
                <div class="col-sm-10">
      <textarea class="form-control" name="event_description">
   
      </textarea>
                </div>
            </div>
            <!-- end row -->

             <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Event Image </label>
                <div class="col-sm-10">
           <input name="event_image" class="form-control" type="file" id="image">
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

            
<input type="submit" class="btn btn-info waves-effect waves-light" value="Insert Event Data">
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
