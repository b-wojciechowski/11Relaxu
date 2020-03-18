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



                <div style="padding:10px 10px 5px 10px;">
                    <div>
                        <h5><b>Wybierz bramkarza</b> (krok 1 z 4)</h5>
                    </div>
                    Zaznacz "Jedenastka 50-lecia" przy 1 zawodniku.
                </div>

                <form action="sendVotes.php" method="post">
                    <ul class="collection collapsible">

                        <?php
			require_once "sql/connection.php";
			$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0)
			{
				echo 'Error: '.$polaczenie->connect_errno. ' Opis: '.$polaczenie->connect_error;
			}
			$sql = "SELECT * FROM Players where position = 'bramkarz' order by Lastname;";
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

					$playerImage = (playerImgName($name, $lastname));	
					if (!in_array($playerImage, $player_images)) 
					{
						$playerImage = 'default.jpg';	
					}

					echo
'<li>
	  <div class="collapsible-header"style="padding:0px">
	  <div class="collection-item avatar" style="width:100%";>
		
      <img class="circle" src="images/'.$playerImage.'" style="paddnig-right:10px;"/>
      <div style="padding-left:10px;padding-bottom:7px; padding-top:3px"> <span class="title">'.$name." ".$lastname.'</span> </div>

      <p style="padding-left:10px;">

	  <input class="goalkeeper-checkbox" type="checkbox" id="checkbox-'.$id.'" name="goalkeeper[]" value="'.$id.'"/>
	<label  style="padding-left:25px; font-weight: 300;  font-size: 13px;" class="playerCardCheckboxLabel" for="checkbox-'.$id.'">'.$checkBoxLabelInfo.'</label>
     
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">expand_more</i></a>

		</div>
		</div>
<div class="collapsible-body">
<h6><b>INFORMACJE O ZAWODNIKU:</b></h6>

<table class="striped" style="font-size:12px; margin-top:15px;">
  <tr>
    <td class="" style="width:40%";>Imię i nazwisko:</td>
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

</table>

	<br><a class="waves-effect waves-light">Dodaj informacje</a><br>
	</div>
