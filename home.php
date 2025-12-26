<?php
session_start();

if(!isset($_SESSION["usuario"])){
    header("Location: login.php");
    exit;
}else{
    echo "<p>Bienvenido</p>";
    echo "<p>Usuario: " . $_SESSION["usuario"] . "</p>";
    echo "<p>Nombre: " . $_SESSION["datos"]["nombre"] . "</p>";
}
?>
<a href="logout.php">Cerrar sesion</a>