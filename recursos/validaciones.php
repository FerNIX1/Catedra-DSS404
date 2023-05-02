<?php
// base de datos
include("conexion.php");
$errores=[];
//Capturando las variables globales y validando que existan o el campo tenga una variable
        if (isset($_POST['dui']) || isset($_POST['usuario']) || isset($_POST['correo']) || isset($_POST['fecnac']) || isset($_POST['contra'])) {
            //Borrando espacios innecesarios
            $dui = trim($_POST['dui']);
            $usuario = trim($_POST['usuario']);
            $correo = trim($_POST['correo']);
            $fecNac =trim($_POST['fecnac']) ;
            $contra =trim($_POST['contra']);
            $contra_encriptada = password_hash($contra, PASSWORD_DEFAULT); //encripta la base de datos
           
            //Validacion de email y dui
            if (preg_match('/^[0-9]{8}-[0-9]{1}$/', $dui) || filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                $query ="INSERT INTO `usuario`(`DUI_Usuario`, `Nombre_Usuario`, `Correo_Electronico`, `FechaNacimiento` , `Pass` , `ID_cuenta`) VALUES ('$dui','$usuario','$correo','$fecNac','$contra_encriptada',1)";

                $finconsulta = mysqli_query($conexion,$query);

                if ($finconsulta) {
                    echo "<p>Conexion exitosa</p>";

                    echo "<p>Dui".$dui."<br>Ususario ".$usuario."<br>Correo".$correo."<br>Fecha de Nacimeinto".$fecNac."<br>Contraseña".$contra."</p>";
                    header('Location: ../index.php');
                    exit;
                    
                }else{
                    echo "<p>Conexion fallida</p>"; 
                }
        }else{
            
        } 
}else{



    

         // error falta hacer el error al poner el mismo dui que esta en la base de datos
}
?>