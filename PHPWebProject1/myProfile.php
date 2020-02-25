<?php
session_start();
include 'configuration.php';

if (!isset($_SESSION['zalogowany']))
{
	header('Location: login.php');
	exit();
}

?>
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
    <style>

		.mp-dv {
		font-weight: 900!important;
        color: #505050!important;
        font-size: 16px!important;
        }


    </style>



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
			

<div style="padding:10px 10px 10px 10px;">

    <div style="padding:0px 10px 0px 15px;">
	
					<div><h4><b>Mój profil</b></h4></div>		
		</div>			

<?php if(isset($_SESSION['sentVotes'])) echo 
		  '<ul class="collection">
		<li class="collection-item" style="background-color:#2e7d32; color:white;">'.$_SESSION['sentVotes'].'</li>			
	</ul>';
	  unset($_SESSION['sentVotes']);
?>
   

<?php
require_once "sql/connection.php";
include 'tools/tools.php';
$userId = $_SESSION['id'];
$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
if ($polaczenie->connect_errno!=0)
{
	echo 'Error: '.$polaczenie->connect_errno. ' Opis: '.$polaczenie->connect_error;
}
$sql = 'select * from users where Id = "'.$userId.'"';
$result = $polaczenie->query($sql);

if ($result->num_rows > 0)
{
	$row = $result->fetch_assoc();
    $userName = $row['Name'];
    $userLastName = $row['LastName'];
    $userEmail = $row['email'];
    $userCreatedDate = $row['CreatedDate'];

} 
else
{
	echo "Brak wyników";
};

    echo '
<div class="row">
  <form class="col s12">
    <div class="row">
      <div class="input-field col s5">
        <i class="material-icons prefix">account_circle</i>
        <input disabled value="'.$userName.'" placeholder="Placeholder" id="first_name" type="text" class="mp-dv">
        <label for="first_name">Imię</label>
      </div>
      <div class="input-field col s7">

        <input disabled value="'.$userLastName.'" id="last_name" type="text" class="mp-dv">
        <label for="last_name">Nazwisko</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <i class="material-icons prefix">email</i>
        <input disabled value="'.$userEmail.'" id="disabled" type="text" class="mp-dv">
        <label for="disabled">Adres email</label>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12">
        <i class="material-icons prefix">event_available</i>
        <input disabled value="'.$userCreatedDate.'" id="disabled" type="text" class="mp-dv">
        <label for="disabled">Konto utworzone:</label>
      </div>
    </div>
  </form>
</div>
';

?>

    <div class="row" style="margin-left:25px; margin-top:-10px;">
   <a class="btn waves-effect waves-light red" type="submit" href="logout.php">
	Wyloguj się<i class="material-icons right">send</i>
	</a>
			</div>					
							



	</div>		


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
  $(document).ready(function(){
    $('.collapsible').collapsible();
  }); 
</script>

</body>
</html>