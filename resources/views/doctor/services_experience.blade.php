@extends('layouts.doctorlayout')
<!-- daterange picker -->
<link href="{{ asset('css/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" />
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
							<i class="fa fa-bars fa-lg" aria-hidden="true"></i></button>
						</li>
                    </ul>
                </div>
			</div>
		
			<div class="breadcrumbs">
				<div class="row">
					<div class="dr-name-details col-md-4">
						<h5>Dr.{{ Auth::user()->name }}</h5>
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

			{{ Form::open(array('method' => 'POST','id'=>'dr_exp_form')) }}
			<div class="edit-profile-photo dr-edit-profile-photo login-register-tab">

				<h2>Services & Experience</h2>
					<div class="awards-recognitions">
						<h4>Services <i class="fa fa-exclamation-circle fa-lg" aria-hidden="true"></i></h4>						
						<label class="awards-note">*Complete your previous Service details</label>
						<label class="services-sel">0 Services Selected</label>
						<div class="add-award">
							<button type="button" class="add-schedule dr-add-schedule dr-add-service"><i class="fa fa-plus fa-lg" aria-hidden="true"></i> Add Service</button>
						</div>
						<?php if($doctor_service==array()){?>
						<div class="row">
							<div class="col-lg-4 col-md-6">
								<div class="form-group">
									<label for="pwd">Select Service</label>
									{{ Form::select('service[]',array('1'=>'Allergists','2'=>'Cardiologists','3'=>'Dentists','4'=>'Dermatologist','5'=>'Ophthalmologists','6'=>'Orthodontists','7'=>'Pediatricians','8'=>'Psychiatrists','9'=>'Pulmonary','10'=>'Rheumatologist'),1, ['class' => 'form-control select2','id'=>'srv_0']) }}
								</div>
							</div>
						</div>
						<?php }else{
							foreach ($doctor_service as $dskey => $ds) {
								$ds_key = 'srv_'.$dskey;
								$ds_val = $ds['service'];
								$sid = $ds['id'];
						?>
						<div class="row" id="sr_<?php echo $dskey;?>">
							<div class="col-lg-4 col-md-6">
								<div class="form-group">
									<label for="pwd">Select Service</label>
									{{ Form::select('service[]',array('1'=>'Allergists','2'=>'Cardiologists','3'=>'Dentists','4'=>'Dermatologist','5'=>'Ophthalmologists','6'=>'Orthodontists','7'=>'Pediatricians','8'=>'Psychiatrists','9'=>'Pulmonary','10'=>'Rheumatologist'),$ds_val, ['class' => 'form-control select2','id'=>$ds_key]) }}
								</div>
							</div>
							<?php if($dskey>0){?>
								<div class="col-lg-1 col-md-1 text-center delete_icon">
									<img src="{{ asset('images/delete.png') }}" alt="" id="<?php echo $dskey;?>" onclick="remSer(this.id,'d','<?php echo $ds_val;?>','<?php echo $sid;?>');" />
								</div>
							<?php }?>
						</div>
						<input type="hidden" name="stid[]" class="form-control pull-right" value="<?php echo $sid;?>"/>
						
						<?php } }?>
						<div class="addServiceDetails"></div>
						<input type="hidden" name="ser_count" id="ser_count"/>	
					</div>
					
					<div class="memberships-recognitions">
						<h4>Experience <i class="fa fa-exclamation-circle fa-lg" aria-hidden="true"></i></h4>
						<label class="awards-note">*Complete your previous Experience details</label>
						<div class="add-award">
							<button type="button" class="add-schedule dr-add-schedule dr-add-exp"><i class="fa fa-plus fa-lg" aria-hidden="true"></i> Add Experience</button>
						</div>
						
						<?php if($doctor_experience==array()){?>
						<div class="row">
							<div class="col-lg-4 col-md-6">
								<div class="form-group">
									<label for="usr">Duration (Select year & month) <span class="mandatory">*</span></label>
									<div class="input-group">
	                                    <div class="input-group-addon">
	                                        <i class="fa fa-calendar"></i>
	                                    </div>
	                                    <input type="text" name="duration[]" class="form-control pull-right" id="duration_0" />
	                                </div>
								</div>
							</div>
						
							<div class="col-lg-4 col-md-6">
								<div class="form-group">
									<label for="usr">Role: <span class="mandatory">*</span></label>
									<input type="text" name="role[]" placeholder="Enter your Role" class="form-control" id="role_0">
								</div>
							</div>
						
							<div class="col-lg-4 col-md-6">
								<div class="form-group">
									<label for="pwd">City<span class="mandatory">*</span> <i class="fa fa-exclamation-circle fa-lg" aria-hidden="true"></i></label>
									<?php $cities = call_user_func('getCitiesList');?>
									{!! Form::select('city[]', ['' => 'Select'] +$cities->toArray(),'',array('class'=>'form-control select2','id'=>'city_0'));!!}
								</div>
							</div>
							<div class="col-lg-8 col-md-8">
								<label for="pwd">Clinic / Hospital Name</label>
								<input type="text" name="hosp_name[]" placeholder="Enter Clinic / Hospital Name" class="form-control" id="hosp_0">				
							</div>
						</div>	
						<br/>

						<?php }else{
							foreach ($doctor_experience as $dekey => $de) {
								$det_key = 'etid_'.$dskey;
								$ded_key = 'duration_'.$dskey;
								$der_key = 'role_'.$dskey;
								$dec_key = 'city_'.$dskey;
								$deh_key = 'hosp_'.$dskey;
								$de_duration = $de['duration'];
								$de_role = $de['role'];
								$de_city = $de['city'];
								$de_clinic = $de['clinic_name'];
								$exid = $de['id'];
						?>
						<div class="row" id="er_<?php echo $dekey?>">
							<div class="col-lg-4 col-md-6">
								<div class="form-group">
									<label for="usr">Duration (Select year & month) <span class="mandatory">*</span></label>
									<div class="input-group">
	                                    <div class="input-group-addon">
	                                        <i class="fa fa-calendar"></i>
	                                    </div>
	                                    <input type="text" name="duration[]" class="form-control pull-right" value="<?php echo $de_duration;?>" id="<?php echo $ded_key;?>" />          
	                                    <input type="hidden" name="etid[]" class="form-control pull-right" value="<?php echo $exid;?>" id="<?php echo $det_key;?>" />
	                                </div>
								</div>
							</div>
						
							<div class="col-lg-4 col-md-6">
								<div class="form-group">
									<label for="usr">Role: <span class="mandatory">*</span></label>
									<input type="text" name="role[]" placeholder="Enter your Role" class="form-control" value="<?php echo $de_role;?>" id="<?php echo $der_key;?>">
								</div>
							</div>
						
							<div class="col-lg-4 col-md-6">
								<div class="form-group">
									<label for="pwd">City<span class="mandatory">*</span> <i class="fa fa-exclamation-circle fa-lg" aria-hidden="true"></i></label>
									<?php $cities = call_user_func('getCitiesList');?>
									{!! Form::select('city[]', ['' => 'Select'] +$cities->toArray(),$de_city,array('class'=>'form-control select2','id'=>$dec_key));!!}
								</div>
							</div>
							<div class="col-lg-8 col-md-8">
								<label for="pwd">Clinic / Hospital Name</label>
								<input type="text" name="hosp_name[]" placeholder="Enter Clinic / Hospital Name" class="form-control" value="<?php echo $de_clinic;?>" id="<?php echo $deh_key;?>">				
							</div>

							<?php if($dekey>0){?>
								<div class="col-lg-1 col-md-1 text-center delete_icon">
									<img src="{{ asset('images/delete.png') }}" alt="" id="<?php echo $dekey;?>" onclick="remExp(this.id,'d','<?php echo $de_role;?>','<?php echo $exid;?>');" />
								</div>
							<?php }?>
						</div>	
						<br/>
						<?php } }?>


						<div class="addExperienceDetails"></div>
						<input type="hidden" name="exp_count" id="exp_count"/>
						
					</div>
				{{ Form::close() }}
					<div class="next-page-btn">
						<div class="text-right">
							<button class="btn btn-formsubmit password-btn">Save</button>
							<a href="{{ url('doctor/documents') }}" class="btn btn-formsubmit password-btn">Previous</a>
							<a href="{{ url('doctor/awards') }}" class="btn btn-formsubmit password-btn">Next</a>
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

<!-- date-range-picker -->
<script src="{{ asset('js/moment.min.js') }}" ></script>
<script src="{{ asset('js/daterangepicker.js') }}"  type="text/javascript"></script>	
<script src="{{ asset('js/doctor/service.js') }}"></script>
@stop
