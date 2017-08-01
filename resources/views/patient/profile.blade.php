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
                                <div class="flash-message">
                                  @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                    @if(Session::has('alert-' . $msg))
                                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
                                    @endif
                                  @endforeach
                                </div>                                
				{{ Form::open(array('enctype' => 'multipart/form-data','method' => 'POST','id'=>'patient_form')) }}		
                                {{ Form::hidden('user_id', Auth::user()->id, array('id' => 'user_id')) }}
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="usr" class="usr-photo-change">Change Photo</label>
								<span class="change-profile-img">
                                                                    @if(isset($result->profile_image) && !empty($result->profile_image) && count($result->profile_image)>0)
                                                                    <img src="{{URL::asset('/uploads/patients/profile/'.$result->profile_image)}}" alt="profile Pic" height="100" width="100">
                                                                    @endif
                                                                </span>
								<div class="change-photo-up">
									<label class="btn-bs-file btn btn-xs btn-success browse-btn">
										Choose Photo
										{{ Form::file('profile_pic', ['class' => 'field exception-fields','id'=>'profile_pic']) }}
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
                                                                @if(isset($result->full_name) && !empty($result->full_name) && count($result->full_name)>0)
                                                                    {{ Form::text('full_name',$result->full_name,array('maxlength'=>255,'class'=> 'form-control','id'=>'full_name')) }}
                                                                @else
                                                                    {{ Form::text('full_name','',array('maxlength'=>255,'class'=> 'form-control','id'=>'full_name')) }}
                                                                @endif
									

							</div>
						</div>
						
						<div class="col-lg-4 col-md-6">
							<div class="form-group">
									<label for="pwd">Country<span class="mandatory">*</span></label>
                                                                        @if(isset($result->country) && !empty($result->country) && count($result->country)>0)
                                                                        {{ Form::select('country', array('1'=>'India','2'=>'Pakistan','3'=>'Japan','4'=>'Srilanka'),$result->country, ['class' => 'form-control','id'=>'country']) }}
                                                                        @else
									{{ Form::select('country', array('1'=>'India','2'=>'Pakistan','3'=>'Japan','4'=>'Srilanka'),1, ['class' => 'form-control','id'=>'country']) }}
                                                                        @endif
								</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="form-group">
								<label for="usr">Age : <span class="mandatory">*</span></label>
                                                                @if(isset($result->age) && !empty($result->age) && count($result->age)>0)
                                                                    {{ Form::text('age',$result->age,array('maxlength'=>3,'class'=> 'form-control','id'=>'age')) }}
                                                                @else
                                                                    {{ Form::text('age','',array('maxlength'=>3,'class'=> 'form-control','id'=>'age')) }}
                                                                @endif                                                                								
							</div>
						</div>
						
						<div class="col-lg-4 col-md-6">
							<div class="form-group">
									<label for="pwd">State<span class="mandatory">*</span></label>
                                                                        @if(isset($result->state) && !empty($result->state) && count($result->state)>0)
                                                                            {{ Form::select('state', array('1'=>'TamilNadu','2'=>'Bihar','3'=>'Karnataka','4'=>'Kerala'),$result->state, ['class' => 'form-control','id'=>'state']) }}
                                                                        @else
                                                                            {{ Form::select('state', array('1'=>'TamilNadu','2'=>'Bihar','3'=>'Karnataka','4'=>'Kerala'),1, ['class' => 'form-control','id'=>'state']) }}
                                                                        @endif
									
								</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="form-group">
									<label for="pwd">Gender<span class="mandatory">*</span></label>
										<div class="radio-box">
                                                                                    @if(isset($result->gender) && !empty($result->gender) && $result->gender == 'M')
											{{ Form::radio('gender','M',true,array('id'=>'radio1')) }}
                                                                                    @else
                                                                                        {{ Form::radio('gender','M','',array('id'=>'radio1')) }}
                                                                                    @endif
											 <label for="radio1">Male</label>
                                                                                    @if(isset($result->gender) && !empty($result->gender) && $result->gender == 'F')
                                                                                        {{ Form::radio('gender','F',true,array('id'=>'radio2')) }}
                                                                                    @else
											 {{ Form::radio('gender','F','',array('id'=>'radio2')) }}
                                                                                    @endif     
											 <label for="radio2">Female</label>
										</div>
								</div>
						</div>
						
						<div class="col-lg-4 col-md-6">
							<div class="form-group">
									<label for="pwd">City<span class="mandatory">*</span></label>
                                                                        @if(isset($result->city) && !empty($result->city) && count($result->city)>0)
                                                                            {{ Form::select('city', array('1'=>'Chennai','2'=>'Bangalore','3'=>'Mumbai','4'=>'Kolkatta'),$result->city, ['class' => 'form-control','id'=>'city']) }}
                                                                        @else
                                                                            {{ Form::select('city', array('1'=>'Chennai','2'=>'Bangalore','3'=>'Mumbai','4'=>'Kolkatta'),1, ['class' => 'form-control','id'=>'city']) }}
                                                                        @endif  
									
								</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="form-group">
								<label for="usr">Date of Birth: <span class="mandatory">*</span></label>								
                                                                @if(isset($result->dob) && !empty($result->dob) && count($result->dob)>0)
                                                                    {{ Form::text('dob',$result->dob,array('class'=> 'form-control','id'=>'datepicker','readonly'=>true)) }}
                                                                @else
                                                                    {{ Form::text('dob','',array('class'=> 'form-control','id'=>'datepicker','readonly'=>true)) }}
                                                                @endif                                                                								
																
								
							</div>
						</div>
						
						
						<div class="col-lg-4 col-md-6">
							<div class="form-group">
								<label for="usr">Address: <span class="mandatory">*</span></label>
                                                                @if(isset($result->address) && !empty($result->address) && count($result->address)>0)
                                                                    {{ Form::text('address',$result->address,array('class'=> 'form-control','id'=>'address')) }}
                                                                @else
                                                                    {{ Form::text('address','',array('class'=> 'form-control','id'=>'address')) }}
                                                                @endif                                                                  
								
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="form-group">
									<label for="pwd">Blood Group<span class="mandatory">*</span></label>
                                                                        @if(isset($result->blood_group) && !empty($result->blood_group) && count($result->blood_group)>0)
                                                                            {{ Form::select('blood_group', array('1'=>'A+ve','2'=>'B+ve','3'=>'O-ve','4'=>'AB+ve'),$result->blood_group, ['class' => 'form-control','id'=>'blood_group']) }}
                                                                        @else
                                                                            {{ Form::select('blood_group', array('1'=>'A+ve','2'=>'B+ve','3'=>'O-ve','4'=>'AB+ve'),1, ['class' => 'form-control','id'=>'blood_group']) }}
                                                                        @endif 
								</div>
						</div>
						
						<div class="col-lg-4 col-md-6">
							<div class="form-group">
								<label for="usr">Zip Code : <span class="mandatory">*</span></label>
                                                                @if(isset($result->zip_code) && !empty($result->zip_code) && count($result->zip_code)>0)
                                                                    {{ Form::text('zip_code',$result->zip_code,array('maxlength'=>10,'class'=> 'form-control','id'=>'zip_code')) }}
                                                                @else
                                                                    {{ Form::text('zip_code','',array('maxlength'=>10,'class'=> 'form-control','id'=>'zip_code')) }}
                                                                @endif 								
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-4 col-md-6">
								<div class="form-group">
									<label for="pwd">Language<span class="mandatory">*</span></label>
                                                                        @if(isset($result->lang) && !empty($result->lang) && count($result->lang)>0)
                                                                            {{ Form::select('lang', array('1'=>'Tamil','2'=>'English','3'=>'Hindi','4'=>'Malayalam'),$result->lang, ['class' => 'form-control lang','id'=>'lang','multiple'=>true]) }}
                                                                        @else
                                                                            {{ Form::select('lang', array('1'=>'Tamil','2'=>'English','3'=>'Hindi','4'=>'Malayalam'),1, ['class' => 'form-control lang','id'=>'lang','multiple'=>true]) }}
                                                                        @endif  
								</div>
						</div>
						
						<div class="col-lg-4 col-md-6">
							<div class="form-group">
								<label for="usr">Mobile Number : <span class="mandatory">*</span></label>
                                                                @if(isset($result->mobile) && !empty($result->mobile) && count($result->mobile)>0)
                                                                   {{ Form::text('mobile',$result->mobile,array('maxlength'=>10,'class'=> 'form-control','id'=>'mobile_number')) }}
                                                                @else
                                                                    {{ Form::text('mobile','',array('maxlength'=>10,'class'=> 'form-control','id'=>'mobile_number')) }}
                                                                @endif 
                                                                
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-4 col-md-6 dis-flex">
							
								<div class="verification">
									<div class="form-group">
										<label for="usr">Verification Doc: <span class="mandatory">*</span></label>
                                                                @if(isset($result->document) && !empty($result->document) && count($result->document)>0)
                                                                   {{ Form::text('verification_doc_type',$result->document,array('maxlength'=>255,'class'=> 'form-control exception-fields','id'=>'verification_doc_type','placeholder'=>'Id Proof Name and upload Doc(eg- AAdhar,Passport)')) }}
                                                                @else
                                                                   {{ Form::text('verification_doc_type','',array('maxlength'=>255,'class'=> 'form-control exception-fields','id'=>'verification_doc_type','placeholder'=>'Id Proof Name and upload Doc(eg- AAdhar,Passport)')) }}
                                                                @endif                                                                                 
											
										</div>
								</div>
								<div class="browse-btn-verifi">
									 <label class="btn-bs-file btn btn-xs btn-success browse-btn">
										Browse
										{{ Form::file('document', ['class' => 'field exception-fields','id'=>'document']) }}
									</label>
									<span id="verif_doc_name"></span>
								</div>
							
						</div>
						
						<div class="col-lg-4 col-md-6">
							<div class="form-group">
								<label for="usr">Alternate Number: <span class="mandatory">*</span></label>
                                                                @if(isset($result->alternate_no) && !empty($result->alternate_no) && count($result->alternate_no)>0)
								{{ Form::text('alternate_no',$result->alternate_no,array('maxlength'=>10,'class'=> 'form-control','id'=>'alternate_no')) }}
                                                                @else
                                                                {{ Form::text('alternate_no','',array('maxlength'=>10,'class'=> 'form-control','id'=>'alternate_no')) }}
                                                                @endif
							</div>
						</div>
					</div>
						
					<div class="row">	
						<div class="col-lg-4 col-md-6">
							<div class="form-group">
								<label for="usr">Email id : <span class="mandatory">*</span></label>
                                                                @if(isset($result->email_id) && !empty($result->email_id) && count($result->email_id)>0)
								{{ Form::email('email_id',$result->email_id,array('maxlength'=>255,'class'=> 'form-control','id'=>'email_id')) }}
                                                                @else
                                                                {{ Form::email('email_id','',array('maxlength'=>255,'class'=> 'form-control','id'=>'email_id')) }}
                                                                @endif
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

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.responsive-tabs/1.6.1/responsive-tabs.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/additional-methods.min.js"></script>
  
