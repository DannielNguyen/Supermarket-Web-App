<?php
	if(isset($_SESSION['name'])){
	$_SESSION['name'];
	$loginview='<div id="loginstatus">Logged in as '.$_SESSION['name'].'/<a href="index.php">Logout</a></div></div>';
	}else{
	$_SESSION['name'] = "";
	$loginview='<div id="loginstatus"><a href="loginController.php">Login</a>/<a href="registration.php">Register</a></div>';
	} 
?>