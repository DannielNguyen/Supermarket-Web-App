<?php 
    $title="Product Search";
    $keywords ="";
    if(isset($_POST["keywords"])) $keywords = $_POST["keywords"];
    $content ="$keywords";
    include_once "templates/sitetemplate.php";

$servername = "localhost";
$username = "";
$password = "";
$dbname = "";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
echo "Could not connect to server\n";

}
else {
    echo "Connection established\n";
}
    echo "<br>";
    echo "showing results with keyword ". $keywords;
    $sql = "SELECT * from inventory WHERE itemname like '%$keywords%'";
$result = $conn->query($sql);

echo "<h3>Search result</h3>";

if ($result->num_rows > 0) {
     // output data of each row
	echo "<table><tr><th>Item Name</th><th>Description</th><th>Price</th><th>Number in stock</th></tr>";
	while ($row = $result->fetch_assoc()) {
		echo "<tr><td>".($row['itemname'])."</td>";
		echo "<td>".($row['description'])."</td>";
		echo "<td>".($row['price'])."</td>";
		echo "<td>".($row['numberinstock'])."</td>";
		echo"</tr>";

	}
	echo "</table>";
}
else{
    echo "No result with given keywords";
}


?>
