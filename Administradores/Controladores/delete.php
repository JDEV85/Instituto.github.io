<?php 

    require_once("../Modelo/Administradores.php");

    $model = new Administradores();

    if($_POST){
        
        $id = $_POST['Id'];
        $model->delete($id);

    }else{
        header("Location: ../Pages/index.php");
    }

?>