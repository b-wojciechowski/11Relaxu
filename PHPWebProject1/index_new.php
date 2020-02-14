<?php
include 'configuration.php';
session_start();
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.2/js/materialize.min.js"></script>
 <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<!--<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>-->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.min.css">
<script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>
</head>


<body>


<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>


    
  <div class="row">
     
    <div class="col s12" style="padding:0px;">
	

   <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Logo</a>
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
				
				<li><a href="mobile.html">
						<i class="material-icons left">people</i>Moja 11-stka 
					</a>
				</li>

	
				<li><a class="modal-trigger" href="#modal2_help">
						<i class="material-icons left">help_outline</i>Pomoc 
					</a>
				</li>

				<li><a href="mobile.html">
					<i class="material-icons left">person</i><?php echo $_SESSION['Name']; ?>
					
					</a>
				</li>
      </ul>
    </div>
  </nav>
          
          

    </div>

    <div class="col s12 m4 l3 hide-on-med-and-down"><p>lewe nic</p></div>
    <div class="col s12 m4 l6" style="padding:0px;">
		<div class="" style="background-color:white; margin-top:10px;">
			
			
			<div style="padding:10px;">
					<div><h5><b>Wybierz 4 obrońców</b> (krok 1 z 4)</h5></div>		
					Zaznacz "Jedenastka 50-lecia" na kartach 4 wybranych zawodników a następnie kliknij <b>"Przejdź dalej"</b>.
					
			</div>				 

		
		
		<ul class="collection">

			<?php
		require_once "sql/connection.php";
		include 'tools/tools.php';
		$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
		if ($polaczenie->connect_errno!=0)
		{
			echo 'Error: '.$polaczenie->connect_errno. ' Opis: '.$polaczenie->connect_error;
		}
		$sql = "SELECT Id, Name, Lastname, Position, Votes, DateFrom, DateTo FROM Players where Position = 'Obrońca' order by rand();";
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
				
				echo

				'<li class="collection-item avatar">
      <img class="circle"'.$deafultPhoto.' src="images/'.playerImgName($name, $lastname).'"  />
      <span class="title">'.$name." ".$lastname.'</span>
      <p>'.$position.'<br>
        <input type="checkbox" id="checkbox-'.$id.'" onclick="Materialize.toast("'.$toastInfo.'", 4000)"/>
						<label class="playerCardCheckboxLabel" for="checkbox-'.$id.'">Jedenastka 50-lecia</label>
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>';
			}
		}
		else
		{
			echo "0 results";
		};

            ?>

		</ul>






			<div style="padding:10px;">
					<div><h5><b>Wybierz 4 pomocników</b> (krok 2 z 4)</h5></div>		
					Zaznacz "Jedenastka 50-lecia" na kartach 4 wybranych zawodników a następnie kliknij <b>"Przejdź dalej"</b>.
					
			</div>	




				
		<ul class="collection">

			<?php
			
			$sql = "SELECT Id, Name, Lastname, Position, Votes, DateFrom, DateTo FROM Players where Position = 'Pomocnik' order by rand();";
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
					//$deafultPhoto = "onerror= this.onerror=null;this.src='images/default.jpg';";
					
					echo

					'<li class="collection-item avatar">
      <img class="circle"'.$deafultPhoto.' src="images/'.playerImgName($name, $lastname).'"  />
      <span class="title">'.$name." ".$lastname.'</span>
      <p>'.$position.'<br>
        <input type="checkbox" id="checkbox-'.$id.'" onclick="Materialize.toast("'.$toastInfo.'", 4000)"/>
						<label class="playerCardCheckboxLabel" for="checkbox-'.$id.'">Jedenastka 50-lecia</label>
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>';
				}
			}
			else
			{
				echo "0 results";
			};

            ?>

		</ul>







</div>
    </div>
    <div class="col s12 m4 l3 hide-on-med-and-down"><p>prawe nic</p></div>
  </div>


  <div class="row">
    <div class="col s12 m4 l2 hide-on-med-and-down"><p>s12 m6 l3</p></div>
    <div class="col s12 m4 l8"><p>stopka</p></div>
    <div class="col s12 m4 l2 hide-on-med-and-down"><p>s12 m6 l3</p></div>
 
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





    


</body>


</html>