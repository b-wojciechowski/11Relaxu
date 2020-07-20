<?php
session_start();
include 'configuration.php';
include 'tools/tools.php';

if (!isset($_SESSION['zalogowany']))
{
	header('Location: login.php');
	exit();
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

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
                        Wszyscy zawodnicy, którzy grali w Relaxie Radziwiłłów</p>
                    <div>
                        <h4><b>Lista zawodników</b></h4>
                    </div>
                </div>

                <div class="" style="background-color:white; margin-top:10px;">

             
                    <ul class="collection collapsible">

                        <?php
			require_once "sql/connection.php";
			$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0)
			{
				echo 'Error: '.$polaczenie->connect_errno. ' Opis: '.$polaczenie->connect_error;
			}
			$sql = "SELECT * FROM Players WHERE isDeleted = 0 order by Lastname ;";
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
					$dateFrom = $row["DateFrom"];
					$dateTo = $row["DateTo"];
					$additionalPositions = $row["AdditionalPositions"];
					$birthYear = $row["BirthYear"];
					$additionalPositions = $row["AdditionalPositions"];
					$shirtNumber = $row['ShirtNumber'];

					echo
'<li>
    <div class="collapsible-header" style="padding:0px">
        <div class="collection-item " style="width:100%" ;>

            <div style="padding-left:10px;padding-bottom:7px; padding-top:3px"> <span class="title">'.$name."
                    ".$lastname.'</span>

                <a href="#!" class="right"><i class="material-icons">expand_more</i></a>
            </div>



        </div>
    </div>
    <div class="collapsible-body">
        <h6><b>INFORMACJE O ZAWODNIKU:</b></h6>

        <table class="striped" style="font-size:12px; margin-top:15px;">
            <tr>
                <td class="" style="width:40%" ;>Imię i nazwisko:</td>
                <td class="">'.$name.' '.$lastname.'</td>
            </tr>
            <tr>
                <td class="">Pozycja:</td>
                <td class="">'.$position.'</td>
            </tr>
            <tr>
                <td class="">Numer na koszulce:</td>
                <td class="">'.$shirtNumber.'</td>
            </tr>
            <tr>
                <td class="">Rok urodzenia:</td>
                <td class="">'.$birthYear.'</td>
            </tr>
            <tr>
                <td class="">Lata gry w Relaxie:</td>
                <td class="">'.$dateFrom.'-'.$dateTo.'</td>
            </tr>
            <tr>
                <td class="">Dodatkowe pozycje:</td>
                <td class="">'.$additionalPositions.'</td>
            </tr>
            <tr>
            <td class="">Dodatkowe:</td>
            <td class="">brak</td>
        </tr>

        </table>

        <br>
        <a class="waves-effect waves-light modal-trigger" href="#modal-'.$id.'"">Dodaj informacje</a>
    </div>
</li>';

echo '
				
<!-- Modal Structure -->
<div id="modal-'.$id.'" class="modal modal-fixed-footer">
   <div class="modal-content" style="padding:10px">
       <div class="ROW" style="padding:10px;">
   <h5><b>Dodajesz informacje</b></h5>
                    </div>
       <div class="row">
           <form class="col s12">
               <div class="row">

                   <div class="input-field col s12">
                       <i class="material-icons prefix">person</i>
                       <input disabled value="'.$name.' '.$lastname.'" id="player-'.$id.'" type="text" class="mp-dv" style="font-weight: 900!important;
                                  color: #505050!important;
                                  font-size: 16px!important;">
                       <label for="disabled">Imię i nazwisko</label>
                   </div>
               </div>

               <div class="row">
                   <div class="input-field col s6">
                       <i class="material-icons prefix">grade</i>
                       <input id="pseudo-'.$id.'" type="text" class="validate">
                       <label for="pseudo-'.$id.'">Pseudonim/ksywa</label>
                   </div>
               </div>

               <div class="row">
                   <div class="input-field col s6">
                       <i class="material-icons prefix">filter_9</i>
                       <input id="shirtNumber-'.$id.'" type="text" class="validate">
                       <label for="shirtNumber-'.$id.'">Numer</label>
                   </div>
               </div>

               <div class="row">
                   <div class="input-field col s12">
                       <i class="material-icons prefix">info_outline</i>
                       <textarea placeholder="Poprzednie kluby, sukcesy, dodatkowe pozycje na boisku..."
                           id="textarea1-'.$id.'" name="textarea1[]" class="materialize-textarea"
                           data-length="200"></textarea>
                       <label for="textarea1-'.$id.'">Dodatkowe informacje</label>
                   </div>
               </div>

           </form>
       </div>
      
   </div>
   <div class="modal-footer">
       <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Prześlij</a>
   </div>
   </div>';



				}
			}
			else
			{
				echo "Brak wyników";
			};

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
    $(document).ready(function() {
        // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
        $('.modal').modal();
    });
    </script>




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
    $(document).ready(function() {
        $('.collapsible').collapsible();
    });
    </script>


</body>

</html>

