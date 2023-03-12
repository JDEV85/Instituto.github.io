<?php 

require_once("../../Conexion.php");
session_start();

class Usuarios extends Conexion{
    public function __construct()
    {
        $this->db = parent::__construct();
    }
    public function login($User, $Pass){
        $statement = $this->db->prepare("SELECT * FROM usuarios WHERE usuario = :User AND password =:Pass");
        $statement->bindParam(":User",$User);
        $statement->bindParam(":Pass", $Pass);
        $statement->execute();
        if($statement->rowCount()==1){
            $result = $statement->fetch();
            $_SESSION['NOMBRE'] = $result['nombre'] . " " . $result['apellido'];
            $_SESSION['ID'] = $result['id_usuario'];
            $_SESSION['PERFIL'] = $result['perfil'];
            return true;
        }
        return false; 
        
    }
    public function getNombre(){
        return $_SESSION['NOMBRE'];
    }

    public function getId(){
        return $_SESSION['ID'];
    }

    public function getPerfil(){
        return $_SESSION['PERFIL'];
    }

    public function validateSession(){
        if($_SESSION['ID']==null){
            header('Location:../../index.php');
        }
    }

    public function validateSessionAdministrator(){
        if($_SESSION['ID']!=null){
            if($_SESSION['PERFIL']=="Docente"){
                header('Location: ../../Estudiantes/Pages/index.php');
            }
        }
    }

    public function salir(){
        $_SESSION['ID'] = null;
        $_SESSION['NOMBRE'] = null;
        $_SESSION['PEFIL'] = null;
        session_destroy();
        header("Location: ../../index.php");
    }


}

?>