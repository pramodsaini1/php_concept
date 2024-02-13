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