/*Document Ready Function*/
$(document).ready(function(){	
	$('#mobile_number').mask('(000) 000-0000');
});
	//Check Null / Undefined Value
	function isEmpty(value) {
		return typeof value == 'string' && !value.trim() || typeof value == 'undefined' || value === null;
	}
	
	/** Checkbox behavior to select only one checkbox **/	
	$('input[type="checkbox"]').on('change', function() {
		$('input[name="' + this.name + '"]').not(this).prop('checked', false);
	});	


/***************************** Login Validation and Submission ***************************************/

$('#register').on('click',function(e){
	if($( "#user_role option:selected" ).text()=='Patient'){
				$(".doctor-fields input").val('');
				$(".doctor-fields select").val('');
	}
	e.defaultPrevented;//preventDefault();
	var form = jQuery(this).parents("form:first");
	$("#divLoading").addClass('show');
	var name = jQuery("#name").val();
	var gender = "";
	var gender = $("#home1 input[type='radio']:checked");
	if (gender.length > 0) {
		gender = gender.val();
	}
	var email = jQuery("#email").val();
	var password = jQuery("#password").val();
	var country_code = jQuery("#country_code").val();
	var mobile_number = jQuery("#mobile_number").val();
	var nationality = jQuery("#nationality").val();
	var language = (jQuery("#language").val()==null)?null:jQuery("#language").val().join(",");
	var qualification = (jQuery("#qualification").val()==null)?null:jQuery("#qualification").val().join(",");
	var speciality =(jQuery("#speciality").val()==null)?null:jQuery("#speciality").val().join(",");
	var experience = jQuery("#experience").val();
	var mrc_no = jQuery("#mrc_no").val();
	var user_role=jQuery("#user_role").val();
	/*alert(name+"--"+gender+"--"+email+"--"+password+"--"+country_code+"--"+mobile_number+"--"+nationality+"--"+language+"--"+qualification+"--"+speciality+"--"+experience);*/

	/*if(email==''){
		$("#email").focus();
		$(".login_error").html('Please Enter E-mail');
		return false;
	}else{
		$(".login_error").html('');
		return true;
	}
	if(password==''){
		$("#password").focus();
		$(".login_error").html('Please Enter Password');
		return false;
	}else{
		$(".login_error").html('');
		return true;
	}*/
	var setAjaxUrl  =  window.location.protocol+'//'+window.location.host+'/register';
	//var setAjaxUrl  =  'http://localhost/demoapp/public/register';
	
	$.ajax({
		type: "POST",
		url: setAjaxUrl,
		data: {name:name, gender:gender, email:email, password:password, country_code:country_code, mobile_number:mobile_number, nationality:nationality, language:language, qualification:qualification, speciality:speciality, experience:experience, mrc_no:mrc_no,user_role:user_role},
		dataType: 'html',		
		cache: false,
		beforeSend: function (xhr) {
	        var token = $('meta[name="_token"]').attr('content');
		if (token) {
		    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
		}
			$("#divLoading").addClass('show');		
	    },
		error: function ( xhr, ajaxOptions, thrownError )
		{
			if (xhr.status == 500){
				$('#divLoading').html('Error code:- '+xhr.status+', Error Description:- '+thrownError+', Please check your log file for more information');				
				$("#divLoading").css('display','block');
				$("#divLoading").css('text-align','center');
				$("#divLoading").css('color','red');
				$("#divLoading").removeClass('show');
			}else {
				$('#divLoading').html('Error code:- '+xhr.status+', Error Description:- '+thrownError);				
				$("#divLoading").css('display','block');
				$("#divLoading").css('text-align','center');
				$("#divLoading").css('color','red');
				$("#divLoading").removeClass('show');
			}
		},
		success: function(data) {
			if(data==0){
				console.log("Data"+data);
				$("#divLoading").removeClass('show');
				$('.reg_error').html('All Fields are Mandatory');
			}else{
				console.log("Data"+data);
				$("#divLoading").removeClass('show');
				$('.reg_error').html('');
				var URL  =  window.location.protocol+'//'+window.location.host+'/register_complete';
				location.href = URL;
			}

		//form clear
		$(".refresh-after-ajax").load(window.location + " .refresh-after-ajax");
			//location.reload();	
		}
	});
});	
/******************************************************************************************************/	

/***************************** Login Validation and Submission ***************************************/

$('#login').on('click',function(e){
	$("#divLoading").addClass('show');
	var email = jQuery("#login_email").val();
	var password = jQuery("#login_password").val();	
	/*if(email==''){
		$("#email").focus();
		$(".login_error").html('Please Enter E-mail');
		return false;
	}else{
		$(".login_error").html('');
		return true;
	}
	if(password==''){
		$("#password").focus();
		$(".login_error").html('Please Enter Password');
		return false;
	}else{
		$(".login_error").html('');
		return true;
	}*/
	var setAjaxUrl  =  window.location.protocol+'//'+window.location.host+'/login';
	
	$.ajax({
		type: "POST",
		url: setAjaxUrl,
		data: {email: email, password:password},
		dataType: 'html',		
		cache: false,
		beforeSend: function (xhr) {
	        var token = $('meta[name="_token"]').attr('content');
		if (token) {
		    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
		}
			$("#divLoading").addClass('show');		
	    },
		error: function ( xhr, ajaxOptions, thrownError )
		{
			if (xhr.status == 500){
				$('#divLoading').html('Error code:- '+xhr.status+', Error Description:- '+thrownError+', Please check your log file for more information');				
				$("#divLoading").css('display','block');
				$("#divLoading").css('text-align','center');
				$("#divLoading").css('color','red');
				$("#divLoading").removeClass('show');
			}else {
				$('#divLoading').html('Error code:- '+xhr.status+', Error Description:- '+thrownError);				
				$("#divLoading").css('display','block');
				$("#divLoading").css('text-align','center');
				$("#divLoading").css('color','red');
				$("#divLoading").removeClass('show');
			}
		},
		success: function(data) {
			if(data==0){
				console.log("Data"+data);
				$("#divLoading").removeClass('show');
				$('.login_error').html('These Credentials Does Not Match In Our Records');
			}else if(data==-1){
				console.log("Data"+data);
				$("#divLoading").removeClass('show');
				$('.login_error').html('Your email address is not verified yet. Please check your email!');
			}else if(data==2){
				console.log("Data"+data);
				$("#divLoading").removeClass('show');
				$('.login_error').html('All Fields are Mandatory');
			}else if(data=='A'){
				console.log("Data"+data);
				$("#divLoading").removeClass('show');
				$('.login_error').html('');
				var URL  =  window.location.protocol+'//'+window.location.host+'/admin/profile';
				location.href = URL;
			}else if(data=='D'){
				console.log("Data"+data);
				$("#divLoading").removeClass('show');
				$('.login_error').html('');
				var URL  =  window.location.protocol+'//'+window.location.host+'/doctor/profile';
				location.href = URL;
			}else if(data=='P'){
				console.log("Data"+data);
				$("#divLoading").removeClass('show');
				$('.login_error').html('');
				var URL  =  window.location.protocol+'//'+window.location.host+'/patient/profile';
				location.href = URL;
			}else{
				console.log("Data"+data);
				$("#divLoading").removeClass('show');
				$('.login_error').html('');
			}

		//form clear
		$(".refresh-after-ajax").load(window.location + " .refresh-after-ajax");
			//location.reload();	
		}
	});
});
