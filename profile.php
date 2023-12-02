<?php
if(!isset($_COOKIE["login"])){
	header("location:login.php");
}
else{
	$email=$_COOKIE["login"];
	$conn=mysqli_connect("localhost","root","","wedding");
	$rs=mysqli_query($conn,"select * from gecb where email='$email'");
	echo"<table border=1 width=50% heigth=50%>";
	if($r=mysqli_fetch_array($rs)){
		?>
		<tr>
		<td>First Name:</td><td><?php echo $r["fname"]?></td>
		 </tr>
		 <tr>
		<td>Last Name:</td><td><?php echo $r["lname"]?></td>
		 </tr>
		 <tr>
		<td>Gender:</td><td><?php echo $r["gender"]?></td>
		 </tr>
		 <tr>
		<td>Caste:</td><td><?php echo $r["caste"]?></td>
		 </tr>
		 <tr>
		<td>Religion</td><td><?php echo $r["religion"]?></td>
		 </tr>
		 <tr>
		<td>State:</td><td><?php echo $r["state"]?></td>
		 </tr>
		 <tr>
		<td>Country:</td><td><?php echo $r["country"]?></td>
		 </tr>
		 <tr>
		<td>Dob:</td><td><?php echo $r["dob"]?></td>
		 </tr>
		 <tr>
		<td><a href="edit.php">Edit</a></td><td> <a href="logout.php">logout</a></td>
		 </tr>
		 
		
		
		<?php
	}
	echo"</table>";
	
	
}




?>