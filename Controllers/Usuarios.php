<?php
class Usuarios extends Controller{
    public function __construct(){
        session_start();
        parent::__construct();
    }
    public function index(){
        $this -> views -> getView($this, "index");
    }

    public function listar(){
        $data = $this->model->getUsuarios();
        echo json_encode($data, JSON_UNESCAPED_UNICODE);    
        die();
    }

    public function validar(){
        if (empty($_POST["usuario"]) || empty($_POST["contraseña"])){
            $msg = "los campos estan vacios";
        } else {
            $usuario = $_POST["usuario"];
            $contraseña = $_POST["contraseña"];
            $data = $this -> model -> getUsuario($usuario, $contraseña);
            if($data){
                $_SESSION["id_usuario"] = $data["id_usuario"];
                $_SESSION["usuario"] = $data["usuario"];
                $_SESSION["contraseña"] = $data["contraseña"];
                $msg = "ok";
            } else {
                $msg = "Usuario o contraseña incorrecta";
            }
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE); 
        die();
    }
}
?>