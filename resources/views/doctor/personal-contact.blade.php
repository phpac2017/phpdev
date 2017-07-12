<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>View / Update Profile</title>
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
<div class="login-logo logo-left" style="visibility:hidden">
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
					<li class="active"><a href="personal-contact.html"><span><img src="images/commitments-list.png" alt="" /></span>Personal & Contact Details</a></li>
					<li><a href="education-specailization.html"><span><img src="images/commitments-list.png" alt="" /></span>Education & Specialization</a></li>
					<li><a href="registration-documents.html"><span><img src="images/commitments-list.png" alt="" /></span>Registration & Documents</a></li>
					<li><a href="#"><span><img src="images/commitments-list.png" alt="" /></span>Clinics (Fees & Timings)</a></li>
					<li><a href="services-experience.html"><span><img src="images/commitments-list.png" alt="" /></span>Services & Experience</a></li>
					<li><a href="awards-membership.html"><span><img src="images/commitments-list.png" alt="" /></span>Award & Memberships</a></li>
				</ul>
			</aside>
        </div><!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
          <aside class="right-sidebar">
			 <div class="menu-toggle-icon">
                <div class="navbar-header fixed-brand">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" id="menu-toggle">
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
				<div class="row">
					<div class="dr-name-details col-md-4">
						<h5>Dr.Manikandan</h5>
						<p>
							<span>
								<a href="#">NOT LIVE</a>
							</span>
							Mandatory Details Missing
							<a href="#">
								View-errors
							</a>
						</p>
					</div>
					<div class="profile-progress-bar col-md-4">
						<h5><sup>33%</sup> Profile Complete</h5>
						  <div class="progress">
							
							<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:33%">
							<span class="sr-only">70% Complete</span>
							</div>
						  </div>
					</div>
					<div class="pending-fields col-md-4">
						<h5><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <sup>5</sup> pending Mandatory Fields</h5>
						<p>Complete these fields to make your profile go live</p>
					</div>
				</div>
			</div>
			<form id="dr_personal" name="dr_personal" data-toggle="validator" role="form">
			<div class="edit-profile-photo login-register-tab">
				<h2>Personal contact details</h2>
				<div class="row">
					
					<div class="col-md-12">
						<div class="form-group">
							<label for="usr" class="usr-photo-change">Change Photo</label>
							<span class="change-profile-img"></span>
							<div class="change-photo-up">
								<label class="btn-bs-file btn btn-xs btn-success browse-btn">
									Choose Photo
									<input type="file" />
								</label>
								<span class="browse-computer">Browse file from the computer</span>
								
								
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
								<label for="pwd">Title</label>
								<select class="form-control" id="dr" required>
									<option value="Indian">Dr</option>
									<option value="Pakistan">Dr</option>
									<option value="Japan">Dr</option>
									<option value="Srilanka">Dr</option>
								</select>
							</div>
					</div>
					<div class="col-md-8">
						<div class="form-group">
							<label for="usr">Name : <span class="mandatory">*</span></label>
							<input type="text" value="" placeholder="Name" class="form-control" id="fname" name="fname" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="form-group">
								<label for="pwd">Gender<span class="mandatory">*</span></label>
								<div class="radio-box">
								 <input id="radio1" type="radio" name="Checkbox" value="Box"><label for="radio1">Male</label>
								 <input id="radio2" type="radio" name="Checkbox" value="Box"><label for="radio2">Female</label>
								</div>
							</div>
					</div>
					
					
					<div class="col-lg-4 col-md-6">
						<div class="form-group">
								<label for="pwd">City<span class="mandatory">*</span> <i class="fa fa-exclamation-circle fa-lg" aria-hidden="true"></i></label>
								<select class="form-control" id="nationality" required>
									<option value="Indian">Chennai</option>
									<option value="Pakistan">Bangalore</option>
									<option value="Japan">Uttar Pradesh</option>
									<option value="Srilanka">kerala</option>
								</select>
							</div>
					</div>
					
					
					<div class="col-lg-4 col-md-6">
						<div class="form-group">
							<label for="usr">Years of Experience : <span class="mandatory">*</span>  <i class="fa fa-exclamation-circle fa-lg" aria-hidden="true"></i></label>
							<input type="text" value="" placeholder="Enter number of years" class="form-control" id="yexp" name="yexp" required>
						</div>
					</div>
				</div>	
					
				<div class="row">
					<div class="col-lg-6 col-md-6">
							<div class="form-group">
								<label for="pwd">Language<span class="mandatory">*</span></label>
								<select class="form-control" id="language" multiple="multiple" required>
									<option value="Tamil">Tamil</option>
									<option value="English">English</option>
									<option value="Hindi">Hindi</option>
									<option value="Malayalam">Malayalam</option>
								</select>
							</div>
					</div>
					
					<div class="col-lg-6 col-md-6">
						<div class="form-group">
								<label for="pwd">Nationality<span class="mandatory">*</span></label>
								<select class="form-control" id="nationality" required>
									<option value="Indian">Indian</option>
									<option value="Pakistan">Pakistan</option>
									<option value="Japan">Japan</option>
									<option value="Srilanka">Srilanka</option>
								</select>
							</div>
					</div>
					
					
				</div>
				
					
					<div class="form-group">
					  <label for="comment">About Me: <i class="fa fa-exclamation-circle fa-lg" aria-hidden="true"></i></label>
					  <textarea class="form-control" rows="5" id="comment"></textarea>
					  <label>Please don’t include email address or phone number in this section. Changes made here requires verification, if not reflected in
48 hours then please contact support.</label>
					</div>
					
					
					<div class="row">
							<div class="col-lg-4 col-md-5">
								<div class="form-group">
									<label for="usr">Contact Number :<span class="mandatory">*</span></label>
									<div class="verify-number">
										<input type="text" value="" placeholder="Enter Contact Number" class="form-control" id="cno" name="cno" required>
										<span class="verify-num"><a href="#">Verify</a></span>
										<span class="num-close"><i class="fa fa-times fa-lg" aria-hidden="true"></i></span>
									</div>
								</div>
							</div>
					</div>
					
					<div class="row">
							<div class="col-lg-4 col-md-5">
								<div class="form-group">
									<label for="usr">Email Address :<span class="mandatory">*</span></label>
									<div class="verify-number">
										<input type="email" value="" class="form-control" id="email" name="email" placeholder="Email id" required>
										<span class="verify-num"><a href="#">Verify</a></span>
										<span class="num-close"><i class="fa fa-times fa-lg" aria-hidden="true"></i></span>
									</div>
								</div>
							</div>
					</div>
					<div class="next-page-btn">
						<div class="text-right">
							<button class="btn btn-formsubmit password-btn" type="submit">Save</button>
							<button class="btn btn-formsubmit password-btn">Next</button>
						</div>
						
					</div>
					
				
</div>				
			</form>
			
			
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
