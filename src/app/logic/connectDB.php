<?php

// Script para conexión a la base de datos
$server= "localhost";
$user = "root";
$pwd = "";
$db = "db_consultoriodemo";     
$conection = mysqli_connect($server,$user,$pwd,$db);

//Validación de la conexión
/*if(!$conection)
echo("<h1>¡Ups! algo ha salido mal, al parecer no cuenta con conexión a la base de datos <br> porfavor pongase en contacto con el proveedor.</h1>");
else
echo ("<h1>¡Conexión Exitosa!</h1>"); */

?>