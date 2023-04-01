<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<!--Barra -->
<div id="barra">
		<a class="waves-effect waves-light btn ">Banco de agricultura</a>
	</div>
		<br><br>
		<form method="post">
	  	 <p>Para recuperar sus credenciales ingrese el correo y el DUI con el cual fue registrado.</p>	
	  	 <label for="correos">dui:</label>
	    <input type="text" id="correo"  name="dui"><br><br>
	    <label for="dui">Nueva contraseña</label>		
	    <input type="text" id="nueva"  name="nueva"><br><hr>
	    <?php
		include("olvido.php");
	    ?>
	    <div class="buscarContra"><input type="submit" name="enviar" value="Cambiar"></div>
	    <br><a href="../index.php">regresar</a>
	</form>
	<br><br><br> 
</body>
</html>