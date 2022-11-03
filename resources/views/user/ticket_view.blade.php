@extends('frontend.main_master')


@section('main')

@section('title')
Black Market || Ticket Details Page
@endsection
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url({{ asset('frontend/assets/images/banner/banner3.jpg')}});">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white"> Ticket Details</h1>
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
					 <div class="row">
						
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="row">
                            <div class="col-lg-9 col-md-8 " class="tab-pane" id="edit-profile">
                            <form class="edit-profile" method="post" action="{{ route('book.userticket', $tickets->id) }}">
               			@csrf
						   <input type="hidden" name="id" value="{{ $tickets->id }}">
											<div class="">
												<div class="heading-bx left">
								<h2 class="title-head">Ticket  <span>Information</span></h2>
							</div>
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-3 col-form-label">Ticket Title</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-8">
														<input style="border-radius: 15px;" class="form-control" type="text" value="{{ $tickets->ticket_title }}" readonly>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-3 col-form-label">Ticket Event</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-8">
														<input style="border-radius: 15px;" class="form-control" type="email" readonly value="{{ $tickets['event']['event_title'] }}">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-3 col-form-label">Ticket Price</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-8">
														<input style="border-radius: 15px;" class="form-control" type="number" value="{{ $tickets->ticket_price }}" readonly>
														
													</div>
												</div>
												
												
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-3 col-form-label">Ticket Date</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-8">
														<input style="border-radius: 15px;" class="form-control" type="text" value="{{ $tickets->ticket_date }}" readonly>
													</div>
												</div>

												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-3 col-form-label">Ticket Duration</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-8">
														<input style="border-radius: 15px;" class="form-control" type="text" value="{{ $tickets->ticket_duration }}" readonly>
													</div>
												</div>
                                                <div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-3 col-form-label">Ticket Time</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-8">
														<input style="border-radius: 15px;" class="form-control" type="text" value="{{ $tickets->ticket_time }}" readonly>
													</div>
												</div>
                                                <div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-3 col-form-label">Ticket Seat Number</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-8">
														<input style="border-radius: 15px;" class="form-control" type="text" value="{{ $tickets->ticket_seatnumber }}" readonly>
													</div>
												</div>
                                                <div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-3 col-form-label">Ticket Country</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-8">
														<input style="border-radius: 15px;" class="form-control" type="text" value="{{ $tickets->ticket_country }}" readonly>
													</div>
												</div>
                                                <div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-3 col-form-label">Ticket Address</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-8">
														<input style="border-radius: 15px;" class="form-control" type="text" value="{{ $tickets->ticket_address }}" readonly>
													</div>
												</div>

                                                <input style="border-radius: 15px;" class="form-control" type="hidden" value="1" name="ticket_remark">
												
											<div class="">
												<div class="">
													<div class="row">
														<div class="col-12 col-sm-3 col-md-3 col-lg-3">
														</div>
														<div class="col-12 col-sm-9 col-md-9 col-lg-">
															<button style="border-radius: 15px;" type="submit" class="btn">Book</button>
															
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
		<!-- contact area END -->
		@endsection