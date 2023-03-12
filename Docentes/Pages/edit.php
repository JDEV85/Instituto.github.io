
<?php 

require_once("../../Usuarios/Modelo/Usuarios.php");
require_once("../Modelo/Docentes.php");

$modeUser = new Usuarios();
$modeUser->validateSession();

$id = $_GET['id'];
$model = new Docentes();
$docentes = $model->getById($id);

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
    <h1>Editar Docente</h1>
    <form class="add-form" method="POST" action="../Controladores/edit.php">
        <?php 
        
            if($docentes != null){
                foreach($docentes as $docente){

                }
            }
        
        ?>

        <input type="hidden" name="Id" value="<?php echo $id ?>">
        <br>
        <input type="text" name="Nombre" required autocomplete="off" placeholder="Nombre" value="<?php echo $docente['nombre'] ?>"><br><br>
        <br>
        <input type="text" name="Apellido" required autocomplete="off" placeholder="Apellido" value="<?php echo $docente['apellido'] ?>"><br><br>
        <br>
        <input type="text" name="Usuario" required autocomplete="off" placeholder="Usuario" value="<?php echo $docente['usuario'] ?>"><br><br>
        <br>
        <input type="Password" Name="Contrasena" required autocomplete="off" placeholder="Contraseña" value="<?php echo $docente['password'] ?>"><br><br>
        <br>
        <select name="Estado" required>
            <option disabled value="<?php echo $docente['estado'] ?>"><?php echo $docente['estado'] ?></option>
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
        </select><br><br>
        <input type="submit" value=" Editar Docente ">
        
    </form>
    </div>
</body>
</html>