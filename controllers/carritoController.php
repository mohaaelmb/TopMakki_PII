<?php
session_start();
require_once('../config/conexion.php');

if (isset($_POST['agregar'])) {

    $camiseta_id = $_POST['camiseta_id'];

    $stmt = $conexion->prepare("SELECT * FROM camisetas WHERE id=?");
    $stmt->execute([$camiseta_id]);

    $camiseta = $stmt->fetch();

    $producto = [
        'id'      => $camiseta['id'],
        'equipo'  => $camiseta['equipo'],
        'imagen'  => $camiseta['imagen'],
        'precio'  => $camiseta['precio'],
        'nombre'  => $_POST['nombre'],
        'numero'  => $_POST['numero'],
        'talla'   => $_POST['talla']
    ];

    $_SESSION['carrito'][] = $producto;

    header("Location: ../views/carrito/carrito.php");
}
?>
