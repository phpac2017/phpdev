@extends('layouts.patientlayout')
@section('content')
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
							<input type="text" value="Full Name" class="form-control" id="usr">
						</div>
					</div>
					
					<div class="col-lg-4 col-md-6">
						<div class="form-group">
								<label for="pwd">Country<span class="mandatory">*</span></label>
								<select class="form-control" id="nationality">
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
							<input type="text" value="Age" class="form-control" id="usr">
						</div>
					</div>
					
					<div class="col-lg-4 col-md-6">
						<div class="form-group">
								<label for="pwd">State<span class="mandatory">*</span></label>
								<select class="form-control" id="nationality">
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
								<select class="form-control" id="nationality">
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
								<input class="form-control" type="text" readonly />
								<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
							</div>
						</div>
					</div>
					
					
					<div class="col-lg-4 col-md-6">
						<div class="form-group">
							<label for="usr">Address: <span class="mandatory">*</span></label>
							<input type="text" value="Address" class="form-control" id="usr">
						</div>
					</div>
					
					
					<div class="col-lg-4 col-md-6">
						<div class="form-group">
								<label for="pwd">Blood Group<span class="mandatory">*</span></label>
								<select class="form-control" id="blood-group" multiple="multiple">
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
							<input type="text" value="Zip Code " class="form-control" id="usr">
						</div>
					</div>
					
					<div class="col-lg-4 col-md-6">
							<div class="form-group">
								<label for="pwd">Language<span class="mandatory">*</span></label>
								<select class="form-control" id="language" multiple="multiple">
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
							<input type="text" value="Mobile Number" class="form-control" id="Mobile Number">
						</div>
					</div>
					
					<div class="col-lg-4 col-md-6 dis-flex">
						
							<div class="verification">
								<div class="form-group">
									<label for="usr">Verification: <span class="mandatory">*</span></label>
									<input type="text" value="Verification" class="form-control" id="Mobile Number">
								</div>
							</div>
							<div class="browse-btn-verifi">
								 <label class="btn-bs-file btn btn-xs btn-success browse-btn">
									Browse
									<input type="file" />
								</label>
							</div>
						
					</div>
					
					<div class="col-lg-4 col-md-6">
						<div class="form-group">
							<label for="usr">Alternate Number: <span class="mandatory">*</span></label>
							<input type="text" value="Alternate Number" class="form-control" id="Mobile Number">
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
							<input type="text" value="Email id" class="form-control" id="Email id">
						</div>
					</div>
					<div class="password-save-btn">
						<button class="btn btn-formsubmit password-btn">Change Password</button>
						<button class="btn btn-formsubmit save-btn">Save Profile</button>
					</div>
				</div>
			</div>
			
			
			<div class="footer-copyrights">
				<h5>Copyright @ 2017 Doctor online All Rights reserved</h5>
			</div>
	
			
			
		</aside>
        </div>
        <!-- /#page-content-wrapper -->
@endsection
@section('scripts')
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
@stop