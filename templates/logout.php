<?php
	if(isset($_SESSION['name'])){
		unset($_SESSION['name']);
		session_destroy();
		header("Location:index.php");
		exit;
	}
?>