<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear camiseta</title>
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="icon" type="image/png" href="../../public/img/logo.jpg">
</head>

<body>

<div class="crear-container">

    <form action="../../controllers/crearController.php" method="POST" class="crear-form">

        <h1>Añadir camiseta</h1>

        <input type="text" name="titulo" placeholder="Título" required>
        <input type="text" name="equipo" placeholder="Equipo" required>

        <textarea name="descripcion" placeholder="Descripción"></textarea>

        <input type="number" name="precio" placeholder="Precio" required>
        <input type="text" name="imagen" placeholder="imagen.png" required>

        <select name="categoria">
            <option value="actual">Actual</option>
            <option value="retro">Retro</option>
            <option value="selecciones">Selecciones</option>
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

        <button type="submit" name="crear">Guardar camiseta</button>
    </form>
</div>
</body>
</html>
