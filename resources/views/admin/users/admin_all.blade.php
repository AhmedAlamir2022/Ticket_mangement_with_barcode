@extends('admin.admin_master')
@section('admin')


 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Admins All</h4>

                                     

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Admins All Data </h4>
                    

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>UserName</th>
                            <th>Email</th>
                            
                        </thead>


                        <tbody>
                        	@php($i = 1)
                        	@foreach($admins as $key => $item)
                            <tr>
                                <td> <img src="{{ url('upload/admin_images/'.Auth::guard('admin')->user()->profile_image) }}" style="width: 60px; height: 50px;"> </td>
                                <td> {{ $item->name }} </td>
                                <td> {{ $item->username }} </td>
                                <td> {{ $item->email }} </td>
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








