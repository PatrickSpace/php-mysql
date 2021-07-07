<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM producto WHERE producto.id = '$id'";
    $resultado = mysqli_query($con, $query);
    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_array($resultado);
        $nombre = $row['nombre'];
        $descripcion = $row['descripcion'];
    };
};

if (isset($_POST['editar'])) {
    $id = $_GET['id'];
    $nombre = $_POST['nombre-producto'];
    $desc = $_POST['desc-producto'];
    $query = "UPDATE producto set nombre = '$nombre', descripcion = '$desc' WHERE id = '$id'";
    $resultado = mysqli_query($con, $query);
    if (!$resultado) {
        $_SESSION['msg'] = 'Hubo un error';
        $_SESSION['msg-color'] = 'danger';
    }
    $_SESSION['msg'] = 'Producto editado';
    $_SESSION['msg-color'] = 'success';
    header("Location: productos.php");
}
