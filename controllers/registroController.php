<?php
require_once('../config/conexion.php');

if (isset($_POST['registro'])) {

    $nombre  = $_POST['nombre'];
    $email   = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conexion->prepare(
        "INSERT INTO usuarios (nombre, email, password)
         VALUES (?, ?, ?)"
    );

    $stmt->execute([
        $nombre,
        $email,
        $password
    ]);

    header("Location: ../views/auth/login.php");
}
?>
