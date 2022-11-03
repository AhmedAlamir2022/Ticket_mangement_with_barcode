@extends('frontend.main_master')


@section('main')

@section('title')
Black Market || Ticket Details Page
@endsection
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url({{ asset('frontend/assets/assets/images/banner/banner2.jpg') }});">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Ticket Details</h1>
				 </div>
            </div>
        </div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li>Ticket Details</li>
				</ul>
			</div>
		</div>
		<!-- Breadcrumb row END -->
        <!-- inner page banner END -->
		<div class="content-block">
            <!-- About Us -->
			<div class="section-area section-sp1">
                <div class="container">
                	
					 <div class="row d-flex flex-row-reverse">
						<div class="col-lg-3 col-md-4 col-sm-12 m-b30">
							<div class="course-detail-bx">
								<div class="course-price">
									<h4 class="price">(KWD){{ $tickets->ticket_price }}</h4>
								</div>	
								
								
								
							</div>
						</div>
					
						<div class="col-lg-9 col-md-8 col-sm-12">
							<div class="courses-post">
								<div class="ttr-post-media media-effect">
									<a href="#"><img src="{{ asset($tickets->ticket_image) }}" alt=""></a>
								</div>
								<div class="ttr-post-info">
									<div class="ttr-post-title ">
										<h2 class="post-title">{{ $tickets->ticket_title }}</h2>
									</div>
									<div class="ttr-post-text">
										<p>{{ $tickets->ticket_description }}</p>
									</div>
								</div>
							</div>
							<div class="courese-overview" id="overview">
								<h4>Overview</h4>
								<div class="row">
									<div class="col-md-12 col-lg-12">
										<ul class="course-features">
											@if ($tickets->ticket_status == 0)
												<li><i class="ti-help-alt"></i> <span class="label">Added By</span> <span class="value">Admin</span></li>
											@elseif($tickets->ticket_status == 1)
												<li><i class="ti-help-alt"></i> <span class="label">Added By</span> <span class="value">Event Organizer</span></li>
											@endif
											<li><i class="ti-book"></i> <span class="label">Event</span> <span class="value">{{ $tickets['event']['event_title'] }}</span></li>
											<li><i class="ti-time"></i> <span class="label">Duration</span> <span class="value">{{ $tickets->ticket_duration }} hours</span></li>
											<li><i class="ti-time"></i> <span class="label">Date</span> <span class="value">{{ $tickets->ticket_date }} </span></li>
											<li><i class="ti-time"></i> <span class="label">Time</span> <span class="value">{{ $tickets->ticket_time}} </span></li>
											<li><i class="ti-smallcap"></i> <span class="label">Address</span> <span class="value">{{ $tickets->ticket_address }}</span></li>
											<li><i class="ti-user"></i> <span class="label">Seat Number</span> <span class="value">{{ $tickets->ticket_seatnumber }}</span></li>
											<li><i class="ti-check-box"></i> <span class="label">Country</span> <span class="value">{{ $tickets->ticket_country }}</span></li>
											@if ($tickets->ticket_remark == 0)
												<li><i class="ti-check-box"></i> <span class="label">Status</span> <span class="value">Active</span></li>
											@else
												<li><i class="ti-check-box"></i> <span class="label">Status</span> <span class="value">Not Active</span></li>
											@endif
										</ul>
									</div>
									
								</div>
							</div>
						</div>
						
					</div>
				</div>
            </div>
        </div>
		<!-- contact area END -->
		
		@endsection