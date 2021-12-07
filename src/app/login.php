<?php 
    //Variable por si no se encuentra registrado el usuario o la clave no coincide
    $error = "";
    session_start();
    if(!empty($_SESSION['username'])){
        header("location:dates.php");
    }
    //Mostrar mensaje de error
    if(!empty($_SESSION['logueado'])){
        $error = "Usuario y/o Contraseña incorrectos";
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/29546a0803.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/style.css">
    <title>Login</title>
</head>
<body>
    <h1 class="error_login"><?php echo $error;?></h1>
    <nav class="menu">
        <ul>
            <li><a href="../../index.html"><i class="fas fa-home"></i> Inicio</a></li>
            <li><a href=""><i class="fas fa-user-friends"></i> Sobre Nosotros</a></li>
            <li><a href=""><i class="fas fa-inbox"></i> Contacto</a></li>
            <li><a href=""><i class="fas fa-calendar-alt"></i> Cita</a></li>
        </ul>
        <!-- <a href="src/app/views/login.html" class="session"><i class="fas fa-user"></i> Iniciar Sesión </a> -->
    </nav>
    <div class="login">
        <div class="login_left">
            <img src="../images/Login.svg" alt="">
        </div>
        <div class="login_right">
            <form action="logic/validateLogin.php" method="post">
                <br><br><br><br><h1>Iniciar Sesión</h1><br><br>
                <label for="usuario">Correo Electrónico:</label>
                <input type="email" id="usuario" name="username" required><br><br>
                <label for="clave">Contraseña: </label>
                <input type="password" name="password" id="clave" required><br>
                <input type="submit" value="Iniciar sesión" class="btnIniciarSesion"><br>
                <label>¿Aún no tienes una cuenta?, <a href="register.php">regístrate acá</a></label>
            </form>
        </div>
    </div>
</body>
</html>
