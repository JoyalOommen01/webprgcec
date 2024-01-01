<?php
	include("connect.php");
?>

<html>
	<head>
		<title>Book Details</title>
	</head>
	<body>
	    <center>
		<h2> Book details</h2>
		<form action="Display.php" method="post">
		Book Number:<input type="number" name ="bookno"><br><br>
		Book Title:<input type="text" name ="booktitle"><br><br>
		Book Edition:<input type="number" name ="booked"><br><br>
		Book Publisher:<input type="text" name ="bookpub"><br><br>
		<input type="submit" name="submit" value="Submit">
		</form>
	    </center>
	</body>
</html>