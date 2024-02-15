<?php
session_start();

?>
<!---this is initialized the session  --->

<!--- how to set the session ---->
<?php
//session name
$_SESSION['name']='pramod kumar saini';

// session value

$_SESSION['email']='pramod@gmail.com';

?>

<!---how to unset or destroy the session

<?php

unset($_SESSION['email'])

session_destroy();
?>