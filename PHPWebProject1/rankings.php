<?php
include 'configuration.php';

session_start();
if (!isset($_SESSION['zalogowany']))
{
	header('Location: login.php');
	exit();
}

require_once "sql/connection.php";
include 'tools/tools.php';
$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
if ($polaczenie->connect_errno!=0)
{
	echo 'Error: '.$polaczenie->connect_errno. ' Opis: '.$polaczenie->connect_error;
}
$userId = $_SESSION['id'];
$sql_activity = ('INSERT INTO `activities`
(`Id`, `OperationDate`, `UserId`, `OperationType`)
VALUES (null, null, "'.$userId.'", "1eb4e3de-54a7-11ea-a60f-e4115b471390")');
$result_insert_activity = $polaczenie->query($sql_activity);

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.2/js/materialize.min.js"></script>
 <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
     <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>-->
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<!--<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>-->



<script>
    function showToast(message, duration) {
    Materialize.toast(message, duration);
    }
         
    function showToast1(message, duration) {
    Materialize.toast('<i>'+ message + '</i>', duration);
    }
         
    function showToast2(message, duration) {
    Materialize.toast(message, duration, 'rounded');
    }
         
    function showToast3(message, duration) {
    Materialize.toast('Hello World!', duration, '', function toastCompleted() {
        alert('Toast dismissed!');
    });
    }
</script>
	

</head>


<body>


<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>

 <?php include 'preloader.php'; ?>	
    
<div class="row">
     
 <div class="col s12" style="padding:0px;">
	   
<!--START MENU--> 
	 <?php include 'menu.php'; ?>
 <!--KONIEC MENU-->      

</div>

    <div class="col s12 m4 l3 hide-on-med-and-down"></div>
    
<div class="col s12 m4 l6" style="padding:0px;">
	<div class="" style="background-color:white; margin-top:10px;">
			


<div style="padding:10px 10px 0px 15px;">
	<p style="margin-bottom: -10px;
    font-size: 12px;
    color: darkgrey;">Poniżej przedstawione są dotychczasowe liczby głosów</p>
					<div><h4><b>Rankingi</b></h4></div>		
					</div>
	
						
<div style="padding:10px 10px 5px 10px;">
					<div><i class="material-icons left">people</i><h5><b>Bramkarze</b></h5></div>		
			
			</div>		
			

  <ul class="collection collapsible">
	

			<?php
			
			$sql = "select p.Id as Id, p.Name as Name, p.LastName as LastName, count(1) as Votes, p.Position as Position  from votes as v join players as p on p.id = v.VoteOnPlayerId where Position = 'bramkarz' and v.IsDeleted = 0  group by p.Id order by count(1) desc";
			$result = $polaczenie->query($sql);

			if ($result->num_rows > 0)
			{

				// output data of each row
				while($row = $result->fetch_assoc())
				{
					$id = $row["Id"];
					$name = $row["Name"];
					$lastname = $row["LastName"];
					$position = $row["Position"];
					$votes = $row["Votes"];
					$deafultPhoto = "onerror= this.onerror=null;this.src='images/default.jpg';";
			
					

					
					echo

'<li>
	  <div class="collapsible-header"style="padding:0px">
	  <div class="collection-item avatar" style="width:100%";>
		
      <img class="circle"'.$deafultPhoto.' src="images/'.playerImgName($name, $lastname).'" style="paddnig-right:10px;"/>
      <div style="padding-left:10px;"> <span class="title">'.$name." ".$lastname.'</span> </div>

      <p style="padding-left:10px; color:grey; margin-top:10px;">   <i class="material-icons left"  style="margin-top:-2px; margin-right:0px!important;">star_border</i> Liczba głosów: '.$votes.'

      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">expand_more</i></a>

		</div>
		</div>
      <div class="collapsible-body">

<a class="waves-effect waves-light">Dodaj informacje o zawodniku</a>

<br>
</div>

</li>';
				}
			}
			else
			{
				echo '<p style="padding-left:15px;margin-top:0px;">Nie oddano głosu na bramkarzy.</p>';
			};

            ?>

</ul>
		
<div style="padding:10px 10px 5px 10px;">
					<div> <i class="material-icons left">people</i><h5><b>Obrońcy</b></h5></div>		
					<!--Zaznacz "Jedenastka 50-lecia" przy 1 zawodniku.-->
			</div>		
			

  <ul class="collection collapsible">
	

			<?php
			require_once "sql/connection.php";
		
			$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0)
			{
				echo 'Error: '.$polaczenie->connect_errno. ' Opis: '.$polaczenie->connect_error;
			}
			$sql = "select  p.Id as Id, p.Name as Name, p.LastName as LastName, count(1) as Votes, p.Position as Position  from votes as v join players as p on p.id = v.VoteOnPlayerId where Position = 'obrońca' and v.IsDeleted = 0 group by p.Id order by count(1) desc LIMIT 6";
			$result = $polaczenie->query($sql);

			if ($result->num_rows > 0)
			{

				// output data of each row
				while($row = $result->fetch_assoc())
				{
					$id = $row["Id"];
					$name = $row["Name"];
					$lastname = $row["LastName"];
					$position = $row["Position"];
					$votes = $row["Votes"];
					$deafultPhoto = "onerror= this.onerror=null;this.src='images/default.jpg';";
					
	
					echo

'<li>
	  <div class="collapsible-header"style="padding:0px">
	  <div class="collection-item avatar" style="width:100%";>
		
      <img class="circle"'.$deafultPhoto.' src="images/'.playerImgName($name, $lastname).'" style="paddnig-right:10px;"/>
      <div style="padding-left:10px;"> <span class="title">'.$name." ".$lastname.'</span> </div>

    
      <p style="padding-left:10px; color:grey; margin-top:10px;">   <i class="material-icons left"  style="margin-top:-2px; margin-right:0px!important;">star_border</i> Liczba głosów: '.$votes.'

      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">expand_more</i></a>

		</div>
		</div>
     <div class="collapsible-body">

<a class="waves-effect waves-light">Dodaj informacje o zawodniku</a>

<br>
</div>

</li>';
				}
			}
			else
			{
				echo '<p style="padding-left:15px;margin-top:0px;">Nie oddano głosu na obrońców.</p>';
			};

            ?>

