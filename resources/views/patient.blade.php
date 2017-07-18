<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Home - Patient</title>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('css/animations.css') }}" rel="stylesheet">
	<link href="http://blazeworx.com/flags.css" rel="stylesheet">
	<link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">

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
	<section class="top-header-bg patient_bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6 mob-callout-icons">
					<div class="callout_icons">
						<div class="custsupport">
							<div class="cust-support">
								<p><a href="https://www.google.co.in/?gws_rd=ssl"><img src="images/patient-emergency-no.png" alt="" /> <span>(732) 803-010-03</span></a></p>
							</div></a>
						</div>
						<div class="emailto">
							<div class="email-to">
								<p><a href="mailto:doctor@Online"><img src="images/patient-email.png" alt="" /> <span>doctor@Online</span></a></p>
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
							<a href="#" class="login_register patient_login_register">Login / Register</a>
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
					<a class="#" href="/"><img src="images/logo1.png" alt="" /></a>
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
							<a href="#" class="search-icon"><img src="images/search-icon.jpg" alt="" /></a>
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
					<img src="images/banner/banner_patient.jpg" alt="slide1">
					<div class="slider-overlay patient-overlay">
						<div class="row">
							<div class="col-lg-12">
								<h1><strong>Lorem ipsum dolor sit amet,</strong> consectetur adipiscing elit. Curabitur hend...</h1>
								<a href="#" class="btn patient_btn">Self Assesment</a>
								<a href="{{ url('book_appointment') }}" class="btn patient_btn">Appointment Now</a>
								<a href="#" class="btn consult_btn">Consult Now</a>
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

