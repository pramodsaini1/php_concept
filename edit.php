<?php
if(empty($_GET["roll"])){
	header("location:dem.php?roll_err=1");
}
else{
	$roll=$_GET["roll"];
	$conn = mysqli_connect("localhost","root","","srev");
		 $rs = mysqli_query($conn,"select*from demo where sn=$roll");
 		 if($r=mysqli_fetch_array($rs)){
		?>
        <form method="post" action="update.php?roll=<?php echo $r[0]?>">
		Name:<input type="text"value="<?php echo $r[1]?>" name="user"><br><br>
		Avgr:<input type="text"value="<?php echo $r[2]?>" name="avg"><br><br>
		<input type="submit" value="Update">
		
		
		</form>
		
		<?php
		
	}
	 
	
	
}




?>