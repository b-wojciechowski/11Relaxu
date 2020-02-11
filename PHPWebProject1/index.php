<?php
include 'configuration.php';
session_start();
?>
<!DOCTYPE html>
<html>

<head>
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<!--<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>-->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.min.css">
<script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>
<style>
/*@import url("https://fonts.googleapis.com/css?family=Hind:400,700");*/
html, body {
	margin: 0;
	padding: 0;
	background-color: #efefef;
	width: 100%;
	height: 100%;
}
.instructionTitle 
{
	font-size:25px;
	margin-bottom:-10px;
}
.instructionText 
{
	font-size:12px;
	margin-bottom:0px;
}

.instructionContainer 
{
	margin-left:10px; 
	float:left; 
	
}

@media screen and (max-width: 800px)
{
	.instructionTitle 
	{
		font-size:18px;
		margin-bottom:-10px;
	}

	.instructionText 
	{
		font-size:11px;
		margin-bottom:0px;
	}

	.instructionContainer 
{
	margin-left:10px; 
	float:left; 
	width: 400px;
}

}


 .carousel-wrapper {
	position: relative;
	width: 70%;
	height: 80%;
	top: 45%;
	left: 50%;
	transform: translate(-50%, -50%);
	background-color: #FFFFFF;
	/* background-image: linear-gradient(#FFFFFF 50%, #FFFFFF 50%, #F0F3FC 50%); */
	box-shadow: 0px 12px 39px -19px rgba(0, 0, 0, 0.75);
	overflow: hidden;
}
@media screen and (max-width: 1400px)
{
	.carousel-wrapper
	{
		width: 90%;
		height: 85%;
	}
}
.carousel-wrapper .carousel {
	position: absolute;
	top: 55%;
	transform: translateY(-50%);
	width: 100%;
	height: auto;
	padding-bottom:50px;
	padding-top:50px;
}
	.carousel-wrapper .carousel .carousel-cell {
		/*padding: 10px;*/
		background-color: #FFFFFF;
		width: 20%;
		height: auto;
		min-width: 200px;
		margin: 0 20px;
		transition: transform 500ms ease;
	}

		.carousel-wrapper .carousel .carousel-cell .more {
			display: block;
			opacity: 0;
			margin: 5px 0 0px 0;
			text-align: center;
			font-size: 10px;
			color: #CFCFCF;
			text-decoration: none;
			transition: opacity 300ms ease;
		}
.carousel-wrapper .carousel .carousel-cell .more:hover, .carousel-wrapper .carousel .carousel-cell .more:active,
.carousel-wrapper .carousel .carousel-cell .more:visited, .carousel-wrapper .carousel .carousel-cell .more:focus {
	color: #CFCFCF;
	text-decoration: none;
}
.carousel-wrapper .carousel .carousel-cell .line {
	position: absolute;
	width: 2px;
	height: 0;
	background-color: black;
	left: 50%;
	margin: 5px 0 0 -1px;
	transition: height 300ms ease;
	display: block;
            }         
.carousel-wrapper .carousel .carousel-cell .price {
	position: absolute;
	font-weight: 700;
	margin: 45px auto 0 auto;
	left: 50%;
	transform: translate(-50%);
	opacity: 0;
	transition: opacity 300ms ease 300ms;
}

.carousel-wrapper .carousel .carousel-cell.is-selected {
	transform: scale(1.2);
}
.carousel-wrapper .carousel .carousel-cell.is-selected .line {
	height: 35px;
}
.carousel-wrapper .carousel .carousel-cell.is-selected .price, .carousel-wrapper .carousel .carousel-cell.is-selected .more {
	opacity: 1;
}
.carousel-wrapper .flickity-page-dots {
	display: none;
}
.carousel-wrapper .flickity-viewport, .carousel-wrapper .flickity-slider {
	overflow: visible;
	    /*transform: translateX(-20.24%);*/
}
</style>
</head>

<body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>


