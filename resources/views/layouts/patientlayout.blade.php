<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>@yield('title')</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/bootstrap-multiselect.css') }}" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">

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
<header class="">
	<div class="login-logo logo-left">
		 <a class="#" href="/"><img src="{{ asset('images/login-logo.jpg') }}" alt="" /></a> 
	</div>
	@if (!Auth::guest())
	<div class="user-profile">		
		<ul class="user-img">
			<?php 
				$userid = Auth::user()->id;
				$imgsrc = call_user_func('getProfilePic', $userid);
				$role = Auth::user()->roles->first()->name;
				if($role==='admin'){
					$fold = 'admin/profile';
				}elseif($role==='doctor'){
					$fold = 'doctors/profile';
				}else{
					$fold = 'patients/profile';
				}
			?>
			<li>
				<span><img src="{{ asset('uploads/').'/'.$fold.'/'.$imgsrc}}" alt=""/></span>
			</li>

			<li>
				Welcome,
				<a href="{{ url('patient_profile') }}"> {{ Auth::user()->name }}</a>
			</li>
			<button type="button" class="btn btn-formsubmit logout-btn"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</button>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				{{ csrf_field() }}
			</form>
		</ul>
	</div>
	@endif
</header>


<section class="login-bg patient_login_bg">
	<div class="">
		<div id="wrapper">
			<!-- Sidebar -->
			<div id="sidebar-wrapper">
				<aside class="leftsidebar">
					<h4>PROFILE</h4>
					<ul class="left-profile">
						<li class="{{ Request::segment(2) === 'dashboard' ? 'active' : null }}"><a href="{{ url('patient/dashboard') }}"><span><img src="{{ asset('images/commitments-list.png') }}" alt="" /></span> Dashboard</a></li>
						<li class="{{ Request::segment(2) === 'profile' ? 'active' : null }}"><a href="{{ url('patient/profile') }}"><span><img src="{{ asset('images/commitments-list.png') }}" alt="" /></span>View / Update Profile</a></li>
						<li class="{{ Request::segment(2) === 'book_appointment' ? 'active' : null }}"><a href="{{ url('patient/book_appointment') }}"><span><img src="{{ asset('images/commitments-list.png') }}" alt="" /></span>Appointment</a></li>
						<li class="{{ Request::segment(2) === 'medical_records' ? 'active' : null }}"><a href="{{ url('patient/medical_records') }}"><span><img src="{{ asset('images/commitments-list.png') }}" alt="" /></span>Medical Records</a></li>
						<li class="{{ Request::segment(2) === 'feedback' ? 'active' : null }}"><a href="{{ url('patient/feedback') }}"><span><img src="{{ asset('images/commitments-list.png') }}" alt="" /></span>Feedback</a></li>
						<li class="{{ Request::segment(2) === 'payments' ? 'active' : null }}"><a href="{{ url('patient/payments') }}"><span><img src="{{ asset('images/commitments-list.png') }}" alt="" /></span>Payments</a></li>
					</ul>
				</aside>
			</div><!-- /#sidebar-wrapper -->
			<!-- Page Content -->
			 @yield('content')
			<!-- /#page-content-wrapper -->
		</div>		
	</div>		
</section>

<!-- jQuery -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap-multiselect.js') }}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.bootstrap-responsive-tabs.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<script src="{{ asset('js/owl.carousel.js') }}"></script>
<script src="{{ asset('js/jquery.matchHeight.js') }}"></script>
<script src="{{ asset('js/sidebar_menu.js') }}"></script>
@yield('scripts')
</body>
</html>