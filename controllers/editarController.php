<?php
session_start();
require_once('../config/conexion.php');

if (isset($_POST['editar'])) {

    $stmt = $conexion->prepare(
        "UPDATE camisetas SET
            titulo=?,
            descripcion=?,
            precio=?,
            equipo=?,
            imagen=?,
            categoria=?,
            liga=?
        WHERE id=?"
    );

    $stmt->execute([
        $_POST['titulo'],
        $_POST['descripcion'],
        $_POST['precio'],
        $_POST['equipo'],
        $_POST['imagen'],
        $_POST['categoria'],
        $_POST['liga'],
        $_POST['id']
    ]);

    header("Location: ../views/admin/dashboard.php");
}
?>
