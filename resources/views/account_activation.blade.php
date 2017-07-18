<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Account Activation - Notification</title>
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
					<div class="tab-content">
						<div class="tab-pane active" id="home1">
							<div class="form-group">
								@if (session('status'))
									<?php if(Session::get('status')=='AA'){
												$class="info";
												$msg = 'Your Account is Already Activated';
											}elseif(Session::get('status')=='AC'){
												$class="success";
												$msg = 'Your Account is Activated Successfully';
											}else{
												$class="danger";
												$msg = 'The Token Is Invalid';
											}?>
									<div class="alert alert-<?php echo $class?>">
										<?php echo $msg;?>
									</div>
								@endif
							</div>
						</div>
					</div>
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
