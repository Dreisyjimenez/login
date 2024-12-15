<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/estilosj.css">
    <style>
        body {
           
            background-image: url("images/usuario1.avif");
            background-repeat: no-repeat; 
            background-size: cover; 
            background-position: center; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registrarse</h2>
        <form action="registrobd.php" method="POST">
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div>
                <label for="correo">Correo electrónico:</label>
                <input type="email" id="correo" name="correo" required>
            </div>
            <div>
                <label for="username">Nombre de usuario:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div>
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Registrarse</button>
        </form>
        <p>¿Ya tienes una cuenta? <a href="index.html">Inicia sesión aquí</a>.</p>
    </div>
</body>
</html>
