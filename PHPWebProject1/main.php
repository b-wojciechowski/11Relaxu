<?php
session_start();
include 'configuration.php';

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
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>-->
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!--<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>-->


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

<?php if(isset($_SESSION['sentVotes'])) echo 
	'<ul class="collection">
		<li class="collection-item" style="background-color:#2e7d32; color:white;">'.$_SESSION['sentVotes'].'</li>			
	</ul>';
	 unset($_SESSION['sentVotes']);
?>
   

<?php
require_once "sql/connection.php";
include 'tools/tools.php';
$voterId = $_SESSION['id'];
$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
if ($polaczenie->connect_errno!=0)
{
	echo 'Error: '.$polaczenie->connect_errno. ' Opis: '.$polaczenie->connect_error;
}
$sql = 'select count(*) from votes where IsDeleted = 0';
$sql2 = 'select count(DISTINCT voter) as UniqueVoters from Votes where IsDeleted = 0 group by "'.$voterId.'"';
$sql3 = 'select count(id) from users';

$result = $polaczenie->query($sql);
$result2 = $polaczenie->query($sql2);
$result3 = $polaczenie->query($sql3);
if ($result->num_rows > 0)
{
	$row = $result->fetch_assoc();
	$votesCount = $row["count(*)"];

} 
else
{
	echo "Brak wyników";
};

if ($result2->num_rows > 0)
{
	$row2 = $result2->fetch_assoc();
	$votersCount = $row2["UniqueVoters"];

} 
else
{
	echo "Brak wyników";
};

$row3 = $result3->fetch_assoc();
$numberOfUsers = $row3["count(id)"];

?>


	

	<table style="padding:10px;">
  <tr>
    <th style="background-color:#eee; width:50%; text-align:center">
		<div style="font-size:60px;"><?php echo $votesCount;?></div>
		<p style="margin-top:0px;"><b>oddanych głosów</b></p>
	</th>
     <td style="background-color:aliceblue; width:50%; text-align:center">
		<div style="font-size:60px;"><?php echo $votersCount;?></div>
		<p style="margin-top:0px;"><b>osób oddało głosy</b></p>
	</td>
  </tr>
  <tr>
      <td style="background-color:aliceblue; width:50%; text-align:center">
		<div style="font-size:50px;"><?php echo $numberOfUsers;?></div>
		<p style="margin-top:0px;"><b>zarejstrowanych użytkowników</b></p>
	</td>
      <td style="background-color:#eee; width:50%; text-align:center">
		
	</td>
  </tr>
  <tr>
    <td style="background-color:aliceblue; width:50%; text-align:center">
	  </td>
      <td style="background-color:#eee; width:50%; text-align:center">
		
	</td>
    <td></td>
  </tr>
</table>



	






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