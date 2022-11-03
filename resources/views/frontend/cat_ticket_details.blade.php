@extends('frontend.main_master')


@section('main')

@section('title')
Black Market || Event Tickets Page
@endsection
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url({{ asset('frontend/assets/images/banner/banner3.jpg')}});">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Event Tickets</h1>
				 </div>
            </div>
        </div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li>Event Tickets</li>
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
						
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="row">
                            @foreach($ticketpost as $item)
								<div class="col-md-6 col-lg-3 col-sm-6 m-b30">
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
            </div>
        </div>
		<!-- contact area END -->
		@endsection