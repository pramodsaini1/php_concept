<?php
$a=array(1,2,3,4,5);
print_r($a);
?>
<?php
  $a=array(1,"Hello",5.7);

  print_r($a);

?>
<!-- how many elmenents in the array  --->
<?php
  $a=array(1,"Hello",5.6);
  echo count($a);

  echo sizeof($a);

?>
<!---sum of elements in the array --->
<?php

   $a=array(1,"Hello",5.6);
    
   echo array_sum($a);

?>
<!-- how to reverse array element in the array --->

<?php

  $a=array(1,"Hello",5.6);

  print_r(array_reverse($a));

?>
<!-- how to sort the array element in the array  --->
<?php
   
   $a=array(1,"Hello",5.6);

   print_r(sort($a));

   echo "<br>";

   print_r($a);

   ?>