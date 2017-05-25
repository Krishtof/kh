<?php 
	session_start();
	error_reporting(0);
	$_SESSION["loan_amount"] = number_format(800000,0,',',' ');
	$_SESSION["loan_instalments"] = number_format(38046,0,',',' ');
	$_SESSION["repaid_in"] = 24;
	
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Description here</title>
        <meta name="description" content="whatever">
        <meta name="keywords" content="html5 template, css3, one page, animations, agency, portfolio, web design">
        <meta name="author" content="Kristof Vizy">    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/screen.css">
        <link rel="stylesheet" href="css/slider.css">

        <script src="bower_components/jquery/dist/jquery.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <title>kh</title>
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
	<h1 class="impresto">Impresto</h1>
	<p style="line-height: 22px;	">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
	</p>

<div class="container">
	<div class="col-md-6">

	</div>
	<div class="col-md-6 calculator">
		<div>
			<div class="need">
				<h2 class="n_label">Amount you need</h2>
				<h1 class="n_amount" id="amount">800 000 Ft</h1>
				<input class="custom_range" type="range" name="amount" min="300000" max="3000000" step="50000" value="800000">
				<p class="min_amount">300.000 Ft</p>
				<p class="max_amount">3.000.000 Ft</p>
			</div>

		</div>
		<div>
			<div style="margin-top: 60px;"class="need">
				<h2 class="n_label">Monthly installment:</h2>
				<h1 class="n_amount" id="monthly_instalment">38 406 Ft</h1>
				<input class="custom_range" type="range" name="monthly" min="5620" max="144024" step="1" value="38406" list="numbers">
				<p class="min_amount">5 620 Ft</p>
				<p class="max_amount">144 024 Ft</p>
			</div>

		</div>
		<div class="repaidin">
			<h2>Repaid in:</h2>
			<h3><span id="month_number">24</span> month</h3>
		</div>
		<div class="disc">
			<p >
				You can get <span id="monthly_discount">1 502 Ft</span> discount monthly. 
			</p>
			<p>
				Your total saving on your loan can be: <span id="total_saving">18 035 Ft</span>.
			</p>
		</div>
		<button onclick="window.location.href='basic.php'" class="bluebtn" type="button" name="button">Yes, I want this loan</button>

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
				    	//console.log(obj);
				    	//amount you need text módosítása
				    	$('h1#amount').html(obj['load_amount']+' Ft');
				    	//monthly installmenst text módosítása
				    	$('#monthly_instalment').html(obj['loan_instalments']+' Ft');
				    	//monthly csúszka értékének beállítása
						$('input[type=range][name="monthly"]').val(obj['loan_instalments'].replace(' ', ''));
						//monthly csúszka mozgatása
						var css = getCssPercentage(5620,144024,obj['loan_instalments'].replace(' ', ''));
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
	  		var percentage_1 = max/100;
	  		var result = value/percentage_1;
	  		return result-5;
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
				    	//console.log(obj);
				    	//input val módosítás
				    	$('input[type="range"][name="monthly"]').val(obj['loan_instalments'].replace(' ', ''));
				    	//monthly text módosítás
				    	$('#monthly_instalment').html(obj['loan_instalments']+' Ft');
				    	//monthly_discount módosítása
						$('#monthly_discount').html(obj['monthly_discount']+' Ft');
						$('#total_saving').html(obj['total_saving']);
						//css
						var css = getCssPercentage(5620,144024,obj['loan_instalments'].replace(' ', ''));
  				
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
