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
function remEdu(id,type,val,tid){
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
					deleteEdu(id,type,val,tid);
				}
			},
			close: function () {					
									
			}
		}
	});
}


//Function to Delete the Education (AJAX Operation)
function deleteEdu(id,type,val,tid){
	$("#divLoading").addClass('show');
	
	var getCount = $("#edu_count").val();
	var remCount = parseInt(getCount)-1;
	var totalCount = $("#edu_count").val(remCount);
	$("#divLoading").removeClass('show');
	

	if(type!='j'){

		var setAjaxUrl  =  window.location.protocol+'//'+window.location.host+'/doctor/updateQualification';
			
		$.ajax({
			type: "POST",
			url: setAjaxUrl,
			data: {id:id, type:type, val:val, tid:tid},
			dataType: 'json',
			async : false,
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
					$("#divLoading").removeClass('show');

					noty({
						text     : '<div><strong>There was a problem while updating your Qualification !</div>',
						layout   : 'center',
						closeWith: ['click'],
						type	 :  'error'
					});				
				}else{
					$("#divLoading").removeClass('show');
					$("#qr_"+id).remove();
					noty({
						text     : '<div><strong>Your Qualification Updated Successfully !</div>',
						layout   : 'center',
						closeWith: ['click'],
						type	 :  'success'
					});					
				}

			//form clear
			$(".refresh-after-ajax").load(window.location + " .refresh-after-ajax");
				//location.reload();	
			}
		});
	}else{
		$("#qr_"+id).remove();
	}
}

//Function to Remove the Speciality (Confirmation Dialogue)
function remSpl(id,type,val,tid){
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
					deleteSpl(id,type,val,tid);
				}
			},
			close: function () {					
									
			}
		}
	});
}

//Function to Remove the Speciality (AJAX Operation)
function deleteSpl(id,type,val,tid){
	$("#divLoading").addClass('show');
	//$("#sr_"+id).remove();
	var getCount = $("#spl_count").val();
	var remCount = parseInt(getCount)-1;
	var totalCount = $("#spl_count").val(remCount);
	$("#divLoading").removeClass('show');

	if(type!='j'){

		var setAjaxUrl  =  window.location.protocol+'//'+window.location.host+'/doctor/updateSpecialization';
			
		$.ajax({
			type: "POST",
			url: setAjaxUrl,
			data: {id:id, type:type, val:val,tid:tid},
			dataType: 'json',
			async : false,
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
					$("#divLoading").removeClass('show');

					noty({
						text     : '<div><strong>There was a problem while updating your Specialization !</div>',
						layout   : 'center',
						closeWith: ['click'],
						type	 :  'error'
					});				
				}else{
					$("#divLoading").removeClass('show');
					$("#sr_"+id).remove();
					noty({
						text     : '<div><strong>Your Specialization Updated Successfully !</div>',
						layout   : 'center',
						closeWith: ['click'],
						type	 :  'success'
					});					
				}

			//form clear
			$(".refresh-after-ajax").load(window.location + " .refresh-after-ajax");
				//location.reload();	
			}
		});
	}else{
		$("#sr_"+id).remove();
	}
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
			var v1 = 'j';
			var v2 = 0;
			var v3 = 0;
			var html = '<div class="qualificaiton_panel" id="qr_'+addCount+'">'+
							'<div class="row">'+
								'<div class="col-lg-3 col-md-6">'+
									'<div class="form-group">'+
										'<label for="pwd">Qualification<span class="mandatory">*</span></label>'+
										'<select class="form-control select2" id="q_'+addCount+'" name="qualification[]">'+
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
										'<select class="form-control select2" id="c_'+addCount+'" name="college[]">'+
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
										'<select name="year[]" id="y_'+addCount+'" class="form-control select2">'+										
										'</select>'+
									'</div>'+
								'</div>'+
								
								'<div class="col-lg-1 col-md-1 text-center delete_icon">'+
									'<img src="'+filePath+'delete.png" alt="" id="'+addCount+'" onclick="remEdu(this.id,\'' + v1 + '\',\'' + v2 + '\',\'' + v3 + '\');" />'+
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
			var v1 = 'j';
			var v2 = 0;
			var v3 = 0;
			var html = '<div class="row" id="sr_'+addCount+'">'+
							'<div class="col-lg-6">'+
								'<div class="form-group">'+
									'<label for="pwd">Add Specialization<span class="mandatory">*</span></label>'+
									'<select class="form-control select2" id="sp_'+addCount+'" name="speciality[]">'+
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
								'<img src="'+filePath+'delete.png" alt="" id="'+addCount+'" onclick="remSpl(this.id,\'' + v1 + '\',\'' + v2 + '\',\'' + v3 + '\');" />'+
							'</div>'+				
						'</div>';
			$('.addSplDetails').append(html);
			$("#sp_"+addCount).select2();
			$("#divLoading").removeClass('show');				
			//$(".dr-spl-add").prop('disabled',true);
		}
	});

