<?php

	session_start();
	$_SESSION = [];
	session_destroy();

	header("Location: ../Kelompok_Restoran/login.php");
	exit;

?>