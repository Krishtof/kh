$(function(){
	idclick();
	idclick2();
	billing();
	modal_close();
	next();
	file1();
	file2();
});

function file1(){
	$(document).on('change','#file_1',function(){
		$('#old_id .selected.error').css('display','none');
		$('#old_id .selected.successful').css('display','none');
		$('#old_id .selected.success').css('display','block');
		$('#new_id').hide();
		$('#success_message').html('Your data was read successfully, including permanent address.');
	});
}

function file2(){
	$(document).on('change','#file_2',function(){
		$('#new_id .selected.error').css('display','none');
		$('#new_id .selected.successful').css('display','none');
		$('#new_id .selected.success').css('display','block');
		$('#old_id').hide();
		$('#success_message2').html('Your data was read successfully, including permanent address.');
	});
}

function modal_close(){
	$('#modal').click(function(){
		$('#data_button').addClass('collapsed done');
		$('#data').removeClass('in');
		$('#select_upload_button').removeClass('collapsed');
		$('#expenses').addClass('in');
		$('#select_upload_button').attr('data-target','#expenses');
	});
}

function next(){
	$('#select_upload_next_button').click(function(){
		$('#select_upload_button').addClass('collapsed done');
		$('#expenses').removeClass('in');
		
		$('#account_button').removeClass('collapsed');
		$('#account').addClass('in');
		$('#account_button').attr('data-target','#account');
	});
}

function idclick(){
	$('#old_id').click(function(){
		var status = $(this).attr('data-status');
		if(status == ''){
			$(this).find('.selected.successful').show();
			$(this).attr('data-status','first');
		}
		
		if(status == 'first'){
			$(this).attr('data-status','second');
		}
		
		if(status == 'second'){
			$(this).attr('data-status','third');
		}
	});
	
	$('#modal_button').click(function(){
		var status = $('#old_id').attr('data-status');
		if(status == 'second'){
			$('#old_id .selected.error').css('display','block');
			$('#old_id .selected.successful').css('display','none');
			//$('#old_id').attr('status','second');
		}
		if(status == 'third'){
			$('#old_id .selected.error').css('display','none');
			$('#old_id .selected.successful').css('display','none');
			$('#old_id .selected.success').css('display','block');
			$('#new_id').hide();
			$('#success_message').html('Your data was read successfully, including permanent address.');
		}
	});
}

function idclick2(){
	$('#new_id').click(function(){
		var status = $(this).attr('data-status');
		if(status == ''){
			$(this).find('.selected.successful').show();
			$(this).attr('data-status','first');
		}
		
		if(status == 'first'){
			$(this).attr('data-status','second');
		}
		
		if(status == 'second'){
			$(this).attr('data-status','third');
		}
	});
	
	$('#modal_button').click(function(){
		var status = $('#new_id').attr('data-status');
		if(status == 'second'){
			$('#new_id .selected.error').css('display','block');
			$('#new_id .selected.successful').css('display','none');
		}
		if(status == 'third'){
			$('#new_id .selected.error').css('display','none');
			$('#new_id .selected.successful').css('display','none');
			$('#new_id .selected.success').css('display','block');
			$('#old_id').hide();
			$('#success_message2').html('Your data was read successfully, including permanent address.');
		}
	});
}

function billing(){
	$('input#employment').click(function(){
		var value = $(this).is(':checked');
		if(value == true){
			$('.mailing_address .city').show();
			$('.mailing_address .street').show();
		}else{
			$('.mailing_address .city').hide();
			$('.mailing_address .street').hide();
		}
	});
}