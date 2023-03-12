<?php 

    require_once("../Modelo/Administradores.php");

    $model = new Administradores();

    if($_POST){
        $id = $_POST['Id'];
        $nombre = $_POST['Nombre'];
        $apellido = $_POST['Apellido'];
        $usuario = $_POST['Usuario'];
        $pass = $_POST['Contrasena'];
        $estado = $_POST['Estado'];

        $model->update($id,$nombre,$apellido, $usuario, $pass, $estado);

    }else{
        header("Location: ../Pages/index.php");
    }

?>