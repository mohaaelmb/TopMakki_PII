<?php
session_start();

$carrito = $_SESSION['carrito'] ?? [];

$usuario = $_SESSION['usuario']['nombre'];
$total = 0;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="icon" type="image/png" href="../../public/img/logo.jpg">
</head>
<body>
<nav class="navbar">
    <a href="#" class="logo">
        <img src="../../public/img/logo.jpg" alt="Logo">
        <span>TopMakki</span>
    </a>
    <div class="nav-links">
        <a href="../camisetas/index.php">Inicio</a>
        <a href="../../logout.php">Cerrar sesión</a>
    </div>
</nav>
<div class="carrito-container">
    <h1>Hola <?php echo $usuario;?></h1>
    <?php if (count($carrito) > 0): ?>
        <?php foreach ($carrito as $index => $item): ?>
            <?php $total += $item['precio']; ?>
            <div class="carrito-card">
                <img src="../../public/img/<?php echo $item['imagen']; ?>" alt="">
                <div class="carrito-info">
                    <h2><?php echo $item['equipo']; ?></h2>
                    <p>Nombre: <?php echo $item['nombre']; ?></p>
                    <p>Número: <?php echo $item['numero']; ?></p>
                    <p>Talla: <?php echo $item['talla']; ?></p>
                    <span><?php echo $item['precio']; ?> €</span>
                </div>
                <a 
                    href="../../controllers/eliminarCarrito.php?i=<?php echo $index; ?>" 
                    class="btn-eliminar"
                >
                    Eliminar
                </a>
            </div>
        <?php endforeach; ?>
        <div class="carrito-total">
            <h3>Total: <?php echo $total; ?> €</h3>
            <a href="checkout.php" class="btn-pagar">Finalizar compra</a>
        </div>
    <?php else: ?>
        <p class="carrito-vacio">Tu carrito está vacío</p>
    <?php endif; ?>
</div>
</body>
</html>
