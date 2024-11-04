<?php
    require_once('conexion.php');
    require_once('html/header.php');
    require_once('html/nav.php');
?>
<main class="container">
    <div class="row mt-4">
        <div class="col"></div>
        <div class="col">
            <form action="acciones/usuarioGuardar.php" method="post" class="card p-4">
                <div class="mb-2">
                    <label for="">Nombre</label>
                    <input name="nombre" type="text" class="form-control" required>
                </div>
                <div class="mb-2">
                    <label for="">Email</label>
                    <input name="email" type="email" class="form-control" required>
                </div>
                <div class="mb-2">
                    <label for="">Contaseña</label>
                    <input name="clave" type="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success"> Registrarme</button>
            </form>
        </div>
        <div class="col"></div>
    </div>
</main>

<?php
    require_once('html/footer.php');
?>