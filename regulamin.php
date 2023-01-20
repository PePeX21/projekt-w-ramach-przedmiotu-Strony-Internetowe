<?php
	session_start();
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true)){
		header('Location: gra.php');
		exit();
	}
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Lomo - regulamin</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="style_rejestracja.css" type="text/css" />
</head>

<body>
	<div class="banner-area">
        <div class="content-area">
			<div class="content">
				<h1 style ="font-size:60px;">
				REGULAMIN:
				</h1>
				<p>
				<h3>
					Opis strony:
				</h3>
				strona poswiecona zbieraniu przepisow i metod na wywolywania filmow w kolorze i czarno-bieli
				</p>
				<p>
				<h3>
					zasady logowania:
				</h3>
				nick moze sie skladac jedynie z liter i cyfr <br />
				e-mail musi byc napisany poprawnie skladniowo <br />
				haslo musi posiadac od 8 do 20 znakow <br />
				do zarejestrowania wymagana jest akceptacja regulaminu<br />
				</p>
				<p>
				<h3>
					zasady strony:
				</h3>
				za nie udane proby wywolania filmu zgodnie z przepisem nie odpowiada tworca strony <br />
				zakaz wrzucania niebezpiecznych przepisow <br />				
				</p>
				<a href= "rejestracja.php"><button class="btn2">back</button></a> <br /><br />		           
			</div>
        </div>
    </div>
</body>
</html>
