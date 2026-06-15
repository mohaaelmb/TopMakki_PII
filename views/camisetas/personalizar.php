<?php
require_once('../../config/conexion.php');

$id = $_GET['id'];

$stmt = $conexion->prepare("SELECT * FROM camisetas WHERE id=?");
$stmt->execute([$id]);

$camiseta = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $camiseta['equipo']; ?></title>
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="icon" type="image/png" href="../../public/img/logo.jpg">
</head>

<body>

<div class="producto-view">

    <div class="producto-img">
        <img 
            src="../../public/img/<?php echo $camiseta['imagen']; ?>" 
            alt="<?php echo $camiseta['equipo']; ?>"
        >
    </div>

    <div class="producto-info">

        <span class="producto-liga">
            <?php echo $camiseta['liga']; ?>
        </span>

        <h1><?php echo $camiseta['equipo']; ?></h1>

        <p class="producto-precio">
            <?php echo $camiseta['precio']; ?> €
        </p>

        <p class="producto-desc">
            <?php echo $camiseta['descripcion']; ?>
        </p>

        <form 
            action="../../controllers/carritoController.php" 
            method="POST" 
            class="producto-form"
        >
            <input type="hidden" name="camiseta_id" value="<?php echo $camiseta['id']; ?>">
            <input type="hidden" name="equipo" value="<?php echo $camiseta['equipo']; ?>">
            <input type="hidden" name="imagen" value="<?php echo $camiseta['imagen']; ?>">
            <input 
                type="text" 
                name="nombre" 
                placeholder="Nombre dorsal" 
                maxlength="12"
            >
            <input 
                type="number" 
                name="numero" 
                placeholder="Número" 
                min="0" 
                max="99"
            >
            <select name="talla">
                <option value="S">Talla S</option>
                <option value="M">Talla M</option>
                <option value="L">Talla L</option>
                <option value="XL">Talla XL</option>
                <option value="XXL">Talla XXL</option>
            </select>

            <button type="submit" name="agregar">
                Añadir al carrito
            </button>

        </form>

    </div>

</div>

</body>
</html>
