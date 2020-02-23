<?php
include 'configuration.php';
session_start();

if ((isset($_POST['login'])) || (isset($_POST['password'])))
{
	header('Location: index.php');
	exit();
}
?>
<html>
<head>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<style></style>
</head>

<body>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>

	<?php include 'preloader.php'; ?>

	<div class="row">

		<div class="col s12" style="padding:0px;">
			<!--START MENU-->
			<?php include 'menu_login.php'; ?>
			<!--KONIEC MENU-->
		</div>

		<div class="col s12 m4 l4 hide-on-med-and-down"></div>

		<div class="col s12 m4 l4" style="padding:0px;">
			<div class="" style="background-color:white; margin-top:10px;">

				<div style="padding:10px 10px 0px 25px;">
					<p style="margin-bottom: -10px;font-size: 12px;color: darkgrey;">
						Aby przejść dalej wymagane jest zalogowanie.
					</p>
					<div>
						<h4>
							<b>Logowanie</b>
						</h4>
					</div>
				</div>

				<div class="row" style="margin: 0px 10px 0 10px;">


					<ul class="collection">
						<li class="collection-item" style="background-color:#2e7d32; color:white;">
							Twoje konto zostało utworzone. Zaloguj się. 
						</li>
					</ul>
		
                
				</div>

				<div class="row">
					<form class="col s12" action="_login.php" method="post">
						<div class="row">
							<div class="input-field col s10">
								<input id="login" type="email" class="validate" name="login" minlength=5/ />
								<label for="first_name">Adres email</label>
							</div>
						</div>

						<div class="row">
							<div class="input-field col s10">
								<input id="password" type="password" class="validate" name="password" />
								<label for="password">Hasło</label>
							</div>
						</div>


						<div class="row">
							<div class="input-field col s14">
								<button class="btn waves-effect waves-light" type="submit" name="action">
									Zaloguj
									<i class="material-icons right">send</i>
								</button>
								<br />
							</div>
							<div class="input-field col s14">
								<button class="btn waves-effect waves-light grey" type="submit" name="action">
									Zaloguj przez Facebooka
									<i class="material-icons right">send</i>
								</button>
								<br />
							</div>

						</div>

						<div class="row" style="margin-left:12px;">

							<a href="register.php" class="">Utwórz nowe konto (rejestracja)</a>
							<br />
							<a href="register.php" class="">Przypomnij moje hasło</a>

						</div>


						<div class="row" style="margin: 0px 10px 0 10px;">
							<?php if(isset($_SESSION['blad'])) echo
									  '<ul class="collection">
									<li class="collection-item" style="background-color:#9c0d0d; color:white;">'
									  .$_SESSION['blad'].'
									</li>';
								  unset($_SESSION['blad'])

                            ?>
						</div>


					</form>

				</div>



			</div>

		</div>

		<div class="col s12 m4 l3 hide-on-med-and-down"></div>
	</div>


	<div class="row">
		<div class="col s12 m4 l4 hide-on-med-and-down"></div>
		<div class="col s12 m4 l4">
			<?php include 'footer.php'; ?>
		</div>
		<div class="col s12 m4 l3 hide-on-med-and-down"></div>
	</div>


	<script>
	(function ($) {
		$(function () {

			$('.button-collapse').sideNav({
				edge: 'left', // Choose the horizontal origin
				closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
				draggable: true // Choose whether you can drag to open on touch screens
			}
			);

		}); // end of document ready
	})(jQuery); // end of jQuery name space
	</script>


	<script>
	$(document).ready(function () {
		$('.collapsible').collapsible();
	});
	</script>

</body>
</html>