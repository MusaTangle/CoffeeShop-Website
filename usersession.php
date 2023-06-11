<?php 
session_start();
	if (!$_SESSION['usermail']) {
		header("location:login.php");
	}

?>