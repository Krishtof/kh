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
        <link rel="stylesheet" href="css/finance.css">
        <script src="bower_components/jquery/dist/jquery.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
         <script src="js/finance.js"></script>
				 <link rel="stylesheet" href="css/font-awesome.css">

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
        <button onclick="window.location.href='/basic_contact.html'" style="margin-bottom: 10px;"class="bluebtn" type="button" name="button">I acknowledge</button>
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
		<div class="container">
			<button onclick="window.location.href='index.php'" class="bluebtn headerbtn" type="button" name="button">
				<p>
				Újrakezdés
			</p>
			<i class="fa fa-refresh" aria-hidden="true"></i>


			</button>
			<button class="bluebtn headerbtn" type="button" name="button">
				<p>
				Mentés
			</p>

			<i class="fa fa-floppy-o" aria-hidden="true"></i>

			<button class="bluebtn headerbtn" type="button" name="button">
				<p>
				Visszahívást kérek
			</p>
			<i class="fa fa-phone" aria-hidden="true"></i>

			</button>
		</div>

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
                Alapadatok
              </p>
            </div>
            <div class="col-xs-2 active">
              <div class="nr">
                <p>
                  2
                </p>
              </div>
              <p class="pr_title ">
                Személyes adatok
              </p>
            </div>
            <div class="col-xs-2">
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
            <div class="col-xs-2">
              <div class="nr">
                <p>
                  6
                </p>
              </div>
              <p class="pr_title">
                Befejezés
              </p>
            </div>



          </div>
          <h2 class="title">Személyes adatok</h2>
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
				<div class="good">Remek! Még 4 lépés és készen is vagy!</div>

        <button class="accordion  " data-toggle="collapse" id="income_button" data-target="#income">Bevétel</button>
        <div id="income" class="collapse in">
            <div class="form">

            <form>
              Rendszeres havi nettó bevétel, amelynek összegét folyószámla kivonattal tudod igazolni<br>
							<p>
								A rendszeres munkából, nyugdíjból vagy gyermekgondozásból származó jövedelmet említsd
							</p>
              <input type="text" name="firstname" class="forint" id="forint" value="0"><br>

              bevétel forrása<br />
							<p>
								több bevételi forrást is megjelölhetsz
							</p>
              <div class="check">

                <label>
                  <input type='checkbox' id="employment">
                  <span></span>
                  <p>
                    Munkabér
                  </p>
                </label>
              </div>
              <div class="from">
								<div class="dropdowns">
									<div class="dropdown">
										<h2>Munkaviszony kezdete</h2>

	                  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Év
	                  <span class="caret"></span></button>
	                  <ul class="dropdown-menu">
	                    <li><a href="#">2017</a></li>
	                    <li><a href="#">2016</a></li>
	                    <li><a href="#">2015</a></li>
	                    <li><a href="#">2014</a></li>
	                    <li><a href="#">2013</a></li>
	                    <li><a href="#">2012</a></li>
	                    <li><a href="#">2011</a></li>
	                    <li><a href="#">2010</a></li>
	                    <li><a href="#">2009</a></li>
	                    <li><a href="#">2008</a></li>
	                    <li><a href="#">2007</a></li>
	                    <li><a href="#">2006</a></li>
	                    <li><a href="#">2005</a></li>
	                    <li><a href="#">2004</a></li>
	                    <li><a href="#">2003</a></li>
	                    <li><a href="#">2002</a></li>
	                    <li><a href="#">2001</a></li>
	                    <li><a href="#">2000</a></li>
	                    <li><a href="#">longer</a></li>

	                  </ul>
	                </div>
									<div class="dropdown">

	                  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Hónap
	                  <span class="caret"></span></button>
	                  <ul class="dropdown-menu">
	                    <li><a href="#">January</a></li>
	                    <li><a href="#">February</a></li>
	                    <li><a href="#">March</a></li>
	                    <li><a href="#">April</a></li>
	                    <li><a href="#">May</a></li>
	                    <li><a href="#">June</a></li>
	                    <li><a href="#">July</a></li>
	                    <li><a href="#">August</a></li>
	                    <li><a href="#">September</a></li>
	                    <li><a href="#">October</a></li>
	                    <li><a href="#">November</a></li>
	                    <li><a href="#">December</a></li>
	                  </ul>
	                </div>
								</div>





								<input class="mobile_cal" type="date" name="lastname">

                <div class="check">

                  <label>
                    <input type='checkbox'>
                    <span></span>
                    <p>
                      Kijelentem, hogy nem állok próbaidő vagy felmondás alatt.
                    </p>
                  </label>
                </div>
              </div>



              <div class="check">

                <label>
                  <input type='checkbox'>
                  <span></span>
                  <p>
                    TGYÁS/GYED/GYES
                  </p>
                </label>
              </div>

							<div class="check">

                <label>
                  <input type='checkbox'>
                  <span></span>
                  <p>
                    egyéni vállalkozó
                  </p>
                </label>
              </div>

              <div class="check">

                <label>
                  <input type='checkbox'>
                  <span></span>
                  <p>
                    Nyugdíj
                  </p>
                </label>
              </div>


              <div class="check">

                <label>
                  <input type='checkbox'>
                  <span></span>
                  <p>
                    Egyéb
                  </p>
                </label>
              </div>


            </form>

            </form>

            <button class="bluebtn" type="button" data-toggle="collapse"  data-target="#income" name="button" id="income_next">Tovább</button>

          </div>

        </div>




        <button class="accordion collapsed  " data-toggle="collapse" id="expenses_button" data-target="">Kiadások</button>
        <div id="expenses" class="collapse">
            <div class="form">

            <form class="expenses">
              Havi törlesztőrészlet:<br>
							<p>
								Abban az esetben, ha már van másik hiteled
							</p>
              <input type="text" name="firstname" value="0"><br>
              Rendszeres egyéb havi kiadások:<br>
							<p>
								mint például közüzemi számlák, lakbér, ételre vagy gyógyszerekre fordított összeg, stb.
							</p>
              <input type="text" name="lastname" value="0">
            </form>

            </form>

            <button class="bluebtn" type="button" id="expense_next" data-toggle="collapse"  data-target="#expenses" name="button">Tovább</button>

          </div>

        </div>



        <button class="accordion collapsed  " data-toggle="collapse"  id="housing_button" data-target="">Lakhatás</button>
        <div id="Housing" class="collapse">
            <div class="form housing">
							<form>
              <h2>Típus</h2>
              <div class="radio">
                <input type="radio" id="r1" name="rr" />
                <label for="r1">Bérelt ingatlanban élek</label>
              </div>
              <div class="radio">
                <input type="radio" id="r2" name="rr" />
                <label for="r2">Saját ingatlanban élek</label>
              </div>



              <div class="radio">
                <input type="radio" id="r2" name="rr" />
                <label for="r2">Egyb</label>
              </div>
							</form>


              <h2 style="margin-top: 40px;">Mióta laksz ebben az ingatlanban?</h2>
              <div class="radio">
								<form>
                <input type="radio" id="r1" name="rr" />
                <label for="r1">0-1 év</label>
              </div>
              <div class="radio">
                <input type="radio" id="r2" name="rr" />
                <label for="r2">1-3 év</label>
              </div>

              <div class="radio">
                <input type="radio" id="r2" name="rr" />
                <label for="r2">3-6 év</label>
              </div>

              <div class="radio">
                <input type="radio" id="r2" name="rr" />
                <label for="r2">6+ év</label>
              </div>


            </form>

            <button class="bluebtn" type="button" data-toggle="collapse"  data-target="#Housing" id="housing_next" name="button">Tovább</button>

          </div>

        </div>




        <button class="accordion collapsed  " data-toggle="collapse"  id="family_button" data-target="">Családi állapot és végzettség</button>
        <div id="family" class="collapse">

              <div class="form family">
                <h2>Legmagasabb iskolai végzettség</h2>
								<form>
                <div class="radio">
                  <input type="radio" id="r1" name="rr" />
                  <label for="r1">Általános iskola</label>
                </div>
                <div class="radio">
                  <input type="radio" id="r2" name="rr" />
                  <label for="r2">Gimnázium</label>
                </div>

                <div class="radio">
                  <input type="radio" id="r2" name="rr" />
                  <label for="r2">Szakközépiskola</label>
                </div>

                <div class="radio">
                  <input type="radio" id="r2" name="rr" />
                  <label for="r2">Szakiskola/szakmunkásképző</label>
                </div>

                <div class="radio">
                  <input type="radio" id="r2" name="rr" />
                  <label for="r2">Főiskola/egyetem</label>
                </div>
								</form>


                <h2 style="margin-top: 40px;">Családi állapot</h2>
								<form>
                <div class="radio">
                  <input type="radio" id="r1" name="rr" />
                  <label for="r1">Egyedülálló</label>
                </div>
                <div class="radio">
                  <input type="radio" id="r2" name="rr" />
                  <label for="r2">Házas / bejegyzett élettársi kapcsolat </label>
                </div>

                <div class="radio">
                  <input type="radio" id="r2" name="rr" />
                  <label for="r2">Egyéb (párkapcsolat, élettársi kapcsolat, özvegy, elvált)</label>
                </div><br />
							</form>

                <h2>Eltartottak száma:</h2><br>
								<p>
									A hiteligénylő nem számít eltartottnak
								</p>
                <input class="shorter" type="text" name="firstname" value="0"><br>

                <h2>Kiemelt közszereplő vagyok</h2><br>
                <p>Kiemelt közszereplő az a természetes személy, aki fontos közfeladatot lát el, vagy az ügyfél-átvilágítási intézkedések elvégzését megelőző egy éven belül fontos közfeladatot látott el, például:  államfő, kormányfő, miniszter, miniszterhelyettes, államtitkár. A kiemelt közszereplők teljes listáját itt találod. </p>
								<form>
								<div class="radio">
									<input type="radio" id="r1" name="rr" />
									<label for="r1">Igen</label>
								</div>
								<div class="radio">
									<input type="radio" id="r2" name="rr" />
									<label for="r2">Nem </label>
								</div>


                </form>

                <button class="bluebtn family_next" type="button" data-toggle="collapse"  data-target="#family" id="family_next" name="button">Tovább</button>

              </div>




        </div>




        <button class="accordion collapsed  " data-toggle="collapse"  id="bank_button" data-target="">Bankszámlára vonatkozó adatok</button>
        <div id="bank" class="collapse">
            <div class="form">

            <form>
              <h2>Kérjük, add meg bankszámlaszámod</h2>
              <p>
