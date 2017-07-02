$(function(){
	employment();
	next();
	bank_account();
	jump_next();
	dropdown();
	a_prevent();
	income_other();
});

function income_other(){
	$('input#income_other').change(function(){
		var value = $(this).is(':checked');
		if(value === true){
			$('input[name="other_income"]').removeClass('hidden-xs hidden-sm hidden-md hidden-lg');
		}else{
			$('input[name="other_income"]').addClass('hidden-xs hidden-sm hidden-md hidden-lg');
		}
	});
}

function dropdown(){
	$('.dropdown-menu li').click(function(){
		var selected = $(this).find('a').html();
		$(this).closest('.dropdown').find('button.dropdown-toggle').html(selected+'<span class="caret"></span>');
	});
}

function a_prevent(){
	$('ul.dropdown-menu li a').click(function(e){
		e.preventDefault();
	});
}

function bank_account(){
	$('#bank input.shorter.bankaccount[name="firstname"]:first').keyup(function(){
		if($(this).val().length >= 3){
			$('#bank .nokh').show();
		}else{
			$('#bank .nokh').hide();
		}
	});
}

function jump_next(){
	$('#bank input.shorter.bankaccount[name="firstname"]').keyup(function(){
		if ($(this).val().length == 8) {
		  var $next = $(this).next('input.shorter.bankaccount').focus();
		  /*if ($next.length)
		      $(this).next('.inputs').focus();
		  else
		      $(this).blur();
			}
		}*/
		}
	});
}

function employment(){
	$('input#employment').change(function(){
		var value = $(this).is(':checked');
		if(value == true){
			$('.from').show();
		}else{
			$('.from').hide();
		}
	});
}

function next(){
	$('button#new_next').click(function(){
		$('#income_button').attr('data-target','#income');
		$('#income_button').removeClass('collapsed');
		$('#income_button span.inactive_accordion').removeClass('inactive_accordion');
		$('#income').addClass('in');
		$('#income').css('height','auto');
		$('#new_button').addClass('done');
	});


	$('button#income_next').click(function(){
		$('#expenses_button').attr('data-target','#expenses');
		$('#expenses_button').removeClass('collapsed');
		$('#expenses_button span.inactive_accordion').removeClass('inactive_accordion');
		$('#expenses').addClass('in');
		$('#expenses').css('height','auto');
		$('#income_button').addClass('done collapsed');
	});


	$('button#expense_next').click(function(){
		$('#housing_button').attr('data-target','#Housing');
		$('#housing_button').removeClass('collapsed');
		$('#housing_button span.inactive_accordion').removeClass('inactive_accordion');
		$('#Housing').addClass('in');
		$('#Housing').css('height','auto');
		$('#expenses_button').addClass('done');
	});


	$('button#housing_next').click(function(){
		$('#family_button').attr('data-target','#family');
		$('#family_button').removeClass('collapsed');
		$('#family_button span.inactive_accordion').removeClass('inactive_accordion');
		$('#family').addClass('in');
		$('#family').css('height','auto');
		$('#housing_button').addClass('done');
	});

	$('button#family_next').click(function(){
		$('#bank_button').attr('data-target','#bank');
		$('#bank_button').removeClass('collapsed');
		$('#bank_button span.inactive_accordion').removeClass('inactive_accordion');

		$('#bank').addClass('in');


		$('#bank').css('height','auto');
		$('#family_button').addClass('done');

	});
}
