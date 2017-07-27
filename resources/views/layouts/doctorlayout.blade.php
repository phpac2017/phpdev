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
	<link href="{{ asset('css/bootstrap-multiselect.css') }}" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<!--<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />-->
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/jquery-confirm.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}" />
    <link href="{{ asset('css/toastr.css') }}" rel="stylesheet" />

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
			<ul class="user-img dr-user-img">
				<li>
					<?php 
						$userid = Auth::user()->id;
						$imgsrc = call_user_func('getProfilePic', $userid);
					?>
					<span><img src="{{ asset('uploads/doctors/profile/').'/'.$imgsrc}}" alt="" /></span>
				</li>
				<li>
					Welcome,
					<a href="#"> {{ Auth::user()->name }}</a>
				</li>
				<button  type="button" class="btn btn-formsubmit dr-btn-formsubmit logout-btn"onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</button>
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
							<li class="{{ Request::segment(2) === '#' ? 'active' : null }}"><a href="#"><span><img src="{{ asset('images/commitments-list.png') }}" alt="" /></span>Clinics (Fees & Timings)</a></li>
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
	<script src="{{ asset('js/validate.min.js') }}"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.bootstrap-responsive-tabs.min.js') }}"></script>
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>-->
	<script src="{{ asset('js/sidebar_menu.js') }}"></script>
	
	<script src="{{ asset('js/mask.min.js') }}"></script>
	<script src="{{ asset('js/jquery-confirm.js') }}"></script>
	<script src="{{ asset('js/select2.js') }}"></script>
	<script src="{{ asset('js/jquery.noty.packaged.min.js') }}"></script>
	 @yield('scripts')
</body>
</html>