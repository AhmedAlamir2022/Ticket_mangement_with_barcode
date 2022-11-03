
@extends('frontend.main_master')


@section('main')

@section('title')
Black Market || Profile Page
@endsection
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url({{ asset('frontend/assets/images/banner/banner1.jpg') }});">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Profile</h1>
				 </div>
            </div>
        </div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li>Profile</li>
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
											<a class="nav-link active" href="{{ route('user.profile') }}"><i class="ti-pencil-alt"></i>Edit Profile</a>
										</li>
										<li class="nav-item">
											<a class="nav-link " href="{{ route('user.change.password') }}"><i class="ti-lock"></i>Change Password</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="{{ route('user.add.testimonial') }}"><i class="ti-book"></i>Post Testimonial</a>
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
						<form class="edit-profile" method="post" action="{{ route('store.profile1') }}" enctype="multipart/form-data">
               			@csrf
											<div class="">
												<div class="heading-bx left">
								<h2 class="title-head">Profile  <span>Information</span></h2>
							</div>
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-3 col-form-label">Full Name</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-8">
														<input style="border-radius: 15px;" class="form-control" type="text" value="{{ $userData->name }}" name="name">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-3 col-form-label">Email Address</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-8">
														<input style="border-radius: 15px;" class="form-control" type="email" readonly value="{{ $userData->email }}" name="email">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-3 col-form-label">Phone</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-8">
														<input style="border-radius: 15px;" class="form-control" type="number" value="{{ $userData->contact }}" name="contact">
														
													</div>
												</div>
												
												
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-3 col-form-label">Address</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-8">
														<textarea style="border-radius: 15px;" class="form-control" name="address">{{ $userData->address }}</textarea>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-3 col-form-label">Country</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-8">
														<input style="border-radius: 15px;" class="form-control" type="text" value="{{ $userData->country }}" name="country">
														
													</div>
												</div>
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-3 col-form-label">City</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-8">
														<input style="border-radius: 15px;" class="form-control" type="text" value="{{ $userData->city }}" name="city">
														
													</div>
												</div>
												<div class="form-group row">
                <label class="col-12 col-sm-3 col-md-3 col-lg-3 col-form-label">Profile Image </label>
                <div class="col-12 col-sm-9 col-md-9 col-lg-8">
       <input name="user_image" class="form-control" type="file"  id="image">
                </div>
            </div>
            <!-- end row -->

              <div class="form-group row">
                 <label class="col-12 col-sm-3 col-md-3 col-lg-3 col-form-label">  </label>
                <div class="col-12 col-sm-9 col-md-9 col-lg-8">
                    <img id="showImage" class="rounded avatar-lg" src="{{ (!empty($userData->user_image))? url('upload/admin_images/'.$userData->user_image):url('upload/no_image.jpg') }}" alt="Card image cap">
                </div>
            </div>
            <!-- end row -->
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-3 col-form-label">Added Date</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-8">
														<input style="border-radius: 15px;" class="form-control" type="text" value="{{ $userData->created_at }}" readonly>
														
													</div>
												</div>
												
											<div class="">
												<div class="">
													<div class="row">
														<div class="col-12 col-sm-3 col-md-3 col-lg-3">
														</div>
														<div class="col-12 col-sm-9 col-md-9 col-lg-">
															<button style="border-radius: 15px;" type="submit" class="btn">Update Profile</button>
															
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
						
								</div> 
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
		<!-- contact area END -->
		<script type="text/javascript">
    
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>
        @endsection
