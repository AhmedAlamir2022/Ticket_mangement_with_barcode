@php

$events = App\Models\Event::latest()->limit(10)->get();
 
@endphp
<div class="section-area section-sp2">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center heading-bx">
							<h2 class="title-head m-b0">Our <span>Events</span></h2>
							<p class="m-b0">All Events that avalible in this time </p>
						</div>
					</div>
					<div class="row">
					<div class="upcoming-event-carousel owl-carousel owl-btn-center-lr owl-btn-1 col-12 p-lr0  m-b30">
                    @foreach($events as $item)
						<div class="item">

							<div class="event-bx">
								
								<div class="action-box">
									<img src="{{ asset($item->event_image) }}" alt="">
								</div>
								<div class="info-bx d-flex">
									<div class="event-info">
										<h4 class="event-title"><a href="{{ route('category.ticket',$item->id) }}">{{ $item->event_title }}</a></h4>
										<ul class="media-post">
											<li><a href="#"><i class="fa fa-clock-o"></i> </a>{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</li>
											<li><i class="fa fa-map-marker"></i>{{ $item['category']['event_category'] }} </li>
										</ul>
										<p>{{ $item->event_description }}</p>
									</div>
								</div>
							</div>
						</div>
                        @endforeach
						 
					</div>
					</div>
					<div class="text-center">
						<a href="{{ route('home.event') }}" class="btn">View All Event</a>
					</div>
				</div>
			</div>