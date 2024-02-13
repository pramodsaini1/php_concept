<?php
if(empty($_POST["roll"]) || empty($_POST["user"]) || empty($_POST["avg"])){
      header("location:demo.php?empty=1");
}
else{
     $roll=$_POST["roll"];
     $name=$_POST["user"];
     $avg=$_POST["avg"];

     $conn=mysqli_connect("localhost","root","","java");

     if(mysqli_query($conn,"insert into demo value($roll,'$name',$avg)")){
          header("location:demo.php?record_inserted=1");
     }
     else{
         header("location:demp.php?again=1");
     }
}



?>