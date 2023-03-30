<?php 

// viendo el problema de diferentes roles voy a probar una variable de control en la 
// base de datos

include("conexion.php");


if (isset($_POST['dui']) || isset($_POST['usuario']) || isset($_POST['correo']) || isset($_POST['fecnac']) || isset($_POST['contra'])) {

    $dui = trim($_POST['dui']);
    $usuario = trim($_POST['usuario']);
    $correo = trim($_POST['correo']);
    $fecNac =trim($_POST['fecnac']) ;
    $contra =trim($_POST['contra']);
    
    $contra_encriptada = password_hash($contra, PASSWORD_DEFAULT); //encripta la base de datos
    if (filter_var($correo, FILTER_VALIDATE_EMAIL) || preg_match('/^[0-9]{8}-[0-9]{1}$/', $dui)) {
        
        $query ="INSERT INTO `usuario`(`DUI_Usuario`, `Nombre_Usuario`, `Correo_Electronico`, `FechaNacimiento` , `Pass`) VALUES ('$dui','$usuario','$correo','$fecNac','$contra')";
    
        $finconsulta = mysqli_query($conexion,$query);
        
                if ($finconsulta) {
                    echo "<p>Conexion exitosa</p>";
        
                    echo "<p>Dui".$dui."<br>Ususario ".$usuario."<br>Correo".$correo."<br>Fecha de Nacimeinto".$fecNac."<br>Contraseña".$contra."</p>";
                    header('Location: ../index.php');
                    exit;
                }else{
                    echo "<p>Conexion fallida</p>"; 
                }
         }
    
  
}else{
    // errores


}


?>