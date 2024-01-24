<?php
    include("config/conection.php");

    $errores = [];

    if(isset($_POST['guardar'])){
        $nombre = $_POST['nombre'];
        $apellidoPaterno = $_POST['apellidoPaterno'];
        $apellidoMaterno = $_POST['apellidoMaterno'];
        $usuario = $_POST['usuario'];
        $correo = $_POST['correo'];

        // echo $nombre;
        // echo $apellidoPaterno;
        // echo $apellidoMaterno;
        // echo $usuario;
        // echo $correo;

        if(!$nombre) {
            $errores[] = "El nombre es obligatorio";
        }

        if(!$apellidoPaterno){
            $errores[] = "El apellido paterno es obligatorio";
        }

        if(!$apellidoMaterno){
            $errores[] = "El apellido materno es obligatorio";
        }

        if(!$usuario){
            $errores[] = "El usuario es obligatorio";
        }

        if(!$correo){
            $errores[] = "El correo es obligatorio";
        }

        if(empty($errores)) {
            $query = "INSERT INTO usuarios(nombre, apellidoPaterno, apellidoMaterno, usuario, correo) 
            VALUES('$nombre', '$apellidoPaterno', '$apellidoMaterno', '$usuario', '$correo')";
            $result = mysqli_query($conn, $query);

            if(!$result) {
                die("Error al guardar");
            }
        }
 
        

        // echo "Datos Guardados Correctamente";

        // $_SESSION['alerta'] = 'Usuario creado correctamente';
        // $_SESSION['color'] = 'success';

        header("Location: index.php");

    }

?>