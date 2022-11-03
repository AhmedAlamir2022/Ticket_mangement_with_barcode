
@extends('frontend.main_master')


@section('main')

@section('title')
Black Market || Home Page
@endsection
        <!-- Main Slider -->
        @include('frontend.body.slider')
        <!-- Main Slider -->
		<div class="content-block">
            
			<!-- Our Services -->
			<div class="section-area content-inner service-info-bx">
                <div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="service-bx">
								<div class="action-box">
									<img src="{{ asset('frontend/assets/images/andy-li-A_dJOYpxEVU-unsplash (1).jpg') }}" alt="">
								</div>
								<div class="info-bx text-center">
									<div class="feature-box-sm radius bg-white">
										<i class="fa fa-bank text-primary"></i>
									</div>
									<h4><a href="{{ route('home.ticket') }}">Tickets</a></h4>
									<a href="{{ route('home.ticket') }}" class="btn radius-xl">View More</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="service-bx">
								<div class="action-box">
									<img src="{{ asset('frontend/assets/images/alvaro-reyes-F7Bnis7IwjA-unsplash.jpg') }}" alt="">
								</div>
								<div class="info-bx text-center">
									<div class="feature-box-sm radius bg-white">
										<i class="fa fa-book text-primary"></i>
									</div>
									<h4><a href="{{ route('home.event') }}">Events</a></h4>
									<a href="{{ route('home.event') }}" class="btn radius-xl">View More</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="service-bx m-b0">
								<div class="action-box">
									<img src="{{ asset('frontend/assets/images/thom-holmes-k-xKzowQRn8-unsplash.jpg') }}" alt="">
								</div>
								<div class="info-bx text-center">
									<div class="feature-box-sm radius bg-white">
										<i class="fa fa-file-text-o text-primary"></i>
									</div>
									<h4><a href="{{ route('home.about') }}">About Us</a></h4>
									<a href="{{ route('home.about') }}" class="btn radius-xl">View More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
            <!-- Our Services END -->
			
			<!-- Popular Courses -->
			<div class="section-area section-sp2 popular-courses-bx">
                <div class="container">
					<div class="row">
						<div class="col-md-12 heading-bx left">
							<h2 class="title-head">Our <span>Tickets</span></h2>
							<p>Find & explore all events and book tickets</p>
						</div>
					</div>
					<div class="row">
					<div class="courses-carousel owl-carousel owl-btn-1 col-12 p-lr0">
					@php

$tickets = App\Models\Ticket::latest()->limit(20)->get();

@endphp
@foreach($tickets as $item)
						<div class="item">
						 
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
										@if ($item->ticket_remark == 0)
										<p> Active </p>
										@else
										<p>Not Active </p>
										@endif
												
											</div>
									<div class="price">
										<h5>(KWD){{$item->ticket_price}}</h5>
										<h5>
										@if ($item->ticket_remark == 0)
											@auth
											<a href="{{ route('view.userticket',$item->id) }}"><button class="btn btn-success">Book</button></a>
											@else
											<a href="{{ route('login') }}"><button class="btn btn-success">Login To Book</button></a>
											@endauth
										@else
										<p>Not Avalilable</p>
										@endif
								</h5>
									</div>
								</div>
							</div>
						</div>@endforeach
					</div>
					</div>
				</div>
			</div>
			<!-- Popular Courses END -->
			
			<!-- Form -->
			
			<div class="section-area section-sp1 ovpr-dark bg-fix online-cours" style="background-image:url({{ asset('frontendassets/images/background/bg1.jpg')}});">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center text-white">
							<h2>Subscribe </h2> 
							<h5>Put youe email address to get last news</h5>
							<form class="cours-search" method="post" action="{{ route('store.subscribe') }}">
							@csrf
								<div class="input-group">
									<input name="email" type="email" class="form-control" placeholder="Email Address	">
									<div class="input-group-append">
										<button class="btn" type="submit" >Go</button> 
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="mw800 m-auto">
						<div class="row">
							<div class="col-md-4 col-sm-6">
								<div class="cours-search-bx m-b30">
									<div class="icon-box">

										<h3><i class="ti-user"></i><span class="counter">{{ \App\Models\User::count() }}</span></h3>
									</div>
									<span class="cours-search-text">Happy Customers</span>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="cours-search-bx m-b30">
									<div class="icon-box">
										

										<h3><i class="ti-book"></i><span class="counter">{{ \App\Models\Ticket::count() }}</span></h3>
									</div>
									
									<span class="cours-search-text">Tickets</span>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="cours-search-bx m-b30">
									<div class="icon-box">

										<h3><i class="ti-layout-list-post"></i><span class="counter">{{ \App\Models\Event::count() }}</span></h3>
									</div>
									<span class="cours-search-text">Events</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Form END -->
			@include('frontend.home.home_event')
			
			<!-- Testimonials -->
			<div class="section-area section-sp2 bg-fix ovbl-dark" style="background-image:url({{ asset('frontend/assets/images/background/bg1.jpg')}});">
                <div class="container">
					<div class="row">
						<div class="col-md-12 text-white heading-bx left">
							<h2 class="title-head text-uppercase">what people <span>say</span></h2>
						</div>
					</div>
					<div class="testimonial-carousel owl-carousel owl-btn-1 col-12 p-lr0">
					@php
						$testimonials = App\Models\Testimonial::latest()->get();
						@endphp
						@foreach($testimonials as $item)
						@if ($item->status == 1)
						<div class="item">
						
						 
							<div class="testimonial-bx">
							
								<div class="testimonial-thumb">
									<img src="{{ asset('frontend/assets/images/testimonials/pic2.jpg')}}" alt="">
								</div>
								<div class="testimonial-info">
									<h5 class="name">{{$item->name}}</h5>
								</div>
								<div class="testimonial-content">
									<p>{{$item->testimonial}}</p>
								</div>
								
							</div>
						
						</div>
						@endif
						@endforeach
					</div>
				</div>
			</div>
			<!-- Testimonials END -->
			
			
			
        </div>
		<!-- contact area END -->
 
@endsection