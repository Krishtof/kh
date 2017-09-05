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

         <script src="../js/finance.js"></script>
				 <link rel="stylesheet" href="../css/font-awesome.css">
				 <link rel="stylesheet" href="../css/finance.css">

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
			<div class="chat">
				<i class="fa fa-comments" aria-hidden="true"></i>
			</div>
			<div class="openchat" style="display: none;">
				<div class="header">
					<div class="green"></div>
					<h2>Customer service</h2>
					<i class="fa fa-times closechat" aria-hidden="true"></i>
				</div>
				<div class="cbody">
					<h2>Welcome! How can we help you?</h2>
				</div>
				<div class="type">
					<input class="chatwithme" placeholder="Ide írjon" />
				</div>
				<script>


				$('.chat').on('click',function(){
					$('.openchat').addClass('block');

				});
				$('.closechat').on('click',function(){
					$('.openchat').addClass('hide');

				});
				$('.closechat').on('click',function(){
					$('.openchat').removeClass('block');

				});


				</script>
			</div>
<!-- HEADER -->
<div class="header">
	<div class="subheader">
	</div>
	<div class="sec_subheader">
		<div class="container">
			<button onclick="window.location.href='index.php'" class="bluebtn headerbtn" type="button" name="button">
				<p>
				Edit
			</p>
			<i class="fa fa-edit" aria-hidden="true"></i>


			</button>

		</div>
		<div class="container">
			
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
            <div class="col-xs-2 active">
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
            <div class="col-xs-2">
              <div class="nr">
                <p>
                  6
                </p>
              </div>
              <p class="pr_title">
                finish
              </p>
            </div>



          </div>
          <h2 class="title">about you</h2>
        </div>
      </div>


