<?php
include 'configuration.php';

session_start();
if (!isset($_SESSION['zalogowany'])) {
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
    <!--<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->

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
                    <p style="margin-bottom: -10px;font-size: 12px;color: darkgrey;">
                        Wyświetlasz listę zawodników, na których oddałeś głos</p>
                    <div>
                        <h4><b>Moja Jedenastka</b></h4>
                    </div>
                </div>

                <ul class="collection collapsible">

<?php
	require_once "sql/connection.php";
    include 'tools/tools.php';
    $zawodnicy = array();
    $bramkarze = array();
    $obroncy = array();
    $pomocnicy = array();
    $napastnicy = array();
    $voterId = $_SESSION['id'];
    
	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
    if ($polaczenie->connect_errno != 0) 
    {
		echo 'Error: ' . $polaczenie->connect_errno . ' Opis: ' . $polaczenie->connect_error;
	}
					
	$userId = $_SESSION['id'];

	$sql_activity = ('INSERT INTO `activities` (`Id`, `OperationDate`, `UserId`, `OperationType`)
				        VALUES (null, null, "' . $userId . '", "63f7ba4b-54a7-11ea-a60f-e4115b471390")');

    $result_insert_activity = $polaczenie->query($sql_activity);
   

	$result = $polaczenie->query('select p.Id, p.Name, p.LastName, p.Position, v.VoteDate from players as p
					join votes as v on p.id = v.VoteOnPlayerId where p.id in (
						SELECT distinct VoteOnPlayerId from votes as v
						join players as p on p.id = v.VoteOnPlayerId
                        where v.Voter = "' . $voterId . '"
                        and v.IsDeleted = 0
						order by v.VoteDate desc)
						and v.IsDeleted = 0
						group by p.Id
						order by p.LastName');
    while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) 
    {
        
        if ($row[3] == "bramkarz")
        { 
            $bramkarze[] = $row;      
        } 
        else if ($row[3] == "obrońca")
        {
            $obroncy[] = $row;
        }
        else if ($row[3] == "pomocnik")
        {
            $pomocnicy[] = $row;
        }
        else if ($row[3] == "napastnik")
        {
            $napastnicy[] = $row;
        }
    }
   

    foreach($bramkarze as $bramkarz) 
    {
        $playerImage = (playerImgName($bramkarz[1], $bramkarz[2]));	
        if (!in_array($playerImage, $player_images)) 
        {
            $playerImage = 'default.jpg';	
        }
        echo
            '<li>
                <div class="collection-item avatar" style="width:100%" ;>
                    <img class="circle" src="images/' . $playerImage . '" style="paddnig-right:10px;" />
                    <div style="padding-left:10px;"> <span class="title">' . $bramkarz[1] . " " . $bramkarz[2] .
                            '</span> </div>
                    <p style="padding-left:10px; color:grey; margin-top:0px; font-size:12px;">' . $bramkarz[3] .
                        '</p>
                </div>
            </li>';
    }

    foreach($obroncy as $obronca) 
    {
        $playerImage = (playerImgName($obronca[1], $obronca[2]));	
        if (!in_array($playerImage, $player_images)) 
        {
            $playerImage = 'default.jpg';	
        }
        echo
            '<li>
                <div class="collection-item avatar" style="width:100%" ;>
                    <img class="circle" src="images/' . $playerImage . '" style="paddnig-right:10px;" />
                    <div style="padding-left:10px;"> <span class="title">' . $obronca[1] . " " . $obronca[2] .
                            '</span> </div>
                    <p style="padding-left:10px; color:grey; margin-top:0px; font-size:12px;">' . $obronca[3] .
                        '</p>
                </div>
            </li>';
    }

    foreach($pomocnicy as $pomocnik) 
    {
        $playerImage = (playerImgName($pomocnik[1], $pomocnik[2]));	
        if (!in_array($playerImage, $player_images)) 
        {
            $playerImage = 'default.jpg';	
        }
        echo
            '<li>
                <div class="collection-item avatar" style="width:100%" ;>
                    <img class="circle" src="images/' . $playerImage . '" style="paddnig-right:10px;" />
                    <div style="padding-left:10px;"> <span class="title">' . $pomocnik[1] . " " . $pomocnik[2] .
                            '</span> </div>
                    <p style="padding-left:10px; color:grey; margin-top:0px; font-size:12px;">' . $pomocnik[3] .
                        '</p>
                </div>
            </li>';
    }
    

    foreach($napastnicy as $napastnik) 
    {
        $playerImage = (playerImgName($napastnik[1], $napastnik[2]));	
        if (!in_array($playerImage, $player_images)) 
        {
            $playerImage = 'default.jpg';	
        }
        echo
            '<li>
                <div class="collection-item avatar" style="width:100%" ;>
                    <img class="circle" src="images/' . $playerImage . '" style="paddnig-right:10px;" />
                    <div style="padding-left:10px;"> <span class="title">' . $napastnik[1] . " " . $napastnik[2] .
                            '</span> </div>
                    <p style="padding-left:10px; color:grey; margin-top:0px; font-size:12px;">' . $napastnik[3] .
                        '</p>
                </div>
            </li>';
    }

$sql_getVoteDate = 'SELECT VoteDate FROM votes WHERE Voter =  "'.$voterId.'" AND IsDeleted = 0';
$result_getVoteDate = $polaczenie->query($sql_getVoteDate);
while($row = $result_getVoteDate->fetch_assoc())
{
    $voteDate = $row["VoteDate"];
}		
		
    echo '<p style="padding-left:15px; padding-top:-10px;">Głosy oddano: ' . $voteDate . ' </p>';
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
    (function($) {
        $(function() {

            $('.button-collapse').sideNav({
                edge: 'left', // Choose the horizontal origin
                closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
                draggable: true // Choose whether you can drag to open on touch screens
            });

        }); // end of document ready
    })(jQuery); // end of jQuery name space
    </script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        $('.preloader-background').delay(0200).fadeOut('slow');

        $('.spinner-layer')
            .delay(0)
            .fadeOut();
    });
    </script>

    <script>
    $(document).ready(function() {
        $('.collapsible').collapsible();
    });
    </script>

</body>
</html>