<section class="patient_banner_footer animatedParent">
	<div class="container animated fadeInUpShort">
		<div class="row">
			<div class="col-md-2 col-sm-4 col-xs-6">
				<div class="patient_banner_footer_wrapper">
					<a href="#" class="health_insur"><p>Health Insurance</p></a>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6">
				<div class="patient_banner_footer_wrapper">
					<a href="#" class="online_bill_payment"><p>Online Bill Pay</p></a>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6">
				<div class="patient_banner_footer_wrapper">
					<a href="#" class="medical_records"><p>Medical Records</p></a>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6">
				<div class="patient_banner_footer_wrapper">
					<a href="#" class="order_medicines"><p>Order Medicines</p></a>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6">
				<div class="patient_banner_footer_wrapper">
					<a href="#" class="test"><p>Book Test</p></a>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6">
				<div class="patient_banner_footer_wrapper">
					<a href="#" class="health_tips"><p>Health Tips</p></a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="our_process_bg animatedParent">
	<div class="container animated fadeInUpShort">
		<h1><span>Our</span> Process</h1>
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="process_steps">
					<img src="images/icon-1.png" alt="" />
					<h6>Step 1</h6>
					<h5>Set Up Your Account</h5>
					<p>Just login/register to set up your account or download the app on your smartphone or mobile device. You can also call us for account assistance 24/7/365.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="process_steps">
					<img src="images/icon-1.png" alt="" />
					<h6>Step 2</h6>
					<h5>Contact Doctor Online</h5>
					<p>After reviewing your electronic health record, you’ll be connected with a Doctor online in an average of 6 minutes and there’s no time limit on your eVisit.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="process_steps">
					<img src="images/icon-1.png" alt="" />
					<h6>Step 3</h6>
					<h5>Get Treatment</h5>
					<p>Your Doctor online will provide personalized, high quality care, from diagnosis to treatment. Our board-certified ER physicians have earned a 98% patient satisfaction rating.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="process_steps">
					<img src="images/icon-1.png" alt="" />
					<h6>Step 4</h6>
					<h5>ePrescriptions Go Right to Your Pharmacy</h5>
					<p>Any medications you might need will be sent electronically to the pharmacy you choose. Every eVisit is posted in your account and added to your electronic health record.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="process_steps">
					<img src="images/icon-1.png" alt="" />
					<h6>Step 5</h6>
					<h5>We Always Follow Up</h5>
					<p>We’ll follow-up with you within 72 hours to be sure you’re happy with our service. If you’re still not feeling well, let us know and we’ll connect you with the doctor on call.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="process_steps">
					<img src="images/icon-1.png" alt="" />
					<h6>Step 6</h6>
					<h5>Loreum ipsum</h5>
					<p>Just login/register to set up your account or download the app on your smartphone or mobile device. You can also call us for account assistance 24/7/365.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="our_services_bg animatedParent">
	<div class="container animated fadeInUpShort">
		<h1><span>Our</span> Services</h1>
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="our_services_description">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-3 text-right">
							<span class="icon-img icon-one"></span>
						</div>
						<div class="col-md-9 col-sm-8 col-xs-9">
							<h5>Dental Surgery</h5>
							<p>Donec vel mi sem. Vivamus dapibus rutrum mi ut aliquam. In hac habitasse platea dictumst. Integer sagittis neque a tortor tempor in porta sem vulputate.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="our_services_description">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-3 text-right">
							<span class="icon-img icon-two"></span>
						</div>
						<div class="col-md-9 col-sm-8 col-xs-9">
							<h5>Pathology</h5>
							<p>Donec vel mi sem. Vivamus dapibus rutrum mi ut aliquam. In hac habitasse platea dictumst. Integer sagittis neque a tortor tempor in porta sem vulputate.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="our_services_description">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-3 text-right">
							<span class="icon-img icon-three"></span>
						</div>
						<div class="col-md-9 col-sm-8 col-xs-9">
							<h5>Pharmacology</h5>
							<p>Donec vel mi sem. Vivamus dapibus rutrum mi ut aliquam. In hac habitasse platea dictumst. Integer sagittis neque a tortor tempor in porta sem vulputate.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="our_services_description">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-3 text-right">
							<span class="icon-img icon-four"></span>
						</div>
						<div class="col-md-9 col-sm-8 col-xs-9">
							<h5>Orthopaedics</h5>
							<p>Donec vel mi sem. Vivamus dapibus rutrum mi ut aliquam. In hac habitasse platea dictumst. Integer sagittis neque a tortor tempor in porta sem vulputate.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="our_services_description">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-3 text-right">
							<span class="icon-img icon-five"></span>
						</div>
						<div class="col-md-9 col-sm-8 col-xs-9">
							<h5>Urology</h5>
							<p>Donec vel mi sem. Vivamus dapibus rutrum mi ut aliquam. In hac habitasse platea dictumst. Integer sagittis neque a tortor tempor in porta sem vulputate.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="our_services_description">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-3 text-right">
							<span class="icon-img icon-six"></span>
						</div>
						<div class="col-md-9 col-sm-8 col-xs-9">
							<h5>Nursing</h5>
							<p>Donec vel mi sem. Vivamus dapibus rutrum mi ut aliquam. In hac habitasse platea dictumst. Integer sagittis neque a tortor tempor in porta sem vulputate.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="our_services_description">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-3 text-right">
							<span class="icon-img icon-four"></span>
						</div>
						<div class="col-md-9 col-sm-8 col-xs-9">
							<h5>Orthopaedics</h5>
							<p>Donec vel mi sem. Vivamus dapibus rutrum mi ut aliquam. In hac habitasse platea dictumst. Integer sagittis neque a tortor tempor in porta sem vulputate.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="our_services_description">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-3 text-right">
							<span class="icon-img icon-five"></span>
						</div>
						<div class="col-md-9 col-sm-8 col-xs-9">
							<h5>Urology</h5>
							<p>Donec vel mi sem. Vivamus dapibus rutrum mi ut aliquam. In hac habitasse platea dictumst. Integer sagittis neque a tortor tempor in porta sem vulputate.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="our_services_description">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-3 text-right">
							<span class="icon-img icon-six"></span>
						</div>
						<div class="col-md-9 col-sm-8 col-xs-9">
							<h5>Nursing</h5>
							<p>Donec vel mi sem. Vivamus dapibus rutrum mi ut aliquam. In hac habitasse platea dictumst. Integer sagittis neque a tortor tempor in porta sem vulputate.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12 text-center">
				<a href="#" class="visit_our_services">Visit Our services</a>
			</div>
		</div>
	</div>
</section>

