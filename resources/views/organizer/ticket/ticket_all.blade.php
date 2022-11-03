@extends('organizer.organizer_master')
@section('organizer')


 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Tickets All</h4>

                                     

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Tickets All Data </h4>
                    

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
                        	@php($i = 1)
                        	@foreach($tickets as $key => $item)
                            @if($item->Organizer_email == Auth::guard('organizer')->user()->email)
                            <tr>
                                <td> {{ $i++}} </td>
                                <td> {{ $item['event']['event_title'] }} </td>
                                <td> {{ $item->ticket_title }} </td>
                                <td> {!! DNS2D::getBarcodeHTML($item->final, 'QRCODE') !!}
                                </td>
                                
                                <td>
                                    <a href="{{ route('view.ticket1',$item->id) }}" class="btn btn-info sm" title="View Data">  <i class="fas fa-search"></i> </a>
                                    <a href="{{ route('delete.ticket',$item->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete">  <i class="fas fa-trash-alt"></i> </a>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                     
                        
                    </div> <!-- container-fluid -->
                </div>
 

@endsection








