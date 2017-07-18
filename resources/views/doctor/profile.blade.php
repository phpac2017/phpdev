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
								<select class="form-control" id="dr">
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
							<input type="text" value="Name :" class="form-control" id="usr">
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
							<label for="usr">Years of Experience : <span class="mandatory">*</span>  <i class="fa fa-exclamation-circle fa-lg" aria-hidden="true"></i></label>
							<input type="text" value="Enter number of years" class="form-control" id="usr">
						</div>
					</div>
				</div>	
					
				<div class="row">
					<div class="col-lg-6 col-md-6">
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
					
					<div class="col-lg-6 col-md-6">
						<div class="form-group">
								<label for="pwd">Nationality<span class="mandatory">*</span></label>
								<select class="form-control" id="nationality">
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
										<input type="text" value="Enter Contact Number" class="form-control" id="usr">
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
										<input type="text" value="Enter Email Address" class="form-control" id="usr">
										<span class="verify-num"><a href="#">Verify</a></span>
										<span class="num-close"><i class="fa fa-times fa-lg" aria-hidden="true"></i></span>
									</div>
								</div>
							</div>
					</div>
					<div class="next-page-btn">
						<div class="text-right">
							<button class="btn btn-formsubmit password-btn">Save</button>
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
