
<?php

session_start();

if ((!isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==false))
	{
		header('Location:index.php');
		exit();
	}


$id_osoby = $_SESSION['ID_os'];



 


?>


<!doctype html>



<html>
<head>
<meta charset="UTF-8">
			
<title>Zrecenzuj</title>
			
<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style/style.css">
		<link href="css/bootstrap-4.3.1.css" rel="stylesheet">
</head>

<body>
	

	<!-- Naglowek strony -->
		<header class="top">
			<div class="container">
				
				<div class="main-menu">
					<ul>
						<li> <a href="recenzje.php">Opinie</a></li>
						<li> <a href="opinie.php">Recenzje</a></li>
						
						<li><A href="logout.php">Wyloguj</A></li>
					</ul>				
				</div>
			</div>
		</header>

		<!-- Banner -->
		<section class="banner">
			<div class="container center-text">
				<h1 style="line-height: 180%; color: white;">Księgarnia na 5+ </h1>
				
				<h3> <mark> Opisz swoje doznania na temat ulubionej książki</mark></h3>
			</div>			
		</section>
		
		
		
			<div id="oceny_href"></div>


		
		
		
		 <br>
		 <br>
		 <br>
		

	
	<div class="container">
				<h2>Recenzja ulubionej Książki</h2>
				<div class="col-half">
					
					
					<form action="skrypt_opinie.php" method="post" >
					
						
						
						
						
						<br>
						
						
						Tytuł: <input type="text"  name="tytul" /> <br />
						Autor:  <input type="text" name="autor" /> <br />
						<br />
						<label for="ocena"><strong> Ocena książki</strong></label>

                            <select name="ocena" id="ocena-select">
                                 <option value="">--Wybierz ocene książki od 1 do 10--</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                                  <option value="7">7</option>
                                  <option value="8">8</option>
                                  <option value="9">9</option>
                                  <option value="10">10</option>
						     </select>

                                    <br>
                                    <br>
						
						<label for="recenzja">
							<strong>Recenzja MAX 1000 znaków</strong>
						</label><br>
						
						<textarea name="recenzja" cols="50" rows="10"  maxlength="1000">Recenzja</textarea>
						<br>
						<button type="submit" class="button button-dark">Wyślij</button>
					</form>
				</div>
	</div>
	
	
	<br>
	
	
	
	
	
	
	<section class="opinie">
		
		
		<div class="jumbotron">
  <p class="lead">Recenzje</p>
			
			
			
			<?php
  
		
		require_once "connect.php";

	try 
		{
			$polaczenie = mysqli_connect($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			else
			{
			
$wyswietl = $polaczenie->query("SELECT Mail,Autor, Tytul, Ocena, Opinia FROM Opinions, Users ORDER BY RAND() LIMIT 5"); 
				if (!$wyswietl) throw new Exception($polaczenie->error);
				
				else{
					
				         while ( $row = mysqli_fetch_row($wyswietl) ) 
						 {
					    echo("<hr class='my-4'> <p>Użytkownik: ");
						echo($row[0]);
							 echo("   Autor:   ");
						echo($row[1]);
							 echo("   Tytuł:   ");
						echo($row[2]);
							
					    echo("    ocena:  ");
						echo("<mark>".$row[3]."</mark>");
						 
					    echo("    Recenzja:  ");

						echo($row[4]);
							  echo("</p>");
							 
							
						 }
				}
					
$polaczenie->close();
			}
	}
catch(Exception $e)
		{
			echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
			echo '<br />Informacja developerska: '.$e;
		}

				
		?>
			
			
			
</div>
		
		
		</section>
	
	
	

		<!-- Stopka  -->
		<footer class="site-footer">
			<div class="container">
			  <p>&copy; Piotr Jarki</p>
				
				
			</div>
				<a href="https://www.instagram.com"><img class="ikony" src="img/ig.jpg" alt="Instagram"></a>
			<a href="https://www.facebook.com">	<img class="ikony" src="img/fb.jpg" alt="Facebook"></a>
		</footer>
		
	
	
	
</body>
</html>
