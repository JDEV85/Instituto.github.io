<?php 

require_once("../Modelo/Materias.php");

if($_POST){
    
    $materia = $_POST['Materia'];
    
    $ModelMateria = new Materias();
    $ModelMateria->add($materia);
    
}else{
    header('Location: ../Pages/index.php');
}
    


?>