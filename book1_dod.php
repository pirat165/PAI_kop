
<?php

session_start();

if ((!isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==false))
	{
		header('Location: recenzje.php');
		exit();
	}


$id_osoby = $_SESSION['ID_os'];




 


?>


<!doctype html>



<html>
<head>
<meta charset="UTF-8">
			
<title>Recenzja ksiazki 1</title>
			
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
						<li> <a href="recenzje.php">Recenzje</a></li>
						<li> <a href="opinie.php">Opinie</a></li>
						
						<li><A href="logout.php">Wyloguj</A></li>
					</ul>				
				</div>
			</div>
		</header>

		<!-- Banner -->
		<section class="banner">
			<div class="container center-text">
				<h1 style="line-height: 180%; color: white;">Księgarnia </h1>
				
				<h3> <mark> Opisz swoje doznania na temat ulubionej książki</mark></h3>
			</div>			
		</section>
		
		
		
			<div id="oceny_href"></div>


		
		
		
		 <br>
		 <br>
		 <br>
		

	
	<div class="container">
				<h2>Recenzja Książki</h2>
		<h4>Jak człowiek staje się mordercą. Mroczne opowieści psychiatry sądowego</h4>
					<p>Autor: Taylor Richard</p>
				<div class="col-half">
					
					
					<form action="skrypt_book1.php" method="post" >
					
						
						
						
					

                                    <br>
                                    <br>
						
						<label for="recenzja1">
							<strong>Recenzja MAX 1000 znaków</strong>
						</label><br>
						
						<textarea name="recenzja1" cols="50" rows="10"  maxlength="1000">Recenzja</textarea>
						<br>
						<button type="submit" class="button button-dark">Wyślij</button>
					</form>
				</div>

	
	
	<br>
	
	</div>
	
	
	
	
	

	
	
	
</body>
</html>