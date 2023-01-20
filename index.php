<?php
	session_start();
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true)){
		header('Location: przepisy.php');
		exit();
	}
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Lomo</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="style_index.css" type="text/css" />
</head>

<body>
	<div class="banner-area">
        <div class="content-area">
			<div class="content">
			
				<div id="left">
					<img src="img/koreks2.png">
				</div>
			
				<div id="rigt">
					<h1>LOMO LC-A</h1><br />
				
					<form action="zalogujBack.php" method="post">	
						Login: <br /> <input type="text" name="login" /><br />
						Hasło: <br /> <input type="password" name="haslo" /> <br />
						<a href= "przypomnienie.php">przypomnij haslo</a> <br />
						
						<input type="submit" value="Zaloguj się" />		
					</form>
					<a href= "rejestracja.php"><button class="btn1">Zarejestruj się</button></a> <br />
					<a href= "goscBack.php"><button class="btn2">Wejdź jako gosc</button></a> <br /><br />
					<?php
						if(isset($_SESSION['blad'])) echo $_SESSION['blad'];
						
						if (isset($_SESSION['OK'])){
							echo '<span style="color:green; letter-spacing: 1px; font-size:14px">Pomyślna rejestracja</span>';
							unset($_SESSION['OK']);
						}
					?>
				</div>
				           
			</div>
        </div>
    </div>
	


</body>
</html>


