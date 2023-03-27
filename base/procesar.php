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

        $consulta = "SELECT * FROM usuario WHERE Nombre_Usuario=:usuario and pass=:contra";
        $stmt = $conn->prepare($consulta);
        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':contra', $contra);
        $stmt->execute();

        $filas = $stmt->rowCount(); // me da un resultado si coincide de vuelve 1 si hay o 0 si no

        if ($filas > 0) {
            
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