
$(document).ready(function() {
	$('#contactform').click(function(e){
		e.defaultPrevented;//preventDefault();
		var form = jQuery(this).parents("form:first");
		var dataString = form.serialize();
		var formAction = form.attr('action');
		$(".process").html(); 
		$.ajax({
		  type: "POST",
		  url: formAction,
		  data: dataString,                
		  dataType: 'html',
		  beforeSend: function()
			{	   
				$('.process').html("<img src='/assets/images/loader.gif' />");
			},
		  error: function ( xhr, ajaxOptions, thrownError ) 
            { 				
				if (xhr.status == 500){
           			$('.process').html('Error code:- '+xhr.status+', Error Description:- '+thrownError+', Please check your log file for more information');	
           		}else {
           			$('.process').html('Error code:- '+xhr.status+', Error Description:- '+thrownError);
           		}
           		
		   },
		  success: function(data) {
			 
			$('.process').html(data);
			//form clear
			$("#sendmail").get(0).reset();

		  }
		});	
	});	

/*************************Ticket Profitability************************************/
$('#ticket_profit_btn').click(function(e){
	e.defaultPrevented;//preventDefault();
	var form = jQuery(this).parents("form:first");
	var dataString = form.serialize();
	var formAction = form.attr('action');
	$(".process").html(); 
	$.ajax({
	  type: "POST",
	  url: formAction,
	  data: dataString,                
	  dataType: 'html',
	  beforeSend: function()
		{	   
			$('.process').html("<img src='/assets/images/loader.gif'/>");
		},
	  error: function ( xhr, ajaxOptions, thrownError ) 
    { 				
			if (xhr.status == 500){
			$('.process').html('Error code:- '+xhr.status+', Error Description:- '+thrownError+', Please check your log file for more information');	
		}else {
			$('.process').html('Error code:- '+xhr.status+', Error Description:- '+thrownError);
		}
	   },
	  success: function(data) {
		$('.process').html(data);
		//form clear
		$("#ticket_profit").get(0).reset();
	  }
	});	
});
/*****************************Billable Ticket******************************************************/
$('#billablework_btn').click(function(e){
        e.defaultPrevented;//preventDefault();
        var form = jQuery(this).parents("form:first");
        var dataString = form.serialize();
        var formAction = form.attr('action');
        $(".process").html();
        $.ajax({
          type: "POST",
          url: formAction,
          data: dataString,
          dataType: 'html',
          beforeSend: function()
                {
                        $('.process').html("<img src='/assets/images/loader.gif'/>");
                },
          error: function ( xhr, ajaxOptions, thrownError )
    {
                        if (xhr.status == 500){
                        $('.process').html('Error code:- '+xhr.status+', Error Description:- '+thrownError+', Please check your log file for more information');
                }else {
                        $('.process').html('Error code:- '+xhr.status+', Error Description:- '+thrownError);
                }
           },
          success: function(data) {
                $('.process').html(data);
                //form clear
                $("#billablework").get(0).reset();
          }
        });
});
/*****************************Inventory Edit ******************************************************/


$('#inventoryupdate').click(function(e){
        e.defaultPrevented;//preventDefault();
        var form = jQuery(this).parents("form:first");
        var dataString = form.serialize();
        var formAction = form.attr('action');
        $(".in-process").html();
        $.ajax({
          type: "POST",
          url: formAction,
          data: dataString,
          dataType: 'html', cache: false,
          beforeSend: function()
                {
                        $('.in-process').html("<img src='/assets/images/loader.gif'/>");
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
		$('.in-process').html(data).slideDown(2000);
                $('.in-process').slideUp(2000);
		setTimeout(function(){  
			$(".close").trigger("click");
		}, 2100);
		 //location.reload();	
                //form clear
		$(".refresh-after-ajax").load(window.location + " .refresh-after-ajax");
          }
        });
});

/*************************************************************************************************************/
});


/************************************Inventory edit form****************************************************************/
$(document).on("click", ".edit-invent", function () {
	$('#EditInventoryForm #hdn_invent_id').attr('value', $(this).data('id'));
		var formAction = "/tools/inventedit/populate";
		dataString = [];
		dataString[0] = $('#EditInventoryForm #hdn_invent_id').attr('value');
		dataString[1] = $('#EditInventoryForm #hdn_uid').attr('value');
		$.ajax({
			  type: "POST",
			  url: formAction,
			  data:  {param:dataString},
			  dataType: 'html',
			 cache:false,
			  beforeSend: function(){
				$('.process').html("<img src='/assets/images/loader.gif' />");
			},
			 error: function ( xhr, ajaxOptions, thrownError ){
				if (xhr.status == 500){
					$('.process').html('Error code:- '+xhr.status+', Error Description:- '+thrownError+', Please check your log file for more information');
				}else {
					$('.process').html('Error code:- '+xhr.status+', Error Description:- '+thrownError);
				}
			   },
	                success: function(data) {
				//previous for values populated, to avoid this , need to add below reset snipet
				$("#inventoryeditform").get(0).reset();
				$(".process").hide();
				var JSONobj = jQuery.parseJSON( data);
				$.each(JSONobj, function(idx, obj) {
					$('#EditInventoryForm #jobnumber').attr('value', obj.jobnumber);
					$('#EditInventoryForm #identifier').attr('value',obj.identifier);
					$('#EditInventoryForm #date_issued').attr('value',obj.dateissued);
					$('#EditInventoryForm #description').text(obj.description);
					var optionValue = obj.iid;
					$("#EditInventoryForm #type").val(optionValue).find("option[value=" + optionValue +"]").attr('selected', true);
				});
			  }
			});
			return false;
});
/*****************************Wiki Markdown Editor Select Page, Insert Page********************************/

$(document).on('click','#FileList table tr td',function(){
    $("#fileloc").attr("value",$(this).text());	
    var input = $("#btnPopupClose");
    input.trigger('click');
});
$(document).on('click','#btnPopup1',function(){
    var setAjaxUrl  =  window.location.protocol+'//'+window.location.host+'/findfilepath';	
    $.ajax({
	    cache:false,
	    url:setAjaxUrl,
	    type:"POST",
	    beforeSend: function (xhr) {
	        var token = $('meta[name="_token"]').attr('content');
		if (token) {
		    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
		}
		$('.process').html("<img src='/assets/images/loader.gif' />");
	    },
            error: function ( xhr, ajaxOptions, thrownError )
            {
                if (xhr.status == 500){
                    $('.process').html('Error code:- '+xhr.status+', Error Description:- '+thrownError+', Please check your log file for more information');
                }else {
                    $('.process').html('Error code:- '+xhr.status+', Error Description:- '+thrownError);
                }
            },
	    data: { filename : "getAll" },
	    success:function(data){//alert(data);
	        $(".FileList1").html(data);
	    } 
	}); //end of ajax	
});
//add target attribute on wiki view pages alone
if ($(".wiki").length > 0) 
{
    $(".wiki p > a").attr("target","_blank");
}
/*****************************Prevent from TokenMismatchException********************************/
$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-Token': $('meta[name="_token"]').attr('content')
        }
    });
});
/**************************************************************************/


