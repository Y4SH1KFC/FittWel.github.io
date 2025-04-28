<?php
// Incluir la conexión a la base de datos
include 'db.php';

// Comprobar si el formulario de login fue enviado
if (isset($_POST['login'])) {
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    // Consultar la base de datos para ver si existe el correo
    $sql = "SELECT * FROM users WHERE email = '$correo'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // El usuario existe, verificar la contraseña
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // La contraseña es correcta, iniciar sesión
            session_start();
            $_SESSION['user_id'] = $row['id']; // Guardar el ID del usuario en la sesión
            $_SESSION['username'] = $row['username']; // Puedes guardar más información si lo deseas

       // Redirigir a la página principal (Plato del Buen Comer)
       header('Location: plato_del_buen_comer.html');
       exit();
   } else {
       echo "Contraseña incorrecta.";
   }
} else {
   echo "El correo no está registrado.";
}
}

           