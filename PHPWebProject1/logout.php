<?php
session_start();
if (!isset($_SESSION['zalogowany'])){
	header('Location: login.php');
	exit();
}
require_once "sql/connection.php";
$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
$userId = $_SESSION['id'];
$sql_activity = ('INSERT INTO `activities`
				(`Id`, `OperationDate`, `UserId`, `OperationType`)
				VALUES (null, null, "'.$userId.'", "1eb4ac7f-54a7-11ea-a60f-e4115b471390")');
$result_insert_activity = $polaczenie->query($sql_activity);
session_unset();
header('Location: login.php');
?>