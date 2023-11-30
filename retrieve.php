<?php
if(empty($_POST["roll"])||empty($_POST["user"])||empty($_POST["avg"])){
	header("location:dem.php?empty=1");
}
else{
	$roll=$_POST["roll"];
	$name=$_POST["user"];
	$avg=$_POST["avg"];
	$conn=mysqli_connect("localhost","root","","srev");
	if(mysqli_query($conn,"insert into demo values($roll,'$name',$avg)")>0){
		header("location:dem.php?record_inserted=1");
	}
	else{
		header("location:dem.php?again=1");
	}
	
}





?>