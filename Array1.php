<?php
   $a=array("pramod","Hello","sain",1,3,10,2,20);

   rsort($a);
   echo "<br>";

   print_r($a);
?>
<!---push and pop the element in the array --->

<?php
 
  $a=array(1,"pramod","saini",3,10,20);

  array_push($a,1000);

  for($i=0;$i<count($a);$i++){
        echo $a[$i]."<br>";
  }
  ?>
  <?php

    $a=array(1,"pramod","saini",3,10,20);

    array_push($a,3000);

    for($i=0;$i<count($a);$i++){
         echo $a[$i]."<br>";
    }

    echo "<br>";

    echo array_pop($a);

?>

<!---current  and next element corresponding --->

<?php
   $a=array(1,2,3,4,5);

   echo current($a);

   echo next($a);


?>

<?php

   $a=array("a"=>1,"b"=>"Hello","v"=>10);

   print_r($a);

   echo $a["b"];

?>

<!---implode means combine the array concept---->
<?php

  $a=array("Hello","How","are","you");

  $s= implode("",$a);

  echo $s;
  echo "<br>";
?>

<!--- explode concept  --->

<?php

//    $a=array("Hello","How","are","you");

//   // $s=explode("",$a);

//    print_r($s);

   ?>
<!---combine of the two array ----one array is key and second of the value---->

<?php
    $a=array("Hello","How","are","you");

    $b=array(1,2,3,4);

    $c=array_combine($a,$b);
    print_r($c);

?>
