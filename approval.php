<?php 
	session_start();
	error_reporting(0);
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
        <p>You applied for 2.000.000 Ft. The maximum amount you can apply for is 1.700.000 Ft.</p>
        <div class="container">
          <div class="col-md-6">
            <div>
              <div class="need">
                <h2 class="n_label">Amount you need</h2>
                <h1 class="n_amount">800 000 Ft</h1>
                <input class="custom_range" type="range" name="custom_range">
                <p class="min_amount">300.000 Ft</p>
                <p class="max_amount">3.000.000 Ft</p>
              </div>

            </div>
            <div>
              <div style="margin-top: 60px;"class="need">
                <h2 class="n_label">Monthly installment:</h2>
                <h1 class="n_amount">21 063 Ft</h1>
                <input class="custom_range" type="range" name="custom_range">
                <p class="min_amount">300.000 Ft</p>
                <p class="max_amount">3.000.000 Ft</p>
              </div>

            </div>
            <div class="repaidin">
              <h2>Repaid in:</h2>
              <h3>24 month</h3>
            </div>

          </div>

          <div class="col-md-6 loaninfo">
            <h4>Total amount to be repaid</h4>
            <h1>1 033 536 Ft </h1>
            <div class="line"></div>
            <p>Fixed Annual Interest Rate</p>
            <h2>11.99%</h2>
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
  		});

  		function changeRange(){
  			$('input[type="range"]').change(function(){
  				var value = $(this).val();
  				$('input[type=range]').css('background','-webkit-linear-gradient(left, #00aeef 0%,#00aeef '+value+'%,#e6f7fe '+value+'%,#e6f7fe 100%)');
  				//$('input[type=range]').css('background','-moz-linear-gradient(left, #00aeef 0%,#00aeef '+value+'%,#e6f7fe '+value+'%,#e6f7fe 100%)');
  				//$('input[type=range]').css('background','linear-gradient(left, #00aeef 0%,#00aeef '+value+'%,#e6f7fe '+value+'%,#e6f7fe 100%)');
  			});
  		}
  	</script>
