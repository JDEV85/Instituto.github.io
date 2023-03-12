
<?php 

require_once("../../Usuarios/Modelo/Usuarios.php");
require_once("../../Estudiantes/Modelo/Estudiantes.php");
require_once("../../Metodos.php");

$ModelUsuarios = new Usuarios();
$ModelUsuarios->validateSession();
$ModelMetodos = new Metodos();

$id = $_GET['id'];

$ModelEstud = new Estudiantes();
$Estudiantes = $ModelEstud->getById($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Estilos/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Sistema de Notas</title>
</head>
<body>
    <div class="add-form-div">
        <h1>Editar Estudiante</h1>
        <form class="add-form" method="POST" action="../Controladores/edit.php">

            <?php 
                if($Estudiantes != null){
                    foreach($Estudiantes as $Estudiante){
                    }}
            ?>
            
            <input type="hidden" name="Id" value="<?php echo $id?>">
            <br>
            <input type="file" name="" id="">
            <input type="text" name="Nombre" required autocomplete="off" placeholder="Nombre" value="<?php echo $Estudiante['nombre'] ?>"><br><br>
            <br>
            <input type="text" name="Apellido" required autocomplete="off" placeholder="Apellido" value="<?php echo $Estudiante['apellido'] ?>"><br><br>
            <br>
            <input type="text" name="Documento" required autocomplete="off" placeholder="Documento" value="<?php echo $Estudiante['documento'] ?>"><br><br>
            <br>
            <input type="email" name="Correo" required autocomplete="off" placeholder="Correo" value="<?php echo $Estudiante['correo'] ?>"><br><br>
            <br>
            <select name="Materia" required>
                <option><?php echo $Estudiante['materia']?></option>
                
                <?php 
                    $materias = $ModelMetodos->getMaterias();
                    if($materias != null){
                        foreach($materias as $materia){
                ?>
                <option value=<?php echo $materia['materia']?>><?php echo $materia['materia']?></option>
                <?php }}?>

            </select><br><br>
        
            <br>
            <select name="Docente" required>
                <option><?php echo $Estudiante['docente']?></option>
                
                <?php 
                    $docentes = $ModelMetodos->getDocentes();
                    if($docentes != null){
                        foreach($docentes as $docente){
                ?>
                <option value="<?php echo $docente['nombre']. " ". $docente['apellido']?>"><?php echo $docente['nombre']. " ". $docente['apellido']?></option>
                <?php }}?>

            </select><br><br>
            <br>
            <input type="number" name="Promedio" required autocomplete="off" placeholder="Promedio" value="<?php echo $Estudiante['promedio']?>"><br><br>
            <input type="submit"  value="Editar Estudiante">

        </form>
    </div>
</body>
</html>