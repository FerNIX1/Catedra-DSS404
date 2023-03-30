<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Gerente Sucursal</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<!--Barra -->
<div id="barra">
		<a class="waves-effect waves-light btn">Banco de agricultura</a>
	</div>
    <br>
    <div class="container">
  		<div class="row">
    		<div class="col">
            <form method="post" action="">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>

        <label for="contraseña">Contraseña:</label>
        <input type="password" id="contraseña" name="contraseña" required>

        <label for="cargo">Cargo:</label>
        <select id="cargo" name="cargo" required>
            <option value="">--Seleccione una opción--</option>
            <option value="Cajero">Cajero</option>
            <option value="Personal de limpieza">Personal de limpieza</option>
            <option value="Secretaria">Secretaria</option>
            <option value="Asesor financiero">Asesor financiero</option>
        </select>

        <label for="correo">Correo electrónico:</label>
        <input type="email" id="correo" name="correo" required>

        <label for="dui">DUI:</label>
        <input type="text" id="dui" name="dui" required>

        <input type="submit" value="Registrar">
    </form>
    		</div>
                <!--Aqui iria la tabla de solicitudes de prestamos-->
    			<div class="col">
    			<div class="rightside">	
      			
      			</div>
    			</div>
                <!--Fin Aqui iria la tabla de solicitudes de prestamos-->
  			</div>
		</div>
<br><br><br><br><br><br>
</body>
</html>

