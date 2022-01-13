<?php

require_once "connect.php";


$polaczenie = mssql_connect($host, $db_user, $db_password, $db_name);


$ID_osoby = $_GET['ID_osoby'];




try 
		{
			
			if ($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			else if ($polaczenie->query("INSERT INTO Opinions VALUES (NULL,'1', $Opinia)") ) 
        
					{
						echo("wysłano recenzje");
					}
$polaczenie->close();
}
catch(Exception $e)
		{
			echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o recenzje w innym terminie!</span>';
			echo '<br />Informacja developerska: '.$e;
		}


?>