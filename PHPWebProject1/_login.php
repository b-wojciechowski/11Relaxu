<?php
session_start();
include 'configuration.php';
if ((!isset($_POST['login'])) || (!isset($_POST['password'])))
{
	header('Location: index.php');

	exit();
}

require_once "sql/connection.php";

$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

if ($polaczenie->connect_errno!=0)
{
	echo "Error: ".$polaczenie->connect_errno;
}
else
{
	$login = $_POST['login'];
	$password = $_POST['password'];

	$login = htmlentities($login, ENT_QUOTES, "UTF-8");
	$password = htmlentities($password, ENT_QUOTES, "UTF-8");

	if ($rezultat = @$polaczenie->query(
	sprintf("SELECT * FROM users WHERE email='%s' AND password='%s'",
	mysqli_real_escape_string($polaczenie,$login),
	mysqli_real_escape_string($polaczenie,$password))))
	{
		$ilu_userow = $rezultat->num_rows;
		if($ilu_userow>0)
		{
			$_SESSION['zalogowany'] = true;

			$wiersz = $rezultat->fetch_assoc();
			$_SESSION['id'] = $wiersz['Id'];
			$_SESSION['Name'] = $wiersz['Name'];
			$_SESSION['email'] = $wiersz['email'];
			$_SESSION['login'] = $login;
			$_SESSION['password'] = $password;
			$userId = $_SESSION['id'];

			unset($_SESSION['blad']);
			$rezultat->free_result();
			$sql_activity = ('INSERT INTO `activities`
				(`Id`, `OperationDate`, `UserId`, `OperationType`)
				VALUES (null, null, "'.$userId.'", "e0bf868e-54a6-11ea-a60f-e4115b471390")');
			$result_insert_activity = $polaczenie->query($sql_activity);

			$sql_updateLastLoginDate = ('update users set LastLoginDate = "'.$time.'" where id = "'.$userId.'"');
			$sql_insertLoginInfo = ('INSERT INTO `logins` (`Id`, `UserID`, `Date`, `Ip`, `browserAgent`) VALUES (null, "'.$userId.'", "'.$time.'", "'.$ip.'", "'.$browserAgent.'")');
			$result_sql_insertLoginInfo = $polaczenie->query($sql_insertLoginInfo);
			$result_sql_updateLastLoginDate = $polaczenie->query($sql_updateLastLoginDate);
			header('Location: index.php');

		} else {

			$_SESSION['blad'] = 'Nieprawidłowy login lub hasło!';
			header('Location: login.php');

		}

	}

	$polaczenie->close();
}

?>