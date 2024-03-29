<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$servername = "localhost";
$username = "";
$password = "";
$dbname = "";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
echo "Could not connect to server\n";
die("Connection failed ". $conn->connect_error);
}
else {
    echo "Connection established\n";
}

$sql  ="CREATE TABLE users (
userid int not null auto_increment,
username varchar(24) not null,
password varchar(1024) not null,
profileid int not null,
constraint PK_USERS primary key (userid))";
if ($conn->query($sql) === TRUE) {
	echo"Table users Created";
} else {
echo $conn ->connect_error;
}

$sql = "CREATE TABLE profiles (
profileid int not null auto_increment,
firstname varchar(25) not null,
lastname varchar(25) not null,
dateofbirth date not null,
createdate date not null,
email varchar(128) not null,
constraint PK_PROFILES primary key(profileid))";
if ($conn->query($sql) === TRUE) {
	echo"Table profiles Created";
} else {
echo $conn ->connect_error;
}
$sql = "CREATE TABLE addresses (
addressid int not null auto_increment,
profileid int not null,
addressline1 varchar(128) not null,
addressline2 varchar(128) null,
cityid smallint not null,
stateid smallint not null,
zipcodeid smallint not null,
typeid smallint not null,
constraint PK_ADDRESSES primary key (addressid))";
if ($conn->query($sql) === TRUE) {
	echo"Table addresses Created";
} else {
echo $conn ->connect_error;
}
$sql = "CREATE TABLE billinginfo (
billinginfoid int not null auto_increment,
profileid int not null,
methodid smallint not null,
accountnumber varchar(24) not null,
routingnumber varchar(16) null,
cscnumber varchar(4) null,
expirationdate date null,
accountname varchar(100) not null,
accounttype smallint not null,
constraint PK_BILLINGINFO primary key (billinginfoid))";
if ($conn->query($sql) === TRUE) {
	echo"Table billinginfo Created";
} else {
echo $conn ->connect_error;
}
$sql = "CREATE TABLE inventory (
inventoryid int not null auto_increment,
itemname varchar(128) not null,
description varchar(256) not null,
pathtoimage varchar(256) null,
price decimal(6,2) not null,
numberinstock smallint not null,
backordered tinyint not null,
arrivaldate date not null,
constraint PK_INVENTORY primary key (inventoryid))";
if ($conn->query($sql) === TRUE) {
	echo"Table inventory Created";
} else {
echo $conn ->connect_error;
}
$sql = "CREATE TABLE searches (
searchid int not null auto_increment,
inventoryid int not null,
topic varchar(128) null,
keywords varchar(256) null,
producttype varchar(128) not null,
constraint PK_SEARCHES primary key (searchid))";
if ($conn->query($sql) === TRUE) {
	echo"Table searches Created";
} else {
echo $conn ->connect_error;
}
$sql = "CREATE TABLE purchases (
purchaseid int not null auto_increment,
profileid int not null,
purchasedate date not null,
subtotal decimal(8,2) not null,
tax decimal(6,2) not null,
shipping decimal (6,2) not null,
constraint PK_PURCHASES primary key (purchaseid))";
if ($conn->query($sql) === TRUE) {
	echo"Table purchases Created";
} else {
echo $conn ->connect_error;
}
$sql = "CREATE TABLE purchasedetails (
purchasedetailid int not null auto_increment,
purchaseid int not null,
inventoryid int not null,
numberpurchased int not null,
linetotal decimal(6,2) not null,
constraint PK_PURCHASEDETAILS primary key (purchasedetailid))";
if ($conn->query($sql) === TRUE) {
	echo"Table purchasedetails Created";
} else {
echo $conn ->connect_error;
}


