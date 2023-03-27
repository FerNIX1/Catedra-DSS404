<?php
function validar(){
    // Paso 1: Conectar a la base de datos
    $usuario=$_POST['usuario'];
    $contra=$_POST['contra'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dss_catedra_bdd";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // establecer el modo de error PDO a excepción
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $consulta = "SELECT * FROM usuario WHERE Nombre_Usuario=:usuario";
            $stmt = $conn->prepare($consulta);
            $stmt->bindParam(':usuario', $usuario);
            $stmt->execute();
    
            $datos_usuario = $stmt->fetch(PDO::FETCH_ASSOC);//se guarda en un array el resultado de la consulta
            $hash = password_hash($contra, PASSWORD_DEFAULT); // para el uso de password_verify se convierte a hash la contrase;a
    
            if ($datos_usuario && password_verify($_POST['contra'],$hash)) {
                header('Location: recursos/menuCliente.php');
                exit;
            } else {
                echo "Usuario o contraseña inválida";
            }
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
    }

if (isset($_POST['enviar'])) {
    validar();
}
?>