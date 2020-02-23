<?php
include 'configuration.php';

session_start();
if (!isset($_SESSION['zalogowany']))
{
	header('Location: login.php');
	exit();
}



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
    color: darkgrey;">Wyświetlasz listę zawodników, na których oddałeś głos</p>
					<div><h4><b>Moja Jedenastka</b></h4></div>		
</div>
	
						


  <ul class="collection collapsible">
	

			<?php
			require_once "sql/connection.php";
			include 'tools/tools.php';
			$voterId = $_SESSION['id'];
			$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0)
			{
				echo 'Error: '.$polaczenie->connect_errno. ' Opis: '.$polaczenie->connect_error;
			}
			$sql = 'select * from players as p
					join votes as v on p.id = v.VoteOnPlayerId where p.id in (
						select distinct VoteOnPlayerId from votes as v
						join players as p on p.id = v.VoteOnPlayerId
						where v.Voter = "'.$voterId.'"
						order by v.VoteDate desc)
					and v.IsDeleted = 0
					group by p.Id
					order by p.LastName';

			$result = $polaczenie->query($sql);
			$userId = $_SESSION['id'];
			
			

				$userId = $_SESSION['id'];
				$sql_activity = ('INSERT INTO `activities`
				(`Id`, `OperationDate`, `UserId`, `OperationType`)
				VALUES (null, null, "'.$userId.'", "63f7ba4b-54a7-11ea-a60f-e4115b471390")');
				$result_insert_activity = $polaczenie->query($sql_activity);

			if ($result->num_rows > 0)
			{

				while($row = $result->fetch_assoc())
				{
					$deafultPhoto = "onerror= this.onerror=null;this.src='images/default.jpg';";
					$voteDate = $row['VoteDate'];
					$id = $row["Id"];
					$name = $row["Name"];
					$lastname = $row["LastName"];
					$position = $row["Position"];

					echo

'<li>
	 
<div class="collection-item avatar" style="width:100%";>
		
      <img class="circle"'.$deafultPhoto.' src="images/'.playerImgName($name, $lastname).'" style="paddnig-right:10px;"/>
      <div style="padding-left:10px;"> <span class="title">'.$name." ".$lastname.'</span> </div>

      <p style="padding-left:10px; color:grey; margin-top:0px; font-size:12px;">'.$position.'</p>
</div>

</li>';
				}
			} 
			else
			{
				echo "Brak wyników";
			};
			
			 
			echo '<p style="padding-left:15px; padding-top:-10px;">Głosy oddano:'.$voteDate.' </p>';
            ?>

</ul>
		






		








				











	</div>

</div>

    <div class="col s12 m4 l3 hide-on-med-and-down"></div>
  </div>


 <div class="row">
    <div class="col s12 m4 l2 hide-on-med-and-down"></div>
    <div class="col s12 m4 l8"> <?php include 'footer.php'; ?></div>
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
document.addEventListener("DOMContentLoaded", function(){
	$('.preloader-background').delay(0200).fadeOut('slow');
	
	$('.spinner-layer')
		.delay(0)
		.fadeOut();
});
	</script>


<script>


  $(document).ready(function(){
    $('.collapsible').collapsible();
  }); 
	</script>



</body>
</html>