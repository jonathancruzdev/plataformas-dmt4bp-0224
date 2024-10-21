<?php 
    require_once('html/header.php');
    require_once('html/nav.php');
    require_once('datos.php');
    // 1.Importo la conexión
    require_once('conexion.php');
    // 2.Escribo la consulta SQL
    $sql = "SELECT id_producto, titulo, detalle, foto, precio
            FROM productos";
    // 3.Ejecuto la consulta SQL
    $resultado = mysqli_query($conexion, $sql);
    // 4.Formateamos los valores
    //print_r(  mysqli_fetch_assoc($resultado) );
?>  

    <main>
        <div class="row d-flex justify-content-evenly mt-3">

        <?php
            //for ($i=0; $i < count($posts) ; $i++) { 
            while(  $producto = mysqli_fetch_assoc($resultado)  ){

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
                            <a href='detalle.php' class='btn btn-primary'>Ver mas</a>
                        </div>
                    </div>");
            }
        ?>


        </div>
    </main>
<?php
    require_once('html/footer.php');
?>