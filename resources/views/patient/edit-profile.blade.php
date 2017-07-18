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
<div class="login-logo logo-left" >
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
					<li class="active"><a href="edit-profile.html"><span><img src="images/commitments-list.png" alt="" /></span>View / Update Profile</a></li>
					<li><a href="appointment.html"><span><img src="images/commitments-list.png" alt="" /></span>Appointment</a></li>
					<li><a href="medical-records.html"><span><img src="images/commitments-list.png" alt="" /></span>Medical Records</a></li>
					<li><a href="feedback.html"><span><img src="images/commitments-list.png" alt="" /></span>Feedback</a></li>
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
			<div class="edit-profile-photo login-register-tab">
				<h2>Edit Profile</h2>
				<form id="edit_profile" name="edit_profile" data-toggle="validator" role="form">
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
					<div class="col-lg-4 col-md-6">
						<div class="form-group">
							<label for="usr">Full Name: <span class="mandatory">*</span></label>
							<input type="text" value="" name="fname" class="form-control" id="fname" required>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-6">
						<div class="form-group">
								<label for="pwd">Country<span class="mandatory">*</span></label>
								<select class="form-control" id="nationality" required>
									<option value="Indian">Indian</option>
									<option value="Pakistan">Pakistan</option>
									<option value="Japan">Japan</option>
									<option value="Srilanka">Srilanka</option>
								</select>
							</div>
					</div>
					
					
					<div class="col-lg-4 col-md-6">
						<div class="form-group">
							<label for="usr">Age : <span class="mandatory">*</span></label>
							<input type="text" value="" class="form-control" id="age" name="age" required>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-6">
						<div class="form-group">
								<label for="pwd">State<span class="mandatory">*</span></label>
								<select class="form-control" id="nationality" required>
									<option value="Indian">TamilNadu</option>
									<option value="Pakistan">TamilNadu</option>
									<option value="Japan">TamilNadu</option>
									<option value="Srilanka">TamilNadu</option>
								</select>
							</div>
					</div>
					
					
					<div class="col-lg-4 col-md-6">
						<div class="form-group">
								<label for="pwd">Gender<span class="mandatory">*</span></label>
								<div class="radio-box">
								 <input id="radio1" type="radio" name="Checkbox" value="Box"><label for="radio1">Male</label>
								 <input id="radio2" type="radio" name="Checkbox" value="Box"><label for="radio2">Female</label>
								  <input id="radio3" type="radio" name="Checkbox" value="Box"><label for="radio3">Others</label>
								</div>
							</div>
					</div>
					
					
					<div class="col-lg-4 col-md-6">
						<div class="form-group">
								<label for="pwd">City<span class="mandatory">*</span></label>
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
							<label for="usr">Date of Birth: <span class="mandatory">*</span></label>
							<div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
								<input class="form-control" type="text" readonly id="dob" name="dob" required/>
								<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
							</div>
						</div>
					</div>
					
					
					<div class="col-lg-4 col-md-6">
						<div class="form-group">
							<label for="usr">Address: <span class="mandatory">*</span></label>
							<input type="text" value="" class="form-control" id="address" name="address" required>
						</div>
					</div>
					
					
					<div class="col-lg-4 col-md-6">
						<div class="form-group">
								<label for="pwd">Blood Group<span class="mandatory">*</span></label>
								<select class="form-control" id="blood-group" multiple="multiple" required>
									<option value="Tamil">O+ive</option>
									<option value="English">O-ive</option>
									<option value="Hindi">AB+ive</option>
									<option value="Malayalam">B+ive</option>
								</select>
							</div>
					</div>
					
					<div class="col-lg-4 col-md-6">
						<div class="form-group">
							<label for="usr">Zip Code : <span class="mandatory">*</span></label>
							<input type="text" value="" class="form-control" id="zipcode" name="zipcode" required>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-6">
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
					
					
					<div class="col-lg-4 col-md-6">
						<div class="form-group">
							<label for="usr">Mobile Number : <span class="mandatory">*</span></label>
							<input type="text" value="" class="form-control" id="Mobilenumber"  name="mobilenumber" required>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-6 dis-flex">
						
							<div class="verification">
								<div class="form-group">
									<label for="usr">Verification: <span class="mandatory">*</span></label>
									<input type="text" value="" class="form-control" name="verification" id="verification" required>
								</div>
							</div>
							<div class="browse-btn-verifi">
								 <label class="btn-bs-file btn btn-xs btn-success browse-btn">
									Browse
									<input type="file" required/>
								</label>
							</div>
						
					</div>
					
					<div class="col-lg-4 col-md-6">
						<div class="form-group">
							<label for="usr">Alternate Number: <span class="mandatory">*</span></label>
							<input type="text" value="" class="form-control" id="alternatenumber" name="alternatenumber" required>
						</div>
					</div>
					
					<!--<div class="col-lg-4 col-md-6">
						<div class="form-group">
							<label for="usr">Weight : <span class="mandatory">*</span></label>
							<input type="text" value="Weight" class="form-control" id="Weight">
						</div>
					</div> -->
					<div class="col-lg-4 col-md-6">
						<div class="form-group">
							<label for="usr">Email id : <span class="mandatory">*</span></label>
							<input type="text" value="" class="form-control" id="emailid" name="emailid" required>
						</div>
					</div>
					<div class="password-save-btn">
						<button class="btn btn-formsubmit password-btn">Change Password</button>
						<button class="btn btn-formsubmit save-btn"  type="submit">Save Profile</button>
					</div>
				</div>
				</form>
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