$sql = "INSERT INTO inventory(itemname ,description ,pathtoimage ,price ,numberinstock ,backordered) values ("Microsoft Xbox One","Game Console","images/Microsoft Xbox One.jpg",599,120,0)";
if ($conn->query($sql) === TRUE) {
    echo "New item successfully saved";
} else {
    echo "Error: New item failed to be saved" . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO inventory(itemname ,description ,pathtoimage ,price ,numberinstock ,backordered) values ("Batman Arkham Knight","XBOX ONE Game","images/Batman Arkham Knight.jpg",59,30,0)";
if ($conn->query($sql) === TRUE) {
    echo "New artist successfully saved";
} else {
    echo "Error: New artist failed to be saved" . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO inventory(itemname ,description ,pathtoimage ,price ,numberinstock ,backordered) values ("Destiny ","XBOX ONE Game","images/Destiny - Xbox One.jpg",59,6,0)";
if ($conn->query($sql) === TRUE) {
    echo "New artist successfully saved";
} else {
    echo "Error: New artist failed to be saved" . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO inventory(itemname ,description ,pathtoimage ,price ,numberinstock ,backordered) values ("NBA 2K14","XBOX ONE Game","images/NBA 2K14 - Xbox One.jpg",59,5,0)";
if ($conn->query($sql) === TRUE) {
    echo "New artist successfully saved";
} else {
    echo "Error: New artist failed to be saved" . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO inventory(itemname ,description ,pathtoimage ,price ,numberinstock ,backordered) values ("Plants vs. Zombies Garden Warfare","XBOX ONE Game","images/Plants vs. Zombies Garden Warfare - Xbox One.jpg",59,4,0)"; 
if ($conn->query($sql) === TRUE) {
    echo "New artist successfully saved";
} else {
    echo "Error: New artist failed to be saved" . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO inventory(itemname ,description ,pathtoimage ,price ,numberinstock ,backordered) values ("Sony Playstation 4","Game Console","images/Sony - Playstation 4.jpg",299,3,0)"; 
if ($conn->query($sql) === TRUE) {
    echo "New artist successfully saved";
} else {
    echo "Error: New artist failed to be saved" . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO inventory(itemname ,description ,pathtoimage ,price ,numberinstock ,backordered) values ("The Last of Us Remastered","PlayStation 4","images/The Last of Us Remastered - PlayStation 4.jpg",59,7,0)"; 
if ($conn->query($sql) === TRUE) {
    echo "New artist successfully saved";
} else {
    echo "Error: New artist failed to be saved" . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO inventory(itemname ,description ,pathtoimage ,price ,numberinstock ,backordered) values ("Watch Dogs","PlayStation 4","images/Watch Dogs - PlayStation 4.jpg",59,20,0)";
if ($conn->query($sql) === TRUE) {
    echo "New artist successfully saved";
} else {
    echo "Error: New artist failed to be saved" . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO inventory(itemname ,description ,pathtoimage ,price ,numberinstock ,backordered) values ("Call of Duty Ghosts ","PlayStation 4","images/Call of Duty Ghosts - PlayStation 4.jpg",59,18,0)";
if ($conn->query($sql) === TRUE) {
    echo "New artist successfully saved";
} else {
    echo "Error: New artist failed to be saved" . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO inventory(itemname ,description ,pathtoimage ,price ,numberinstock ,backordered) values ("Infamous Second Son","PlayStation 4","images/Infamous Second Son - PlayStation 4.jpg",59,10,0)";
if ($conn->query($sql) === TRUE) {
    echo "New artist successfully saved";
} else {
    echo "Error: New artist failed to be saved" . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO inventory(itemname ,description ,pathtoimage ,price ,numberinstock ,backordered) values ("FIFA Soccer 14","PlayStation 4","images/FIFA Soccer 14 (PS4).jpg",59,5,0)";
if ($conn->query($sql) === TRUE) {
    echo "New artist successfully saved";
} else {
    echo "Error: New artist failed to be saved" . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO inventory(itemname ,description ,pathtoimage ,price ,numberinstock ,backordered) values ("LG - 65 inch LED - 240Hz - Smart - 3D - HDTV","Flat Screen","images/LG - 65 inch Class (64-5 a half 8inch Diag.) - LED - 4K Ultra HD TV (2160p) - 240Hz - Smart - 3D - HDTV.jpg",999.95,18,0)";
if ($conn->query($sql) === TRUE) {
    echo "New artist successfully saved";
} else {
    echo "Error: New artist failed to be saved" . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO inventory(itemname ,description ,pathtoimage ,price ,numberinstock ,backordered) values ("Samsung - 40 inch  LED-LCD TV - 1080p - HDTV","Flat Screen","images/Samsung - 40 inch Class (40 inch Diag.) - LED-LCD TV - 1080p - HDTV 1080p.jpg",679.99,12,0)";
if ($conn->query($sql) === TRUE) {
    echo "New artist successfully saved";
} else {
    echo "Error: New artist failed to be saved" . $sql . "<br>" . $conn->error;
}

$conn->close();
?>