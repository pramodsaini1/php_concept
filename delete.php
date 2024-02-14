<?php
if(empty($_GET["roll"])){
    header("location:demo.php?empty=1");
}
else{
    $roll=$_GET["roll"];

    $conn=mysqli_connect("localhost","root","","java");
    if(mysqli_query($conn,"delete * from demo where sn=$roll")>0){
        header("location:demo.php?record_deleted=1");
    }
    else{
        header("location:demo.php?again=1");
    }
}
?>