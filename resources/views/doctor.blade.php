<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Doctor - Home</title>

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
		<section class="top-header-bg doctor_header_bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6 mob-callout-icons">
						<div class="callout_icons">
							<div class="custsupport">
								<div class="cust-support">
									<p><a href="https://www.google.co.in/?gws_rd=ssl"><img src="{{ asset('images/patient-emergency-no.png') }}" alt="" /> <span>(732) 803-010-03</span></a></p>
								</div></a>
							</div>
							<div class="emailto">
								<div class="email-to">
									<p><a href="mailto:doctor@Online"><img src="{{ asset('images/patient-email.png') }}" alt="" /> <span>doctor@Online</span></a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-xs-12 text-right">
						<div class="row">
							<div class="col-md-12 text-right mob-icons">
								<div class="language language-selector">
									<select class="selectpicker" data-width="fit">
										<option data-content='<span class="flag-icon flag-icon-cn"></span> Chn'>Chn</option>
										<option data-content='<span class="flag-icon flag-icon-in"></span> Ind'>Ind</option>
									</select>
								</div>
								<a href="{{ url('login') }}" class="login_register doctor_login_register">Login / Register</a>
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
						<a class="#" href="/"><img src="{{ asset('images/logo1.png') }}" alt="" /></a>
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
												<a href="{{ url('patient') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">For Patient</a>
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
								<a href="#" class="search-icon"><img src="{{ asset('images/search-icon.jpg') }}" alt="" /></a>
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
				<div class="carousel-inner" role="listbox">				 
					<div class="item active">
						<img src="{{ asset('images/banner/doctor_banner.jpg') }}" alt="slide1">
						<div class="doctor_overlay">
							<div class="container">
								<div class="row">
									<div class="col-lg-12">
										<h1>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit. Curabitur hend...</strong></h1>
										<a href="{{ url('login') }}" class="create_profile">Create your free profile</a>
									</div>
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

	<section class="doctor_profile_bg2 animatedParent">
		<div class="container animated fadeInUpShort">
			<div class="row">
				<div class="col-md-7 col-sm-12">
					<div class="doctor_profile_left">
						<h2>Access to thousands of new <strong>patients across the globe</strong></h2>
						<h4>Through Doctor Online, the selected doctors can instantly connect with patients anytime, anywhere:</h4>
						<ul>
							<li>Easy patient discovery</li>
							<li>Guaranteed and flexible hours of consultation</li>
							<li>Answer medical queries & showcase your expertise</li>
							<li>Maximise your earnings with paid online consultations</li>
							<li>Offer online follow-ups to your clinic patients</li>
						</ul>
						<a href="#">Learn More</a>
					</div>
				</div>
				<div class="col-md-5 col-sm-12 text-center">
					<div class="doctor_profile_img_right patient_across">
						<img src="{{ asset('images/banner/patient_across.png') }}" alt="" />
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="doctor_profile_bg animatedParent">
		<div class="container animated fadeInUpShort">
			<div class="row">
				<div class="col-md-7 col-sm-12">
					<div class="doctor_profile_left">
						<h2>Substantial and <strong>immediate compensation</strong></h2>
						<h4>Doctor Insta removes the ups and downs of medical careers by providing substantial and immediate compensation.</h4>
						<ul>
							<li>Get paid quickly; Money directly deposited to your bank account</li>
							<li>Constant access to patients guarantees steady revenue streams</li>
							<li>Praesent tincidunt molestie libero mollis porta. Faucibus leo</li>
							<li>Ac aliquet magna. Vivamus ullamcorper mollis leo, at sagittis mi pellentesque quis. Vivamus enim metus, varius et nunc quis, elementu.</li>
							<li>Praesent tincidunt molestie libero mollis porta. Faucibus leo</li>
						</ul>
					</div>
				</div>
				<div class="col-md-5 col-sm-12 text-center">
					<div class="doctor_profile_img_right">
						<img src="{{ asset('images/banner/substancial_image.jpg') }}" alt="" />
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="doctor_profile_bg1 animatedParent">
		<div class="container animated fadeInUpShort">
			<div class="row">
				<div class="col-md-5 col-sm-12 text-center">
					<div class="doctor_profile_img_right patient_across">
						<img src="{{ asset('images/banner/patient_across.png') }}" alt="" />
					</div>
				</div>
				<div class="col-md-7 col-sm-12">
					<div class="doctor_profile_left">
						<h2>Access to thousands of new <strong>patients across the globe</strong></h2>
						<h4>Through Doctor Online, the selected doctors can instantly connect with patients anytime, anywhere:</h4>
						<ul>
							<li>Easy patient discovery</li>
							<li>Guaranteed and flexible hours of consultation</li>
							<li>Answer medical queries & showcase your expertise</li>
							<li>Maximise your earnings with paid online consultations</li>
							<li>Offer online follow-ups to your clinic patients</li>
						</ul>
						<a href="#">Learn More</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="doctor_profile_bg animatedParent">
		<div class="container animated fadeInUpShort">
			<div class="row">
				<div class="col-md-7 col-sm-12">
					<div class="doctor_profile_left">
						<h2>Access to thousands of new <strong>patients across the globe</strong></h2>
						<h4>Through Doctor Online, the selected doctors can instantly connect with patients anytime, anywhere:</h4>
						<ul>
							<li>Get paid quickly; Money directly deposited to your bank account</li>
							<li>Constant access to patients guarantees steady revenue streams</li>
							<li>Praesent tincidunt molestie libero mollis porta. Faucibus leo</li>
							<li>Praesent tincidunt molestie libero mollis porta. Faucibus leo</li>
						</ul>
						<img src="{{ asset('images/download_gp - black.png') }}" alt=""> <img src="{{ asset('images/download_app_store - black.png') }}" alt="">
					</div>
				</div>
				<div class="col-md-5 col-sm-12 text-center">
					<div class="doctor_profile_img_right patient_across">
						<img src="{{ asset('images/banner/immage.jpg') }}" alt="" />
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="contactdr_bg animatedParent">
		<div class="container animated fadeInUpShort">
			<div class="row">
				<div class="col-md-12">
					<h3>If you are a Doctors, Psychologists, Nutritionists and Dieticians: and interested in joining "Doctor online", then please submit your details with a subject line "Resume" to our HR <a href="mailto:contact@Doctoronline.com">contact@Doctoronline.com</a></h3>
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
							<li><a href="{{ url('login') }}">Patient Login/Register</a></li>
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

			$(window).resize(function() {

				var docheight = $('.doctor-header').height();
				$( '.banner' ).css("padding-top", docheight);
				if($(window).width()<=767) {
				$('.callout_icons').prependTo('.mob-icons');
				}
				else {
					$('.callout_icons').appendTo('.mob-callout-icons');
				}
			});
		});
	</script>
</body>
</html>
