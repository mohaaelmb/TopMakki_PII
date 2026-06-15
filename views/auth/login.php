<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | TopMakki</title>

    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="icon" type="image/png" href="../../public/img/logo.jpg">
</head>

<body class="auth-body">
    <div class="auth-box">
        <form 
            action="../../controllers/loginController.php"
            method="POST"
            class="auth-form"
        >
            <h2>Iniciar sesión</h2>
            <?php if (isset($_GET['error'])): ?>
                <p class="error-login">Credenciales incorrectas</p>
            <?php endif; ?>
            
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

            <button type="submit" name="login">
                Entrar
            </button>

            <p>
                ¿No tienes cuenta?
                <a href="registro.php">Crear cuenta</a>
            </p>
        </form>
    </div>
</body>
</html>
