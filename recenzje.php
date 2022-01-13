
<?php

session_start();


$_SESSION['zalogowany'] = $_GET['zalogowany'];
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
			
<title>Oceń</title>
			
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
		
		
		<!--opinie  -->
			
		<section class="promocje" id="promo">
<div class="jumbotron">
  <h1 class="display-4">Chcesz zrecenzować ulubioną książkę?</h1>
  <hr class="my-4">
 
  <p class="lead">
	  <a class="btn btn-primary btn-lg"  href="opinie.php#oceny_href"  > Napisz recenzje</a> 
  </p>
</div>
		</section>
		

		
		
		
		 
		<!-- Sekcja zachecajaca -->
		
		<section class="intro">
			<div class="container">
				<h2 class="center-text">Najlepsze książki</h2>
				<br>
				<div class="col-one-third center-text">
					<img src="img/ksiazka1.jpg" id="book1" alt="Ikona 1">
					<h4>Jak człowiek staje się mordercą. Mroczne opowieści psychiatry sądowego</h4>
					<p>Autor: Taylor Richard</p>
					<a href="book1_dod.php"> Napisz recenzje</a>
				</div>
				<div class="col-one-third center-text">
				 <img src="img/ksiazka2.jpg" id="book2" alt="Ikona 1">
					<h4>Oddasz fartucha, czyli facet w kuchni</h4>
					<p>Autor: Tomasz Strzelczyk</p>
					<a href="book2_dod.php"> Napisz recenzje</a>
				</div>
				<div class="col-one-third center-text">
					<img src="img/ksiazka3.jpg" id="book3"  alt="Ikona 1">
					<h4>Mów mi Win</h4>
					<p>Autor: Harlan Coben</p>
					<a href="book3_dod.php"> Napisz recenzje</a>
				</div>
				
			</div>
		</section>
	<div id="tresc"></div>
		

	<script>
	
	
	
	
	var b1 = document.getElementById('book1'),
    b2 = document.getElementById('book2'),
    b3 = document.getElementById('book3'),
    tresc = document.getElementById('tresc');
    
b1.onclick = function() {
    tresc.innerHTML = "		<?php
  
		
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
			
			$wyswietl = $polaczenie->query("SELECT Mail, Recenzja  FROM Books_opinions, Users WHERE ID_book_sel='1' ORDER BY RAND() LIMIT 10");
       if (!$wyswietl) throw new Exception($polaczenie->error);
				
				else{
					
				         while ( $row = mysqli_fetch_row($wyswietl) ) 
						 {
					    echo("<hr class='my-4'> <p>Użytkownik: ");
						echo($row[0]);
							
					    echo("    Recenzja:  ");
						echo($row[1]);
						 
					   
							//Poprawić HR
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
	";
}
  
b2.onclick = function() {
    tresc.innerHTML = "		<?php
  
		
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
			
			$wyswietl = $polaczenie->query("SELECT Mail, Recenzja  FROM Books_opinions, Users WHERE ID_book_sel='2' ORDER BY RAND() LIMIT 10");
       if (!$wyswietl) throw new Exception($polaczenie->error);
				
				else{
					
				         while ( $row = mysqli_fetch_row($wyswietl) ) 
						 {
					    echo("<hr class='my-4'> <p>Użytkownik: ");
						echo($row[0]);
							
					    echo("    Recenzja:  ");
						echo($row[1]);
						 
					   
							//Poprawić HR
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
	";
}
b3.onclick = function() {
    tresc.innerHTML = "		<?php
  
		
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
			
			$wyswietl = $polaczenie->query("SELECT Mail, Recenzja  FROM Books_opinions, Users WHERE ID_book_sel='3' ORDER BY RAND() LIMIT 10");
       if (!$wyswietl) throw new Exception($polaczenie->error);
				
				else{
					
				         while ( $row = mysqli_fetch_row($wyswietl) ) 
						 {
					    echo("<hr class='my-4'> <p>Użytkownik: ");
						echo($row[0]);
							
					    echo("    Recenzja:  ");
						echo($row[1]);
						 
					   
							//Poprawić HR
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
	";
}
	
	
	
	
	
	</script>
	
	<br>
	<br>
	<br>
	
	
	

		<!-- Stopka  -->
		<footer class="site-footer">
			
			  <p>&copy; Piotr Jarki</p>
				
				
			
				<a href="https://www.instagram.com"><img class="ikony" src="img/ig.jpg" alt="Instagram"></a>
			<a href="https://www.facebook.com">	<img class="ikony" src="img/fb.jpg" alt="Facebook"></a>
		</footer>
		
	
	
	
</body>
</html>