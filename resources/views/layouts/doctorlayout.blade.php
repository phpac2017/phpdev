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

<link rel="stylesheet" href="css/bootstrap-multiselect.css" type="text/css">

<!-- Custom CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />

<link href="css/style.css" rel="stylesheet" type="text/css" />

<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />


<link href="css/simple-sidebar.css" rel="stylesheet" type="text/css" />

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
	 <a class="#" href="/"><img src="images/login-logo.jpg" alt="" /></a> 
</div>
@if (!Auth::guest())
<div class="user-profile">
	
	<ul class="user-img dr-user-img">
		<li>
			<span><img src="images/random-avatar7.jpg" alt="" /></span>
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
						<li class=""><a href="{{ url('profile') }}"><span><img src="images/commitments-list.png" alt="" /></span>Personal & Contact Details</a></li>
						<li class=""><a href="{{ url('specialization') }}"><span><img src="images/commitments-list.png" alt="" /></span>Education & Specialization</a></li>
						<li class=""><a href="{{ url('documents') }}"><span><img src="images/commitments-list.png" alt="" /></span>Registration & Documents</a></li>
						<li class=""><a href="#"><span><img src="images/commitments-list.png" alt="" /></span>Clinics (Fees & Timings)</a></li>
						<li class=""><a href="{{ url('services') }}"><span><img src="images/commitments-list.png" alt="" /></span>Services & Experience</a></li>
						<li class=""><a href="{{ url('awards') }}"><span><img src="images/commitments-list.png" alt="" /></span>Award & Memberships</a></li>
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
<script src="js/jquery.js"></script>

<script type="text/javascript" src="js/bootstrap-multiselect.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.bootstrap-responsive-tabs.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<script src="js/sidebar_menu.js"></script>
 <script>
    $(document).ready(function(){
		$(".nav a").on("click", function(){
		});
	});
</script>
 @yield('scripts')
</body>
</html>
