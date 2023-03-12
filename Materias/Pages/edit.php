
<?php 

require_once("../../Usuarios/Modelo/Usuarios.php");
require_once("../Modelo/Materias.php");

$Model = new Usuarios();
$Model->validateSession();

$ModelMateria = new Materias();

$id = $_GET['id'];
$materias = $ModelMateria->getById($id);
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
    <h1>Editar Materia</h1>
    
    <?php  
        if($materias!=null){
            foreach($materias as $materia){
        
    ?>

    <form class="add-form" method="POST" action="../Controladores/edit.php">
        <input type="hidden" name="Id" value="<?php echo $id ?>">
        <br>
        <input type="text" name="Materia" required autocomplete="off" placeholder="Nombre Materia" value="<?php echo $materia['materia'] ?>"><br><br>
        <input type="submit" value=" Editar Materia ">
    </form>
    </div>

    <?php 
        }
    }
    ?>

</body>
</html>