/*************************Participant ID************************************/
$('.participant-edit').click(function(e){	
	var id = $("#user_code").val();	
	$("#participant_id").val(id);	
});
/**************************************************************************/


/*****************************Participant Edit******************************************************/


$('#pid_update').click(function(e){
	e.defaultPrevented;//preventDefault();
	var form = jQuery(this).parents("form:first");
	var dataString = form.serialize();
	var formAction = form.attr('action');		
	$(".in-process").html();
	
	$.ajax({
		type: "POST",
		url: formAction,
		data: dataString,
		dataType: 'html', cache: false,
		beforeSend: function()
		{
			$('.in-process').html("<img src='/assets/images/loader.gif'/>");
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
			$('.in-process').html(data).slideDown(2000);
			$('.in-process').slideUp(2000);
		setTimeout(function(){  
			$(".close").trigger("click");
		}, 2100);

		//form clear
		$(".refresh-after-ajax").load(window.location + " .refresh-after-ajax");
			location.reload();	
		}
	});
});

/*************************************************************************************************************/

/*****************************Export Security Access Report******************************************************/


$('#export').click(function(e){
	e.defaultPrevented;//preventDefault();
	var form = jQuery(this).parents("form:first");
	var dataString = form.serialize();
	var formAction = form.attr('action');		
	$(".in-process").html();
	
	$.ajax({
		type: "POST",
		url: formAction,
		data: dataString,
		dataType: 'html', cache: false,
		beforeSend: function()
		{
			$('.in-process').html("<img src='/assets/images/loader.gif'/>");
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
			$('.in-process').html(data).slideDown(2000);
			$('.in-process').slideUp(2000);
		setTimeout(function(){  
			$(".close").trigger("click");
		}, 2100);

		//form clear
		$(".refresh-after-ajax").load(window.location + " .refresh-after-ajax");
			//location.reload();	
		}
	});
});

/*************************************************************************************************************/

/*****************************Mobile Device Request - Validate Job Number*************************************/

$('#job_number').on('blur',function(e){
	e.defaultPrevented;//preventDefault();
	var job_number = jQuery("#job_number").val();
	if(job_number==""){
		$(".epay-jn").html("Please Enter Job Number");
		return false;
	}
	var form = jQuery(this).parents("form:first");
	var dataString = form.serialize();	
	var setAjaxUrl  =  window.location.protocol+'//'+window.location.host+'/forms/checkJobNumber';
	$(".in-process").html();
	
	$.ajax({
		type: "POST",
		url: setAjaxUrl,
		data: dataString,
		dataType: 'html',
		cache: false,
		beforeSend: function (xhr) {
	        var token = $('meta[name="_token"]').attr('content');
		if (token) {
		    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
		}
			$('.in-process').html("<img src='/assets/images/loader.gif' />");
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
				$("#job_number").val('');
				$("#job_number").focus();
				$("#job_success").val(0);
				$(".epay-jn").html('Please Enter a Valid Job Number');
			}else{
				$(".epay-jn").html('');
				$("#job_success").val(1);
			}

		//form clear
		$(".refresh-after-ajax").load(window.location + " .refresh-after-ajax");
			//location.reload();	
		}
	});
});
	
/*************************************************************************************************************/

/*****************************Auto Split Wokr Hours - Validate Job Number*************************************/

$('#asf_job_number').on('blur',function(e){
	e.defaultPrevented;//preventDefault();
	var job_number = jQuery("#asf_job_number").val();
	if(job_number==""){
		$(".asf_job_number_err").html("Please Enter Job Number");
		$("#desc").val('');
		$(".asf_job_number_err").css('color','red');
		$("#asf_job_number_err").focus();
		return false;
	}
	var form = jQuery(this).parents("form:first");
	var dataString = form.serialize();	
	var setAjaxUrl  =  window.location.protocol+'//'+window.location.host+'/forms/checkASFJobNumber';
	$(".in-process").html();
	
	$.ajax({
		type: "POST",
		url: setAjaxUrl,
		data: {job_number:job_number},
		dataType: 'json',
		cache: false,
		beforeSend: function (xhr) {
	        var token = $('meta[name="_token"]').attr('content');
		if (token) {
		    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
		}
			$('.in-process').html("<img src='/assets/images/loader.gif' />");
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
				$("#asf_job_number").val('');
				$("#desc").val('');
				$("#asf_job_number").focus();
				$("#job_success").val(0);
				$(".asf_job_number_err").html('Please Enter a Valid Job Number');
			}else{
				$(".asf_job_number_err").html('');
				$("#job_success").val(1);
				var len = data.length;
                var txt = "";
                if(len > 0){
                    for(var i=0;i<len;i++){
						if(data[i].JobDescription!=""){
							$("#desc").val(data[i].JobDescription);
						}else{
							$("#desc").val('None');
						}
					}
				} 
			}

		//form clear
		$(".refresh-after-ajax").load(window.location + " .refresh-after-ajax");
			//location.reload();	
		}
	});
});
	
/*************************************************************************************************************/

/*****************************Mobile Device Request - Validate Dynamic Job Number*************************************/

function validateDynamicJobNumber(id){
	var job_number = jQuery("#"+id).val();
	var descID = id.substr(-1);
	if(job_number==""){
		$("."+id).html("Please Enter Job Number");
		$("#desc"+descID).val('');
		$("."+id).css('color','red');
		jQuery("#"+id).focus();
		return false;
	}
	var form = jQuery(this).parents("form:first");
	var setAjaxUrl  =  window.location.protocol+'//'+window.location.host+'/forms/checkASFJobNumber';
	$(".in-process").html();
	
	$.ajax({
		type: "POST",
		url: setAjaxUrl,
		data: {job_number:job_number},
		dataType: 'json',
		cache: false,
		beforeSend: function (xhr) {
	        var token = $('meta[name="_token"]').attr('content');
		if (token) {
		    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
		}
			$('.in-process').html("<img src='/assets/images/loader.gif' />");
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
				$("#"+id).val('');
				$("#"+id).focus();
				$("."+id).html('Please Enter a Valid Job Number');
				$("."+id).css('color','red');
				//$(".aswh_add").attr('disabled',true);
			}else{
				$("."+id).html('');
				$("."+id+"_err").html('');
				$("#desc"+descID).val('');
				$("."+id).css('color','black');
				var len = data.length;
                var txt = "";
                if(len > 0){
                    for(var i=0;i<len;i++){
						if(data[i].JobDescription!=""){
							$("#desc"+descID).val(data[i].JobDescription);
						}else{
							$("#desc"+descID).val('None');
						}						
					}
				}
			}

		//form clear
		$(".refresh-after-ajax").load(window.location + " .refresh-after-ajax");
			//location.reload();	
		}
	});
}
	
/*************************************************************************************************************/

/*****************************Payroll Discrepancy - Validate BF Job Number*************************************/