<!-- Loan I apply for -->
    <div class="container">

			<div class="loanholder">
        <h2>Loan I apply for</h2>
        <div class="amount">
          <p>
            loan amount:
          </p>
          <h1><?=$_SESSION["loan_amount"]?> Ft</h1>
        </div>
        <div class="info">

          <div class="instalments">
            <h2>monthly installment I want:</h2>
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
				<div class="good">You are doing well! Only 4 more steps</div>

		 <button class="accordion" data-toggle="collapse" id="new_button" data-target="#new">Target of your loan</button>
		 <div id="new" class="collapse in">
            <div class="form">
							<h2>Please chose a target</h2>
							<form>


							<div class="radio">
								<input type="radio" id="r1" name="rr" />
								<label for="r1">Renewal</label>
							</div>




							<div class="radio">
								<input type="radio" id="r2" name="rr" />
								<label for="r2">Car purchase</label>
							</div>

							<div class="radio">
								<input type="radio" id="r3" name="rr" />
								<label for="r3">Debt consolidation</label>
							</div>

							<div class="radio">
								<input type="radio" id="r4" name="rr" />
								<label for="r4">Other non-perish consum goods</label>
							</div>

							<div class="radio">
								<input type="radio" id="r5" name="rr" />
								<label for="r5">Real estate - Building or buying</label>
							</div>
							<div class="radio">
								<input type="radio" id="r6" name="rr" />
								<label for="r6">Other family event</label>
							</div>
							<div class="radio">
								<input type="radio" id="r7" name="rr" />
								<label for="r7">Other</label>
							</div>
							</form>

							<button class="bluebtn" type="button" data-toggle="collapse"  data-target="#new" name="button" id="new_next">
								<span>Next</span>
								<img class="arrow" src="../img/arr_dwn.png"/>
							</button>
          </div>

        </div>

        <button class="accordion  collapsed inactive" data-toggle="collapse" id="income_button" data-target="#income"><span class="inactive_accordion">income</span></button>
        <div id="income" class="collapse ">
            <div class="form">

            <form>
              your regular monthly net income<br>
							<p>
								insert just income from regular employment, pension or maternity
							</p>
              <input type="text" name="firstname" class="forint" id="forint" value="0"><br>

              source of income<br />
							<p>
								you can choose more than one option
							</p>
              <div class="check">

                <label>
                  <input type='checkbox' id="employment">
                  <span></span>
                  <p>
                    employment
                  </p>
                </label>
              </div>
              <div class="from">
								<div class="dropdowns">
									<div class="dropdown">
										<h2>Current employment form</h2>

	                  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">year
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

	                  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">month
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




								<h2 class="mobile_cal" style="padding: 0px !important;">Current employment form</h2>
								<input class="mobile_cal" type="date" name="lastname">

                <div class="check">

                  <label>
                    <input type='checkbox'>
                    <span></span>
                    <p>
                      I confirm that I am neither in probation or trial period
                    </p>
                  </label>
                </div>
              </div>



              <div class="check">

                <label>
                  <input type='checkbox'>
                  <span></span>
                  <p>
                    maternity
                  </p>
                </label>
              </div>

							<div class="check">

                <label>
                  <input type='checkbox'>
                  <span></span>
                  <p>
                    self-employment
                  </p>
                </label>
              </div>

              <div class="check">

                <label>
                  <input type='checkbox'>
                  <span></span>
                  <p>
                    pension
                  </p>
                </label>
              </div>


              <div class="check">

                <label>
                  <input type='checkbox' id="income_other">
                  <span></span>
                  <p>
                    other
                  </p>
                </label>
              </div>
             <input type="text" name="other_income" class="forint hidden-xs hidden-sm hidden-md hidden-lg" id="forint" >


            </form>

            </form>


						<button class="bluebtn" type="button" data-toggle="collapse"  data-target="#income" name="button" id="income_next">
							<span>Next</span>
							<img class="arrow" src="../img/arr_dwn.png"/>
						</button>
          </div>

        </div>




        <button class="accordion collapsed inactive" data-toggle="collapse" id="expenses_button" data-target=""><span class="inactive_accordion">expenses</span></button>
        <div id="expenses" class="collapse">
            <div class="form">

            <form class="expenses">
              regular loan instalments<br>
							<p>
								just if you are already paying other loan installments
							</p>
              <input type="text" name="firstname" value="0"><br>
              regular monthly expenses:<br>
							<p>
								It contains regular monthly expenses on housing, food, medicaments etc.
							</p>
              <input type="text" name="lastname" value="0">
            </form>

            </form>


						<button class="bluebtn" type="button" id="expense_next" data-toggle="collapse"  data-target="#expenses" name="button">
							<span>Next</span>
							<img class="arrow" src="../img/arr_dwn.png"/>
						</button>

          </div>

        </div>



        <button class="accordion collapsed  inactive" data-toggle="collapse"  id="housing_button" data-target=""><span class="inactive_accordion">housing</span></button>
        <div id="Housing" class="collapse">
            <div class="form housing">
							<form>
              <h2>type</h2>
              <div class="radio">
                <input type="radio" id="r1" name="rr" />
                <label for="r1">Owner</label>
              </div>
              <div class="radio">
                <input type="radio" id="r2" name="rr" />
                <label for="r2">Co-owner</label>
              </div>



              <div class="radio">
                <input type="radio" id="r3" name="rr" />
                <label for="r3">Family member</label>
              </div>

							<div class="radio">
								<input type="radio" id="r4" name="rr" />
								<label for="r4">Lodge/Tenant</label>
							</div>

							<div class="radio">
								<input type="radio" id="r5" name="rr" />
								<label for="r5">Other</label>
							</div>

							</form>


              <h2 style="margin-top: 40px;">length of living on current address</h2>
              <div class="radio">
								<form>
                <input type="radio" id="r1" name="rr" />
                <label for="r1">0-1 year</label>
              </div>
              <div class="radio">
                <input type="radio" id="r2" name="rr" />
                <label for="r2">1-3 year</label>
              </div>

              <div class="radio">
                <input type="radio" id="r2" name="rr" />
                <label for="r2">3-6 year</label>
              </div>

              <div class="radio">
                <input type="radio" id="r2" name="rr" />
                <label for="r2">6+ year</label>
              </div>


            </form>



						<button class="bluebtn" type="button" data-toggle="collapse"  data-target="#Housing" id="housing_next" name="button">
							<span>Next</span>
							<img class="arrow" src="../img/arr_dwn.png"/>
						</button>


          </div>

        </div>



        <button class="accordion collapsed  inactive" data-toggle="collapse"  id="family_button" data-target=""><span class="inactive_accordion">family and education</span></button>
        <div id="family" class="collapse">

              <div class="form family">
                <h2>level of education</h2>
								<form>
                <div class="radio">
                  <input type="radio" id="r1" name="rr" />
                  <label for="r1">Low (Elementary, Vocational Training)</label>
                </div>
                <div class="radio">
                  <input type="radio" id="r2" name="rr" />
                  <label for="r2">Medium (Technical College, High School)</label>
                </div>

								<div class="radio">
                  <input type="radio" id="r3" name="rr" />
                  <label for="r3">High (College, University, Academic)</label>
                </div>
								</form>


                <h2 style="margin-top: 40px;">martial status</h2>
								<form>
                <div class="radio">
                  <input type="radio" id="r1" name="rr" />
                  <label for="r1">Married</label>
                </div>
                <div class="radio">
                  <input type="radio" id="r2" name="rr" />
                  <label for="r2">Single</label>
                </div>

                <div class="radio">
                  <input type="radio" id="r3" name="rr" />
                  <label for="r3">Widow</label>
                </div>

								<div class="radio">
                  <input type="radio" id="r4" name="rr" />
                  <label for="r4">Divorced</label>
                </div>

								<div class="radio">
                  <input type="radio" id="r5" name="rr" />
                  <label for="r5">Common law marriage</label>
                </div>
								<br />
							</form>

                <h2>How many dependents do you have?</h2>
								<p>
									Number of persons which relies on you for financial support.
								</p><br>

                <input class="shorter" type="text" name="firstname" value="0"><br>



                </form>




								<button class="bluebtn family_next" type="button" data-toggle="collapse"  data-target="#family" id="family_next" name="button">
									<span>Next</span>
									<img class="arrow" src="../img/arr_dwn.png"/>
								</button>


              </div>




        </div>




        <button class="accordion collapsed  inactive" data-toggle="collapse"  id="bank_button" data-target=""><span class="inactive_accordion">bank account</span></button>
        <div id="bank" class="collapse">
            <div class="form">

            <form>
              <h2>your current account number</h2>
              <p>
