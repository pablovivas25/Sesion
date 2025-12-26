<?php
session_start();

$users_db=array(
    "admin"=>array(
        "nombre"=>"Pablo",
        "id_usuario"=>"1",
        "area"=>"2",
        "nivel"=>"1"
    ),
    "user"=>array(
        "nombre"=>"nombre test",
        "id_usuario"=>"2",
        "area"=>"1",
        "nivel"=>"2"
    )
    );

 if(isset($_POST["enviar"])){
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];

    if($usuario=='admin' && $password=="admin"){
        echo "<p>Has iniciado sesion</p>";
        $_SESSION["usuario"]=$usuario;
        $_SESSION["datos"]=$users_db[$usuario];
        header("Location: home.php");
        exit;
    }else{
         echo "<p>Usuario o password incorrecto</p>";
    }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <a href="logout.php">Cerrar sesion</a>
    <br><br>

    <?php if(isset($_SESSION["usuario"])) {echo $_SESSION["usuario"]; } ?>
    <br>
    <form action="" method="post">
        Usuario<input type="text" name="usuario" id="">
        <br>
        Password<input type="password" name="password" id="">
        <br>
        <input type="submit" value="Iniciar sesion" name="enviar">
    </form>

</body>
</html>
