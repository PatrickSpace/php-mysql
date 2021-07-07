<?php include("./components/head.php");
include('./database/db.php');
?>

<body>
    <?php include("./components/navbar.php") ?>
    <div class="container text-center">
        <h1>Productos</h1>
        <p>Esta es una app de demostración de la prueba propuesta por la empresa Desarrollo Global</p>
        <?php if (isset($_SESSION['msg'])) { ?>
            <div class="alert alert-<?= $_SESSION['msg-color']; ?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['msg']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php session_unset();
        }  ?>
    </div>
    <div class="container mt-5">
        <div class="row">
            <form action="./controllers/save_producto.php" method="POST" class="col-lg-3">
                <div class="mb-3">
                    <label for="nombreproduct" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombreproduct" placeholder="Producto" name="nombre-producto">
                </div>
                <div class="mb-3">
                    <label for="descproduct" class="form-label">Descripcion</label>
                    <input type="text" class="form-control" id="descproduct" placeholder="Descripción del producto" name="desc-producto">
                </div>
                <button class="btn btn-primary" type="submit" name="save_producto">Agregar</button>

            </form>
            <div class="col-lg-9">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * from producto";
                        $result = mysqli_query($con, $query);
                        while ($fila = mysqli_fetch_array($result)) { ?>
                            <tr>
                                <th scope="row"> <?= $fila['id'] ?> </th>
                                <td><?= $fila['nombre'] ?></td>
                                <td><?= $fila['descripcion'] ?></td>
                                <td>
                                    <a href="productos_edit.php?id=<?= $fila['id'] ?>">
                                        <i class="bi bi-pencil-fill text-primary"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="./controllers/delete_producto.php?id=<?= $fila['id'] ?>">
                                        <i class="bi bi-trash-fill text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php include("./components/scriptsfoot.php") ?>
</body>

</html>