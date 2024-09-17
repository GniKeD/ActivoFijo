<?php
class UsuariosModel extends Query{
    public function __construct(){
       parent::__construct();
    }

    public function getUsuario(string $usuario, string $contraseña){
        $sql ="SELECT * FROM usuarios WHERE usuario = '$usuario' AND contraseña = '$contraseña'";
        $data = $this -> select($sql);
        if ($data == null){
            return null;
        } else {
            return $data;
        }
    }
    public function getUsuarios() {
        $sql = "SELECT u.*, s.id_sucursal, s.nombre FROM usuarios u INNER JOIN sucursal s WHERE u.id_sucursal = s.id_sucursal;";
        $data = $this->selectAll($sql);
        if ($data === null || empty($data)) {
            return []; // Devuelve un array vacío si no hay resultados
        }
        return $data;
    }
    

    
    
}
?>