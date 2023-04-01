<?php 

// viendo el problema de diferentes roles voy a probar una variable de control en la 
// base de datos
include("conexion.php");
$error=array();
//Capturando las variables globales
        if (isset($_POST['dui']) || isset($_POST['usuario']) || isset($_POST['correo']) || isset($_POST['fecnac']) || isset($_POST['contra'])) {
            //Borrando espacios innecesarios
            $dui = trim($_POST['dui']);
            $usuario = trim($_POST['usuario']);
            $correo = trim($_POST['correo']);
            $fecNac =trim($_POST['fecnac']) ;
            // y validar la fecha
            $contra =trim($_POST['contra']);
            $contra_encriptada = password_hash($contra, PASSWORD_DEFAULT); //encripta la base de datos

            //Validacion de usuario
            if(empty($_POST['usuario'])) {
                $error[] = "El campo de usuario es obligatorio.";
             }

            //Validacion de contra
             if(empty($_POST['contra'])) {
                $error[] = "El campo de contraseña es obligatorio.";
                } elseif(strlen($_POST['contra']) < 8) {
                $error[] = "La contraseña debe tener al menos 8 caracteres.";
             }

            //Validacion de fecha
            if(empty($_POST['fecnac'])) {
                $error[] = "El campo de fecha de nacimiento es obligatorio.";
             } elseif(!preg_match("/^\d{2}-\d{2}-\d{4}$/", $_POST['fecnac'])) {
                $error[] = "El formato de fecha de nacimiento es incorrecto. Debe tener el formato DD-MM-AAAA.";
             }
             
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

                echo "Error en el formato.";
            }
            
    }else{
             // error falta hacer el error al poner el mismo dui que esta en la base de datos
    }

    
?>