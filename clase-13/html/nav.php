<?php
    $sql = "SELECT id_categoria, nombre
            FROM categorias";
    $resultado = mysqli_query($conexion, $sql);
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Tienda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorías
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.php">Todas</a></li>
                            <?php
                                while(  $categoria = mysqli_fetch_assoc($resultado)  ){
                                    $id_categoria = $categoria['id_categoria'];
                                    $nombre = $categoria['nombre'];
                                    echo("<li><a class='dropdown-item' href='index.php?id_categoria=$id_categoria'>$nombre</a></li>");
                                }
                            ?>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contactos</a>
                    </li>
                </ul>
                <a href="registro.php" class="btn btn-success">Registrarme</a>
                <a href="login.php" class="btn btn-primary">Login</a>

                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Usuario
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Perfil</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </div>
               
            </div>
            </div>
    </nav>