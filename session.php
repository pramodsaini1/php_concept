<?php
session_start();

 if(isset($_SESSION['counter'])){
    $_SESSION['counter']+=1;
 }
 else{
     $_SESSION['counter']=1;
 }
 $my_Msg = "This page is visited ".  $_SESSION['counter'];
?>
<html>

<head>

   <title>Starting a PHP session</title>

</head>

<body>

   <?php  echo ( $my_Msg ); ?>

</body>

</html>