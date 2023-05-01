<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Gerente Sucursal</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style3.css">
</head>
<body>

<!--Barra -->
<div id="barra">
	<a class="waves-effect waves-light btn">Banco de agricultura</a>
</div>
<h1>Registro de empleados</h1>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<form method="post" action="">
				<label for="usuario">Usuario:</label>
				<input type="text" id="usuario" name="usuario" required>

				<label for="contraseña">Contraseña:</label>
				<input type="password" id="contraseña" name="contraseña" required><br>

				<label for="cargo">Cargo:</label>
				<select id="cargo" name="cargo" required>
					<option value="">--Seleccione una opción--</option>
					<option value="Cajero">Cajero</option>
					<option value="Personal de limpieza">Personal de limpieza</option>
					<option value="Secretaria">Secretaria</option>
					<option value="Asesor financiero">Asesor financiero</option>
				</select><br>

				<label for="correo">Correo electrónico:</label>
				<input type="email" id="correo" name="correo" required>

				<label for="dui">DUI:</label>
				<input type="text" id="dui" name="dui" required>

				<input type="submit" value="Registrar">
			</form>
		</div>

		<div class="col-md-6">	
			<br>
        <div class="rightside">	
                <?php
                echo '
                <h5>Solicitud de empleados</h5>
				<table>
					<tr>
						<th></th>
					</tr>
					<tr>
						<td></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>'
?>
</body>
</html>