<script>
$( function() {
$( "#patient_form" ).validate({
  rules: {
    full_name: {
      required: true,
      minlength: 1
    },
    country: {
      required: true      
    },
    age: {
      required: true,
      digits: true
    },
    dob: {
      required: true
    },
    address: {
      required: true
    },
    zip_code: {
      required: true,
      digits: true
    },
    mobile: {
      required: true     
    },
    alternate_no: {
      required: true
    },
    verification_doc_type: {
      required: true
    },
    email_id: {
      required: true,
      email: true
    }
 },
 messages: {
    full_name: {
      required: "You forgot to give your Full Name",
      minlength: "Your name is too small to save"
    },
    age: {
      required: "You forgot to give your Age",
      digits: "Your Age should be in numbers"
    },
    dob: {
      required: "You forgot to give your Date Of Birth"
    },
    address: {
      required: "Can we have your address please"
    },
    zip_code: {
      required: "You forgot to give your Zipcode",
      digits: "Your Zipcode should be in numbers"
    },
    mobile: {
      required: "We need your mobile number to contact you"
    },
    alternate_no: {
      required: "We need your alternate number to contact you in-case of emergency"
    },
    verification_doc_type: {
      required: "Please provide your verification document details here"
    },
    email_id: {
      required: "We need your email address to contact you",
      email: "Your email address must be in the format of name@domain.com"
    }
 }
});

});
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
    $("#datepicker").datepicker({ 
        autoclose: true, 
        todayHighlight: true,
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true
	}).datepicker().on('changeDate', function(e) {alert(1)
	  $("#age").val(getAge(e.date));
    });
	//$('#alternate_no').mask('(000) 000-0000');
	//$('#mobile_number').mask('(000) 000-0000');
//	$('.responsive-tabs').responsiveTabs({
//	  accordionOn: ['xs']
//	});
	
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
 
  
  
	$("#profile_image,#verification_doc").change(function(){
		readURL(this);
	});
	
  
 

});





 

</script>
@stop