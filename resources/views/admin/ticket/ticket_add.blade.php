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

            <h4 class="card-title">Add Ticket  </h4>
            
            <form method="post" action="{{ route('store.ticket') }}" enctype="multipart/form-data">
                @csrf

               

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Ticket Event</label>
                <div class="col-sm-10">
        <select name="ticket_event_id" class="form-select" aria-label="Default select example">
            <option selected="">Open this select menu</option>
            @foreach($events as $cat)
            <option value="{{ $cat->id }}">{{ $cat->event_title }}</option>
            @endforeach
            </select>
               </div>
            </div>
            <!-- end row -->

              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Ticket Title </label>
                <div class="col-sm-10">
                    <input name="ticket_title" class="form-control" type="text" id="example-text-input">

                    
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Ticket Price </label>
                <div class="col-sm-10">
                    <input name="ticket_price" class="form-control" type="number" id="example-text-input">

                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Ticket Description </label>
                <div class="col-sm-10">
      <textarea class="form-control" name="ticket_description">
   
      </textarea>
                </div>
            </div>
            <!-- end row -->
<!-- end row -->

<div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Ticket Date </label>
                <div class="col-sm-10">
                    <input name="ticket_date" class="form-control" type="date" id="example-text-input">

                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Ticket Duration </label>
                <div class="col-sm-10">
                    <input name="ticket_duration" class="form-control" type="text" id="example-text-input">

                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Ticket Time </label>
                <div class="col-sm-10">
                    <input name="ticket_time" class="form-control" type="time" id="example-text-input">

                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Ticket Seat Number </label>
                <div class="col-sm-10">
                    <input name="ticket_seatnumber" class="form-control" type="number" id="example-text-input">

                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Ticket Country </label>
                <div class="col-sm-10">
                    <input name="ticket_country" class="form-control" type="text" id="example-text-input">

                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Ticket Address </label>
                <div class="col-sm-10">
                    <input name="ticket_address" class="form-control" type="text" id="example-text-input">

                </div>
            </div>
<!-- end row -->
             <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Ticket Image </label>
                <div class="col-sm-10">
           <input name="ticket_image" class="form-control" type="file" id="image">
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

            
<input type="submit" class="btn btn-info waves-effect waves-light" value="Insert Ticket Data">
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
