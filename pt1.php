<?php
$val1 = "1234";
$val2 = "";

var_dump(strcmp($val1,$val2));


setcookie("newCookie","Hello",time()+3600,"/","localhost",0,1);

echo $_COOKIE['newCookie'];
?>