</ul>





	
<div style="padding:10px 10px 5px 10px;">
					<div> <i class="material-icons left">people</i><h5><b>Pomocnicy</b></h5></div>		
					<!--Zaznacz "Jedenastka 50-lecia" przy 1 zawodniku.-->
			</div>	

  <ul class="collection collapsible">
	

			<?php
			require_once "sql/connection.php";
			
			$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0)
			{
				echo 'Error: '.$polaczenie->connect_errno. ' Opis: '.$polaczenie->connect_error;
			}
			$sql = "select  p.Id as Id, p.Name as Name, p.LastName as LastName, count(1) as Votes, p.Position as Position  from votes as v join players as p on p.id = v.VoteOnPlayerId where Position = 'pomocnik' and v.IsDeleted = 0  group by p.Id order by count(1) desc LIMIT 6";
			$result = $polaczenie->query($sql);

			if ($result->num_rows > 0)
			{

				// output data of each row
				while($row = $result->fetch_assoc())
				{
					$id = $row["Id"];
					$name = $row["Name"];
					$lastname = $row["LastName"];
					$position = $row["Position"];
					$votes = $row["Votes"];
					$deafultPhoto = "onerror= this.onerror=null;this.src='images/default.jpg';";
					
					
					echo

'<li>
	  <div class="collapsible-header"style="padding:0px">
	  <div class="collection-item avatar" style="width:100%";>
		
      <img class="circle"'.$deafultPhoto.' src="images/'.playerImgName($name, $lastname).'" style="paddnig-right:10px;"/>
      <div style="padding-left:10px;"> <span class="title">'.$name." ".$lastname.'</span> </div>

   
      <p style="padding-left:10px; color:grey; margin-top:10px;">   <i class="material-icons left"  style="margin-top:-2px; margin-right:0px!important;">star_border</i> Liczba głosów: '.$votes.'

      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">expand_more</i></a>

		</div>
		</div>
      <div class="collapsible-body">

<a class="waves-effect waves-light">Dodaj informacje o zawodniku</a>

<br>
</div>

</li>';
				}
			}
			else
			{
				echo  '<p style="padding-left:15px;margin-top:0px;">Nie oddano głosu na pomocników.</p>';
			};

            ?>

</ul>





			
		
<div style="padding:10px 10px 5px 10px;">
					<div> <i class="material-icons left">people</i><h5><b>Napastnicy</b></h5></div>		
					<!--Zaznacz "Jedenastka 50-lecia" przy 1 zawodniku.-->
			</div>	

  <ul class="collection collapsible">
	

			<?php
			require_once "sql/connection.php";
			
			$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0)
			{
				echo 'Error: '.$polaczenie->connect_errno. ' Opis: '.$polaczenie->connect_error;
			}
			$sql = "select  p.Id as Id, p.Name as Name, p.LastName as LastName, count(1) as Votes, p.Position as Position  from votes as v join players as p on p.id = v.VoteOnPlayerId where Position = 'napastnik' and v.IsDeleted = 0  group by p.Id order by count(1) desc LIMIT 4";
			$result = $polaczenie->query($sql);

			if ($result->num_rows > 0)
			{

				// output data of each row
				while($row = $result->fetch_assoc())
				{
					$id = $row["Id"];
					$name = $row["Name"];
					$lastname = $row["LastName"];
					$position = $row["Position"];
					$votes = $row["Votes"];
					$deafultPhoto = "onerror= this.onerror=null;this.src='images/default.jpg';";
					
					
					echo

'<li>
	  <div class="collapsible-header"style="padding:0px">
	  <div class="collection-item avatar" style="width:100%";>
		
      <img class="circle"'.$deafultPhoto.' src="images/'.playerImgName($name, $lastname).'" style="paddnig-right:10px;"/>
      <div style="padding-left:10px;"> <span class="title">'.$name." ".$lastname.'</span> </div>

   
      <p style="padding-left:10px; color:grey; margin-top:10px;">   <i class="material-icons left"  style="margin-top:-2px; margin-right:0px!important;">star_border</i> Liczba głosów: '.$votes.'

      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">expand_more</i></a>

		</div>
		</div>
    <div class="collapsible-body">

<a class="waves-effect waves-light">Dodaj informacje o zawodniku</a>

<br>
</div>

</li>';
				}
			}
			else
			{
				echo  '<p style="padding-left:15px;margin-top:0px;">Nie oddano głosu na napastników.</p>';
			};

            ?>

</ul>



		








				





	













	</div>

</div>

   <div class="col s12 m4 l3 hide-on-med-and-down"></div>
  </div>


  <div class="row">
    <div class="col s12 m4 l2 hide-on-med-and-down"></div>
    <div class="col s12 m4 l8"> <div class="col s12 m4 l8"> <?php include 'footer.php'; ?></div></div>
    <div class="col s12 m4 l2 hide-on-med-and-down"></div>
 
  </div>
          
          
 
<script>
	(function($){
	$(function(){

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


  $(document).ready(function(){
    $('.collapsible').collapsible();
  }); 
	</script>

</body>
</html>