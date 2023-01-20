<?php
// to chyba moge w osobnym pliku // nick na login
	session_start();
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Lomo - zaloz konto</title>
	<link rel="stylesheet" href="style_rejestracja.css" type="text/css" />

	<style>
		.error{
			color:red;
			margin-top: 10px;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
	<div class="banner-area">
        <div class="content-area">
			<div class="content">
			
				<div id="left">						
					<form action="rejestracjaBack.php" method = "post">	
						<?php
							if (isset($_SESSION['e_nick'])){
								echo 'Nickname: <span style="color:red; letter-spacing: 1px; font-size:14px">'.$_SESSION['e_nick'].'</span><br/> <input type="text" name="nick" /><br/>';
								unset($_SESSION['e_nick']);
							}
							else{
								echo 'Nickname: <br/> <input type="text" name="nick" /><br/>';
							}

							if (isset($_SESSION['e_mail'])){
								echo 'E_mail: <span style="color:red; letter-spacing: 1px; font-size:14px">'.$_SESSION['e_mail'].'</span><br/> <input type="text" name="email" /><br/>';
								unset($_SESSION['e_mail']);
							}
							else{
								echo 'E_mail: <br/> <input type="text" name="email" /><br/>';
							}

							if (isset($_SESSION['e_haslo'])){
								
								echo 'twoje haslo: <span style="color:red; letter-spacing: 1px; font-size:14px">'.$_SESSION['e_haslo'].'</span><br/> <input type="password" name="haslo" /><br/>';
								unset($_SESSION['e_haslo']);
							}
							else{
								echo 'twoje haslo: <br/> <input type="password" name="haslo" /><br/>';
							}

							echo 'powtorz haslo: <br/> <input type="password" name="haslo2" /><br/>';
							
							echo 'przypomnienie, pole nie obowiazkowe: <br/> <input type="text" name="przypomnienie" /><br/>';

								unset($_SESSION['e_haslo']);
						
							if (isset($_SESSION['e_regulamin'])){
								echo '<label>
										<input type="checkbox" name="regulamin"/> Akceptacja regulaminu <a href= "regulamin.php">link</a>
										</label><span style="color:red; letter-spacing: 1px; font-size:14px">'.$_SESSION['e_regulamin'].'</span>';
								unset($_SESSION['e_regulamin']);
							}
							else{
								echo '<label>
										<input type="checkbox" name="regulamin"/> Akceptacja regulaminu  <a href= "regulamin.php">link</a>
										</label>';
							}
							
						?>
						<br/><input type="submit" value="zarejestruj sie"/>
					</form>				
				</div>	
				
				<a href= "logout.php"><button class="btn1">Back</button></a>					
				           
			</div>
        </div>
    </div>
	
</body>

</html>