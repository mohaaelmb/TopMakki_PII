<?php
require_once("../config/conexion.php");

// Crear
if(isset($_POST['crear'])){
    $sql = "INSERT INTO camisetas (titulo, descripcion, precio, talla, equipo, imagen)
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conexion->prepare($sql);
    $stmt->execute([
        $_POST['titulo'],
        $_POST['descripcion'],
        $_POST['precio'],
        $_POST['talla'],
        $_POST['equipo'],
        $_POST['imagen']
    ]);

    header("Location: ../views/index.php");
}

// eliminar
if(isset($_GET['eliminar'])){
    $stmt = $conexion->prepare("DELETE FROM camisetas WHERE id=?");
    $stmt->execute([$_GET['id']]);

    header("Location: ../views/index.php");
}

// ACTUALIZAR
if(isset($_POST['editar'])){
    $sql = "UPDATE camisetas SET titulo=?, descripcion=?, precio=?, talla=?, equipo=?, imagen=? WHERE id=?";

    $stmt = $conexion->prepare($sql);
    $stmt->execute([
        $_POST['titulo'],
        $_POST['descripcion'],
        $_POST['precio'],
        $_POST['talla'],
        $_POST['equipo'],
        $_POST['imagen'],
        $_POST['id']
    ]);

    header("Location: ../views/index.php");
}
?>