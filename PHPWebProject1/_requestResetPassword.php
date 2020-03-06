<?php
include 'configuration.php';
session_start();

require_once "sql/connection.php";

$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
//$userId = $_POST['userId'];
$requestCode = rand(1000,9999);
$validDate = new DateTime();
$validDate->add(new DateInterval('P0Y0M5DT0H0M0S'));
$validDate = $validDate->format('Y-m-d H:i:s') . "\n";



$sql_0 = ('INSERT INTO `resetpasswordrequests` (`Id`, `UserId`, `RequestCreateDate`, `RequestValidDate`, `Code`, `isUsed`)
 VALUES (null, "2746b7ab-5676-11ea-a60f-e4115b471390", null, "'.$validDate.'", "'.$requestCode.'", "0");');

if ($polaczenie->query($sql_0) === TRUE)
{ 
    $_SESSION['sentResetPasswordRequest'] = 'Kod umożliwiający zmianę hasła został przesłany na wskazany adres mailowy.';
	header('Location: login.php');
    exit();
}
    

else
			{
				echo "Error: " . $sql_0 . "<br>" . $polaczenie->error;
			}






?>