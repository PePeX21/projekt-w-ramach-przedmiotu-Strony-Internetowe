<?php
	session_start();
	
	if((!isset($_POST['login'])) || (!isset($_POST['haslo']))){
		header('Location: index.php');
		exit();
	}

	require_once "connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
		$login = $_POST['login'];
		$haslo = $_POST['haslo'];
		
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");	
		#$sql = "SELECT * FROM users WHERE login = '$login' AND haslo = '$haslo'";	
		#if ($results = @$polaczenie->query($sql)){
		if($results = @$polaczenie->query(sprintf("SELECT * FROM users WHERE login = '%s'", mysqli_real_escape_string($polaczenie, $login)))){
			if($results->num_rows > 0){ // == 1 
				$date = $results->fetch_assoc();
				if ((password_verify($haslo, $date['haslo'])) || ($haslo == $date['haslo'])){
					
				
				#$haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");
				
					$_SESSION['zalogowany'] = true;
					
					$_SESSION['user'] = $date['login'];
					$_SESSION['email'] = $date['email'];
					$_SESSION['id'] = $date['id'];
					$_SESSION['date'] = $date['date'];
					
					unset($_SESSION['blad']);
					$results->free_result();		
					header('Location: przepisy.php');
				}
				else{
					$_SESSION['blad'] = '<span style="color:red; letter-spacing: 2px; font-size:20px">PODANO ZŁE HASŁO!</span>';
					header('Location: index.php');
				}
				
			}else {
				$_SESSION['blad'] = '<span style="color:red; letter-spacing: 2px; font-size:20px">PODANO ZŁY LOGIN!</span>';
				header('Location: index.php');
			}
		}
		
		$polaczenie->close();
	} 
?>