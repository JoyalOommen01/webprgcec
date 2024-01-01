<?php include("connect.php");
 if($_POST){
		$bookno=$_POST['bookno'];
		$booktitle=$_POST['booktitle'];
		$bookedition=$_POST['booked'];
		$bookpub=$_POST['bookpub'];

		$sql=mysqli_query($conn,"INSERT INTO book_details VALUES('$bookno','$booktitle','$bookedition','$bookpub')");
		
		$query =mysqli_query($conn,"select * from book_details");
		
		}
?>
<html>
	<head>
		<title>display </title>
	</head>
	<body>
		<table border="1px solid black">    
	    	     <tr> 
			<th>Book Number</th> 
			<th>Title</th> 
			<th>Edition</th> 
			<th>Publisher</th> 
		     </tr> 
		     <tr> 
			<?php  
			    while($row = mysqli_fetch_assoc($query)){ 
				echo "<tr>"; 
				   echo "<td>".$row['bookno']."</td>"; //table coloum name 
				   echo "<td>".$row['booktitle']."</td>";  
				   echo "<td>".$row['bookedition']."</td>";  
				   echo "<td>".$row['bookpub']."</td>";  
				echo "</tr>"; 
			} ?> 
		     </tr> 
		</table> 
	</body>
</html>