$('#bf_job_number').on('blur',function(e){
	e.defaultPrevented;//preventDefault();
	var job_number = jQuery("#bf_job_number").val();
	$("#select2-employeeNames-container").html('Select Employee');
	if(job_number==""){
		$(".bf_job_number").html("Please Enter Job Number");
		$("#employee_number").val("");
	}
	var form = jQuery(this).parents("form:first");
	var dataString = form.serialize();	
	var setAjaxUrl  =  window.location.protocol+'//'+window.location.host+'/forms/checkBFJobNumber';
	$(".in-process").html();
	
	$.ajax({
		type: "POST",
		url: setAjaxUrl,
		data: dataString,
		dataType: 'html',
		cache: false,
		beforeSend: function (xhr) {
	        var token = $('meta[name="_token"]').attr('content');
		if (token) {
		    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
		}
			$('.in-process').html("<img src='/assets/images/loader.gif' />");
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
				$("#bf_job_number").val('');
				$("#bf_job_number").focus();
				$(".bf_job_number").html('Please Enter a Valid Job Number');
			}else{
				$(".bf_job_number").html('');
				$('#employeeNames').empty().append('<option selected="selected" value="">Select Employee</option>');
				var newUrl  =  window.location.protocol+'//'+window.location.host+'/forms/getBFEmployees';

				$.ajax({
					type: "POST",
					url: newUrl,
					data: {job_number:job_number},
					dataType: 'html',
					cache: false,
					beforeSend: function (xhr) {
						var token = $('meta[name="_token"]').attr('content');
					if (token) {
						return xhr.setRequestHeader('X-CSRF-TOKEN', token);
					}
						$('.in-process').html("<img src='/assets/images/loader.gif' />");
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
							console.log('None');
						}else{	
							var array = JSON.parse(data);
							console.log(array.length);
							for(var i=0;i<array.length;i++){
								//var option=$('<option></option>').text(data[i]['CarType']);
								var option='';
								option+= "<option value='" + array[i].PAYROLLID + "'>" + array[i].EMPLOYEENAME.replace(/\"/g, "") + "</option>";
								$('#employeeNames').append(option);
							}
						}

					//form clear
					$(".refresh-after-ajax").load(window.location + " .refresh-after-ajax");
						//location.reload();	
					}
				});
				
				
			}

		//form clear
		$(".refresh-after-ajax").load(window.location + " .refresh-after-ajax");
			//location.reload();	
		}
	});
});
	
/*************************************************************************************************************/

/***************************** e-Pay Forms - Validate Employee Number ****************************************/

$('#emp_number').on('blur',function(e){
	e.defaultPrevented;//preventDefault();
	var emp_number = jQuery("#emp_number").val();
	if(emp_number==""){
		$(".epay-en").html("Please Enter Employee Number");
		return false;
	}
	var form = jQuery(this).parents("form:first");
	var dataString = form.serialize();
	var setAjaxUrl  =  window.location.protocol+'//'+window.location.host+'/forms/checkEmployeeNumber';
	$(".in-process").html();
	$("#emp-details").hide();
	
	$.ajax({
		type: "POST",
		url: setAjaxUrl,
		data: dataString,
		dataType: 'json',
		cache: false,
		beforeSend: function (xhr) {
	        var token = $('meta[name="_token"]').attr('content');
		if (token) {
		    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
		}
			$('.in-process').html("<img src='/assets/images/loader.gif' />");
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
				$("#emp_number").val('');
				$("#emp_number").focus();
				$("#emp-details").hide();
				$(".epay-en").html('Please Enter a Valid Employee Number');
				$("#bf_first_name").val('');
				$("#bf_middle_name").val('');
				$("#bf_last_name").val('');
				$("#emp_success").val(0);
			}else{
				$(".epay-en").html('');
				$("#emp_success").val(1);
				$("#emp-details").show();
				var len = data.length;
                var txt = "";
                if(len > 0){
                    for(var i=0;i<len;i++){
						$("#bf_first_name").val(data[i].FirstName);
						$("#inv_emp_name").val(data[i].FirstName+" "+data[i].MiddleName+" "+data[i].LastName);						
						$(".e1").html('');
						$("#bf_middle_name").val(data[i].MiddleName);
						$("#bf_last_name").val(data[i].LastName);
					}
				}                   
			}

		//form clear
		$(".refresh-after-ajax").load(window.location + " .refresh-after-ajax");
			//location.reload();	
		}
	});
});
	
/*************************************************************************************************************/


/***************************** AR Aging Report Form - Validate Customer Number ****************************************/

function validateCustomerNumber(id,dynRow){
	
	var customer_number = jQuery("#"+id).val();
	if(customer_number==""){
		$("."+id).html("Please Enter Customer Number");
		$(".ar-aging-loader").hide();
		$(".ar-aging-failed").hide();
		$(".ar-aging-success").hide();
		$(".ar-aging-loader"+dynRow).hide();
		$(".ar-aging-failed"+dynRow).hide();
		$(".ar-aging-success"+dynRow).hide();
		return false;
	}
	var setAjaxUrl  =  window.location.protocol+'//'+window.location.host+'/forms/checkCustomerNumber';
	if(dynRow=="" && dynRow!=0){
		$(".ar-aging-loader").show();
		$(".ar-aging-failed").hide();
		$(".ar-aging-success").hide();
	}else{
		$(".ar-aging-loader"+dynRow).show();
		$(".ar-aging-failed"+dynRow).hide();
		$(".ar-aging-success"+dynRow).hide();
	}
	
	
	$.ajax({
		type: "POST",
		url: setAjaxUrl,
		data: {customer_number: customer_number},
		dataType: 'html',
		cache: false,
		beforeSend: function (xhr) {
	        var token = $('meta[name="_token"]').attr('content');
		if (token) {
		    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
		}
			$('.in-process').html("<img src='/assets/images/loader.gif' />");
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
				//$("#"+id).val('');
				$("#"+id).focus();
				$("."+id).css('color','red');
				$("#err_count").val(1);
				if(dynRow=="" && dynRow!=0){
					$(".ar-aging-loader").hide();
					$(".ar-aging-failed").show();
					$(".ar-aging-success").hide();
				}else{
					$(".ar-aging-loader"+dynRow).hide();
					$(".ar-aging-failed"+dynRow).show();
					$(".ar-aging-success"+dynRow).hide();
				}
				
				$("."+id).html('Please Enter a Valid Customer Number');
				$(".ar_add_cust").attr('disabled',true);
				$(".ar-aging").attr('disabled',true);
				
			}else{
				$("."+id).html('');
				$("#err_count").val(0);
				if(dynRow=="" && dynRow!=0){
					$(".ar-aging-loader").hide();
					$(".ar-aging-failed").hide();
					$(".ar-aging-success").show();
				}else{
					$(".ar-aging-loader"+dynRow).hide();
					$(".ar-aging-failed"+dynRow).hide();
					$(".ar-aging-success"+dynRow).show();
				}
				
				$(".ar_add_cust").attr('disabled',false);
				$(".ar-aging").attr('disabled',false);
				setTimeout(function() {
					$(".ar-aging-success").hide();
				}, 5000);
				setTimeout(function() {
					$(".ar-aging-success"+dynRow).hide();
				}, 5000);
				
			}

		//form clear
		$(".refresh-after-ajax").load(window.location + " .refresh-after-ajax");
			//location.reload();	
		}
	});
}
	
