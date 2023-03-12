
<?php 

require_once("../../Usuarios/Modelo/Usuarios.php");
require_once("../Modelo/Administradores.php");

$modelUser = new Usuarios();
$modelUser->validateSession();

$model = new Administradores();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Estilos/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Sistema de Notas</title>
</head>
<body>
    
<div class="add-form-div">
    <h1>Rregistrar Administrador</h1>
    
    <form class="add-form" method="POST" action="../Controladores/add.php">
        <br>
        <input type="text" name="Nombre" required autocomplete="off" placeholder="Nombre"><br><br>
        <br>
        <input type="text" name="Apellido" required autocomplete="off" placeholder="Apellido"><br><br>
        <br>
        <input type="text" name="Usuario" required autocomplete="off" placeholder="Usuario"><br><br>
        <br>
        <input type="Password" Name="Contrasena" required autocomplete="off" placeholder="Contraseña"><br><br>
        <input type="submit" value=" Registrar Adminisrador ">
        
    </form>
</div>
</body>
</html>