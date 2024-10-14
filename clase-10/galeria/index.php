<?php
    /*
        Definir un array en PHP que contenga al menos 5 URLs de imágenes.
        Crear un documento HTML que incluya un título "Galería de Imágenes".
        Utiliza CSS para la galería:
        Las imágenes deben aparecer en un diseño de cuadrícula (flexible).
        Cada imagen debe tener un borde y un tamaño fijo (ajusta el tamaño a tu preferencia).
        Utiliza un bucle en PHP para recorrer el array y mostrar cada imagen en la página.
    */
    $fotos = [
        'images/gatito_1.jpg', // 0
        'images/gatito_2.jpg', // 1
        'images/gatito_3.jpg', // 2
        'images/perrito_1.jpg', // 3
        'images/perrito_2.jpg', // 4
        'images/perrito_3.jpg', // 5
    ];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería de fotos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="bg-info">
        <h1> Galería de fotos</h1>
    </header>
    <main class="container">
        <div class="galeria mt-4">
            <?php
                for($i=0; $i< count( $fotos); $i++){
                    $fotoURL = $fotos[$i];
                    echo("<div class='foto'>
                            <img class='img-thumbnail' src='$fotoURL' alt='$fotoURL'>
                        </div>");
                }

            ?>
<!-- 
            <div class="foto">
                <img class="img-thumbnail" src="images/gatito_1.jpg" alt="Gatito 1">
            </div>
            <div class="foto">
                <img class="img-thumbnail" src="images/gatito_1.jpg" alt="Gatito 1">
            </div>
            <div class="foto">
                <img class="img-thumbnail" src="images/gatito_1.jpg" alt="Gatito 1">
            </div> -->


        </div>
    </main>
    <footer class="bg-dark text-white">
        <p>DV | Plataformas de Desarrollo | 2024</p>
    </footer>
</body>
</html>