/*************************************************************************************************************/


/*****************************Mobile Device Request - Show Note Field*************************************/

$("#existing_model").on('change',function(){
	var eval = $("#existing_model").val();
	if(eval=="Other"){
		$("#opt_1").show();
	}else{
		$("#opt_1").hide();
	}
	
});


$("#new_model").on('change',function(){
	var nval = $("#new_model").val();
	if(nval=="Other"){
		$("#opt_2").show();
	}else{
		$("#opt_2").hide();
	}
	
});

/*************************************************************************************************************/

/*************************************Greenspend Report Jobs - AJAX*******************************************/



function getQueues(){	

		var method = 'Greenspend Report';			
		var setAjaxUrl  =  window.location.protocol+'//'+window.location.host+'/reports/checkGreenspendQueues';
		var formData = {
			method: method,
		}
		$.ajax({
		type: "POST",
		url: setAjaxUrl,
		data: formData,
		dataType: 'html',
		cache: false,

		success: function(data) {
			if(data!=0){
				$("#greenspend-result").show();
				var html = '';
				html+= '<div class="alert alert-info gr">There are '+data+' reports running already. Please be patient</div>';
				$("#greenspend-result").html(html);
				setTimeout(function() { $("#greenspend-result").hide(); }, 5000);
			}
		//form clear
			$(".refresh-after-ajax").load(window.location + " .refresh-after-ajax");
		}
	});		
}




/*************************************************************************************************************/


/*************************************Greenspend Report Failed Jobs - AJAX*******************************************/



function getGreenspendFailedJobs(){

		var method = 'Greenspend Report';			
		var setAjaxUrl  =  window.location.protocol+'//'+window.location.host+'/reports/checkGreenspendFailedJobs';
		var formData = {
			method: method,
		}
		$.ajax({
		type: "POST",
		url: setAjaxUrl,
		data: formData,
		dataType: 'html',
		cache: false,

		success: function(data) {
			if(data!=0){
				$("#greenspend-result").show();
				var html = '';
				html+= '<div class="alert alert-info gr">There are '+data+' reports running already. Please be patient</div>';
				$("#greenspend-result").html(html);
				setTimeout(function() { $("#greenspend-result").hide(); }, 5000);
			}
		//form clear
			$(".refresh-after-ajax").load(window.location + " .refresh-after-ajax");
		}
	});		
}




/*************************************************************************************************************/

/***************************** e-Pay Forms - Validate Employee Number ****************************************/

$('#mm_category').change(function(e){
	e.defaultPrevented;//preventDefault();
	var category = jQuery("#mm_category").val();
	if(category==""){
		$(".mm_category").html("Please Select Category");
	}
	var form = jQuery(this).parents("form:first");
	var dataString = form.serialize();
	var setAjaxUrl  =  window.location.protocol+'//'+window.location.host+'/menu/getPermissions';
	$(".in-process").html();
	
	$.ajax({
		type: "POST",
		url: setAjaxUrl,
		data: dataString,
		dataType: 'html',
		cache: false,
		beforeSend: function (xhr) {
	        var token = $('meta[name="_token"]').attr('content');
		if (token) {
		    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
		}
			$('.in-process').html("<img src='/assets/images/loader.gif' />");
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
				/*$("#emp_number").val('');
				$("#emp_number").focus();*/
				$(".mm_category").html('This Menu Can Be Accessible By All. You can Change it by choosing the role');
				$("#acc_perm").html('');
			}else{
				$("#acc_perm").html(data);
				$(".mm_category").html('');
			}

		//form clear
		$(".refresh-after-ajax").load(window.location + " .refresh-after-ajax");
			//location.reload();	
		}
	});
});
	
/*************************************************************************************************************/


