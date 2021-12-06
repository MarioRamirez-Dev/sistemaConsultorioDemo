<?php
    session_start();
    if(empty($_SESSION['username'])){
        header("location:login.php");
    }
    $username = $_SESSION['username'];    
?>