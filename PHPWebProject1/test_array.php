<?php
require_once "configuration.php";
require_once "sql/connection.php";

$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

if ($polaczenie->connect_errno!=0)
{ 
	echo "Error: ".$polaczenie->connect_errno;
}
else
{
    $zawodnicy = array();
    $bramkarze = array();
    $obroncy = array();
    $pomocnicy = array();
    $napastnicy = array();

    $result = $polaczenie->query('SELECT * from players');
    while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) 
    {
        
        if ($row[3] == "bramkarz") { 
            $bramkarze[] = $row;
        } 
        else if ($row[3] == "obrońca")
        {
            $obroncy[] = $row;
        }
        else if ($row[3] == "pomocnik")
        {
            $pomocnicy[] = $row;
        }
        else if ($row[3] == "napastnik")
        {
            $napastnicy[] = $row;
        }
   
    
    }

    foreach($obroncy as $check) 
    {
        echo $check[1].' '.$check[2].'<br>';
    }
    
    echo "\n";  
    echo "\n";  
    echo "bramkrze:";
    echo '<pre>'; print_r($bramkarze); echo '</pre>';
    echo "\Obrońcy:";
    echo '<pre>'; print_r($obroncy); echo '</pre>';
    echo "\nbramkrze:";
    echo '<pre>'; print_r($pomocnicy); echo '</pre>';
    echo "\nbramkrze:";
    echo '<pre>'; print_r($napastnicy); echo '</pre>';
}

?>