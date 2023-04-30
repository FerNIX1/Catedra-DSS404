<?php 

    $dui = trim($_POST['dui']);
    $usuario = trim($_POST['usuario']);
    $correo = trim($_POST['correo']);
    $fecNac =trim($_POST['fecnac']) ;
    $contra =trim($_POST['contra']);
    $contra_encriptada = password_hash($contra, PASSWORD_DEFAULT); //encripta la base de datos

?>