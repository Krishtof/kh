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
		<link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/screen.css">
		<link rel="stylesheet" href="../css/statement.css">
		<script src="../bower_components/jquery/dist/jquery.js"></script>

		<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		 <script src="../js/statement.js"></script>
</head>



<!-- BODY-->
<div id="acknowledgemodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <div class="text">
          <h1>Data protection policy</h1>
          <p>Lorem ipsum dolor sit amet, te his erant posidonium, no sea ferri labore. Apeirian salutatus mea no, sint doming invenire qui id, nam eu epicurei luptatum. No pri melius voluptaria complectitur, molestiae definiebas efficiendi in mel. Sit ad eruditi persequeris, ne docendi omnesque pro. Id nibh ubique democritum eum, ea singulis senserit nec, vix no erant dolore intellegebat. Eam ex utamur elaboraret, idque saepe argumentum qui ei, his prodesset dissentiunt ex.

          Vis saepe concludaturque ad, eius bonorum periculis vim ea, integre suscipit prodesset eu quo. Utinam scaevola has cu, cum etiam scripserit te, no copiosae definitionem pro. Phaedrum quaerendum eum ea, pro an iuvaret accommodare. Posse adipisci theophrastus at vel, te pro dolore quaestio dignissim. In eos meliore tractatos torquatos. Duo no meis lucilius deterruisset. Mundi ludus eos cu.

          Ut simul possit incorrupte cum, quo explicari temporibus ea. Dolor invidunt mel in, ferri omnium offendit ut ius. Eos at regione mentitum probatus, mel consequat elaboraret ne, pro tamquam adolescens moderatius ne. Mundi explicari torquatos vel et, duo vide epicurei ea. Ei facilisi definitiones pro, pri esse essent in.

          Causae lobortis indoctum sit cu, vel case atomorum ut. Ne dolores mandamus constituto sit. Voluptaria inciderint mea ei, quo adipisci corrumpit elaboraret in. Qui bonorum molestie sententiae id, cum cu purto facete latine. Rebum virtute delicatissimi ad pri. Ius posse nobis cu, vim an nobis accusata incorrupte.

          Porro iuvaret salutatus pro cu, alia sint offendit duo ei, denique reprimique dissentiet no duo. Sea ei vero brute consetetur, sed efficiendi definitiones ea. Vis quidam commodo efficiendi no. Deserunt tacimates suscipiantur ne vim. Vix ad amet delicata contentiones, ius mundi admodum suscipit eu, an mea falli euripidis.

          Lorem ipsum dolor sit amet, te his erant posidonium, no sea ferri labore. Apeirian salutatus mea no, sint doming invenire qui id, nam eu epicurei luptatum. No pri melius voluptaria complectitur, molestiae definiebas efficiendi in mel. Sit ad eruditi persequeris, ne docendi omnesque pro. Id nibh ubique democritum eum, ea singulis senserit nec, vix no erant dolore intellegebat. Eam ex utamur elaboraret, idque saepe argumentum qui ei, his prodesset dissentiunt ex.

          Vis saepe concludaturque ad, eius bonorum periculis vim ea, integre suscipit prodesset eu quo. Utinam scaevola has cu, cum etiam scripserit te, no copiosae definitionem pro. Phaedrum quaerendum eum ea, pro an iuvaret accommodare. Posse adipisci theophrastus at vel, te pro dolore quaestio dignissim. In eos meliore tractatos torquatos. Duo no meis lucilius deterruisset. Mundi ludus eos cu.
          </p>

        </div>
        <button id="modal" class="bluebtn" type="button" name="button" data-dismiss="modal">I acknowledge</button>
        <a class="dont" href="#">I do not acknowledge</a>

      </div>
    </div>

  </div>
</div>


