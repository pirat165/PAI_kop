<?php

require_once "connect.php";



$recenzja1 = $_POST['recenzja1'];

 


$polaczenie = mssql_connect($host, $db_user, $db_password, $db_name);





try

		{
			
			if ($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			 else if ($polaczenie->query("INSERT INTO Books_opinions VALUES (NULL, '1', '1', '$recenzja1')") ) 
        
					{
						
						echo("<script>
	
		if (confirm('Pomyślnie wysłano recenzję')) {
  window.open('recenzje.php', '_self');
} else {
  window.open('recenzje.php', '_self');
}
  
		
	</script>");
						
				      $recenzja1 = '';
				     
				 
					}
	
					
	
$polaczenie->close();
}
catch(Exception $e)
		{
			echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rezerwację w innym terminie!</span>';
			echo '<br />Informacja developerska: '.$e;
		}



?>