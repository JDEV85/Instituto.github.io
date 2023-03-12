<?php 

require_once('../../Conexion.php');

class Materias extends Conexion{
    public function __construct(){
        $this->db = parent::__construct();
    }

    public function add($Materia){
        $statement = $this->db->prepare("INSERT INTO materias (Materia) VALUES(:Materia)");

        $statement->bindParam(":Materia",$Materia);

        if ($statement->execute()) {
            header("Location: ../Pages/index.php");
        }else{
            header("Location: ../Pages/add.php");

        }

    }

    public function get(){
        $statement = $this->db->prepare("SELECT * FROM materias");
        $rows = null;
        $statement->execute();

        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;

    }

    public function getById($Id){
        $statement = $this->db->prepare("SELECT * FROM materias WHERE Id_materia = :Id");
        $rows = null;
        $statement->bindParam(":Id",$Id);
        $statement->execute();

        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;


    }

    public function update($Id, $Materia){
        $statement = $this->db->prepare("UPDATE materias SET Materia=:Materia WHERE id_materia = :Id");

        $statement->bindParam(":Id",$Id);
        $statement->bindParam(":Materia",$Materia);

        if ($statement->execute()) {
            header("Location: ../Pages/index.php");
        }else{
            header("Location: ../Pages/edit.php");
        }
        

    }

    public function delete($Id){
        $statement = $this->db->prepare("DELETE FROM materias WHERE id_materia = :Id");
        $statement->bindParam(":Id",$Id);

        if ($statement->execute()) {
            header("Location: ../Pages/index.php");
        }else{
            header("Location: ../Pages/delete.php");
        }
        
    }
}

?>