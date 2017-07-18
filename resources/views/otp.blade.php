<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Login</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/bootstrap-responsive-tabs.css">

<!--script src="js/maxcdn-bootstrap.min.js"></script-->

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>

<div class="login-logo">
	<a class="#" href="/"><img src="images/logo1.jpg" alt="" /></a>
</div>

<section class="login-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-offset-2 col-lg-8 col-md-offset-1 col-md-10 col-sm-offset-0 col-sm-12">
				<div class="login-register-tab">
					<ul class="nav nav-tabs responsive-tabs">
						<li class="active"><a href="#home1">New User Register</a></li>
						<li><a href="#profile1">Existing User</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="home1">
							<div class="form-group">
								<label for="usr">A verification code has been sent to your mobile xxxxxxxxxx by SMS. Please enter the verification code.</label>
								<input type="text" value="Enter Verification Code (OTP)" class="form-control" id="usr">
							</div>
							<a href="#" class="resend-otp">Resend ?</a>
							<button class="btn btn-formsubmit">Verify</button>
						</div>
						<div class="tab-pane" id="profile1">
							<div class="form-group">
								<label for="usr">Name:</label>
								<input type="text" value="" class="form-control" id="usr">
							</div>
							<div class="form-group">
								<label for="pwd">Password:</label>
								<input type="password" value="" class="form-control" id="pwd">
							</div>
							<button class="btn btn-formsubmit">Submit</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- <section class="footer-top-bg">
	<div class="container">
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
</section> -->
<footer>
	<div class="container">
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
			<div class="footer-social-icons">
				<h5>Stay Connected to Doctor Online</h5>
				<p><a href="#" class="fb">Facebook</a><a href="#" class="twit">Twitter</a><a href="#" class="gplus">Google Plus</a><a href="#" class="linkedin">LinkedIn</a></p>
				<h5>Copyright @ 2017 Doctor online All Rights reserved</h5>
			</div>
		</div>
	</div>
</footer>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.bootstrap-responsive-tabs.min.js"></script>

<script>
$(document).ready(function(){

$('.responsive-tabs').responsiveTabs({
  accordionOn: ['xs']
});

});

</script>

</body>
</html>
