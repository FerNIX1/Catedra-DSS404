<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cajero Retirar dinero</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style3.css">
</head>
<body>

<!--Barra -->
<div id="barra">
		<a class="waves-effect waves-light btn">Banco de agricultura</a>
	</div>
    <h1>Retirar Dinero de Cuenta</h1>
    <div class="container-fluid">
  		<div class="row">
    		<div class="col">
            <form method="post" action="">
        <label for="DUI">DUI:</label>
        <input type="text" id="DUI" name="DUI" required>

        <label for="NoCuenta">Nombre de cuenta:</label>
        <input type="text" id="NoCuenta" name="NoCuenta" required><br>

        <label for="TipoCuenta">Tipo de Cuenta:</label>
        <select id="TipoCuenta" name="TipoCuenta" required>
            <option value="">--Seleccione una opción--</option>
            <option value="Cuenta ahorros">Cuenta Ahorros</option>
            <option value="Cuenta Corriente">Cuenta Corriente</option>
        </select><br>

        <label for="Destinatario">Destinarario <i>(nombre de cuenta a abonar)</i>:</label>
        <input type="text" id="Destinatario" name="Destinatario" required>

        <input type="submit" value="Enviar">
        <input type="submit" value="cancelar">
    </form>
    		</div>
  			</div>
		</div>
</body>
</html>

<!--Vista n4 cajero retiro dinero-->