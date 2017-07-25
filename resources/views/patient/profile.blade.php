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
				
				{{ Form::open(array('method' => 'POST','id'=>'edit_profile_form')) }}
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="usr" class="usr-photo-change">Change Photo</label>
								<span class="change-profile-img"></span>
								<div class="change-photo-up">
									<label class="btn-bs-file btn btn-xs btn-success browse-btn">
										Choose Photo
										{{ Form::file('profile_image', ['class' => 'field exception-fields','id'=>'profile_image']) }}
									</label>
									<span class="browse-computer">Browse file from the computer</span>
																	
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="form-group">
								<label for="usr">Full Name: <span class="mandatory">*</span></label>
									{{ Form::text('name','',array('class'=> 'form-control','id'=>'name')) }}

							</div>
						</div>
						
						<div class="col-lg-4 col-md-6">
							<div class="form-group">
									<label for="pwd">Country<span class="mandatory">*</span></label>
									{{ Form::select('country', array('1'=>'India','2'=>'Pakistan','3'=>'Japan','4'=>'Srilanka'),1, ['class' => 'form-control','id'=>'country']) }}
								</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="form-group">
								<label for="usr">Age : <span class="mandatory">*</span></label>
								{{ Form::text('age','',array('class'=> 'form-control','id'=>'age','readonly'=>'true')) }}
							</div>
						</div>
						
						<div class="col-lg-4 col-md-6">
							<div class="form-group">
									<label for="pwd">State<span class="mandatory">*</span></label>
									{{ Form::select('state', array('1'=>'TamilNadu','2'=>'Bihar','3'=>'Karnataka','4'=>'Kerala'),1, ['class' => 'form-control','id'=>'state']) }}
								</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="form-group">
									<label for="pwd">Gender<span class="mandatory">*</span></label>
										<div class="radio-box">
											{{ Form::radio('gender','M',true,array('id'=>'radio1')) }}
											 <label for="radio1">Male</label>
											 {{ Form::radio('gender','F',array('id'=>'radio2')) }}
											 <label for="radio2">Female</label>
										</div>
								</div>
						</div>
						
						<div class="col-lg-4 col-md-6">
							<div class="form-group">
									<label for="pwd">City<span class="mandatory">*</span></label>
									{{ Form::select('city', array('1'=>'Chennai','2'=>'Bangalore','3'=>'Mumbai','4'=>'Kolkatta'),1, ['class' => 'form-control','id'=>'city']) }}
								</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="form-group">
								<label for="usr">Date of Birth: <span class="mandatory">*</span></label>
								<div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
									{{ Form::text('dob','',array('class'=> 'form-control','id'=>'dob','readonly'=>true)) }}
									<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
								</div>
							</div>
						</div>
						
						
						<div class="col-lg-4 col-md-6">
							<div class="form-group">
								<label for="usr">Address: <span class="mandatory">*</span></label>
								{{ Form::text('address','',array('class'=> 'form-control','id'=>'address')) }}
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="form-group">
									<label for="pwd">Blood Group<span class="mandatory">*</span></label>
									{{ Form::select('blood_group', array('1'=>'A+ve','2'=>'B+ve','3'=>'O-ve','4'=>'AB+ve'),1, ['class' => 'form-control','id'=>'blood_group']) }}
								</div>
						</div>
						
						<div class="col-lg-4 col-md-6">
							<div class="form-group">
								<label for="usr">Zip Code : <span class="mandatory">*</span></label>
								{{ Form::text('zip_code','',array('class'=> 'form-control','id'=>'zip_code')) }}
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-4 col-md-6">
								<div class="form-group">
									<label for="pwd">Language<span class="mandatory">*</span></label>
									{{ Form::select('language', array('1'=>'Tamil','2'=>'English','3'=>'Hindi','4'=>'Malayalam'),1, ['class' => 'form-control','id'=>'language','multiple'=>true]) }}
								</div>
						</div>
						
						<div class="col-lg-4 col-md-6">
							<div class="form-group">
								<label for="usr">Mobile Number : <span class="mandatory">*</span></label>
								{{ Form::text('mobile_number','',array('class'=> 'form-control','id'=>'mobile_number')) }}
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-4 col-md-6 dis-flex">
							
								<div class="verification">
									<div class="form-group">
										<label for="usr">Verification Doc: <span class="mandatory">*</span></label>
											{{ Form::text('verification_doc_type','',array('class'=> 'form-control exception-fields','id'=>'verification_doc_type','placeholder'=>'Id Proof Name and upload Doc(eg- AAdhar,Passport)')) }}
										</div>
								</div>
								<div class="browse-btn-verifi">
									 <label class="btn-bs-file btn btn-xs btn-success browse-btn">
										Browse
										{{ Form::file('verification_doc', ['class' => 'field exception-fields','id'=>'verification_doc']) }}
									</label>
									<span id="verif_doc_name"></span>
								</div>
							
						</div>
						
						<div class="col-lg-4 col-md-6">
							<div class="form-group">
								<label for="usr">Alternate Number: <span class="mandatory">*</span></label>
								{{ Form::text('alt_mobile_no','',array('class'=> 'form-control','id'=>'alt_mobile_no')) }}
							</div>
						</div>
					</div>
						
					<div class="row">	
						<div class="col-lg-4 col-md-6">
							<div class="form-group">
								<label for="usr">Email id : <span class="mandatory">*</span></label>
								{{ Form::email('email','',array('class'=> 'form-control','id'=>'email')) }}
							</div>
						</div>
						<div class="col-lg-4 col-md-6"></div>
					</div>
					
					<div class="password-save-btn">
						<button type="button" class="btn btn-formsubmit password-btn">Change Password</button>
						{{ Form::submit('Save Profile', array('class' => 'btn btn-formsubmit save-btn','id'=>'save_profile')) }}
					</div>
					{{ Form::close()}}
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
<script src="{{ asset('js/patient_profile.js') }}"></script>

<script>
function getAge(dateString) 
{
    var today = new Date();
    var birthDate = new Date(dateString);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) 
    {
        age--;
    }
    return age;
}
function readURL(input) {
	
		if(input.name=='verification_doc' && input.files && input.files[0]){
			$('span#verif_doc_name').html(input.files[0].name);
			return false;
		}
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function (e) {
				$('span.change-profile-img').css('background','url('+e.target.result+') no-repeat')
			}
			reader.readAsDataURL(input.files[0]);
		}
}
$(document).ready(function(){
	$('#alt_mobile_no').mask('(000) 000-0000');
	$('#mobile_number').mask('(000) 000-0000');
	$('.responsive-tabs').responsiveTabs({
	  accordionOn: ['xs']
	});

	<!-- Multiselect -->
    $('#state').multiselect({
      buttonWidth: '100%'
    });
	
	 $('#blood_group').multiselect({
      buttonWidth: '100%'
    });
	$('#language').multiselect({
      buttonWidth: '100%'
    });
	$('#country').multiselect({
      buttonWidth: '100%'
    });
	$('#city').multiselect({
      buttonWidth: '100%'
    });
 
  $("#datepicker").datepicker({ 
        autoclose: true, 
        todayHighlight: true,
		endDate:"0d",
		clearBtn:true
  }).datepicker().on('changeDate', function(e) {
	  $("#age").val(getAge(e.date));
    });
  
	$("#profile_image,#verification_doc").change(function(){
		readURL(this);
	});
	
  
 

});





 

</script>
@stop