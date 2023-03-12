<?php 

    require_once("../Modelo/Materias.php");
    require_once("../../Usuarios/Modelo/Usuarios.php");
    $ModelUser = new Usuarios();
    $ModelUser->validateSession();

    if($_POST){
        $id = $_POST['Id'];
        $model = new Materias();
        $model->delete($id);
    }else{
        header("Location: ../Pages/index.php");
    }
?>
