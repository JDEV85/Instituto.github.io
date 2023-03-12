
<?php 

    require_once("../../Usuarios/Modelo/Usuarios.php");
    require_once("../Modelo/Docentes.php");

    $modeUser = new Usuarios();
    $modeUser->validateSessionAdministrator();
    $modeUser->validateSession();

    $model = new Docentes;
    $docentes = $model->get();

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

    <div class="nav-bar">
        <a href="../../Administradores/Pages/index.php">Administradores</a> 
        <a href="#">Docentes</a> 
        <a href="../../Materias/Pages/index.php">Materias</a>
        <a href="../../Estudiantes/Pages/index.php">Estudiantes</a> 
        <a href="../../Usuarios/Controladores/Salir.php">Salir</a>
    </div>
    <br><br>
    <div class="add-link"><a href="add.php" target="_blank"><i class="material-icons anime-icons">add</i>Registrar Docente</a></div><br><br>
    
    <div class="table-container">
    <table class="table-view">

        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Usuario</th>
            <th>Perfil</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>

        <?php 
            if($docentes != null){
                foreach($docentes as $docente){
            
        ?>

        <tr>
            <td><?php echo $docente['id_usuario']?></td>
            <td><?php echo $docente['nombre']?></td>
            <td><?php echo $docente['apellido']?></td>
            <td><?php echo $docente['usuario']?></td>
            <td><?php echo $docente['perfil']?></td>
            <td><?php echo $docente['estado']?></td>
            <td>
                <a class="edit-but" href="edit.php?id=<?php echo $docente['id_usuario']?>" target="_blank"><i class="material-icons anime-icons">edit</i></a>
                <a class="dang-but" href="delete.php?id=<?php echo $docente['id_usuario']?>" target="_blank"><i class="material-icons anime-icons">delete</i></a>
            </td>
        </tr>

        <?php }}?>
    </table>
    </div>
</body>
</html>