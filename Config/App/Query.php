<?php
class Query extends Conexion {
    private $pdo, $con, $sql;
    public function __construct() {
        $this -> pdo = new Conexion();
        $this -> con = $this -> pdo -> conect();
    }

    public function select (string $sql){
        $this -> sql = $sql;
        $resul = $this -> con -> prepare($this->sql);
        $resul -> execute();
        $data = $resul -> fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    public function selectAll(string $sql) {
        try {
            $this->sql = $sql;
            $resul = $this->con->prepare($this->sql);
            $resul->execute();
            $data = $resul->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        } catch (PDOException $e) {
            // Aquí puedes manejar el error, por ejemplo, registrarlo en un log
            error_log("Error en la consulta: " . $e->getMessage());
            return null; // O false si prefieres
        }
    }
    
}
?>