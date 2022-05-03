<?php
session_start();
$username = $_POST['username'];
$_SESSION['name'] = $username;
echo $_SESSION['name'];
if($_SESSION['name'] == 'admin123'){
header("Location:adminDashboard.php");
}
else{

header("Location:index.php");
}
?>