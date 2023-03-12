<?php 

require_once("../../Usuarios/Modelo/Usuarios.php");
require_once("../Modelo/Estudiantes.php");


$ModelUser = new Usuarios();
$ModelUser->validateSession();

if($_POST){

    $id = $_POST['Id'];
  
    $ModelEstud = new Estudiantes();
    $ModelEstud->delete($id,);
    
}else{
    header('Location: .../Pages/index.php');
}
    


?>