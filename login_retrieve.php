<?php
if(empty($_POST["email"]) || empty($_POST["pass"])){
	header("location:login.php?empty=1");
}
else{
	$email=$_POST["email"];
	$pass=$_POST["pass"];
	 $conn=mysqli_connect("localhost","root","","wedding");
     $rs = mysqli_query($conn,"select*from gecb where email='$email'");
	 if($r=mysqli_fetch_array($rs)){
		 if($r["pass"]==$pass){
			 setcookie("login",$email,time()+3600);
			 header("location:profile.php");
		 }
		 else{
			 header("location:login.php?invalid-pass=1");
		 }
		 
	 }
	 else{
		 header("location:login.php?invalid=1");
	 }
}



?>