<div id="acknowledgemodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <div class="text">
          <h1>Data protection policy</h1>
          <p>Lorem ipsum dolor sit amet, te his erant posidonium, no sea ferri labore. Apeirian salutatus mea no, sint doming invenire qui id, nam eu epicurei luptatum. No pri melius voluptaria complectitur, molestiae definiebas efficiendi in mel. Sit ad eruditi persequeris, ne docendi omnesque pro. Id nibh ubique democritum eum, ea singulis senserit nec, vix no erant dolore intellegebat. Eam ex utamur elaboraret, idque saepe argumentum qui ei, his prodesset dissentiunt ex.

          Vis saepe concludaturque ad, eius bonorum periculis vim ea, integre suscipit prodesset eu quo. Utinam scaevola has cu, cum etiam scripserit te, no copiosae definitionem pro. Phaedrum quaerendum eum ea, pro an iuvaret accommodare. Posse adipisci theophrastus at vel, te pro dolore quaestio dignissim. In eos meliore tractatos torquatos. Duo no meis lucilius deterruisset. Mundi ludus eos cu.

          Ut simul possit incorrupte cum, quo explicari temporibus ea. Dolor invidunt mel in, ferri omnium offendit ut ius. Eos at regione mentitum probatus, mel consequat elaboraret ne, pro tamquam adolescens moderatius ne. Mundi explicari torquatos vel et, duo vide epicurei ea. Ei facilisi definitiones pro, pri esse essent in.

          Causae lobortis indoctum sit cu, vel case atomorum ut. Ne dolores mandamus constituto sit. Voluptaria inciderint mea ei, quo adipisci corrumpit elaboraret in. Qui bonorum molestie sententiae id, cum cu purto facete latine. Rebum virtute delicatissimi ad pri. Ius posse nobis cu, vim an nobis accusata incorrupte.

          Porro iuvaret salutatus pro cu, alia sint offendit duo ei, denique reprimique dissentiet no duo. Sea ei vero brute consetetur, sed efficiendi definitiones ea. Vis quidam commodo efficiendi no. Deserunt tacimates suscipiantur ne vim. Vix ad amet delicata contentiones, ius mundi admodum suscipit eu, an mea falli euripidis.

          Lorem ipsum dolor sit amet, te his erant posidonium, no sea ferri labore. Apeirian salutatus mea no, sint doming invenire qui id, nam eu epicurei luptatum. No pri melius voluptaria complectitur, molestiae definiebas efficiendi in mel. Sit ad eruditi persequeris, ne docendi omnesque pro. Id nibh ubique democritum eum, ea singulis senserit nec, vix no erant dolore intellegebat. Eam ex utamur elaboraret, idque saepe argumentum qui ei, his prodesset dissentiunt ex.

          Vis saepe concludaturque ad, eius bonorum periculis vim ea, integre suscipit prodesset eu quo. Utinam scaevola has cu, cum etiam scripserit te, no copiosae definitionem pro. Phaedrum quaerendum eum ea, pro an iuvaret accommodare. Posse adipisci theophrastus at vel, te pro dolore quaestio dignissim. In eos meliore tractatos torquatos. Duo no meis lucilius deterruisset. Mundi ludus eos cu.
          </p>

        </div>
        <button id="modal" class="bluebtn" type="button" name="button" data-dismiss="modal">I acknowledge</button>
        <a class="dont" href="#">I do not acknowledge</a>

      </div>
    </div>

  </div>
</div>


<div id="upload" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body upload">
        <img src="../img/mobile.png" />
        <h1>Please check your phone</h1>
        <p>
          We have sent you an SMS to your cell phone. Click on the link in the message and enter the following security code on the webpage:<br /><span style="font-weight: bold; font-size: 22px; line-height: 40px;">123432</span>
        </p>

        <button onclick="" style="margin-bottom: 10px;"class="bluebtn" id="modal_button" type="button" data-dismiss="modal" name="button">Ok</button>

      </div>
    </div>

  </div>
</div>

<div id="appupload" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body upload">
        <img src="../img/mobile.png" />
        <h1>Please check your phone</h1>
        <p>
          We have sent you an SMS to your cell phone with a link to the APP store or Google Play. Download the app and insert the following security code there:<br /><span style="font-weight: bold; font-size: 22px; line-height: 40px;">123432</span>
        </p>
				<p>
					* The app has just 5MB and you don’t need to register.
				</p>
        <button onclick="" style="margin-bottom: 10px;"class="bluebtn" id="modal_button" type="button" data-dismiss="modal" name="button">Ok</button>

      </div>
    </div>

  </div>
</div>

<div id="upload_desktop" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body upload_desktop">
				<img src="../img/vchat.png" />
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
			<div class="col-xs-2 active">
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
				<img src="../img//finish.png" />
				<p class="pr_title ">
					finish
				</p>
			</div>



		</div>
		<h2 class="title">identification</h2>
	</div>
</div>



