<form method="post" action="retrieve.php">
Roll.no:<input type="text" name="roll"><br><br>
Name:<input type="text" name="user"><br><br>
Avg:<input type="text" name="avg"><br><br>
<input type="submit" value="submit">
</form>
<?php
$conn=mysqli_connect("localhost","root","","srev");
$rs=mysqli_query($conn,"select * from demo");
echo"<table border=1 width=50% heigth=50%>";
while($r=mysqli_fetch_array($rs)){
	?>
	<tr>
	<td><?php echo $r[0]?></td><td><?php echo $r[1]?></td><td><?php echo $r[2]?></td><td><a href='edit.php?roll=<?php echo $r[0]?>'>Edit</a></td><td><a href='delete.php?roll=<?php echo $r[0]?>'>Delete</a></td>
	</tr>
	
	<?php
	
	
}
echo "</table>";



?>