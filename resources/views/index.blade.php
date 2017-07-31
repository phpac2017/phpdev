<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="_token" content="{{ csrf_token() }}" />

	<title>Home</title>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('css/animations.css') }}" rel="stylesheet">
	<link href="http://blazeworx.com/flags.css" rel="stylesheet">


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/css/bootstrap-select.min.css" type='text/css' />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css" />

	<!--script src="js/maxcdn-bootstrap.min.js"></script-->

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<div class="doctor-header">
		<section class="top-header-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6 mob-callout-icons">
						<div class="callout_icons">
							<div class="custsupport">
								<div class="cust-support">
									<p><a href="https://www.google.co.in/?gws_rd=ssl"><img src="images/emergency-no.png" alt="" /> <span>(732) 803-010-03</span></a></p>
								</div></a>
							</div>
							<div class="emailto">
								<div class="email-to">
									<p><a href="mailto:doctor@Online"><img src="images/email.png" alt="" /> <span>doctor@Online</span></a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-xs-12 text-right">
						<div class="row">
							<div class="col-md-12 text-right mob-icons">
								<div class="language language-selector">
									<select class="selectpicker" data-width="fit">
										<option data-content='<span class="flag-icon flag-icon-in"></span> English (US)'>English (US)</option>
										<option data-content='<span class="flag-icon flag-icon-cn"></span> Chinese'>Chinese</option>
									</select>
								</div>
								@if(Auth::guest())
									<a href="{{ url('login') }}" class="login_register">Login / Register</a>
								@else
									<div class="login_details">									
										<?php 

											$userid = Auth::user()->id;
											$imgsrc = call_user_func('getProfilePic', $userid);
											$role = Auth::user()->roles->first()->name;
											if($role==='admin'){
												$fold = 'admin/profile';
											}elseif($role==='doctor'){
												$fold = 'doctors/profile';
											}else{
												$fold = 'users/profile';
											}
										?>
										<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" data-submenu="" aria-expanded="false">{{ Auth::user()->name }}<span class="login-dropdown"><img src="{{ asset('uploads/').'/'.$fold.'/'.$imgsrc}}" alt="" width="40" height="40" /></span></button>
										<ul class="dropdown-menu">
											<li><div class="u-user-head"><img src="{{ asset('uploads/').'/'.$fold.'/'.$imgsrc}}" alt="" width="40" height="40" />
											<div class="u-name"><a href="#" class="user_name">{{ Auth::user()->name }}</a><div class="number">{{ Auth::user()->mobile_number }}</div></div></div>
											<li><a href="#">My Appointments</a></li>
											<li><a href="#">My Medical Records</a></li>
											<li><a href="#">My Online Consultation</a></li>
											<li><a href="#">My Feedback</a></li>
											<?php 
												$role = Auth::user()->roles->first()->name;
												if($role==='admin'){
													$goto = 'users';
												}else{
													$goto = 'profile';
												}
												$url = "$role/$goto";
											?>
											<li><a href="{{ url($url) }}">View / Update Profile</a></li>
											<li><a href="#">Change Password</a></li>
											<li><button type="button" class="btn-logout"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</button></li>
											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												{{ csrf_field() }}
											</form>
										</ul>
									</div>
								@endif
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="navigation">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-5 col-md-3 col-sm-3 col-xs-6 logo">
						<a class="#" href="/"><img src="{{asset('images/logo.png')}}" alt="" /></a>
					</div>
					<div class="col-lg-7 col-md-9 col-sm-9 col-xs-6 nav-links text-right">
						<div class="menu_links">
							<nav class="navbar navbar-default navbar-static-top">
								<div class="container-menu">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>
									<div id="navbar" class="navbar-collapse collapse">
										<ul class="nav navbar-nav">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">For Patient</a>
												<!--ul class="dropdown-menu sub-menus">
													<li><a href="#">DSP Mixers</a></li>
													<li><a href="#">Amplifiers</a></li>
													<li><a href="#">Microphones</a></li>
													<li><a href="#">Conference phones</a></li>
													<li><a href="#">Speakerphones</a></li>
												</ul-->
											</li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Download App</a>
											</li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">How its Work</a>
											</li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Services</a>
											</li>
										</ul>
									</div>
								</div>
							</nav>
							<div class="doctors-search-filter">	
								<div class="search-filter-in">
									<input type="text" class="form-control" placeholder="Search your term here...">
								</div>
								<a href="#" class="search-icon"><img src="{{asset('images/search-icon.jpg')}}" alt="" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Banner Slideshow -->
	<section id="intro" class="intro-section banner">
		<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
			<div class="slideshow">
				<div class="banner-links">
					<div class="container">
						<div class="row">
							<a href="{{ url('patient') }}">
								<div class="col-md-6 col-sm-6 col-xs-6 patient">
									<img src="{{asset('images/doctor-symbol.png')}}" alt="" /><h3>Patient</h3>
								</div>
							</a>
							<a href="{{ url('doctor') }}">
								<div class="col-md-6 col-sm-6 col-xs-6 doctor">
									<img src="{{asset('images/doctor-symbol.png')}}" alt="" /><h3>Doctor</h3>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="carousel-inner" role="listbox">				 
					<div class="item active">
						<img src="{{asset('images/banner/banner-01.jpg')}}" alt="slide1">
						<div class="slider-overlay">
							<div class="row">
								<div class="col-lg-12">
									<h1><strong>Face to face consultation can be immediate</strong> & any where, via computers terminals and smart hand phones.</h1>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="{{asset('images/banner/banner-01.jpg')}}" alt="slide2">
						<div class="slider-overlay">
							<div class="row">
								<div class="col-lg-12">
									<h1><strong>Face to face consultation can be immediate</strong> & any where, via computers terminals and smart hand phones.</h1>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="{{asset('images/banner/banner-01.jpg')}}" alt="slide3">
						<div class="slider-overlay">
							<div class="row">
								<div class="col-lg-12">
									<h1><strong>Face to face consultation can be immediate</strong> & any where, via computers terminals and smart hand phones.</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</section>


	<section class="who-we-are-bg animatedParent">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-6 col-sm-12">
					<div class="who-we-are animated fadeInUpShort">
						<h1><span>Who</span> We are</h1>
						<p><strong>Dr. Online is a platform via the internet or smart handphone build for patients and doctors where patients can have face to face consultation via video conference with doctors or team of doctors to be diagnosed, treated and allow doctors to manage patients’ post medical conditions.</strong> Drugs and medication can be delivered within a short period to patients designated location usually their homes. This platform surely would also provide opportunities for patients from anywhere be it the most remote locations to have access to the best medical care from anywhere in the world.</p>
						<p>This platform would also allow patients to have the best available drugs and medication and suppliers able to deliver drugs and medication directly to patients based on shortest possible time and longest possible distance. This would allow the cost of drugs and medication be at the lowest possible by taking away all the wholesalers and drugs dispensary companies.</p>
					</div>
				</div>
				<div class="col-lg-5 col-md-6 col-sm-12 text-center">
					<div class="who-we-are-img animated fadeInUpShort">
						<img src="{{asset('images/about.jpg')}}" alt="slide2">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="our-commitments-bg animatedParent">
		<div class="container">
			<h1><span>Our</span> commitments</h1>
			<div id="myCarousel1" class="carousel slide carousel-fade" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel1" data-slide-to="1"></li>
					<li data-target="#myCarousel1" data-slide-to="2"></li>
				</ol>
				<div class="slideshow">
					<div class="carousel-inner" role="listbox">				 
						<div class="item active">
							<div class="commitments-overlay">
								<div class="row">
									<div class="col-md-6 animated fadeInUpShort">
										<div class="commitments-points">
											<ul>
												<li>To reduce the cost of medical services and medical insurance to at least 30%</li>
												<li>To Increase  doctors professional fee and improved working environment</li>
												<li>To allow more people to have access to better medical services for the poor and remote areas</li>
												<li>To improve the method of delivery of medical services</li>
											</ul>
										</div>
									</div>
									<div class="col-md-6 animated fadeInUpShort">
										<div class="commitments-points">
											<ul>
												<li>To be social responsible and protects the environment</li>
												<li>To plough back profits for research and development for the medical industry</li>
												<li>To allocate a certain amount of the profits for charities and the poor</li>
												<li>To allocate a certain amount of the profits for charities and the poor</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="commitments-overlay">
								<div class="row">
									<div class="col-md-6 animated fadeInUpShort">
										<div class="commitments-points">
											<ul>
												<li>To reduce the cost of medical services and medical insurance to at least 30%</li>
												<li>To Increase  doctors professional fee and improved working environment</li>
												<li>To allow more people to have access to better medical services for the poor and remote areas</li>
												<li>To improve the method of delivery of medical services</li>
											</ul>
										</div>
									</div>
									<div class="col-md-6 animated fadeInUpShort">
										<div class="commitments-points">
											<ul>
												<li>To be social responsible and protects the environment</li>
												<li>To plough back profits for research and development for the medical industry</li>
												<li>To allocate a certain amount of the profits for charities and the poor</li>
												<li>To allocate a certain amount of the profits for charities and the poor</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="commitments-overlay">
								<div class="row">
									<div class="col-md-6 animated fadeInUpShort">
										<div class="commitments-points">
											<ul>
												<li>To reduce the cost of medical services and medical insurance to at least 30%</li>
												<li>To Increase  doctors professional fee and improved working environment</li>
												<li>To allow more people to have access to better medical services for the poor and remote areas</li>
												<li>To improve the method of delivery of medical services</li>
											</ul>
										</div>
									</div>
									<div class="col-md-6 animated fadeInUpShort">
										<div class="commitments-points">
											<ul>
												<li>To be social responsible and protects the environment</li>
												<li>To plough back profits for research and development for the medical industry</li>
												<li>To allocate a certain amount of the profits for charities and the poor</li>
												<li>To allocate a certain amount of the profits for charities and the poor</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="our-specilisation-bg">
		<div class="container">
			<h1><span>Our</span> Specialisation</h1>
			<div class="row">
				<div class="our-specilisation animatedParent">
					<div class="col-md-3 col-sm-4 col-xs-6 animated fadeInUpShort">
						<a href="#">
							<img src="images/specilisation.jpg" alt="" />
							<h5>Urology</h5>
						</a>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6 animated fadeInUpShort">
						<a href="#">
							<img src="images/specilisation.jpg" alt="" />
							<h5>Urology</h5>
						</a>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6 animated fadeInUpShort">
						<a href="#">
							<img src="images/specilisation.jpg" alt="" />
							<h5>Urology</h5>
						</a>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6 animated fadeInUpShort">
						<a href="#">
							<img src="images/specilisation.jpg" alt="" />
							<h5>Urology</h5>
						</a>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6 animated fadeInUpShort">
						<a href="#">
							<img src="images/specilisation.jpg" alt="" />
							<h5>Urology</h5>
						</a>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6 animated fadeInUpShort">
						<a href="#">
							<img src="images/specilisation.jpg" alt="" />
							<h5>Urology</h5>
						</a>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6 animated fadeInUpShort">
						<a href="#">
							<img src="images/specilisation.jpg" alt="" />
							<h5>Urology</h5>
						</a>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6 animated fadeInUpShort">
						<a href="#">
							<img src="images/specilisation.jpg" alt="" />
							<h5>Urology</h5>
						</a>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6 animated fadeInUpShort">
						<a href="#">
							<img src="images/specilisation.jpg" alt="" />
							<h5>Urology</h5>
						</a>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6 animated fadeInUpShort">
						<a href="#">
							<img src="images/specilisation.jpg" alt="" />
							<h5>Urology</h5>
						</a>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6 animated fadeInUpShort">
						<a href="#">
							<img src="images/specilisation.jpg" alt="" />
							<h5>Urology</h5>
						</a>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6 animated fadeInUpShort">
						<a href="#">
							<img src="images/specilisation.jpg" alt="" />
							<h5>Urology</h5>
						</a>
					</div>
					<button class="btn btn-specilisation">View all our Specialisation</button>
				</div>
			</div>
		</div>
	</section>

	<section class="our-services-bg">
		<div class="container">
			<h1><span>Our</span> Services</h1>
			<div class="row">
				<div class="our-services animatedParent">
					<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 animated fadeInUpShort">
						<a href="#">
							<img src="images/services.png" alt="" />
							<h5>Consultation with Doctors</h5>
						</a>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 animated fadeInUpShort">
						<a href="#">
							<img src="images/services.png" alt="" />
							<h5>Consultation with Doctors</h5>
						</a>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 animated fadeInUpShort">
						<a href="#">
							<img src="images/services.png" alt="" />
							<h5>Consultation with Doctors</h5>
						</a>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 animated fadeInUpShort">
						<a href="#">
							<img src="images/services.png" alt="" />
							<h5>Consultation with Doctors</h5>
						</a>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 animated fadeInUpShort">
						<a href="#">
							<img src="images/services.png" alt="" />
							<h5>Consultation with Doctors</h5>
						</a>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 animated fadeInUpShort">
						<a href="#">
							<img src="images/services.png" alt="" />
							<h5>Consultation with Doctors</h5>
						</a>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 animated fadeInUpShort">
						<a href="#">
							<img src="images/services.png" alt="" />
							<h5>Consultation with Doctors</h5>
						</a>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 animated fadeInUpShort">
						<a href="#">
							<img src="images/services.png" alt="" />
							<h5>Consultation with Doctors</h5>
						</a>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 animated fadeInUpShort">
						<a href="#">
							<img src="images/services.png" alt="" />
							<h5>Consultation with Doctors</h5>
						</a>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 animated fadeInUpShort">
						<a href="#">
							<img src="images/services.png" alt="" />
							<h5>Consultation with Doctors</h5>
						</a>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 animated fadeInUpShort">
						<a href="#">
							<img src="images/services.png" alt="" />
							<h5>Consultation with Doctors</h5>
						</a>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 animated fadeInUpShort">
						<a href="#">
							<img src="images/services.png" alt="" />
							<h5>Consultation with Doctors</h5>
						</a>
					</div>
					<button class="btn btn-services">View al our Services</button>
					<button class="btn btn-online-dr">See a online doctor today</button>
				</div>
			</div>
		</div>
	</section>

	<section class="footer-top-bg animatedParent">
		<div class="container animated fadeInUpShort">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="need-help">
						<h1>Need Help?</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut mollitia, quidem praesentium deserunt similique.</p>
						<button class="btn btn-online-dr">See a online doctor today</button>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="download-the-app">
						<h1>Download the App</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut mollitia, quidem praesentium deserunt similique.</p>
						<img src="images/download_gp.png" alt="" /> <img src="images/download_app_store.png" alt="" />
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer class="animatedParent">
		<div class="container animated fadeInUpShort">
			<div class="row">
				<div class="footer-menu">
					<div class="col-md-3 col-sm-3 col-xs-12">
						<h5>Patients</h5>
						<ul>
							<li><a href="#">Find a doctor</a></li>
							<li><a href="#">Patient Guide</a></li>
							<li><a href="#">Health Tips</a></li>
							<li><a href="#">Patient Testimonials</a></li>
							<li><a href="#">Mobile App</a></li>
							<li><a href="#">Patient Login/Register</a></li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-12">
						<h5>For Business</h5>
						<ul>
							<li><a href="#">A Trusted partner</a></li>
							<li><a href="#">Organizational Benefits</a></li>
							<li><a href="#">Cllient Testimonials</a></li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-12">
						<h5>Services</h5>
						<ul>
							<li><a href="#">Insurance</a></li>
							<li><a href="#">Online Privacy</a></li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-12">
						<h5>About</h5>
						<ul>
							<li><a href="#">Mission, Vission & Values</a></li>
							<li><a href="#">History</a></li>
							<li><a href="#">Leadership</a></li>
							<li><a href="#">Terms & Conditions</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-12">
					<div class="footer-icons">
						<p><a href="#" class="foot-emergency-no">(732) 803-010-03</a><a href="#" class="foot-cust-support">(732) 803-010-03</a><a href="mailto:doctor@Online.com" class="foot-email">doctor@Online.com</a></p>
						<h5>Stay Connected to Doctor Online</h5>
						<div class="footer-social-icons">
							<p><a href="#" class="fb">Facebook</a><a href="#" class="twit">Twitter</a><a href="#" class="gplus">Google Plus</a><a href="#" class="linkedin">LinkedIn</a></p>
						</div>
						<h5>Copyright @ 2017 Doctor online All Rights reserved</h5>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<p id="back-top">
		<a href="#top"><span>&nbsp;</span></a>
	</p>

	<!-- jQuery -->
	<script src="{{ asset('js/jquery.js') }}"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="{{ asset('js/bootstrap.min.js') }}"></script> 
	<script src="http://blazeworx.com/jquery.flagstrap.min.js"></script>
	<!-- Language Selection -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/js/bootstrap-select.min.js"></script>
	<script src="{{ asset('js/css3-animate-it.js') }}"></script>

	<script>
	$(document).ready(function(){

	$("#back-top").hide();
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			$('#back-top').fadeIn();
		} else {
			$('#back-top').fadeOut();
		}
	});

	// scroll body to 0px on click
	$('#back-top a').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 800);
		return false;
	});

	$('.search-filter-in').hide();
	$('.doctors-search-filter a').click(function (e) {
		$('.search-filter-in').stop(true).slideToggle();
	});
	$(document).click(function (e) {
		if (!$(e.target).closest('.doctors-search-filter a, .search-filter-in').length) {
		$('.search-filter-in').stop(true).slideUp();
		}
	});

	if($(window).width()<=767) {
		$('.callout_icons').prependTo('.mob-icons');
	}
	else {
		$('.callout_icons').appendTo('.mob-callout-icons');
	}

	var docheight = $('.doctor-header').height();
	$( '.banner' ).css("padding-top", docheight);

	<!-- Language Selection -->
	$(function(){
		$('.selectpicker').selectpicker();
	});

	widthheight();
	$(window).resize(function() {
		widthheight();
		var docheight = $('.doctor-header').height();
		$( '.banner' ).css("padding-top", docheight);
		if($(window).width()<=767) {
		$('.callout_icons').prependTo('.mob-icons');
		}
		else {
			$('.callout_icons').appendTo('.mob-callout-icons');
		}
	});

	function widthheight() {
		var finalwidth = Math.round ($(window).width() - $( '.container' ).width()) / 2;
		$( '.slider-overlay' ).css("left", finalwidth);
	}
	});
	</script>
</body>
</html>
