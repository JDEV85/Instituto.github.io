<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Sistema de nota</title>
</head>
<body>

    <div class="log-form-div">
        <div class="icon-container"><span class="material-icons">face_6</span></div>
        <h1>Inicio de Sesion</h1>
        <form class="log-form" method="POST" action="Usuarios/Controladores/Login.php">
            
            <br><br>
            <input type="text" name="Usuario" required autocomplete="off" placeholder="Usuario"><br><br><br>
            
            <input type="password" name="Contrasena" required autocomplete="off" placeholder="Contraseña"><br><br><br>
            <input type="submit" value="Iniciar Sesion">


        </form>
    </div>
    
</body>
</html>