<?php require ("assets/header.php")?>
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
        <h1>Hola, Usuario</h1>
        <ul>
            <li><a href="">Agendar Cita</a></li>
            <li><a href="">Revisar Citas</a></li>
            <li><a href="">Actualizar Información</a></li>
        </ul>
        <a href="./logic/closeSesion.php" class="logOut">Cerrar Sesión</a>
    </div>
</body>
</html>