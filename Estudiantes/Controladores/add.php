<?php 

require_once("../../Usuarios/Modelo/Usuarios.php");
require_once("../Modelo/Estudiantes.php");

$ModelUser = new Usuarios();
$ModelUser->validateSession();

if($_POST){
    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $documento = $_POST['Documento'];
    $correo = $_POST['Correo'];
    $materia = $_POST['Materia'];
    $docente = $_POST['Docente'];
    $promedio = $_POST['Promedio'];
    $fechaRegistro = date('y-m-d');
    
    $ModelEstud = new Estudiantes();
    $ModelEstud->add($nombre,$apellido,$documento,$correo,$materia,$docente,
    $promedio,$fechaRegistro);
    
}else{
    header('Location: .../Pages/index.php');
}
    


?>