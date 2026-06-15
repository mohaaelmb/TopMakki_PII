<?php
require_once('../../config/conexion.php');

$liga = $_GET['liga'] ?? '';

if ($liga != '') {
    $stmt = $conexion->prepare("SELECT * FROM camisetas WHERE liga=?");
    $stmt->execute([$liga]);
} else {
    $stmt = $conexion->query("SELECT * FROM camisetas");
}

$productos = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TopMakki</title>
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="icon" type="image/png" href="../../public/img/logo.jpg">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
    <a href="#" class="logo">
        <img src="../../public/img/logo.jpg" alt="Logo">
        <span>TopMakki</span>
    </a>
    <ul class="menu">
        <li><a href="../carrito/carrito.php">Carrito</a></li>
        <li><a href="/logout.php">Cerrar sesión</a></li>
    </ul>
</nav>

<!-- HERO -->
<section class="hero">
    <div class="hero-content">
        <h1>Temporada 25/26</h1>
        <p>Camisetas oficiales de clubes y selecciones</p>
    </div>
</section>
<!-- FILTROS -->
<section class="filtros">
    <form method="GET" class="form-filtro">
        <select name="liga">
            <option value="">Todas las ligas</option>
            <option value="LaLiga">LaLiga</option>
            <option value="Premier League">Premier League</option>
            <option value="Serie A">Serie A</option>
            <option value="Bundesliga">Bundesliga</option>
            <option value="Ligue 1">Ligue 1</option>
            <option value="Selecciones">Selecciones</option>
            <option value="Eredivise">Eredivise</option>
        </select>
        <button type="submit">Filtrar</button>
    </form>
    <!-- BUSCADOR -->
    <div class="buscador">
        <input type="text" id="busqueda" placeholder="Buscar equipo...">
    </div>

</section>

<!-- PRODUCTOS -->
<section class="productos" id="productos">
    <div class="grid-productos">
        <?php foreach ($productos as $p): ?>
        <div class="card producto-card">
            <img src="../../public/img/<?php echo $p['imagen']; ?>" alt="<?php echo $p['equipo']; ?>">
            <div class="info-card">
                <h3 class="nombre-equipo"><?php echo $p['equipo']; ?></h3>
                <p class="liga"><?php echo $p['liga']; ?></p>
                <p class="precio"><?php echo $p['precio']; ?> €</p>
                <a href="personalizar.php?id=<?php echo $p['id']; ?>">Comprar</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>
<!-- FOOTER -->
<footer>
    <p>© 2026 TopMakki</p>
</footer>
<script src="../../public/js/app.js"></script>
</body>
</html>