/***************************** e-Pay Forms - Validate Employee Number ****************************************/

	//Script to Add Multiple Day Information
	
	$("body").on('click','.mea_add',function(){		
		var getCount = $("#job_count").val();
		var addCount = parseInt(getCount)+1;
		var totalCount = $("#job_count").val(addCount);
		if(getCount>18){
			alert('You have reached maximum limit');
			$("#job_count").val(20);
			return false;
		}else{		
						
			var html = '';
			html+= '<div class="row" id="info'+getCount+'">'+
						'<div class="col-sm-3">'+
							'<label>Choose Day: <span class="mandatory_fields">*</span></label>'+        
							'<select name="dow[]" id="dow_'+getCount+'" class="form-control field-info" title="Please Select Day" onChange="validateDynamicRows('+getCount+');" data-toggle="tooltip" data-placement="top">'+
								'<option value="" selected="selected">Please Choose the Day</option>'+
								'<option value="Monday">Monday</option>'+
								'<option value="Tuesday">Tuesday</option>'+
								'<option value="Wednesday">Wednesday</option>'+
								'<option value="Thursday">Thursday</option>'+
								'<option value="Friday">Friday</option>'+
								'<option value="Saturday">Saturday</option>'+
								'<option value="Sunday">Sunday</option>'+
							'</select>'+
							'<div class="dow_'+getCount+'"></div>'+
						'</div>'+
			
						'<div class="col-sm-2">'+
							'<div class="form-group">'+
								'<label>From<span class="mandatory_fields">*</span></label>'+
								'<input type="text" id="time_from_'+getCount+'" name="time_from[]" title="Please Select Time From" class="input-small form-control time_from" onclick="getTime();"  onBlur="validateDynamicRows('+getCount+');" readonly />'+
								'<span class="add-on">'+
									'<i class="icon-time"></i>'+
								'</span>'+
							'</div>'+
							'<div class="time_from_'+getCount+'"></div>'+
						'</div>'+
						
						'<div class="col-sm-2">'+
							'<div class="form-group">'+
								'<label>To<span class="mandatory_fields">*</span></label>'+
								'<input type="text" id="time_to_'+getCount+'" name="time_to[]" title="Please Select Time To" class="input-small form-control time_to" onclick="getTime();" onBlur="validateDynamicRows('+getCount+');" readonly />'+
								'<span class="add-on">'+
									'<i class="icon-time"></i>'+
								'</span>'+
							'</div>'+
							'<div class="time_to_'+getCount+'"></div>'+
						'</div>'+
						
						'<div class="col-sm-3">'+
							'<label class="name_group">Minimum Employee:<span class="mandatory_fields">*</span></label>'+
							'<input type="text" name="min_emp[]" id="min_emp_'+getCount+'" title="Please Select Min Employees" onBlur="validateDynamicRows('+getCount+');"  class="form-control field-info" data-toggle="tooltip" data-placement="top" maxlength="2"/> '+
							'<div class="min_emp_'+getCount+'"></div>'+
						'</div>'+						
						'<input type="hidden" id="err_count'+getCount+'" title="time_to_'+getCount+'" class="err_count"  name="err_count'+getCount+'" value="0"/>'+
						'<div class="col-sm-2">'+
							'<button type="button" value="info'+getCount+'" id="del-day-'+getCount+'" onClick="delDay(this.value);" class="btn btn-responsive button-alignment btn-info rem_mea" style="margin-bottom:7px;" data-toggle="button">'+
								'<i class="livicon" data-name="remove-circle" title="Add Row" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>Delete'+
							'</button>'+
						'</div>'+
					'</div><div class="time_err_'+getCount+'"></div>';
			$('.add-emp-info').append(html);
			$(".mea_add").attr('disabled',true);
		}
	});
	
	
	//Script to Add Multiple Day Information
	
	$("body").on('click','.mea_emp_add',function(){		
		var getCount = $("#emp_count").val();
		var addCount = parseInt(getCount)+1;
		var totalCount = $("#emp_count").val(addCount);
		if(getCount>18){
			alert('You have reached maximum limit');
			$("#emp_count").val(20);
			return false;
		}else{						
			var html = '';
			html+= '<div id="empinfo'+getCount+'"><legend>Recipient '+addCount+' Details</legend>'+
						'<div class="row" id="fullname'+getCount+'">'+
							'<div class="col-sm-4">'+
								'<label class="name_group">Full Name <span class="mandatory_fields">*</span></label>'+        
								'<input type="text" name="full_name[]" onkeyup="validateAlphabets(this.id);" id="full_name'+getCount+'" onblur="showAddEmp(this.id,\'email'+getCount+'\',\'phone_no'+getCount+'\',\'carrier'+getCount+'\');" title="Enter Full Name" class="form-control field-info" data-toggle="tooltip" data-placement="top"/>'+
								'<div class="full_name'+getCount+'"></div>'+
							'</div>'+
						//'</div>'+
						//'<div class="row" id="email_'+getCount+'">'+
							'<div class="col-sm-4">'+
								'<label class="name_group">Email <span class="mandatory_fields">*</span></label>'+
								'<input type="text" name="email[]" id="email'+getCount+'" onBlur="validateEmail(this.id);showAddEmp(\'full_name'+getCount+'\',this.id,\'phone_no'+getCount+'\',\'carrier'+getCount+'\');" title="Enter Email" class="form-control field-info" data-toggle="tooltip" data-placement="top"/> '+
								'<div class="email'+getCount+'"></div>'+
							'</div>'+
						'</div>'+
						
						'<div class="form-group">'+
							'<label>Would you like to receive message alerts?</label>'+
							'<div class="form-group">'+
								'<input type="checkbox" name="checkPhone'+getCount+'" data-on-color="primary" data-off-color="info" id="alerts'+getCount+'" onChange="enablePhoneNumber(this.name,\'phone'+getCount+'\');" data-animate>'+
							'</div>'+
						'</div>'+
						
						'<div class="row" id="phone'+getCount+'">'+					
							'<div class="col-sm-4">'+
								'<label class="name_group">Phone Number for text messages</label>'+
								'<input type="text" name="phone_no[]" id="phone_no'+getCount+'" onBlur="showCarrier(this.id,\'carrier_dd'+getCount+'\');showAddEmp(\'full_name'+getCount+'\',\'email'+getCount+'\',this.id,\'carrier'+getCount+'\');validatePhoneNumber(this.id,\'carrier_dd'+getCount+'\');" maxlength="14" title="Enter Phone Number" class="form-control field-info ph-nm" data-toggle="tooltip" data-placement="top"/>'+
								'<div class="phone_no'+getCount+'"></div>'+
							'</div>'+
						//'</div>'+
						//'<div class="row">'+					
							'<div class="col-sm-4" id="carrier_dd'+getCount+'">'+
								'<label>Carrier <span class="mandatory_fields">*</span></label>'+
								'<select name="carrier[]" id="carrier'+getCount+'" title="Please Select Carrier" class="form-control" onChange="showAddEmp(\'full_name'+getCount+'\',\'email'+getCount+'\',\'phone_no'+getCount+'\',this.id);">'+
									'<option value="" selected="selected">Please Select One</option>'+
									'<option value="AT&T">AT&T</option>'+
									'<option value="Rogers">Rogers</option>'+
									'<option value="Sprint PCS">Sprint PCS</option>'+
									'<option value="T-mobile">T-mobile</option>'+
									'<option value="US Cellular">US Cellular</option>'+
									'<option value="Verizon Wireless">Verizon Wireless</option>'+
									'<option value="Virgin Mobile">Virgin Mobile</option>'+
								'</select>'+
								'<div class="carrier'+getCount+'"></div>'+
							'</div>'+
							'<div class="col-sm-2">'+
								'<button type="button" value="empinfo'+getCount+'" id="del-emp-'+getCount+'" onClick="delEmp(this.value);"  class="btn btn-responsive button-alignment btn-info rem_mea_emp" style="margin-bottom:7px;" data-toggle="button">'+
									'Delete'+
								'</button>'+
							'</div>'+
						'</div>'+
					'<hr/></div><br/>';
			$('.add-emp').append(html);
			$(".mea_emp_add").attr('disabled',true);
			$('#phone_no'+getCount+'').mask('(000) 000-0000');
			$("#carrier_dd"+getCount).hide();
			$("[name='checkPhone"+getCount+"']").bootstrapSwitch();
			$("#phone"+getCount).hide();
		}
	});
	
	
	//Show Add Employee Option
	function showAddEmp(name,mail,phone,carrier){
		var fullname = $("#"+name).val();
		var email = $("#"+mail).val();
		var phone_no = $("#"+phone).val();
		var carrier_val = $("#"+carrier).val();	
		var valid = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/.test(email) && email.length;

		if(valid && fullname!="" && email!=""){
			$(".mea_emp_add").attr('disabled',false);
		}else{
			$(".mea_emp_add").attr('disabled',true);
		}
		
		if(phone_no!=""){
			if(carrier_val==""){
				$(".mea_emp_add").attr('disabled',true);
			}else{
				$(".mea_emp_add").attr('disabled',false);
			}
		}
	}
	
	//Show Carrier If Phone Number Entered
	function showCarrier(id,career){
		var phone = $("#"+id).val();
		if(phone!=""){
			$("#"+career).show();
		}else{
			$("#"+career).hide();
		}
	}
	
	
	//Script to Delete Dynamic Employees Information
	function delDay(id){
		$("#"+id).remove();
		var getCount = $("#job_count").val();
		var addCount = parseInt(getCount)-1;
		var totalCount = $("#job_count").val(addCount);
		$(".mea_add").attr('disabled',false);
	}
	
	
	//Script to Delete Dynamic Employees Information
	function delEmp(id){
		$("#"+id).remove();
		var getCount = $("#emp_count").val();
		var addCount = parseInt(getCount)-1;
		var totalCount = $("#emp_count").val(addCount);	
		$(".mea_emp_add").attr('disabled',false);
	}
	
	
	//Script to Delete Dynamic Customer Information
	function delCustomer(id){
		$("#"+id).remove();
		var getCount = $("#customer_count").val();
		var addCount = parseInt(getCount)-1;
		var totalCount = $("#customer_count").val(addCount);	
		$(".ar_add_cust").attr('disabled',false);
		$(".ar-aging").attr('disabled',false);
	}
	
	//Validate Day Rows and Time Difference
	function validateRow(){
		//console.log('here');
		var dow = $("#dow").val();
		var time_from = $("#time_from").val();
		var time_to = $("#time_to").val();
		var min_emp = $("#min_emp").val();
		
		var start = time_from.substring(0, time_from.length - 2);
		var p1 = start.split(':'),
        s1 = 0, m1 = 1;
		while (p1.length > 0) {
			s1 += m1 * parseInt(p1.pop(), 10);
			m1 *= 60;
		}
		
		var end = time_to.substring(0, time_to.length - 2);
		var p2 = end.split(':'),
        s2 = 0, m2 = 1;

		while (p2.length > 0) {
			s2 += m2 * parseInt(p2.pop(), 10);
			m2 *= 60;
		}
		
		if(s1 > s2){
			$(".time_err").html('Please Enter Valid Time');
			$('.time_err').css('color','red');
			var getErrCount = $("#err_count").val();
			var addErrCount = parseInt(getErrCount)+1;
			var totalErrCount = $("#err_count").val(addErrCount);
			//$("#time_from").val('');
			//$("#time_to").val('');
		}else{
			$("#err_count").val(0);
			$('.time_err').html('');
		}	
		
		if(min_emp=='0' || min_emp=='00'){			
			$('.e4').html('Please Enter Valid Employees');
			$("#min_emp").val('');
			$("#min_emp").focus();
			$('.e4').css('color','red');
		}else{
			$('.e4').html('');
		}
		if(dow!="" && time_from!="" && time_to!="" && min_emp!="" &&  min_emp!=0 &&  min_emp!=00 && s1<=s2){
			$(".mea_add").attr('disabled',false);
		}else{
			$(".mea_add").attr('disabled',true);
		}
	}
	
	//Validate Day Rows and Time Difference (Dynamic Fields)
	function validateDynamicRows(id){
		var dow = $("#dow_"+id).val();
		var time_from = $("#time_from_"+id).val();
		var time_to = $("#time_to_"+id).val();
		var min_emp = $("#min_emp_"+id).val();
		
		var start = time_from.substring(0, time_from.length - 2);
		var p1 = start.split(':'),
        s1 = 0, m1 = 1;
		while (p1.length > 0) {
			s1 += m1 * parseInt(p1.pop(), 10);
			m1 *= 60;
		}
		
		var end = time_to.substring(0, time_to.length - 2);
		var p2 = end.split(':'),
        s2 = 0, m2 = 1;

		while (p2.length > 0) {
			s2 += m2 * parseInt(p2.pop(), 10);
			m2 *= 60;
		}
		
		
		if(s1 > s2){
			$(".time_to_"+id).html('Please Enter Valid Time');
			$('.time_to_'+id).css('color','red');
			//$("#time_from_"+id).val('');
			//$("#time_to_"+id).val('');
			//$("#time_from_"+id).focus();
			var getErrCount = $("#err_count"+id).val();
			var addErrCount = parseInt(getErrCount)+1;
			var totalErrCount = $("#err_count"+id).val(addErrCount);
		}else{
			$("#err_count"+id).val(0);
			$('.time_to_'+id).html('');
		}
		
		if(min_emp==='0' || min_emp==='00'){
			$(".min_emp_"+id).html('Please Enter Valid Employees');
			$("#min_emp_"+id).val('');
			$("#min_emp_"+id).focus();
			$(".min_emp_"+id).css('color','red');
		}else{
			$(".min_emp_"+id).html('');
		}
		
		if(dow!="" && time_from!="" && time_to!="" && min_emp!="" &&  min_emp!=0 &&  min_emp!=00 && s1<=s2){
			$(".mea_add").attr('disabled',false);
		}else{
			$(".mea_add").attr('disabled',true);
		}
	}
	
	//Validate Email From Textarea
	function validateInfo(){
		var emp_info = $("#emp_info").val();
		var values = emp_info.split( "\n" );
		var numberOfLineBreaks = (emp_info.match(/\n/g)||[]).length;
		var lines = $('#emp_info').val().split(/\n/);
		var texts = [];		
		var errors = [];
		var maildetails = [];
		
		for (var i=0; i < lines.length; i++) {
			// only push this line if it contains a non whitespace character.
			if (/\S/.test(lines[i])) {
				texts.push($.trim(lines[i]));
				var details = JSON.stringify($.trim(lines[i]));				
				var lines1 = details.split(',');
				var texts1 = [];
				//alert(lines1.length);
				for (var j=0; j < lines1.length; j++) {
					// only push this line if it contains a non whitespace character.
					if (/\S/.test(lines1[j])) {
						texts1.push($.trim(lines1[j]));
						if(j==1){
							var email = JSON.stringify($.trim(lines1[j]));
							email = email.replace(/^"(.*)"$/, '$1');
							//alert(email);
							if(validateEmail(email)){
								//$('.emp_info_err').html('');
							}else{
								//errors.push(i+"--"+email);
								errors.push(parseInt(i+1));
								maildetails.push(email);
							}
						}						
					}
				}				
			}
		}
		if(errors!=""){
			$('.emp_info_err').html('You Have Entered an Invalid Email in Line '+errors);
			$('.emp_info_err').css('color','red');
		}else{
			$('.emp_info_err').html('');
		}
	}
	
	//Script to validate email
	/* function validateEmail(email) {
		var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(email);
	} */
	
	//Script to validate dynamic fields
	function validateDynamicFields(){
		var getId = [];
		var ids = $('.add-emp-info .form-control').map(function(){
			if(this.value==""){
				getId.push(this.id);
				var getClass = this.id;
				$('.'+getClass).html(this.title);
				$('.'+getClass).css('color','red');									
			}else{
				var remClass = this.id;
				$('.'+remClass).html('');
			}			
		}).get();
		if(getId!=""){
			return false;
		}else{
			return true;
		}
		
	}
	
	// Script to Allow Alphabets only
	function validateAlphabets(id){
		var value =	$('#'+id).val();
		var valid = /^[a-zA-Z\s]+$/.test(value) && value.length;
		if(!valid){
			$('.'+id).html('Text only Allowed');
			$('.'+id).css('color','red');
			$('#'+id).focus();
			$('#'+id).val('');
		} else{
			$('.'+id).html('');
		}
	}
	
	// Script to Allow AlphaNumerics only
	
	function validateAlphaNumerics(id){
		var value =	$('#'+id).val();
		var valid = /^[A-Za-z0-9\s]+$/.test(value) && value.length;
		if(!valid){
			$('.'+id).html('AlphaNumerics only Allowed');
			$('.'+id).css('color','red');
			$('#'+id).focus();
			$('#'+id).val('');
		} else{
			$('.'+id).html('');
		}
	}
	
	// Script to Clear Error Message
	function clearError(id){
		var value =	$('#'+id).val();
		if(value==""){
			$('.'+id).html('');
		}
	}	
	
	
	// Script to validate Email
	function validateEmail(id){
		var mail = $('#'+id).val();
		if(mail==""){
			$('.'+id).html('');
		}		
		var valid = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/.test(mail) && mail.length;
		if(!valid && mail!=""){
			$('.'+id).html('Please Enter Valid E-Mail');
			$('.'+id).css('color','red');
			$('#'+id).focus();
			$(".mea_emp_add").attr('disabled',true);
		} else{
			$(".mea_emp_add").attr('disabled',false);
			$('.'+id).html('');
		}
	}
	
	//Phone Number validation Script (US Format) **/	
	function validatePhoneNumber(id,carrier){
		var phone = $('#'+id).val();
		if(phone==""){
			$('.'+id).html('');
		}
		var valid = /^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$/.test(phone) && phone.length;
		if(!valid && phone!=""){
			$('.'+id).html('Please Enter Valid Phone Number');
			$('.'+id).css('color','red');
			$('#'+id).focus();
			$('#'+id).val('');
			if(carrier!='def'){
				$('#'+carrier).hide();
				$(".mea_emp_add").attr('disabled',true);
			}			
		} else{		
			if(carrier!='def'){
				$(".mea_emp_add").attr('disabled',true);
			}
			$('.'+id).html('');
		}
	}
	
	//Script to enable Phone Number
	function enablePhoneNumber(name,divname){
		if ($('[name="'+name+'"]').is(':checked')){ 
			$("#"+divname).show();
		} else {
			$("#"+divname).hide();
		}		
	}
	
	//Script to Add Multiple Day Information
	
	$("body").on('click','.ar_add_cust',function(){	
		var getCount = $("#customer_count").val();
		var addCount = parseInt(getCount)+1;
		var totalCount = $("#customer_count").val(addCount);
		if(getCount>18){
			alert('You have reached maximum limit');
			$("#customer_count").val(20);
			return false;
		}else{						
			var html = '';
			html+= '<div id="custinfo'+getCount+'">'+
						'<div class="row">'+
							'<div class="col-sm-4">'+
								'<label>Customer Number: <span class="mandatory_fields">*</span></label>'+
								'<input type="text" name="customer_number[]" id="customer_number'+getCount+'" class="form-control field-info" title="Please Enter Customer Number" data-toggle="tooltip" data-placement="top" onBlur="validateCustomerNumber(this.id,'+getCount+');"/>'+  
								'<div class="customer_number'+getCount+'"></div>'+
							'</div>'+
							'<div class="col-sm-4 ar-aging-loader'+getCount+'"><span class="glyphicon glyphicon-asterisk" title="Validating">   Validating..</div>'+
							'<div class="col-sm-4 ar-aging-success'+getCount+'"><span class="glyphicon glyphicon-ok" title="Valid Job Number"></div>'+		
							'<div class="col-sm-4 ar-aging-failed'+getCount+'"><span class="glyphicon glyphicon-remove" title="Invalid Job Number"></div>'+
							'<div class="col-sm-2">'+
								'<button type="button" value="custinfo'+getCount+'" id="del-cust-'+getCount+'" onClick="delCustomer(this.value);"  class="btn btn-responsive button-alignment btn-info ar_rem_cust" style="margin-bottom:7px;" data-toggle="button">'+
									'Delete'+
								'</button>'+
							'</div>'+
						'</div>'+
					'<hr/></div><br/>';
			$('.add-customer').append(html);
			$(".ar_add_cust").attr('disabled',true);
			$(".ar-aging-loader"+getCount).hide();
			$(".ar-aging-success"+getCount).hide();
			$(".ar-aging-failed"+getCount).hide();
			$('.ar-aging-loader'+getCount+',.ar-aging-success'+getCount+',.ar-aging-failed'+getCount+'').css("margin","55px 0px 20px 20px");
			$( "#customer_number"+getCount ).autocomplete({
				source: "checkCustomerNumberUI",
				minLength: 2,
				select: function(event, ui) {
					$('#customer_number'+getCount).val(ui.item.value);
				}
			});
		}
	});
	
	
	//Script to validate Numerics Only
	function validateNumerics(id){
		var number = $('#'+id).val();
		if(number==""){
			$('.'+id).html('');
		}		
		var valid = /^[0-9_\b]+$/.test(number) && number.length;
		if(!valid && number!=""){
			$('.'+id).html('This Field Accepts Numerics Only');
			$('.'+id).css('color','red');
			$('#'+id).focus();
			$('#'+id).val('');
			$(".mea_emp_add").attr('disabled',true);
		} else{
			$(".mea_emp_add").attr('disabled',false);
			$('.'+id).html('');
		}
	}
	
	
