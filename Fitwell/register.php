<?php
// Incluir la conexión a la base de datos
include 'db.php';

// Comprobar si el formulario ha sido enviado
if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $genero = $_POST['genero'];
    $edad = $_POST['edad'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];

    // Verificar si las contraseñas coinciden
    if ($password === $confirm_password) {
        // Hashear la contraseña
        $password_hashed = password_hash($password, PASSWORD_DEFAULT);

        // Insertar los datos en la base de datos
        $sql = "INSERT INTO users (username, mob_digits, email, password, gender, edad, peso, altura, fecha_nacimiento) 
                VALUES ('$nombre', '$telefono', '$correo', '$password_hashed', '$genero', '$edad', '$peso', '$altura', '$fecha_nacimiento')";

        if ($conn->query($sql) === TRUE) {
            // Redirigir al login con mensaje de éxito
            header('Location: index.html');
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Las contraseñas no coinciden.";
    }
}
?>  