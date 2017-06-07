<?php
	session_start();
	error_reporting(0);
	$_SESSION["loan_amount"] = number_format(800000,0,',',' ');
	$_SESSION["loan_instalments"] = number_format(38406,0,',',' ');
	$_SESSION["repaid_in"] = 24;
	$_SESSION["interest_rate"] = 13.99;
	$_SESSION["total_repaid"] = '921 756';
	$_SESSION["max_loan"] = '38 406';
	$_SESSION["min_loan"] = '14 987';

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

        <script src="bower_components/jquery/dist/jquery.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
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

<div class="container landing">
	<h1 class="impresto"> </h1>
	<p style="line-height: 22px;	">
		Unrestricted loan from K&H now fully online. Start and finish your application here and you will receive money on your current account in 15 minutes after contract signature.
<div class="container qualify">
	<div class="col-md-6 qualify">
		<h3>Do I qualify? Yes, if </h3>
		<ul>
			<li>You are older than 18</li>
			<li>You receive regular salary from employment to your bank account</li>
			<li>You have access to internet banking of this account</li>
			<li>This account is at one of these
				<a href="#" class="banklist" data-toggle="tooltip" title="Erste Bank,CIB Bank, K&H Bank, MKB Bank, OTP Bank, Raiffeisen Bank ">supported banks </a>
			</li>
		</ul>

		<h3>What sould you have ready?</h3>
		<ul>
			<li>Your valid ID</li>
			<li>Your cell phone</li>
			<li>E-mail address</li>
		</ul>


	</div>
	<div class="col-md-6 calculator">
		<div>
			<div class="need">
				<h2 class="n_label">Amount you need</h2>
				<h1 class="n_amount" id="amount">800 000 Ft</h1>
				<input class="custom_range" type="range" name="amount" min="300000" max="3000000" step="50000" value="800000">
				<p class="min_amount">300 000 Ft</p>
				<p class="max_amount">3 000 000 Ft</p>
			</div>

		</div>
		<div>
			<div style="margin-top: 60px;"class="need">
				<h2 class="n_label">Monthly installment you want</h2>
				<h1 class="n_amount" id="monthly_instalment">38 406 Ft</h1>
				<input class="custom_range" type="range" name="monthly" min="14987" max="38406" step="1" value="38406" list="numbers">
				<p class="min_amount" id="min_monthly_instalment">14 987 Ft</p>
				<p class="max_amount" id="max_monthly_instalment">38 406 Ft</p>
			</div>

		</div>
		<div class="repaidin">
			<h2>Repaid in:</h2>
			<h3><span id="month_number">24</span> month</h3>
		</div>
		<div class="disc">
			<p >
				You could pay less just <span id="monthly_discount">1 502 Ft</span> monthly
			</p>
			<p>
				Your total saving on the loan will be <span id="total_saving">18 035</span>Ft
			</p>
			<a href="#" class="mytooltip" data-toggle="tooltip" title="Discount will be applicable if you are having or you will open a KH current account and sending there your salary  (at least 100.000 Ft) then you will get 2% discount on the interest rate. You can open the current account in KH anytime, the discount will be effective following month after you will receive your first salary there.">i</a>

		</div>
		<button onclick="window.location.href='basic_unsuccessful.php'" class="bluebtn" type="button" name="button">Yes, I want this loan</button>

	</div>
	<div class="example">
		<div class="col-md-12" style="padding: 0px;">

		<h3>Representative Example</h3>
		<p>
			For a 48-month, HUF 800 thousand loan, the monthly repayment instalment with regular monthly salary income is HUF 21,063 at a fixed 11.99% annual interest rate. The Total amount to be repaid is HUF 1,033,536 and the loan charges are HUF 233,536% of which fees and costs amount to HUF 22,512. The annual percentage rate (APR) is 14.0%	</p>
	</div>

	</div>
<div class="col-md-12" style="padding: 0px;">
	<h3>How does it work?</h3>

	<div class="col-md-3">
		<img src="img/peronal_data.png" />
		<p>
			Enter your personal Data
		</p>
	</div>


	<div class="col-md-3">
		<img src="img/take_pic.png" />
		<p>
			Take a picture of your ID card
		</p>
	</div>

	<div class="col-md-3">
		<img src="img/read_sign.png" />
		<p>
			Read and sign the contract online
		</p>
	</div>


	<div class="col-md-3">
		<img src="img/receive_enjoy.png" />
		<p>
			Receive and enjoy your money
		</p>
	</div>
