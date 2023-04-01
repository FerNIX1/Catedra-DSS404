<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>   
    <form method="post">
        <h3><i>Administrador</i></h3>
        <h6>Registro de planilla</h6>
     <label for="usuario">Usuario:</label>
	  <input type="text" id="usuario"  name="usuario"><br>

	  <label for="contra">Contraseña:</label>
	  <input type="password" id="contra"  name="contra">
	  
	  <label for="contra">Fecha de nacimiento:
	  <input type="date" id="contra"  name="fecnac" required> 
	
	  </label><br>

	  <label for="correos">Correo:
	  <input type="mail" id="correo"  name="correo" placeholder="nombre@gmail.com"  pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required></label><br>

	  <label for="dui">DUI:</label>		
	  <input type="text" pattern="\d{8}-\d" id="dui"  name="dui" placeholder="12345678-9"><br>
      <label for="dui">Tipo de usuario:</label>	
      <select name="tipousuario" id="">
            <option value="1">Usuario comun</option>
            <option value="2" selected>Gerente de sucursal</option>
            <option value="3">Administrador</option>
            <option value="4">Cajero</option>
      </select>
        <br><br>
	  <input type="submit" value="Registrar" name='submit'>


    </form>
    <?php 
        

        // viendo el problema de diferentes roles voy a probar una variable de control en la 
        // base de datos
        include("conexion.php");
        $error=array();
        //Capturando las variables globales
        // echo $tipusuario =$_POST['tipousuario'];
                if (isset($_POST['dui']) && isset($_POST['usuario']) && isset($_POST['correo']) && isset($_POST['fecnac']) && isset($_POST['contra'])) {
                    //Borrando espacios innecesarios
                    $dui = trim($_POST['dui']);
                    $usuario = trim($_POST['usuario']);
                    $correo = trim($_POST['correo']);
                    $fecNac =trim($_POST['fecnac']) ;
                    // y validar la fecha
                    $contra =trim($_POST['contra']);
                    $tipusuario =$_POST['tipousuario'];
                    $contra_encriptada = password_hash($contra, PASSWORD_DEFAULT); //encripta la base de datos
        
                    // //Validacion de usuario
                    // if(empty($_POST['usuario'])) {
                    //     $error[] = "El campo de usuario es obligatorio.";
                    //  }
        
                    //Validacion de contra
                    //  if(empty($_POST['contra'])) {
                    //     $error[] = "El campo de contraseña es obligatorio.";
                    //  } 
                     if(strlen($_POST['contra']) < 8) {
                        $error[] = "La contraseña debe tener al menos 8 caracteres.";
                     }
        
                    //Validacion de fecha
                    // if(empty($_POST['fecnac'])) {
                    //     $error[] = "El campo de fecha de nacimiento es obligatorio.";
                    //  } 
                     if(!preg_match("/^\d{2}-\d{2}-\d{4}$/", $_POST['fecnac'])) {
                        $error[] = "El formato de fecha de nacimiento es incorrecto. Debe tener el formato DD-MM-AAAA.";
                     }
                     
                    //Validacion de email y dui
                    if (preg_match('/^[0-9]{8}-[0-9]{1}$/', $dui) || filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                            $query ="INSERT INTO `usuario`(`DUI_Usuario`, `Nombre_Usuario`, `Correo_Electronico`, `FechaNacimiento` , `Pass` , `ID_cuenta`) VALUES ('$dui','$usuario','$correo','$fecNac','$contra_encriptada',1)";
        
                            $finconsulta = mysqli_query($conexion,$query);
        
                            if ($finconsulta) {
                                $consultaselect = "SELECT * FROM usuario";
                                $resultado = mysqli_query($conexion, $consultaselect);
                                
                                if (mysqli_num_rows($resultado) > 0) {
                                  // Mostrar los datos de cada fila
                                  echo "<table>";
                                    echo "<tr>";
                                        echo "<th>DUI</th>";
                                        echo "<th>NOMBRE</th>";
                                        echo "<th>CORREO</th>";
                                        echo "<th>FECHA-NACIMIENTO</th>";
                                        echo "<th>CONTRASEÑA</th>";
                                        echo "<th>TIPO DE CUENTA</th>";
                                    echo "</tr>";
                                    echo "<tr>";
                                  while($row = mysqli_fetch_assoc($resultado)) {
                                    
                                  
                                        echo "<td>". $row["DUI_Usuario"]."</td>";
                                        echo "<td>". $row["Nombre_Usuario"]."</td>";
                                        echo "<td>". $row["Correo_Electronico"]."</td>";
                                        echo "<td>".$row["FechaNacimiento"]."</td>";
                                        echo "<td>". $row["pass"] ."</td>";
                                        echo "<td>". $row["ID_cuenta"] ."</td>";
                                        echo "</tr>";
                                    // echo "ID: " . $row["DUI_Usuario"]. " - Name: " . $row["Nombre_Usuario"]. " - Email: " . $row["Correo_Electronico"]. " - fecha de nacimiento: " .$row["FechaNacimiento"]. " - contraseña: " . $row["pass"] ." - Numero de cuenta: " . $row["ID_cuenta"] ."<br>";
                                   
                                  }
                                 
                                  echo "<table>";
                                } else {
                                  echo "0 results";
                                }
                                // echo "<p>Conexion exitosa</p>";
        
                                // echo "<p>Dui".$dui."<br>Ususario ".$usuario."<br>Correo".$correo."<br>Fecha de Nacimeinto".$fecNac."<br>Contraseña".$contra."</p>";
                               
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
</body>
</html>