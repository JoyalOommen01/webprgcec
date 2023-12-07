<html>
 <head><title>details print</title>
 </head>
 <body>
	<form action="details.php" method="POST">
	<label>Name</label>&nbsp;&nbsp;&nbsp;
	<input type="text" name="fname"><br>
 	<label>email</label>&nbsp;&nbsp;&nbsp;
	<input type="email" name="mailid"><br>
	<label>Id</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="number" name="idno"><br>
 	<label>Gender</label>
	<input type="text" name="gend"><br>
	<label>Date of Birth</label>
	<input type="Date" name="dob"><br>
	<input type="submit" name="submit">
	</form>
 	<?php
	   if($_POST){
		$fname=$_REQUEST["fname"];
		echo "Name= $fname"."<br>";
		$mailid=$_REQUEST["mailid"];
		echo "Email= $mailid"."<br>";
		$idno=$_REQUEST["idno"];
		echo "id= $idno"."<br>";
		$gend=$_REQUEST["gend"];
		echo "Gender= $gend"."<br>";
		$dob=$_REQUEST["dob"];
		echo "Date of Birth=$dob"."<br>";
		}
	?>
  </body>
</html>