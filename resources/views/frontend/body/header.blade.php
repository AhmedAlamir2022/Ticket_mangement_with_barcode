<header class="header rs-nav ">
		<div class="top-bar">
			<div class="container">
				<div class="row d-flex justify-content-between">
					<div class="topbar-left">
						<ul>
							<li><a href="{{ route('contact.me') }}"><i class="fa fa-question-circle"></i>Ask a Question</a></li>
							<li><a href="javascript:;"><i class="fa fa-envelope-o"></i>info@shopblackmarket.com</a></li>
						</ul>
					</div>
					<div class="topbar-right">
						<ul>
							@auth
							<li>Wlecome To Black Market</li>
							@else
							<li><a href="{{ route('login') }}">Login</a></li>
							<li><a href="{{ route('register') }}">Register</a></li>
							@endauth
							
							
							
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="sticky-header navbar-expand-lg">
            <div class="menu-bar clearfix">
                <div class="container clearfix">
					<!-- Header Logo ==== -->
					<div class="menu-logo"> 
						<a href="{{ url('/') }}"><img src="{{ asset('frontend/assets/logo.png') }}" alt=""></a>
					</div>
					<!-- Mobile Nav Button ==== -->
                    <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
					<!-- Author Nav ==== -->
                    <div class="secondary-menu">
                        <div class="secondary-inner">
                            <ul>
								<li><a href="javascript:;" class="btn-link"><i class="fa fa-facebook"></i></a></li>
								<li><a href="javascript:;" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="javascript:;" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
								<!-- Search Button ==== -->
								<li class="search-btn"><button id="quik-search-btn" type="button" class="btn-link"><i class="fa fa-search"></i></button></li>
							</ul>
						</div>
                    </div>
					<!-- Search Box ==== -->
                    <div class="nav-search-bar">
                        <form action="search-results.php" method="post">
                            <input type="text" name="search1" class="form-control" placeholder="Type to search">
                            <span><button class="btn btn-primary " type="submit" name="search" ><i class="fa fa-search"></i>&nbsp; search</button></span>
                            
                        </form>
						<span id="search-remove"><i class="ti-close"></i></span>
                    </div>
					<!-- Navigation Menu ==== -->
                    <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
						<div class="menu-logo">
							<a href="{{ url('/') }}"><img src="assets/logo.png" alt=""></a>
						</div>
						@auth
                        <ul class="nav navbar-nav">
							<li><a href="{{ url('/') }}">Home </a></li>
							<li><a href="{{ route('home.about') }}">About </a></li>
							<li><a href="{{ route('home.event') }}">Events </a></li>
							<li><a href="{{ route('home.ticket') }}">Tickets</a></li>
							<li><a href="{{ route('contact.me') }}">Contact Us</a></li>
							@php
							$id = Auth::user()->id;
							$userData = App\Models\User::find($id);
							@endphp
							<li><a href="javascript:;"> {{ $userData->name }} <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="{{ route('user.profile') }}">Profile</a></li>
									<li><a href="{{ route('user.change.password') }}">Change Password</a></li>
									<li><a href="{{ route('user.add.testimonial') }}">Post Testimonial</a></li>
									<li><a href="{{ route('user.mytickets') }}">My Tickets</a></li>
									<li><a href="{{ route('user.logout') }}">Logout</a></li>
								</ul>
							</li>
							
							
						</ul>
						@else
						<ul class="nav navbar-nav">
							<li><a href="{{ url('/') }}">Home </a></li>
							<li><a href="{{ route('home.about') }}">About </a></li>
							<li><a href="{{ route('home.event') }}">Events </a></li>
							<li><a href="{{ route('home.ticket') }}">Tickets</a></li>
							<li><a href="{{ route('contact.me') }}">Contact Us</a></li>
						</ul>
						@endauth
						<div class="nav-social-link">
							<a href="javascript:;"><i class="fa fa-facebook"></i></a>
							<a href="javascript:;"><i class="fa fa-google-plus"></i></a>
							<a href="javascript:;"><i class="fa fa-linkedin"></i></a>
						</div>
                    </div>
					<!-- Navigation Menu END ==== -->
                </div>
            </div>
        </div>
    </header>