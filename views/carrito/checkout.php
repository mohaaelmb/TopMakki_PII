<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ../auth/login.php");
    exit;
}

$carrito = $_SESSION['carrito'] ?? [];
$total = 0;

foreach ($carrito as $item) {
    $total += $item['precio'];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagar</title>
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="icon" type="image/png" href="../../public/img/logo.jpg">
</head>

<body>

<div class="checkout-container">
    <form 
        action="../../controllers/procesarPago.php" 
        method="POST" 
        class="checkout-form"
    >
        <h1>Finalizar compra</h1>
        <input 
            type="text" 
            name="titular" 
            placeholder="Nombre del titular" 
            required
        >
        <input 
            type="text" 
            name="tarjeta" 
            placeholder="Número de tarjeta" 
            maxlength="19" 
            required
        >
        <div class="checkout-row">
            <input 
                type="text" 
                name="caducidad" 
                placeholder="MM/YY" 
                required
            >
            <input 
                type="text" 
                name="cvv" 
                placeholder="CVV" 
                maxlength="3" 
                required
            >
        </div>
        <h2>Total: <?php echo $total; ?> €</h2>
        <button type="submit">Pagar ahora</button>
    </form>
</div>
</body>
</html>
