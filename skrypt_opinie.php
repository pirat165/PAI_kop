<?php

require_once "connect.php";


$recenzje = $_POST['recenzja'];

 $oceny = $_POST['ocena'];
 $tytuly = $_POST['tytul'];
 $autory= $_POST['autor'];


$polaczenie = mysqli_connect($host, $db_user, $db_password, $db_name);


	



try

		{
			
			if ($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			 else if ($polaczenie->query("INSERT INTO Opinions VALUES (NULL, '1', '$tytuly', '$autory', $oceny, '$recenzje')") ) 
        
					{
								echo("<script>
	
		if (confirm('Pomyślnie wysłano opinie')) {
  window.open('recenzje.php', '_self');
} else {
  window.open('recenzje.php', '_self');
}
  
		
	</script>");
				      $recenzje = '';
				      $oceny = '';
				      $tytuly = '';
                      $autory= '';
				 
					}
	
					
	
$polaczenie->close();
}
catch(Exception $e)
		{
			echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rezerwację w innym terminie!</span>';
			echo '<br />Informacja developerska: '.$e;
		}



?>