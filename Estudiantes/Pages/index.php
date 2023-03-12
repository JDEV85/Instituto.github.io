
<?php 

require_once("../../Usuarios/Modelo/Usuarios.php");
require_once("../Modelo/Estudiantes.php");

$ModelUser = new Usuarios();
$ModelUser->validateSession();

$Modelo = new Estudiantes();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Estilos/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="../../js/index.js"></script>
    <title>Sistema de Notas</title>
</head>
<body class="body-view">

    <?php 
        if($ModelUser->getPerfil()=="Docente"){
    ?>
    
    <div class="nav-bar"> 
        <a href="#">Estudiantes</a>
        <a href="../../Usuarios/Controladores/Salir.php">Salir</a>
        </div>
    <?php }else{?>

    <div class="nav-bar">
        <i class="material-icons anime-icons menu-but">menu</i>
        <a href="../../Administradores/Pages/index.php">Administradores</a>
        <a href="../../Docentes/Pages/index.php">Docentes</a>
        <a href="../../Materias/Pages/index.php">Materias</a>
        <a href="#">Estudiantes</a>
        <a href="../../Usuarios/Controladores/Salir.php">Salir</a>
    </div>
    <?php }?>

    <h4 class="profile-text">Bienvenido: <i class="material-icons">perm_identity</i> <?php echo $ModelUser->getNombre() . " - " . $ModelUser->getPerfil(); ?></h4>

    <div class="add-link"><a href="add.php" target="_blank"><i class="material-icons anime-icons">person_add_alt</i> Registrar Estudiantes</a></div> <br><br>
    <div class="form-div-search">
        <form id="s-form" class="serch-form" action="index.php" method="Post" >
            <input type="search" name="buscar" placeholder="Buscar por nombre" id="lupa" onsearch="sDelete()">
            <i class="material-icons"><input type="submit" value="">search</i>
        </form>
    </div>
    <div class="table-container">
    <table class="table-view">
        <tr>
            <th class="freeze-col">Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Documento</th>
            <th>Correo</th>
            <th>Materia</th>
            <th>Docente</th>
            <th>Promedio</th>
            <th>Fecha de Registro</th>
            <th>Acciones</th>
        </tr>
        <tr>
        <?php 

            // Search by name
            if($_POST){
                $name = $_POST['buscar'];
                $Estudiantes = $Modelo->serchByName($name);
            }
            else{
                $Estudiantes = $Modelo->get();
            }

            if($Estudiantes != null){
                foreach($Estudiantes as $Estudiante){
        ?>
            <td class="freeze-col"><?php echo $Estudiante['id_estudiante']?></td>
            <td><?php echo $Estudiante['nombre']?></td>
            <td><?php echo $Estudiante['apellido']?></td>
            <td><?php echo $Estudiante['documento']?></td>
            <td><?php echo $Estudiante['correo']?></td>
            <td><?php echo $Estudiante['materia']?></td>
            <td><?php echo $Estudiante['docente']?></td>
            <td><?php echo $Estudiante['promedio']."%"?></td>
            <td><?php echo $Estudiante['fecha_registro']?></td>
            <td>
                <a class="edit-but" href="edit.php?id=<?php echo $Estudiante['id_estudiante']?>" target="_bank"><i class="material-icons anime-icons">edit</i></a>
                <a class="dang-but" href="delete.php?id=<?php echo $Estudiante['id_estudiante']?>" target="_bank"><i class="material-icons anime-icons">delete</i></a>
            </td>
        </tr>
        <?php 
            }}
        
        ?>
    </table>
    </div>
</body>
</html>