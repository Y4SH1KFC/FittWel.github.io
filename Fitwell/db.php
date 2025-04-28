
<?php
$host = 'localhost';  // o la IP de tu servidor de base de datos
$user = 'root';       // tu usuario de MySQL
$password = '';       // tu contraseña de MySQL
$database = 'loginDB'; // tu base de datos

// Crear conexión
$conn = new mysqli($host, $user, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
