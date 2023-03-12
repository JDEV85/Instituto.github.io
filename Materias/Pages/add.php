
<?php 

require_once("../../Usuarios/Modelo/Usuarios.php");

$ModelUsuarios = new Usuarios();
$ModelUsuarios->validateSession();


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
    <h1>Registrar Materia</h1>
    <form class="add-form" method="POST" action="../Controladores/add.php">
        <br>
        <input type="text" name="Materia" required autocomplete="off" placeholder="Nombre Materia"><br><br>
        <input type="submit" value=" Registrar Materia ">
    </form>
</div>
</body>
</html>