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

				<div style="padding:10px 10px 0px 15px;">
					<p style="margin-bottom: -10px;font-size: 12px;color: darkgrey;">
						Zarejestruj się, aby móc przejść dalej.
					</p>
					<div>
						<h4>
							<b>Rejestracja</b>
						</h4>
					</div>
				</div>



				<div class="row">
					<form class="col s12" action="_register.php" method="post">
						<div class="row">
							<div class="input-field col s5">
								<input id="first_name" type="text" class="validate" name="first_name"/>
								<label for="first_name">Imię</label>
							</div>

							<div class="input-field col s7">
								<input id="last_name" type="text" class="validate" name="last_name" />
								<label for="last_name">Nazwisko</label>
							</div>
						</div>

						<div class="row">
							<div class="input-field col s12">
								<input id="email" type="email" class="validate" name="email" minlength=5/ />
								<label for="email">Adres email</label>
							</div>
						</div>

						<div class="row">
							<div class="input-field col s6">
								<input id="password" type="password" class="validate" name="password"/>
								<label for="password">Hasło</label>
							</div>
							<div class="input-field col s6">
								<input id="passwordConfirm" type="password" name="passwordConfirm"/>
								<label id="lblPasswordConfirm" for="passwordConfirm" data-error="Hasła nie są takie same" data-success="Hasła są takie same">
									Powtórz hasło
								</label>
							</div>
						</div>


						<div class="row" style="margin: 0px 10px 0 10px;">
							<?php if(isset($_SESSION['password-confirmation-error'])) echo
									  '<ul class="collection">
									<li class="collection-item" style="background-color:#9c0d0d; color:white;">'
									  .$_SESSION['password-confirmation-error'].'
									</li>';
								  unset($_SESSION['password-confirmation-error']);

								  if(isset($_SESSION['register-empty-fields'])) echo
									  '<ul class="collection">
									<li class="collection-item" style="background-color:#9c0d0d; color:white;">'
									  .$_SESSION['register-empty-fields'].'
									</li>';
								  unset($_SESSION['register-empty-fields']);

								  if(isset($_SESSION['register-email-exists'])) echo
									  '<ul class="collection">
									<li class="collection-item" style="background-color:#9c0d0d; color:white;">'
									  .$_SESSION['register-email-exists'].'
									</li>';
								  unset($_SESSION['register-email-exists']);


							?>
						</div>
						
						
						<div class="row">
							<div class="input-field col s14">
								<button class="btn waves-effect waves-light" type="submit" name="action">
									Zarejestruj
									<i class="material-icons right">send</i>
								</button>
								<br />
							</div>
						</div>
						<div class="row" style="margin-left:15px">
							<a href="login.php">Wróc do logowania</a>

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

	<script>
		$("#password").on("focusout", function (e) {
			if ($(this).val() != $("#passwordConfirm").val()) {
				$("#passwordConfirm").removeClass("valid").addClass("invalid");
			} else {
				$("#passwordConfirm").removeClass("invalid").addClass("valid");
			}
		});

		$("#passwordConfirm").on("keyup", function (e) {
			if ($("#password").val() != $(this).val()) {
				$(this).removeClass("valid").addClass("invalid");
			} else {
				$(this).removeClass("invalid").addClass("valid");
			}
		});
	</script>

</body>
</html>