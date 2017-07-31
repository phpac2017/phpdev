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