<?php
  $s="pramod kumar saini";

  echo $s;
?>

<!--- string length ---->

<?php

    $s="pramod kumar saini";

    echo strlen($s);

?>

<!--- ord function given  ASCII value ---->

<?php
    
    echo ord("A");

?>

<!---Access the outside ----->

<?php

    $s="pramod";

?>

<h1>Welcome<?=$s ?></h1>

<!---string comparision ----->
<?php
   
   $s="Anil";
   $t="anil";
   $i=strcmp($s,$t);

   if($i==0){
       echo "string are same";
   }
   else{
       echo "not same";
   }

?>

<?php

   $s="Anil";

   $t="anil";

   $i= strcmp($s,$t);

   echo $i;

?>

<!--- string replace --->

<?php
   
   $s="Anil Sharma";

   $r=str_replace("Sharma","kumawat",$s);

   echo $r;

?>