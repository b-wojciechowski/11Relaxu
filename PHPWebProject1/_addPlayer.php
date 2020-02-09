<?php
include 'configuration.php';
session_start();

require_once "sql/connection.php";

$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
$voter = $_SESSION['email'];

if ($polaczenie->connect_errno!=0)
{
	echo "Error: ".$polaczenie->connect_errno;
}
else
{
	$player_name = $_POST['player_name'];
	$player_lastName = $_POST['player_lastName'];
	$player_dateFrom = $_POST['player_dateFrom'];
	$player_dateTo = $_POST['player_dateTo'];
	$player_position = $_POST['player_position'];
	$voter = $_SESSION['email'];

	if (isset($_POST['player_noImage']))
	{
		$player_noImage = 1;
	}
	else
		$player_noImage = 0;


	//echo	'$player_name '.$player_name;
	//echo	'<br>$player_lastName '.$player_lastName;
	//echo	'<br>$player_dateFrom '.$player_dateFrom;
	//echo	'<br>$player_dateTo '.$player_dateTo;
	//echo	'<br>$player_position '.$player_position;
	//echo	'<br>$player_noImage '.$player_noImage;

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0)
			{
				echo 'Error: '.$polaczenie->connect_errno. ' Opis: '.$polaczenie->connect_error;
			}
			$sql = "INSERT INTO `players` (`Id`, `Name`, `LastName`, `Position`, `Votes`, `DateFrom`, `DateTo`, `CreatedDate`, `CreatedBy`, `IsDeleted`) VALUES
(NULL, '$player_name', '$player_lastName', '$player_position', NULL, $player_dateFrom, '$player_dateTo', NULL, '$voter', 0);";

			if ($polaczenie->query($sql) === TRUE) {
				echo "New record created successfully";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
				$_SESSION['adderror'] = '<span style="color:red">123!</span>';
				header('Location: index.php');
			}






	$polaczenie->close();
}

?>