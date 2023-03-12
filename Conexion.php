
<?php
class Conexion {
    protected $db;
    private $driver = "mysql";
    private $host = "localhost:33065";
    private $bd = "notas";
    private $usuario = "root";
    private $pass = "";
    public function __construct()
    {
        try {
            $db = new pdo("{$this->driver}:host={$this->host};dbname={$this->bd}",$this->usuario,$this->pass);
            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $db;
            
        } catch (PDOException $e) {
            echo "Upps!, ha surgido un error al tratar de conectarse a la base de datos" . $e->getMessage();
        }
    }

    


}


?>

