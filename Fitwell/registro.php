<!DOCTYPE html>
<html lang="es">
<head> 
    <meta charset="UTF-8">
    <title>Registro - FitWell</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<nav>
    <div><strong>FitWell</strong></div>
    <div>
        <a href="index.html">Inicio</a>
        <a href="registro.php">Registro</a>
        <a href="plato_del_buen_comer.html">Plato</a>
    </div>
</nav>

<header>
    <h1 class="fade-in">Crea tu cuenta</h1>
</header>

<main>
    <section class="login-section fade-in">
        <form action="register.php" method="post" class="login-form fade-in">
            <div class="form-group">
                <label for="nombre"><i class='bx bx-user'></i> Nombre completo</label>
                <input type="text" id="nombre" name="nombre" required placeholder="Jana Martín">
            </div>

            <div class="form-group">
                <label for="telefono"><i class='bx bx-phone'></i> Teléfono</label>
                <input type="tel" id="telefono" name="telefono" required placeholder="Ej. 5512345678" pattern="[0-9]{10}">
            </div>

            <div class="form-group">
                <label for="correo"><i class='bx bx-envelope'></i> Correo electrónico</label>
                <input type="email" id="correo" name="correo" required placeholder="hola@unsitiogenial.es">
            </div>

            <div class="form-group">
                <label for="password"><i class='bx bx-lock'></i> Contraseña</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="confirm_password"><i class='bx bx-lock'></i> Confirmar contraseña</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>

            <div class="form-group">
                <label for="genero"><i class='bx bx-user-pin'></i> Género</label>
                <select id="genero" name="genero" required>
                    <option value="">Seleccionar</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Otro">Otro</option>
                </select>
            </div>

            <div class="form-group">
                <label for="edad"><i class='bx bx-user'></i> Edad</label>
                <input type="number" id="edad" name="edad" required min="15" max="100">
            </div>

            <div class="form-group">
                <label for="peso"><i class='bx bx-dumbbell'></i> Peso (kg)</label>
                <input type="number" id="peso" name="peso" required>
            </div>

            <div class="form-group">
                <label for="altura"><i class='bx bx-up-arrow-alt'></i> Altura (cm)</label>
                <input type="number" id="altura" name="altura" required>
            </div>

            <div class="form-group">
                <label for="fecha_nacimiento"><i class='bx bx-calendar'></i> Fecha de nacimiento</label>
                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
            </div>

            <div class="actions">
                <button type="submit" name="submit" class="btn-primary"><i class='bx bx-user-plus'></i> Registrarme</button>
            </div>

            <div class="links">
                <p>¿Ya tienes cuenta? <a href="index.php">Inicia sesión</a></p>
            </div>
        </form>
    </section>
</main>

<div class="mensaje fade-in">
    <p>"Cada pequeño cambio te acerca a tu mejor versión. ¡Regístrate ahora!"</p>
</div>

<footer>
    <p>FitWell © 2025</p>
</footer>

</body>
</html>
