/*Document Ready Function*/
$(document).ready(function(){	
	
	$('.responsive-tabs').responsiveTabs({
	  accordionOn: ['xs']
	});
	$("#awd_count").val(0);
	$("#mem_count").val(0);
	
	//Select2 JS
	var placeholder = '';//Define Placeholder Value
    $('.select2, .select2-multiple').select2({
        //placeholder: placeholder
    });   
    
});


//Function to remove Education

function remAwd(id,type,val,tid){
	$.confirm({
		icon: 'fa fa-warning',
		title: 'Are you sure you want to remove this award?',
		content: 'This operation is irreversible.',
		type: 'red',
		typeAnimated: true,
		buttons: {
			tryAgain: {
				text: 'Delete',
				btnClass: 'btn-red',
				action: function(){
					deleteAwd(id,type,val,tid);
				}
			},
			close: function () {					
									
			}
		}
	});
}

//Function to Delete the Education (AJAX Operation)
function deleteAwd(id,type,val,tid){
	$("#divLoading").addClass('show');
	var getCount = $("#awd_count").val();
	var remCount = parseInt(getCount)-1;
	var totalCount = $("#awd_count").val(remCount);
	$("#divLoading").removeClass('show');
	if(type!='j'){

		var setAjaxUrl  =  window.location.protocol+'//'+window.location.host+'/doctor/updateAward';
			
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
					$("#ar_"+id).remove();
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
		$("#ar_"+id).remove();
	}
}


//Function to remove Education

function remMem(id,type,val,tid){
	$.confirm({
		icon: 'fa fa-warning',
		title: 'Are you sure you want to remove this membership?',
		content: 'This operation is irreversible.',
		type: 'red',
		typeAnimated: true,
		buttons: {
			tryAgain: {
				text: 'Delete',
				btnClass: 'btn-red',
				action: function(){
					deleteMem(id,type,val,tid);
				}
			},
			close: function () {					
									
			}
		}
	});
}

//Function to Delete the Education (AJAX Operation)
function deleteMem(id,type,val,tid){
	$("#divLoading").addClass('show');
	var getCount = $("#mem_count").val();
	var remCount = parseInt(getCount)-1;
	var totalCount = $("#mem_count").val(remCount);
	$("#divLoading").removeClass('show');

	if(type!='j'){

		var setAjaxUrl  =  window.location.protocol+'//'+window.location.host+'/doctor/updateMembership';
			
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
					$("#mr_"+id).remove();
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
		$("#mr_"+id).remove();
	}
}





//Check Null / Undefined Value
function isEmpty(value) {
	return typeof value == 'string' && !value.trim() || typeof value == 'undefined' || value === null;
}
	

//Script for Adding Dynamic Items (Education Details)
	$(".dr-add-award").on('click', function(){	
		$("#divLoading").addClass('show');
		var cells = "";
		var getCount = $("#awd_count").val();
		var addCount = parseInt(getCount)+1;
		var totalCount = $("#awd_count").val(addCount);
		var filePath  =  window.location.protocol+'//'+window.location.host+'/images/';
		//Limit the rows //Max 10 Allowed
		if(getCount>8){
			$(".dr-add-award").prop('disabled',true);
			noty({
				text     : '<div><strong>You Have Reached Maximum Limit !</div>',
				layout   : 'bottomCenter',
				closeWith: ['click'],
				type	 :  'error'
			});
			$("#awd_count").val(10);
			$("#divLoading").removeClass('show');
			return false;
		}else{	
			//Dynamic HTML Content
			var v1 = 'j';
			var v2 = 0;
			var v3 = 0;
			var html = '<div class="row"  id="ar_'+addCount+'">'+
							'<div class="col-lg-8 col-md-6">'+
								'<div class="form-group">'+
									'<label for="usr">Awards / Recognitions<span class="mandatory">*</span></label>'+
									'<input type="text" name="award[]" placeholder="Enter Awards / Recognition" class="form-control" id="award_'+addCount+'">'+
								'</div>'+
							'</div>'+

							'<div class="col-lg-3 col-md-6">'+
								'<div class="form-group">'+
									'<label for="pwd">Year<span class="mandatory">*</span></label>'+	
									'<select name="year[]" id="year_'+addCount+'" class="form-control select2">'+										
									'</select>'+	
								'</div>'+
							'</div>'+

							'<div class="col-lg-1 col-md-1 text-center delete_icon">'+
									'<img src="'+filePath+'delete.png" alt="" id="'+addCount+'" onclick="remAwd(this.id,\'' + v1 + '\',\'' + v2 + '\',\'' + v3 + '\');" />'+
								'</div>'+

						'</div>';		
					
			$('.addAwardDetails').append(html);
			$("#year_"+addCount).select2();
			$("#divLoading").removeClass('show');				
			//$(".dr-edu-add").prop('disabled',true);
			for (i = 1980; i <= new Date().getFullYear(); i++)
			{
			    $("#year_"+addCount).append($('<option />').val(i).html(i));
			}

			$("#year_"+addCount).select2();
		}
	});


	//Script for Adding Dynamic Items (Education Details)
	$(".dr-add-mem").on('click', function(){	
		$("#divLoading").addClass('show');
		var cells = "";
		var getCount = $("#mem_count").val();
		var addCount = parseInt(getCount)+1;
		var totalCount = $("#mem_count").val(addCount);
		var filePath  =  window.location.protocol+'//'+window.location.host+'/images/';
		//Limit the rows //Max 10 Allowed
		if(getCount>8){
			$(".dr-add-mem").prop('disabled',true);
			noty({
				text     : '<div><strong>You Have Reached Maximum Limit !</div>',
				layout   : 'bottomCenter',
				closeWith: ['click'],
				type	 :  'error'
			});
			$("#mem_count").val(10);
			$("#divLoading").removeClass('show');
			return false;
		}else{	
			//Dynamic HTML Content
			var v1 = 'j';
			var v2 = 0;
			var v3 = 0;
			var html = '<div class="row"  id="mr_'+addCount+'">'+
							'<div class="col-lg-4 col-md-6">'+
								'<div class="form-group">'+
									'<label for="pwd">Memberships<span class="mandatory">*</span></label>'+
									'<select class="form-control select2" id="mem_'+addCount+'" name="membership[]">'+
									   '<option value="1" selected="selected">Government Doctors Association</option>'+
									   '<option value="2">Association of Women Doctors Singapore</option>'+
									   '<option value="3">Karnataka Qualified Homoeopathic Doctors Association(KQHDA)</option>'+
									   '<option value="4">B.O.T</option>'+
									   '<option value="5">B.A.M.S</option>'+
									'</select>'+
								'</div>'+
							'</div>'+

							'<div class="col-lg-1 col-md-1 text-center delete_icon">'+
								'<img src="'+filePath+'delete.png" alt="" id="'+addCount+'" onclick="remMem(this.id,\'' + v1 + '\',\'' + v2 + '\',\'' + v3 + '\');" />'+
							'</div>'+
						'</div>';	
					
			$('.addMemDetails').append(html);
			$("#mem_"+addCount).select2();
			$("#divLoading").removeClass('show');			
			//$(".dr-edu-add").prop('disabled',true);
		}
	});

