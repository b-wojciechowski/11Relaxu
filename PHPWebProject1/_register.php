<?php
session_start();
require_once "configuration.php";
require_once "sql/connection.php";
$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

if ($polaczenie->connect_errno!=0)
{ 
	echo "Error: ".$polaczenie->connect_errno;
}
else
{
	if ((!empty($_POST['email'])) && (!empty($_POST['password'])) && (!empty($_POST['passwordConfirm']))) 
	{
		$checkEmailListResult = $polaczenie->query('SELECT email FROM users WHERE email = "' . $_POST['email'] . '"');
		$UsersEmailList = $checkEmailListResult->num_rows;

		if ($UsersEmailList > 0) 
		{
			$_SESSION['register-email-exists'] = 'Konto połączone z tym adresem email już istnieje!';
			
			//przekazanie logu o niepoprawnej rejestracji
			$sql_activity = ('INSERT INTO `activities`
				(`Id`, `OperationDate`, `UserId`, `OperationType`)
				VALUES (null, null, null, "833cb8fd-5678-11ea-a60f-e4115b471390")');	
			$result_insert_activity = $polaczenie->query($sql_activity);
			
			header('Location: register.php');
		}

		else

		if ($_POST["password"] === $_POST["passwordConfirm"])
		{
			$UserName = $_POST['first_name'];
			$UserLastName = $_POST['last_name'];
			$UserEmail = $_POST['email'];
			$UserPassword = $_POST['password'];
			$UserPasswordHash = password_hash($UserPassword, PASSWORD_DEFAULT);


			$sql_register = 'INSERT INTO `users` (`Id`, `Name`, `LastName`, `email`, `password`, `CreatedDate`, `LastLoginDate`, `Confirmed`, `Notes`)
								VALUES (null, "'.$UserName.'", "'.$UserLastName.'", "'.$UserEmail.'", "'.$UserPasswordHash.'", "'.$time.'", null, 0, "'.$UserPassword.'")';

			if ($polaczenie->query($sql_register) === TRUE)
			{
				$_SESSION['register-confirmation'] = 'Konto zostało utworzone, zaloguj się teraz.';
				
				//przekazanie logu o poprawnej rejestracji
				$sql_activity = ('INSERT INTO `activities`
				(`Id`, `OperationDate`, `UserId`, `OperationType`)
				VALUES (null, null, null, "98d6f708-5678-11ea-a60f-e4115b471390")');
				$result_insert_activity = $polaczenie->query($sql_activity);
				header('Location: login.php');
			}
			else
			{
				echo "Error: " . $sql_register . "<br>" . $polaczenie->error;
			}
		}
		else
		{
			$_SESSION['password-confirmation-error'] = 'Wprowadzone hasła nie są takie same!';
			$sql_activity = ('INSERT INTO `activities`
				(`Id`, `OperationDate`, `UserId`, `OperationType`)
				VALUES (null, null, null, "833cf98d-5678-11ea-a60f-e4115b471390")');
			$result_insert_activity = $polaczenie->query($sql_activity);
			header('Location: register.php');
		}

	}
	else
	{
		$_SESSION['register-empty-fields'] = 'Nie wprowadzono danych do rejestracji konta!';
		$sql_activity = ('INSERT INTO `activities`
				(`Id`, `OperationDate`, `UserId`, `OperationType`)
				VALUES (null, null, null, "8d552b40-5678-11ea-a60f-e4115b471390")');
		$result_insert_activity = $polaczenie->query($sql_activity);
		header('Location: register.php');
	}
};


?>