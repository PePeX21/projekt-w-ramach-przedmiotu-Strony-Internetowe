<?php
	session_start();
	$_SESSION['gosc'] = true;
	header('Location: przepisy.php');
?>