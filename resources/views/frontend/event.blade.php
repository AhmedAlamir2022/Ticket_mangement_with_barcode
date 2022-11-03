@extends('frontend.main_master')


@section('main')

@section('title')
Black Market || Event Page
@endsection
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url({{ asset('frontend/assets/images/banner/banner2.jpg') }});">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Events</h1>
				 </div>
            </div>
        </div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li>Events</li>
				</ul>
			</div>
		</div>
		<!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="content-block">
			<!-- Portfolio  -->
			<div class="section-area section-sp1 gallery-bx">
				<div class="container">
					<div class="feature-filters clearfix center m-b40">
						<ul class="filters" data-toggle="buttons">
							<li data-filter="" class="btn active">
								<input type="radio">
								<a href="#"><span>All</span></a> 
							</li>
							 
						</ul>
					</div>
					
					<div class="clearfix">
					
						<ul id="masonry" class="ttr-gallery-listing magnific-image row">
						@foreach($allevents as $item)
							<li class="action-card col-lg-6 col-md-6 col-sm-12 happening">
								<div class="event-bx m-b30">
									<div class="action-box">
										<img src="{{ asset($item->event_image) }}" alt="image">
									</div>
									<div class="info-bx d-flex">
										<div class="event-info">
											<h4 class="event-title"><a href="{{ route('category.ticket',$item->id) }}">{{$item->event_title}}</a></h4>
											<ul class="media-post">
												<li><i class="fa fa-clock-o"></i> {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</li>
												<li><i class="fa fa-map-marker"></i> {{ $item['category']['event_category'] }}</li>
											</ul>
											<p>{!! $item->event_description !!}</p>
										</div>
									</div>
								</div>
							</li>
							@endforeach
						</ul>
						
					</div>
				</div>
			</div>
        </div>
		<!-- contact area END -->
		@endsection