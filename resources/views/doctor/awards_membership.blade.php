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
			{{ Form::open(array('method' => 'POST','id'=>'dr_awd_form')) }}
			<div class="edit-profile-photo dr-edit-profile-photo login-register-tab">
				<h2>Awards & Membership</h2>
					<div class="awards-recognitions">
						<h4>Awards / Recognitions <i class="fa fa-exclamation-circle fa-lg" aria-hidden="true"></i></h4>						
						<label class="awards-note">*Complete your previous award details</label>
						<div class="add-award">
							<button type="button" class="add-schedule dr-add-schedule dr-add-award"><i class="fa fa-plus fa-lg" aria-hidden="true"></i> Add Award / Recongnition</button>
						</div>
						<?php if($doctor_award==array()){?>
						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<label for="usr">Awards / Recognitions <span class="mandatory">*</span></label>
									<input type="text" name="award[]" placeholder="Enter Awards / Recognition" class="form-control" id="award_0">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="pwd">Year</label>
									<?php 
										$year = call_user_func('getYear');
									?>
									{!! Form::select('year[]', ['' => 'Select'] +$year,0,array('class'=>'form-control select2','id'=>'year_0'));!!}					
								</div>
							</div>
						</div>
						<?php }else{
							foreach ($doctor_award as $da_key => $da) {
								$dawd_key = 'award_'.$da_key;
								$dawd_yr_key = 'award_'.$da_key;
								$dr_awd = $da['award_name'];
								$dr_awd_year = $da['year'];
								$atid = $da['id'];
						?>
							<div class="row" id="ar_<?php echo $da_key;?>">
								<div class="col-md-8">
									<div class="form-group">
										<label for="usr">Awards / Recognitions <span class="mandatory">*</span></label>
										<input type="text" name="award[]" placeholder="Enter Awards / Recognition" value="<?php echo $dr_awd;?>" class="form-control" value="<?php echo $dawd_key;?>"">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="pwd">Year</label>
										<?php 
											$year = call_user_func('getYear');
										?>
										{!! Form::select('year[]', ['' => 'Select'] +$year,$dr_awd_year,array('class'=>'form-control select2','id'=>$dawd_yr_key));!!}					
									</div>
								</div>								
								<?php if($da_key>0){?>
									<div class="col-lg-1 col-md-1 text-center delete_icon">
										<img src="{{ asset('images/delete.png') }}" alt="" id="<?php echo $da_key;?>" onclick="remAwd(this.id,'d','<?php echo $dr_awd;?>','<?php echo $atid;?>');" />
									</div>
								<?php }?>
							</div>
						<?php } }?>
						<div class="addAwardDetails"></div>
						<input type="hidden" name="awd_count" id="awd_count"/>
					</div>		
					
					<div class="memberships-recognitions">
						<h4>Memberships <i class="fa fa-exclamation-circle fa-lg" aria-hidden="true"></i></h4>
						<label class="awards-note">*Complete your previous Membership details</label>
						<div class="add-award">
							<button type="button" class="add-schedule dr-add-schedule dr-add-mem"><i class="fa fa-plus fa-lg" aria-hidden="true"></i> Add Memberships</button>
						</div>
						<?php if($doctor_membership==array()){?>
							<div class="row">
								<div class="col-lg-4 col-md-6">
									<div class="form-group">
										<label for="pwd">Memberships</label>
										{{ Form::select('membership[]',array('1'=>'Government Doctors Association','2'=>'Association of Women Doctors Singapore','3'=>'Karnataka Qualified Homoeopathic Doctors Association(KQHDA)','4'=>'M1','5'=>'M2','6'=>'M3','7'=>'M4','8'=>'M5','9'=>'M6','10'=>'M7'),0, ['class' => 'form-control select2','id'=>'mem_0']) }}
									</div>
								</div>
							</div>
						<?php }else{
							foreach ($doctor_membership as $dm_key => $dm) {
								$dmsp_key = 'mem_'.$dm_key;
								$dr_msp = $dm['membership'];
								$mtid = $dm['id'];
						?>
							<div class="row" id="mr_<?php echo $dm_key;?>">
								<div class="col-lg-4 col-md-6">
									<div class="form-group">
										<label for="pwd">Memberships</label>
										{{ Form::select('membership[]',array('1'=>'Government Doctors Association','2'=>'Association of Women Doctors Singapore','3'=>'Karnataka Qualified Homoeopathic Doctors Association(KQHDA)','4'=>'M1','5'=>'M2','6'=>'M3','7'=>'M4','8'=>'M5','9'=>'M6','10'=>'M7'),$dr_msp, ['class' => 'form-control select2','id'=>$dmsp_key]) }}
									</div>
								</div>
								<?php if($dm_key>0){?>
									<div class="col-lg-1 col-md-1 text-center delete_icon">
										<img src="{{ asset('images/delete.png') }}" alt="" id="<?php echo $dm_key;?>" onclick="remMem(this.id,'d','<?php echo $dr_msp;?>','<?php echo $mtid;?>');" />
									</div>
								<?php }?>
							</div>
						<?php } }?>
						<div class="addMemDetails"></div>
						<input type="hidden" name="mem_count" id="mem_count"/>
					</div>
				{{ Form::close() }}
					<div class="next-page-btn">
						<div class="text-right">
							<button class="btn btn-formsubmit password-btn">Save</button>
							<a href="{{ url('doctor/services') }}" class="btn btn-formsubmit password-btn">Previous</a>
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

});
</script>
<script src="{{ asset('js/doctor/awards.js') }}"></script>
@stop
