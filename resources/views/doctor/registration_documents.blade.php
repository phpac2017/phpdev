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
			{{ Form::open(array('method' => 'POST','id'=>'dr_doc_form', 'enctype'=>'multipart/form-data')) }}
			<div class="edit-profile-photo dr-edit-profile-photo login-register-tab">
				<h2>Registration & Documents</h2>
				
					<div class="awards-recognitions">
						<h4>Registration Details * <i class="fa fa-exclamation-circle fa-lg" aria-hidden="true"></i></h4>
						<label class="know-more">Allied healthcare professionals do not need to enter registration details. <a href="#">Know more</a></label>
						<label class="awards-note">*Complete your previous registration details</label>
						<div class="add-award">
							<button type="button" class="add-schedule dr-add-schedule dr-add-reg"><i class="fa fa-plus fa-lg" aria-hidden="true"></i> Add Registration</button>
						</div>
						
						<?php if($doctor_documents==array()){?>
						<div class="row">
							<div class="col-lg-4 col-md-6">
								<div class="form-group">
									<label for="usr">Council Registration Number: <span class="mandatory">*</span></label>
									<input type="text" name="cr_no[]" placeholder="Enter Council Registration Number" class="form-control" id="cr_no_0">
									
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6">
								<div class="form-group">
									<label for="pwd">Select Council Name<span class="mandatory">*</span></label>
										{{ Form::select('council[]',array(	'1' => 'Andhra Pradesh Medical Council','2' => 'Arunachal Pradesh 	Medical Council','3' => 'Assam Medical Council','27' => 'Bareilly Medical Council',	'28' => 'Bhopal Medical Council','4' => 'Bihar Medical Council','29' => 'Bombay Medical Council','30' => 'Chandigarh Medical Council',	'5' => 'Chattisgarh Medical Council','6' => 'Delhi Medical Council','31' => 'Dental Council of India','39' => 'General Medical Council','7' => 'Goa Medical Council','8' => 'Gujarat Medical Council','9' => 'Haryana Dental &amp; Medical Councils','10' => 'Himanchal Pradesh Medical Council',	'45' => 'Hyderabad Medical Council','11' => 'Jammu &amp; Kashmir Medical Council','12' => 'Jharkhand Medical Council','13' => 'Karnataka Medical Council',	'14' => 'Kerala Medical Council','15' => 'Madhya Pradesh Medical Council','36' => 'Madras Medical Council','35' => 'Mahakoshal Medical Council',	'16' => 'Maharashtra Medical Council','26' => 'Manipur Medical Council','46' => 'Medical Council of India',	'47' => 'Medical Council of Tanganyika','42' => 'Mizoram Medical Council','37' => 'Mysore Medical Council',	'41' => 'Nagaland Medical Council','17' => 'Orissa Council of Medical Registration','38' => 'Pondicherry Medical Council',	'18' => 'Punjab Medical Council','19' => 'Rajasthan Medical Council','20' => 'Sikkim Medical Council',	'21' => 'Tamil Nadu Medical Council','43' => 'Telangana State Medical Council','33' => 'Travancore Cochin Medical Council',	'22' => 'Tripura State Medical Council ','23' => 'Uttar Pradesh Medical Council','24' => 'Uttarakhand Medical Council',	'40' => 'Vidharba Medical Council','25' => 'West Bengal Medical Council',),null, ['class' => 'form-control select2','id'=>'council_0']) }}
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6">
								<div class="form-group">
									<label for="pwd">Year<span class="mandatory">*</span></label>
									<?php 
										$year = call_user_func('getYear');
									?>
									{!! Form::select('year[]', ['' => 'Select'] +$year,0,array('class'=>'form-control select2','id'=>'year_0'));!!}
								</div>
							</div>							
						</div>	
						<?php }else{
							foreach ($doctor_documents as $dc_key  => $dc) {

								$cr_key = 'cr_no_'.$dc_key;
								$cno_key = 'council_'.$dc_key;
								$yr_key = 'year_'.$dc_key;
								$de_council_no = $dc['council_reg_no'];
								$de_council = $dc['council_name'];
								$de_year = $dc['year'];
								$docid = $dc['id'];
							?>
							<div class="row" id="cd_<?php echo $dc_key;?>">
								<div class="col-lg-4 col-md-6">
									<div class="form-group">
										<label for="usr">Council Registration Number: <span class="mandatory">*</span></label>
										<input type="text" name="cr_no[]" value="<?php echo $de_council_no;?>" class="form-control" id="<?php echo $cr_key;?>">
										
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6">
									<div class="form-group">
										<label for="pwd">Select Council Name<span class="mandatory">*</span></label>
											{{ Form::select('council[]',array(	'1' => 'Andhra Pradesh Medical Council','2' => 'Arunachal Pradesh 	Medical Council','3' => 'Assam Medical Council','27' => 'Bareilly Medical Council',	'28' => 'Bhopal Medical Council','4' => 'Bihar Medical Council','29' => 'Bombay Medical Council','30' => 'Chandigarh Medical Council',	'5' => 'Chattisgarh Medical Council','6' => 'Delhi Medical Council','31' => 'Dental Council of India','39' => 'General Medical Council','7' => 'Goa Medical Council','8' => 'Gujarat Medical Council','9' => 'Haryana Dental &amp; Medical Councils','10' => 'Himanchal Pradesh Medical Council',	'45' => 'Hyderabad Medical Council','11' => 'Jammu &amp; Kashmir Medical Council','12' => 'Jharkhand Medical Council','13' => 'Karnataka Medical Council',	'14' => 'Kerala Medical Council','15' => 'Madhya Pradesh Medical Council','36' => 'Madras Medical Council','35' => 'Mahakoshal Medical Council',	'16' => 'Maharashtra Medical Council','26' => 'Manipur Medical Council','46' => 'Medical Council of India',	'47' => 'Medical Council of Tanganyika','42' => 'Mizoram Medical Council','37' => 'Mysore Medical Council',	'41' => 'Nagaland Medical Council','17' => 'Orissa Council of Medical Registration','38' => 'Pondicherry Medical Council',	'18' => 'Punjab Medical Council','19' => 'Rajasthan Medical Council','20' => 'Sikkim Medical Council',	'21' => 'Tamil Nadu Medical Council','43' => 'Telangana State Medical Council','33' => 'Travancore Cochin Medical Council',	'22' => 'Tripura State Medical Council ','23' => 'Uttar Pradesh Medical Council','24' => 'Uttarakhand Medical Council',	'40' => 'Vidharba Medical Council','25' => 'West Bengal Medical Council',),$de_council, ['class' => 'form-control select2','id'=>$cno_key]) }}
									</div>
								</div>
								
								<div class="col-lg-3 col-md-6">
									<div class="form-group">
										<label for="pwd">Year<span class="mandatory">*</span></label>
										<?php 
											$year = call_user_func('getYear');
										?>
										{!! Form::select('year[]', ['' => 'Select'] +$year,$de_year,array('class'=>'form-control select2','id'=>$yr_key));!!}
									</div>
								</div>
								<?php if($dc_key>0){?>
									<div class="col-lg-1 col-md-1 text-center delete_icon">
										<img src="{{ asset('images/delete.png') }}" alt="" id="<?php echo $dc_key;?>" onclick="remReg(this.id,'d','<?php echo $de_council_no;?>','<?php echo $docid;?>');" />
									</div>
								<?php }?>
							</div>

						<?php } }?>
						<div class="addCncDetails"></div>
						<input type="hidden" name="cnc_count" id="cnc_count"/>			
					</div>
					
					<div class="memberships-recognitions">
						<h4>Documents / Certificates <i class="fa fa-exclamation-circle fa-lg" aria-hidden="true"></i></h4>
						<label class="mandatory-color">Mandatory photo proofs are missing</label>
						<label class="know-more">add photo proof for registration certificate, highest degree certificate & identity card to publish your profile</label>
						<div class="drop-up-photo">
							<span>Drop or <input name="profile_pic" type="file" id="profile_pic" accept="image/*">Upload Photos</a></span>
						</div>
					</div>
					<?php if($doctor_files != array()) {
						foreach($doctor_files as $dd_key => $dd){ 
							$count = $dd_key+1;
					?>
						<p class="upld_list"> Your Recently uploaded files.. </p>
						<p><?php echo $count." - ".$dd['documents'];?></p>
					<?php } } else {?>
						<p class="upld_list_emp"> You didn't upload any files recently. </p>
					<?php }?>
				{{ Form::close() }}
					<div class="next-page-btn">
						<div class="text-right">
							<button class="btn btn-formsubmit password-btn">Save</button>
							<a href="{{ url('doctor/specialization') }}" class="btn btn-formsubmit password-btn">Previous</a>
							<a href="{{ url('doctor/services') }}" class="btn btn-formsubmit password-btn">Next</a>
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
	

});
</script>
<script src="{{ asset('js/doctor/document.js') }}"></script>

@stop
