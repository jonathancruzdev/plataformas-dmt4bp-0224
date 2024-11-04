<?php 
    // 1.Importo la conexión
    require_once('conexion.php');
    require_once('html/header.php');
    require_once('html/nav.php');
    require_once('datos.php');

    // Validamos si se pasa la variable por GET en la URL
    if ( isset( $_GET['id_categoria'] ) ){  // Si existe la variable $id_categoria
        // Leemos el valor de la variable que se pasa en URL por GET
        $id_categoria = $_GET['id_categoria'];
        // 2.Escribo la consulta SQL
        $sql = "SELECT id_producto, titulo, detalle, foto, precio
                FROM productos
                WHERE id_categoria = $id_categoria";
    } else {
       // 2.Escribo la consulta SQL
        $sql = "SELECT  id_producto, titulo, detalle, foto, precio
                FROM productos";
    }



  
    // 3.Ejecuto la consulta SQL
    $resultado = mysqli_query($conexion, $sql);
    // 4.Formateamos los valores
    //print_r(  mysqli_fetch_assoc($resultado) );
?>  

    <main>
        <div class="row d-flex justify-content-evenly mt-3">
            <?php
                while(  $producto = mysqli_fetch_assoc($resultado)  ){
                    $id_producto = $producto['id_producto'];
                    $titulo = $producto['titulo'];
                    $foto = $producto['foto'];
                    $precio = $producto['precio'];

                    echo("<div class='card col-md-3'>
                            <div class='card-img-top'>
                                <img src='$foto'  alt='$titulo'>
                            </div>
                            
                            <div class='card-body'>
                                <h5 class='card-title'>$titulo</h5>
                                <p class='card-text'>$ $precio</p>
                                <a href='detalle.php?id_producto=$id_producto' class='btn btn-primary'>Ver mas</a>
                            </div>
                        </div>");
                }
            ?>
        </div>
    </main>
<?php
    require_once('html/footer.php');
?>