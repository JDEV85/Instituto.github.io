
<?php 

require_once("../../Usuarios/Modelo/Usuarios.php");
require_once("../Modelo/Materias.php");


$Model = new Usuarios();
$Model->validateSessionAdministrator();
$Model->validateSession();

$ModelMateria = new Materias();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Estilos/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script  src="/scripts/index.js" lenguage="javascript"></script>
    <title>Sistema de Notas</title>
</head>
<body>

    <div class="nav-bar">
        <i class="material-icons menu-but anime-icons" onclick="menuOpen()" >menu</i>
        <a href="../../Administradores/Pages/index.php">Administradores</a> 
        <a href="../../Docentes/Pages/index.php">Docentes</a> 
        <a href="#">Materias</a> 
        <a href="../../Estudiantes/Pages/index.php">Estudiantes</a>
        <a href="../../Usuarios/Controladores/Salir.php">Salir</a>
    </div>
    <br>
    <div class="add-link"><a href="add.php" target="_blank"><i class="material-icons anime-icons">add</i>Registrar Materia</a></div><br><br>
    
    <div class="table-container">
    <table class="table-view">
        <tr>
            <th>Id</th>
            <th>Materia</th>
            <th>Acciones</th>
        </tr>
        <?php  
            $materias = $ModelMateria->get();
            if($materias != null){
                foreach($materias as $materia){
        ?>
        <tr>
            <td><?Php echo $materia['id_materia']?></td>
            <td><?Php echo $materia['materia']?></td>
            <td>
                <a class="edit-but" href="edit.php?id=<?Php echo $materia['id_materia']?>" target="_blank"><i class="material-icons anime-icons">edit</i></a>
                <a class="dang-but" href="delete.php?id=<?Php echo $materia['id_materia']?>" target="_blank"><i class="material-icons anime-icons">delete</i></a>
            </td>
        </tr>
        <?php }}?>

    </table>
    </div>
</body>
</html>