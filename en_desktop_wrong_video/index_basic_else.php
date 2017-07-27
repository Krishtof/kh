<?php
	session_start();
	error_reporting(0);
	$_SESSION["loan_amount"] = number_format(600000,0,',',' ');
	$_SESSION["loan_instalments"] = number_format(28241,0,',',' ');
	$_SESSION["repaid_in"] = 24;
	$_SESSION["interest_rate"] = 13.99;
	$_SESSION["total_repaid"] = '780 000';
	$_SESSION["max_loan"] = '28 241';
	$_SESSION["min_loan"] = '10 588';

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
	</style>

    <body>
			<div id="guide" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-body">
			        <div class="text">
			          <h1>Guide</h1>
			          <p>Lorem ipsum dolor sit amet, te his erant posidonium, no sea ferri labore. Apeirian salutatus mea no, sint doming invenire qui id, nam eu epicurei luptatum. No pri melius voluptaria complectitur, molestiae definiebas efficiendi in mel. Sit ad eruditi persequeris, ne docendi omnesque pro. Id nibh ubique democritum eum, ea singulis senserit nec, vix no erant dolore intellegebat. Eam ex utamur elaboraret, idque saepe argumentum qui ei, his prodesset dissentiunt ex.

			          Vis saepe concludaturque ad, eius bonorum periculis vim ea, integre suscipit prodesset eu quo. Utinam scaevola has cu, cum etiam scripserit te, no copiosae definitionem pro. Phaedrum quaerendum eum ea, pro an iuvaret accommodare. Posse adipisci theophrastus at vel, te pro dolore quaestio dignissim. In eos meliore tractatos torquatos. Duo no meis lucilius deterruisset. Mundi ludus eos cu.

			          Ut simul possit incorrupte cum, quo explicari temporibus ea. Dolor invidunt mel in, ferri omnium offendit ut ius. Eos at regione mentitum probatus, mel consequat elaboraret ne, pro tamquam adolescens moderatius ne. Mundi explicari torquatos vel et, duo vide epicurei ea. Ei facilisi definitiones pro, pri esse essent in.

			          Causae lobortis indoctum sit cu, vel case atomorum ut. Ne dolores mandamus constituto sit. Voluptaria inciderint mea ei, quo adipisci corrumpit elaboraret in. Qui bonorum molestie sententiae id, cum cu purto facete latine. Rebum virtute delicatissimi ad pri. Ius posse nobis cu, vim an nobis accusata incorrupte.

			          Porro iuvaret salutatus pro cu, alia sint offendit duo ei, denique reprimique dissentiet no duo. Sea ei vero brute consetetur, sed efficiendi definitiones ea. Vis quidam commodo efficiendi no. Deserunt tacimates suscipiantur ne vim. Vix ad amet delicata contentiones, ius mundi admodum suscipit eu, an mea falli euripidis.

			          Lorem ipsum dolor sit amet, te his erant posidonium, no sea ferri labore. Apeirian salutatus mea no, sint doming invenire qui id, nam eu epicurei luptatum. No pri melius voluptaria complectitur, molestiae definiebas efficiendi in mel. Sit ad eruditi persequeris, ne docendi omnesque pro. Id nibh ubique democritum eum, ea singulis senserit nec, vix no erant dolore intellegebat. Eam ex utamur elaboraret, idque saepe argumentum qui ei, his prodesset dissentiunt ex.

			          Vis saepe concludaturque ad, eius bonorum periculis vim ea, integre suscipit prodesset eu quo. Utinam scaevola has cu, cum etiam scripserit te, no copiosae definitionem pro. Phaedrum quaerendum eum ea, pro an iuvaret accommodare. Posse adipisci theophrastus at vel, te pro dolore quaestio dignissim. In eos meliore tractatos torquatos. Duo no meis lucilius deterruisset. Mundi ludus eos cu.
			          </p>

			        </div>
			        <button onclick="" style="margin-bottom: 10px;"class="bluebtn" type="button" name="button" data-dismiss="modal">Ok</button>

			      </div>
			    </div>
			  </div>
			</div>





			<div id="regmodal" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-body">
			        <div class="text">
			          <h1>Data processing policy</h1>
			          <p>Lorem ipsum dolor sit amet, te his erant posidonium, no sea ferri labore. Apeirian salutatus mea no, sint doming invenire qui id, nam eu epicurei luptatum. No pri melius voluptaria complectitur, molestiae definiebas efficiendi in mel. Sit ad eruditi persequeris, ne docendi omnesque pro. Id nibh ubique democritum eum, ea singulis senserit nec, vix no erant dolore intellegebat. Eam ex utamur elaboraret, idque saepe argumentum qui ei, his prodesset dissentiunt ex.

			          Vis saepe concludaturque ad, eius bonorum periculis vim ea, integre suscipit prodesset eu quo. Utinam scaevola has cu, cum etiam scripserit te, no copiosae definitionem pro. Phaedrum quaerendum eum ea, pro an iuvaret accommodare. Posse adipisci theophrastus at vel, te pro dolore quaestio dignissim. In eos meliore tractatos torquatos. Duo no meis lucilius deterruisset. Mundi ludus eos cu.

			          Ut simul possit incorrupte cum, quo explicari temporibus ea. Dolor invidunt mel in, ferri omnium offendit ut ius. Eos at regione mentitum probatus, mel consequat elaboraret ne, pro tamquam adolescens moderatius ne. Mundi explicari torquatos vel et, duo vide epicurei ea. Ei facilisi definitiones pro, pri esse essent in.

			          Causae lobortis indoctum sit cu, vel case atomorum ut. Ne dolores mandamus constituto sit. Voluptaria inciderint mea ei, quo adipisci corrumpit elaboraret in. Qui bonorum molestie sententiae id, cum cu purto facete latine. Rebum virtute delicatissimi ad pri. Ius posse nobis cu, vim an nobis accusata incorrupte.

			          Porro iuvaret salutatus pro cu, alia sint offendit duo ei, denique reprimique dissentiet no duo. Sea ei vero brute consetetur, sed efficiendi definitiones ea. Vis quidam commodo efficiendi no. Deserunt tacimates suscipiantur ne vim. Vix ad amet delicata contentiones, ius mundi admodum suscipit eu, an mea falli euripidis.

			          Lorem ipsum dolor sit amet, te his erant posidonium, no sea ferri labore. Apeirian salutatus mea no, sint doming invenire qui id, nam eu epicurei luptatum. No pri melius voluptaria complectitur, molestiae definiebas efficiendi in mel. Sit ad eruditi persequeris, ne docendi omnesque pro. Id nibh ubique democritum eum, ea singulis senserit nec, vix no erant dolore intellegebat. Eam ex utamur elaboraret, idque saepe argumentum qui ei, his prodesset dissentiunt ex.

			          Vis saepe concludaturque ad, eius bonorum periculis vim ea, integre suscipit prodesset eu quo. Utinam scaevola has cu, cum etiam scripserit te, no copiosae definitionem pro. Phaedrum quaerendum eum ea, pro an iuvaret accommodare. Posse adipisci theophrastus at vel, te pro dolore quaestio dignissim. In eos meliore tractatos torquatos. Duo no meis lucilius deterruisset. Mundi ludus eos cu.
			          </p>

			        </div>
			        <button  onclick="window.location.href='financial.php'" class="bluebtn" type="button" name="button" onclick="modal_close();" data-dismiss="modal">I agree</button>
			        <a class="dont" href="#">I do not agree</a>

			      </div>
			    </div>

			  </div>
			</div>
