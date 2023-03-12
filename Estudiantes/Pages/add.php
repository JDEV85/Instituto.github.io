
<?php 

require_once("../../Usuarios/Modelo/Usuarios.php");
require_once("../../Metodos.php");

$ModelUsuarios = new Usuarios();
$ModelUsuarios->validateSession();

$ModelMetodos = new Metodos();

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
        <h1>Registrar Estudiante</h1>
        <form class="add-form" method="POST" action="../Controladores/add.php">
            <br>
            <input type="text" name="Nombre" required autocomplete="off" placeholder="Nombre"><br><br>
            <br>
            <input type="text" name="Apellido" required autocomplete="off" placeholder="Apellido"><br><br>
            <br>
            <input type="text" name="Documento" required autocomplete="off" placeholder="Documento"><br><br>
            <br>
            <input type="email" name="Correo" required autocomplete="off" placeholder="Correo"><br><br>
            <br>
            <select name="Materia" required>
                <option disabled selected>Seleccionar Materia</option>
                
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
                <option disabled selected>Seleccionar Docente</option>
                    <?php 
                        $docentes = $ModelMetodos->getDocentes();
                        if($docentes != null){
                            foreach($docentes as $docente){
                    ?>
                    <option value=<?php echo $docente['nombre']. " ". $docente['apellido']?>><?php echo $docente['nombre']. " ". $docente['apellido']?></option>

                    <?php }}?>
            </select><br><br>
            <br>
            <input type="number" name="Promedio" required autocomplete="off" placeholder="Promedio"><br><br>
            <input type="submit" value=" Registrar Estudiante ">

        </form>
    </div>
</body>
</html>