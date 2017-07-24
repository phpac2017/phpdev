/*Document Ready Function*/
$(document).ready(function(){	
	
	$('.responsive-tabs').responsiveTabs({
	  accordionOn: ['xs']
	});

	//Select2 JS
	var placeholder = '';//Define Placeholder Value
    $('.select2, .select2-multiple').select2({
        //placeholder: placeholder
    });
    
});


//Function to remove Education

function remEdu(id){
	$.confirm({
		icon: 'fa fa-warning',
		title: 'Are you sure you want to remove this degree?',
		content: 'This operation is irreversible.',
		type: 'red',
		typeAnimated: true,
		buttons: {
			tryAgain: {
				text: 'Delete',
				btnClass: 'btn-red',
				action: function(){
					deleteEdu(id);
				}
			},
			close: function () {					
									
			}
		}
	});
}


//Function to Delete the Education (AJAX Operation)
function deleteEdu(id){
	$("#divLoading").addClass('show');
	$("#qr_"+id).remove();
	var getCount = $("#edu_count").val();
	var remCount = parseInt(getCount)-1;
	var totalCount = $("#edu_count").val(remCount);
	$("#divLoading").removeClass('show');
}

//Function to Remove the Speciality (Confirmation Dialogue)
function remSpl(id){
	$.confirm({
		icon: 'fa fa-warning',
		title: 'Are you sure you want to remove this speciality?',
		content: 'This operation is irreversible.',
		type: 'red',
		typeAnimated: true,
		buttons: {
			tryAgain: {
				text: 'Delete',
				btnClass: 'btn-red',
				action: function(){
					deleteSpl(id);
				}
			},
			close: function () {					
									
			}
		}
	});
}

//Function to Remove the Speciality (AJAX Operation)
function deleteSpl(id){
	$("#divLoading").addClass('show');
	$("#sr_"+id).remove();
	var getCount = $("#spl_count").val();
	var remCount = parseInt(getCount)-1;
	var totalCount = $("#spl_count").val(remCount);
	$("#divLoading").removeClass('show');
}

//Check Null / Undefined Value
function isEmpty(value) {
	return typeof value == 'string' && !value.trim() || typeof value == 'undefined' || value === null;
}
	

//Script for Adding Dynamic Items (Education Details)
	$(".dr-edu-add").on('click', function(){	
		$("#divLoading").addClass('show');
		var cells = "";
		var getCount = $("#edu_count").val();
		var addCount = parseInt(getCount)+1;
		var totalCount = $("#edu_count").val(addCount);
		var filePath  =  window.location.protocol+'//'+window.location.host+'/images/';
		//Limit the rows //Max 10 Allowed
		if(getCount>8){
			$(".dr-edu-add").prop('disabled',true);
			noty({
				text     : '<div><strong>You Have Reached Maximum Limit !</div>',
				layout   : 'bottomCenter',
				closeWith: ['click'],
				type	 :  'error'
			});
			$("#edu_count").val(10);
			$("#divLoading").removeClass('show');
			return false;
		}else{	
			//Dynamic HTML Content
			var html = '<div class="qualificaiton_panel" id="qr_'+addCount+'">'+
							'<div class="row">'+
								'<div class="col-lg-3 col-md-6">'+
									'<div class="form-group">'+
										'<label for="pwd">Qualification<span class="mandatory">*</span></label>'+
										'<select class="form-control select2" id="q_'+addCount+'" name="qualification">'+
										   '<option value="1" selected="selected">M.B.B.S</option>'+
										   '<option value="2">B.D.S</option>'+
										   '<option value="3">B.P.T</option>'+
										   '<option value="4">B.O.T</option>'+
										   '<option value="5">B.A.M.S</option>'+
										   '<option value="6">B.H.M.S</option>'+
										   '<option value="7">B.U.M.S</option>'+
										   '<option value="8">MS</option>'+
										   '<option value="9">MD</option>'+
										  ' <option value="10">Mch</option>'+
										'</select>'+
									'</div>'+	
								'</div>'+
								
								'<div class="col-lg-5 col-md-6">'+
									'<div class="form-group">'+
										'<label for="pwd">College<span class="mandatory">*</span></label>'+
										'<select class="form-control select2" id="c_'+addCount+'" name="college">'+
										   '<option value="1"> All India Institute of Medical Sciences - [AIIMS], New Delhi</option>'+
										   '<option value="2">Christian Medical College - [CMC], Vellore</option>'+
										   '<option value="3">Sri Manakula Vinayagar Medical College and Hospital - [SMVMCH], Pondicherry</option>'+
										   '<option value="4">Armed Forces Medical College - [AFMC], Pune</option>'+
										   '<option value="5">Kasturba Medical College - [KMC], Mangalore</option>'+
										   '<option value="6">Maulana Azad Medical College - [MAMC], New Delhi</option>'+
										   '<option value="7">Jawaharlal Institute of Post Graduate Medical Education and Research - [JIPMER], Pondicherry</option>'+
										   '<option value="8">Lady Hardinge Medical College - [LHMC], New Delhi</option>'+
										   '<option value="9">Madras Medical College - [MMC], Chennai</option>'+
										   '<option value="10">Grant Medical College - [GMC], Mumbai</option>'+
										'</select>'+
									'</div>'+
								'</div>'+
								
								'<div class="col-lg-3 col-md-6">'+
									'<div class="form-group">'+
										'<label for="pwd">Completion Year<span class="mandatory">*</span></label>'+
										'<select name="year" id="y_'+addCount+'" class="form-control select2">'+										
										'</select>'+
									'</div>'+
								'</div>'+
								
								'<div class="col-lg-1 col-md-1 text-center delete_icon">'+
									'<img src="'+filePath+'delete.png" alt="" id="'+addCount+'" onclick="remSpl(this.id);" />'+
								'</div>'+
								
							'</div>'+
						'</div>';
			$('.addEduDetails').append(html);
			$("#q_"+addCount).select2();
			$("#c_"+addCount).select2();
			$("#divLoading").removeClass('show');				
			//$(".dr-edu-add").prop('disabled',true);
			//Display Year From 1980
			for (i = 1980; i <= new Date().getFullYear(); i++)
			{
			    $("#y_"+addCount).append($('<option />').val(i).html(i));
			}

			$("#y_"+addCount).select2();
		}
	});

