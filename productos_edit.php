<?php
include('./database/db.php');
include('./controllers/edit_producto.php');
include("./components/head.php");
?>

<body>
    <div class="container">
        <h2>Editando el producto <?= $id ?></h2>
        <form action="productos_edit.php?id=<?= $id ?>" method="POST" class="col-lg-3">
            <div class="mb-3">
                <label for="nombreproduct" class="form-label">Nombre</label>
                <input value="<?= $nombre ?>" type="text" class="form-control" id="nombreproduct" placeholder="Producto" name="nombre-producto">
            </div>
            <div class="mb-3">
                <label for="descproduct" class="form-label">Descripcion</label>
                <input value="<?= $descripcion ?>" type="text" class="form-control" id="descproduct" placeholder="Descripción del producto" name="desc-producto">
            </div>
            <button class="btn btn-primary" type="submit" name="editar">Guardar</button>
            <a class="btn btn-danger" href="./productos.php">Cancelar </a>

        </form>
    </div>
    <?php include("./components/scriptsfoot.php") ?>
</body>