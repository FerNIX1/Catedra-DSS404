<?php 



include("conexion.php");

$dui = trim($_POST['dui']);
$usuario = trim($_POST['usuario']);
$correo = trim($_POST['correo']);
$fecNac =trim($_POST['fecnac']) ;
$contra= trim($_POST['contra']) ; 
$contra_encriptada = password_hash($contra, PASSWORD_DEFAULT);

$query ="INSERT INTO `usuario`(`DUI_Usuario`, `Nombre_Usuario`, `Correo_Electronico`, `FechaNacimiento` , `Pass`) VALUES ('$dui','$usuario','$correo','$fecNac','$contra_encriptada')";

$finconsulta = mysqli_query($conexion,$query);

        if ($finconsulta) {
            echo "<p>Conexion exitosa</p>";

            echo "<p>Dui".$dui."<br>Ususario ".$usuario."<br>Correo".$correo."<br>Fecha de Nacimeinto".$fecNac."<br>Contraseña".$contra."</p>";
            header('Location: ../index.php');
            exit;
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
        }else{
            echo "<p>Conexion fallida</p>". mysqli_error($conexion); 
        }

?>