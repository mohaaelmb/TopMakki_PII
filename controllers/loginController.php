<?php
session_start();

require_once('../config/conexion.php');

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $stmt = $conexion->prepare(
        "SELECT * FROM usuarios WHERE email=?"
    );
    $stmt->execute([$email]);
    $usuario = $stmt->fetch();
    if (
        $usuario &&
        password_verify($password, $usuario['password'])
    ) {
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nombre'] = $usuario['nombre'];
        $_SESSION['rol'] = $usuario['rol'];
        $_SESSION['usuario'] = $usuario;

        if ($usuario['rol'] == 'admin') {
            header("Location: ../views/admin/dashboard.php");
        } else {
            header("Location: ../views/camisetas/index.php");
        }
        exit();
    } else {
        header("Location: ../views/auth/login.php?error=1");
        exit();
    }
}
?>
