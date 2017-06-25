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
        <a class="dont" href="#">I don't acknowledge</a>

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
        <a class="dont" href="#">I don't acknowledge</a>

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
					Alapadatok
				</p>
			</div>
			<div class="col-xs-2 ">
				<div class="nr">
					<p>
						2
					</p>
				</div>
				<p class="pr_title ">
					Személyes adatok
				</p>
			</div>
			<div class="col-xs-2 active">
				<div class="nr">
					<p>
						3
					</p>
				</div>
				<p class="pr_title">
					Azonosítás
				</p>
			</div>
			<div class="col-xs-2">
				<div class="nr">
					<p>
						4
					</p>
				</div>
				<p class="pr_title">
					Jóváhagyás
				</p>
			</div>
			<div class="col-xs-2">
				<div class="nr">
					<p>
						5
					</p>
				</div>
				<p class="pr_title">
					Szerződéskötés
				</p>
			</div>
			<div class="col-xs-2 last">
				<img src="../img//finish.png" />
				<p class="pr_title ">
					Befejezés
				</p>
			</div>



		</div>
		<h2 class="title">Azonosítás</h2>
	</div>
</div>



<!-- Loan I apply for -->
<div class="container">

	<div class="loanholder">
		<h2>Hitel részletei</h2>
		<div class="amount">
			<p>
				Hitelösszeg
			</p>
			<h1><?=$_SESSION["loan_amount"]?> Ft</h1>
		</div>
		<div class="info">

			<div class="instalments">
				<h2>Törlesztőrészlet:</h2>
				<p><?=$_SESSION["loan_instalments"]?> Ft</p>
			</div>
			<div class="instalments">
				<h2>Futamidő:</h2>
				<p><?=$_SESSION["repaid_in"]?> hónap</p>
			</div>
		</div>
	</div>

</div>

<!-- form -->

<div class="container">
	<div class="form nopadding">
		<div class="good">Remek! Még 2 lépés és készen is vagy!</div>






        <button class="accordion" id="select_upload_button" data-toggle="collapse" data-target="">Videochat azonosítás</button>
        <div id="expenses" class="collapse in">
					<div class="form">
						<div class="container mobile_first form" style="width: 100%; padding: 0px;">
							<div class="video">
								<p>

								A következőnkben a K&H egyik kollégája segítségével videóchates azonosítást fogunk végrehajtani. Kérjük, készítsd elő a személyazonosító igazolványodat és a lakcímkártyádat!
							Azonosításod a következő lépésekből áll majd: </p>
							<ol>
							<li>
							Az azonosítás megkezdésekor engedélyezned kell számítógépeden a webkamera és a mikrofon bekapcsolását.
							</li>
							<li>
							Ezután kollégánk hamarosan bejelentkezik videóchaten, és a következőket fogja tőled kérni:
							<ul>
							<li>
							Mutasd fel a személyi igazolványod mindkét oldalát, hogy be tudjunk azonosítani a személyazonosságod!
							</li>
							<li>
							Mutasd fel a lakcímkártyádnak azt a felét, amely a lakcímadataidat tartalmazza!
							</li>
							</ul>
							</li>
							<li>
							A sikeres azonosítás után tovább tudod folytatni a hiteligénylés folyamatát.
							</li>
							</ol> <br />
							<div  class="wayofvideo">
								<div data-toggle="modal" data-target="#upload" class="box" style="border-right: 1px solid #00aeef">
									<img src="../img/mobile.png" />
									<p>
										Azonosítás indítása mobilon
									</p>

								</div>
								<div onclick="window.location.href='skype:username?call'" class="box">
									<img src="../img/desktop.png" />
									<p>
										Azonosítás indítása számítógépen
									</p>
								</div>
							</div>





							</div>
						</div>
						<button class="bluebtn" id="select_upload_next_button" type="button" name="button">Következő</button>

					</div>




					<div id="after_success" class="mailing_address">
						<p style="text-align:left" id="success_message">Adatait sikeresen felismertük</p><br />

		          <div class="check">

		            <label>
		              <input type='checkbox' id="employment">
		              <span></span>
		              <p class="checklabel">
		                Az állandó lakcímemtől eltérő levelezési címet adok meg
		              </p>
		              <p class="mailing_info">
										Hozzájárulsz, hogy az igénylésed adatait a KHR részére átadjuk.
		              </p>

		            </label>
		          </div>
							<div class="city inline">
								<div class="postal inline">
									<h2>Irányítószám</h2>
									<input type="text" class="shortest" name="firstname">

								</div>
							<div class="cit inline">

							<h2>Város</h2>
							<input type="text" class="shorter" name="firstname">
						</div>

						</div>

				<div class="street">
					<div class="street_holder">
						<h2>Utca</h2>
						<input type="text" class="shorter" name="firstname">
								</div>
					<div class="type_of_street">
						<div class="dropdown shortest">
										<h2>Típusa</h2>

										<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Utca
										<span class="caret"></span></button>
										<ul class="dropdown-menu">
											<li><a href="#">utca</a></li>
											<li><a href="#">tér</a></li>
											<li><a href="#">út</a></li>

										</ul>
									</div>
					</div>
					<div class="street_number">
						 <h2>házszám</h2>
						 <input type="text" class="shortest" name="number">
					</div>
					<div class="floor inline">
						 <h2>emelet</h2>
						 <input type="text" class="shortest" name="number">
					</div>
					<div class="door inline">
						 <h2>ajtó</h2>
						 <input type="text" class="shortest" name="number">
					</div>

				</div>


					<button class="bluebtn next" id="select_upload_next_button" type="button" name="button">Tovább</button>

		        </div>


		      </div>


		      <button class="accordion collapsed" data-toggle="collapse" id="account_button" data-target="">Bankszámlakivonat</button>
		      <div id="account" class="collapse">
		          <div class="form">
		          <p>
								kérjük, töltsd fel a <span style="font-weight: bold;">2017. márciusi</span> bankszámlakivonatodat (azt a pdf-et, amelyet az internetbankról töltöttél le)       </p>
		          <div class="statementholder">
								<h2>Hogyan tudom letölteni a bankszámla kivonatomat az e-bankomból?</h2>
		            <p>
		              1. Látogass el a mybank.com-ra <br />
		2. Jelentkezz be az e-bankba<br />
		3. A bejelentkezés után válaszd a "bankszámlatörténet" menüpontot<br />
		4. Válaszd ki az időszakot<br />
		5. Kattints a "PDF letöltése" gombra<br />
		            </p>




		          </div>
		          <div class="uploadbox">

		            <img src="../img/pdf.png" />
		            <p >
		A feltölteni kívánt PDF dokumentumot húzd ide a kijelölt területre         </p>

		            <label class="custom-file-upload id_btn">
					    <input type="file" id="last_file"/>Dokumentum feltöltése a számítógépről
					</label>

		          </div>

		          <div class="uploadbox success">

		              <img src="../img/success.png" /><br />
		              <p>
		                Fájl sikeresen feltöltve:
		              </p>
		              <h2 id="last_file_name">accountstatement.pdf</h2>
		              <p style="text-decoration: underline;" id="delete_file">Fájl törlése</p>



		          </div>

		          <button onclick="window.location.href='hu_approval_wrong.php'" class="bluebtn next" type="button" name="button">Tovább</button>

		        </div>


		    </div>


		  </div>



		    </body>

		<!-- FOOTER-->


		    <footer>
		    </footer>
