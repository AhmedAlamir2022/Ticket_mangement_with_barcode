
@extends('frontend.main_master')


@section('main')

@section('title')
Black Market || Post Testimonial Page
@endsection
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url({{ asset('frontend/assets/images/banner/banner1.jpg') }});">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Post Testimonial</h1>
				 </div>
            </div>
        </div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li>Testimonials</li>
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
											<a class="nav-link active" href="{{ route('user.add.testimonial') }}"><i class="ti-book"></i>Post Testimonial</a>
										</li>
										<li class="nav-item">
											<a class="nav-link"  href="{{ route('user.mytickets') }}"><i class="ti-bookmark-alt"></i>My Tickets </a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="{{ route('user.logout') }}"><i class="ti-bookmark-alt"></i>Logout </a>
										</li>
										
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-9 col-md-8 " class="tab-pane" id="edit-profile">
							
						<form method="post" action="{{ route('store.testimonial') }}">
                        @csrf
											<div class="">
												<div class="heading-bx left">
								<h2 class="title-head">Post New  <span>Testimonial</span></h2>
							</div>
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-3 col-form-label">Testimonial</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-8">
														<textarea style="border-radius: 15px;" rows="6" class="form-control" name="testimonial"></textarea>
														
													</div>
												</div>
											<div class="">
												<div class="">
													<div class="row">
														<div class="col-12 col-sm-3 col-md-3 col-lg-3">
														</div>
														<div class="col-12 col-sm-9 col-md-9 col-lg-">
															<button style="border-radius: 15px;" type="submit" class="btn">Post</button>
															
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
									<!-- Testimonials ==== -->
									<hr>

									<div class="testimonial-carousel owl-carousel owl-btn-1 col-12 p-lr0">
									@php
						$testimonials = App\Models\Testimonial::latest()->get();
						@endphp
						@foreach($testimonials as $item)
						@if ($item->email == Auth::user()->email)
						<div class="item">
							<div class="testimonial-bx">
								<div class="testimonial-thumb">
									<img src="{{ asset('frontend/assets/images/testimonials/pic2.jpg')}}" alt="">
								</div>
								<div class="testimonial-info">
									<h5 class="name">{{$item->name}}</h5>
								</div>
								<div class="testimonial-content">
                                
									<p>{{$item->testimonial}} </p>
								</div><br>
								@if ($item->status == 1)
								<p><b>Status : </b><button class="btn btn-success">Active</button> </p>
								@elseif ($item->status == 0)
                                <p><b>Status : </b><button class="btn btn-warning">Waiting for approval</button></p>
                                @else
                               <p><b>Status : </b><button class="btn btn-danger">Cancelled </button> </p>
							   @endif
                             
                             <p><b>Posting Date : </b>{{$item->created_at}} </p>
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
        </div>
		<!-- contact area END -->
        @endsection
