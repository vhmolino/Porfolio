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

// Obtener los datos del formulario
$email = $_POST['email'];
$contrasena = md5($_POST['contrasena']); // La contraseña debe estar almacenada en MD5 en la base de datos

// Consulta SQL para verificar las credenciales
$query = "SELECT * FROM usuarios WHERE email = '$email' AND contraseña = '$contrasena'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // Inicio de sesión exitoso
    session_start();
    $_SESSION['email'] = $email;
    header("Location: panel_administracion.php"); // Redirige al panel de administración
} else {
    // Credenciales incorrectas
    header("Location: login.php?error=Credenciales incorrectas");
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
