<?php 

require_once("../../Usuarios/Modelo/Usuarios.php");
require_once("../Modelo/Administradores.php");

$modelUser = new Usuarios();
$modelUser->validateSession();

$id = $_GET['id'];
$model = new Administradores();
$admins = $model->getById($id);

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
    <h1>Editar Administrador</h1>
    <form class="add-form" method="POST" action="../Controladores/edit.php">
        <?php 

            if($admins != null){
                foreach($admins as $admin){
                }}else{ echo "Is null";}
        ?>
        <input type="hidden" name="Id" value="<?php echo $id ?>">
        <br>
        <input type="text" name="Nombre" required autocomplete="off" placeholder="Nombre" value="<?php echo $admin['nombre'] ?>"><br><br>
        <br>
        <input type="text" name="Apellido" required autocomplete="off" placeholder="Apellido" value="<?php echo $admin['apellido'] ?>"><br><br>
        <br>
        <input type="text" name="Usuario" required autocomplete="off" placeholder="Usuario" value="<?php echo $admin['usuario'] ?>"><br><br>
        <br>
        <input type="Password" Name="Contrasena" required autocomplete="off" placeholder="Contraseña" value="<?php echo $admin['password'] ?>"><br><br>
        <br>
        <select name="Estado" required>
            <option value="<?php echo $admin['estado'] ?>" disabled><?php echo $admin['estado'] ?></option>
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
        </select><br><br>
        <input type="submit" value=" Editar Adminisrador ">
        
    </form>
</div>
</body>
</html>