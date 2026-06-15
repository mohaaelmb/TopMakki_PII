<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="icon" type="image/png" href="../../public/img/logo.jpg">
</head>

<body class="auth-body">

    <div class="auth-box">

        <form action="../../controllers/registroController.php" method="POST" class="auth-form">

            <h2>Crear cuenta</h2>

            <input 
                type="text" 
                name="nombre" 
                placeholder="Nombre" 
                required
            >

            <input 
                type="email" 
                name="email" 
                placeholder="Correo electrónico" 
                required
            >

            <input 
                type="password" 
                name="password" 
                placeholder="Contraseña" 
                required
            >

            <button type="submit" name="registro">Registrarse</button>

        </form>

    </div>

</body>
</html>
