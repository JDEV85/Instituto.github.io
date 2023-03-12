<?php 

    require_once("../Modelo/Docentes.php");
    require_once("../../Usuarios/Modelo/Usuarios.php");

    if($_POST){
        $model = new Docentes();
        $id = $_POST['Id'];
        $model->delete($id);
    }else{
        header("Location: ../Pages/index.php");
    }

?>