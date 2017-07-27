/*Document Ready Function*/
$(document).ready(function(){	
	
	$('.responsive-tabs').responsiveTabs({
	  accordionOn: ['xs']
	});
	$("#ser_count").val(0);
	$("#exp_count").val(0);
	
	//Select2 JS
	var placeholder = '';//Define Placeholder Value
    $('.select2, .select2-multiple').select2({
        //placeholder: placeholder
    });
    
    $("#duration_0").daterangepicker();
});


//Function to remove Education

function remSer(id,type,val,tid){
	$.confirm({
		icon: 'fa fa-warning',
		title: 'Are you sure you want to remove this service?',
		content: 'This operation is irreversible.',
		type: 'red',
		typeAnimated: true,
		buttons: {
			tryAgain: {
				text: 'Delete',
				btnClass: 'btn-red',
				action: function(){
					deleteSer(id,type,val,tid);
				}
			},
			close: function () {					
									
			}
		}
	});
}

//Function to Delete the Education (AJAX Operation)
function deleteSer(id,type,val,tid){
	$("#divLoading").addClass('show');
	var getCount = $("#ser_count").val();
	var remCount = parseInt(getCount)-1;
	var totalCount = $("#ser_count").val(remCount);
	$("#divLoading").removeClass('show');
	if(type!='j'){

		var setAjaxUrl  =  window.location.protocol+'//'+window.location.host+'/doctor/updateService';
			
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
						text     : '<div><strong>There was a problem while updating your Service !</div>',
						layout   : 'center',
						closeWith: ['click'],
						type	 :  'error'
					});				
				}else{
					$("#divLoading").removeClass('show');
					$("#sr_"+id).remove();
					noty({
						text     : '<div><strong>Your Service Updated Successfully !</div>',
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


//Function to remove Education

function remExp(id,type,val,tid){
	$.confirm({
		icon: 'fa fa-warning',
		title: 'Are you sure you want to remove this experience?',
		content: 'This operation is irreversible.',
		type: 'red',
		typeAnimated: true,
		buttons: {
			tryAgain: {
				text: 'Delete',
				btnClass: 'btn-red',
				action: function(){
					deleteExp(id,type,val,tid);
				}
			},
			close: function () {					
									
			}
		}
	});
}

//Function to Delete the Education (AJAX Operation)
function deleteExp(id,type,val,tid){
	$("#divLoading").addClass('show');
	var getCount = $("#exp_count").val();
	var remCount = parseInt(getCount)-1;
	var totalCount = $("#ser_count").val(remCount);
	$("#divLoading").removeClass('show');

	if(type!='j'){

		var setAjaxUrl  =  window.location.protocol+'//'+window.location.host+'/doctor/updateExperience';
			
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
						text     : '<div><strong>There was a problem while updating your Experience !</div>',
						layout   : 'center',
						closeWith: ['click'],
						type	 :  'error'
					});				
				}else{
					$("#divLoading").removeClass('show');
					$("#er_"+id).remove();
					noty({
						text     : '<div><strong>Your Experience Updated Successfully !</div>',
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
		$("#er_"+id).remove();
	}
}





//Check Null / Undefined Value
function isEmpty(value) {
	return typeof value == 'string' && !value.trim() || typeof value == 'undefined' || value === null;
}
	

//Script for Adding Dynamic Items (Education Details)
	$(".dr-add-service").on('click', function(){	
		$("#divLoading").addClass('show');
		var cells = "";
		var getCount = $("#ser_count").val();
		var addCount = parseInt(getCount)+1;
		var totalCount = $("#ser_count").val(addCount);
		var filePath  =  window.location.protocol+'//'+window.location.host+'/images/';
		//Limit the rows //Max 10 Allowed
		if(getCount>8){
			$(".dr-add-service").prop('disabled',true);
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
			var html = '<div class="row"  id="sr_'+addCount+'">'+
							'<div class="col-lg-4 col-md-6">'+
								'<div class="form-group">'+
									'<label for="pwd">Select Service<span class="mandatory">*</span></label>'+
									'<select class="form-control select2" id="srv_'+addCount+'" name="service[]">'+
										'<option value="1">Allergists</option>'+
										'<option value="2">Cardiologists</option>'+
										'<option value="3">Dentists</option>'+
										'<option value="4">Dermatologist</option>'+
										'<option value="5">Ophthalmologists</option>'+
										'<option value="6">Orthodontists</option>'+
										'<option value="7">Pediatricians</option>'+
										'<option value="8">Psychiatrists</option>'+
										'<option value="9">Pulmonary</option>'+
										'<option value="10">Rheumatologist</option>'+
									'</select>'+
								'</div>'+
							'</div>'+

							'<div class="col-lg-1 col-md-1 text-center delete_icon">'+
								'<img src="'+filePath+'delete.png" alt="" id="'+addCount+'" onclick="remSer(this.id,\'' + v1 + '\',\'' + v2 + '\',\'' + v3 + '\');" />'+
							'</div>'+
						'</div>';	
					
			$('.addServiceDetails').append(html);
			$("#srv_"+addCount).select2();
			$("#divLoading").removeClass('show');				
			//$(".dr-edu-add").prop('disabled',true);
		}
	});


	//Script for Adding Dynamic Items (Education Details)
	$(".dr-add-exp").on('click', function(){	
		$("#divLoading").addClass('show');
		var cells = "";
		var getCount = $("#exp_count").val();
		var addCount = parseInt(getCount)+1;
		var totalCount = $("#exp_count").val(addCount);
		var filePath  =  window.location.protocol+'//'+window.location.host+'/images/';
		//Limit the rows //Max 10 Allowed
		if(getCount>8){
			$(".dr-add-exp").prop('disabled',true);
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
			var html = '<div class="row" id="er_'+addCount+'">'+
							'<div class="col-lg-4 col-md-6">'+
								'<div class="form-group">'+
									'<label for="usr">Duration (Select year & month) <span class="mandatory">*</span></label>'+
									'<div class="input-group">'+
										'<div class="input-group-addon">'+
											'<i class="fa fa-calendar"></i>'+
										'</div>'+
										'<input type="text" name="duration[]" class="form-control pull-right" id="duration_'+addCount+'" />'+
									'</div>'+
								'</div>'+
							'</div>'+

							'<div class="col-lg-4 col-md-6">'+
								'<div class="form-group">'+
									'<label for="usr">Role: <span class="mandatory">*</span></label>'+
									'<input type="text" name="role[]" placeholder="Enter your Role" class="form-control" id="role_'+addCount+'">'+
								'</div>'+
							'</div>'+

							'<div class="col-lg-4 col-md-6">'+
								'<div class="form-group">'+
									'<label for="pwd">City<span class="mandatory">*</span> <i class="fa fa-exclamation-circle fa-lg" aria-hidden="true"></i></label>'+
									'<select class="form-control select2" id="city_'+addCount+'" name="city[]">'+ 
										'<option value="" selected="selected">Select</option>'+ 
										'<option value="3551">Abiramam</option>'+ 
										'<option value="3552">Achampudur</option>'+ 
										'<option value="3553">Acharapakkam</option>'+ 
										'<option value="3554">Acharipallam</option>'+ 
										'<option value="3555">Achipatti</option>'+ 
										'<option value="3556">Adikaratti</option>'+ 
										'<option value="3557">Adiramapattinam</option>'+ 
										'<option value="3558">Aduturai</option>'+ 
										'<option value="3559">Adyar</option>'+ 
										'<option value="3560">Agaram</option>'+ 
										'<option value="3561">Agasthiswaram</option>'+ 
										'<option value="3562">Akkaraipettai</option>'+ 
										'<option value="3563">Alagappapuram</option>'+ 
										'<option value="3564">Alagapuri</option>'+ 
										'<option value="3565">Alampalayam</option>'+ 
										'<option value="3566">Alandur</option>'+ 
										'<option value="3567">Alanganallur</option>'+ 
										'<option value="3568">Alangayam</option>'+ 
										'<option value="3569">Alangudi</option>'+ 
										'<option value="3570">Alangulam</option>'+ 
										'<option value="3571">Alanthurai</option>'+ 
										'<option value="3572">Alapakkam</option>'+ 
										'<option value="3573">Allapuram</option>'+ 
										'<option value="3574">Alur</option>'+ 
										'<option value="3575">Alwar Tirunagari</option>'+ 
										'<option value="3576">Alwarkurichi</option>'+ 
										'<option value="3577">Ambasamudram</option>'+ 
										'<option value="3578">Ambur</option>'+ 
										'<option value="3579">Ammainaickanur</option>'+ 
										'<option value="3580">Ammaparikuppam</option>'+ 
										'<option value="3581">Ammapettai</option>'+ 
										'<option value="3582">Ammavarikuppam</option>'+ 
										'<option value="3583">Ammur</option>'+ 
										'<option value="3584">Anaimalai</option>'+ 
										'<option value="3585">Anaiyur</option>'+ 
										'<option value="3586">Anakaputhur</option>'+ 
										'<option value="3587">Ananthapuram</option>'+ 
										'<option value="3588">Andanappettai</option>'+ 
										'<option value="3589">Andipalayam</option>'+ 
										'<option value="3590">Andippatti</option>'+ 
										'<option value="3591">Anjugramam</option>'+ 
										'<option value="3592">Annamalainagar</option>'+ 
										'<option value="3593">Annavasal</option>'+ 
										'<option value="3594">Annur</option>'+ 
										'<option value="3595">Anthiyur</option>'+ 
										'<option value="3596">Appakudal</option>'+ 
										'<option value="3597">Arachalur</option>'+ 
										'<option value="3598">Arakandanallur</option>'+ 
										'<option value="3599">Arakonam</option>'+ 
										'<option value="3600">Aralvaimozhi</option>'+ 
										'<option value="3601">Arani</option>'+ 
										'<option value="3602">Arani Road</option>'+ 
										'<option value="3603">Arantangi</option>'+ 
										'<option value="3604">Arasiramani</option>'+ 
										'<option value="3605">Aravakurichi</option>'+ 
										'<option value="3606">Aravankadu</option>'+ 
										'<option value="3607">Arcot</option>'+ 
										'<option value="3608">Arimalam</option>'+ 
										'<option value="3609">Ariyalur</option>'+ 
										'<option value="3610">Ariyappampalayam</option>'+ 
										'<option value="3611">Ariyur</option>'+ 
										'<option value="3612">Arni</option>'+ 
										'<option value="3613">Arulmigu Thirumuruganpundi</option>'+ 
										'<option value="3614">Arumanai</option>'+ 
										'<option value="3615">Arumbavur</option>'+ 
										'<option value="3616">Arumuganeri</option>'+ 
										'<option value="3617">Aruppukkottai</option>'+ 
										'<option value="3618">Ashokapuram</option>'+ 
										'<option value="3619">Athani</option>'+ 
										'<option value="3620">Athanur</option>'+ 
										'<option value="3621">Athimarapatti</option>'+ 
										'<option value="3622">Athipattu</option>'+ 
										'<option value="3623">Athur</option>'+ 
										'<option value="3624">Attayyampatti</option>'+ 
										'<option value="3625">Attur</option>'+ 
										'<option value="3626">Auroville</option>'+ 
										'<option value="3627">Avadattur</option>'+ 
										'<option value="3628">Avadi</option>'+ 
										'<option value="3629">Avalpundurai</option>'+ 
										'<option value="3630">Avaniapuram</option>'+ 
										'<option value="3631">Avinashi</option>'+ 
										'<option value="3632">Ayakudi</option>'+ 
										'<option value="3633">Ayanadaippu</option>'+ 
										'<option value="3634">Aygudi</option>'+ 
										'<option value="3635">Ayothiapattinam</option>'+ 
										'<option value="3636">Ayyalur</option>'+ 
										'<option value="3637">Ayyampalayam</option>'+ 
										'<option value="3638">Ayyampettai</option>'+ 
										'<option value="3639">Azhagiapandiapuram</option>'+ 
										'<option value="3640">Balakrishnampatti</option>'+ 
										'<option value="3641">Balakrishnapuram</option>'+ 
										'<option value="3642">Balapallam</option>'+ 
										'<option value="3643">Balasamudram</option>'+ 
										'<option value="3644">Bargur</option>'+ 
										'<option value="3645">Belur</option>'+ 
										'<option value="3646">Berhatty</option>'+ 
										'<option value="3647">Bhavani</option>'+ 
										'<option value="3648">Bhawanisagar</option>'+ 
										'<option value="3649">Bhuvanagiri</option>'+ 
										'<option value="3650">Bikketti</option>'+ 
										'<option value="3651">Bodinayakkanur</option>'+ 
										'<option value="3652">Brahmana Periya Agraharam</option>'+ 
										'<option value="3653">Buthapandi</option>'+ 
										'<option value="3654">Buthipuram</option>'+ 
										'<option value="3655">Chatrapatti</option>'+ 
										'<option value="3656">Chembarambakkam</option>'+ 
										'<option value="3657">Chengalpattu</option>'+ 
										'<option value="3658">Chengam</option>'+ 
										'<option value="3659">Chennai</option>'+ 
										'<option value="3660">Chennasamudram</option>'+ 
										'<option value="3661">Chennimalai</option>'+ 
										'<option value="3662">Cheranmadevi</option>'+ 
										'<option value="3663">Cheruvanki</option>'+ 
										'<option value="3664">Chetpet</option>'+ 
										'<option value="3665">Chettiarpatti</option>'+ 
										'<option value="3666">Chettipalaiyam</option>'+ 
										'<option value="3667">Chettipalayam Cantonment</option>'+ 
										'<option value="3668">Chettithangal</option>'+ 
										'<option value="3669">Cheyur</option>'+ 
										'<option value="3670">Cheyyar</option>'+ 
										'<option value="3671">Chidambaram</option>'+ 
										'<option value="3672">Chinalapatti</option>'+ 
										'<option value="3673">Chinna Anuppanadi</option>'+ 
										'<option value="3674">Chinna Salem</option>'+ 
										'<option value="3675">Chinnakkampalayam</option>'+ 
										'<option value="3676">Chinnammanur</option>'+ 
										'<option value="3677">Chinnampalaiyam</option>'+ 
										'<option value="3678">Chinnasekkadu</option>'+ 
										'<option value="3679">Chinnavedampatti</option>'+ 
										'<option value="3680">Chitlapakkam</option>'+ 
										'<option value="3681">Chittodu</option>'+ 
										'<option value="3682">Cholapuram</option>'+ 
										'<option value="3683">Coimbatore</option>'+ 
										'<option value="3684">Coonoor</option>'+ 
										'<option value="3685">Courtalam</option>'+ 
										'<option value="3686">Cuddalore</option>'+ 
										'<option value="3687">Dalavaipatti</option>'+ 
										'<option value="3688">Darasuram</option>'+ 
										'<option value="3689">Denkanikottai</option>'+ 
										'<option value="3690">Desur</option>'+ 
										'<option value="3691">Devadanapatti</option>'+ 
										'<option value="3692">Devakkottai</option>'+ 
										'<option value="3693">Devakottai</option>'+ 
										'<option value="3694">Devanangurichi</option>'+ 
										'<option value="3695">Devarshola</option>'+ 
										'<option value="3696">Devasthanam</option>'+ 
										'<option value="3697">Dhalavoipuram</option>'+ 
										'<option value="3698">Dhali</option>'+ 
										'<option value="3699">Dhaliyur</option>'+ 
										'<option value="3700">Dharapadavedu</option>'+ 
										'<option value="3701">Dharapuram</option>'+ 
										'<option value="3702">Dharmapuri</option>'+ 
										'<option value="3703">Dindigul</option>'+ 
										'<option value="3704">Dusi</option>'+ 
										'<option value="3705">Edaganasalai</option>'+ 
										'<option value="3706">Edaikodu</option>'+ 
										'<option value="3707">Edakalinadu</option>'+ 
										'<option value="3708">Elathur</option>'+ 
										'<option value="3709">Elayirampannai</option>'+ 
										'<option value="3710">Elumalai</option>'+ 
										'<option value="3711">Eral</option>'+ 
										'<option value="3712">Eraniel</option>'+ 
										'<option value="3713">Eriodu</option>'+ 
										'<option value="3714">Erode</option>'+ 
										'<option value="3715">Erumaipatti</option>'+ 
										'<option value="3716">Eruvadi</option>'+ 
										'<option value="3717">Ethapur</option>'+ 
										'<option value="3718">Ettaiyapuram</option>'+ 
										'<option value="3719">Ettimadai</option>'+ 
										'<option value="3720">Ezhudesam</option>'+ 
										'<option value="3721">Ganapathipuram</option>'+ 
										'<option value="3722">Gandhi Nagar</option>'+ 
										'<option value="3723">Gangaikondan</option>'+ 
										'<option value="3724">Gangavalli</option>'+ 
										'<option value="3725">Ganguvarpatti</option>'+ 
										'<option value="3726">Gingi</option>'+ 
										'<option value="3727">Gopalasamudram</option>'+ 
										'<option value="3728">Gopichettipalaiyam</option>'+ 
										'<option value="3729">Gudalur</option>'+ 
										'<option value="3730">Gudiyattam</option>'+ 
										'<option value="3731">Guduvanchery</option>'+ 
										'<option value="3732">Gummidipoondi</option>'+ 
										'<option value="3733">Hanumanthampatti</option>'+ 
										'<option value="3734">Harur</option>'+ 
										'<option value="3735">Harveypatti</option>'+ 
										'<option value="3736">Highways</option>'+ 
										'<option value="3737">Hosur</option>'+ 
										'<option value="3738">Hubbathala</option>'+ 
										'<option value="3739">Huligal</option>'+ 
										'<option value="3740">Idappadi</option>'+ 
										'<option value="3741">Idikarai</option>'+ 
										'<option value="3742">Ilampillai</option>'+ 
										'<option value="3743">Ilanji</option>'+ 
										'<option value="3744">Iluppaiyurani</option>'+ 
										'<option value="3745">Iluppur</option>'+ 
										'<option value="3746">Inam Karur</option>'+ 
										'<option value="3747">Injambakkam</option>'+ 
										'<option value="3748">Irugur</option>'+ 
										'<option value="3749">Jaffrabad</option>'+ 
										'<option value="3750">Jagathala</option>'+ 
										'<option value="3751">Jalakandapuram</option>'+ 
										'<option value="3752">Jalladiampet</option>'+ 
										'<option value="3753">Jambai</option>'+ 
										'<option value="3754">Jayankondam</option>'+ 
										'<option value="3755">Jolarpet</option>'+ 
										'<option value="3756">Kadambur</option>'+ 
										'<option value="3757">Kadathur</option>'+ 
										'<option value="3758">Kadayal</option>'+ 
										'<option value="3759">Kadayampatti</option>'+ 
										'<option value="3760">Kadayanallur</option>'+ 
										'<option value="3761">Kadiapatti</option>'+ 
										'<option value="3762">Kalakkad</option>'+ 
										'<option value="3763">Kalambur</option>'+ 
										'<option value="3764">Kalapatti</option>'+ 
										'<option value="3765">Kalappanaickenpatti</option>'+ 
										'<option value="3766">Kalavai</option>'+ 
										'<option value="3767">Kalinjur</option>'+ 
										'<option value="3768">Kaliyakkavilai</option>'+ 
										'<option value="3769">Kallakkurichi</option>'+ 
										'<option value="3770">Kallakudi</option>'+ 
										'<option value="3771">Kallidaikurichchi</option>'+ 
										'<option value="3772">Kallukuttam</option>'+ 
										'<option value="3773">Kallupatti</option>'+ 
										'<option value="3774">Kalpakkam</option>'+ 
										'<option value="3775">Kalugumalai</option>'+ 
										'<option value="3776">Kamayagoundanpatti</option>'+ 
										'<option value="3777">Kambainallur</option>'+ 
										'<option value="3778">Kambam</option>'+ 
										'<option value="3779">Kamuthi</option>'+ 
										'<option value="3780">Kanadukathan</option>'+ 
										'<option value="3781">Kanakkampalayam</option>'+ 
										'<option value="3782">Kanam</option>'+ 
										'<option value="3783">Kanchipuram</option>'+ 
										'<option value="3784">Kandanur</option>'+ 
										'<option value="3785">Kangayam</option>'+ 
										'<option value="3786">Kangayampalayam</option>'+ 
										'<option value="3787">Kangeyanallur</option>'+ 
										'<option value="3788">Kaniyur</option>'+ 
										'<option value="3789">Kanjikoil</option>'+ 
										'<option value="3790">Kannadendal</option>'+ 
										'<option value="3791">Kannamangalam</option>'+ 
										'<option value="3792">Kannampalayam</option>'+ 
										'<option value="3793">Kannankurichi</option>'+ 
										'<option value="3794">Kannapalaiyam</option>'+ 
										'<option value="3795">Kannivadi</option>'+ 
										'<option value="3796">Kanyakumari</option>'+ 
										'<option value="3797">Kappiyarai</option>'+ 
										'<option value="3798">Karaikkudi</option>'+ 
										'<option value="3799">Karamadai</option>'+ 
										'<option value="3800">Karambakkam</option>'+ 
										'<option value="3801">Karambakkudi</option>'+ 
										'<option value="3802">Kariamangalam</option>'+ 
										'<option value="3803">Kariapatti</option>'+ 
										'<option value="3804">Karugampattur</option>'+ 
										'<option value="3805">Karumandi Chellipalayam</option>'+ 
										'<option value="3806">Karumathampatti</option>'+ 
										'<option value="3807">Karumbakkam</option>'+ 
										'<option value="3808">Karungal</option>'+ 
										'<option value="3809">Karunguzhi</option>'+ 
										'<option value="3810">Karuppur</option>'+ 
										'<option value="3811">Karur</option>'+ 
										'<option value="3812">Kasipalaiyam</option>'+ 
										'<option value="3813">Kasipalayam G</option>'+ 
										'<option value="3814">Kathirvedu</option>'+ 
										'<option value="3815">Kathujuganapalli</option>'+ 
										'<option value="3816">Katpadi</option>'+ 
										'<option value="3817">Kattivakkam</option>'+ 
										'<option value="3818">Kattumannarkoil</option>'+ 
										'<option value="3819">Kattupakkam</option>'+ 
										'<option value="3820">Kattuputhur</option>'+ 
										'<option value="3821">Kaveripakkam</option>'+ 
										'<option value="3822">Kaveripattinam</option>'+ 
										'<option value="3823">Kavundampalaiyam</option>'+ 
										'<option value="3824">Kavundampalayam</option>'+ 
										'<option value="3825">Kayalpattinam</option>'+ 
										'<option value="3826">Kayattar</option>'+ 
										'<option value="3827">Kelamangalam</option>'+ 
										'<option value="3828">Kelambakkam</option>'+ 
										'<option value="3829">Kembainaickenpalayam</option>'+ 
										'<option value="3830">Kethi</option>'+ 
										'<option value="3831">Kilakarai</option>'+ 
										'<option value="3832">Kilampadi</option>'+ 
										'<option value="3833">Kilkulam</option>'+ 
										'<option value="3834">Kilkunda</option>'+ 
										'<option value="3835">Killiyur</option>'+ 
										'<option value="3836">Killlai</option>'+ 
										'<option value="3837">Kilpennathur</option>'+ 
										'<option value="3838">Kilvelur</option>'+ 
										'<option value="3839">Kinathukadavu</option>'+ 
										'<option value="3840">Kiramangalam</option>'+ 
										'<option value="3841">Kiranur</option>'+ 
										'<option value="3842">Kiripatti</option>'+ 
										'<option value="3843">Kizhapavur</option>'+ 
										'<option value="3844">Kmarasamipatti</option>'+ 
										'<option value="3845">Kochadai</option>'+ 
										'<option value="3846">Kodaikanal</option>'+ 
										'<option value="3847">Kodambakkam</option>'+ 
										'<option value="3848">Kodavasal</option>'+ 
										'<option value="3849">Kodumudi</option>'+ 
										'<option value="3850">Kolachal</option>'+ 
										'<option value="3851">Kolappalur</option>'+ 
										'<option value="3852">Kolathupalayam</option>'+ 
										'<option value="3853">Kolathur</option>'+ 
										'<option value="3854">Kollankodu</option>'+ 
										'<option value="3855">Kollankoil</option>'+ 
										'<option value="3856">Komaralingam</option>'+ 
										'<option value="3857">Komarapalayam</option>'+ 
										'<option value="3858">Kombai</option>'+ 
										'<option value="3859">Konakkarai</option>'+ 
										'<option value="3860">Konavattam</option>'+ 
										'<option value="3861">Kondalampatti</option>'+ 
										'<option value="3862">Konganapuram</option>'+ 
										'<option value="3863">Koradacheri</option>'+ 
										'<option value="3864">Korampallam</option>'+ 
										'<option value="3865">Kotagiri</option>'+ 
										'<option value="3866">Kothinallur</option>'+ 
										'<option value="3867">Kottaiyur</option>'+ 
										'<option value="3868">Kottakuppam</option>'+ 
										'<option value="3869">Kottaram</option>'+ 
										'<option value="3870">Kottivakkam</option>'+ 
										'<option value="3871">Kottur</option>'+ 
										'<option value="3872">Kovilpatti</option>'+ 
										'<option value="3873">Koyampattur</option>'+ 
										'<option value="3874">Krishnagiri</option>'+ 
										'<option value="3875">Krishnarayapuram</option>'+ 
										'<option value="3876">Krishnasamudram</option>'+ 
										'<option value="3877">Kuchanur</option>'+ 
										'<option value="3878">Kuhalur</option>'+ 
										'<option value="3879">Kulasekarappattinam</option>'+ 
										'<option value="3880">Kulasekarapuram</option>'+ 
										'<option value="3881">Kulithalai</option>'+ 
										'<option value="3882">Kumarapalaiyam</option>'+ 
										'<option value="3883">Kumarapalayam</option>'+ 
										'<option value="3884">Kumarapuram</option>'+ 
										'<option value="3885">Kumbakonam</option>'+ 
										'<option value="3886">Kundrathur</option>'+ 
										'<option value="3887">Kuniyamuthur</option>'+ 
										'<option value="3888">Kunnathur</option>'+ 
										'<option value="3889">Kunur</option>'+ 
										'<option value="3890">Kuraikundu</option>'+ 
										'<option value="3891">Kurichi</option>'+ 
										'<option value="3892">Kurinjippadi</option>'+ 
										'<option value="3893">Kurudampalaiyam</option>'+ 
										'<option value="3894">Kurumbalur</option>'+ 
										'<option value="3895">Kuthalam</option>'+ 
										'<option value="3896">Kuthappar</option>'+ 
										'<option value="3897">Kuttalam</option>'+ 
										'<option value="3898">Kuttanallur</option>'+ 
										'<option value="3899">Kuzhithurai</option>'+ 
										'<option value="3900">Labbaikudikadu</option>'+ 
										'<option value="3901">Lakkampatti</option>'+ 
										'<option value="3902">Lalgudi</option>'+ 
										'<option value="3903">Lalpet</option>'+ 
										'<option value="3904">Llayangudi</option>'+ 
										'<option value="3905">Madambakkam</option>'+ 
										'<option value="3906">Madanur</option>'+ 
										'<option value="3907">Madathukulam</option>'+ 
										'<option value="3908">Madhavaram</option>'+ 
										'<option value="3909">Madippakkam</option>'+ 
										'<option value="3910">Madukkarai</option>'+ 
										'<option value="3911">Madukkur</option>'+ 
										'<option value="3912">Madurai</option>'+ 
										'<option value="3913">Maduranthakam</option>'+ 
										'<option value="3914">Maduravoyal</option>'+ 
										'<option value="3915">Mahabalipuram</option>'+ 
										'<option value="3916">Makkinanpatti</option>'+ 
										'<option value="3917">Mallamuppampatti</option>'+ 
										'<option value="3918">Mallankinaru</option>'+ 
										'<option value="3919">Mallapuram</option>'+ 
										'<option value="3920">Mallasamudram</option>'+ 
										'<option value="3921">Mallur</option>'+ 
										'<option value="3922">Mamallapuram</option>'+ 
										'<option value="3923">Mamsapuram</option>'+ 
										'<option value="3924">Manachanallur</option>'+ 
										'<option value="3925">Manali</option>'+ 
										'<option value="3926">Manalmedu</option>'+ 
										'<option value="3927">Manalurpet</option>'+ 
										'<option value="3928">Manamadurai</option>'+ 
										'<option value="3929">Manapakkam</option>'+ 
										'<option value="3930">Manapparai</option>'+ 
										'<option value="3931">Manavalakurichi</option>'+ 
										'<option value="3932">Mandaikadu</option>'+ 
										'<option value="3933">Mandapam</option>'+ 
										'<option value="3934">Mangadu</option>'+ 
										'<option value="3935">Mangalam</option>'+ 
										'<option value="3936">Mangalampet</option>'+ 
										'<option value="3937">Manimutharu</option>'+ 
										'<option value="3938">Mannargudi</option>'+ 
										'<option value="3939">Mappilaiurani</option>'+ 
										'<option value="3940">Maraimalai Nagar</option>'+ 
										'<option value="3941">Marakkanam</option>'+ 
										'<option value="3942">Maramangalathupatti</option>'+ 
										'<option value="3943">Marandahalli</option>'+ 
										'<option value="3944">Markayankottai</option>'+ 
										'<option value="3945">Marudur</option>'+ 
										'<option value="3946">Marungur</option>'+ 
										'<option value="3947">Masinigudi</option>'+ 
										'<option value="3948">Mathigiri</option>'+ 
										'<option value="3949">Mattur</option>'+ 
										'<option value="3950">Mayiladuthurai</option>'+ 
										'<option value="3951">Mecheri</option>'+ 
										'<option value="3952">Melacheval</option>'+ 
										'<option value="3953">Melachokkanathapuram</option>'+ 
										'<option value="3954">Melagaram</option>'+ 
										'<option value="3955">Melamadai</option>'+ 
										'<option value="3956">Melamaiyur</option>'+ 
										'<option value="3957">Melanattam</option>'+ 
										'<option value="3958">Melathiruppanthuruthi</option>'+ 
										'<option value="3959">Melattur</option>'+ 
										'<option value="3960">Melmananbedu</option>'+ 
										'<option value="3961">Melpattampakkam</option>'+ 
										'<option value="3962">Melur</option>'+ 
										'<option value="3963">Melvisharam</option>'+ 
										'<option value="3964">Mettupalayam</option>'+ 
										'<option value="3965">Mettur</option>'+ 
										'<option value="3966">Meyyanur</option>'+ 
										'<option value="3967">Milavittan</option>'+ 
										'<option value="3968">Minakshipuram</option>'+ 
										'<option value="3969">Minambakkam</option>'+ 
										'<option value="3970">Minjur</option>'+ 
										'<option value="3971">Modakurichi</option>'+ 
										'<option value="3972">Mohanur</option>'+ 
										'<option value="3973">Mopperipalayam</option>'+ 
										'<option value="3974">Mudalur</option>'+ 
										'<option value="3975">Mudichur</option>'+ 
										'<option value="3976">Mudukulathur</option>'+ 
										'<option value="3977">Mukasipidariyur</option>'+ 
										'<option value="3978">Mukkudal</option>'+ 
										'<option value="3979">Mulagumudu</option>'+ 
										'<option value="3980">Mulakaraipatti</option>'+ 
										'<option value="3981">Mulanur</option>'+ 
										'<option value="3982">Mullakkadu</option>'+ 
										'<option value="3983">Muruganpalayam</option>'+ 
										'<option value="3984">Musiri</option>'+ 
										'<option value="3985">Muthupet</option>'+ 
										'<option value="3986">Muthur</option>'+ 
										'<option value="3987">Muttayyapuram</option>'+ 
										'<option value="3988">Muttupet</option>'+ 
										'<option value="3989">Muvarasampettai</option>'+ 
										'<option value="3990">Myladi</option>'+ 
										'<option value="3991">Mylapore</option>'+ 
										'<option value="3992">Nadukkuthagai</option>'+ 
										'<option value="3993">Naduvattam</option>'+ 
										'<option value="3994">Nagapattinam</option>'+ 
										'<option value="3995">Nagavakulam</option>'+ 
										'<option value="3996">Nagercoil</option>'+ 
										'<option value="3997">Nagojanahalli</option>'+ 
										'<option value="3998">Nallampatti</option>'+ 
										'<option value="3999">Nallur</option>'+ 
										'<option value="4000">Namagiripettai</option>'+ 
										'<option value="4001">Namakkal</option>'+ 
										'<option value="4002">Nambiyur</option>'+ 
										'<option value="4003">Nambutalai</option>'+ 
										'<option value="4004">Nandambakkam</option>'+ 
										'<option value="4005">Nandivaram</option>'+ 
										'<option value="4006">Nangavalli</option>'+ 
										'<option value="4007">Nangavaram</option>'+ 
										'<option value="4008">Nanguneri</option>'+ 
										'<option value="4009">Nanjikottai</option>'+ 
										'<option value="4010">Nannilam</option>'+ 
										'<option value="4011">Naranammalpuram</option>'+ 
										'<option value="4012">Naranapuram</option>'+ 
										'<option value="4013">Narasimhanaickenpalayam</option>'+ 
										'<option value="4014">Narasingapuram</option>'+ 
										'<option value="4015">Narasojipatti</option>'+ 
										'<option value="4016">Naravarikuppam</option>'+ 
										'<option value="4017">Nasiyanur</option>'+ 
										'<option value="4018">Natham</option>'+ 
										'<option value="4019">Nathampannai</option>'+ 
										'<option value="4020">Natrampalli</option>'+ 
										'<option value="4021">Nattam</option>'+ 
										'<option value="4022">Nattapettai</option>'+ 
										'<option value="4023">Nattarasankottai</option>'+ 
										'<option value="4024">Navalpattu</option>'+ 
										'<option value="4025">Nazarethpettai</option>'+ 
										'<option value="4026">Nazerath</option>'+ 
										'<option value="4027">Neikkarapatti</option>'+ 
										'<option value="4028">Neiyyur</option>'+ 
										'<option value="4029">Nellikkuppam</option>'+ 
										'<option value="4030">Nelliyalam</option>'+ 
										'<option value="4031">Nemili</option>'+ 
										'<option value="4032">Nemilicheri</option>'+ 
										'<option value="4033">Neripperichal</option>'+ 
										'<option value="4034">Nerkunram</option>'+ 
										'<option value="4035">Nerkuppai</option>'+ 
										'<option value="4036">Nerunjipettai</option>'+ 
										'<option value="4037">Neykkarappatti</option>'+ 
										'<option value="4038">Neyveli</option>'+ 
										'<option value="4039">Nidamangalam</option>'+ 
										'<option value="4040">Nilagiri</option>'+ 
										'<option value="4041">Nilakkottai</option>'+ 
										'<option value="4042">Nilankarai</option>'+ 
										'<option value="4043">Odaipatti</option>'+ 
										'<option value="4044">Odaiyakulam</option>'+ 
										'<option value="4045">Oddanchatram</option>'+ 
										'<option value="4046">Odugathur</option>'+ 
										'<option value="4047">Oggiyamduraipakkam</option>'+ 
										'<option value="4048">Olagadam</option>'+ 
										'<option value="4049">Omalur</option>'+ 
										'<option value="4050">Ooty</option>'+ 
										'<option value="4051">Orathanadu</option>'+ 
										'<option value="4052">Othakadai</option>'+ 
										'<option value="4053">Othakalmandapam</option>'+ 
										'<option value="4054">Ottapparai</option>'+ 
										'<option value="4055">Pacode</option>'+ 
										'<option value="4056">Padaividu</option>'+ 
										'<option value="4057">Padianallur</option>'+ 
										'<option value="4058">Padirikuppam</option>'+ 
										'<option value="4059">Padmanabhapuram</option>'+ 
										'<option value="4060">Padririvedu</option>'+ 
										'<option value="4061">Palaganangudy</option>'+ 
										'<option value="4062">Palaimpatti</option>'+ 
										'<option value="4063">Palakkodu</option>'+ 
										'<option value="4064">Palamedu</option>'+ 
										'<option value="4065">Palani</option>'+ 
										'<option value="4066">Palani Chettipatti</option>'+ 
										'<option value="4067">Palavakkam</option>'+ 
										'<option value="4068">Palavansathu</option>'+ 
										'<option value="4069">Palayakayal</option>'+ 
										'<option value="4070">Palayam</option>'+ 
										'<option value="4071">Palayamkottai</option>'+ 
										'<option value="4072">Palladam</option>'+ 
										'<option value="4073">Pallapalayam</option>'+ 
										'<option value="4074">Pallapatti</option>'+ 
										'<option value="4075">Pallattur</option>'+ 
										'<option value="4076">Pallavaram</option>'+ 
										'<option value="4077">Pallikaranai</option>'+ 
										'<option value="4078">Pallikonda</option>'+ 
										'<option value="4079">Pallipalaiyam</option>'+ 
										'<option value="4080">Pallipalaiyam Agraharam</option>'+ 
										'<option value="4081">Pallipattu</option>'+ 
										'<option value="4082">Pammal</option>'+ 
										'<option value="4083">Panagudi</option>'+ 
										'<option value="4084">Panaimarathupatti</option>'+ 
										'<option value="4085">Panapakkam</option>'+ 
										'<option value="4086">Panboli</option>'+ 
										'<option value="4087">Pandamangalam</option>'+ 
										'<option value="4088">Pannaikadu</option>'+ 
										'<option value="4089">Pannaipuram</option>'+ 
										'<option value="4090">Pannuratti</option>'+ 
										'<option value="4091">Panruti</option>'+ 
										'<option value="4092">Papanasam</option>'+ 
										'<option value="4093">Pappankurichi</option>'+ 
										'<option value="4094">Papparapatti</option>'+ 
										'<option value="4095">Pappireddipatti</option>'+ 
										'<option value="4096">Paramakkudi</option>'+ 
										'<option value="4097">Paramankurichi</option>'+ 
										'<option value="4098">Paramathi</option>'+ 
										'<option value="4099">Parangippettai</option>'+ 
										'<option value="4100">Paravai</option>'+ 
										'<option value="4101">Pasur</option>'+ 
										'<option value="4102">Pathamadai</option>'+ 
										'<option value="4103">Pattinam</option>'+ 
										'<option value="4104">Pattiviranpatti</option>'+ 
										'<option value="4105">Pattukkottai</option>'+ 
										'<option value="4106">Pazhugal</option>'+ 
										'<option value="4107">Pennadam</option>'+ 
										'<option value="4108">Pennagaram</option>'+ 
										'<option value="4109">Pennathur</option>'+ 
										'<option value="4110">Peraiyur</option>'+ 
										'<option value="4111">Peralam</option>'+ 
										'<option value="4112">Perambalur</option>'+ 
										'<option value="4113">Peranamallur</option>'+ 
										'<option value="4114">Peravurani</option>'+ 
										'<option value="4115">Periyakodiveri</option>'+ 
										'<option value="4116">Periyakulam</option>'+ 
										'<option value="4117">Periyanayakkanpalaiyam</option>'+ 
										'<option value="4118">Periyanegamam</option>'+ 
										'<option value="4119">Periyapatti</option>'+ 
										'<option value="4120">Periyasemur</option>'+ 
										'<option value="4121">Pernambut</option>'+ 
										'<option value="4122">Perumagalur</option>'+ 
										'<option value="4123">Perumandi</option>'+ 
										'<option value="4124">Perumuchi</option>'+ 
										'<option value="4125">Perundurai</option>'+ 
										'<option value="4126">Perungalathur</option>'+ 
										'<option value="4127">Perungudi</option>'+ 
										'<option value="4128">Perungulam</option>'+ 
										'<option value="4129">Perur</option>'+ 
										'<option value="4130">Perur Chettipalaiyam</option>'+ 
										'<option value="4131">Pethampalayam</option>'+ 
										'<option value="4132">Pethanaickenpalayam</option>'+ 
										'<option value="4133">Pillanallur</option>'+ 
										'<option value="4134">Pirkankaranai</option>'+ 
										'<option value="4135">Polichalur</option>'+ 
										'<option value="4136">Pollachi</option>'+ 
										'<option value="4137">Polur</option>'+ 
										'<option value="4138">Ponmani</option>'+ 
										'<option value="4139">Ponnamaravathi</option>'+ 
										'<option value="4140">Ponnampatti</option>'+ 
										'<option value="4141">Ponneri</option>'+ 
										'<option value="4142">Porur</option>'+ 
										'<option value="4143">Pothanur</option>'+ 
										'<option value="4144">Pothatturpettai</option>'+ 
										'<option value="4145">Pudukadai</option>'+ 
										'<option value="4146">Pudukkottai Cantonment</option>'+ 
										'<option value="4147">Pudukottai</option>'+ 
										'<option value="4148">Pudupalaiyam Aghraharam</option>'+ 
										'<option value="4149">Pudupalayam</option>'+ 
										'<option value="4150">Pudupatti</option>'+ 
										'<option value="4151">Pudupattinam</option>'+ 
										'<option value="4152">Pudur</option>'+ 
										'<option value="4153">Puduvayal</option>'+ 
										'<option value="4154">Pulambadi</option>'+ 
										'<option value="4155">Pulampatti</option>'+ 
										'<option value="4156">Puliyampatti</option>'+ 
										'<option value="4157">Puliyankudi</option>'+ 
										'<option value="4158">Puliyur</option>'+ 
										'<option value="4159">Pullampadi</option>'+ 
										'<option value="4160">Puluvapatti</option>'+ 
										'<option value="4161">Punamalli</option>'+ 
										'<option value="4162">Punjai Puliyampatti</option>'+ 
										'<option value="4163">Punjai Thottakurichi</option>'+ 
										'<option value="4164">Punjaipugalur</option>'+ 
										'<option value="4165">Puthalam</option>'+ 
										'<option value="4166">Putteri</option>'+ 
										'<option value="4167">Puvalur</option>'+ 
										'<option value="4168">Puzhal</option>'+ 
										'<option value="4169">Puzhithivakkam</option>'+ 
										'<option value="4170">Rajapalayam</option>'+ 
										'<option value="4171">Ramanathapuram</option>'+ 
										'<option value="4172">Ramapuram</option>'+ 
										'<option value="4173">Rameswaram</option>'+ 
										'<option value="4174">Ranipet</option>'+ 
										'<option value="4175">Rasipuram</option>'+ 
										'<option value="4176">Rayagiri</option>'+ 
										'<option value="4177">Rithapuram</option>'+ 
										'<option value="4178">Rosalpatti</option>'+ 
										'<option value="4179">Rudravathi</option>'+ 
										'<option value="4180">Sadayankuppam</option>'+ 
										'<option value="4181">Saint Thomas Mount</option>'+ 
										'<option value="4182">Salangapalayam</option>'+ 
										'<option value="4183">Salem</option>'+ 
										'<option value="4184">Samalapuram</option>'+ 
										'<option value="4185">Samathur</option>'+ 
										'<option value="4186">Sambavar Vadagarai</option>'+ 
										'<option value="4187">Sankaramanallur</option>'+ 
										'<option value="4188">Sankarankoil</option>'+ 
										'<option value="4189">Sankarapuram</option>'+ 
										'<option value="4190">Sankari</option>'+ 
										'<option value="4191">Sankarnagar</option>'+ 
										'<option value="4192">Saravanampatti</option>'+ 
										'<option value="4193">Sarcarsamakulam</option>'+ 
										'<option value="4194">Sathiyavijayanagaram</option>'+ 
										'<option value="4195">Sathuvachari</option>'+ 
										'<option value="4196">Sathyamangalam</option>'+ 
										'<option value="4197">Sattankulam</option>'+ 
										'<option value="4198">Sattur</option>'+ 
										'<option value="4199">Sayalgudi</option>'+ 
										'<option value="4200">Sayapuram</option>'+ 
										'<option value="4201">Seithur</option>'+ 
										'<option value="4202">Sembakkam</option>'+ 
										'<option value="4203">Semmipalayam</option>'+ 
										'<option value="4204">Sennirkuppam</option>'+ 
										'<option value="4205">Senthamangalam</option>'+ 
										'<option value="4206">Sentharapatti</option>'+ 
										'<option value="4207">Senur</option>'+ 
										'<option value="4208">Sethiathoppu</option>'+ 
										'<option value="4209">Sevilimedu</option>'+ 
										'<option value="4210">Sevugampatti</option>'+ 
										'<option value="4211">Shenbakkam</option>'+ 
										'<option value="4212">Shencottai</option>'+ 
										'<option value="4213">Shenkottai</option>'+ 
										'<option value="4214">Sholavandan</option>'+ 
										'<option value="4215">Sholinganallur</option>'+ 
										'<option value="4216">Sholingur</option>'+ 
										'<option value="4217">Sholur</option>'+ 
										'<option value="4218">Sikkarayapuram</option>'+ 
										'<option value="4219">Singampuneri</option>'+ 
										'<option value="4220">Singanallur</option>'+ 
										'<option value="4221">Singaperumalkoil</option>'+ 
										'<option value="4222">Sirapalli</option>'+ 
										'<option value="4223">Sirkali</option>'+ 
										'<option value="4224">Sirugamani</option>'+ 
										'<option value="4225">Sirumugai</option>'+ 
										'<option value="4226">Sithayankottai</option>'+ 
										'<option value="4227">Sithurajapuram</option>'+ 
										'<option value="4228">Sivaganga</option>'+ 
										'<option value="4229">Sivagiri</option>'+ 
										'<option value="4230">Sivakasi</option>'+ 
										'<option value="4231">Sivanthipuram</option>'+ 
										'<option value="4232">Sivur</option>'+ 
										'<option value="4233">Soranjeri</option>'+ 
										'<option value="4234">South Kannanur</option>'+ 
										'<option value="4235">South Kodikulam</option>'+ 
										'<option value="4236">Srimushnam</option>'+ 
										'<option value="4237">Sriperumpudur</option>'+ 
										'<option value="4238">Sriramapuram</option>'+ 
										'<option value="4239">Srirangam</option>'+ 
										'<option value="4240">Srivaikuntam</option>'+ 
										'<option value="4241">Srivilliputtur</option>'+ 
										'<option value="4242">Suchindram</option>'+ 
										'<option value="4243">Suliswaranpatti</option>'+ 
										'<option value="4244">Sulur</option>'+ 
										'<option value="4245">Sundarapandiam</option>'+ 
										'<option value="4246">Sundarapandiapuram</option>'+ 
										'<option value="4247">Surampatti</option>'+ 
										'<option value="4248">Surandai</option>'+ 
										'<option value="4249">Suriyampalayam</option>'+ 
										'<option value="4250">Swamimalai</option>'+ 
										'<option value="4251">TNPL Pugalur</option>'+ 
										'<option value="4252">Tambaram</option>'+ 
										'<option value="4253">Taramangalam</option>'+ 
										'<option value="4254">Tattayyangarpettai</option>'+ 
										'<option value="4255">Tayilupatti</option>'+ 
										'<option value="4256">Tenkasi</option>'+ 
										'<option value="4257">Thadikombu</option>'+ 
										'<option value="4258">Thakkolam</option>'+ 
										'<option value="4259">Thalainayar</option>'+ 
										'<option value="4260">Thalakudi</option>'+ 
										'<option value="4261">Thamaraikulam</option>'+ 
										'<option value="4262">Thammampatti</option>'+ 
										'<option value="4263">Thanjavur</option>'+ 
										'<option value="4264">Thanthoni</option>'+ 
										'<option value="4265">Tharangambadi</option>'+ 
										'<option value="4266">Thedavur</option>'+ 
										'<option value="4267">Thenambakkam</option>'+ 
										'<option value="4268">Thengampudur</option>'+ 
										'<option value="4269">Theni</option>'+ 
										'<option value="4270">Theni Allinagaram</option>'+ 
										'<option value="4271">Thenkarai</option>'+ 
										'<option value="4272">Thenthamaraikulam</option>'+ 
										'<option value="4273">Thenthiruperai</option>'+ 
										'<option value="4274">Thesur</option>'+ 
										'<option value="4275">Thevaram</option>'+ 
										'<option value="4276">Thevur</option>'+ 
										'<option value="4277">Thiagadurgam</option>'+ 
										'<option value="4278">Thiagarajar Colony</option>'+ 
										'<option value="4279">Thingalnagar</option>'+ 
										'<option value="4280">Thiruchirapalli</option>'+ 
										'<option value="4281">Thirukarungudi</option>'+ 
										'<option value="4282">Thirukazhukundram</option>'+ 
										'<option value="4283">Thirumalayampalayam</option>'+ 
										'<option value="4284">Thirumazhisai</option>'+ 
										'<option value="4285">Thirunagar</option>'+ 
										'<option value="4286">Thirunageswaram</option>'+ 
										'<option value="4287">Thirunindravur</option>'+ 
										'<option value="4288">Thirunirmalai</option>'+ 
										'<option value="4289">Thiruparankundram</option>'+ 
										'<option value="4290">Thiruparappu</option>'+ 
										'<option value="4291">Thiruporur</option>'+ 
										'<option value="4292">Thiruppanandal</option>'+ 
										'<option value="4293">Thirupuvanam</option>'+ 
										'<option value="4294">Thiruthangal</option>'+ 
										'<option value="4295">Thiruthuraipundi</option>'+ 
										'<option value="4296">Thiruvaivaru</option>'+ 
										'<option value="4297">Thiruvalam</option>'+ 
										'<option value="4298">Thiruvarur</option>'+ 
										'<option value="4299">Thiruvattaru</option>'+ 
										'<option value="4300">Thiruvenkatam</option>'+ 
										'<option value="4301">Thiruvennainallur</option>'+ 
										'<option value="4302">Thiruvithankodu</option>'+ 
										'<option value="4303">Thisayanvilai</option>'+ 
										'<option value="4304">Thittacheri</option>'+ 
										'<option value="4305">Thondamuthur</option>'+ 
										'<option value="4306">Thorapadi</option>'+ 
										'<option value="4307">Thottipalayam</option>'+ 
										'<option value="4308">Thottiyam</option>'+ 
										'<option value="4309">Thudiyalur</option>'+ 
										'<option value="4310">Thuthipattu</option>'+ 
										'<option value="4311">Thuvakudi</option>'+ 
										'<option value="4312">Timiri</option>'+ 
										'<option value="4313">Tindivanam</option>'+ 
										'<option value="4314">Tinnanur</option>'+ 
										'<option value="4315">Tiruchchendur</option>'+ 
										'<option value="4316">Tiruchengode</option>'+ 
										'<option value="4317">Tirukkalukkundram</option>'+ 
										'<option value="4318">Tirukkattuppalli</option>'+ 
										'<option value="4319">Tirukkoyilur</option>'+ 
										'<option value="4320">Tirumangalam</option>'+ 
										'<option value="4321">Tirumullaivasal</option>'+ 
										'<option value="4322">Tirumuruganpundi</option>'+ 
										'<option value="4323">Tirunageswaram</option>'+ 
										'<option value="4324">Tirunelveli</option>'+ 
										'<option value="4325">Tirupathur</option>'+ 
										'<option value="4326">Tirupattur</option>'+ 
										'<option value="4327">Tiruppuvanam</option>'+ 
										'<option value="4328">Tirupur</option>'+ 
										'<option value="4329">Tirusulam</option>'+ 
										'<option value="4330">Tiruttani</option>'+ 
										'<option value="4331">Tiruvallur</option>'+ 
										'<option value="4332">Tiruvannamalai</option>'+ 
										'<option value="4333">Tiruverambur</option>'+ 
										'<option value="4334">Tiruverkadu</option>'+ 
										'<option value="4335">Tiruvethipuram</option>'+ 
										'<option value="4336">Tiruvidaimarudur</option>'+ 
										'<option value="4337">Tiruvottiyur</option>'+ 
										'<option value="4338">Tittakudi</option>'+ 
										'<option value="4339">Tondi</option>'+ 
										'<option value="4340">Turaiyur</option>'+ 
										'<option value="4341">Tuticorin</option>'+ 
										'<option value="4342">Udagamandalam</option>'+ 
										'<option value="4343">Udagamandalam Valley</option>'+ 
										'<option value="4344">Udankudi</option>'+ 
										'<option value="4345">Udayarpalayam</option>'+ 
										'<option value="4346">Udumalaipettai</option>'+ 
										'<option value="4347">Udumalpet</option>'+ 
										'<option value="4348">Ullur</option>'+ 
										'<option value="4349">Ulundurpettai</option>'+ 
										'<option value="4350">Unjalaur</option>'+ 
										'<option value="4351">Unnamalaikadai</option>'+ 
										'<option value="4352">Uppidamangalam</option>'+ 
										'<option value="4353">Uppiliapuram</option>'+ 
										'<option value="4354">Urachikkottai</option>'+ 
										'<option value="4355">Urapakkam</option>'+ 
										'<option value="4356">Usilampatti</option>'+ 
										'<option value="4357">Uthangarai</option>'+ 
										'<option value="4358">Uthayendram</option>'+ 
										'<option value="4359">Uthiramerur</option>'+ 
										'<option value="4360">Uthukkottai</option>'+ 
										'<option value="4361">Uttamapalaiyam</option>'+ 
										'<option value="4362">Uttukkuli</option>'+ 
										'<option value="4363">Vadakarai Kizhpadugai</option>'+ 
										'<option value="4364">Vadakkanandal</option>'+ 
										'<option value="4365">Vadakku Valliyur</option>'+ 
										'<option value="4366">Vadalur</option>'+ 
										'<option value="4367">Vadamadurai</option>'+ 
										'<option value="4368">Vadavalli</option>'+ 
										'<option value="4369">Vadipatti</option>'+ 
										'<option value="4370">Vadugapatti</option>'+ 
										'<option value="4371">Vaithiswarankoil</option>'+ 
										'<option value="4372">Valangaiman</option>'+ 
										'<option value="4373">Valasaravakkam</option>'+ 
										'<option value="4374">Valavanur</option>'+ 
										'<option value="4375">Vallam</option>'+ 
										'<option value="4376">Valparai</option>'+ 
										'<option value="4377">Valvaithankoshtam</option>'+ 
										'<option value="4378">Vanavasi</option>'+ 
										'<option value="4379">Vandalur</option>'+ 
										'<option value="4380">Vandavasi</option>'+ 
										'<option value="4381">Vandiyur</option>'+ 
										'<option value="4382">Vaniputhur</option>'+ 
										'<option value="4383">Vaniyambadi</option>'+ 
										'<option value="4384">Varadarajanpettai</option>'+ 
										'<option value="4385">Varadharajapuram</option>'+ 
										'<option value="4386">Vasudevanallur</option>'+ 
										'<option value="4387">Vathirairuppu</option>'+ 
										'<option value="4388">Vattalkundu</option>'+ 
										'<option value="4389">Vazhapadi</option>'+ 
										'<option value="4390">Vedapatti</option>'+ 
										'<option value="4391">Vedaranniyam</option>'+ 
										'<option value="4392">Vedasandur</option>'+ 
										'<option value="4393">Velampalaiyam</option>'+ 
										'<option value="4394">Velankanni</option>'+ 
										'<option value="4395">Vellakinar</option>'+ 
										'<option value="4396">Vellakoil</option>'+ 
										'<option value="4397">Vellalapatti</option>'+ 
										'<option value="4398">Vellalur</option>'+ 
										'<option value="4399">Vellanur</option>'+ 
										'<option value="4400">Vellimalai</option>'+ 
										'<option value="4401">Vellore</option>'+ 
										'<option value="4402">Vellottamparappu</option>'+ 
										'<option value="4403">Velluru</option>'+ 
										'<option value="4404">Vengampudur</option>'+ 
										'<option value="4405">Vengathur</option>'+ 
										'<option value="4406">Vengavasal</option>'+ 
										'<option value="4407">Venghatur</option>'+ 
										'<option value="4408">Venkarai</option>'+ 
										'<option value="4409">Vennanthur</option>'+ 
										'<option value="4410">Veppathur</option>'+ 
										'<option value="4411">Verkilambi</option>'+ 
										'<option value="4412">Vettaikaranpudur</option>'+ 
										'<option value="4413">Vettavalam</option>'+ 
										'<option value="4414">Vijayapuri</option>'+ 
										'<option value="4415">Vikramasingapuram</option>'+ 
										'<option value="4416">Vikravandi</option>'+ 
										'<option value="4417">Vilangudi</option>'+ 
										'<option value="4418">Vilankurichi</option>'+ 
										'<option value="4419">Vilapakkam</option>'+ 
										'<option value="4420">Vilathikulam</option>'+ 
										'<option value="4421">Vilavur</option>'+ 
										'<option value="4422">Villukuri</option>'+ 
										'<option value="4423">Villupuram</option>'+ 
										'<option value="4424">Viraganur</option>'+ 
										'<option value="4425">Virakeralam</option>'+ 
										'<option value="4426">Virakkalpudur</option>'+ 
										'<option value="4427">Virapandi</option>'+ 
										'<option value="4428">Virapandi Cantonment</option>'+ 
										'<option value="4429">Virappanchatram</option>'+ 
										'<option value="4430">Viravanallur</option>'+ 
										'<option value="4431">Virudambattu</option>'+ 
										'<option value="4432">Virudhachalam</option>'+ 
										'<option value="4433">Virudhunagar</option>'+ 
										'<option value="4434">Virupakshipuram</option>'+ 
										'<option value="4435">Viswanatham</option>'+ 
										'<option value="4436">Vriddhachalam</option>'+ 
										'<option value="4437">Walajabad</option>'+ 
										'<option value="4438">Walajapet</option>'+ 
										'<option value="4439">Wellington</option>'+ 
										'<option value="4440">Yercaud</option>'+ 
										'<option value="4441">Zamin Uthukuli</option>'+ 
									 '</select>'+
								'</div>'+
							'</div>'+
							'<div class="col-lg-8 col-md-8">'+
								'<label for="pwd">Clinic / Hospital Name</label>'+
								'<input type="text" name="hosp_name[]" placeholder="Enter Clinic / Hospital Name" class="form-control" id="hosp_'+addCount+'">'+						
							'</div>'+

							'<div class="col-lg-1 col-md-1 text-center delete_icon">'+
								'<img src="'+filePath+'delete.png" alt="" id="'+addCount+'" onclick="remExp(this.id,\'' + v1 + '\',\'' + v2 + '\',\'' + v3 + '\');" />'+
							'</div>'+
						'</div><br/>';	
					
			$('.addExperienceDetails').append(html);
			$("#city_"+addCount).select2();
			$("#divLoading").removeClass('show');
			$("#duration_"+addCount).daterangepicker();				
			//$(".dr-edu-add").prop('disabled',true);
		}
	});

