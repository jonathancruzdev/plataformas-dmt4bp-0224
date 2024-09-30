<?php
    $nombre="Sofia";
    $rol = "Diseñadora";
    $foto = "images/sofia.png";
    $descripcion = "Diseñadora UX UI. Con más de 5 años de experiencia en el maquetado Web. otro detalle más ";
    $logueado =  false;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card con PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <div class="card">
            <div class="header">
                <img src="<?php echo($foto); ?>" alt="<?php echo($nombre); ?>" class="avatar">
                <div class="info">
                    <h2 class="name"> <?php echo($nombre); ?></h2>
                    <p class="title"> <?php echo($rol); ?></p>
                </div>
            </div>
            <div class="body">
                <p class="description">
                    <?php echo($descripcion); ?>
                </p>
            </div>
            <div class="footer">
                <button class="button">Seguir</button>
                <?php
                    if($logueado == true){
                        echo("<button class='button'>Escribir</button>");
                    }
                ?>
                
            </div>
        </div>
        
    </main>
</body>
</html>