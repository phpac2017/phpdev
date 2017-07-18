<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Feedback</title>
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

<div class="user-profile">
	
	<ul class="user-img">
		<li>
			<span><img src="images/random-avatar7.jpg" alt="" /></span>
		</li>
		<li>
			Welcome to 
			<a href="#">Sam Sunder</a>
		</li>
		<button class="btn btn-formsubmit logout-btn">Logout</button>
	</ul>
</div>
</header>

<section class="login-bg">
	<div class="">
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <aside class="leftsidebar">
				<h4>PROFILE</h4>
				<ul class="left-profile">
					<li><a href="edit-profile.html"><span><img src="images/commitments-list.png" alt="" /></span>View / Update Profile</a></li>
					<li><a href="appointment.html"><span><img src="images/commitments-list.png" alt="" /></span>Appointment</a></li>
					<li><a href="medical-records.html"><span><img src="images/commitments-list.png" alt="" /></span>Medical Records</a></li>
					<li class="active"><a href="feedback.html"><span><img src="images/commitments-list.png" alt="" /></span>Feedback</a></li>
					<li><a href="payments.html"><span><img src="images/commitments-list.png" alt="" /></span>Payments</a></li>
				</ul>
			</aside>
        </div><!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
          <aside class="right-sidebar">
			 <div class="menu-toggle-icon">
                <div class="navbar-header fixed-brand">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"  id="menu-toggle">
					  <i class="fa fa-bars fa-lg" aria-hidden="true"></i>
                    </button>
                         
                </div><!-- navbar-header-->

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active" ><button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2">
				<i class="fa fa-bars fa-lg" aria-hidden="true"></i></button></li>
                            </ul>
                </div>
				</div>
		
			<div class="breadcrumbs">
				
    <!-- Brand and toggle get grouped for better mobile display -->
				
				<!-- bs-example-navbar-collapse-1 -->
			
			
			
				<ul class="breadcrumbs-left">
					<li>
						Home
					</li>
					<li>
						<a href="#"> Edit Profile</a>
					</li>
				</ul>
				<ul class="breadcrumbs-right">
					<li>
						<a href="#">Self Assesment</a>
					</li>
					<li>
						<a href="#">Appointment</a>
					</li>
					<li>
						<a href="#" class="active">Consult Now</a>
					</li>
				</ul>
			</div>
			<div class="edit-profile-photo feedback-details">
				<div class="feedback-no-records">
					<img src="images/no-records.jpg" alt="" />
					
				</div>
			</div>
			
			
			<div class="footer-social-icons">
				<h5>Copyright @ 2017 Doctor online All Rights reserved</h5>
			</div>
	
			
			
		</aside>
        </div>
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

$('.responsive-tabs').responsiveTabs({
  accordionOn: ['xs']
});

	<!-- Multiselect -->
    $('#qualification').multiselect({
      buttonWidth: '100%'
    });
	
	 $('#blood-group').multiselect({
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
	
 
  $("#datepicker").datepicker({ 
        autoclose: true, 
        todayHighlight: true
  }).datepicker('update', new Date());;

  
 

});





 

</script>

</body>
</html>
