@extends('frontend.main_master')


@section('main')

@section('title')
Black Market || My Tickets Page
@endsection
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url({{ asset('frontend/assets/images/banner/banner1.jpg')}});">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">My Tickets</h1>
				 </div>
            </div>
        </div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li>My Tickets</li>
				</ul>
			</div>
		</div>
		<!-- Breadcrumb row END -->
        <!-- inner page banner END -->
		<div class="content-block">
            <!-- About Us -->
			<div class="section-area section-sp1">
                <div class="container">
					 <div class="row">
						<div class="col-lg-3 col-md-4 col-sm-12 m-b30">
							<div class="profile-bx text-center">
								<div class="user-profile-thumb">
									<img src="{{ (!empty($userData->user_image))? url('upload/admin_images/'.$userData->user_image):url('upload/no_image.jpg') }}" alt=""/>
								</div>
								
								<div class="profile-info">
									<h4>{{ $userData->name }}</h4>
									<span>{{ $userData->email }}</span>
								</div>
								<div class="profile-social">
									<ul class="list-inline m-a0">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
								<div class="profile-tabnav">
									<ul class="nav nav-tabs">
										<li class="nav-item">
											<a class="nav-link " href="{{ route('user.profile') }}"><i class="ti-pencil-alt"></i>Edit Profile</a>
										</li>
										<li class="nav-item">
											<a class="nav-link " href="{{ route('user.change.password') }}"><i class="ti-lock"></i>Change Password</a>
										</li>
										<li class="nav-item">
											<a class="nav-link " href="{{ route('user.add.testimonial') }}"><i class="ti-book"></i>Testimonials</a>
										</li>
										<li class="nav-item">
											<a class="nav-link active" href="{{ route('user.mytickets') }}"><i class="ti-bookmark-alt"></i>My Tickets </a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="{{ route('user.logout') }}"><i class="ti-bookmark-alt"></i>Logout </a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-9 col-md-8 " class="tab-pane" id="edit-profile">
							
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="row">
							@php

$tickets = App\Models\Ticket::latest()->limit(20)->get();

@endphp
@foreach($tickets as $item)
@if ($item->user_email == Auth::user()->email)
								<div class="col-md-6 col-lg-4 col-sm-6 m-b30">
									<div class="cours-bx">
										<div class="action-box">
										
											<img src="{{ asset($item->ticket_image) }}" alt="">
											<a href="{{ route('ticket.details',$item->id) }}" class="btn">Read More</a>
										</div>
										<div class="info-bx text-center">
											<h5><a href="{{ route('ticket.details',$item->id) }}">{{$item->ticket_title}}</a></h5>
										</div>
										<div class="cours-more-info">
											<div class="price">
											@if ($item->ticket_remark == 1)
												<p>Active</p>
												<h5> <a href="{{ route('ticket.sell',$item->id) }}"><button class="btn btn-warning">Resell</button></a></h5>
												@elseif ($item->ticket_remark == 2)
												<h5>Wating to Organizer Acception</h5>
												@endif
											</div>

											<div class="price">
												<h5>(KWD){{$item->ticket_price}}</h5>
												 
												@if ($item->ticket_remark == 1)
													@if ($item->checkout == 1)
													<h5> <a href="{{ route('ticket.info',$item->id) }}" target="_blank" ><button class="btn btn-success">Get info</button></a></h5>
													
													@else
													<h5> <a href="{{ route('ticket.checkout',$item->id) }}"><button class="btn btn-warning">Checkout</button></a></h5><hr>
													@endif
												@else
													<a href="{{ route('view.userticket',$item->id) }}"><button class="btn btn-success">Book</button></a>
												@endif
											</div>

										</div>
									</div>
								</div>@endif
								@endforeach
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
		<!-- contact area END -->
        @endsection