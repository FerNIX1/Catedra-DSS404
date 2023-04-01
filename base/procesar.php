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
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //lanza una excepción para cada error generado durante la ejecución de una consulta

        $consulta = "SELECT * FROM usuario WHERE Nombre_Usuario=:usuario";
            $stmt = $conn->prepare($consulta);
            $stmt->bindParam(':usuario', $usuario); //vincular el valor de la variable $usuario
            $stmt->execute(); //
    
            $datos_usuario = $stmt->fetch(PDO::FETCH_ASSOC);//se guarda en un array el resultado de la consulta, donde las columnas son la key 
            //echo print_r($datos_usuario);
            $hash = password_hash($contra, PASSWORD_DEFAULT);
    
           if ($datos_usuario && password_verify($_POST['contra'],$hash)) {

                session_start();
                
                $_SESSION['tipocuenta']=$datos_usuario['ID_cuenta'];
                echo $datos_usuario['ID_cuenta'];
                 switch($_SESSION['tipocuenta']){
                      case 1:
                        $_SESSION['tipocuenta']=$datos_usuario['ID_cuenta'];
                        $tipo_cuenta=$_SESSION['tipocuenta'];
                        header('Location: recursos/menuCliente.php');
                        break;
                         case 2:
                        header('Location: recursos/gerentesucursal.php');
                        break;
                        case 3:
                            header('Location: recursos/admin.php');
                            break;
                        case 4:
                            header('Location: recursos/cajero.php');
                            break;
                 }
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