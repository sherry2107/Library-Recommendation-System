<?php
	session_start();
	$user  = $_SESSION['sess_user'] ;
	session_destroy();
	header('location:index.php');
	?>