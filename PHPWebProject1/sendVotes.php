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
		$sql_1 = ('INSERT INTO `activities`
(`Id`, `OperationDate`, `UserId`, `OperationType`)
VALUES (null, null, "'.$voterId.'", "d2acd6fa-54a6-11ea-a60f-e4115b471390")');
		$result_insert = $polaczenie->query($sql_0);
		$result_insert2 = $polaczenie->query($sql_1);
		foreach($_POST['goalkeeper'] as $check) {

			$sql = 'INSERT INTO `votes` (`Id`, `VoteOnPlayerId`, `VoteDate`, `Voter`, `browserAgent`, `voterIP`) VALUES (null, "'.$check.'", current_timestamp(), "'.$voterId.'", "'.$browserAgent.'", "'.$ip.'")';
			//	$result = $polaczenie->query($sql);
			if ($polaczenie->query($sql) === TRUE)
			{
				$sql_3 = ('INSERT INTO `activities`
(`Id`, `OperationDate`, `UserId`, `OperationType`)
VALUES (null, null, "'.$voterId.'", "e0bf6284-54a6-11ea-a60f-e4115b471390")');
				$result_insert3 = $polaczenie->query($sql_3);

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