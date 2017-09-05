$(function(){
	next();
});



function next(){
	$('#preco button').click(function(){
		$('#precontractual').removeClass('in');
		$('#precontractual_button').addClass('collapsed done');
		$('#precontractual .form').hide();
		$('#precontractual .form.done').show();

		/*$('#terms').addClass('in');
		$('#terms_button').removeClass('collapsed inactive');
		$('#terms_button').attr('data-target','#terms');
		$('#terms_button span.inactive_accordion').removeClass('inactive_accordion');*/
		
		
		$('#contract').addClass('in');
		$('#contract_button span.inactive_accordion').removeClass('inactive_accordion');
		$('#contract_button').removeClass('collapsed inactive');
		$('#contract_button').attr('data-target','#contract');
	});

	$('#general button').click(function(){
		$('#terms').removeClass('in');
		$('#terms_button').addClass('collapsed done');
		$('#terms .form').hide();
		$('#terms .form.done').show();

		$('#pricelist_button span.inactive_accordion').removeClass('inactive_accordion');
		$('#pricelist').addClass('in');
		$('#pricelist_button').removeClass('collapsed inactive');
		$('#pricelist_button').attr('data-target','#pricelist');
	});

	$('#list button').click(function(){
		$('#pricelist').removeClass('in');
		$('#pricelist_button').addClass('collapsed done');
		$('#pricelist .form').hide();
		$('#pricelist .form.done').show();


		$('#contract').addClass('in');
		$('#contract_button span.inactive_accordion').removeClass('inactive_accordion');
		$('#contract_button').removeClass('collapsed inactive');
		$('#contract_button').attr('data-target','#contract');
	});

	$('#contr button').click(function(){
		$('#contract').removeClass('in');
		$('#contract_button').addClass('collapsed done');
		$('#contract .form').hide();
		$('#contract .form.done').show();

		$('#bank').addClass('in');
		$('#bank_button').removeClass('collapsed inactive');
		$('#bank_button span.inactive_accordion').removeClass('inactive_accordion');
		$('#bank_button').attr('data-target','#bank');
		$('.openchat').addClass('block');

	});

}
