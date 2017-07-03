<?php
	session_start();
	error_reporting(0);
	$_SESSION["loan_amount"] = number_format(1400000,0,',',' ');
	$_SESSION["loan_instalments"] = number_format(64596,',',' ');
	$_SESSION["repaid_in"] = 24;
	$_SESSION["interest_rate"] = 13.99;
	$_SESSION["total_repaid"] = '1 550 314';
	$_SESSION["max_loan"] = '64 596';
	$_SESSION["min_loan"] = '23 234';

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
        <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
				<link rel="stylesheet" href="../css/bootstrap-switch.css">

        <link rel="stylesheet" href="../css/screen.css">
        <link rel="stylesheet" href="../css/slider.css">


        <script src="../bower_components/jquery/dist/jquery.js"></script>
				<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

				<script src="../bower_components/bootstrap/dist/js/bootstrap-switch.js"></script>

    </head>

<!-- BODY-->

	<style>
		input[type=range][name=monthly]{
		    background: #00aeef;
			background: -moz-linear-gradient(left, #00aeef 0%, #00aeef 100%, #e6f7fe 100%, #e6f7fe 100%);
			background: -webkit-linear-gradient(left, #00aeef 0%,#00aeef 40%,#e6f7fe 100%,#e6f7fe 100%);
			background: linear-gradient(to right, #00aeef 0%,#00aeef 100%,#e6f7fe 100%,#e6f7fe 100%);
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00aeef', endColorstr='#e6f7fe',GradientType=1 );
		}
		
		input[type=range][name=amount]{
			    background: #00aeef;
			    background: -moz-linear-gradient(left, #00aeef 0%, #00aeef 20%, #e6f7fe 20%, #e6f7fe 100%);
			    background: -webkit-linear-gradient(left, #00aeef 0%,#00aeef 20%,#e6f7fe 20%,#e6f7fe 100%);
			    background: linear-gradient(to right, #00aeef 0%,#00aeef 20%,#e6f7fe 20%,#e6f7fe 100%);
			    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00aeef', endColorstr='#e6f7fe',GradientType=1 );
		}
	</style>

    <body>

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

<div class="container landing">
	<h1 class="impresto"> </h1>
	<p style="line-height: 22px;	">
		Unrestricted loan from K&H now fully online. Start and finish your application here and you will receive money on your current account in 15 minutes after contract signature.
<div class="container qualify">
	<div class="col-md-6 calculator">
			<div class="prem">
				<p>
					is your salary higher than 250 000 Ft?
				</p>
				<div class="myswitch">
					<div onclick="window.location.href='index_basic_kh.php'" class="inactive nem">
						no
					</div>
					<div  class="active igen">
						yes
					</div>
				</div>

			</div>

			<div class="prem client">
				<p>
					are you already a K&H client?
				</p>
				<div class="myswitch">
					<div onclick="window.location.href='index_premium_else.php'" class="inactive nem">
						no
					</div>
					<div  class="active igen">
						yes
					</div>
				</div>

			</div>

		<a class="ttip" data-toggle="tooltip" title="Discount will be applicable if you are having or you will open a KH current account and sending there your salary  (at least 100.000 Ft) then you will get 2% discount on the interest rate. You can open the current account in KH anytime, the discount will be effective following month after you will receive your first salary there.  ">Learn more about the discount!</a>
<div class="boxed">

		<div>
			<div class="need">
				<h2 class="n_label">amount you need</h2>
				<h1 class="n_amount" id="amount">1 400 000 Ft</h1>
				<input class="custom_range" type="range" name="amount" min="1000000" max="3000000" step="1" value="1400000">
				<p class="min_amount">1.000.000 Ft</p>
				<p class="max_amount">3.000.000 Ft</p>
			</div>

		</div>
		<div>
			<div style="margin-top: 60px;"class="need">
				<h2 class="n_label">monthly installment you want:</h2>
				<h1 class="n_amount" id="monthly_instalment">64 596 Ft</h1>
				<input class="custom_range" type="range" name="monthly" min="23234" max="64596" step="1" value="64596" list="numbers">
				<p class="min_amount" id="min_monthly_instalment">10 833 Ft</p>
				<p class="max_amount" id="max_monthly_instalment">64 596 Ft</p>
			</div>

		</div>
		<div class="repaidin">
			<h2>repaid in:</h2>
			<h3><span id="month_number">24</span> months</h3>
		</div>
		
		<button onclick="window.location.href='basic.php'" class="bluebtn" type="button" name="button">yes, I want this loan</button>
		<a class="ttip" data-toggle="tooltip" title="The client shall only sign a loan agreement which he or she fully understands; any change in the client's circumstances, he or she still remain obliged to pay back the loan amount; if the client has solvency problems he or she must immediately inform the Bank; in case of any expired payment obligation the Bank will apply late payment interest; in case of non-performance of the contract the Bank is entiteled to immediately terminate the loan agreement and all outstanding amount become due; any expenses from the enforcment of claims arising from a terminated loan agreement by the Bank will be paid by the client.">Client should act responsibly and follow the guide issued by HNB.</a>
	</div>
</div>

	<div class="col-md-6 qualify">
		<h3>Do I qualify? Yes, if:</h3>
		<ul>
			<li>you are older than 18</li>
			<li>you receive regular salary from employment to your bank account  </li>
			<li>you have access to internet banking of this account</li>
			<li>this account is at one of
				<a href="#" class="banklist" data-toggle="tooltip" title="Erste Bank,CIB Bank, K&H Bank, MKB Bank, OTP Bank, Raiffeisen Bank ">these supported banks </a>.
			</li>
		</ul>

		<h3>what sould you have ready?</h3>
		<ul>
			<li>your valid ID</li>
			<li>your cell phone</li>
			<li>e-mail address</li>
		</ul>


	</div>

	<div class="example">
		<div class="col-md-12" style="padding: 0px;">

		<h3>Representative Example</h3>
		<p>
			For a 48-month, HUF 800 thousand loan, the monthly repayment instalment with regular monthly salary income is HUF 21,063 at a fixed 11.99% annual interest rate. The Total amount to be repaid is HUF 1,033,536 and the loan charges are HUF 233,536% of which fees and costs amount to HUF 22,512. The annual percentage rate (APR) is 14.0%		</p>
	</div>

	</div>
<div class="col-md-12" style="padding: 0px;">
	<h3>How does it work?</h3>

	<div class="col-md-3 col-xs-6">
		<img src="../img/peronal_data.png" />
		<p>
			Enter your personal data
		</p>
	</div>


	<div class="col-md-3 col-xs-6">
		<img src="../img/take_pic.png" />
		<p>
			video chat identification
		</p>
	</div>

	<div class="col-md-3 col-xs-6">
		<img src="../img/read_sign.png" />
		<p>
			Read and sign the contract online
		</p>
	</div>


	<div class="col-md-3 col-xs-6">
		<img src="../img/receive_enjoy.png" />
		<p>
			Receive and enjoy your money
		</p>
	</div>
</div>


<div class="col-md-12" style="padding: 0px;">

	<h3>What are the benefits?</h3>
	<div class="col-md-3 col-xs-6">
		<img src="../img/minutes.png" />
		<p>
			Money credited within 15 minutes after online contract signature.
		</p>
	</div>


	<div class="col-md-3 col-xs-6">
		<img src="../img/online_application.png" />
		<p>
			Purely online application without having to go to a branch.
		</p>
	</div>
<div class="row">

	<div class="col-md-3 col-xs-6">
		<img src="../img/management.png" />
		<p>
			No management or other hidden fees.
		</p>
	</div>


	<div class="col-md-3 col-xs-6">
		<img src="../img/security.png" />
		<p>
			Reliability and tradition of our bank.
		</p>
	</div>
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
  				var month = $('#month_number').html();
  				$.ajax({
				    type: "POST",
				    url: "../ajax_premium_kh.php",
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
				    	//felső csúszka módosítása
				    	var new_value = obj['load_amount'].replace(' ', '');
				    	var new_value = new_value.replace(' ', '');

				    	$('input[type=range][name="amount"]').val(new_value);

						var css = getCssPercentage(1000000,3000000,new_value);

						$('input[type=range][name="amount"]').css('background','-webkit-linear-gradient(left, #00aeef 0%,#00aeef '+css+'%,#e6f7fe '+css+'%,#e6f7fe 100%)');
						$('input[type=range][name="amount"]').css('background','-moz-linear-gradient(left, #00aeef 0%,#00aeef '+css+'%,#e6f7fe '+css+'%,#e6f7fe 100%)');
						$('input[type=range][name="amount"]').css('background','linear-gradient(left, #00aeef 0%,#00aeef '+css+'%,#e6f7fe '+css+'%,#e6f7fe 100%)');
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
						$('#monthly_discount').html(obj['monthly_discount']+' Ft');
						$('#total_saving').html(obj['total_saving']);

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
				    url: "../ajax_premium_kh.php",
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
		<script>
		    $(document).ready(function() {
					$("[name='csek']").bootstrapSwitch();
		    });
		</script>