<!-- Loan I apply for -->
<div class="container">

	<div class="loanholder">
		<h2>Loan I apply for</h2>
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
		<div class="good">You are doing well! Only 2 more steps!</div>






        <button class="accordion" id="select_upload_button" data-toggle="collapse" data-target="">Videochat identification</button>
        <div id="expenses" class="collapse in">
					<div class="form">
						<div class="container mobile_first form" style="width: 100%; padding: 0px;">
							<div class="video">
								<p>

									We are taking your security really seriously and we need to confirm that it is really you who want to take the loan! The requirement is to see you in person over the video!</p>
							<p>
								What does the process look like?
							</p>
							<ol>
							<li>
							Get acquainted and confirm that you agree with Video identification
							</li>
							<li>
								Choose if you want to stay on desktop or you will rather do it over the phone
							</li>
							<li>
							Start the VIDEO call with our bank employee.
							</li>
							<li>
							Introduce yourself and show your ID to our bank employee.
							</li>
							<li>
							Bank employee will confirm that it is really you and you can continue in the process
							</li>
							</ol> <br />
							<div class="check">

                <label>
                  <input type='checkbox' id="employment">
                  <span></span>
                  <p style="max-width: 90%">
                    I agree that my identification will be accomplished through the VIDEO with certificated KH employee


                  </p>
                </label>
              </div>

							<div class="check">

                <label>
                  <input type='checkbox' id="employment">
                  <span></span>
                  <p style="max-width: 90%">
                    I agree that the VIDEO will be recorded for identification purposes and save it (the video will not be provided to third parties and it will be stored just for security reasons).

                  </p>
                </label>
              </div>
							<h2 style="text-align: center;">The best option to make identification is through our mobile application. The identification is really comfortable, fast and secure. </h2>
							<div data-toggle="modal" data-target="#appupload" class="box app_identification" style="margin-bottom: 60px; border-right: 1px solid #00aeef">
									<img src="../img/mobile.png" />
									<p>
										Start identification in mobile app
									</p>

							</div>



							<div  class="wayofvideo">
								<div data-toggle="modal" data-target="#upload" class="box" style="border-right: 1px solid #00aeef">
									<img src="../img/mobile.png" />
									<p>
										Start identification in mobile
									</p>

								</div>
								<div data-toggle="modal" data-target="#upload_desktop" class="box">
									<img src="../img/desktop.png" />
									<p>
										Start identification on desktop
									</p>
								</div>
							</div>





							</div>
						</div>
						<button class="bluebtn" id="select_upload_next_button" type="button" name="button">Next</button>

					</div>




					<div id="after_success" class="mailing_address">
						<p style="text-align:left" id="success_message">Data was succesfully recognized</p><br />

		          <div class="check">

		            <label>
		              <input type='checkbox' id="employment">
		              <span></span>
		              <p class="checklabel">
		                I have different mailing address than the permanent address
		              </p>
		              <p class="mailing_info">
										You acknowledge that we will enter the credit bureau and save there the data about your application
		              </p>

		            </label>
		          </div>
							<div class="city inline">
								<div class="postal inline">
									<h2>postal code</h2>
									<input type="text" class="shortest" name="firstname">

								</div>
							<div class="cit inline">

							<h2>city</h2>
							<input type="text" class="shorter" name="firstname">
						</div>

						</div>

				<div class="street">
					<div class="street_holder">
						<h2>street</h2>
						<input type="text" class="shorter" name="firstname">
								</div>
					<div class="type_of_street">
						<div class="dropdown shortest">
										<h2>type</h2>

										<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">street
										<span class="caret"></span></button>
										<ul class="dropdown-menu">
											<li><a href="#">street</a></li>
											<li><a href="#">square</a></li>
											<li><a href="#">road</a></li>

										</ul>
									</div>
					</div>
					<div class="street_number">
						 <h2>number</h2>
						 <input type="text" class="shortest" name="number">
					</div>
					<div class="floor inline">
						 <h2>floor</h2>
						 <input type="text" class="shortest" name="number">
					</div>
					<div class="door inline">
						 <h2>door</h2>
						 <input type="text" class="shortest" name="number">
					</div>

				</div>


					<button class="bluebtn next" id="select_upload_next_button" type="button" name="button">Next</button>

		        </div>


		      </div>


		      <button class="accordion collapsed" data-toggle="collapse" id="account_button" data-target=""><span class="inactive_accordion">bank account statement</span></button>
		      <div id="account" class="collapse">
		          <div class="form">
		          <p>
								Please upload account statement from your bank account from  <span style="font-weight: bold;">March 2017</span> in PDF (need to be original PDF, the picture is not enough)       </p>
		          <div class="statementholder">
								<h2>How to download the Account statement from your internet banking</h2>
		            <p>
		             To do this simply:
1.Visit mybank.com <br />
		2. Log in to Internet Banking<br />
		3. Once you're logged in, select 'statements' from the options on the left of the screen.<br />
		4. Choose a time period to view.<br />
		5. Click on "download in PDF"<br />
		            </p>




		          </div>
		          <div class="uploadbox">

		            <img src="../img/pdf.png" />
		            <p >
		Drag and drop images into this window to upload         </p>

		            <label class="custom-file-upload id_btn">
					    <input type="file" id="last_file"/>Browse for file on your computer
					</label>

		          </div>

		          <div class="uploadbox success">

		              <img src="../img/success.png" /><br />
		              <p>
		                File successfully uploaded:
		              </p>
		              <h2 id="last_file_name">accountstatement.pdf</h2>
		              <p style="text-decoration: underline;" id="delete_file">delete file</p>



		          </div>

		          <button onclick="window.location.href='approval_wrong.php'" class="bluebtn next" type="button" name="button">Next</button>

		        </div>


		    </div>


		  </div>



		    </body>

		<!-- FOOTER-->


		    <footer>
		    </footer>
