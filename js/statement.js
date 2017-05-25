$(function(){
	
	idclick();
	idclick2();
	billing();
	modal_close();
	next();
	file1();
	file1_2();
	file2();
	file2_2();
	lastfile();
	delete_file();
});

function close(){
	$('#which_id').hide();
	$('#please_select').hide();
	$('#after_success').show();
	$('#success_message').show();
	$('.mailing_address').show();
}

function lastfile(){
	$(document).on('change','#last_file',function(){
		var value = $(this).val();
		$('#last_file_name').html(value);
		$('.uploadbox').hide();
		$('.uploadbox.success').show();
	});
}

function delete_file(){
	$('#delete_file').click(function(){
		$('.uploadbox.success').hide();
		$('.uploadbox:first').show();
		
	})
}

function file1(){
	$(document).on('change','#file_1',function(){
		$('#old_id .selected.error').css('display','none');
		$('#old_id .selected.successful').css('display','none');
		$('#old_id .selected.success').css('display','block');
		$('#new_id').hide();
		$('#ip').hide();
		//html('Your data was read successfully, including permanent address.');
		close();
	});
}

function file1_2(){
	$(document).on('change','#file_1_2',function(){
		$('#old_id .selected.error').css('display','none');
		$('#old_id .selected.successful').css('display','none');
		$('#old_id .selected.success').css('display','block');
		$('#new_id').hide();
		$('#ip').hide();
		close();
	});
}

function file2(){
	$(document).on('change','#file_2',function(){
		$('#new_id .selected.error').css('display','none');
		$('#new_id .selected.successful').css('display','none');
		$('#new_id .selected.success').css('display','block');
		$('#old_id').hide();
		$('#ip2').hide();
		close();
	});
}

function file2_2(){
	$(document).on('change','#file_2_2',function(){
		$('#new_id .selected.error').css('display','none');
		$('#new_id .selected.successful').css('display','none');
		$('#new_id .selected.success').css('display','block');
		$('#old_id').hide();
		$('#ip2').hide();
		close();
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
		$('#new_holder .selected').hide();
		$('#new_id').attr('data-status','');
		$('#new_holder').removeClass('active');
		$('#old_holder').addClass('active');
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
		    $('#ip').hide();
		    close();
		}
	});
}

function idclick2(){
	$('#new_id').click(function(){
		$('#old_holder .selected').hide();
		$('#old_id').attr('data-status','');
		$('#old_holder').removeClass('active');
		$('#new_holder').addClass('active');
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
			$('#ip2').hide();
			close();
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