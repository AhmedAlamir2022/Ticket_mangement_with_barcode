@extends('organizer.organizer_master')
@section('organizer')


<div class="page-content">
<div class="container-fluid">


<div class="row">
    <div class="col-lg-12">
        <div class="card"><br><br>
<center>
<img class="rounded-circle avatar-xl" src="{{ asset($tickets->ticket_image) }}" alt="Card image cap">
</center>

            <div class="card-body">
                <h4 class="card-title">Ticket Title : {{ $tickets->ticket_title }} </h4>
                <hr>
                <h4 class="card-title">Ticket Event : {{ $tickets['event']['event_title'] }} </h4>
                <hr>
                <h4 class="card-title">Ticket Price : {{ $tickets->ticket_price }} </h4>
                <hr>
                <h4 class="card-title">Ticket Description : {{ $tickets->ticket_description }} </h4>
                <hr>
                <h4 class="card-title">Ticket Date : {{ $tickets->ticket_date }} </h4>
                <hr>
                <h4 class="card-title">Ticket Duration : {{ $tickets->ticket_duration }} </h4>
                <hr>
                <h4 class="card-title">Ticket Seat Number : {{ $tickets->ticket_seatnumber }} </h4>
                <hr>
                <h4 class="card-title">Ticket Country : {{ $tickets->ticket_country }} </h4>
                <hr>
                <h4 class="card-title">Ticket Address : {{ $tickets->ticket_address }} </h4>
                <hr>
                @if ($tickets->ticket_remark == 0)
                <h4 class="card-title">Ticket Remark : Active </h4>
                <hr>
                @else
                <h4 class="card-title">Ticket Remark : Not Active </h4>
                <hr>
                @endif
                @if ($tickets->ticket_status == 0)
                <h4 class="card-title">Ticket Added By : Admin </h4>
                <hr>
                @elseif($tickets->ticket_status == 1)
                <h4 class="card-title">Ticket Added By : Event Organizer </h4>
                <hr>
                @endif
                <h4 class="card-title">Ticket Added Date : {{ $tickets->created_at }} </h4>
                <hr>
            </div>
        </div>
    </div> 
                            
        
                        </div> 


</div>
</div>
<script>
    window.print();
</script>


@endsection 
