<?php
$pass=123;
 echo md5($pass);//32 charcter hexadecimal charcter is given
echo"<br>";
//by default given the 32 charcter haxadecimal 
echo md5($pass,TRUE);//16 binary charcter is given

echo "<br>";

 $password_encrypt=12345;
 echo password_hash($password_encrypt,PASSWORD_DEFAULT);

 echo "<br>";

 echo password_verify($password_encrypt,password_hash($password_encrypt,PASSWORD_DEFAULT));
//password-verify function is the decrypt method and given the boolean value for the both is matching
?>