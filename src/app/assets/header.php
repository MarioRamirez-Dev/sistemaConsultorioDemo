<?php
    session_start();
    if(empty($_SESSION['username'])){
        header("location:login.php");
    }

    $username = $_SESSION['username'];    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/29546a0803.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/style.css">