<?php
if(empty($_GET["roll"])){
	header("location:edit.php?roll_err=1");
}
else{
	$roll=$_GET["roll"];
	if( empty($_POST["user"])||empty($_POST["avg"])){
		  header("location:edit.php?empty=1");
	 }
	 else{
		$name=$_POST["user"];
		$avg=$_POST["avg"];
 		$conn=mysqli_connect("localhost","root","","srev");
		if(mysqli_query($conn,"update demo set name='$name',avgr=$avg where sn=$roll")>0){
            header("location:dem.php?update_success=1");
         }
         else{
	        header("location:dem.php?again=1");
		 }
	 }
	
	
}





?>