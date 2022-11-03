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

                <h4 class="card-title">Tickets Report  </h4>
                
                <form method="post" action="{{ route('search.ticket1') }}">
                    @csrf

                

                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">From:  </label>
                    <div class="col-sm-10">
                        <input name="start_at" class="form-control" value="{{ $start_at ?? '' }}"  type="date"  required>
                    </div>
                </div>
                <!-- end row -->
                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">To:  </label>
                    <div class="col-sm-10">
                        <input name="end_at" value="{{ $end_at ?? '' }}" class="form-control" type="date" required>
                    </div>
                </div>
                <!-- end row -->
                
                <input type="submit" class="btn btn-info waves-effect waves-light" value="Show Me The Report">
                </form>
                
            
            
            </div>
            <div class="card-body">
                    
                    @if (isset($details))
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Ticket Event</th>
                            <th>Ticket Title</th>
                            <th>Ticket Barcode</th>
                            <th>Action</th>
                            
                        </thead>


                        <tbody>
                        <?php $i = 0; ?>
                                @foreach ($details as $ticket)
                                    <?php $i++; ?>
                            <tr>
                                <td> {{ $i }} </td>
                                <td> {{ $ticket['event']['event_title'] }} </td>
                                <td> {{ $ticket->ticket_title }} </td>
                                <td> {!! DNS2D::getBarcodeHTML($ticket->final, 'QRCODE') !!}</td>
                                <td>
                                    <a href="{{ route('view.ticket1',$ticket->id) }}" class="btn btn-info sm" title="View Data">  <i class="fas fa-search"></i> </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
        
                                    </div>
        </div>
    </div> <!-- end col -->
</div>
 


</div>
</div>



@endsection 
