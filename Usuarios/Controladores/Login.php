<?php 

require_once("../Modelo/Usuarios.php");

if($_POST){
    $User = $_POST['Usuario'];
    $Pass = $_POST['Contrasena'];

    $Modelo = new Usuarios();
    if($Modelo->login($User,$Pass)){
    header("Location: ../../Estudiantes/Pages/index.php");
    }else{
    header("Location:../../index.php");
    
    }
}

?>