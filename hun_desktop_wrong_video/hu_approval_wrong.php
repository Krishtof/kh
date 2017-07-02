<?php
	session_start();
	error_reporting(0);
	function getCssPercentage($min,$max,$value){
		$percentage_1 = ($max-$min)/100;
		$result = ($value-$min)/$percentage_1;
		return $result;
	}
	//keressük ki a választottnál kisebb számot
	function getLower($datas,$amount){
		$val = 0;
		foreach($datas as $key => $value){
			if($value['load_amount'] > $val && $value['load_amount'] < $amount){
				$val = $value['load_amount'];
			}
		}
		return $val;
	}
	include_once('../process3_csv.php');
	//echo '<pre>';
	//print_r($datas);
	if(str_replace(' ','',$_SESSION["loan_amount"]) < 1000000 ){
		$_SESSION["loan_amount"] = 2000000;
	}

	$max = str_replace(' ','',$_SESSION["loan_amount"]);
	/*if(str_replace(' ','',$_SESSION["loan_amount"])>300000){
		$_SESSION["loan_amount"] = str_replace(' ','',$_SESSION["loan_amount"]) - 50000;
	}*/


	$selected = getLower($datas,str_replace(' ','',$_SESSION["loan_amount"]));


	$selection = array();
	foreach($datas as $key => $value){
	    if($value['load_amount'] == $selected && $value['repaid_in'] == $_SESSION['repaid_in']){
	    	$selection['load_amount'] = number_format($value['load_amount'],0,',',' ');
	    	$selection['loan_instalments'] = number_format($value['loan_instalments'],0,',',' ');
	    	$selection['repaid_in'] = $value['repaid_in'];
	    	$selection['total_repaid'] = number_format($value['total_repaid'],0,',',' ');
	    	$selection['interest_rate'] = $value['interest_rate'];
	    	$selection['total_saving'] = number_format($value['total_saving'],0,',',' ');
	    	$selection['monthly_discount'] = number_format($value['monthly_discount'],0,',',' ');
	    	$_SESSION["loan_amount"] = $selection['load_amount'];
	    	$_SESSION["loan_instalments"] = $selection['loan_instalments'];
	    	$_SESSION["repaid_in"] = $selection['repaid_in'];
	    	$_SESSION["max_loan"] = $selection['loan_instalments'];
	    	$_SESSION["interest_rate"] = $selection['interest_rate'];
	    	$_SESSION["total_repaid"] = $selection['total_repaid'];
	    }
	}
	$min = 999999999;
	$max_s = 0;
	foreach($datas as $key => $value){
	    if($value['load_amount'] == $selected ){
	    	if($value['loan_instalments'] < $min){
	    		$selection['min_loan_instalments'] =number_format($value['loan_instalments'],0,',',' ');
	    	}
	    }
	}
	foreach($datas as $key => $value){
	    if($value['load_amount'] == str_replace(' ','',$selection['load_amount'])){
	    	if($value['loan_instalments'] > $max_s){
	    		$max_s = $value['loan_instalments'];
	    		$selection['max_loan_instalments'] = number_format($value['loan_instalments'],0,',',' ');
	    	}
	    }
	}
	$_SESSION["min_loan"] = $selection['min_loan_instalments'];
	$_SESSION["max_loan"] = $selection['max_loan_instalments'];

	$you_can_get = str_replace(' ','',$selected);
	$amount_css = getCssPercentage(1000000,$max,$you_can_get);
	$monthly_css = getCssPercentage(str_replace(' ','',$_SESSION["min_loan"]),str_replace(' ','',$_SESSION["max_loan"]),str_replace(' ','',$_SESSION["loan_instalments"]));
