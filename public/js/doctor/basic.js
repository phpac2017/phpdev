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

/*function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function (e) {
        	$('#ch_img').attr('src', '');
            $('#ch_img').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}
    
$("#profile_pic").change(function(){
    readURL(this);
});*/

function loadFile(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('ch_img');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
};

/***************************** Registration Validation and Submission ***************************************/
$(function(){
	jQuery("#dr_profile_form").validate({
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
			profile_pic: {
				required: true,
				//accept : "image/jpg,image/jpeg,image/png,image/JPG,image/JPEG,image/PNG"
			},
			experience:{
				required : true,
			},
			language:{
				required: function(element){
					if($("#language").val()==''){
						return false;
					}
				},
			},
			nationality: {
				required: function(element){
					if($("#nationality").val()==''){
						return false;
					}
				},
			},
			description :{
				required : true,
			},
			city: {
				required: true,
			}
		},
		messages:{
			name: {
				required: 'Please enter name',
			},
			gender:{
				required:'Please select gender',
			},
			mobile_number: {
				required: 'Please enter Mobile Number',
			},
			profile_pic: {
				required: 'Please Upload Image',
				accept : "Only image type jpg/png/jpeg/gif is allowed",
			},
			experience:{
				required : "Please Enter Experience",
			},
			language:{
				required: 'Please select Language',
			},
			nationality: {
				required:'Please select Nationality',
			},
			description :{
				required : 'Say something about you',
			},
			city:{
				required: 'Please Enter City',
			} 
			
		},
		submitHandler:function(){
			form.submit();
		}
	});
});

/******************************************************************************************************/