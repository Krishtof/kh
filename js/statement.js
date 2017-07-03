$(function(){

	/*idclick();
	idclick2();
	billing();
	modal_close();
	next();
	file1();
	file1_2();
	file2();
	file2_2();
	lastfile();
	delete_file();*/

	//new version
	upload_id();
	//new_click();
	back_click();
	upload_new_id();

	modal_close();
	billing();
	next();
	lastfile();
	idclick2();
	idclick();
	test();
});


//leellenőrzi, hogy mind a 3 id fel lett-e töltve
function check_all_ids(){
	var front = $('#front_side .success:visible').length;
	var back = $('#back_side .success:visible').length;
	var address = $('#address_card .success:visible').length;
	if(front+back+address == 3){
		$('#after_success').show();
	}else{
		$('#after_success').hide();
	}
}

function upload_new_id(){

	$(document).on('change','.new_upload_id',function(){
		var value = $(this).val();
		$(this).closest('.new_id_upload_check').find('.successful').hide();
		$(this).closest('.new_id_upload_check').find('.success').show();
		check_all_ids();
	});

}

function back_click(){
	$('span.back').click(function(){
		$('#new_id').show();
		$('#old_id').show();
		$('#front_side ').hide();
		$('#back_side ').hide();
		$('#address_card ').hide();
		$('#old_holder .successful').hide();
		$('#new_holder .successful').hide();
		$('span.back').hide();
		$('#old_id').attr('data-status','');
		$('#new_id').attr('data-status','');
		textbackchanger();
	});
}

function new_click(){
	/*$('#old_holder').click(function(){
		$('#new_holder').find('.successful').hide();
		$(this).find('.successful').show();
	});

	$('#new_holder').click(function(){
		$('#old_holder').find('.successful').hide();
		$(this).find('.successful').show();
	});*/
}

function textchanger(){
	$('h2#which_id').hide();
	$('h2#upload_id_issued').show();
	$('p#please_select').hide();
	$('p#please_upload').show();
	$('p#please_upload_front_side').show();
	$('h2#upload_address_card').show();
}

function textbackchanger(){
	$('h2#which_id').show();
	$('h2#upload_id_issued').hide();
	$('p#please_select').show();
	$('p#please_upload').hide();
	$('p#please_upload_front_side').hide();
	$('h2#upload_address_card').hide();
}

function upload_id(){
	$('#upload_id').click(function(){
		console.log('klikk');
		$('#new_id').hide();
		$('#old_id').hide();
		$('#front_side').show();
		$('#back_side').show();
		$('#address_card').show();
		textchanger();
		//console.log($('#back_side .success:visible').length);
		if($('#back_side .success:visible').length == 0){
			$('#back_side .successful').css('display','block');
		}
		if($('#front_side .success:visible').length == 0){
			$('#front_side .successful').css('display','block');
		}
		if($('#address_card .success:visible').length == 0){
			$('#address_card .successful').css('display','block');
		}
		$('span.back').show();
	});

	$('#asdasd').click(function(){
		console.log('klikk');
		$('#new_id').hide();
		$('#old_id').hide();
		$('#front_side').show();
		$('#back_side').show();
		$('#address_card').show();
		textchanger();
		//console.log($('#back_side .success:visible').length);
		if($('#back_side .success:visible').length == 0){
			$('#back_side .successful').css('display','block');
		}
		if($('#front_side .success:visible').length == 0){
			$('#front_side .successful').css('display','block');
		}
		if($('#address_card .success:visible').length == 0){
			$('#address_card .successful').css('display','block');
		}
		$('span.back').show();
	});

		$('#dsdsds').click(function(){
		console.log('klikk');
		$('#new_id').hide();
		$('#old_id').hide();
		$('#front_side').show();
		$('#back_side').show();
		$('#address_card').show();
		textchanger();
		//console.log($('#back_side .success:visible').length);
		if($('#back_side .success:visible').length == 0){
			$('#back_side .successful').css('display','block');
		}
		if($('#front_side .success:visible').length == 0){
			$('#front_side .successful').css('display','block');
		}
		if($('#address_card .success:visible').length == 0){
			$('#address_card .successful').css('display','block');
		}
		$('span.back').show();
	});

	$('#upload_id_2').click(function(){
		console.log('klikk2');
		$('#new_id').hide();
		$('#old_id').hide();
		$('#front_side').show();
		$('#back_side').show();
		$('#address_card').show();
		textchanger();
		if($('#back_side .success:visible').length == 0){
			$('#back_side .successful').show();
		}
		if($('#front_side .success:visible').length == 0){
			$('#front_side .successful').show();
		}
		if($('#address_card .success:visible').length == 0){
			$('#address_card .successful').show();
		}
		$('span.back').show();
	});
}



/*********
 *********
 *********
 ÚJ KÓD
 *********
 *********
**********/









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
		$('#select_upload_button').attr('data-target','#expenses');
		$('#account_button').removeClass('collapsed inactive');
		$('#account_button span.inactive_accordion').removeClass('inactive_accordion');
		
		$('#account').addClass('in');
		$('#account_button').attr('data-target','#account');
		$('.openchat').addClass('block');

	});
}


function idclick(){
	$('#old_id').click(function(){
		//console.log('klikk');
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
		    $('#old_id .selected.success').css('display','none');
		    $('.new_id_upload_check .selected.success').css('display','block');
		    $('#new_id').hide();
		    $('#old_id').hide();
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
			$('#new_id .selected.success').css('display','none');
			$('.new_id_upload_check .selected.success').css('display','block');
			$('#old_id').hide();
			$('#new_id').hide();
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
