<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        /* Estilo para el cuerpo de la página */
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
    text-align: center;
}

/* Estilo para el contenedor del formulario */
form {
    background-color: #fff;
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Estilo para el título del formulario */
h1 {
    color: #333;
}

/* Estilo para las etiquetas y campos de entrada */
label {
    display: block;
    text-align: left;
    margin-bottom: 5px;
}

input[type="email"], input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

/* Estilo para el botón de inicio de sesión */
input[type="submit"] {
    background-color: #007BFF;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

/* Estilo para los mensajes de error */
.error-message {
    color: #d9534f;
    font-size: 16px;
    margin-top: 10px;
}

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <h1>Iniciar sesión</h1>
        <form action="procesar_login.php" method="post">
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required><br><br>

            <input type="submit" value="Iniciar sesión">
        </form>
    </main>
</body>
</html>
