<?php
include("../database/db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM producto WHERE producto.id = '$id'";
    $resultado = mysqli_query($con, $query);
    if (!$resultado) {
        die("Error");
    }
    $_SESSION['msg'] = 'Producto eliminado';
    $_SESSION['msg-color'] = 'success';
    header("Location: ../productos.php");
};
