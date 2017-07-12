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
<link rel="stylesheet" href="css/bootstrap-multiselect.css" type="text/css">
<link href="http://blazeworx.com/flags.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/css/bootstrap-select.min.css" type='text/css' />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css" />
<!-- <link rel="stylesheet" href="css/bootstrap-responsive-tabs.css"> -->

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
	<a class="#" href="/"><img src="images/login-logo.jpg" alt="" /></a>
</div>
<section class="login-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-offset-2 col-lg-8 col-md-offset-1 col-md-10 col-sm-offset-0 col-sm-12">
				<div class="login-register-tab">
					<ul class="nav nav-tabs responsive-tabs">
						<li class="active"><a href="#home1">Signup</a></li>
						<li><a href="#profile1">Login</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="home1">
							<!--<div class="login-social-icons">
								<a href="#" class="login-fb">Facebook</a>
								<a href="#" class="login-gplus">Google Plus</a>
							</div>
							<span class="or">or</span> -->
							<div class="form-group">
								<label for="usr">Name: <span class="mandatory">*</span></label>
								<input type="text" value="Name" class="form-control" id="usr">
							</div>
							
							<div class="form-group">
								<div class="radio-box">
								 <input id="radio1" type="radio" name="Checkbox" value="Box"><label for="radio1">Male</label>
								 <input id="radio2" type="radio" name="Checkbox" value="Box"><label for="radio2">Female</label>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-3 col-sm-3 col-xs-12">
									<div class="form-group">
										<label for="pwd">Country Code: <span class="mandatory">*</span></label>
										<select class="form-control" id="country_code">
											<option value="+91">+91</option>
											<option value="+241">+241</option>
											<option value="+285">+285</option>
											<option value="+84">+84</option>
										</select>
									</div>
								</div>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<div class="form-group">
										<label for="pwd">Mobile No: <span class="mandatory">*</span></label>
										<input type="text" value="Mobile No" class="form-control" id="pwd">
									</div>
								</div>
							</div>
								
							
						
							
							<div class="form-group">
								<label for="pwd">Nationality<span class="mandatory">*</span></label>
								<select class="form-control" id="nationality">
									<option value="Indian">Indian</option>
									<option value="Pakistan">Pakistan</option>
									<option value="Japan">Japan</option>
									<option value="Srilanka">Srilanka</option>
								</select>
							</div>
							
							
							<div class="form-group">
								<label for="pwd">Language<span class="mandatory">*</span></label>
								<select class="form-control" id="language" multiple="multiple">
									<option value="Tamil">Tamil</option>
									<option value="English">English</option>
									<option value="Hindi">Hindi</option>
									<option value="Malayalam">Malayalam</option>
								</select>
							</div>
						
							
							<div class="form-group">
								<label for="pwd">Email: <span class="mandatory">*</span></label>
								<input type="email" value="Email" class="form-control" id="pwd">
							</div>
							<div class="form-group">
								<label for="pwd">Password: <span class="mandatory">*</span></label>
								<input type="password" value="Password" class="form-control" id="pwd">
							</div>
							<!--<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
										<label for="pwd">Country Code: <span class="mandatory">*</span></label>
										<select class="form-control">
											<option value="">select 1</option>
											<option value="">select 2</option>
											<option value="">select 3</option>
											<option value="">select 4</option>
										</select>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
										<label for="pwd">Mobile No: <span class="mandatory">*</span></label>
										<input type="number" value="Mobile No" class="form-control" id="pwd">
									</div>
								</div>
							</div> -->
							
							<div class="form-group">
								<label for="pwd">Qualification<span class="mandatory">*</span></label>
								<select class="form-control" id="qualification" multiple="multiple">
									<option value="Bsc">Bsc</option>
									<option value="Msc">Msc</option>
									<option value="M.com">M.com</option>
									<option value="B.com">B.com</option>
									<option value="Others">Others</option>
								</select>
							</div>
							
							
							<div class="form-group">
								<label for="pwd">Speciality<span class="mandatory">*</span></label>
								<select class="form-control" id="speciality" multiple="multiple">
									<option value="Acupressurist">Acupressurist</option>
									<option value="Acupressurist">Acupressurist</option>
									<option value="Acupressurist">Acupressurist</option>
									<option value="Acupressurist">Acupressurist</option>
									<option value="Acupressurist">Acupressurist</option>
								</select>
							</div>
							
							
							<div class="form-group">
								<label for="pwd">Experience<span class="mandatory">*</span></label>
								<select class="form-control" id="experience">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</div>
							
							<div class="form-group">
								<label for="pwd">Medical Registration Number <span class="mandatory">*</span></label>
								<input type="text" value="Medical Registration Number" class="form-control" id="pwd">
							</div>
							
							<div class="checkbox ch-box">
								<input id="checkbox1" type="checkbox" name="Checkbox" value="Box"><label for="checkbox1">I agree to the terms & conditions</label>
							</div>
							<button class="btn btn-formsubmit">Let's Get Started</button>
						</div>
						<div class="tab-pane login-user" id="profile1">
							<!--<div class="login-social-icons">
								<a href="#" class="login-fb">Facebook</a>
								<a href="#" class="login-gplus">Google Plus</a>
							</div>
							<span class="or">or</span> -->
							<div class="form-group">
								<label for="usr">Name:</label>
								<input type="text" value="" class="form-control" id="usr">
							</div>
							<div class="form-group">
								<label for="pwd">Password:</label>
								<input type="password" value="" class="form-control" id="pwd">
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-6">
									<div class="checkbox ch-box">
										<input id="checkbox2" type="checkbox" name="Checkbox" value="Box"><label for="checkbox2">Remember Me</label>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 text-right">
									<p><a href="#">Forgot Password?</a></p>
								</div>
							</div>
							<button class="btn btn-formsubmit" onclick="javascript:location.href="edit-profile.html">Submit</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- <section class="footer-top-bg" >
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
<footer >
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