<!-- HEADER -->
      <div class="header">
        <div class="subheader">
        </div>
				<div class="sec_subheader">
					<div class="container">
						<button onclick="window.location.href='index.php'" class="bluebtn headerbtn" type="button" name="button">
							<p>
							About loan
						</p>
						<i class="fa fa-refresh" aria-hidden="true"></i>


						</button>
						<button class="bluebtn headerbtn" type="button" name="button">
							<p>
							FAQ
						</p>

						<i class="fa fa-floppy-o" aria-hidden="true"></i>

						<button class="bluebtn headerbtn" type="button" name="button">
							<p>
							Call back
						</p>
						<i class="fa fa-phone" aria-hidden="true"></i>

						</button>
					</div>

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
					<div  class="active nem">
						no
					</div>
					<div  onclick="window.location.href='index_premium_else.php'" class="inactive igen">
						yes
					</div>
				</div>

			</div>

			<div class="prem client">
				<p>
					are you already a K&H client?
				</p>
				<div class="myswitch">
					<div class="active nem">
						no
					</div>
					<div onclick="window.location.href='index_basic_kh.php'" class="inactive igen">
						yes
					</div>
				</div>

			</div>

		<a class="ttip" data-toggle="tooltip" data-placement="right" title="Standard interest rate of K&H personal loan is 13.99% p.a. but your interest rate could starts at 7.99% p.a. 2% discount on interest rate, if you currently have a K&H account and you receive at least 100 000 HUF monthly 4% discount on interest rate, if you have at least 250 000 HUF net income per month and you can verify it during the proccess. 6% discount on interest rate, if you meet both conditions mentioned above. Do not have a K&H account? It is not mandatory for getting the loan, but if you will open an account after you got the loan and you will receive at least 100 000 HUF salary per month you will start paying less from the following month after we identifed your first income payment to the account.   ">Learn more about the discount!</a>
