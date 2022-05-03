
<?php 
	session_start();
	include_once "templates/mainView.php";
	 include_once "templates/sitetemplate.php";
	 	 include_once "templates/latestproducts.php";

	 echo"Admin privilelges";
	 echo"<br>";
	 echo"Welcome " . $_SESSION['name'];
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
$sql = "SELECT * from users";
$result = $conn->query($sql);
echo "<h3>Users Manager</h3>";

if ($result->num_rows > 0) {
     // output data of each row
	echo "<table><tr><th>User id</th><th>Username</th><th>Hashed Password</th></tr>";
	while ($row = $result->fetch_assoc()) {
		echo "<tr><td>".($row['userid'])."</td>";
		echo "<td>".($row['username'])."</td>";
		echo "<td>".($row['password'])."</td>";


	}
	echo "</table>";
}


	//  Run a loop and display the records on screen dynamically
	// lets say the above query returned 20 rows
	// Now display the table on screen with 20 records
	

$sql = "SELECT * from profiles";
$result = $conn->query($sql);


echo "<h3>Users Profiles</h3>";
if ($result->num_rows > 0) {
     // output data of each row
	echo "<table><tr><th>First name</th><th>Last Name</th><th>Date of birth</th><th>Email</th></tr>";
	while ($row = $result->fetch_assoc()) {
		echo "<tr><td>".($row['firstname'])."</td>";
		echo "<td>".($row['lastname'])."</td>";
		echo "<td>".($row['dateofbirth'])."</td>";
		echo "<td>".($row['email'])."</td></tr>";


	}

	//  Run a loop and display the records on screen dynamically
	// lets say the above query returned 20 rows
	// Now display the table on screen with 20 records
	echo "</table>";

}
$sql = "SELECT * from inventory";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
     // output data of each row
	echo "<h3>Inventory</h3>";

	echo "<table><tr><th>Item Name</th><th>Description</th><th>Price</th><th>Number in stock</th><th>backorder</th><th>arrivial Date</th></tr>";
	while ($row = $result->fetch_assoc()) {
		echo "<tr><td>".($row['itemname'])."</td>";
		echo "<td>".($row['description'])."</td>";
		echo "<td>".($row['price'])."</td>";
		echo "<td>".($row['numberinstock'])."</td>";
		echo "<td>".($row['backordered'])."</td>";
		echo "<td>".($row['arrivaldate'])."</td>";
		echo"</tr>";



	}
}

?>
