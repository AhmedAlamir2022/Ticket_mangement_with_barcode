 <footer>
        <div class="footer-top">
			<div class="pt-exebar">
				<div class="container">
					 
				</div>
			</div>
            <div class="container">
                <div class="row">
					<div class="col-lg-6 col-md-12 col-sm-12 footer-col-4">
                        <div class="widget">
                            <h5 class="footer-title">Sign Up For A Newsletter</h5>
                            <div class="subscribe-form m-b20">
								<h5>Put youe email address to get last news</h5>
							<form class="cours-search" method="post" action="{{ route('store.subscribe') }}">
							@csrf
								<div class="input-group">
									<input name="email" type="email" class="form-control" placeholder="Email Address	">
									<div class="input-group-append">
										<button class="btn" type="submit">Go</button> 
									</div>
								</div>
							</form>
							</div>
                        </div>
                    </div>
					<div class="col-12 col-lg-5 col-md-7 col-sm-12">
						<div class="row">
							<div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title">Company</h5>
									<ul>
										<li><a href="{{ url('/') }}">Home</a></li>
										<li><a href="{{ route('home.about') }}">About</a></li>
										
									</ul>
								</div>
							</div>
							<div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title">Get In Touch</h5>
									<ul>
										<li><a href="{{ route('contact.me') }}">Contact</a></li>

									</ul>
								</div>
							</div>
							<div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title">Events & Tickets</h5>
									<ul>
										<li><a href="{{ route('home.ticket') }}">Tickets</a></li>
										<li><a href="{{ route('home.event') }}">Events</a></li>
									</ul>
								</div>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