<script type="text/javascript" src="js/bootstrap-multiselect.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.bootstrap-responsive-tabs.min.js"></script>

<script src="http://blazeworx.com/jquery.flagstrap.min.js"></script>
<!-- Language Selection -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/js/bootstrap-select.min.js"></script>


<script>
$(document).ready(function(){

$('.responsive-tabs').responsiveTabs({
  accordionOn: ['xs']
});

	<!-- Multiselect -->
    $('#qualification').multiselect({
      buttonWidth: '100%'
    });
	
	 $('#speciality').multiselect({
      buttonWidth: '100%'
    });
	$('#language').multiselect({
      buttonWidth: '100%'
    });
	$('#nationality').multiselect({
      buttonWidth: '100%'
    });
	$('#country_code').multiselect({
      buttonWidth: '100%'
    });
	$('#experience').multiselect({
      buttonWidth: '100%'
    });

});

</script>

<script>
$(document).ready(function(){

if($(window).width() <=767 ) {
	$('.custsupport').appendTo('.mob_callout_icons');
	$('.language').appendTo('.mob_callout_icons');
	$('.login_register').appendTo('.mob_login_register');
}
else {
	$('.custsupport').prependTo('.callout_icons');
	$('.language').appendTo('.callout_icons');
	$('.login_register').appendTo('.menu_links');
}

$('.search-filter-in').hide();
$('.doctors-search-filter a').click(function (e) {
	$('.search-filter-in').stop(true).slideToggle();
});
$(document).click(function (e) {
	if (!$(e.target).closest('.doctors-search-filter a, .search-filter-in').length) {
	$('.search-filter-in').stop(true).slideUp();
	}
});

<!-- Language Selection -->
$(function(){
	$('.selectpicker').selectpicker();
});

widthheight();
$(window).resize(function() {
	widthheight();
	if($(window).width() <=767 ) {
	$('.custsupport').appendTo('.mob_callout_icons');
	$('.language').appendTo('.mob_callout_icons');
	$('.login_register').appendTo('.mob_login_register');
	}
	else {
		$('.custsupport').prependTo('.callout_icons');
		$('.language').appendTo('.callout_icons');
		$('.login_register').appendTo('.menu_links');
	}
});

function widthheight() {
	var finalwidth = Math.round ($(window).width() - $( '.container' ).width()) / 2;
	$( '.slider-overlay' ).css("left", finalwidth);
	
	/*var finalheight = Math.round ($( '.banner' ).height() - $( '.slider-overlay' ).height()) / 2;
	$( '.slider-overlay' ).css("top", finalheight);*/
}
});

</script>

</body>
</html>
