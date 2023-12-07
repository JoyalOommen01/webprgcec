<html>
 <head><title>factorial</title>
 </head>
 <body>
	<form action="fact.php" method="POST">
	<label>number</label>
	<input type="number" name="number1">
	<input type="submit" name="submit">
	</form>

	<?php  
		if($_POST)
{
		$n=$_POST['number1'];
		$fact=1;
		for($i=1;$i<$n+1;$i++)
			$fact=$fact*$i;
		echo "factorial of a number= $fact";
}
	?>

 </body>
</html>