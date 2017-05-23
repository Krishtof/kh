$(function(){
	employment();
	next();
});

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
	});
	
	
	$('button#expense_next').click(function(){
		$('#housing_button').attr('data-target','#Housing');
		$('#housing_button').removeClass('collapsed');
		$('#Housing').addClass('in');
	});
	
	
	$('button#housing_next').click(function(){
		$('#family_button').attr('data-target','#family');
		$('#family_button').removeClass('collapsed');
		$('#family').addClass('in');
	});
	
	$('button#family_next').click(function(){
		$('#bank_button').attr('data-target','#bank');
		$('#bank_button').removeClass('collapsed');
		$('#bank').addClass('in');
	});
}