/***************************** Inventory Master - Check Phone Number*************************************/

$('#inv_phone_number').on('blur',function(e){
	e.defaultPrevented;//preventDefault();
	var phone_number = jQuery("#inv_phone_number").val();
	
	if(phone_number==""){
		$(".inv_phone_number").html("Please Enter Phone Number");
		$("#inv_phone_number").val("");
		$("#inv_phone_number").focus();
		return false;
	}
	
	var setAjaxUrl  =  window.location.protocol+'//'+window.location.host+'/inventory/checkInvPhoneNumber';
	$(".in-process").html();
	
	$.ajax({
		type: "POST",
		url: setAjaxUrl,
		data: {phone_number: phone_number},
		dataType: 'html',
		cache: false,
		beforeSend: function (xhr) {
	        var token = $('meta[name="_token"]').attr('content');
		if (token) {
		    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
		}
			$('.in-process').html("<img src='/assets/images/loader.gif' />");
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
				//$("#cmi_btn").attr('disabled',false);		
				$("#phone_number_err").val(0);	
				$(".phone_number_err").html('');
			}else{
				//$("#cmi_btn").attr('disabled',true);
				$(".phone_number").css('color','red');
				$(".phone_number").html('This Phone Number already exists');
				$("#phone_number_err").val(1);
				setTimeout(function() {
					$(".phone_number").hide();
				}, 5000);
				
			}

		//form clear
		$(".refresh-after-ajax").load(window.location + " .refresh-after-ajax");
			//location.reload();	
		}
	});
});
	
