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
	
<style>
	.js .load, .js #loader-wrapper {
  display: block;
}
	#loader-wrapper {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1000;
  background: #ECF0F1;
  /* display: none; */
}

	.load {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100px;
    height: 100px;
    /* display: none; */
}

.load hr {
    border: 0;
    margin: 0;
    width: 40%;
    height: 40%;
    position: absolute;
    border-radius: 50%;
    animation: spin 2s ease infinite;
}

.load :first-child {
    background: #19A68C;
    animation-delay: -1.5s;
}

.load :nth-child(2) {
    background: #F63D3A;
    animation-delay: -1s;
}

.load :nth-child(3) {
    background: #FDA543;
    animation-delay: -0.5s;
}

.load :last-child {
    background: #193B48;
}

@keyframes spin {
    0%, 100% {
        transform: translate(0)
    }
    25% {
        transform: translate(160%)
    }
    50% {
        transform: translate(160%, 160%)
    }
    75% {
        transform: translate(0, 160%)
    }
}
.preloader-background {
	display: flex;
	align-items: center;
	justify-content: center;
	background-color: #eee;
	
	position: fixed;
	z-index: 100;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;	
}

</style>






</head>


<body>
	

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>


<div class="preloader-background">
	 <div class="preloader-wrapper big active">
    <div class="spinner-layer spinner-blue-only">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div><div class="gap-patch">
        <div class="circle"></div>
      </div><div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>
  </div>
</div>
  

<div class="row">
     
 <div class="col s12" style="padding:0px;">
	   
<!--START MENU--> 

<nav>
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo">11 Relaxu</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
                 <li><a href="rankings.php">
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
		  test
         <li><a href="rankings.php">
						<i class="material-icons left">insert_chart</i>Rankingi
					</a>
				</li>
				
				<li><a href="mobile.html">
						<i class="material-icons left">people</i>Moja 11-stka 
					</a>
				</li>
		  <hr />
	
				<li><a class="modal-trigger" href="#modal2_help">
						<i class="material-icons left">help_outline</i>Pomoc 
					</a>
				</li>

		   <hr />

				<li><a href="mobile.html">
					<i class="material-icons left">person</i><?php echo $_SESSION['Name']; ?>
					
					</a>
				</li>
      </ul>
    </div>
  </nav>
          
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
					left join votes as v on p.id = v.VoteOnPlayerId where p.id in (
						select distinct VoteOnPlayerId from votes as v
						join players as p on p.id = v.VoteOnPlayerId
						where v.voter = "'.$voterId.'"
						and v.IsDeleted = 0
						order by v.VoteDate desc)
					and v.IsDeleted = 0
					group by p.Id
					order by p.LastName';




			$result = $polaczenie->query($sql);
		
			echo '<ul class="collection collapsible">';
			
	
			if ($result->num_rows > 0)
			{
				$row = $result->fetch_assoc();
				$voteDate = $row["VoteDate"];
				$deafultPhoto = "onerror= this.onerror=null;this.src='images/default.jpg';";
				

				// output data of each row
				while($row = $result->fetch_assoc())
				{
					$id = $row["Id"];
					$name = $row["Name"];
					$lastname = $row["LastName"];
					$position = $row["Position"];
					$votes = $row["Votes"];
					
					
					
					

					
					echo

'<li>
	 
	  <div class="collection-item avatar" style="width:100%";>
		
      <img class="circle"'.$deafultPhoto.' src="images/'.playerImgName($name, $lastname).'" style="paddnig-right:10px;"/>
      <div style="padding-left:10px;"> <span class="title">'.$name." ".$lastname.'</span> </div>

      <p style="padding-left:10px; color:grey; margin-top:0px; font-size:12px;">'.$position.'

      </p>



		</div>
		
    


</li>';
				}
			} 
			else
			{
				echo "Brak wyników";
			};
			echo '<p style="padding-left:15px; padding-top:-10px;">Głosy oddano: '.$voteDate.'</p>';
            ?>

</ul>
		






		








				











	</div>

</div>

    <div class="col s12 m4 l3 hide-on-med-and-down"></div>
  </div>


  <div class="row">
    <div class="col s12 m4 l2 hide-on-med-and-down"><p>s12 m6 l3</p></div>
    <div class="col s12 m4 l8">

<div style="align-content:center">
		<div class="footer-copyright">
            <div class="container">
           <center>© 2020 Relax Radziwiłłów </center> 
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
</div>


	</div>
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