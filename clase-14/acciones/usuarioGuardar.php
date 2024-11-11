<?php
    // 1. Importo la conexión
    require_once('../conexion.php');
    // 2. Recibo los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $clave = $_POST['clave'];
    $clave =  md5($clave);
    $id_rol = 2; // Por defecto son todos Visitantes
    echo("<p>Nombre: $nombre - Email: $email - Contraseña: $clave");
    // 3. Escribo la consulta SQL
    $sql = "INSERT INTO usuarios(nombre, email, clave, id_rol)
            VALUES('$nombre', '$email', '$clave', $id_rol)";
    // 4. Ejecuto la consulta
    $resultado = mysqli_query($conexion, $sql);
    // Cambiamos la ubicación actual al archivo login.php
    header('Location: ../login.php');
?>
<h2> Guardando usuario...</h2>