<?php
// to chyba moge w osobnym pliku // nick na login
	session_start();
	if(isset($_POST['email'])){ //mozna tu wiecej
		$OK = true;
		$nick = $_POST['nick'];
		if((strlen($nick) < 3) || (strlen($nick)>20)){
			$OK=false;
			$_SESSION['e_nick']="nick nie miedzy 3 a 20";
		}
		if (ctype_alnum($nick)== false){
			$OK=false;
			$_SESSION['e_nick']="nick moze sie skladac z liter i cyfr";
		}
		$email = $_POST['email'];
		$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
		if((filter_var($emailB, FILTER_VALIDATE_EMAIL) == false) || ($emailB != $email)){
			$OK = false;
			$_SESSION['e_mail']="Podaj poprawny adres e-mail";
		}
		
		$haslo = $_POST['haslo'];
		$haslo2= $_POST['haslo2'];
		
		if ($haslo!=$haslo2)
		{
			$wszystko_OK=false;
			$_SESSION['e_haslo']="Podane hasła nie są identyczne!";
		}	
		
		if ((strlen($haslo)<8) || (strlen($haslo)>20))
		{
			$wszystko_OK=false;
			$_SESSION['e_haslo']="Hasło musi posiadać od 8 do 20 znaków!";
		}
	
		$haslo_hash = password_hash($haslo, PASSWORD_DEFAULT);

		if (!isset($_POST['regulamin']))
		{
			$wszystko_OK=false;
			$_SESSION['e_regulamin']="Potwierdź akceptację regulaminu!";
		}	


		require_once "connect.php";
		mysqli_report(MYSQLI_REPORT_STRICT);
		
		try 
		{
			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			else
			{
				//Czy email już istnieje?
				$rezultat = $polaczenie->query("SELECT id FROM users WHERE email='$email'");
				
				if (!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_takich_maili = $rezultat->num_rows;
				if($ile_takich_maili>0)
				{
					$OK=false;
					$_SESSION['e_mail']="Istnieje już konto przypisane do tego adresu e-mail!";
				}		

				//Czy nick jest już zarezerwowany?
				$rezultat = $polaczenie->query("SELECT id FROM users WHERE login='$nick'");
				
				if (!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_takich_nickow = $rezultat->num_rows;
				if($ile_takich_nickow>0)
				{
					$OK=false;
					$_SESSION['e_nick']="Istnieje już gracz o takim nicku! Wybierz inny.";
				}
				
				if ($OK==true)
				{
					//Hurra, wszystkie testy zaliczone, dodajemy gracza do bazy
					
					if ($polaczenie->query("INSERT INTO users VALUES (NULL, '$nick', '$haslo_hash', '$email', current_timestamp())"))
					{
						if($_POST['przypomnienie'] != ""){
							$przypomnienie = $_POST['przypomnienie'];
							$polaczenie->query("INSERT INTO `przypomnienie` (`login`, `haslo`) VALUES ('', ''), ('$nick', '$przypomnienie')");
						}
						
						//Usuwanie błędów rejestracji
						if (isset($_SESSION['e_nick'])) unset($_SESSION['e_nick']);
						if (isset($_SESSION['e_mail'])) unset($_SESSION['e_mail']);
						if (isset($_SESSION['e_haslo'])) unset($_SESSION['e_haslo']);
						if (isset($_SESSION['e_regulamin'])) unset($_SESSION['e_regulamin']);
						$_SESSION['OK'] = 'ok';
						header('Location: index.php');
					}
					else
					{
						header('Location: rejestracja.php');
						throw new Exception($polaczenie->error);
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
		if($OK==false){
			header('Location: rejestracja.php');
		}
		
	}
?>