Insert your account number where you are receiving the salary <br /><br />We will send to your account a small amount validation payment via our account. You will need reference code from this payment as signature at the end of this application             </p>
            </form>
            <input placeholder="________" class="shorter bankaccount"type="text" maxlength="8"  name="firstname">
            <input placeholder="________" class="shorter bankaccount"type="text"  maxlength="8" name="firstname">
            <input placeholder="________" class="shorter bankaccount"type="text"  maxlength="8" name="firstname">
						<div class="nokh">
							<img src="../img/ok.png" />
							<p>
									You are banking with us! Great news after we will verify your income what you provided to us your loan's interest rate will be 2% lower.
							</p>

						</div>




								<div class="panel-group" id="accordion">
								  <div class="panel panel-default">
								    <div class="panel-heading">
								      <h4 class="panel-title">
								        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
								          What does the payment look like?
								        </a>
								      </h4>
								    </div>
								    <div id="collapseOne" class="panel-collapse collapse">
								      <div class="panel-body">
												<p class="accountdesc">
													The payment will appear on your bank account as the one here below:
												</p>
												<img class="accountimg" src="../img/account.png" />								      </div>
								    </div>
									</div>

						<button  onclick="window.location.href='Statements.php'" class="bluebtn next" type="button" name="button">
							<span>Next</span>
							<img class="arrow" src="../img/arr_right.png"/>
						</button>




          </div>

        </div>





      </div>

  </div>



    </body>

<!-- FOOTER-->


    <footer>
    </footer>
