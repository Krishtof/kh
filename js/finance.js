$(function(){
	employment();
	next();
	bank_account();
	jump_next();
	dropdown();
});

function dropdown(){
	$('.dropdown-menu li').click(function(){
		var selected = $(this).find('a').html();
		$(this).closest('.dropdown').find('button.dropdown-toggle').html(selected);
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
	$('button#income_next').click(function(){
		$('#expenses_button').attr('data-target','#expenses');
		$('#expenses_button').removeClass('collapsed');
		$('#expenses').addClass('in');
		$('#expenses').css('height','auto');
		$('#income_button').addClass('done');
	});
	
	
	$('button#expense_next').click(function(){
		$('#housing_button').attr('data-target','#Housing');
		$('#housing_button').removeClass('collapsed');
		$('#Housing').addClass('in');
		$('#Housing').css('height','auto');
		$('#expenses_button').addClass('done');
	});
	
	
	$('button#housing_next').click(function(){
		$('#family_button').attr('data-target','#family');
		$('#family_button').removeClass('collapsed');
		$('#family').addClass('in');
		$('#family').css('height','auto');
		$('#housing_button').addClass('done');
	});
	
	$('button#family_next').click(function(){
		$('#bank_button').attr('data-target','#bank');
		$('#bank_button').removeClass('collapsed');
		$('#bank').addClass('in');
		$('#bank').css('height','auto');
		$('#family_button').addClass('done');
	});
}