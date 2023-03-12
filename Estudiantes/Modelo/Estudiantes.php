<?php 

require_once('../../Conexion.php');

class Estudiantes extends Conexion {
    public function __construct(){
        $this->db = parent::__construct();
    }

    public function add($Nombre, $Apellido, $Documento, $Correo, $Materia, $Docente, $Promedio, $Fecha){
        $statement = $this->db->prepare("INSERT INTO estudiantes (Nombre, Apellido, documento, correo, materia, docente, promedio, fecha_registro)
        VALUES(:Nombre, :Apellido, :Documento, :Correo, :Materia, :Docente, :Promedio, :Fecha)");

        $statement->bindParam(':Nombre',$Nombre);
        $statement->bindParam(':Apellido',$Apellido);
        $statement->bindParam(':Documento',$Documento);
        $statement->bindParam(':Correo',$Correo);
        $statement->bindParam(':Materia',$Materia);
        $statement->bindParam(':Docente',$Docente);
        $statement->bindParam(':Promedio',$Promedio);
        $statement->bindParam(':Fecha',$Fecha);

        if($statement->execute()){
            header('Location: ../Pages/index.php');
        }else{
            header('Location: ../Pages/add.php');
            
        }

    }

    public function get(){
        $statement = $this->db->prepare("SELECT * FROM estudiantes");
        $rows = null;
        $statement->execute();
        while($result=$statement->fetch()){
            $rows[] = $result;
        }
        return $rows;

    }

    public function getById($Id){
        $statement = $this->db->prepare("SELECT * FROM estudiantes WHERE id_estudiante = :Id");
        $rows = null;
        $statement->bindParam(":Id",$Id);
        $statement->execute();

        while($result = $statement->fetch()){
            $rows[] = $result; 
        }
        return $rows;

    }

    public function update($Id, $Nombre, $Apellido, $Documento, $Correo, $Materia, $Docente, $Promedio, $Fecha){
        $statement = $this->db->prepare("UPDATE estudiantes SET Nombre = :Nombre, Apellido = :Apellido, documento = :Documento, correo = :Correo,
            materia = :Materia, Docente = :Docente, promedio = :Promedio, fecha_registro = :Fecha  WHERE id_estudiante = :Id");

            $statement->bindParam(':Id',$Id);
            $statement->bindParam(':Nombre',$Nombre);
            $statement->bindParam(':Apellido',$Apellido);
            $statement->bindParam(':Documento',$Documento);
            $statement->bindParam(':Correo',$Correo);
            $statement->bindParam(':Materia',$Materia);
            $statement->bindParam(':Docente',$Docente);
            $statement->bindParam(':Promedio',$Promedio);
            $statement->bindParam(':Fecha',$Fecha);

            if ($statement->execute()) {
                header('Location: ../Pages/index.php');
            }else{
                header('Location: ../Pages/edit.php');
                
            }

    }

    public function delete($Id){
        $statement = $this->db->prepare("DELETE FROM estudiantes WHERE id_estudiante = :Id");
        $statement->bindParam(":Id",$Id);

        if ($statement->execute()) {
            header('Location: ../Pages/index.php');
        }else{
            header('Location: ../Pages/delete.php');
            
        }

        
    }

    public function serchByName($Name){
        //$name = "%". $_POST['buscar']. "%";
        $statement = $this->db->prepare("SELECT * FROM estudiantes WHERE nombre  LIKE '%' :Name '%' OR apellido LIKE '%' :Name '%' OR documento LIKE '%' :Name '%' 
        OR materia LIKE '%' :Name '%' OR docente LIKE '%' :Name '%'");
        $rows = null;
        $statement->bindParam(":Name", $Name);
        $statement->execute();

        while($result = $statement->fetch()){
            $rows[] = $result;
        }

        return $rows;

    }
}


?>