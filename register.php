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
    padding:  10px 0px;
}

/* Estilo para el botón de registro */
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

/* Estilo para el mensaje de registro exitoso */
.success-message {
    color: #5cb85c;
    font-size: 16px;
    margin-top: 10px;
}

/* Estilo para el mensaje de registro fallido */
.error-message {
    color: #d9534f;
    font-size: 16px;
    margin-top: 10px;
}

/* Estilo para el enlace de inicio de sesión */
.login-link {
    display: block;
    text-decoration: none;
    color: #007BFF;
    margin-top: 10px;
}

    </style>
    <title>Registro</title>
</head>
<body>
    <h1>Registro</h1>
        <form action="procesar_registro.php" method="post">
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required><br><br>

            <input type="submit" value="Registrarse">
        </form>
</body>
</html>
