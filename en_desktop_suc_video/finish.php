<?php
	session_start();
	error_reporting(0);
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

    </head>

<!-- BODY-->



    <body>

<!-- HEADER -->
<div class="header">
	<div class="subheader">
	</div>
	<div class="sec_subheader">
		<div class="container">
			<button onclick="window.location.href='index.php'" class="bluebtn headerbtn" type="button" name="button">
				<p>
				start again
			</p>
			<i class="fa fa-refresh" aria-hidden="true"></i>


			</button>
			<button class="bluebtn headerbtn" type="button" name="button">
				<p>
				save
			</p>

			<i class="fa fa-floppy-o" aria-hidden="true"></i>

			<button class="bluebtn headerbtn" type="button" name="button">
				<p>
				call back
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
            <div class="col-xs-2 ">
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
            <div class="col-xs-2">
              <div class="nr">
                <p>
                  4
                </p>
              </div>
              <p class="pr_title">
                approval
              </p>
            </div>
            <div class="col-xs-2 ">
              <div class="nr">
                <p>
                  5
                </p>
              </div>
              <p class="pr_title">
                contract signiture
              </p>
            </div>
						<div class="col-xs-2 last active">
							<img src="../img/finish.png" />
              <p class="pr_title ">
                completion
              </p>
            </div>



          </div>
          <h2 class="title">completion</h2>
        </div>
      </div>


<!-- Loan I apply for -->
    <div class="container">

			<div class="loanholder">
        <h2>Loan I apply for </h2>
        <div class="amount">
          <p>
            loan amount
          </p>
          <h1><?=$_SESSION["loan_amount"]?> Ft</h1>
        </div>
        <div class="info">

          <div class="instalments">
            <h2>installment:</h2>
            <p><?=$_SESSION["loan_instalments"]?> Ft</p>
          </div>
          <div class="instalments">
            <h2>repaid in:</h2>
            <p><?=$_SESSION["repaid_in"]?> months</p>
          </div>
        </div>
      </div>

    </div>

<!-- form -->

    <div class="container">
      <div class="form nopadding">
            <div class="form finish">
              <h1>Your contract has been successfully signed! Money is on the way to you!</h2>
              <p>
								Thank you for using our new Quick Loan Services. We hope everything went smoothly. In a few minutes your money will be credited to your account.

          </p>


              <div class="info">

              <div class="col-md-2">
                <div class="placeholder">
                </div>
              </div>
              <div class="col-md-9"><p>
Please setup a direct debit in the required installement amount on your account 12345678-12345678-12345678. Please bear in mind that you can only repay your installments from this account! </p></div>
              <div class="col-md-2">
                <div class="placeholder">
                </div>
              </div>
              <div class="col-md-9"><p>
Your money will be credited to your account within 15 minutes through a payment from K&H. If somerthing goes wrong, please call us at +36 1 123 45 67.          </p></div>
              <div class="col-md-2">
                <div class="placeholder">
                </div>
              </div>
              <div class="col-md-9"><p>
Do not forget to check your e-mail. We just sent you the signed contract and information about repayment installments.            </p></div>

            </div>
						<button onclick="window.location.href='index.php'" class="bluebtn next" type="button" name="button">go to the home page</button>






          </div>





          </div>

        </div>








    </body>

<!-- FOOTER-->


    <footer>
    </footer>
