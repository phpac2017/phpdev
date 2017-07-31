<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="_token" content="{{ csrf_token() }}" />
	
	<title>Login</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<link href="{{ asset('css/bootstrap-multiselect.css') }}" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('css/jquery-confirm.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}" />
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
	<div id="divLoading"></div>
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
								{{ Form::open(array('method' => 'POST','id'=>'register_form')) }}
									<p class="reg_error"></p>
										{{ csrf_field() }}
										<div class="form-group">
											<label for="pwd">User Type<span class="mandatory">*</span></label>
											@if(session('user_role',2)==3)
												{{ Form::select('user_role', array('2'=>'Doctor','3'=>'Patient'), 3, ['class' => 'form-control select2','id'=>'user_role']) }}
											@else
												{{ Form::select('user_role', array('2'=>'Doctor','3'=>'Patient'),2, ['class' => 'form-control select2','id'=>'user_role']) }}
											@endif
										</div>
										
										<div class="form-group">
											<label for="usr">Name: <span class="mandatory">*</span></label>
											{{ Form::text('name','',array('class'=> 'form-control','id'=>'name')) }}
										</div>
										
										<div class="form-group">
											<div class="radio-box">
											{{ Form::radio('gender','M',true,array('id'=>'radio1')) }}
											 <label for="radio1">Male</label>
											 {{ Form::radio('gender','F',array('id'=>'radio2')) }}
											 <label for="radio2">Female</label>
											</div>
										</div>
										
										<div class="row">
											<div class="col-md-3 col-sm-3 col-xs-12">
												<div class="form-group">
													<label for="pwd">Country Code: <span class="mandatory">*</span></label>
													{{ Form::select('country_code', array('+91'=>'+91','+241'=>'+241','+285'=>'+285','+84'=>'+84'),+91, ['class' => 'form-control select2','id'=>'country_code']) }}
												</div>
											</div>
											<div class="col-md-9 col-sm-9 col-xs-12">
												<div class="form-group">
													<label for="pwd">Mobile No: <span class="mandatory">*</span></label>
													{{ Form::text('mobile_number','',array('class'=> 'form-control','id'=>'mobile_number')) }}
												</div>
											</div>
										</div>
										
										<div class="form-group doctor-fields">
											<label for="pwd">Nationality<span class="mandatory">*</span></label>
											<?php $nationalities = call_user_func('getNationalities');?>
											{!! Form::select('nationality', ['' => 'Select'] +$nationalities->toArray(),'',array('class'=>'form-control select2','id'=>'nationality'));!!}
											
										</div>
										
										<div class="form-group doctor-fields">
											<label for="pwd">Language<span class="mandatory">*</span></label>
											<?php $languages = call_user_func('getLanguages');?>
											{!! Form::select('language', ['' => 'Select'] +$languages->toArray(),1,array('class'=>'form-control select2','multiple'=>'multiple','id'=>'language'));!!}
										</div>
										
										<div class="form-group">
											<label for="pwd">Email: <span class="mandatory">*</span></label>
											{{ Form::email('email','',array('class'=> 'form-control','id'=>'email','onBlur'=>'validateEmail(this.id);')) }}
											<span class="email"></span>
										</div>
										
										<div class="form-group">
											<label for="pwd">Password: <span class="mandatory">*</span></label>
											{{ Form::password('password',array('class'=>'form-control','id'=>'password')) }}
										</div>
										
										<div class="form-group doctor-fields">
											<label for="pwd">Qualification<span class="mandatory">*</span></label>
											{{ Form::select('qualification',array('1'=>'M.B.B.S','2'=>'B.D.S','3'=>'B.P.T','4'=>'B.O.T',		'5'=>'B.A.M.S','6'=>'B.H.M.S','7'=>'B.U.M.S','8'=>'MS','9'=>'MD','10'=>'Mch'),1, ['class' => 'form-control select2','id'=>'qualification','multiple'=>true]) }}
										</div>
										
										<div class="form-group doctor-fields">
											<label for="pwd">Speciality<span class="mandatory">*</span></label>
												{{ Form::select('speciality',array('1'=>'Anesthesiologist','2'=>'Obstetrician','3'=>'Cardiologist','4'=>'Dermatologist','5'=>'Gastroenterologist','6'=>'Gynecologist','7'=>'Hematologist','8'=>'Neonatologist','9'=>'Nephrologist','10'=>'Oncologist'),1, ['class' => 'form-control select2','id'=>'speciality','multiple'=>true]) }}
										</div>
										
										<div class="form-group doctor-fields">
											<label for="pwd">Experience<span class="mandatory">*</span></label>
											{{ Form::select('experience',array('1'=>'1','2'=>'2','3'=>'3','4'=>'4',				'5'=>'5','6'=>'5+','7'=>'10+','8'=>'15+','9'=>'20+','10'=>'25+'),1, ['class' => 'form-control select2','id'=>'experience']) }}
											
										</div>
										
										<div class="form-group doctor-fields">
											<label for="pwd">Medical Registration Number <span class="mandatory">*</span></label>
												{{ Form::text('mrc_no','',array('class'=> 'form-control','id'=>'mrc_no','placeholder'=>'Medical Registration')) }}
										</div>
										
										<div class="checkbox ch-box">
										{{ Form::checkbox('accept_terms', 1, null, ['class' => 'field','id'=>'accept_terms']) }}
											<label for="accept_terms">I agree to the terms & conditions</label>
										</div>
										{{ Form::hidden('email_err', '', array('id' => 'email_err')) }}
										{{ Form::submit('Lets Get Started', array('class' => 'btn btn-formsubmit','id'=>'register')) }}
								{{Form::close()}}
							</div>
							<div class="tab-pane login-user" id="profile1">
								<div id="login-div">
									{!! Form::open(['method' => 'POST', 'id' => 'login_form']) !!}
											<p class="login_error"></p>
												{{ csrf_field() }}
											<div class="form-group">
												<label for="email">E-Mail Address</label>
												<div class="">
													{!! Form::email('login_email', $value = null, ['class' => 'form-control', 'id' => 'login_email']) !!}
													<span class="login_email"></span>
													<input type="hidden" name="login_email_err" id="login_email_err"/>
												</div>
											</div>
										
											<div class="form-group">
												<label for="password">Password</label>
												<div class="">
													{!! Form::password('login_password',['class' => 'form-control', 'id' => 'login_password', 'type' => 'password'])!!}
												</div>
											</div>

											
											<div class="row">
												<div class="col-md-6 col-sm-6 col-xs-6">
													<div class="checkbox ch-box">
														{!! Form::checkbox('agree', null, null, ['id' => 'checkbox2', 'type' => 'checkbox']) !!}
														<label for="checkbox2">Remember Me</label>												
													</div>
												</div>
												<div class="col-md-6 col-sm-6 col-xs-6 text-right">
													<p><a href="#" id="forgot-pass-lnk">Forgot Password?</a></p>
												</div>
											</div>
											<button type="submit" class="btn btn-formsubmit" id="login">Submit</button>
										{!! Form::close()  !!}
									</div>
								</div>
								<div id="forgot-pass-div" style="display:none;">
								{!! Form::open(array('route' => 'forgot-password','class'=>'form-horizontal','id'=>'forgot-pass-form')) !!}
									<p id="forgot_error"></p>
									{{ csrf_field() }}
									<div class="form-group">
										<label for="email">E-Mail Address</label>
										<div class="">
										{!! Form::email('forgot_email', old('forgot_email') , ['class' => 'form-control','id'=>'forgot_email']) !!}
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-6">
											<p><a href="#" id="bck-to-login">Back to Login</a></p>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6 text-right">
										{!! Form::submit('Send Reset Password Link', array('class' => 'btn btn-formsubmit','id'=>'send-reset-pass-lnk')) !!}}
										</div>
									</div>									
								{!! Form::close()  !!}
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
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/script.js') }}"></script>
	<script src="{{ asset('js/reg.js') }}"></script>
	<script src="{{ asset('js/bootstrap-multiselect.js') }}"></script>
	<script src="{{ asset('js/validate.min.js') }}"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.bootstrap-responsive-tabs.min.js') }}"></script>
	<script src="{{ asset('js/mask.min.js') }}"></script>
	<script src="{{ asset('js/jquery-confirm.js') }}"></script>

	<script src="{{ asset('js/select2.js') }}"></script>
	<script>
	$(document).ready(function(){

		
		
		$("#user_role").on('change',function(){
			if($( "#user_role option:selected" ).text()=='Patient'){
				$(".doctor-fields").hide();
			}else{
				$(".doctor-fields").show();
			}
			
		});
		
		//Determine User Type
		@if(session('user_role',2)==3)
			$(".doctor-fields").hide();
		@endif

		//Forgot Pasword form hide and login form show
		$("#bck-to-login").on('click',function(){
			$("#forgot_error").html('');
			$("#login-div").fadeIn(1000);
			$("#forgot-pass-div").fadeOut();			
		});
		
		//Forgot Pasword form show and login form hide
		$("#forgot-pass-lnk").on('click',function(){
			$("#forgot_error").html('');
			$("#login-div").fadeOut();
			$("#forgot_email").val('');
			$("#forgot-pass-div").fadeIn(1000);			
		});

	});

	</script>
</body>
</html>
