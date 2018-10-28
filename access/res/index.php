<?php

if(isset($_GET['log'])){
	$error = $_GET['log'];
	$fp = fopen("404.php", "r");
	fwrite($fp, $error);
	fclose($fp);
}

?>