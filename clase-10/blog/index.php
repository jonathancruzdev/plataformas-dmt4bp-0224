<?php 
    require_once('html/header.php');
    require_once('html/nav.php');
    require_once('datos.php');
?>

    <main>
        <div class="row d-flex justify-content-evenly mt-3">

        <?php
            for ($i=0; $i < count($posts) ; $i++) { 
                $titulo = $posts[$i]['titulo'];
                $foto = $posts[$i]['foto'];

                echo("<div class='card col-md-3'>
                    <img src='$foto' class='card-img-top' alt='$titulo'>
                    <div class='card-body'>
                        <h5 class='card-title'>$titulo</h5>
                        <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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