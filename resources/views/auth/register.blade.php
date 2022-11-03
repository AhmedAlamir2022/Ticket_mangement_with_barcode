@extends('frontend.main_master')


@section('main')

@section('title')
Black Market || Register Page
@endsection
	
	<div class="account-form">
		<div class="account-head" style="background-image:url({{ asset('frontend/assets/images/background/bg2.jpg')}});">
			
		</div>
		<div class="account-form-inner">
			<div class="account-container">
				<div class="heading-bx left">
					<h2 class="title-head">Sign Up <span>Now</span></h2>
					<p>Login Your Account <a href="{{ route('login') }}">Click here</a></p>
				</div>	
				<form class="contact-bx" method="POST" action="{{ route('register') }}">
                @csrf
					<div class="row placeani">
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Your Name</label>
									<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
									@error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							 
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Your Email Address</label>
									<input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
									@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group"> 
									<label>Your Password</label>
									<input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

									@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group"> 
									<label>Confirm Password</label>
									<input name="password_confirmation" type="password" class="form-control" required autocomplete="new-password">
								</div>
							</div>
						</div>
						<div class="col-lg-12 m-b30">
							<button type="submit"  class="btn button-md">Sign Up</button>
						</div>
						
					</div>
				</form>
			</div>
		</div>
	</div>
    @endsection