//Script for Adding Dynamic Items (Speciality)
	$(".dr-spl-add").on('click', function(){
	//$("div#addItemRow").delegate("button", "click", function(){
		$("#divLoading").addClass('show');
		var cells = "";
		var getCount = $("#spl_count").val();
		var addCount = parseInt(getCount)+1;
		var totalCount = $("#spl_count").val(addCount);
		var filePath  =  window.location.protocol+'//'+window.location.host+'/images/';
		//Limit the rows //Max 10 Allowed
		if(getCount>8){
			$(".dr-spl-add").prop('disabled',true);
			noty({
				text     : '<div><strong>You Have Reached Maximum Limit !</div>',
				layout   : 'bottomCenter',
				closeWith: ['click'],
				type	 :  'error'
			});
			$("#spl_count").val(10);
			$("#divLoading").removeClass('show');
			return false;
		}else{	
			//Dynamic HTML Content
			var html = '<div class="row" id="sr_'+addCount+'">'+
							'<div class="col-lg-6">'+
								'<div class="form-group">'+
									'<label for="pwd">Add Specialization<span class="mandatory">*</span></label>'+
									'<select class="form-control select2" id="sp_'+addCount+'" name="qualification">'+
									   '<option value="1" selected="selected">Anesthesiologist</option>'+
									   '<option value="2">Obstetrician</option>'+
									   '<option value="3">Cardiologist</option>'+
									   '<option value="4">Dermatologist</option>'+
									   '<option value="5">Gastroenterologist</option>'+
									   '<option value="6">Gynecologist</option>'+
									   '<option value="7">Hematologist</option>'+
									   '<option value="8">Neonatologist</option>'+
									   '<option value="9">Nephrologist</option>'+
									  ' <option value="10">Oncologist</option>'+
									'</select>'+
								'</div>'+	
							'</div>'+						
							
							'<div class="col-lg-1 col-md-1 text-center delete_icon">'+
								'<img src="'+filePath+'delete.png" alt="" id="'+addCount+'" onclick="remEdu(this.id);" />'+
							'</div>'+				
						'</div>';
			$('.addSplDetails').append(html);
			$("#sp_"+addCount).select2();
			$("#divLoading").removeClass('show');				
			//$(".dr-spl-add").prop('disabled',true);
		}
	});


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