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
				<title>Testbirds prototype</title>
        <meta name="description" content="prototype">
        <meta name="author" content="testbirds">    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/screen.css">
        <link rel="stylesheet" href="css/basics.css">
        <link rel="stylesheet" href="css/datepicker3.css">

        <script src="bower_components/jquery/dist/jquery.js"></script>
         <script src="js/basics.js"></script>
         <script src="js/bootstrap-datepicker.js"></script>

        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    </head>

<!-- BODY-->

<div id="acknowledgemodal" class="modal fade" role="dialog">
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
        <button onclick="window.location.href='financial.php'" class="bluebtn" type="button" name="button">I acknowledge</button>
        <a class="dont" href="#">I don't acknowledge</a>

      </div>
    </div>

  </div>
</div>


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
            <div class="col-xs-2 active">
              <div class="nr">
                <p>
                  1
                </p>
              </div>
              <p class="pr_title">
                Basic information
              </p>
            </div>
            <div class="col-xs-2">
              <div class="nr">
                <p>
                  2
                </p>
              </div>
              <p class="pr_title ">
                Financial evaluation
              </p>
            </div>
            <div class="col-xs-2">
              <div class="nr">
                <p>
                  3
                </p>
              </div>
              <p class="pr_title">
                Statements
              </p>
            </div>
            <div class="col-xs-2">
              <div class="nr">
                <p>
                  4
                </p>
              </div>
              <p class="pr_title">
                Approval
              </p>
            </div>
            <div class="col-xs-2">
              <div class="nr">
                <p>
                  5
                </p>
              </div>
              <p class="pr_title">
                Contract
              </p>
            </div>
            <div class="col-xs-2">
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
          <h2 class="title">Basic information</h2>
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
      <div class="form nopadding">
            <div class="form basic">
            <h1 >Personal information</h1>
            <form>
              First name:<br>
              <input type="text" name="firstname"><br>
              Last name:<br>
              <input type="text" name="lastname">
              <div class="cal" id="sandbox-container">
                <h2>Date of birth:</h2>
                  <input type="text" type="text" class=" shorter form-control" />
              </div>
            </form>
            <h1>Contact details</h1>
            <p>
By inserting of your phone number and email adress you giving us the concent to contact you regarding the aplication            </p>
            <form class="contact">

            <div class="phone" id="single_phone">

              <h2>Enter phone number:</h2>
              <p>
                We will send you a code to your phone with a verification code:
              </p>
                <p class="hun">+36</p>
                <input type="name" name="name" id="phone_phone" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                <button type="button" class="bluebtn" id="phone-send" name="button">Send verification code</button>
            </div>

            <div class="verify" id="phone_verification">
              <h2>Enter the verification code:</h2>
              <p>
                We sent you a code to the phone number <span style="font-weight: bold;" id="phone_number">+36 20 418 48 83</span>. Please enter the code you received in the text message:
              </p>
              <input type="email" name="email" id="phone_verify" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
              <button type="button" class="bluebtn" id="phone-verify"  name="button">Verify </button>
							<button  class="bluebtn nobg2" type="button" name="button">Send again</button>
							<button  class="bluebtn nobg2" type="button" name="button" id="try_1">Try different phone number</button>

            </div>

            <div class="success phone" id="phone_success">
              <img src="img/ok.png" />
              <h2>Phone number successfully verified</h2>
            </div>

            <div class="email" id="single_email">

              <h2>Enter email address:</h2>
              <p>
                We will send you an email with a verification code:
              </p>
                <input type="email" name="name" id="email_email">
                <button type="button" class="bluebtn" id="email-send"  name="button">Send verification code</button>
            </div>

            <div class="verify" id="email_verification">
              <h2>Enter the verification code:</h2>
              <p>
                We sent you a code to the email address  <span style="font-weight: bold;" id="user_email">john.doe@gmail.com</span>. Please enter the code you received in the email:
              </p>
              <input type="email" name="email" id="email_verify" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
              <button type="button" class="bluebtn" id="email-verify"  name="button">Verify </button>
							<button  class="bluebtn nobg2" type="button" name="button">Send again</button>
							<button  class="bluebtn nobg2" type="button" name="button" id="try_2">Try different email address</button>

            </div>

            <div class="success email" id="email_success">
              <img src="img/ok.png" />
              <h2>Email address successfully verified</h2>
            </div>

            </form>

            <p class="continue">
              To continue you must read and acknowledge the personal data protection policy.
            </p>
            <button type="button" class="orangebtn btn btn-info btn-lg" data-toggle="modal" data-target="#acknowledgemodal">Display policy</button>

          </div>

        </div>
      </div>

  </div>



    </body>

<!-- FOOTER-->


    <footer>
    </footer>


<script>
    $('#sandbox-container input').datepicker({
        autoclose: true
    });

    $('#sandbox-container input').on('show', function(e){
        console.debug('show', e.date, $(this).data('stickyDate'));

        if ( e.date ) {
             $(this).data('stickyDate', e.date);
        }
        else {
             $(this).data('stickyDate', null);
        }
    });

    $('#sandbox-container input').on('hide', function(e){
        console.debug('hide', e.date, $(this).data('stickyDate'));
        var stickyDate = $(this).data('stickyDate');

        if ( !e.date && stickyDate ) {
            console.debug('restore stickyDate', stickyDate);
            $(this).datepicker('setDate', stickyDate);
            $(this).data('stickyDate', null);
        }
    });

</script>
