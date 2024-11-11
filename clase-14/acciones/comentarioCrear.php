<?php
    session_start();
    require_once('../conexion.php');
    $detalle = $_POST['detalle'];  // Datos que llegan del formulario por POST
    $id_producto = $_GET['id_producto']; // Dato que llega por GET
    $id_usuario = $_SESSION['id_usuario']; // Leo la variable de sesión del logueo

    // 3. Escribo la consulta SQL
    $sql = "INSERT INTO comentarios(detalle, id_producto, id_usuario)
            VALUES('$detalle', $id_producto,  $id_usuario)";
    // 4. Ejecuto la consulta
    $resultado = mysqli_query($conexion, $sql);
    // Cambiamos la ubicación actual al archivo login.php
    header("Location: ../detalle.php?id_producto=$id_producto");
?>