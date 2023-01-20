<?php
	session_start();
	
	if(!isset($_POST['login'])){
		header('Location: przypomnienie.php');
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
		
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");	
		$sql = "SELECT * FROM przypomnienie WHERE login = '$login'";	
		if ($results = @$polaczenie->query($sql)){
			if($results->num_rows > 0){ // == 1 
				$date = $results->fetch_assoc();
				
				$_SESSION['haslo'] = '<span style="color:green; letter-spacing: 2px; font-size:30px">Twoja podpowiedz: '.$date['haslo'].'</span><br />';
					
				$results->free_result();		
				header('Location: przypomnienie.php');
				
			}else {
				$_SESSION['haslo'] = '<span style="color:red; letter-spacing: 2px; font-size:30px">nie znaleziono uzytkownika o takim loginie!</span>';
				header('Location: przypomnienie.php');
			}
		}
		$polaczenie->close();
	} 
?>