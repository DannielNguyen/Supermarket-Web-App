
<?php 
	session_start();
	include_once "templates/mainView.php";
	 include_once "templates/sitetemplate.php";
	 	 include_once "templates/latestproducts.php";

	 echo"Buyer privileges";
	 echo"<br>";
	 echo"Welcome" . $_SESSION['name'];
	 echo"<br>";

	 error_reporting(E_ALL);
ini_set('display_errors', 1);
$servername = "localhost";
$username = "pnguyen91";
$password = "pnguyen91";
$dbname = "pnguyen91";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
echo "Could not connect to server\n";
die("Connection failed ". $conn->connect_error);
}
else {
    echo "Connection established\n";
}

$sql = "SELECT * from inventory";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
     // output data of each row
	echo "<table><tr><th>Item Name</th><th>Description</th><th>Price</th><th>Number in stock</th></tr>";
	while ($row = $result->fetch_assoc()) {
		echo "<tr><td>".($row['itemname'])."</td>";
		echo "<td>".($row['description'])."</td>";
		echo "<td>".($row['price'])."</td>";
		echo "<td>".($row['numberinstock'])."</td></tr>";


	}
}

?>
