<?php 

require_once('../../Conexion.php');

class Docentes extends Conexion {
    public function __construct(){
        $this->db = parent::__construct();
    }

    public function add($Nombre, $Apellido, $Usuario, $Pass){
        $statement = $this->db->prepare("INSERT INTO usuarios(nombre,apellido,usuario,password, perfil, estado)
        VALUES(:Nombre, :Apellido,:Usuario,:Pass,'Docente','Activo')");

        $statement->bindParam(":Nombre",$Nombre);
        $statement->bindParam(":Apellido",$Apellido);
        $statement->bindParam(":Usuario",$Usuario);
        $statement->bindParam(":Pass",$Pass);

        if ($statement->execute()) {
            header('Location: ../Pages/index.php');
        }else{
            header('Location: ../Pages/add.php');
        }


    }

    public function get(){
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM usuarios WHERE perfil = 'Docente'");
        $statement->execute();

        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;

    }

    public function getById($id){
        $statement = $this->db->prepare("SELECT * FROM usuarios WHERE id_usuario = :Id AND perfil = 'Docente'");
        $statement->bindParam(":Id",$id);
        $statement->execute();

        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;

    }

    public function update($Id, $Nombre, $Apellido, $Usuario, $Pass, $Estado){
        $statement = $this->db->prepare("UPDATE usuarios SET nombre = :Nombre, apellido = :Apellido, usuario = :Usuario,
            password = :Pass, estado=:Estado WHERE id_usuario = :Id");

            $statement->bindParam(":Id", $Id);
            $statement->bindParam(":Nombre", $Nombre);
            $statement->bindParam(":Apellido", $Apellido);
            $statement->bindParam(":Usuario", $Usuario);
            $statement->bindParam(":Pass", $Pass);
            $statement->bindParam(":Estado", $Estado);

            if ($statement->execute()) {
                header('Location: ../Pages/index.php');
            }else{
                header('Location: ../Pages/edit.php');
            }

    }

    public function delete($Id){
        $statement = $this->db->prepare("DELETE FROM usuarios WHERE id_usuario = :Id");
        $statement->bindParam(":Id",$Id);

        if($statement->execute()){
            header('Location: ../Pages/index.php');
        }else{
            header('Location: ../pages/delete.php');
        }
        
    }
}

?>