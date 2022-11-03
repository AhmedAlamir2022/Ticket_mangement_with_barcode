@extends('frontend.main_master')


@section('main')

@section('title')
Black Market || Contact Page
@endsection
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url({{ asset('frontend/assets/images/banner/banner3.jpg') }});">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Contact Us </h1>
				 </div>
            </div>
        </div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li>Contact Us </li>
				</ul>
			</div>
		</div>
		<!-- Breadcrumb row END -->
	
        <!-- inner page banner -->
        <div class="page-banner contact-page section-sp2">
            <div class="container">
                <div class="row">
					<div class="col-lg-5 col-md-5 m-b30">
						<div class="bg-primary text-white contact-info-bx">
							<h2 class="m-b10 title-head">Contact <span>Information</span></h2>
							<div class="widget widget_getintuch">	
								<ul>
								@php

								$quires = App\Models\Quiery::latest()->limit(2)->get();
								
								@endphp
								@foreach($quires as $item)
									<li><i class="ti-location-pin"></i>{{ $item->country }}</li>
									<li><i class="ti-mobile"></i>+{{ $item->phone }} (24/7 Support Line)</li>
									<li><i class="ti-email"></i>{{ $item->email }}</li>
									@endforeach
								</ul>
							</div>
							<h5 class="m-t0 m-b20">Follow Us</h5>
							<ul class="list-inline contact-social-bx">
								<li><a href="#" class="btn outline radius-xl"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="btn outline radius-xl"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="btn outline radius-xl"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" class="btn outline radius-xl"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-7 col-md-7 " class="tab-pane" id="edit-profile">
						<form class="edit-profile" method="post" action="{{ route('store.message') }}">
						@csrf
											<div class="">
												<div class="heading-bx left">
								<h2 class="title-head">Get In <span>Touch</span></h2>
							</div>
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Full Name</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-7">
														<input style="border-radius: 15px;" class="form-control" name="name" type="text">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Email Address</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-7">
														<input style="border-radius: 15px;" class="form-control" name="email" type="email">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Phone</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-7">
														<input style="border-radius: 15px;" class="form-control" name="phone" type="text">
														
													</div>
												</div>
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Subject</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-7">
														<input style="border-radius: 15px;" class="form-control" name="subject" type="text">
													</div>
												</div>
												
												
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Message</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-7">
														<textarea style="border-radius: 15px;" class="form-control" name="message" id="message"></textarea>
													</div>
												</div>
												
											<div class="">
												<div class="">
													<div class="row">
														<div class="col-12 col-sm-3 col-md-3 col-lg-2">
														</div>
														<div class="col-12 col-sm-9 col-md-9 col-lg-7">
															<button style="border-radius: 15px;" type="submit" class="btn">Submit</button>
															
														</div>
													</div>
												</div>
											</div>
										</form>
					</div>
				</div>
            </div>
		</div>
        <!-- inner page banner END -->
		@endsection
