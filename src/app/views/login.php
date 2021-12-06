<?php 
    //Variable por si no se encuentra registrado el usuario o la clave no coincide
    $error = "";
    session_start();
    if(!empty($_SESSION['username'])){
        header("location:menu.php");
    }
    //Mostrar mensaje de error
    if(!empty($_SESSION['logueado'])){
        $error = "Usuario y/o Contraseña incorrectos";
    }
?>