<nav>
	<div class="nav-wrapper" style="background-color:#232323">
      <a href="#!" class="brand-logo" style="padding-left:25px">Relax Radziwiłłów</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		  
			<ul class="right hide-on-med-and-down">
				
				<li><a href="mobile.html">
						<i class="material-icons left">insert_chart</i>Rankingi
					</a>
				</li>
				
				<li><a href="mobile.html">
						<i class="material-icons left">people</i>Moja 11-stka 
					</a>
				</li>
				
				
				
				
				<li><a class="modal-trigger" href="#modal2_help">
						<i class="material-icons left">help_outline</i>Pomoc 
					</a>
				</li>

				<li><a href="mobile.html">
					<div><i class="material-icons left">person</i>

					Zalogowany: 
					<?php echo ' '.$_SESSION['Name']; ?>
					</div>
					</a>
				</li>
			</ul>

			<ul class="side-nav" id="mobile-demo">
				
				<li><a href="mobile.html">
						<i class="material-icons left">insert_chart</i>Rankingi
					</a>
				</li>
				<li><a href="badges.html">Components</a></li>
				<li><a href="collapsible.html">Javascript</a></li>
				<li><a href="mobile.html">
					Zalogowany: 
					<?php
					echo $_SESSION['Name'];
                    ?>
					</a>
				</li>
			</ul>
    </div>
</nav>
  
	

	<div class="carousel-wrapper">
		<div class="row" style="padding:7px; background-color:white;margin-bottom:0px!important">
					<div>
						<div class="col s8 instructionContainer">
						<div class="instructionTitle"><b>Wybierz 4 obrońców</b> (krok 1 z 4)</div>
						<p class="instructionText">Zaznacz "Jedenastka 50-lecia" na kartach 4 wybranych zawodników a następnie kliknij <b>"Przejdź dalej"</b>.</p>
						</div>
						<div class="col s4" style="float:right; padding-top:10px">
								 <button class="btn-large waves-effect waves-light" type="submit" name="action" style="float:right">Przejdź dalej
									<i class="material-icons right">navigate_next</i>
								 </button>


						</div>
					
					</div>
					
		</div>  
		<hr>
		<div class="carousel" data-flickity='{ "initialIndex": 3, "autoPlay": 7500, "wrapAround": true }' style="margin:10px;">

			<?php
			require_once "sql/connection.php";
			include 'tools/tools.php';
			$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0)
			{
				echo 'Error: '.$polaczenie->connect_errno. ' Opis: '.$polaczenie->connect_error;
			}
			$sql = "SELECT Id, Name, Lastname, Position, Votes, DateFrom, DateTo FROM Players order by rand();";
			$result = $polaczenie->query($sql);

			if ($result->num_rows > 0)
			{

				// output data of each row
				while($row = $result->fetch_assoc())
				{
					$id = $row["Id"];
					$name = $row["Name"];
					$lastname = $row["Lastname"];
					$position = $row["Position"];
					$votes = $row["Votes"];
					$DateFrom = $row["DateFrom"];
					$DateTo = $row["DateTo"];
					$toastInfo = $name." dodany";
					$deafultPhoto = "onerror= this.onerror=null;this.src='images/default.jpg';";
					//   echo 'id: " . $row["Id"]. " - Name: " . $row["Name"]. " " . $row["Lastname"]. "<br>";
					echo

					'<div class="carousel-cell">

				<div class="card sticky-action">

					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator"'.$deafultPhoto.' src="images/'.playerImgName($name, $lastname).'"  />
					</div>

					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">
							'.$name." ".$lastname.'
							<i class="material-icons right">more_vert</i>
						</span>
						<p>'.($position).'</p>
					</div>

					<div class="card-action tooltipped" data-position="bottom" data-delay="50" data-tooltip="Zaznacz, aby oddać głos na tego zawodnika">
						<input type="checkbox" id="checkbox'.$id.'" onclick="Materialize.toast("'.$toastInfo.'", 4000)"/>
						<label for="checkbox'.$id.'">Jedenastka 50-lecia</label>
					</div>

					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">
							O zawodniku
							<i class="material-icons right">close</i>
						</span>
						<h5>'.$name." ".$lastname.'</h5>
                        <b>Nominalna pozycja:</b><br> '.$position.'</p>
                        <b>Lata gry w Relaxie:</b><br> '.$DateFrom."-".$DateTo.'
					</div>
				</div>

			</div><!--<div class="carousel-cell">-->';
				}
			}
			else
			{
				echo "0 results";
			};

            ?>



		</div><!--   <div class="carousel-wrapper"> -->
		<div style="position: absolute; bottom: 0; right:0; padding:25px;">
			<a class="btn-floating btn-large waves-effect waves-light green pulse modal-trigger" href="#modal1">

					<i class="material-icons">add</i>
				</a>
			</div>
		</div>

	
