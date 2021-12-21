<?php
    session_start();
    if(empty($_SESSION['user'])){
        header("location:login.php");
    }

    $usuario = $_SESSION['nombre'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/29546a0803.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/style.css">
    <title>Perfil</title>
</head>
<body>
    <nav class="menu">
        <ul>
            <li><a href="../../index.html"><i class="fas fa-home"></i> Inicio</a></li>
            <li><a href=""><i class="fas fa-user-friends"></i> Sobre Nosotros</a></li>
            <li><a href=""><i class="fas fa-inbox"></i> Contacto</a></li>
            <li><a href=""><i class="fas fa-calendar-alt"></i> Cita</a></li>
        </ul>
        <a href="src/app/views/login.html" class="session"><i class="fas fa-user"></i> USUARIO </a>
    </nav>
    <div class="menuLateral">
        <h1>Hola, <?php echo($usuario);?> </h1>
        <ul>
            <li><a href="">Agendar Cita</a></li>
            <li><a href="">Revisar Citas</a></li>
            <li><a href="">Actualizar Información</a></li>
        </ul>
        <a href="./logic/closeSesion.php" class="logOut">Cerrar Sesión</a>
    </div>
</body>
</html>