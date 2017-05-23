$(function(){
	verification();
});

function verification(){
	$('#phone-send').click(function(){
		if($('input#phone_phone').val() != ''){
			$('#phone_number').html($('input#phone_phone').val());
			$(this).closest('.phone').hide();
			$('div#phone_verification').show();
		}
	});
	
	$('#phone-verify').click(function(){
		if($('input#phone_verify').val() != ''){
			$(this).closest('.verify').hide();
			$('div#phone_success').show();
		}
	});
	$('#email-send').click(function(){
		if($('input#email_email').val() != ''){
			$('#user_email').html($('input#email_email').val());
			$(this).closest('.email').hide();
			$('div#email_verification').show();
		}
	});
	
	$('#email-verify').click(function(){
		if($('input#email-verify').val() != ''){
			$(this).closest('.verify').hide();
			$('div#email_success').show();
		}
	});
}