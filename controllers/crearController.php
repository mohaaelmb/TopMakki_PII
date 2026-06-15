<?php
session_start();
require_once('../config/conexion.php');

if (isset($_POST['crear'])) {

    $stmt = $conexion->prepare(
        "INSERT INTO camisetas
        (titulo, descripcion, precio, equipo, imagen, categoria, liga)
        VALUES (?, ?, ?, ?, ?, ?, ?)"
    );

    $stmt->execute([
        $_POST['titulo'],
        $_POST['descripcion'],
        $_POST['precio'],
        $_POST['equipo'],
        $_POST['imagen'],
        $_POST['categoria'],
        $_POST['liga']
    ]);

    header("Location: ../views/admin/dashboard.php");
}
?>
