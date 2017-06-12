<?php
	session_start();
	error_reporting(0);
	$_SESSION["loan_amount"] = number_format(600000,0,',',' ');
	$_SESSION["loan_instalments"] = number_format(32500,0,',',' ');
	$_SESSION["repaid_in"] = 24;
	$_SESSION["interest_rate"] = 13.99;
	$_SESSION["total_repaid"] = '780 000';
	$_SESSION["max_loan"] = '65 000';
	$_SESSION["min_loan"] = '10 833';

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
		A K&H új megoldásával szabad felhasználású hiteled igénylésének minden lépését online elintézheted! Nem szükséges bemenned a bankfiókba, mert az igénylést és a hitelszerződés megkötését is el tudod végezni a neten. Az aláírás is online zajlik és azt követően 15 percen belül meg is érkezik a számládra a kért összeg!
<div class="container qualify">
	<div class="col-md-6 qualify">
		<h3>Megfelelek-e a személyi hitel igénylés feltételeinek? A válasz igen, ha:</h3>
		<ul>
			<li>már elmúltál 18 éves</li>
			<li>rendelkezel havi rendszerességű, munkáltatótól származó, igazolható jövedelemmel </li>
			<li>rendelkezel bankszámlával és hozzá kapcsolódó internet bank eléréssel az oldal alján található bankok egyikénél</li>
			<li>a fenti számla
				<a href="#" class="banklist" data-toggle="tooltip" title="Erste Bank,CIB Bank, K&H Bank, MKB Bank, OTP Bank, Raiffeisen Bank ">az alábbi támogatott bankok valamelyikénél </a>található
			</li>
		</ul>

		<h3>a folyamat során az alábbiakra lesz szükséged az igényléshez:</h3>
		<ul>
			<li>érvényes személyi igazolványod</li>
			<li>érvényes mobiltelefonszámod</li>
			<li>érvényes e-mail címed</li>
		</ul>


	</div>
	<div class="col-md-6 calculator">
		<div>
			<div class="need">
				<h2 class="n_label">igényelt hitelösszeg</h2>
				<h1 class="n_amount" id="amount">600 000 Ft</h1>
				<input class="custom_range" type="range" name="amount" min="300000" max="3000000" step="1" value="600000">
				<p class="min_amount">300.000 Ft</p>
				<p class="max_amount">3.000.000 Ft</p>
			</div>

		</div>
		<div>
			<div style="margin-top: 60px;"class="need">
				<h2 class="n_label">havi törlesztőrészlet:</h2>
				<h1 class="n_amount" id="monthly_instalment">32 500 Ft</h1>
				<input class="custom_range" type="range" name="monthly" min="10833" max="65000" step="1" value="32500" list="numbers">
				<p class="min_amount" id="min_monthly_instalment">10 833 Ft</p>
				<p class="max_amount" id="max_monthly_instalment">65 000 Ft</p>
			</div>

		</div>
		<div class="repaidin">
			<h2>futamidő:</h2>
			<h3><span id="month_number">24</span> hónap</h3>
		</div>
		<div class="disc">
			<p >
				Havi <span id="monthly_discount">1 502 Ft</span> kedvezményre vagy jogosult. 
			</p>
			<p>
				Teljes megtakarításod a hitelen <span id="total_saving">18 035 Ft</span> lehet.
			</p>
			<a href="#" class="mytooltip" data-toggle="tooltip" title="A kedvezmény feltétele, hogy rendelkezel K&H számlával vagy meghatározott időn belül nyitsz egyet és legalább 100 000 Ft munkabéred érkezik ide havonta. Ebben ez esetben 2% kedvezményt adunk a kamatból.  Az új számlát bármikor megnyithatod, ennek költsége max. 750 Ft/hó, a kedvezmény az első fizetési jóváírás beérkezését követő hónaptól lép majd érvénybe. A kalkulátor a kedvezmény nélküli összeget mutatja.  ">i</a>

		</div>
		<button onclick="window.location.href='hu_basic.php'" class="bluebtn" type="button" name="button">kérem a hitelt</button>

	</div>
	<div class="example">
		<div class="col-md-12" style="padding: 0px;">

		<h3>Reprezentatív példa</h3>
		<p>
			800 000 forint összegû kölcsön esetén, 48 hónapos futamidõvel, éves fix, munkabér-átutalási kedvezménnyel számított 11,99% akciós kamat mellett a havi törlesztõrészlet 21 063 forint, a teljes visszafizetendõ összeg 1 033 536 forint, a hiteldíj 233 536 forint, ebbõl a hiteldíjban foglalt díjak, költségek összege 22 512 forint, THM: 14%		</p>
	</div>

	</div>
<div class="col-md-12" style="padding: 0px;">
	<h3>Az igénylés folyamata</h3>

	<div class="col-md-3">
		<img src="img/peronal_data.png" />
		<p>
			személyes adatok megadása
		</p>
	</div>


	<div class="col-md-3">
		<img src="img/take_pic.png" />
		<p>
			a személyi igazolványról készült fotó feltöltése
		</p>
	</div>

	<div class="col-md-3">
		<img src="img/read_sign.png" />
		<p>
			a szerződés ellenőrzése, aláírása
		</p>
	</div>


	<div class="col-md-3">
		<img src="img/receive_enjoy.png" />
		<p>
			Az igényelt hitelösszeg kiutalása
		</p>
	</div>
</div>


<div class="col-md-12" style="padding: 0px;">

	<h3>Az online hiteligénylés előnyei:</h3>
	<div class="col-md-3">
		<img src="img/minutes.png" />
		<p>
			az igényelt összeg a szerződés aláírását követő 15 percen belűl megérkezhet bankszámládra
		</p>
	</div>


	<div class="col-md-3">
		<img src="img/online_application.png" />
		<p>
			az igényléshez nem szükséges bankfiókba menni
		</p>
	</div>

	<div class="col-md-3">
		<img src="img/management.png" />
		<p>
			nincs ügyintézési költség
		</p>
	</div>


	<div class="col-md-3">
		<img src="img/security.png" />
		<p>
			A hitelt Magyarország egyik vezető pénzügyi szolgáltatója biztosítja.
		</p>
	</div>
</div>





<div class="col-md-12 banks" style="padding: 0px;">
	<h3 style="margin-bottom: 50px;">A K&H azonnali hitelét akkor igényelheted, ha az alábbi bankok egyikénél vezeted a folyószámládat</h3>

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
				    	//felső csúszka módosítása
				    	var new_value = obj['load_amount'].replace(' ', '');
				    	var new_value = new_value.replace(' ', '');

				    	$('input[type=range][name="amount"]').val(new_value);

						var css = getCssPercentage(300000,3000000,new_value);

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
