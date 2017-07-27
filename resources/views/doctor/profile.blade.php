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
						<h5>Dr. {{ Auth::user()->name }}</h5>
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

			@if ($errors->any())
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif

			{{ Form::open(array('method' => 'POST','id'=>'dr_profile_form', 'enctype'=>'multipart/form-data')) }}

			<?php 

				
				if($doc!=array()){
				    $doc_id = $doc['id'];
					$doc_uid = $doc['user_id'];
					$doc_title = $doc['title'];
					$doc_city = $doc['city'];
					$doc_exp = $doc['experience'];
					$doc_des = $doc['description'];
					$imgsrc = $doc['profile_pic'];
					$img = $doc['profile_pic'];

				}else{
					$doc_id = "";
					$doc_uid = "";
					$doc_title = "";
					$doc_city = "";
					$doc_exp = "";
					$doc_des = "";
					$imgsrc = "def_img.png";
					$img = '';
				}
			?>
			<div class="edit-profile-photo dr-edit-profile-photo login-register-tab">
				<h2>Personal contact details</h2>
				<div class="row">					
					<div class="col-md-12">
						<div class="form-group">
							<label for="usr" class="usr-photo-change">Change Photo</label>
							<span class="change-profile-img"><img id="ch_img" src="{{ asset('uploads/doctors/profile/').'/'.$imgsrc}}"/></span>
							<div class="change-photo-up">
								<label class="btn-bs-file btn btn-xs btn-success browse-btn">
									Choose Photo
									<input name="profile_pic" type="file" id="profile_pic" accept="image/*" value = "{{ $img }}" onchange="loadFile(event);">
								</label>
								<span class="browse-computer">Browse file from the computer</span>							
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-2">
						<div class="form-group">
							<label for="pwd">Title</label>
							{{ Form::select('title',array('1'=>'Dr','2'=>'Ph.D.','3'=>'M.D','4'=>'DrPh'),$doc_title, ['class' => 'form-control select2','id'=>'title']) }}
						</div>
					</div>
					<div class="col-md-8">
						<div class="form-group">
							<label for="usr">Name : <span class="mandatory">*</span></label>
							<?php $user_name = Auth::user()->name; $user_id = Auth::user()->id;?>
							{{ Form::text('name', $user_name, array('class' => 'form-control', 'id' => 'name')) }}
							{{ Form::hidden('id', $user_id, array('class' => 'form-control', 'id' => 'id')) }}
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="form-group">
							<label for="pwd">Gender<span class="mandatory">*</span></label>								
							<div class="radio-box">
								 <input id="radio1" type="radio" name="gender" value="M" <?php echo (Auth::user()->gender==='M' ? ' checked' : ''); ?>><label for="radio1">Male</label>
								 <input id="radio2" type="radio" name="gender" value="F" <?php echo (Auth::user()->gender==='F' ? ' checked' : ''); ?>><label for="radio2">Female</label>
							</div>
						</div>
					</div>
					
					
					<div class="col-lg-4 col-md-6">
						<div class="form-group">
							<label for="pwd">City<span class="mandatory">*</span> <i class="fa fa-exclamation-circle fa-lg" aria-hidden="true"></i></label>
							<?php $cities = call_user_func('getCitiesList');?>
							{!! Form::select('city', ['' => 'Select'] +$cities->toArray(), $doc_city ,array('class'=>'form-control select2','id'=>'city'));!!}
						</div>
					</div>
					
					
					<div class="col-lg-4 col-md-6">
						<div class="form-group">
							<label for="exp">Years of Experience : <span class="mandatory">*</span>  <i class="fa fa-exclamation-circle fa-lg" aria-hidden="true"></i></label>
							{{ Form::text('experience', $doc_exp, array('class' => 'form-control', 'id' => 'user_name','placeholder' => 'Enter number of years', 'maxlength' => '2', 'onkeyup' => 'validateNumerics(this.id)')) }}
							<div class="experience"></div>
						</div>
					</div>
					
				</div>	
					
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="form-group">
							<label for="pwd">Language<span class="mandatory">*</span></label>
							<?php 
								$languages = call_user_func('getLanguages');
								$lang = Auth::user()->language; 
								$getLang = call_user_func('getLang', $lang);
							?>
							{!! Form::select('language[]', ['' => 'Select'] +$languages->toArray(),$getLang->toArray(),array('class'=>'form-control select2-multiple','multiple' => 'multiple','id'=>'language'));!!}
						</div>
					</div>
					
					<div class="col-lg-6 col-md-6">
						<div class="form-group">
							<label for="pwd">Nationality<span class="mandatory">*</span></label>
							<?php $nationalities = call_user_func('getNationalities'); $nationality = Auth::user()->nationality; ?>
							{!! Form::select('nationality', ['' => 'Select'] +$nationalities->toArray(),$nationality,array('class'=>'form-control select2','id'=>'nationality'));!!}
						</div>
					</div>				
				</div>
				
				<div class="row">	
					<div class="form-group">
						<label for="comment">About Me: <i class="fa fa-exclamation-circle fa-lg" aria-hidden="true"></i></label>
						<textarea class="form-control" rows="5" name="description" id="description"><?php echo $doc_des;?></textarea>
						<label>Please don’t include email address or phone number in this section. Changes made here requires verification, if not reflected in 48 hours then please contact support.</label>
					</div>
				</div>	
					
				<div class="row">
					<div class="col-lg-4 col-md-5">
						<div class="form-group">
							<label for="usr">Contact Number :<span class="mandatory">*</span></label>
							<div class="verify-number">
								<?php $mob_no = Auth::user()->mobile_number;?>
								{{ Form::text('contact_number', $mob_no, array('class' => 'form-control', 'id' => 'contact_number','readonly' => 'true')) }}
							<div class="experience"></div>
								<!--<span class="verify-num"><a href="#">Verify</a></span>
								<span class="num-close"><i class="fa fa-times fa-lg" aria-hidden="true"></i></span>-->
							</div>
						</div>
					</div>
				</div>
					
				<div class="row">
					<div class="col-lg-4 col-md-5">
						<div class="form-group">
							<label for="usr">Email Address :<span class="mandatory">*</span></label>
							<div class="verify-number">
								<?php $email = Auth::user()->email;?>
								{{ Form::text('doctor_email', $email, array('class' => 'form-control', 'id' => 'doctor_email','readonly' => 'true')) }}
							<div class="experience"></div>
								<!--<span class="verify-num"><a href="#">Verify</a></span>
								<span class="num-close"><i class="fa fa-times fa-lg" aria-hidden="true"></i></span>-->
							</div>
						</div>
					</div>
				</div>

				<div class="next-page-btn">
					<div class="text-right">
						<button class="btn btn-formsubmit password-btn">Save</button>
						<a href="{{ url('doctor/specialization') }}" class="btn btn-formsubmit password-btn">Next</a>
					</div>
				</div>
			</div>

			{{ Form::close() }}
			
			<div class="footer-copyrights">
				<h5>Copyright @ 2017 Doctor online All Rights reserved</h5>
			</div>	

		</aside>
        </div>
        <!-- /#page-content-wrapper -->
@endsection
@section('scripts')
<script src="{{ asset('js/doctor/basic.js') }}"></script>
@stop
