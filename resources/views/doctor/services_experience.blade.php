@extends('layouts.doctorlayout')
@section('content')
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
			<div class="edit-profile-photo dr-edit-profile-photo login-register-tab">
				<h2>Services & Experience</h2>
					<div class="awards-recognitions">
						<h4>Services <i class="fa fa-exclamation-circle fa-lg" aria-hidden="true"></i></h4>
						<label class="services-sel">0 Services Selected</label>
							<div class="form-group">
								<label for="pwd">Add Service</label>
								<select class="form-control" id="dr">
									<option value="Indian">Search and Add Services</option>
									<option value="Pakistan">Services 1</option>
									<option value="Japan">Services 2</option>
									<option value="Srilanka">Services 3</option>
								</select>
							</div>
					</div>
					
					<div class="memberships-recognitions">
						<h4>Experience <i class="fa fa-exclamation-circle fa-lg" aria-hidden="true"></i></h4>
						
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="form-group">
								<label for="usr">Duration (Select year & month) <span class="mandatory">*</span></label>
								<div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
									<input class="form-control" type="text" readonly />
									<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
								</div>
							</div>
						</div>
					
						<div class="col-lg-4 col-md-6">
							<div class="form-group">
								<label for="usr">Role: <span class="mandatory">*</span></label>
								<input type="text" value="Enter your Role" class="form-control" id="usr">
							</div>
						</div>
					
						<div class="col-lg-4 col-md-6">
							<div class="form-group">
									<label for="pwd">City<span class="mandatory">*</span></label>
									<select class="form-control" id="nationality">
										<option value="Indian">Enter City</option>
										<option value="Indian">Chennai</option>
										<option value="Pakistan">Bangalore</option>
										<option value="Japan">Uttar Pradesh</option>
										<option value="Srilanka">kerala</option>
									</select>
								</div>
						</div>
					</div>	
						
						<div class="add-award">
							<button class="add-schedule dr-add-schedule"><i class="fa fa-plus fa-lg" aria-hidden="true"></i> Add Experience</button>
						</div>
						<div class="form-group">
							<label for="pwd">Clinic / Hospital Name</label>
							<input type="text" value="Enter Clinic / Hospital Name" class="form-control" id="usr">
							<label class="awards-note">*Complete your previous Experience details</label>
						</div>
					</div>
				
					<div class="next-page-btn">
						<div class="text-right">
							<button class="btn btn-formsubmit password-btn">Save</button>
							<button class="btn btn-formsubmit password-btn">Previous</button>
							<button class="btn btn-formsubmit password-btn">Next</button>
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
