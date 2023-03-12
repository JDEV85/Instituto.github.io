<?php 

require_once('Conexion.php');

class Metodos extends Conexion{
    public function __construct(){
        $this->db = parent::__construct();
    }


    public function getMaterias(){
        $statement = $this->db->prepare("SELECT * FROM materias");
        $rows = null;
        $statement->execute();

        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;


    }

    public function getDocentes(){
        $statement = $this->db->prepare("SELECT * FROM usuarios WHERE perfil = 'Docente'");
        $rows = null;
        $statement->execute();

        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;

    }

}

    

?>