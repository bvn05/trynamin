<?php
	session_start();

	unset($_SESSION['login_id']);
	unset($_SESSION['email']);
	unset($_SESSION['name']);
	unset($_SESSION['picture']);

	header('location: login.php');
?>