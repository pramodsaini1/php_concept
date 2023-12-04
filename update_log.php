<?php
if(!empty($_COOKIE["login"])){
	$email=$_COOKIE["login"];
	$conn=mysqli_connect("localhost","root","","wedding");
	 $rs=mysqli_query($conn,"select * from gecb where email='$email'");
	 if($r=mysqli_fetch_array($rs)){
		 if(empty($_POST["fname"]) ||empty($_POST["lname"]) ||empty($_POST["gender"]) ||empty($_POST["caste"]) ||empty($_POST["religion"]) ||empty($_POST["state"]) ||empty($_POST["country"]) ||empty($_POST["dob"])){
			header("location:edit_log.php?empty=1");
		 }
		 else{
			$fname=$_POST["fname"];
			 $lname=$_POST["lname"];
			 $gender=$_POST["gender"];
			 $caste=$_POST["caste"];
			 $religion=$_POST["religion"];
			 $state=$_POST["state"];
			 $country=$_POST["country"];
			 $dob=$_POST["dob"];
			 
			 if(mysqli_query($conn,"update gecb set fname='$fname',lname='$lname',gender='$gender',caste='$caste',religion='$religion',state='$state',country='$country' ,dob='$dob' where email='$email'")>0){
				 header("location:profile.php?record_updated=1");
			 }
			 else{
				 header("location:edit_log.php?agin=1");
			 }
		 }
		  
		  
			 
		 
		 
	 }
	 }
	
	



?>