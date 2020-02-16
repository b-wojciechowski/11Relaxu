<?php
include 'configuration.php';
session_start();

require_once "sql/connection.php";

$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
$voter = $_SESSION['email'];
$voterId = $_SESSION['id'];

if ($polaczenie->connect_errno!=0)
{
	echo "Error: ".$polaczenie->connect_errno;
}
else
{
	if(!empty($_POST['goalkeeper'])) {
		foreach($_POST['goalkeeper'] as $check) {
			$sql = 'INSERT INTO `votes` (`Id`, `VoteOnPlayerId`, `VoteDate`, `Voter`) VALUES (null, "'.$check.'", current_timestamp(), "'.$voterId.'")';
		//	$result = $polaczenie->query($sql);
			if ($polaczenie->query($sql) === TRUE)
			{
				echo "New record created successfully<br>";
			}
			else
			{
				echo "Error: " . $sql . "<br>" . $polaczenie->error;
				
			}

			


			}
	}

		}



?>