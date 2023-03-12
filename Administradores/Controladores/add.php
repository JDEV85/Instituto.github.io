<?php 

    require_once("../Modelo/Administradores.php");

    $model = new Administradores();

    if($_POST){
        
        $nombre = $_POST['Nombre'];
        $apellido = $_POST['Apellido'];
        $usuario = $_POST['Usuario'];
        $pass = $_POST['Contrasena'];

        $model->add($nombre,$apellido, $usuario, $pass);

    }else{
        header("Location: ../Pages/index.php");
    }

?>