<?php
if(!empty($_COOKIE["login"])){
	 $email=$_COOKIE["login"];
	 $conn=mysqli_connect("localhost","root","","wedding");
	 $rs=mysqli_query($conn,"select * from gecb where email='$email'");
	 if($r=mysqli_fetch_array($rs)){
		 ?>
		 <form method="post" action="update_log.php">
		  First Name:<input type="text" name="fname" value="<?php echo $r["fname"]?>"><br><br>
		  Last Name:<input type="text" name="lname" value="<?php echo $r["lname"]?>"><br><br>
		  Gender:<select name="gender">
		         <option value="<?php echo $r["gender"]?>"><?php echo $r["gender"]?></option>
				 <option value="Male">Male</option>
				 <option value="Female">Female</option>
		   </select><br><br>
		  Caste:<select name="caste">
		         <option value="<?php echo $r["caste"]?>"><?php echo $r["caste"]?></option>
				 <option value="OBC">OBC</option>
				 <option value="GEN">GEN</option>
				  <option value="SC">SC</option>
				 <option value="ST">ST</option>
				 
		   </select><br><br>
		   Religion:<select name="religion">
		         <option value="<?php echo $r["religion"]?>"><?php echo $r["religion"]?></option>
				 <option value="Hindu">Hindu</option>
				 <option value="Sikh">Sikh</option>
				  <option value="Muslim">Muslim</option>
				 <option value="Jain">Jain</option>
				 
		   </select><br><br>
		   State:<select name="state">
		         <option value="<?php echo $r["state"]?>"><?php echo $r["state"]?></option>
				 <option value="Rajasthan">Rajasthan</option>
				 <option value="Mizoram">Mizoram</option>
				  <option value="Manipur">Manipur</option>
				 <option value="Uttarpradesh">Uttarpradesh</option>
				 
		   </select><br><br>
		   Country:<select name="country">
		         <option value="<?php echo $r["country"]?>"><?php echo $r["country"]?></option>
				 <option value="India">India</option>
				 <option value="Pakisthan">Pakisthan</option>
				  <option value="Australia">Australia</option>
				 <option value="England">England</option>
				 
		   </select><br><br>
		  Dob:<input type="date" name="dob" value="<?php echo $r["dob"]?>"><br><br>
		  <input type="submit" value="Update">
		 
		 </form>
		<?php 
	 }
}


?>