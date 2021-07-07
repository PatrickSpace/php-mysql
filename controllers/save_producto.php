<?php
include("../database/db.php");

if (isset($_POST['save_producto'])) {
    $titulo = $_POST['nombre-producto'];
    $desc = $_POST['desc-producto'];
    $query = "INSERT INTO producto (nombre,descripcion) VALUES ('$titulo','$desc')";
    $resultado = mysqli_query($con, $query);
    if (!$resultado) {
        $_SESSION['msg'] = 'Hubo un error';
        $_SESSION['msg-color'] = 'danger';
    }
    $_SESSION['msg'] = 'Producto guardado';
    $_SESSION['msg-color'] = 'success';
    header("Location: ../productos.php");
};
