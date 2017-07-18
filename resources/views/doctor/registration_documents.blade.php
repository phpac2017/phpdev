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
				<h2>Registration & Documents</h2>
				
					<div class="awards-recognitions">
						<h4>Registration Details * <i class="fa fa-exclamation-circle fa-lg" aria-hidden="true"></i></h4>
						<label class="know-more">Allied healthcare professionals do not need to enter registration details. <a href="#">Know more</a></label>
						<div class="add-award">
							<button class="add-schedule dr-add-schedule"><i class="fa fa-plus fa-lg" aria-hidden="true"></i> Add Registration</button>
						</div>
						<div class="row">
							<div class="col-lg-4 col-md-6">
								<div class="form-group">
									<label for="usr">Council Registration Number: <span class="mandatory">*</span></label>
									<input type="text" value="Enter Council Registration Number" class="form-control" id="usr">
									<label class="awards-note">*Complete your previous registration details</label>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6">
								<div class="form-group">
									<label for="pwd">Council Name<span class="mandatory">*</span></label>
									<select class="form-control" >
										<option value="Indian">Selcect Council Registration</option>
										<option value="Indian">Chennai</option>
										<option value="Pakistan">Bangalore</option>
										<option value="Japan">Uttar Pradesh</option>
										<option value="Srilanka">kerala</option>
									</select>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6">
								<div class="form-group">
									<label for="pwd">Year<span class="mandatory">*</span></label>
									<select class="form-control">
										<option value="Indian">Select Year</option>
										<option value="Indian">2001</option>
										<option value="Pakistan">2009</option>
										<option value="Japan">2011</option>
										<option value="Srilanka">2014</option>
									</select>
								</div>
							</div>							
						</div>		
					</div>
					
					<div class="memberships-recognitions">
						<h4>Documents / Certificates <i class="fa fa-exclamation-circle fa-lg" aria-hidden="true"></i></h4>
						<label class="mandatory-color">Mandatory photo proofs are missing</label>
						<label class="know-more">add photo proof for registration certificate, highest degree certificate & identity card to publish your profile</label>
						<div class="drop-up-photo">
							<span>Drop or <a href="#">Upload Photos</a></span>
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
  }).datepicker('update', new Date());	


});
</script>
@stop
