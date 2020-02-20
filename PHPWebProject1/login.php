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
<style>
/*@import url("https://fonts.googleapis.com/css?family=Hind:400,700");*/


</style>
</head>

<body>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<?php include 'preloader.php'; ?>    
<div class="login-popup" style="box-shadow: 0px 12px 39px -19px rgba(0, 0, 0, 0.75);">
		
	<div class="row" style="margin-left:10px;">
		<h3>Logowanie</h3>
		<p>Zaloguj się, aby wybrać swoją 11-stkę 50-lecia Relaxu Radziwiłłów</p>
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
					<label for="password">Password</label>
				</div>
			</div>


			<div class="row">
				<div class="input-field col s14">
					<button class="btn waves-effect waves-light" type="submit" name="action">
						Zaloguj
						<i class="material-icons right">send</i>
					</button>

					<button class="btn waves-effect waves-light grey" name="action">
						Zaloguj przez Facebooka
						<i class="material-icons right">exit_to_app</i>
					</button>
				</div>
			</div>
			<div class="row">
				
				<a class="btn-flat">Utwórz nowe konto</a>

			</div>

			
			<div class="row" style="margin-left:12px;">
			<?php if(isset($_SESSION['blad'])) echo $_SESSION['blad']; ?>
			</div>
			
		
		</form>
	</div>
</div>
	<center>
		<p style="padding-top:20px;color:darkgrey">	1.0.0 - GLKS Relax Radziwiłłów</p>
	</center>
</body>
</html>