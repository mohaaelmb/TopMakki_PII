<?php
session_start();
require_once('../../config/conexion.php');

$stmt = $conexion->query("SELECT * FROM camisetas");
$productos = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin TopMakki</title>
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="icon" type="image/png" href="../../public/img/logo.jpg">
</head>

<body>

<div class="admin-container">

    <div class="admin-top">
        <h1>Panel administrador</h1>
        <a href="../camisetas/crear.php" class="btn-admin">Añadir camiseta</a>
    </div>

    <table class="tabla-admin">
        <tr>
            <th>ID</th>
            <th>Equipo</th>
            <th>Precio</th>
            <th>Liga</th>
            <th>Acciones</th>
        </tr>

        <?php foreach ($productos as $p): ?>
        <tr>
            <td><?php echo $p['id']; ?></td>
            <td><?php echo $p['equipo']; ?></td>
            <td><?php echo $p['precio']; ?> €</td>
            <td><?php echo $p['liga']; ?></td>
            <td class="acciones">
                <a href="../camisetas/editar.php?id=<?php echo $p['id']; ?>" class="btn-admin">Editar</a>
                <a href="../../controllers/eliminarProducto.php?id=<?php echo $p['id']; ?>" class="btn-eliminar">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>