/*************************************************************************************************************/

/***************************** Inventory Master - Check IMEI Number*************************************/

$('#imei').on('blur',function(e){
	e.defaultPrevented;//preventDefault();
	var imei = jQuery("#imei").val();
	
	if(imei==""){
		$(".imei").html("Please Enter IMEI Number");
		$("#imei").val("");
		$("#imei").focus();
		return false;
	}
	
	var setAjaxUrl  =  window.location.protocol+'//'+window.location.host+'/inventory/checkIMEI';
	$(".in-process").html();
	
	$.ajax({
		type: "POST",
		url: setAjaxUrl,
		data: {imei: imei},
		dataType: 'html',
		cache: false,
		beforeSend: function (xhr) {
	        var token = $('meta[name="_token"]').attr('content');
		if (token) {
		    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
		}
			$('.in-process').html("<img src='/assets/images/loader.gif' />");
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
				//$("#cmi_btn").attr('disabled',false);	
				$(".imei").html('');
				$("#imei_err").val(0);					
			}else{
				//$("#cmi_btn").attr('disabled',true);
				$(".imei").html('This IMEI already exists');
				$("#imei_err").val(1);
				$(".imei").css('color','red');
				$(".imei").html('This IMEI already exists');
				setTimeout(function() {
					$(".imei").hide();
				}, 5000);
				
			}

		//form clear
		$(".refresh-after-ajax").load(window.location + " .refresh-after-ajax");
			//location.reload();	
		}
	});
});
	
