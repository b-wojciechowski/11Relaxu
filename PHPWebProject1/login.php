<?php





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

.login-popup 
{
	padding: 25px 25px 5px 25px;

}


@media screen and (max-width: 2500px)
{
	.login-popup
	{
		margin-top:10%;
		margin-left:35%;
		margin-right:35%;
					
	}
}

@media screen and (max-width: 1200px)
{
	.login-popup 
	{
		margin-top:5%;
		margin-left:25%;
		margin-right:25%;
		padding: 15px 15px 5px 15px;
	}
}

@media screen and (max-width: 602px)
{
	.login-popup
	{
		margin:10%;

	}

			h3 {
				font-size:24px;
			}
}



		</style>
	

</head>


<body>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
     

	<div class="login-popup" style="box-shadow: 0px 12px 39px -19px rgba(0, 0, 0, 0.75);">
		
		<div class="row" style="margin-left:10px;">

			<h3>Logowanie</h3>
			<p>Zaloguj się, aby wybrać swoją 11-stkę 50-lecia Relaxu Radziwiłłów</p>
		</div>



			<div class="row">
				<form class="col s12" action="_login.php" method="post">
					<div class="row">
						<div class="input-field col s10">
							<input id="login" type="email" class="validate" name="login" />
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
						<div class="input-field col s10">
							<button class="btn waves-effect waves-light" type="submit" name="action">
								Submit
								<i class="material-icons right">send</i>
							</button>
						</div>
					</div>

				</form>
			</div>


</div>







</body>



</html>