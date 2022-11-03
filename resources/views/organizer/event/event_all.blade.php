@extends('organizer.organizer_master')
@section('organizer')


 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Events All</h4>

                                     

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Events All Data </h4>
                    

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Event Image</th>
                            <th>Event Category</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Action</th>
                            
                        </thead>


                        <tbody>
                        	@php($i = 1)
                        	@foreach($events as $key => $item)
                        <tr>
                            <td> <img src="{{ asset($item->event_image) }}" style="width: 60px; height: 50px;"> </td>
                            <td> {{ $item['category']['event_category'] }} </td>
                            <td> {{ $item->event_title }} </td>
                            <td> {{ $item->event_description }} </td>
                            
                            <td>
   <a href="{{ route('edit.event1',$item->id) }}" class="btn btn-info sm" title="Edit Data">  <i class="fas fa-edit"></i> </a>

    <a href="{{ route('delete.event',$item->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete">  <i class="fas fa-trash-alt"></i> </a>

                            </td>
                           
                        </tr>
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