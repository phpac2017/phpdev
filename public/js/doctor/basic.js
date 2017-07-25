/*Document Ready Function*/
$(document).ready(function(){	
	$('.responsive-tabs').responsiveTabs({
	  accordionOn: ['xs']
	});

	var placeholder = '';//Define Placeholder Value
    $('.select2, .select2-multiple').select2({
        //placeholder: placeholder
    });

	$('#contact_number').mask('(000) 000-0000');
});

//Check Null / Undefined Value
function isEmpty(value) {
	return typeof value == 'string' && !value.trim() || typeof value == 'undefined' || value === null;
}
	

//Script to validate Numerics Only
function validateNumerics(id){
	var number = $('#'+id).val();
	if(number==""){
		$('.'+id).html('');
	}		
	var valid = /^[0-9_\b]+$/.test(number) && number.length;
	if(!valid && number!=""){
		$('.'+id).html('This Field Accepts Numbers Only');
		$('.'+id).css('color','red');
		$('#'+id).focus();
		$('#'+id).val('');
	} else{
		$('.'+id).html('');
	}
}
/***************************** Registration Validation and Submission ***************************************/
$(function(){
	jQuery("#register_form").validate({
		rules: {
			name: {
				required: true,
			},
			gender:{
				required:true
			},
			mobile_number: {
				required: true
			},
			nationality: {
				required: function(element){
					if($("#user_role").val()==3){
						return false;
					}
				},
			},
			language:{
				required: function(element){
					if($("#user_role").val()==3){
						return false;
					}
				},
			},
			email: {
				required: true,
				email:true
			},
			password: {
				required: true,
				minlength:6
			},
			qualification:{
				required: function(element){
					if($("#user_role").val()==3){
						return false;
					}
				},
			},
			speciality: {
				required: function(element){
					if($("#user_role").val()==3){
						return false;
					}
				},
			},
			experience:{
				required: function(element){
					if($("#user_role").val()==3){
						return false;
					}
				},
			},
			mrc_no:{
				required: function(element){
					if($("#user_role").val()==3){
						return false;
					}
				},
			} 
		},
		errorPlacement: function(error, element) {},
		submitHandler:function(){
				
			//Validate Checkbox
			if($("#accept_terms").is(':checked')==false){
				$("html, body").animate({ scrollTop: 0 }, "slow");
				$('p.reg_error').html('Please accept terms and conditions');
				$('p.reg_error').show();
				$('p.reg_error').fadeOut(4000, function() {
					$('p.reg_error').html('');
				});
				return false;
			}
			
			//Clear Doctor Input Fields
			if($( "#user_role option:selected" ).text()=='Patient'){
				$(".doctor-fields input").val('');
				$(".doctor-fields select").val('');
			}

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
			//alert(name+"--"+gender+"--"+email+"--"+password+"--"+country_code+"--"+mobile_number+"--"+nationality+"--"+language+"--"+qualification+"--"+speciality+"--"+experience);
			var setAjaxUrl  =  window.location.protocol+'//'+window.location.host+'/register';
			//var setAjaxUrl  =  'http://localhost/demoapp2/poc/public/register';
	
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
					if(xhr.status == 422){					    
						//Displaying Server side Validation Errors
						$("html, body").animate({ scrollTop: 0 }, "slow");
						var validate_err= jQuery.parseJSON(xhr.responseText);
						$.each(validate_err,function(key,value){
							$("p.reg_error").append('<span>'+value+'</span><br>'); 
						 })
						$("p.reg_error").css({"color":"red","text-align":"left"});
						$('p.reg_error').fadeOut(4000, function() {
							$('p.reg_error').html('');
						});
					}else {
						//For all type of errors 
						$('#divLoading').html('Error code:- '+xhr.status+', Error Description:- '+thrownError).css({"display":"block","text-align":"center","color":"red"});	
					}
					$("#divLoading").removeClass('show');
				},
				success: function(data) {
				if(data==0){
					console.log("Data"+data);
					$("#divLoading").removeClass('show');
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
		}
	});
});

/******************************************************************************************************/	

/***************************** Login Validation and Submission ***************************************/

$(function(){
	jQuery("#login_form").validate({
		rules: {
			login_email: {
				required: true,
				email: true
			},
			login_password: {
				required: true
			}
		},
		errorPlacement: function(error, element) {} ,
		submitHandler:function(){
			var setAjaxUrl  =  window.location.protocol+'//'+window.location.host+'/login';
		   //var setAjaxUrl  =  'http://localhost/demoapp/poc/public/login';
		    var email = jQuery("#login_email").val();
			var password = jQuery("#login_password").val();	
			var remember = jQuery("#checkbox2:checked").length;	

			$.ajax({
				type: "POST",
				url: setAjaxUrl,
				data: {email: email, password:password, remember:remember},
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
					}else if(data=='A'){
						console.log("Data"+data);
						$("#divLoading").removeClass('show');
						var URL  =  window.location.protocol+'//'+window.location.host+'/admin/users';
						location.href = URL;
					}else if(data=='D'){
						console.log("Data"+data);
						$("#divLoading").removeClass('show');
						var URL  =  window.location.protocol+'//'+window.location.host+'/doctor/profile';
						location.href = URL;						

					}else if(data=='P'){
						console.log("Data"+data);
						$("#divLoading").removeClass('show');
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
		}
	});
});
/******************************************************************************************************/
/***************************** Check Existing Email ***************************************************/

function validateEmail(id){
	var email = jQuery("#"+id).val();
	if(valEmailFormat(email)){
		var setAjaxUrl  =  window.location.protocol+'//'+window.location.host+'/checkEmail';	
		$.ajax({
			type: "POST",
			url: setAjaxUrl,
			data: {email: email},
			dataType: 'html',
			cache: false,
			beforeSend: function (xhr) {
				var token = $('meta[name="_token"]').attr('content');
			if (token) {
				return xhr.setRequestHeader('X-CSRF-TOKEN', token);
			}
			},
			error: function ( xhr, ajaxOptions, thrownError )
			{
				if (xhr.status == 500){
					$('.in-process').html('Error code:- '+xhr.status+', Error Description:- '+thrownError+', Please check your log file for more information');
				}else {
					$('.in-process').html('Error code:- '+xhr.status+', Error Description:- '+thrownError);
				}
			},
			success: function(data) {
				if(data==0){
					$("."+id).html('');
					$("#"+id+"_err").val(1);
				}else{
					$("."+id).css('color','red');
					$("."+id).html('This Email is already registered');
					$("."+id).css('text-align','center');
					$("#"+id).focus();
					$("#"+id+"_err").val(1);
				}

				//form clear
				$(".refresh-after-ajax").load(window.location + " .refresh-after-ajax");
					//location.reload();	
				}
		});
	}else{
		$("."+id).css('color','red');
		$("."+id).html('Please Enter Valid Email');
		$("."+id).css('text-align','center');
		$("#"+id).focus();
	}	
}
	
/*************************************************************************************************************/

// Script to validate Email
function valEmailFormat(email) {
	var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(email);
}


/***************************** Forgot Password Submission ***************************************/

$(function(){
	jQuery("#forgot-pass-form").validate({
		rules: {
			forgot_email: {
				required: true,
				email: true
			}
		},
		errorPlacement: function(error, element) {} ,
		submitHandler:function(){
			var setAjaxUrl  =  window.location.protocol+'//'+window.location.host+'/forgot-password';
		   //var setAjaxUrl  =  'http://localhost/demoapp2/poc/public/forgot-password';
		    var email = jQuery("#forgot_email").val();
			$.ajax({
				type: "POST",
				url: setAjaxUrl,
				data: {email: email},
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
					if(xhr.status == 422){
						var validate_err= jQuery.parseJSON(xhr.responseText);
						$("#forgot_error").html(validate_err.email).css({"color":"red","text-align":"center"});
					}else {
						$('#divLoading').html('Error code:- '+xhr.status+', Error Description:- '+thrownError).css({"display":"block","text-align":"center","color":"red"});	
					}
					$("#divLoading").removeClass('show');
				},
				success: function(data) {
				    if(data==1){
						$("#divLoading").removeClass('show');
						$("#forgot_error").html('');
						var URL  =  window.location.protocol+'//'+window.location.host+'/login';
						location.href = URL;
					}else{
						$("#divLoading").removeClass('show');
						$("#forgot_error").html('Some Network Error happened').css({"color":"red","text-align":"center"});
					}

					//form clear
					$(".refresh-after-ajax").load(window.location + " .refresh-after-ajax");
						//location.reload();	
					}
			});
		}
	});
});
/******************************************************************************************************/