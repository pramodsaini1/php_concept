<?php
if(isset($_GET["record_inserted"])){
    echo"<h3 style='color:red'>Record Inserted</h3>";
}
else if(isset($_GET["again"])){
    echo"<h3 style='color:blue'>Try Again</h3>";
}
?>

<form method="post" action="retrieve.php">

Roll.No:<input type="text" name="roll" ><br><br>

Name:<input type="text" name="user"><br><br>

Avg:<input type="text" name="avg"><br><br>

<input type="submit" value="submit">
</form>
<?php
$conn=mysqli_connect("localhost","root","","java");
$rs=mysqli_query($conn,"select * from demo");
echo "<table border=1 width=100%>";
while($r=mysqli_fetch_array($rs)){
    ?>
    <tr><td><?php echo $r[0]?></td><td><?php echo $r[1]?></td><td><?php echo $r[2]?></td><td><a href="edit.php?roll=<?php echo $r[0]?>">Edit</a></td><td><a href="delete.php?roll=<?php echo $r[0]?>">Delete</a></td></tr>
    <?php
}
echo "</table>";
?>