<!-- Modal Structure -->
<div id="modal1" class="modal" style="max-width: 500px">
    <div class="row" style="background-color:lightskyblue;padding:10px;">
		<h7 style="margin-bottom:0px!important">Dodajesz nowego zawodnika do bazy</h7>
    </div>
	
	<div class="modal-content">
		<div class="row">
			<form class="col s10" action="_addPlayer.php" method="post">
				<div class="row">
					<div class="input-field col s12">
						<input id="player_name" type="text" class="validate" required name="player_name"/>
						<label for="first_name" data-error="pole wymagane">Imię zawodnika (*)</label>
					</div>

				</div>

				<div class="row">
					<div class="input-field col s12">
						<input id="player_lastName" type="text" class="validate" required name="player_lastName"/>
						<label for="last_name" data-error="pole wymagane">Nazwisko zawodnika (*)</label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s6">
						<input id="player_dateFrom" type="text" class="validate" required name="player_dateFrom"/>
						<label for="last_name" data-error="pole wymagane">W Relaxie od</label>

					</div>

                    <div class="input-field col s6">
						<input id="player_dateTo" type="text" class="validate" required name="player_dateTo"/>
						<label for="last_name" data-error="pole wymagane">W Relaxie do</label>
					</div>
				</div>

                <div class="row">
                    <div class="input-field col s12 browser-default">
						<select name="player_position">
							<option value="Obrońca">Obrońca</option>
							<option value="Bramkarz">Bramkarz</option>
							<option value="Pomocnik">Pomocnik</option>
							<option value="Napastnik">Napastnik</option>
						</select>
					<label>Pozycja</label>
					</div>
				</div>


				<div class="row">
					<div class="file-field input-field">
						<div class="btn">
							<span>Zdjęcie</span>
							<input type="file" multiple />
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text" placeholder="Wczytaj zdjęcie" />
						</div>
					</div>
                    </div>
                    <div class="row">
						<input type="checkbox" id="player_noImage" name="player_noImage" />
						<label for="player_noImage">Nie posiadam zdjęcia</label>
                    </div>
				<button class="btn waves-effect waves-light" type="submit" name="action">Dodaj zawodnika</button>
			</form>

			<div class="row" style="margin-left:12px;">
			<?php if(isset($_SESSION['adderor'])) echo $_SESSION['adderror']; ?>
			</div>
		</div>

	</div>
				
</div>

<div id="modal2_help" class="modal" style="max-width: 700px">
    <div class="row" style="background-color:lightskyblue;padding:10px;">
		<h7 style="margin-bottom:0px!important">Pomoc</h7>
    </div>
	
	<div class="modal-content">
		<div class="row">
			
  <div class="chip">
    <img src="images/kacper-wojciechowski.jpg" alt="Contact Person">
    Kacper Wojciechowski
  </div>

			 <div class="chip">
    <img src="images/rafal-wojciechowski.jpg" alt="Contact Person">
    Rafał Wojciechowski
  </div>

			
			 <div class="chip">
    <img src="images/michal-kosmider.jpg" alt="Contact Person">
    Michał Kośmider
  </div>

	</div>
		</div>
</div>

<?php include $footerContent; ?>
	

	<script>
		$(document).ready(function ()
		{
			$('.modal').modal();
			$('#modal1').on('click', function ()
				{ });
		});
	</script>

	<script>
		$(document).ready(function ()
		{
			$('select').material_select();
		});
	</script>
  
</body>
</html>
        