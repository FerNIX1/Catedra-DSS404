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
<?php 
		session_start();
        if(!isset($_SESSION['tipocuenta'])){
            header('Location:../index.php');
        }
        if($_SESSION['tipocuenta']!=2){
			header('Location:../index.php');
		}
        ?>
<!--Barra -->
<div id="barra">
		<a class="waves-effect waves-light btn">Banco de agricultura</a>
	</div>
    <div class="borde">
        <div class="adentroborde">
        <h2> Menu Gerente Sucursal</h2>
        <hr>
        <div class="container">
  		<div class="row">
    		<div class="col">
      			<button> Ingresar nuevos empleados</button><br><br>
      			<button> Dar de baja un empleados </button><br>
      			<button> Salir</button><br>
    			</div>
                <!--Aqui iria la tabla de solicitudes de prestamos-->
    			<div class="col">
    			<div class="rightside">	
      			
      			</div>
    			</div>
                <!--Fin Aqui iria la tabla de solicitudes de prestamos-->
  			</div>
		</div>
	</div>
    </div>
    </div>


<br><br><br><br><br><br><br><br>
<button onclick="location.href='cerrar.php'">Salir</button>
</body>
</html>

<!--VistaN1 gerente-->