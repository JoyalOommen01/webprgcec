<html>
 <head><title>odd_or_even</title>
 </head>
 <body>
	<form action="oddoreven.php" method="GET">
	<label>number</label>
	<input type="number" name="number1">
	<input type="submit" name="submit">
	</form>

	<?php  
		if($_GET)
{
		$num=$_GET['number1'];
		if(($num%2 )== 0)

			{echo "$num is even";}
		else
			{echo "$num is odd"; }
}
	?>

 </body>
</html>