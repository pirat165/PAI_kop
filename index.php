
<?php
phpinfo();
session_start();
if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location:recenzje.php');
		exit();
	}

?>


<!DOCTYPE html>
  <html>
	<head>
		<meta charset="utf-8">
		<title>Księgarnia</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style/style.css">
		<link href="css/bootstrap-4.3.1.css" rel="stylesheet">
	

	<script>
	
   function logowanie()
	{
	
if (confirm("Musisz się zalogować aby dodać recenzję")) {
  txt = "Przejdź wyżej aby się zalogować";
} else {
  txt = "Nie loguje";
}
	}
		
	</script>
		
		
	</head>
	<body>

		<!-- Naglowek strony -->
		<header class="top">
			<div class="container">
				
				<div class="main-menu">
					<ul>
						<li><a href="index.php">Start</a></li>
						
					
					</ul>				
				</div>
			</div>
		</header>

		<!-- Banner -->
		<section class="banner">
			<div class="container center-text">
				<h1 style="line-height: 180%; color: white;">Księgarnia na 5+</h1>
				
				<h3> <mark> Opisz swoje doznania na temat ulubionej książki</mark></h3>
			</div>			
		</section>
		
		
		
		

    <br />
		
		<div id="zaloguj">
        Zaloguj sie!
    
 
    	<form action="./zaloguj.php" method="post">
	
		Login: <br /> <input type="text" name="login" /> <br />
		Hasło: <br /> <input type="password" name="haslo" /> <br /><br />
		<input type="submit" value="Zaloguj się" />
        <button onclick="location.href='rejestracja.php'" type="button">
         zarejestruj</button>
	</form>
    </div>
	
	<?php
	if(isset($_SESSION['blad']))	
	{
		echo $_SESSION['blad'];
	}
	unset($_SESSION['blad']);
	
?>
		
		
		 
		<!-- Sekcja zachecajaca -->
		
		<section class="intro">
			<div class="container">
				<h2 class="center-text">Najlepsze książki</h2>
				<br>
				<div class="col-one-third center-text">
					<img src="img/ksiazka1.jpg" alt="Ikona 1">
					<h4>Jak człowiek staje się mordercą. Mroczne opowieści psychiatry sądowego</h4>
					<p>Autor: Taylor Richard</p>
				</div>
				<div class="col-one-third center-text">
					<img src="img/ksiazka2.jpg" alt="Ikona 1">
					<h4>Oddasz fartucha, czyli facet w kuchni</h4>
					<p>Autor: Tomasz Strzelczyk</p>
				</div>
				<div class="col-one-third center-text">
					<img src="img/ksiazka3.jpg" alt="Ikona 1">
					<h4>Mów mi Win</h4>
					<p>Autor: Harlan Coben</p>
				</div>
			</div>
		</section>
		

		<section class="promocje" id="promo">
<div class="jumbotron">
  <h1 class="display-4">Chcesz się podzielić opinią na temet ulubionej książki?</h1>
  <hr class="my-4">
 
  <p class="lead">
	  <button class="btn btn-primary btn-lg" type="button"  onClick="logowanie()" >Napisz recenzje</button> 
  </p>
</div>
		</section>
		
		
		
		<!-- opinie -->
		<section class="opinie">
			<div class="jumbotron">
		<p class="lead">Opinie klientów</p>
		
		<?php
  
		
		require_once "./connect.php";

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

