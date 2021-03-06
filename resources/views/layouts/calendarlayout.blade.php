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
	<link href="{{ asset('css/fullcalendar.min.css') }}" rel="stylesheet">
	
	<script src="{{ asset('js/jquery.min.js') }}"></script>
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
	<section class="login-bg">
		<div class="">
			<div id="wrapper">
				<!-- Sidebar -->
				<div id="sidebar-wrapper">
					<aside class="leftsidebar">
						<h4>PROFILE</h4>
						<ul class="left-profile nav">
							<li class="{{ Request::segment(2) === 'dashboard' ? 'active' : null }}"><a href="{{ url('doctor/dashboard') }}"><span><img src="{{ asset('images/commitments-list.png') }}" alt="" /></span>Dashboard</a></li>
							<li class="{{ Request::segment(2) === 'profile' ? 'active' : null }}"><a href="{{ url('doctor/profile') }}"><span><img src="{{ asset('images/commitments-list.png') }}" alt="" /></span>Personal & Contact Details</a></li>
							<li class="{{ Request::segment(2) === 'specialization' ? 'active' : null }}"><a href="{{ url('doctor/specialization') }}"><span><img src="{{ asset('images/commitments-list.png') }}" alt="" /></span>Education & Specialization</a></li>
							<li class="{{ Request::segment(2) === 'documents' ? 'active' : null }}"><a href="{{ url('doctor/documents') }}"><span><img src="{{ asset('images/commitments-list.png') }}" alt="" /></span>Registration & Documents</a></li>
							<li class="{{ Request::segment(2) === 'availability' ? 'active' : null }}"><a href="{{ url('doctor/availability') }}"><span><img src="{{ asset('images/commitments-list.png') }}" alt="" /></span>Availability</a></li>
							<li class="{{ Request::segment(2) === 'calendar_events' ? 'active' : null }}"><a href="{{ url('doctor/calendar_events') }}"><span><img src="{{ asset('images/commitments-list.png') }}" alt="" /></span>Clinics (Fees & Timings)</a></li>
							<li class="{{ Request::segment(2) === 'services' ? 'active' : null }}"><a href="{{ url('doctor/services') }}"><span><img src="{{ asset('images/commitments-list.png') }}" alt="" /></span>Services & Experience</a></li>
							<li class="{{ Request::segment(2) === 'awards' ? 'active' : null }}"><a href="{{ url('doctor/awards') }}"><span><img src="{{ asset('images/commitments-list.png') }}" alt="" /></span>Award & Memberships</a></li>
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
<script src="{{ asset('js/moment.min.js') }}"></script>
<script src="{{ asset('js/fullcalendar.min.js') }}"></script>
@yield('scripts')
</body>
</html>