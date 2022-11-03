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

            <h4 class="card-title">Edit Query  </h4>
            
            <form method="post" action="{{ route('update.query', $quires->id) }}" enctype="multipart/form-data">
                @csrf

            <input type="hidden" name="id" value="{{ $quires->id }}">

              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label"> Country  </label>
                <div class="col-sm-10">
                    <input name="country" value="{{ $quires->country }}" class="form-control" type="text" id="example-text-input"> 
                </div>
            </div>
            <!-- end row -->

 

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label"> Phone  </label>
                <div class="col-sm-10">
                    <input name="phone" value="{{ $quires->phone }}" class="form-control" type="text" id="example-text-input"> 
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label"> Email  </label>
                <div class="col-sm-10">
                    <input name="email" value="{{ $quires->email }}" class="form-control" type="text" id="example-text-input"> 
                </div>
            </div>
            <!-- end row -->
<input type="submit" class="btn btn-info waves-effect waves-light" value="Update Query Data">
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
