<!doctype html>

<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>Adding Album to DB</title>
</head>

<body>
	<div>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$servername = "localhost";
$username = "pnguyen91";
$password = "pnguyen91";
$dbname = "pnguyen91";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
echo "Could not connect to server\n";

}
else {
    echo "Connection established\n";
}
if(isset($_POST['description']) && isset($_POST['item']) && isset($_POST['price']) && isset($_POST['image']) && isset($_POST['quantity']) && isset($_POST['backorder'])&& isset($_POST['arvdate'])){
	
$item= $_POST["item"];
$description= $_POST["description"];
$price= $_POST["price"];
$image= $_POST["image"];
$quantity= $_POST["quantity"];
$backorder= $_POST["backorder"];
$arvdate= $_POST["arvdate"];


}
else 
{
	echo "Information is not supplied";
}

// write the sql query in php file to Insert the data into the table


$sql = "INSERT INTO inventory(itemname,description,pathtoimage,price,numberinstock,backordered,arrivaldate) VALUES ('$item','$description','$image','$price','$quantity','$backorder','$arvdate')";
if ($conn->query($sql) === TRUE) {
    echo "New Item Added saved";
} else {
	die($conn->error);
}

$conn->close();
header("Location:sellDash.php");

?>
	<!-- Redirect the user to show the data -->
	<a href="displayTable.php"><input type="button" id="btn1" value="OK"></a>
	</div>
</body>

</html>