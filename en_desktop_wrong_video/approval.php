<?php
	session_start();
	error_reporting(0);

	function getCssPercentage($min,$max,$value){
		$percentage_1 = ($max-$min)/100;
		$result = ($value-$min)/$percentage_1;
		return $result;
	}

	$amount_css = getCssPercentage(300000,3000000,str_replace(' ','',$_SESSION["loan_amount"]));
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
				background: -moz-linear-gradient(left, #00aeef 0%, #00aeef <?=$amount_css?>%, #99fba6 <?=$amount_css?>%, #99fba6 100%) ; /* FF3.6-15 */
				background: -webkit-linear-gradient(left, #00aeef 0%,#00aeef <?=$amount_css?>%,#99fba6 <?=$amount_css?>%,#99fba6 100%) ; /* Chrome10-25,Safari5.1-6 */
				background: linear-gradient(to right, #00aeef 0%,#00aeef <?=$amount_css?>%,#99fba6 <?=$amount_css?>%,#99fba6 100%) ; /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00aeef', endColorstr='#e6f7fe',GradientType=1 ) ; /* IE6-9 */
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
			<!-- HEADER -->
			<div class="header">
				<div class="subheader">
				</div>
				<div class="sec_subheader">
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
			                basic information
			              </p>
			            </div>
			            <div class="col-xs-2">
			              <div class="nr">
			                <p>
			                  2
			                </p>
			              </div>
			              <p class="pr_title ">
			                about you
			              </p>
			            </div>
			            <div class="col-xs-2">
			              <div class="nr">
			                <p>
			                  3
			                </p>
			              </div>
			              <p class="pr_title">
			                identification
			              </p>
			            </div>
			            <div class="col-xs-2 active">
			              <div class="nr">
			                <p>
			                  4
			                </p>
			              </div>
			              <p class="pr_title">
			                approval
			              </p>
			            </div>
			            <div class="col-xs-2">
			              <div class="nr">
			                <p>
			                  5
			                </p>
			              </div>
			              <p class="pr_title">
			                contract signiture
			              </p>
			            </div>
			            <div class="col-xs-2 last">
										<img src="../img/finish.png" />
			              <p class="pr_title ">
			                finish
			              </p>
			            </div>



			          </div>
			          <h2 class="title">approval</h2>
			        </div>
			      </div>


			<!-- Loan I apply for -->
			    <div class="container">

			      <div class="loanholder approve">
							<h2>the loan you requested is approved!</h2>
			      </div>

			    </div>

<!-- form -->

    <div class="container">
      <div class="form nopadding approval">
				<div class="good approve">Only the signing of the contract is left</div>

        <h1>The loan you requested is approved, and you can apply for an even higher amount if you want</h1>
        <p>The loan amont you applied for: <?=$_SESSION["loan_amount"]?> Ft. The maximum amount you can request: 3 000 000 forint. </p>
        <div class="container">
          <div class="col-md-6">
			<div>
			<div class="need">
					<h2 class="n_label">amount you need:</h2>
					<h1 class="n_amount" id="amount"><?=$_SESSION["loan_amount"]?> Ft</h1>
					<input class="custom_range" type="range" name="amount" min="300000" max="3000000" step="50000" value="<?=str_replace(' ','',$_SESSION["loan_amount"])?>">
					<p class="min_amount">300 000 Ft</p>
					<p class="max_amount">3 000 000 Ft</p>
				</div>

			</div>
			<div>
				<div style="margin-top: 60px;"class="need">
					<h2 class="n_label">monthly installment you want:</h2>
					<h1 class="n_amount" id="monthly_instalment"><?=$_SESSION["loan_instalments"]?> Ft</h1>
					<input class="custom_range" type="range" name="monthly" min="<?=str_replace(' ','',$_SESSION["min_loan"])?>" max="<?=str_replace(' ','',$_SESSION["max_loan"])?>" step="1" value="<?=str_replace(' ','',$_SESSION["loan_instalments"])?>" list="numbers">
					<p class="min_amount" id="min_monthly_instalment"><?=$_SESSION["min_loan"]?> Ft</p>
					<p class="max_amount" id="max_monthly_instalment"><?=$_SESSION["max_loan"]?> Ft</p>
				</div>

			</div>
			<div class="repaidin">
				<h2>repad in:</h2>
				<h3><span id="month_number"><?=$_SESSION["repaid_in"]?></span> months</h3>
			</div>
          </div>

          <div class="col-md-6 loaninfo">
            <h4>total repayment:</h4>
            <h1><span id="total_repaid_id"><?=$_SESSION["total_repaid"]?></span> Ft </h1>
            <div class="line"></div>
            <p>interest rate:</p>
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


					<button  onclick="window.location.href='contract.php'" class="bluebtn next" type="button" name="button">
						<span>Next</span>
						<img class="arrow" src="../img/arr_right.png"/>
					</button>

        </div>








    </body>

<!-- FOOTER-->


    <footer>
    </footer>
    <script>
  		$(function(){
  			changeRange();
  			changeRange2();
  		});

  		function changeRange(){
  			$('input[type="range"][name="amount"]').change(function(){
  				var value = $(this).val();
  				var month = $('#month_number').html();
  				$.ajax({
				    type: "POST",
				    url: "ajax.php",
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

				    	//amount you need text módosítása
				    	$('h1#amount').html(obj['load_amount']+' Ft');

				    	var new_value = obj['load_amount'].replace(' ', '');
				    	var new_value = new_value.replace(' ', '');

				    	$('input[type=range][name="amount"]').val(new_value);

				    	var css = getCssPercentage(300000,3000000,new_value);

						$('input[type=range][name="amount"]').css('background','-webkit-linear-gradient(left, #00aeef 0%,#00aeef '+css+'%,#99fba6 '+css+'%,#99fba6 100%)');
						$('input[type=range][name="amount"]').css('background','-moz-linear-gradient(left, #00aeef 0%,#00aeef '+css+'%,#99fba6 '+css+'%,#99fba6 100%)');
						$('input[type=range][name="amount"]').css('background','linear-gradient(left, #00aeef 0%,#00aeef '+css+'%,#99fba6 '+css+'%,#99fba6 100%)');

				    	//monthly installmenst text módosítása
				    	$('#monthly_instalment').html(obj['loan_instalments']+' Ft');
				    	//monthly csúszka értékének beállítása
						$('input[type=range][name="monthly"]').val(obj['loan_instalments'].replace(' ', ''));
						//monthly csúszka mozgatása
						var css = getCssPercentage(obj['min_loan_instalments'].replace(' ', ''),obj['max_loan_instalments'].replace(' ', ''),obj['loan_instalments'].replace(' ', ''));

						$('input[type=range][name="monthly"]').css('background','-webkit-linear-gradient(left, #00aeef 0%,#00aeef '+css+'%,#e6f7fe '+css+'%,#e6f7fe 100%)');
						$('input[type=range][name="monthly"]').css('background','-moz-linear-gradient(left, #00aeef 0%,#00aeef '+css+'%,#e6f7fe '+css+'%,#e6f7fe 100%)');
						$('input[type=range][name="monthly"]').css('background','linear-gradient(left, #00aeef 0%,#00aeef '+css+'%,#e6f7fe '+css+'%,#e6f7fe 100%)');
						//monthly_discount módosítása
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
