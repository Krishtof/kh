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
            <div class="col-xs-2 ">
              <div class="nr">
                <p>
                  5
                </p>
              </div>
              <p class="pr_title">
                Szerződés
              </p>
            </div>
            <div class="col-xs-2 active">
              <div class="nr">
                <p>
                  6
                </p>
              </div>
              <p class="pr_title ">
                Befejezés
              </p>
            </div>



          </div>
          <h2 class="title">Befejezés</h2>
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
            <div class="form finish">
              <h1>A szerződés sikeresen létrejött! Az igényelt összeg már úton is van!</h2>
              <p>
Köszönjük, hogy a K&H-t válaszottad. Bízunk benne, hogy minden egyszerűen és gyorsan ment. Az igényelt összeg néhány percen belül megérkezik a megadott számládra.              </p>


              <div class="info">

              <div class="col-md-2">
                <div class="placeholder">
                </div>
              </div>
              <div class="col-md-9"><p>
Kérjük, hogy állíts be a havi hiteltörlesztési összegednek megfelelő beszedési megbízást a(z) 12345678-12345678-12345678 számlaszámodhoz tartozó fiókodban.            </p></div>
              <div class="col-md-2">
                <div class="placeholder">
                </div>
              </div>
              <div class="col-md-9"><p>
Az általad igényelt összeg 15 percen belül megérkezik a megadott számládra. Ha bármilyen problémába ütköznél, kérjük vedd fel velünk a kapcsolatot a +36 1 123 45 67 számon.          </p></div>
              <div class="col-md-2">
                <div class="placeholder">
                </div>
              </div>
              <div class="col-md-9"><p>
Ne felejtsd el megnézni az e-mail fiókodat. Az aláírt szerződésedet és a törlesztőrészletekkel kapcsolatos dokumentumokat átküldtük neked.           </p></div>

            </div>
						<button onclick="window.location.href='hu_index.php'" class="bluebtn" type="button" name="button">Vissza a főoldalra</button>






          </div>





          </div>

        </div>








    </body>

<!-- FOOTER-->


    <footer>
    </footer>
