
<?php 
	echo"Welcome" . $_SESSION['name'];

     $title = "Welcome to Mega Lo Mart";
     $scriptinclude='<script src="scripts/addtocart.js" type="text/javascript"></script>';
     $loginview = "";
	 $content = "";
	 $logincontent = "";
	 $registrationcontent = "";
	 $passwordcontent="";
	 $contactcontent ="";
	 include_once "templates/mainView.php";
	 include_once "templates/sitetemplate.php";
	 include_once "templates/latestproducts.php";
?>
	
	