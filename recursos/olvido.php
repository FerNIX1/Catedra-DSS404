
<?php    // Paso 1: Conectar a la base de datos
   if (isset($_POST['enviar'])) {
       // obtener el valor del DUI y la nueva contraseña desde el formulario
       $dui = $_POST['dui'];
       $nueva_contraseña = $_POST['nueva'];
   
       // validar si el DUI existe en la tabla de usuarios
       $conexion = mysqli_connect("localhost", "root", "", "dss_catedra_bdd");
       $consulta = "SELECT * FROM usuario WHERE DUI_Usuario = '$dui'";
       $resultado = mysqli_query($conexion, $consulta);
   
       if (mysqli_num_rows($resultado) > 0) {
           // el DUI existe en la tabla de usuarios, actualizar la contraseña
           $password_encriptada = password_hash($nueva_contraseña, PASSWORD_DEFAULT); // encriptar la nueva contraseña
           $consulta_actualizar = "UPDATE usuario SET pass= '$password_encriptada' WHERE DUI_Usuario = '$dui'";
           mysqli_query($conexion, $consulta_actualizar);
   
           // mostrar mensaje de éxito
           echo "<p>La contraseña se ha actualizado correctamente.</p>";
       } else {
           // el DUI no existe en la tabla de usuarios, mostrar mensaje de error
           echo "<p>El DUI ingresado no se encuentra registrado.</p>";
       }
   
       // cerrar la conexión a la base de datos
       mysqli_close($conexion);
   }
    ?>
