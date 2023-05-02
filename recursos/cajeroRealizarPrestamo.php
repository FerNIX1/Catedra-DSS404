<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cajero Realizar prestamo</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style3.css">
</head>
<body>

<!--Barra -->
<div id="barra">
		<a class="waves-effect waves-light btn">Banco de agricultura</a>
	</div>
    <h1>PRESTAMO</h1>
    <div class="container-fluid">
  		<div class="row">
    		<div class="col">
            <form method="post" action="">
        <label for="duiC">DUI cliente:</label>
        <input type="text" id="duiC" name="duiC" required>

        <label for="salario">Ingrese Su salario:</label>
        <input type="number" id="salario" name="salario" required><br>

        <label for="monto">Monto a solicitar:</label>
        <input type="number" id="monto" name="monto" required>

        <input type="submit" value="Solicitar">
    </form>
    		</div>
  			</div>
		</div>
        <br><br><br>
</body>
</html>

<!--Vista n2 cajero agregar usuarios-->