?>
<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>
			<meta charset="utf-8">
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Testbirds prototype</title>
			<meta name="description" content="prototype">
			<meta name="author" content="testbirds">    <meta name="viewport" content="width=device-width, initial-scale=1">
			<link href="http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700" rel="stylesheet" type="text/css">
			<link rel="shortcut icon" href="favicon.ico">
			<link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
			<link rel="stylesheet" href="../css/screen.css">
			<link rel="stylesheet" href="../css/slider.css">
			<link rel="stylesheet" href="../css/font-awesome.css">
			<script src="../bower_components/jquery/dist/jquery.js"></script>
			<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>


        <link rel="stylesheet" href="../css/slider.css">
				<link rel="stylesheet" href="../css/approval.css">

				<style>
        	input[name="amount"]{
	        	background: #99fba6; /* Old browsers */
				background: -moz-linear-gradient(left, #00aeef 0%, #00aeef <?=$amount_css?>%, #f89ca8 <?=$amount_css?>%, #f89ca8 100%) ; /* FF3.6-15 */
				background: -webkit-linear-gradient(left, #00aeef 0%,#00aeef <?=$amount_css?>%,#99fba6 <?=$amount_css?>%,#f89ca8 100%) ; /* Chrome10-25,Safari5.1-6 */
				background: linear-gradient(to right, #00aeef 0%,#00aeef <?=$amount_css?>%,#f89ca8 <?=$amount_css?>%,#f89ca8 100%) ; /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00aeef', endColorstr='#f89ca8',GradientType=1 ) ; /* IE6-9 */
			}
			input[name="monthly"]{
	        	background: #99fba6; /* Old browsers */
				background: -moz-linear-gradient(left, #00aeef 0%, #00aeef <?=$monthly_css?>%, #e6f7fe <?=$monthly_css?>%, #e6f7fe 100%) ; /* FF3.6-15 */
				background: -webkit-linear-gradient(left, #00aeef 0%,#00aeef <?=$monthly_css?>%,#e6f7fe <?=$monthly_css?>%,#e6f7fe 100%) ; /* Chrome10-25,Safari5.1-6 */
				background: linear-gradient(to right, #00aeef 0%,#00aeef <?=$monthly_css?>%,#e6f7fe <?=$monthly_css?>%,#e6f7fe 100%) ; /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00aeef', endColorstr='#e6f7fe',GradientType=1 ) ; /* IE6-9 */
			}
        </style>
    </head>

<!-- BODY-->



    <body>
			<div class="chat">
				<i class="fa fa-comments" aria-hidden="true"></i>
			</div>
			<div class="openchat">
				<div class="header">
					<div class="green"></div>
					<h2>Customer service</h2>
					<i class="fa fa-times closechat" aria-hidden="true"></i>
				</div>
				<div class="cbody">
					<h2>Welcome! How can we help you?</h2>
				</div>
				<div class="type">
					<input class="chatwithme" placeholder="Ide írjon" />
				</div>
				<script>
				$('.chat').on('click',function(){
					$('.openchat').addClass('block');
				});
				$('.closechat').on('click',function(){
					$('.openchat').addClass('hide');
				});
				$('.closechat').on('click',function(){
					$('.openchat').removeClass('block');
				});
				</script>
			</div>
<!-- HEADER -->
<div class="header">
	<div class="subheader">
	</div>
	<div class="sec_subheader">
		<div class="container">
			<button onclick="window.location.href='index.php'" class="bluebtn headerbtn" type="button" name="button">Start again</button>
			<button class="bluebtn headerbtn" type="button" name="button">Save</button>
			<button class="bluebtn headerbtn" type="button" name="button">Call back</button>

		</div>

	</div>
	<div class="container">
		<img class="logo" src="../img/logo.png">

	</div>
</div>
<!-- progress bar -->

      <div class="container-fluid">
        <div class="container progress_bar">
          <div class="line">
            <div class="line2">

            </div>

          </div>
          <div class="row">
            <div class="col-xs-2 ">
              <div class="nr">
                <p>
                  1
                </p>
              </div>
              <p class="pr_title">
                Basic information
              </p>
            </div>
            <div class="col-xs-2 ">
              <div class="nr">
                <p>
                  2
                </p>
              </div>
              <p class="pr_title ">
                Financial evaluation
              </p>
            </div>
            <div class="col-xs-2 ">
              <div class="nr">
                <p>
                  3
                </p>
              </div>
              <p class="pr_title">
                Statements
              </p>
            </div>
            <div class="col-xs-2 active">
              <div class="nr">
                <p>
                  4
                </p>
              </div>
              <p class="pr_title">
                Approval
              </p>
            </div>
            <div class="col-xs-2 ">
              <div class="nr">
                <p>
                  5
                </p>
              </div>
              <p class="pr_title">
                Contract
              </p>
            </div>
						<div class="col-xs-2 last">
							<img src="../img/finish.png" />
              <p class="pr_title ">
                Finish
              </p>
            </div>



          </div>
          <h2 class="title">Finish</h2>
        </div>
      </div>


<!-- Loan I apply for -->
    <div class="container">

      <div class="loanholder">
        <h2>Loan I apply for</h2>
        <div class="amount">
          <p>
            Loan amount
          </p>
         <h1><?=$_SESSION["loan_amount"]?> Ft</h1>
        </div>
        <div class="info">

          <div class="instalments">
            <h2>Instalments:</h2>
            <p><?=$_SESSION["loan_instalments"]?> Ft</p>
          </div>
          <div class="instalments">
            <h2>Repaid in::</h2>
           <p><?=$_SESSION["repaid_in"]?> months</p>
          </div>
        </div>
      </div>

    </div>

<!-- form -->

    <div class="container">
      <div class="form nopadding approval">
				<div class="good approve">Only the sign of the contract is left</div>

        <h1>The amount requested can not be accepted, please try a smaller amount.</h1>
        <p>The loan amont you applied for is <?=number_format($max,0,',',' ')?> Ft. he maximum amount you can request is <?=number_format(str_replace(' ','',$_SESSION["loan_amount"]),0,',',' ')?> Ft.</p>
        <div class="container">
          <div class="col-md-6">
			<div>
			<div class="need">
					<h2 class="n_label">loan I apply for</h2>
					<h1 class="n_amount" id="amount"><?=$_SESSION["loan_amount"]?> Ft</h1>
					<input class="custom_range" type="range" name="amount" min="1000000" max="<?=$max?>" step="50000" value="<?=str_replace(' ','',$_SESSION["loan_amount"])?>">
					<p class="min_amount">1 000 000 Ft</p>
					<p class="max_amount"><?=number_format($max,0,',',' ')?> Ft</p>
				</div>

			</div>
			<div>
				<div style="margin-top: 60px;"class="need">
					<h2 class="n_label">monthly installment:</h2>
					<h1 class="n_amount" id="monthly_instalment"><?=$_SESSION["loan_instalments"]?> Ft</h1>
					<input class="custom_range" type="range" name="monthly" style="background: #99fba6; /* Old browsers */
				background: -moz-linear-gradient(left, #00aeef 0%, #00aeef <?=$monthly_css?>%, #e6f7fe <?=$monthly_css?>%, #e6f7fe 100%) ; /* FF3.6-15 */
				background: -webkit-linear-gradient(left, #00aeef 0%,#00aeef <?=$monthly_css?>%,#e6f7fe <?=$monthly_css?>%,#e6f7fe 100%) ; /* Chrome10-25,Safari5.1-6 */
				background: linear-gradient(to right, #00aeef 0%,#00aeef <?=$monthly_css?>%,#e6f7fe <?=$monthly_css?>%,#e6f7fe 100%) ; /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00aeef', endColorstr='#e6f7fe',GradientType=1 ) ; " min="<?=str_replace(' ','',$_SESSION["min_loan"])?>" max="<?=str_replace(' ','',$_SESSION["max_loan"])?>" step="1" value="<?=str_replace(' ','',$_SESSION["loan_instalments"])?>" list="numbers">
					<p class="min_amount" id="min_monthly_instalment"><?=$_SESSION["min_loan"]?> Ft</p>
					<p class="max_amount" id="max_monthly_instalment"><?=$_SESSION["max_loan"]?> Ft</p>
				</div>

			</div>
			<div class="repaidin">
				<h2>repaid in:</h2>
				<h3><span id="month_number"><?=$_SESSION["repaid_in"]?></span> months</h3>
			</div>
          </div>

          <div class="col-md-6 loaninfo">
            <h4>total repayment:</h4>
            <h1><span id="total_repaid_id"><?=$_SESSION["total_repaid"]?></span> Ft </h1>
            <div class="line"></div>
            <p>interest rate</p>
            <h2><span id="interest_rate"><?=$_SESSION["interest_rate"]?></span>%</h2>
						<p>
							APR:
						</p>
						<h2>13,99%</h2>
						<p>
							management fee:
						</p>
						<h2>0 Ft</h2>
						<p>
							day of first installment:
						</p>
						<h2>2017. 07.15.</h2>
          </div>




          </div>
          <button onclick="window.location.href='hu_contract.php'" class="bluebtn next" type="button" name="button">next</button>

        </div>








    </body>

<!-- FOOTER-->


    <footer>
    </footer>
    <script>
  		$(function(){
  			changeRange();
  			changeRange2();
  			noIncrease();
  		});
  		function noIncrease(){
	  		$('input[name="amount"]').change(function(event){
	  			event.stopPropagation();
		  		if($(this).val() > <?=str_replace(' ','',$_SESSION["loan_amount"])?>){
			  		$(this).val(<?=str_replace(' ','',$_SESSION["loan_amount"])?>);
		  		}
	  		});
  		}
  		function changeRange(){
  			$('input[type="range"][name="amount"]').change(function(){
  				if($(this).val() > <?=str_replace(' ','',$_SESSION["loan_amount"])?>){
  					$(this).val(<?=str_replace(' ','',$_SESSION["loan_amount"])?>);
  				}
	  			var value = $(this).val();
	  			var month = $('#month_number').html();
	  			$.ajax({
				    type: "POST",
				    url: "../ajax.php",
				    data: {
				    	mode: 'amountChange',
				    	month : month,
				    	value: value
				    },
				    success: function(msg){
				    	var obj = $.parseJSON(msg);
				    	$('input[type=range][name="monthly"]').attr('max',obj['max_loan_instalments'].replace(' ', ''));
				    	$('input[type=range][name="monthly"]').attr('min',obj['min_loan_instalments'].replace(' ', ''));
				    	$('#max_monthly_instalment').html(obj['max_loan_instalments']+' Ft');
				    	$('#min_monthly_instalment').html(obj['min_loan_instalments']+' Ft');
				    	//console.log(obj);
				    	//amount you need text módosítása
				    	$('h1#amount').html(obj['load_amount']+' Ft');
				    	var new_value = obj['load_amount'].replace(' ', '');
				    	var new_value = new_value.replace(' ', '');
				    	if(new_value > <?=str_replace(' ','',$_SESSION["loan_amount"])?>){
					    	new_value = <?=str_replace(' ','',$_SESSION["loan_amount"])?>;
				    	}
				    	$('input[type=range][name="amount"]').val(new_value);
				    	var css = getCssPercentage(1000000,<?=$max?>,new_value);
						$('input[type=range][name="amount"]').css('background','-webkit-linear-gradient(left, #00aeef 0%,#00aeef '+css+'%, #e6f7fe '+css+'%, #e6f7fe '+<?=$amount_css?>+'%,#f89ca8 '+<?=$amount_css?>+'%,#f89ca8 100%)');
						$('input[type=range][name="amount"]').css('background','-moz-linear-gradient(left, #00aeef 0%,#00aeef '+css+'%, e6f7fe '+css+'%, #e6f7fe '+<?=$amount_css?>+'%,#f89ca8 '+<?=$amount_css?>+'%,#f89ca8 100%)');
						$('input[type=range][name="amount"]').css('background','linear-gradient(left, #00aeef 0%,#00aeef '+css+'%,#e6f7fe '+css+'%, #e6f7fe '+<?=$amount_css?>+'%,#f89ca8 '+<?=$amount_css?>+'%,#f89ca8 100%)');
				    	//monthly installmenst text módosítása
				    	$('#monthly_instalment').html(obj['loan_instalments']+' Ft');
				    	//monthly csúszka értékének beállítása
				    	$('input[type=range][name="monthly"]').val(obj['loan_instalments'].replace(' ', ''));
				    	//monthly csúszka mozgatása
				    	var css = getCssPercentage(obj['min_loan_instalments'].replace(' ', ''),obj['max_loan_instalments'].replace(' ', ''),obj['loan_instalments'].replace(' ', ''));
				    	$('input[type=range][name="monthly"]').css('background','-webkit-linear-gradient(left, #00aeef 0%,#00aeef '+css+'%,##f89ca8 '+css+'%,##f89ca8 100%)');
				    	$('input[type=range][name="monthly"]').css('background','-moz-linear-gradient(left, #00aeef 0%,#00aeef '+css+'%,##f89ca8 '+css+'%,##f89ca8 100%)');
				    	$('input[type=range][name="monthly"]').css('background','linear-gradient(left, #00aeef 0%,#00aeef '+css+'%,##f89ca8 '+css+'%,##f89ca8 100%)');
				    	//monthly_discount módosítása
				    	//$('#monthly_discount').html(obj['monthly_discount']+' Ft');
				    	//$('#total_saving').html(obj['total_saving']);
				    	$('#total_repaid_id').html(obj['total_repaid']);
				    	$('#interest_rate').html(obj['interest_rate']);
				    	$('#month_number').html(month);
				    }
				});
  			});
  		}
  		function getCssPercentage(min,max,value){
	  		var percentage_1 = (max-min)/100;
	  		var result = (value-min)/percentage_1;
	  		return result;
  		}
  		function getCssPercentage2(min,max,value){
	  		var percentage_1 = (max-min)/100;
	  		var result = (value-min)/percentage_1;
	  		return result;
  		}
  		function changeRange2(){
  			$('input[type="range"][name="monthly"]').change(function(){
  				var value = $(this).val();
  				var amount = $('input[type="range"][name="amount"]').val();
  				$.ajax({
				    type: "POST",
				    url: "../ajax.php",
				    data: {
				    	mode: 'monhtlyChange',
				    	monthly: value,
				    	amount : amount
				    },
				    success: function(msg){
				    	var obj = $.parseJSON(msg);
				    	var max_monthly = $('input[type=range][name="monthly"]').attr('max');
				    	var min_monthly = $('input[type=range][name="monthly"]').attr('min');
				    	//input val módosítás
				    	$('input[type="range"][name="monthly"]').val(obj['loan_instalments'].replace(' ', ''));
				    	//monthly text módosítás
				    	$('#monthly_instalment').html(obj['loan_instalments']+' Ft');
				    	//monthly_discount módosítása
						//$('#monthly_discount').html(obj['monthly_discount']+' Ft');
						//$('#total_saving').html(obj['total_saving']);
						//css
						var css = getCssPercentage2(min_monthly, max_monthly,obj['loan_instalments'].replace(' ', ''));
						$('input[type=range][name="monthly"]').css('background','-webkit-linear-gradient(left, #00aeef 0%,#00aeef '+css+'%,#e6f7fe '+css+'%,#e6f7fe 100%)');
						$('input[type=range][name="monthly"]').css('background','-moz-linear-gradient(left, #00aeef 0%,#00aeef '+css+'%,#e6f7fe '+css+'%,#e6f7fe 100%)');
						$('input[type=range][name="monthly"]').css('background','linear-gradient(left, #00aeef 0%,#00aeef '+css+'%,#e6f7fe '+css+'%,#e6f7fe 100%)');
						$('#total_repaid_id').html(obj['total_repaid']);
						$('#interest_rate').html(obj['interest_rate']);
						//month edit
						$('#month_number').html(obj['repaid_in']);
				    }
				});
  			});
  		}
  	</script>
