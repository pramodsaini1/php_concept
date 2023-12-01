<?php
if(empty($_GET["roll"])){
	header("location:dem.php?roll_err=1");
}
else{
	$roll=$_GET["roll"];
	$conn=mysqli_connect("localhost","root","","srev");
	if(mysqli_query($conn,"delete  from demo where sn=$roll")>0){
		header("location:dem.php?record_deleted=1");
	}
	else{
		header("location:dem.php?again=1");
	}
}



?>