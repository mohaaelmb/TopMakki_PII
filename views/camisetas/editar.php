<?php
session_start();
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
    <title>Editar camiseta</title>
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="icon" type="image/png" href="../../public/img/logo.jpg">
</head>

<body>

<div class="form-admin-container">

    <form action="../../controllers/editarController.php" method="POST" class="form-admin">

        <h1>Editar camiseta</h1>

        <input type="hidden" name="id" value="<?php echo $camiseta['id']; ?>">

        <input type="text" name="titulo" value="<?php echo $camiseta['titulo']; ?>">
        <input type="text" name="equipo" value="<?php echo $camiseta['equipo']; ?>">

        <textarea name="descripcion"><?php echo $camiseta['descripcion']; ?></textarea>

        <input type="number" name="precio" value="<?php echo $camiseta['precio']; ?>">
        <input type="text" name="imagen" value="<?php echo $camiseta['imagen']; ?>">

        <select name="categoria">
            <option value="actual"      <?php if($camiseta['categoria']=='actual') echo 'selected'; ?>>Actual</option>
            <option value="retro"       <?php if($camiseta['categoria']=='retro') echo 'selected'; ?>>Retro</option>
            <option value="selecciones" <?php if($camiseta['categoria']=='selecciones') echo 'selected'; ?>>Selecciones</option>
        </select>

        <select name="liga">
            <option value="LaLiga">LaLiga</option>
            <option value="Premier League">Premier League</option>
            <option value="Serie A">Serie A</option>
            <option value="Bundesliga">Bundesliga</option>
            <option value="Ligue 1">Ligue 1</option>
            <option value="Selecciones">Selecciones</option>
            <option value="Eredivisie">Eredivisie</option>
        </select>

        <button type="submit" name="editar">Actualizar camiseta</button>

    </form>

</div>

</body>
</html>
