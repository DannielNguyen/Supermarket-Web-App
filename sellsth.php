<!doctype html>

<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>New Album Form</title>
</head>
<?php
include_once "templates/mainView.php";
	 include_once "templates/sitetemplate.php";
	 	 include_once "templates/latestproducts.php";
		  ?>
<body>
	<div>
		<!-- Add the form tag wit appropriate attributes -->
    <form action = "sellAuth.php" method= "post">
			<h3>New Item</h3>
			<p>Item: <input name="item" type="text"></p>
			<p>description: <input name="description" type="text"></p>
			<p>prices: <input name="price" type="text"></p>
			<p>image: <input name="image" type="text"></p>
			<p>quantity: <input name="quantity" type="number" value="2000"></p>
			<p>backordered: <input name="backorder" type="text" value="no"></p>	
			<p>arrivaldate: <input name="arvdate" type="text" value="unknown"></p>		
			<input type="submit" id="btn2" value="Submit">
			<!-- Redirect how would you handle user cancel -->
			<a href="displayTable.php"><input type="button" id="btn1"  value="Cancel"></a>
			<!-- Close the form tag -->
</form>
	</div>
</body>

</html>