<div class="boxed">

		<div>
			<div class="need">
				<h2 class="n_label">amount you need</h2>
				<h1 class="n_amount" id="amount">600 000 Ft</h1>
				<input class="custom_range" type="range" name="amount" min="300000" max="3000000" step="1" value="600000">
				<p class="min_amount">300.000 Ft</p>
				<p class="max_amount">3.000.000 Ft</p>
			</div>

		</div>
		<div>
			<div style="margin-top: 60px;"class="need">
				<h2 class="n_label">monthly installment you want:</h2>
				<h1 class="n_amount" id="monthly_instalment">28 241 Ft</h1>
				<input class="custom_range" type="range" name="monthly" min="10588" max="28241" step="1" value="28241" list="numbers">
				<p class="min_amount" id="min_monthly_instalment">10 588 Ft</p>
				<p class="max_amount" id="max_monthly_instalment">28 241 Ft</p>
			</div>

		</div>
		<div class="repaidin">
			<h2>repaid in:</h2>
			<h3><span id="month_number">24</span> months</h3>
		</div>

		<button style="margin-bottom: 30px;"onclick="window.location.href='basic.php'" class="bluebtn next" type="button" name="button">
			<span class="text">Yes I want this loan</span>
			<img class="arrow" src="../img/arr_right.png"/>
		</button>
		<div class="tooltipholder">Client should act responsibly and follow the guide
			<a class="ttip" data-toggle="tooltip" title="The client shall only sign a loan agreement which he or she fully understands; any change in the client's circumstances, he or she still remain obliged to pay back the loan amount; if the client has solvency problems he or she must immediately inform the Bank; in case of any expired payment obligation the Bank will apply late payment interest; in case of non-performance of the contract the Bank is entiteled to immediately terminate the loan agreement and all outstanding amount become due; any expenses from the enforcment of claims arising from a terminated loan agreement by the Bank will be paid by the client.">issued by HNB.</a>

		</div>
		<button type="button" type="button" data-toggle="modal" data-target="#guide" class="btn bluebtn ttipbtb" name="button">Show HNB Guide</button>	</div>
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
			For a 48-month, HUF 800 thousand loan, the monthly repayment instalment with regular monthly salary income is HUF 21,063 at a fixed 11.99% annual interest rate. The Total amount to be repaid is HUF 1,033,536 and the loan charges are HUF 233,536 of which fees and costs amount to HUF 22,512. The annual percentage rate (APR) is 14.0%.	</p>
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
				    url: "../ajax_basic_else.php",
				    data: {
				    	mode: 'amountChange',
				    	month : month,
				    	value: value
				    },
				    success: function(msg){

				    	var obj = $.parseJSON(msg);
						console.log(obj);
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
				    url: "../ajax_basic_else.php",
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
