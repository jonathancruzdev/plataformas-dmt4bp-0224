<?php
    // 1. Importo la conexión
    require_once('../conexion.php');
    // 2. Recibo los datos del formulario
    $email = $_POST['email'];
    $clave = $_POST['clave'];


    // 3. Escribo la consulta SQL
    $sql = "SELECT id_usuario, nombre, email, id_rol
            FROM usuarios
            WHERE email = '$email' AND clave = '$clave'" ;
    // 4. Ejecuto la consulta
    $resultado = mysqli_query($conexion, $sql);
    $usuario = mysqli_fetch_assoc($resultado);
    if( $usuario) {
        echo("<h2>Bienvenido </h2>");
        //print_r($usuario);

    } else {
        echo("<h2> Usuario o contraseña Invalidos</h2>");
    }
?>