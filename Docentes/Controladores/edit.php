<?php 

    require_once("../Modelo/Docentes.php");

    if($_POST){


        $model = new Docentes();
        $id = $_POST['Id'];
        $nombre = $_POST['Nombre'];
        $apellido = $_POST['Apellido'];
        $user = $_POST['Usuario'];
        $pass = $_POST['Contrasena'];
        $estado = $_POST['Estado'];

        $model->update($id, $nombre, $apellido, $user, $pass, $estado);

    }else{
        header("Location: ../Pages/index.php");
    }

?>