/*************************************************************************************************************/

/***************************** Inventory Master - Check Account Number***************************************/

$('#inv_acc_number').on('blur',function(e){
	e.defaultPrevented;//preventDefault();
	var acc_number = jQuery("#inv_acc_number").val();
	
	if(acc_number==""){
		$(".inv_acc_number").html("Please Enter Account Number");
		$("#inv_acc_number").val("");
		$("#inv_acc_number").focus();
		return false;
	}
	
	var setAjaxUrl  =  window.location.protocol+'//'+window.location.host+'/inventory/checkInvAccountNumber';
	$(".in-process").html();
	
	$.ajax({
		type: "POST",
		url: setAjaxUrl,
		data: {acc_number: acc_number},
		dataType: 'html',
		cache: false,
		beforeSend: function (xhr) {
	        var token = $('meta[name="_token"]').attr('content');
		if (token) {
		    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
		}
			$('.in-process').html("<img src='/assets/images/loader.gif' />");
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
				//$(".inv_acc_number").css('color','red');
				//$(".inv_acc_number").html('This A has already an entry');		
			}else{
				//$("#cmi_btn").attr('disabled',true);
				$(".inv_acc_number").css('color','red');
				$(".inv_acc_number").html('This Account Number already exists');
				return false;				
			}

		//form clear
		$(".refresh-after-ajax").load(window.location + " .refresh-after-ajax");
			//location.reload();	
		}
	});
});
	
/*************************************************************************************************************/

/***************************** Inventory Master - Check Account Number***************************************/

$('#inv_acc_number_edit').on('blur',function(e){
	e.defaultPrevented;//preventDefault();
	var acc_number = jQuery("#inv_acc_number_edit").val();
	var id = jQuery("#telcom_id").val();
	
	if(acc_number==""){
		$(".inv_acc_number").html("Please Enter Account Number");
		$("#inv_acc_number_edit").val("");
		$("#inv_acc_number_edit").focus();
		return false;
	}
	
	var setAjaxUrl  =  window.location.protocol+'//'+window.location.host+'/inventory/checkInvAccountNumberUpdate';
	$(".in-process").html();
	
	$.ajax({
		type: "POST",
		url: setAjaxUrl,
		data: {acc_number: acc_number, id:id},
		dataType: 'html',
		cache: false,
		beforeSend: function (xhr) {
	        var token = $('meta[name="_token"]').attr('content');
		if (token) {
		    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
		}
			$('.in-process').html("<img src='/assets/images/loader.gif' />");
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
				//$(".inv_acc_number").css('color','red');
				//$(".inv_acc_number").html('This A has already an entry');		
			}else{
				//$("#cmi_btn").attr('disabled',true);
				$(".inv_acc_number").css('color','red');
				$(".inv_acc_number").html('This Account Number already exists');
				return false;				
			}

		//form clear
		$(".refresh-after-ajax").load(window.location + " .refresh-after-ajax");
			//location.reload();	
		}
	});
});
	
/*******************************************************************************************************************/


/***************************** Inventory Master - Check Serial Number Update ***************************************/

$('#inv_serial_number').on('blur',function(e){
	e.defaultPrevented;//preventDefault();
	var serial_number = jQuery("#inv_serial_number").val();
	
	if(serial_number==""){
		$(".inv_serial_number").html("Please Enter Serial Number");
		$("#inv_serial_number").val("");
		$("#inv_serial_number").focus();
		return false;
	}
	
	var setAjaxUrl  =  window.location.protocol+'//'+window.location.host+'/inventory/checkInvSerialNumber';
	$(".in-process").html();
	
	$.ajax({
		type: "POST",
		url: setAjaxUrl,
		data: {serial_number: serial_number},
		dataType: 'html',
		cache: false,
		beforeSend: function (xhr) {
	        var token = $('meta[name="_token"]').attr('content');
		if (token) {
		    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
		}
			$('.in-process').html("<img src='/assets/images/loader.gif' />");
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
				$("#sn_err").val(0);
				//$(".inv_acc_number").css('color','red');
				//$(".inv_acc_number").html('This A has already an entry');		
			}else{
				$("#sn_err").val(1);
				//$("#cmi_btn").attr('disabled',true);
				$(".inv_serial_number").css('color','red');
				$(".inv_serial_number").html('This Serial Number already exists');
				return false;				
			}

		//form clear
		$(".refresh-after-ajax").load(window.location + " .refresh-after-ajax");
			//location.reload();	
		}
	});
});
	
/*************************************************************************************************************/




/***************************** Inventory Master - Check Serial Number Update ***************************************/

$('#inv_serial_number_edit').on('blur',function(e){
	e.defaultPrevented;//preventDefault();
	var serial_number = jQuery("#inv_serial_number_edit").val();
	var id = jQuery("#hardware_id").val();
	
	if(serial_number==""){
		$(".inv_serial_number").html("Please Enter Serial Number");
		$("#inv_serial_number_edit").val("");
		$("#inv_serial_number_edit").focus();
		return false;
	}
	
	var setAjaxUrl  =  window.location.protocol+'//'+window.location.host+'/inventory/checkInvSerialNumberUpdate';
	$(".in-process").html();
	
	$.ajax({
		type: "POST",
		url: setAjaxUrl,
		data: {serial_number: serial_number, id:id},
		dataType: 'html',
		cache: false,
		beforeSend: function (xhr) {
	        var token = $('meta[name="_token"]').attr('content');
		if (token) {
		    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
		}
			$('.in-process').html("<img src='/assets/images/loader.gif' />");
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
				$("#sn_err").val(0);
				//$(".inv_acc_number").css('color','red');
				//$(".inv_acc_number").html('This A has already an entry');		
			}else{
				$("#sn_err").val(1);
				//$("#cmi_btn").attr('disabled',true);
				$(".inv_serial_number").css('color','red');
				$(".inv_serial_number").html('This Serial Number already exists');
				return false;				
			}

		//form clear
		$(".refresh-after-ajax").load(window.location + " .refresh-after-ajax");
			//location.reload();	
		}
	});
});
	
/*************************************************************************************************************/

//Redirect Login Flush

$("body").on('click','#login_btn',function(){	
	var URL  =  window.location.protocol+'//'+window.location.host+'/loginclear';
	location.href = URL;
});