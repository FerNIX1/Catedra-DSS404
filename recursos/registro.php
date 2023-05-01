<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="css/validaciones.css">

</head>
<body>
<!--Barra -->
	<div id="barra">
		<a class="waves-effect waves-light btn ">Banco de agricultura</a>
	</div>
	<br><br>
	<form action="registro.php" method="post" novalidate>
	<?php 
		if(isset($_POST['usuario'])){
			$dui = trim($_POST['dui']);
		$usuario = trim($_POST['usuario']);
		$correo = trim($_POST['correo']);
		$fecNac =trim($_POST['fecnac']) ;
		$contra =trim($_POST['contra']);
		$contra_encriptada = password_hash($contra, PASSWORD_DEFAULT); //encripta la base de datos

		$errores = array();
		
		if(trim($usuario == '')){
			array_push($errores, 'El campo nombre es obligatorio');
		}
		if(trim($contra == '') || strlen($contra < 8)){
			array_push($errores, 'El campo contraseña es obligatorio y debe contener mas de 8 caracteres');
		}
		if(trim($fecNac == '')){
			array_push($errores, 'El campo fecha es obligatorio');
		}
		if(trim($correo == '') || ){
			array_push($errores, 'El campo fecha es obligatorio');
		}
		
		
		if(count($errores) > 0){
			echo "<div class='error'>";
			for($i = 0; $i < count($errores); $i++)
			{
				echo "<li>".$errores[$i]."</li>";
			}
		}else{
			echo "<div class='correct'> 
							Datos correctos!";
		}
		echo "</div>";

		}

?>

	  <h3><u>REGISTRAR</u></h3>

	  <label for="usuario">Usuario:</label>
	  <input type="text" id="usuario"  name="usuario" required><br>

	  <label for="contra">Contraseña:</label>
	  <input type="password" id="contra"  name="contra" required><br>

	  <label for="contra">Fecha de nacimiento:
	  <input type="date" id="contra"  name="fecnac" > 
	  </label><br>

	  <label for="correos">Correo:
	  <input type="mail" id="correo"  name="correo" placeholder="nombre@gmail.com"  pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required></label><br><br>

	  <label for="dui">DUI:</label>		
	  <input type="text"  id="dui" pattern="\d{8}-\d" name="dui" placeholder="12345678-9" required><br><hr>

	  <input type="submit" value="Registrar" name='submit'>
	</form> 
<br>
	
</form>
</body>
</html>