<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Banco De Agricultura</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
		body{
			background-image: url(img/1.jpeg);
			background-size:auto;
		}

	</style>
</head>
<body>

<?php if (isset($errores)): ?>
        <ul class="errores">
            <?php 
                foreach ($errores as $error) {
                    echo '<li>' . $error . '</li>';
                } 
            ?> 
        </ul>
        <?php endif; ?>
<!--Barra -->
	<div id="barra">
		<a class="waves-effect waves-light btn ">Banco de agricultura</a>
	</div>
	<br><br><br>
<!--Formulario-->
	<form method="post" action="" >	
	<label for="usuario">Usuario:</label>
      <input type="text" id="usuario" name="usuario"/><br><br>
	  <label for="contrasena">Contraseña:</label>
      <input type="password" id="contra" name="contra" /> 
	  <?php
		include("base/procesar.php");
	  ?>
<!--Para ir a recupear tu contraseña-->

	  <input type="submit" name="enviar" value="Ingresar" />
      <div class="forgot-password">
        <a href="recursos/olvidoContra.php">¿Olvidaste tu contraseña?</a> | <a href="recursos/registro.php">Crear usuario</a>
      </div>
    </form>
    <br><br><br><br>

<script src="js/materialize.min.js"></script>
</body>
</html>