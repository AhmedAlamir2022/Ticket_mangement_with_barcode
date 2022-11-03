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

            <h4 class="card-title">View Pending Ticket  </h4>
            
            <form method="post" action="{{ route('update.pen_ticket', $tickets->id) }}" enctype="multipart/form-data">
                @csrf

            <input type="hidden" name="id" value="{{ $tickets->id }}">

            
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Title </label>
                <div class="col-sm-10">
                    <input value="{{ $tickets->ticket_title }}" class="form-control" type="text" id="example-text-input" readonly> 
                </div>
             </div>
            <!-- end row -->
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label"> Date</label>
                <div class="col-sm-10">
                    <input value="{{ $tickets->ticket_date }}" class="form-control" type="text" id="example-text-input" readonly> 
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Time </label>
                <div class="col-sm-10">
                    <input value="{{ $tickets->ticket_time }}" class="form-control" type="text" id="example-text-input" readonly> 
                </div>
             </div>
            <!-- end row -->

              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Seat Number </label>
                <div class="col-sm-10">
                    <input value="{{ $tickets->ticket_seatnumber }}" class="form-control" type="text" id="example-text-input" readonly> 
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label"> Price</label>
                <div class="col-sm-10">
                    <input name="ticket_price" value="{{ $tickets->ticket_price }}" class="form-control" type="text" id="example-text-input" required> 
                </div>
            </div>
            <!-- end row -->

 

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
        <select name="ticket_remark" class="form-select" aria-label="Default select example">
            <option value="0">Accepted</option>
            <option value="1">Rejected</option>
            </select>
               </div>
            </div>
            <!-- end row -->
<input type="submit" class="btn btn-info waves-effect waves-light" value="Update Pending Ticket Status">
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
