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

            <h4 class="card-title">Add New Admin </h4>
            
            <form method="post" action="{{ route('admin.register.create') }}">
                @csrf

   

              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Name </label>
                <div class="col-sm-10">
                    <input name="name" type="text" class="form-control" id="example-text-input" required>
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Email Address </label>
                <div class="col-sm-10">
                    <input name="email" type="email" class="form-control" id="example-text-input" required>
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Password </label>
                <div class="col-sm-10">
                    <input name="password" type="password" class="form-control" id="example-text-input" required>
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Confirm Password </label>
                <div class="col-sm-10">
                    <input name="password_confirmation" type="password" class="form-control" id="example-text-input" required>
                </div>
            </div>
            <!-- end row -->



            
<input type="submit" class="btn btn-info waves-effect waves-light" value="Insert New Admin">
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
