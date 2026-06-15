<?php
session_start();
require_once('../config/conexion.php');

if (!isset($_SESSION['usuario'])) {
    header("Location: ../views/auth/login.php");
    exit;
}

$usuario_id = $_SESSION['usuario']['id'];
$carrito    = $_SESSION['carrito'];
$total      = 0;

/* Calculamos el total */
foreach ($carrito as $item) {
    $total += $item['precio'];
}

/* Guardamos el pedido en la base de datos */
$stmt = $conexion->prepare(
    "INSERT INTO pedidos (usuario_id, total)
     VALUES (?, ?)"
);

$stmt->execute([
    $usuario_id,
    $total
]);

$pedido_id = $conexion->lastInsertId();

/* Guardamos detalles */
foreach ($carrito as $item) {

    $stmt = $conexion->prepare(
        "INSERT INTO detalle_pedido
        (pedido_id, camiseta_id, nombre, numero, talla, precio)
        VALUES (?, ?, ?, ?, ?, ?)"
    );

    $stmt->execute([
        $pedido_id,
        $item['camiseta_id'],
        $item['nombre'],
        $item['numero'],
        $item['talla'],
        $item['precio']
    ]);
}

/* VACIAR CARRITO */
unset($_SESSION['carrito']);

header("Location: ../views/carrito/confirmacion.php");
?>
