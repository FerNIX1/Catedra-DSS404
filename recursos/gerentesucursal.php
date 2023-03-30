<?php
		session_start();
        if(!isset($_SESSION['tipocuenta'])){
            header('Location:../index.php');
        }
        if($_SESSION['tipocuenta']!=2){
			header('Location:../index.php');
		}
        ?>
<h1>gerente sucursal</h1>
<button onclick="location.href='cerrar.php'">Salir</button>