<section class="we_are_here_bg animatedParent">
	<div class="container animated fadeInUpShort">
		<h1><span>We are</span> Here for you</h1>
		<div class="row">
			<div class="owl-carousel owl-theme">
				<div class="col-md-12">
					<div class="doctors_here">
						<span class="officer-circular"><img src="images/pro-1.png" alt=""></span>
						<h5>Lauralee Yalden, MD</h5>
						<span class="department_name">Head of Department</span>
						<img src="images/star.png" alt="" />
						<p>Cum sociis natoque penatibus et magnis dis parturient montesmus. Cum sociis natoque penatibus et magnis dis parturient montesmus.</p>
						<p>Speaks: <strong>English</strong></p>
					</div>
				</div>
				<div class="col-md-12">
					<div class="doctors_here">
						<span class="officer-circular"><img src="images/pro-2.png" alt=""></span>
						<h5>Lauralee Yalden, MD</h5>
						<span class="department_name">Head of Department</span>
						<img src="images/star.png" alt="" />
						<p>Cum sociis natoque penatibus et magnis dis parturient montesmus. Cum sociis natoque penatibus et magnis dis parturient montesmus.</p>
						<p>Speaks: <strong>English</strong></p>
					</div>
				</div>
				<div class="col-md-12">
					<div class="doctors_here">
						<span class="officer-circular"><img src="images/pro-1.png" alt=""></span>
						<h5>Lauralee Yalden, MD</h5>
						<span class="department_name">Head of Department</span>
						<img src="images/star.png" alt="" />
						<p>Cum sociis natoque penatibus et magnis dis parturient montesmus. Cum sociis natoque penatibus et magnis dis parturient montesmus.</p>
						<p>Speaks: <strong>English</strong></p>
					</div>
				</div>
				<div class="col-md-12">
					<div class="doctors_here">
						<span class="officer-circular"><img src="images/pro-2.png" alt=""></span>
						<h5>Lauralee Yalden, MD</h5>
						<span class="department_name">Head of Department</span>
						<img src="images/star.png" alt="" />
						<p>Cum sociis natoque penatibus et magnis dis parturient montesmus. Cum sociis natoque penatibus et magnis dis parturient montesmus.</p>
						<p>Speaks: <strong>English</strong></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="testimonial_bg animatedParent">
	<div class="container animated fadeInUpShort">
		<div class="row">
			<div class="col-lg-7 col-md-9 col-sm-12">
				<h1>Stories from real people who are glad they used Doctors online.</h1>
				<div class="owl-carousel owl-theme">
					<div class="doctors_testimonial">
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui offici luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
						<span>- Janet Smith</span>
					</div>
					<div class="doctors_testimonial">
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui offici luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
						<span>- Williamson Smith</span>
					</div>
					<div class="doctors_testimonial">
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui offici luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
						<span>- Smith Janet</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="doctor_online_bg animatedParent">
	<div class="container animated fadeInUpShort">
		<div class="row">
			<div class="col-md-9">
				<h3>See an online doctor today</h3>
				<p>Join the thousands of people who get expert medical advice, right here every day.</p>
			</div>
			<div class="col-md-3">
				<button class="btn btn-online-dr">See a Doctor Online</button>
			</div>
		</div>
	</div>
</section>

<section class="tips_news_bg animatedParent">
	<div class="container animated fadeInUpShort">
		<h1><span>Latest Tips and</span> News</h1>
		<div class="row">
			<div class="col-md-6">
				<div class="news_and_tips">
					<div class="row">
						<div class="col-md-6 col-sm-4 col-xs-12">
							<img src="images/img-t-1.png" alt="" />
						</div>
						<div class="col-md-6 col-sm-8 col-xs-12">
							<h5>The latest diet pills for men in middle age</h5>
							<span>By Admin / 02 March 2015 / 15 Comments</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<a href="#">Read More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="news_and_tips">
					<div class="row">
						<div class="col-md-6 col-sm-4 col-xs-12">
							<img src="images/img-t-2.png" alt="" />
						</div>
						<div class="col-md-6 col-sm-8 col-xs-12">
							<h5>The latest diet pills for men in middle age</h5>
							<span>By Admin / 02 March 2015 / 15 Comments</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<a href="#">Read More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="news_and_tips">
					<div class="row">
						<div class="col-md-6 col-sm-4 col-xs-12">
							<img src="images/img-t-3.png" alt="" />
						</div>
						<div class="col-md-6 col-sm-8 col-xs-12">
							<h5>The latest diet pills for men in middle age</h5>
							<span>By Admin / 02 March 2015 / 15 Comments</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<a href="#">Read More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="news_and_tips">
					<div class="row">
						<div class="col-md-6 col-sm-4 col-xs-12">
							<img src="images/img-t-4.png" alt="" />
						</div>
						<div class="col-md-6 col-sm-8 col-xs-12">
							<h5>The latest diet pills for men in middle age</h5>
							<span>By Admin / 02 March 2015 / 15 Comments</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<a href="#">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="footer-top-bg footer-top-bg-patient animatedParent">
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

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script>

<script src="http://blazeworx.com/jquery.flagstrap.min.js"></script>
<!-- Language Selection -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/js/bootstrap-select.min.js"></script>
<script src="js/css3-animate-it.js"></script>

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

$('.we_are_here_bg .owl-carousel').owlCarousel({
	loop: true,
	margin: 10,
	responsiveClass: true,
	responsive: {
		0: {
			items: 1,
			nav: true
		},
		768: {
			items: 2,
			nav: true,
			margin: 0
		},
		1000: {
			items: 3,
			nav: true,
			loop: false,
			margin: 0
		}
	}
});

$('.testimonial_bg .owl-carousel').owlCarousel({
	loop: true,
	margin: 10,
	responsiveClass: true,
	responsive: {
		0: {
			items: 1,
			nav: true
		}
	}
});

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
