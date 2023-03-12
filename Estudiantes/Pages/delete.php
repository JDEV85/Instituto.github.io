
<?php

    require_once("../../Usuarios/Modelo/Usuarios.php");
    
    $ModelUsuarios = new Usuarios();
    $ModelUsuarios->validateSession();

    $id = $_GET['id'];


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
    <div class="add-form-div delete-form-div">
    <h1><i class="material-icons warning">warning</i>Eliminar Estudiante</h1>
    <form class="add-form delete-form" method="POST" action="../Controladores/delete.php">
        <input type="hidden" name="Id" value="<?php echo $id ?>">
        <p class="p-text-danger">Seguro que desea eliminar este estudiante?</p>
        <input type="submit" value=" Eliminar Estudiante ">
    </form>
    </div>
</body>
</html>