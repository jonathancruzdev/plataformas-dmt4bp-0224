<?php
    // Comenzamos a trabajar con sesiones
    session_start();
    // 1. Importo la conexión
    require_once('../conexion.php');
    // 2. Recibo los datos del formulario
    $email = $_POST['email'];
    $clave = $_POST['clave'];
    $clave = md5( $clave);

    // 3. Escribo la consulta SQL
    $sql = "SELECT id_usuario, nombre, email, id_rol
            FROM usuarios
            WHERE email = '$email' AND clave = '$clave'" ;
    // 4. Ejecuto la consulta
    $resultado = mysqli_query($conexion, $sql);
    $usuario = mysqli_fetch_assoc($resultado);
    if( $usuario) {
        $id_usuario = $usuario['id_usuario'];
        $nombre = $usuario['nombre'];
        $_SESSION['id_usuario'] = $id_usuario;
        $_SESSION['nombre'] = $nombre;

        header('Location: ../index.php');
    } else {
        echo("<h2> Usuario o contraseña Invalidos</h2>");
    }
?>
<a href="../login.php"> Ir al login </a>