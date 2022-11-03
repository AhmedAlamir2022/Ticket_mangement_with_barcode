@extends('frontend.main_master')


@section('main')

@section('title')
Black Market || Tickets Page
@endsection
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url({{ asset('frontend/assets/images/banner/banner3.jpg') }});">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Our Tickets</h1>
				 </div>
            </div>
        </div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li>Our Tickets</li>
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
							<div class="widget courses-search-bx placeani">
								<div class="form-group">
									<div class="input-group">
										<form action="search-results.php" method="post">
                            <input type="text" name="search2" class="form-control" placeholder="Search By Date">
                            <span><button class="btn btn-primary " type="submit" name="search3" ><i class="fa fa-search"></i>&nbsp; search</button></span>
                            
                        </form>
										
									</div>
								</div>
							</div>
							<div class="widget widget_archive">
                                <h5 class="widget-title style-1">All Events</h5>
                                <ul>
								@php

								$events = App\Models\Event::latest()->limit(10)->get();
								
								@endphp
								@foreach($events as $item)
                                    <li><a href="{{ route('category.ticket',$item->id) }}">{{ $item->event_title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <hr>
						</div>
						<div class="col-lg-9 col-md-8 col-sm-12">
							<div class="row">
							@foreach($tickets as $item)
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
											@if ($item->ticket_remark == 0)
											<p> Active </p>
											@else
											<p>Not Active </p>
											@endif
												
											</div>

											<div class="price">
												<h5>(KWD){{$item->ticket_price}}</h5>

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
            </div>
        </div>
		<!-- contact area END -->
		
		@endsection