Azt a számlaszámodat add meg, ahova a jövedelmed érkezik* *ha több számlát is használsz, akkor azt add meg, amelyre a jövedelmed nagyobb része érkezik <br /><br />Egy kis összegű jóváírást küldünk a számládra, hogy ellenőrizzük az érvényességét. A mostani szerződéskötési folyamat során ennek a jóváírásnak a közleményben szereplő kódjára még szükséged lesz!             </p>
            </form>
            <input placeholder="" class="shorter bankaccount"type="text" maxlength="8"  name="firstname">
            <input placeholder=""class="shorter bankaccount"type="text"  maxlength="8" name="firstname">
            <input placeholder=""class="shorter bankaccount"type="text"  maxlength="8" name="firstname">
						<div class="nokh">
							<img src="img/ok.png" />
							<p>
									Már a bankunk ügyfele vagy! Nagyszerű, amennyiben a jövedelmedet is igazolod a hiteled kamata 2%-kal kedvezőbb lesz! A további lépésekben már ezzel a kedvezményes kamattal számolunk.
							</p>

						</div>

            <button onclick="window.location.href='hun_Statements_m_02.php'" class="bluebtn" type="button" name="button">Tovább</button>

          </div>

        </div>





      </div>

  </div>



    </body>

<!-- FOOTER-->


    <footer>
    </footer>
