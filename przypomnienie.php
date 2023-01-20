<?php
	session_start();
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
				<h1>Przypomnienie:</h1><br />
				
				<form action="przypomnienieBack.php" method="post">	
					Podaj swoj Login: <br /> <input type="text" name="login" /><br />
					
					<input type="submit" value="przypomnij" />		
				</form>		
				
				<?php					
					if (isset($_SESSION['haslo'])){
						echo $_SESSION['haslo'];
						unset($_SESSION['haslo']);
					}
				?>
				<br />
				<br />
				
				
				<a href= "index.php"><button class="btn1">Back</button></a> <br />
				           
			</div>
        </div>
    </div>
	


</body>
</html>