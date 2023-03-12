<?php 

    require_once("../Modelo/Docentes.php");

    if($_POST){

        $model = new Docentes();
        $nombre = $_POST['Nombre'];
        $apellido = $_POST['Apellido'];
        $user = $_POST['Usuario'];
        $pass = $_POST['Contrasena'];

        $model->add($nombre,$apellido, $user,$pass);

    }else{
        header("Location: ../Pages/index.php");
    }

?>