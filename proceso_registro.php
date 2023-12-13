<?php
// Conexión a la base de datos (reemplaza con tus propios valores)
$servername = "localhost";
$username = "Victor";
$password = "Lasalud7_";
$database = "curriculum"; // Nombre de la base de datos

$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Verificar si el correo electrónico ya está registrado
    $check_query = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $conn->query($check_query);

    if ($result->num_rows > 0) {
        // El correo electrónico ya existe
        $mensaje = "El correo electrónico ya está registrado. Por favor, inicia sesión.";
    } else {
        // El correo electrónico no existe, registrarlo
        $contrasena = md5($_POST['contrasena']); // La contraseña debe estar almacenada en MD5 en la base de datos

        $insert_query = "INSERT INTO usuarios (email, contraseña) VALUES ('$email', '$contrasena')";
        if ($conn->query($insert_query) === TRUE) {
            $mensaje = "Registro exitoso. Puedes iniciar sesión.";
        } else {
            $mensaje = "Error al registrar el correo electrónico. Inténtalo de nuevo.";
        }
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>