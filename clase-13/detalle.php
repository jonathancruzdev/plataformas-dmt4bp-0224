<?php
    require_once('conexion.php');
    require_once('html/header.php');
    require_once('html/nav.php');

    if( isset( $_GET['id_producto'])){
        $id_producto = $_GET['id_producto'];
        $sql = "SELECT id_producto, titulo, detalle, foto, precio
                FROM productos
                WHERE id_producto = $id_producto";

        $resultado = mysqli_query($conexion, $sql);
        $producto = mysqli_fetch_assoc($resultado);
        $titulo = $producto['titulo'];
        $detalle = $producto['detalle'];
        $foto = $producto['foto'];
        $precio = $producto['precio'];
    }
?>


    <main>

        <div class="row ">
            <div class="col-md-6">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php echo($foto); ?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/notebook2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/notebook3.jpg" class="d-block w-100" alt="...">
                        </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                        </button>
                </div>
            </div>
            <div class="col-md-6">
                <h2> <?php echo($titulo);?></h2>
                <h2> $<?php echo($precio);?></h2>

                <p><?php echo($detalle);?></p>

                <hr>

                <h4>Comentarios</h4>

                <ul class="list-group">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                    <li class="list-group-item">A fourth item</li>
                    <li class="list-group-item">And a fifth one</li>
                </ul>

                <form action="" class="p-3">
                    <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                    <button type="button" class="btn btn-primary">Publicar</button>
                </form>
            </div>
            
        </div>

    </main>
<?php
    require_once('html/footer.php');
?>