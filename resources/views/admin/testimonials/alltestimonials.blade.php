@extends('admin.admin_master')
@section('admin')


 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Testimonials All</h4>

                                     

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Testimonials All</h4>
                    

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Added Date</th>
                            <th>Action</th>
                            
                        </thead>


                        <tbody>
                        	@php($i = 1)
                        	@foreach($testimonials as $item)
                        <tr>
                            <td> {{ $i++}} </td>
                            <td> {{ $item->name }} </td>
                            @if ($item->status == 0)
                                <td> Not Approved Yet </td>
                            @elseif($item->status == 1)
                                <td style="color:green;"> Accepted </td>
                            @else 
                                <td style="color:red;">Rejected</a></td>   
                            @endif
                            <td> {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }} </td>
                            
                            <td>
 

     <a href="{{ route('delete.testimonial',$item->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete">  <i class="fas fa-trash-alt"></i> </a>
     <a href="{{ route('view.testimonial',$item->id) }}" class="btn btn-info sm" title="View">  <i class="fas fa-search"></i> </a>
     

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