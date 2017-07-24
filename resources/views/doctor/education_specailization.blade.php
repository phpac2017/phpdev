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
			<div class="edit-profile-photo dr-edit-profile-photo login-register-tab">
				<h2>Education & Specailization</h2>
				
					<div class="awards-recognitions">
						<h4>Education * <i class="fa fa-exclamation-circle fa-lg" aria-hidden="true"></i></h4>
						<div class="add-award">
							<button class="add-schedule dr-add-schedule dr-edu-add"><i class="fa fa-plus fa-lg" aria-hidden="true"></i> Add Education</button>
							<label class="awards-note">*Complete your previous education details</label>
						</div>
						<?php
							$qualification = Auth::user()->qualification;
							$qualification_details = explode(",", $qualification);
							$qualification_count = count($qualification_details);
							$qualification_count;
						
							foreach($qualification_details as $qkey => $qual){
								$qual_key = 'q_'.$qkey;
								$col_key = 'c_'.$qkey;
								$yr_key   = 'y_'.$qkey;
						?>
						<div class="qualificaiton_panel" id="qr_<?php echo $qkey;?>">
							<div class="row">
								<div class="col-lg-3 col-md-6">
									<div class="form-group">
										<label for="pwd">Qualification<span class="mandatory">*</span></label>
										{{ Form::select('qualification',array('1'=>'M.B.B.S','2'=>'B.D.S','3'=>'B.P.T','4'=>'B.O.T',		'5'=>'B.A.M.S','6'=>'B.H.M.S','7'=>'B.U.M.S','8'=>'MS','9'=>'MD','10'=>'Mch'),$qual, ['class' => 'form-control select2','id'=>$qual_key]) }}
									</div>
									
								</div>
								
								<div class="col-lg-5 col-md-6">
									<div class="form-group">
										<label for="pwd">College<span class="mandatory">*</span></label>
										{{ Form::select('college',array('1'=>' All India Institute of Medical Sciences - [AIIMS], New Delhi','2'=>'Christian Medical College - [CMC], Vellore','3'=>'Sri Manakula Vinayagar Medical College and Hospital - [SMVMCH], Pondicherry','4'=>'Armed Forces Medical College - [AFMC], Pune','5'=>'Kasturba Medical College - [KMC], Mangalore','6'=>'Maulana Azad Medical College - [MAMC], New Delhi','7'=>'Jawaharlal Institute of Post Graduate Medical Education and Research - [JIPMER], Pondicherry','8'=>'Lady Hardinge Medical College - [LHMC], New Delhi','9'=>'Madras Medical College - [MMC], Chennai','10'=>'Grant Medical College - [GMC], Mumbai'),null, ['class' => 'form-control select2','id'=>$col_key]) }}
									</div>
								</div>
								
								<div class="col-lg-3 col-md-6">
									<div class="form-group">
										<label for="pwd">Completion Year<span class="mandatory">*</span></label>
										<?php 
											$year = call_user_func('getYear');
										?>
										{!! Form::select('year', ['' => 'Select'] +$year,0,array('class'=>'form-control select2','id'=>$yr_key));!!}
									</div>
								</div>
								<?php if($qkey > 0){?>
								<div class="col-lg-1 col-md-1 text-center delete_icon">
									<img src="{{ asset('images/delete.png') }}" alt="" id="<?php echo $qkey;?>" onclick="remEdu(this.id);" />
								</div>	
								<?php }?>					
							</div>
						</div>
						<?php }?>	
						<div class="addEduDetails"></div>
						<input type="hidden" name="edu_count" id="edu_count"/>
					</div>
					
					
					
					<div class="memberships-recognitions">
						<h4>Specialization *<i class="fa fa-exclamation-circle fa-lg" aria-hidden="true"></i></h4>
						<div class="add-award">
							<button class="add-schedule dr-add-schedule dr-spl-add"><i class="fa fa-plus fa-lg" aria-hidden="true"></i> Add Specialization</button>
						</div>
						
						<label class="know-more">
							At least one of your listed specializations should match your qualification for your profile to go live. <a href="#">Know more</a>
							</br>
							Also, Specializations with unmapped qualifications won’t yield and search results.
						</label>
						<label class="specialist-cancer"><i class="fa fa-question-circle" aria-hidden="true"></i>  Physica Medicine and Rehabilitation Specialist for Cancer  <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></label>
						
						<?php
							$specializations = Auth::user()->speciality;
							$specialization_details = explode(",", $specializations);
							$specialization_count = count($specialization_details);
							$specialization_count;
							foreach ($specialization_details as $spkey => $speciality) {
								$sp_key = 'speciality_'.$spkey;
						?>
						<div class="row" id="sr_<?php echo $spkey;?>">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="pwd">Add Specialization<span class="mandatory">*</span></label>
									{{ Form::select('speciality',array('1'=>'Anesthesiologist','2'=>'Obstetrician','3'=>'Cardiologist','4'=>'Dermatologist','5'=>'Gastroenterologist','6'=>'Gynecologist','7'=>'Hematologist','8'=>'Neonatologist','9'=>'Nephrologist','10'=>'Oncologist'),$speciality, ['class' => 'form-control select2','id'=>$sp_key]) }}
								</div>
							</div>
							<?php if($spkey > 0){?>
								<div class="col-lg-1 col-md-1 text-center delete_icon">
									<img src="{{ asset('images/delete.png') }}" alt="" id="<?php echo $spkey;?>" onclick="remSpl(this.id);"/>
								</div>							
							<?php }?>
						</div>	
						<?php }?>	
						<div class="addSplDetails"></div>
						<input type="hidden" name="spl_count" id="spl_count"/>				
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
	//Split the Qualification Rows based on the registration details
	var qcount = <?php echo $qualification_count;?>;
	qcount = parseInt(qcount)-1;
	$("#edu_count").val(qcount);

	//Split the Spcialization Rows based on the registration details
	var scount = <?php echo $specialization_count;?>;
	scount = parseInt(scount)-1;
	$("#spl_count").val(scount);

});

</script>
<script src="{{ asset('js/doctor/education.js') }}"></script>
@stop
