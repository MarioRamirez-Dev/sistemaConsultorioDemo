<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/29546a0803.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/style.css">
    <title>Registrar Usuario</title>
</head>
<body>
    <nav class="menu">
        <ul>
            <li><a href="../../index.html"> Inicio</a></li>
            <li><a href=""> Sobre Nosotros</a></li>
            <li><a href=""> Contacto</a></li>
            <li><a href=""> Cita</a></li>
        </ul>
        <!-- <a href="src/app/views/login.html" class="session"><i class="fas fa-user"></i> Iniciar Sesión </a> -->
    </nav>
    <div class="login">
        <div class="login_left">
            <img src="../images/Register.svg" alt="">
        </div>
        <div class="login_right">
            <form action="logic/createUser.php" method="post">
                <h1>Registrarse</h1>
                <label for="name">Nombre:   </label>
                <input type="text" name="nombre" id="nombre"> <br>
                <label for="name">Apellido:   </label>
                <input type="text" name="apellido" id="apellido"><br>
                <label for="name">Correo:   </label>
                <input type="email" name="correo" id="correo"><br>
                <label for="name">Contraseña:   </label>
                <input type="password" name="password" id="password"> <br>
                <label for="name">Fecha de nacimiento:   </label>
                <input type="date" name="dateBorn" id="dateBorn"> <br>
                <input type="submit" value="Registrarse" class="btnIniciarSesion"><br>
                <label>¿Ya tienes una cuenta?, <a href="login.php">Inicia Sesión acá</a></label>
            </form>
        </div>
    </div>
</body>
</html>