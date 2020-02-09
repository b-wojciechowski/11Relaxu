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


	

</head>


<body>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
     

	
<div class="row">
	<form class="col s12" action="_login.php" method="post">
		<div class="row">
			<div class="input-field col s10">
				<input  id="login" type="email" class="validate" name="login" />
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




</body>



</html>