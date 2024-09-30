<?php

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        header{
            height: 20vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        main{
            min-height: 70vh;
        }
        footer{
            height: 10vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <header class="bg-info">
        <h1> Bucles y Arrays</h1>
    </header>
    <main class="container">
        <h2> Estudiantes</h2>

        <?php
        /*
            $n = 1;
            while($n <= 5){
                echo('<li>Hola</li>');
                $n++;
            }
        */
            
        ?>

        <ul class="list-group">
            <?php
                //                   0           1          2         3        4
                $estudiantes = ['Valentina', 'Federico', 'Luca', 'Carolina', 'Ezequiel'];
                for($i=0; $i< 5; $i++){
                    $persona = $estudiantes[$i];
                    echo("<li class='list-group-item'> $persona</li>");

                }
            ?>
            

        </ul>
    </main>
    <footer class="bg-dark text-white">
        <p> DV | Plataformas de Desarrollo | 2024</p>
    </footer>
    
</body>
</html>