<?php
	session_start();
	error_reporting(0);

	function getCssPercentage($min,$max,$value){
		$percentage_1 = ($max-$min)/100;
		$result = ($value-$min)/$percentage_1;
		return $result;
	}
	
	include_once('process_csv.php');
	
	if(str_replace(' ','',$_SESSION["loan_amount"])>300000){
		$_SESSION["loan_amount"] = str_replace(' ','',$_SESSION["loan_amount"]) - 50000;
	}
	$selected = $_SESSION["loan_amount"];
	
	$selection = array();
	
	foreach($datas as $key => $value){
	    if($value['load_amount'] == $selected && $value['repaid_in'] == 24){
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
	foreach($datas as $key => $value){
	    if($value['load_amount'] == $selected ){
	    	if($value['loan_instalments'] < $min){
	    		$selection['min_loan_instalments'] =number_format($value['loan_instalments'],0,',',' ');
	    		
	    	}					
	    }
	}
	$_SESSION["min_loan"] = $selection['min_loan_instalments'] ;


	$you_can_get = str_replace(' ','',$_SESSION["loan_amount"]);
	$amount_css = getCssPercentage(300000,3000000,$you_can_get);
	$monthly_css = getCssPercentage(str_replace(' ','',$_SESSION["min_loan"]),str_replace(' ','',$_SESSION["max_loan"]),str_replace(' ','',$_SESSION["loan_instalments"]));
?>
<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
				<title>Testbirds prototype</title>
        <meta name="description" content="prototype">
        <meta name="author" content="testbirds">    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/screen.css">
        <link rel="stylesheet" href="css/slider.css">
		 <link rel="stylesheet" href="css/approval.css">
        <script src="bower_components/jquery/dist/jquery.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
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

<!-- HEADER -->
      <div class="header">
        <div class="subheader">
        </div>
        <div class="sec_subheader">
        </div>
        <div class="container">
          <img class="logo" src="img/logo.png">

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
            <div class="col-xs-2 ">
              <div class="nr">
                <p>
                  6
                </p>
              </div>
              <p class="pr_title">
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
        <h1>The amount you requested cannot be approved, please try a smaller amount.</h1>
        <p>You applied for <?=number_format(str_replace(' ','',$_SESSION["loan_amount"])+50000,0,',',' ')?> Ft. The maximum amount you can apply for is <?=number_format(str_replace(' ','',$_SESSION["loan_amount"]),0,',',' ')?> Ft.</p>
        <div class="container">
          <div class="col-md-6">
			<div>
			<div class="need">
					<h2 class="n_label">Amount you need</h2>
					<h1 class="n_amount" id="amount"><?=$_SESSION["loan_amount"]?> Ft</h1>
					<input class="custom_range" type="range" name="amount" min="300000" max="3000000" step="50000" value="<?=str_replace(' ','',$_SESSION["loan_amount"])?>">
					<p class="min_amount">300.000 Ft</p>
					<p class="max_amount">3.000.000 Ft</p>
				</div>

			</div>
			<div>
				<div style="margin-top: 60px;"class="need">
					<h2 class="n_label">Monthly installment:</h2>
					<h1 class="n_amount" id="monthly_instalment"><?=$_SESSION["loan_instalments"]?> Ft</h1>
					<input class="custom_range" type="range" name="monthly" min="<?=str_replace(' ','',$_SESSION["min_loan"])?>" max="<?=str_replace(' ','',$_SESSION["max_loan"])?>" step="1" value="<?=str_replace(' ','',$_SESSION["loan_instalments"])?>" list="numbers">
					<p class="min_amount" id="min_monthly_instalment"><?=$_SESSION["min_loan"]?> Ft</p>
					<p class="max_amount" id="max_monthly_instalment"><?=$_SESSION["max_loan"]?> Ft</p>
				</div>

			</div>
			<div class="repaidin">
				<h2>Repaid in:</h2>
				<h3><span id="month_number"><?=$_SESSION["repaid_in"]?></span> month</h3>
			</div>
          </div>

          <div class="col-md-6 loaninfo">
            <h4>Total amount to be repaid</h4>
            <h1><span id="total_repaid_id"><?=$_SESSION["total_repaid"]?></span> Ft </h1>
            <div class="line"></div>
            <p>Fixed Annual Interest Rate</p>
            <h2><span id="interest_rate"><?=$_SESSION["interest_rate"]?></span>%</h2>
          </div>




          </div>
          <button onclick="window.location.href='contract.php'" class="bluebtn" type="button" name="button">Next</button>

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
	  			var css = getCssPercentage(300000,3000000,value);
	  			console.log(css);
	  			$('input[type=range][name="amount"]').css('background','-webkit-linear-gradient(left, #00aeef 0%,#00aeef '+css+'%, #e6f7fe '+css+'%, #e6f7fe '+<?=$amount_css?>+'%,#f89ca8 '+<?=$amount_css?>+'%,#f89ca8 100%)');
	  			$('input[type=range][name="amount"]').css('background','-moz-linear-gradient(left, #00aeef 0%,#00aeef '+css+'%, e6f7fe '+css+'%, #e6f7fe '+<?=$amount_css?>+'%,#f89ca8 '+<?=$amount_css?>+'%,#f89ca8 100%)');
	  			$('input[type=range][name="amount"]').css('background','linear-gradient(left, #00aeef 0%,#00aeef '+css+'%,#e6f7fe '+css+'%, #e6f7fe '+<?=$amount_css?>+'%,#f89ca8 '+<?=$amount_css?>+'%,#f89ca8 100%)');
	  			
	  			
				
	  			
	  			$.ajax({
				    type: "POST",
				    url: "ajax.php",
				    data: {
				    	mode: 'amountChange',
				    	value: value
				    },
				    success: function(msg){
				    	var obj = $.parseJSON(msg);
				    	$('input[type=range][name="monthly"]').attr('max',obj['loan_instalments'].replace(' ', ''));
				    	$('input[type=range][name="monthly"]').attr('min',obj['min_loan_instalments'].replace(' ', ''));
				    	$('#max_monthly_instalment').html(obj['loan_instalments']+' Ft');
				    	$('#min_monthly_instalment').html(obj['min_loan_instalments']+' Ft');
				    	//console.log(obj);
				    	//amount you need text módosítása
				    	$('h1#amount').html(obj['load_amount']+' Ft');
				    	//monthly installmenst text módosítása
				    	$('#monthly_instalment').html(obj['loan_instalments']+' Ft');
				    	//monthly csúszka értékének beállítása
				    	$('input[type=range][name="monthly"]').val(obj['loan_instalments'].replace(' ', ''));
				    	//monthly csúszka mozgatása
				    	var css = getCssPercentage(obj['min_loan_instalments'].replace(' ', ''),obj['loan_instalments'].replace(' ', ''),obj['loan_instalments'].replace(' ', ''));
				    	$('input[type=range][name="monthly"]').css('background','-webkit-linear-gradient(left, #00aeef 0%,#00aeef '+css+'%,##f89ca8 '+css+'%,##f89ca8 100%)');
				    	$('input[type=range][name="monthly"]').css('background','-moz-linear-gradient(left, #00aeef 0%,#00aeef '+css+'%,##f89ca8 '+css+'%,##f89ca8 100%)');
				    	$('input[type=range][name="monthly"]').css('background','linear-gradient(left, #00aeef 0%,#00aeef '+css+'%,##f89ca8 '+css+'%,##f89ca8 100%)');
				    	//monthly_discount módosítása
				    	//$('#monthly_discount').html(obj['monthly_discount']+' Ft');
				    	//$('#total_saving').html(obj['total_saving']);
	
				    	$('#total_repaid_id').html(obj['total_repaid']);
				    	$('#interest_rate').html(obj['interest_rate']);
	
				    	$('#month_number').html(24);
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
				    url: "ajax.php",
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
