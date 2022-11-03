@extends('frontend.main_master')


@section('main')

@section('title')
Black Market || About Page
@endsection
        <!-- Page Heading Box ==== -->
        <div class="page-banner ovbl-dark" style="background-image:url({{ asset('frontend/assets/images/banner/banner3.jpg') }});">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">About Us </h1>
				 </div>
            </div>
        </div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li>About Us</li>
				</ul>
			</div>
		</div>
		<!-- Page Heading Box END ==== -->
        <!-- Page Content Box ==== -->
		<div class="content-block">
			<!-- Why Choose ==== -->
			<div class="section-area bg-gray section-sp2 choose-bx">
				<div class="container">
					<div class="row">
						<div class="col-md-12 heading-bx text-center">
							<h2 class="title-head text-uppercase m-b0">Why Choose <span> Our Website</span></h2>
						</div>
					</div>
					<div class="row choose-bx-in">
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="service-bx">
								<div class="action-box">
									<img src="{{ asset('frontend/assets/images/andy-li-A_dJOYpxEVU-unsplash (1).jpg')}}" alt="">
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
									<img src="{{ asset('frontend/assets/images/alvaro-reyes-F7Bnis7IwjA-unsplash.jpg')}}" alt="">
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
									<img src="{{ asset('frontend/assets/images/thom-holmes-k-xKzowQRn8-unsplash.jpg')}}" alt="">
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
			<!-- Why Choose END ==== -->
			<!-- Company Status ==== -->
			<div class="section-area content-inner section-sp1">
                <div class="container">
                    <div class="section-content">
                         <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                                <div class="counter-style-1">
                                    <div class="text-primary">
										<span class="counter">{{ \App\Models\User::count() }}</span><span>+</span>
									</div>
									<span class="counter-text">Happy Customers</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                                <div class="counter-style-1">
									<div class="text-black">
										<span class="counter">{{ \App\Models\Ticket::count() }}</span><span>+</span>
									</div>
									<span class="counter-text">Tickets</span>
								</div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                                <div class="counter-style-1">
									<div class="text-primary">
										<span class="counter">{{ \App\Models\Event::count() }}</span><span>+</span>
									</div>
									<span class="counter-text">Events</span>
								</div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                                <div class="counter-style-1">
									<div class="text-black">
										<span class="counter">{{ \App\Models\Organizer::count() }}</span><span>+</span>
									</div>
									<span class="counter-text">Event organizers</span>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<!-- Company Stats END ==== -->
			<!-- Our Story ==== -->
			<div class="section-area bg-gray section-sp1 our-story">
				<div class="container">
					<div class="row align-items-center d-flex">
						<div class="col-lg-5 col-md-12 heading-bx">
							<h2 class="m-b10">Our Story</h2>
							<h5 class="fw4">It is a long established fact that a reade.</h5>
							<p>We offer some services you can see all upcoming events and you can book tickets for you and all your friends online and if you want to replace or buy any ticket .</p>
							<a href="#" class="btn">Read More</a>
						</div>
						<div class="col-lg-7 col-md-12 heading-bx p-lr">
							<div class="video-bx">
								<img src="assets/images/andy-li-A_dJOYpxEVU-unsplash (1).jpg" alt=""/>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Our Story END ==== -->
			<!-- Testimonials ==== -->
			<div class="section-area section-sp2">
				<div class="container">
					<div class="row">
						<div class="col-md-12 heading-bx left">
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
			<!-- Testimonials END ==== -->
        </div>
		<!-- Page Content Box END ==== -->
		@endsection
