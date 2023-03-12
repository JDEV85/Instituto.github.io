<?php 

require_once("../Modelo/Materias.php");


if($_POST){

    $model = new Materias();
    $id = $_POST['Id'];
    $materia = $_POST['Materia'];
    $model->update($id,$materia);
    
}else{
    header("Location: ../Pages/index.php");
}


?>