</div>


<div class="col-md-12" style="padding: 0px;">

	<h3>What are the benefits?</h3>
	<div class="col-md-3">
		<img src="img/minutes.png" />
		<p>
			Money credited within 15 minutes after online contract signature.
		</p>
	</div>


	<div class="col-md-3">
		<img src="img/online_application.png" />
		<p>
			Purely online application without having to go to a branch.
		</p>
	</div>

	<div class="col-md-3">
		<img src="img/management.png" />
		<p>
			No management or other hidden fees.
		</p>
	</div>


	<div class="col-md-3">
		<img src="img/security.png" />
		<p>
			Reliability and tradition of our bank.
		</p>
	</div>
</div>





<div class="col-md-12 banks" style="padding: 0px;">
	<h3 style="margin-bottom: 50px;">Where can I access it?</h3>

	<div class="col-md-2">
		<h2>CIB Bank</h2>
	</div>


	<div class="col-md-2">
		<h2>Erste Bank</h2>
	</div>

	<div class="col-md-2">
		<h2>K&H Bank</h2>
		<p>

	</div>


	<div class="col-md-2">
		<h2>MKB Bank</h2>

	</div>

	<div class="col-md-2">
		<h2>OTP Bank</h2>

	</div>

	<div class="col-md-2">
		<h2>Raiffeisen Bank</h2>

	</div>

</div>




</div>




</div>
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

  				var css = getCssPercentage(300000,3000000,value);
  				$('input[type=range][name="amount"]').css('background','-webkit-linear-gradient(left, #00aeef 0%,#00aeef '+css+'%,#e6f7fe '+css+'%,#e6f7fe 100%)');
  				$('input[type=range][name="amount"]').css('background','-moz-linear-gradient(left, #00aeef 0%,#00aeef '+css+'%,#e6f7fe '+css+'%,#e6f7fe 100%)');
  				$('input[type=range][name="amount"]').css('background','linear-gradient(left, #00aeef 0%,#00aeef '+css+'%,#e6f7fe '+css+'%,#e6f7fe 100%)');
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
						$('input[type=range][name="monthly"]').css('background','-webkit-linear-gradient(left, #00aeef 0%,#00aeef '+css+'%,#e6f7fe '+css+'%,#e6f7fe 100%)');
						$('input[type=range][name="monthly"]').css('background','-moz-linear-gradient(left, #00aeef 0%,#00aeef '+css+'%,#e6f7fe '+css+'%,#e6f7fe 100%)');
						$('input[type=range][name="monthly"]').css('background','linear-gradient(left, #00aeef 0%,#00aeef '+css+'%,#e6f7fe '+css+'%,#e6f7fe 100%)');
						//monthly_discount módosítása
						$('#monthly_discount').html(obj['monthly_discount']+' Ft');
						$('#total_saving').html(obj['total_saving']);

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
						$('#monthly_discount').html(obj['monthly_discount']+' Ft');
						$('#total_saving').html(obj['total_saving']);
						//css
						var css = getCssPercentage2(min_monthly, max_monthly,obj['loan_instalments'].replace(' ', ''));

						$('input[type=range][name="monthly"]').css('background','-webkit-linear-gradient(left, #00aeef 0%,#00aeef '+css+'%,#e6f7fe '+css+'%,#e6f7fe 100%)');
						$('input[type=range][name="monthly"]').css('background','-moz-linear-gradient(left, #00aeef 0%,#00aeef '+css+'%,#e6f7fe '+css+'%,#e6f7fe 100%)');
						$('input[type=range][name="monthly"]').css('background','linear-gradient(left, #00aeef 0%,#00aeef '+css+'%,#e6f7fe '+css+'%,#e6f7fe 100%)');

						//month edit
						$('#month_number').html(obj['repaid_in']);
				    }
				});
  			});

  		}

  	</script>
		<script type="text/javascript">
		$(document).ready(function(){
		    $('[data-toggle="tooltip"]').tooltip();
		});
		</script>
