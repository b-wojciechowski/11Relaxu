<?php
include 'configuration.php';
session_start();

require_once "sql/connection.php";

$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
$voter = $_SESSION['email'];
$voterId = $_SESSION['id'];
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
echo $browserAgent.'<br>';


if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}



if ($polaczenie->connect_errno!=0)
{
	echo "Error: ".$polaczenie->connect_errno;
}
else
{
	if(!empty($_POST['goalkeeper'])) {
		foreach($_POST['goalkeeper'] as $check) {
			$sql = 'INSERT INTO `votes` (`Id`, `VoteOnPlayerId`, `VoteDate`, `Voter`, `browserAgent`, `voterIP`) VALUES (null, "'.$check.'", current_timestamp(), "'.$voterId.'", "'.$browserAgent.'", "'.$ip.'")';
		//	$result = $polaczenie->query($sql);
			if ($polaczenie->query($sql) === TRUE)
			{
				header('Location: index_new.php');
			}
			else
			{
				echo "Error: " . $sql . "<br>" . $polaczenie->error;

			}




			}
	}

		}



?>