</li>';
				}
			}
			else
			{
				echo "Brak wyników";
			};

            ?>

                    </ul>


                    <div style="padding:10px;">
                        <div>
                            <h5><b>Wybierz 4 obrońców</b> (krok 2 z 4)</h5>
                        </div>
                        Zaznacz "Jedenastka 50-lecia" przy 4 zawodnikach.
                    </div>



                    <ul class="collection collapsible">

                        <?php
		$sql = "SELECT * FROM Players where Position = 'Obrońca' order by LastName;";
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
				
				$birthYear = $row["BirthYear"];
				$additionalPositions = $row["AdditionalPositions"];
				$shirtNumber = $row['ShirtNumber'];
				
				$playerImage = (playerImgName($name, $lastname));	
				if (!in_array($playerImage, $player_images)) 
				{
					$playerImage = 'default.jpg';	
				}

				echo

				'<li>
					<div class="collapsible-header" style="padding:0px">
						<div class="collection-item avatar" style="width:100%" ;>

							<img class="circle" src="images/'.$playerImage.'" style="paddnig-right:10px;" />
							<div style="padding-left:10px;padding-bottom:7px; padding-top:3px"> <span class="title">'.$name."
									".$lastname.'</span> </div>

							<p style="padding-left:10px;">

								<input class="defender-checkbox Summary-defender" type="checkbox" id="checkbox-'.$id.'"
									name="goalkeeper[]" value="'.$id.'" />
								<label style="padding-left:25px; font-weight: 300;  font-size: 13px;"
									class="playerCardCheckboxLabel" for="checkbox-'.$id.'">'.$checkBoxLabelInfo.'</label>

							</p>
							<a href="#!" class="secondary-content"><i class="material-icons">expand_more</i></a>

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

						</table>




						<br>
						<a class="waves-effect waves-light">Dodaj informacje</a>
						<br>
					</div>

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
                        <div>
                            <h5><b>Wybierz 4 pomocników</b> (krok 3 z 4)</h5>
                        </div>
                        Zaznacz "Jedenastka 50-lecia" przy 4 zawodnikach.

                    </div>



                    <ul class="collection collapsible">

                        <?php

			$sql = "SELECT * FROM Players where Position = 'Pomocnik' order by LastName;";
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
					
					$birthYear = $row["BirthYear"];
					$additionalPositions = $row["AdditionalPositions"];
					$shirtNumber = $row['ShirtNumber'];

					
					$playerImage = (playerImgName($name, $lastname));	
					if (!in_array($playerImage, $player_images)) 
					{
						$playerImage = 'default.jpg';	
					}

					echo

					'<li>
						<div class="collapsible-header" style="padding:0px">
							<div class="collection-item avatar" style="width:100%" ;>

								<img class="circle" src="images/'.$playerImage.'" style="paddnig-right:10px;" />
								<div style="padding-left:10px;padding-bottom:7px; padding-top:3px"> <span class="title">'.$name."
										".$lastname.'</span> </div>

								<p style="padding-left:10px;">

									<input class="midfielder-checkbox" type="checkbox" id="checkbox-'.$id.'" name="goalkeeper[]"
										value="'.$id.'" />
									<label style="padding-left:25px; font-weight: 300;  font-size: 13px;"
										class="playerCardCheckboxLabel" for="checkbox-'.$id.'">'.$checkBoxLabelInfo.'</label>

								</p>
								<a href="#!" class="secondary-content"><i class="material-icons">expand_more</i></a>

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

							</table>





							<br>
							<a class="waves-effect waves-light">Dodaj informacje</a>
							<br>
						</div>

					</li>';
				}
			}
			else
			{
				echo "0 results";
			};

            ?>

                    </ul>



                    <div style="padding:10px 10px 0px 10px;">
                        <div>
                            <h5><b>Wybierz 2 napastników</b> (krok 4 z 4)</h5>
                        </div>
                        Zaznacz "Jedenastka 50-lecia" przy 2 zawodnikach.
                    </div>





                    <ul class="collection collapsible">

                        <?php
			
			$sql = "SELECT * FROM Players where Position = 'Napastnik' order by LastName;";
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
					$birthYear = $row["BirthYear"];
					$additionalPositions = $row["AdditionalPositions"];
					$shirtNumber = $row['ShirtNumber'];
					
					$playerImage = (playerImgName($name, $lastname));	
					if (!in_array($playerImage, $player_images)) 
					{
						$playerImage = 'default.jpg';	
					}

					echo

					'<li>
					<div class="collapsible-header" style="padding:0px">
						<div class="collection-item avatar" style="width:100%" ;>

							<img class="circle" src="images/'.$playerImage.'" style="paddnig-right:10px;" />
							<div style="padding-left:10px;padding-bottom:7px; padding-top:3px"> <span class="title">'.$name."
									".$lastname.'</span> </div>

							<p style="padding-left:10px;">

								<input class="foward-checkbox" type="checkbox" id="checkbox-'.$id.'" name="goalkeeper[]"
									value="'.$id.'" />
								<label style="padding-left:25px; font-weight: 300;  font-size: 13px;"
									class="playerCardCheckboxLabel" for="checkbox-'.$id.'">'.$checkBoxLabelInfo.'</label>

							</p>
							<a href="#!" class="secondary-content"><i class="material-icons">expand_more</i></a>

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

						</table>
	
					</div>
				</li>';
				
			  
				
				}
			}
			else
			{
				echo "Brak wyników";
			};

            ?>
                    </ul>

                    <div style="padding:5px 10px 10px 10px; ">

                        <h6><b>Wybrano:</b></h6>
                        <table class="striped" style="font-size:13px;">
                            <tr>
                                <td class="" style="text-align: right;  width: 50%;">Bramkarzy</td>
                                <td class="">
                                    <div id="Summary-goalkeeper"></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="" style="text-align: right;  width: 50%;">Obrońców</td>
                                <td class="">
                                    <div id="Summary-defender"></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="" style="text-align: right;  width: 50%;">Pomocników</td>
                                <td class="">
                                    <div id="Summary-midfielder"></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="" style="text-align: right;  width: 50%;">Napastników</td>
                                <td class="">
                                    <div id="Summary-forward"></div>
                                </td>
                            </tr>
                        </table>

                        <div class="center">

                            <button class="btn waves-effect waves-light" type="submit" name="sendVotes.php">Prześlij
                                swoją Jedenastkę
                                <i class="material-icons right">send</i>
                            </button>

                        </div>
                    </div>
                </form>




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
    $("#Summary").html($('.single-checkbox:checked').length).show();
    $('.single-checkbox').on('change', function() {
        if ($('.single-checkbox:checked').length > 4) {
            this.checked = false;
        }
        $("#Summary").html($('.single-checkbox:checked').length).show();
    });

    $('.single-checkbox2').on('change', function() {
        if ($('.single-checkbox2:checked').length > 1) {
            this.checked = false;
        }
    });
    </script>

    <script>
    $("#Summary-goalkeeper").html($('.goalkeeper-checkbox:checked').length).show();
    $('.goalkeeper-checkbox').on('change', function() {
        if ($('.goalkeeper-checkbox:checked').length > 1) {
            this.checked = false;
            var defenderCheckbox = (('.defender-checkbox:checked').length);
        }
        $("#Summary-goalkeeper").html($('.goalkeeper-checkbox:checked').length).show();
    });
    var defenderCheckbox = (('.defender-checkbox:checked').length);
    </script>

    <script>
    $("#Summary-defender").html($('.defender-checkbox:checked').length).show();
    $('.defender-checkbox').on('change', function() {
        if ($('.defender-checkbox:checked').length > 4) {
            this.checked = false;
        }
        $("#Summary-defender").html($('.defender-checkbox:checked').length).show();
    });
    </script>

    <script>
    $("#Summary-midfielder").html($('.midfielder-checkbox:checked').length).show();
    $('.midfielder-checkbox').on('change', function() {
        if ($('.midfielder-checkbox:checked').length > 4) {
            this.checked = false;
        }
        $("#Summary-midfielder").html($('.midfielder-checkbox:checked').length).show();
    });
    </script>

    <script>
    $("#Summary-forward").html($('.forward-checkbox:checked').length).show();
    $('.forward-checkbox').on('change', function() {
        if ($('.forward-checkbox:checked').length > 2) {
            this.checked = false;
        }
        $("#Summary-forward").html($('.forward-checkbox:checked').length).show();
    });
    </script>

    <script>
    $(document).ready(function() {
        $('.collapsible').collapsible();
    });
    </script>


</body>

</html>