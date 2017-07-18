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
				<h2>Awards & Membership</h2>
					<div class="awards-recognitions">
						<h4>Awards / Recognitions <i class="fa fa-exclamation-circle fa-lg" aria-hidden="true"></i></h4>
						<div class="add-award">
							<button class="add-schedule dr-add-schedule"><i class="fa fa-plus fa-lg" aria-hidden="true"></i> Add Award / Recongnition</button>
						</div>
						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<label for="usr">Awards / Recognitions <span class="mandatory">*</span></label>
									<input type="text" value="Enter Awards / Recognition title" class="form-control" id="usr">
									<label class="awards-note">*Complete your previous award details</label>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="pwd">Year</label>
									<select class="form-control" id="dr">
										<option value="Indian">Select Year</option>
										<option value="Pakistan">2009</option>
										<option value="Japan">2011</option>
										<option value="Srilanka">2016</option>
									</select>
									
								</div>
							</div>
						</div>
					</div>		
					
					<div class="memberships-recognitions">
						<h4>Memberships <i class="fa fa-exclamation-circle fa-lg" aria-hidden="true"></i></h4>
						<div class="add-award">
							<button class="add-schedule dr-add-schedule"><i class="fa fa-plus fa-lg" aria-hidden="true"></i> Add Memberships</button>
						</div>
						<div class="form-group">
							<label for="pwd">Memberships</label>
							<select class="form-control" id="dr">
								<option value="Srilanka">Select </option>
								<option value="Indian">Government Doctors Association</option>
								<option value="Pakistan">Association of Women Doctors Singapore</option>
								<option value="Japan">Karnataka Qualified Homoeopathic Doctors Association(KQHDA)</option>
							</select>
							<label class="awards-note">*Complete your previous Membership details</label>
						</div>
					</div>
				
					<div class="next-page-btn">
						<div class="text-right">
							<button class="btn btn-formsubmit password-btn">Save</button>
							<button class="btn btn-formsubmit password-btn">Previous</button>
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
    </div>
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
