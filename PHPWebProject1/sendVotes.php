<?php
include 'configuration.php';
session_start();

require_once "sql/connection.php";

$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
$voter = $_SESSION['email'];
$voterId = $_SESSION['id'];
$browserAgent = $_SERVER['HTTP_USER_AGENT'];



if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}


$voterId = $_SESSION['id'];
if ($polaczenie->connect_errno!=0)
{
	echo "Error: ".$polaczenie->connect_errno;
}
else
{
	if(!empty($_POST['goalkeeper'])) {

		$sql_0 = ('update votes set IsDeleted = 1 where voter = "'.$voterId.'"');
		$result_insert = $polaczenie->query($sql_0);

		foreach($_POST['goalkeeper'] as $check) {

			$sql = 'INSERT INTO `votes` (`Id`, `VoteOnPlayerId`, `VoteDate`, `Voter`, `browserAgent`, `voterIP`) VALUES (null, "'.$check.'", current_timestamp(), "'.$voterId.'", "'.$browserAgent.'", "'.$ip.'")';
			//	$result = $polaczenie->query($sql);
			if ($polaczenie->query($sql) === TRUE)
			{


			}
			else
			{
				echo "Error: " . $sql . "<br>" . $polaczenie->error;

			}




		}
		$_SESSION['sentVotes'] = 'Pomyślnie zapisano Twoje głosy.';
		header('Location: main.php');
		exit();


	}
		};




?>