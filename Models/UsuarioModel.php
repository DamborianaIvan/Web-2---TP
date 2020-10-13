<?php

class UsuarioModel {

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tienda;charset=utf8', 'root', '');
    }



    public function GetUser($user){
        $sentencia = $this->db->prepare("SELECT * FROM usuario WHERE nombre_user = ? ");
        $sentencia->execute(array($user));
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }






    //Admin
    public function AgregarUsuario($user,$password){
        $sentencia = $this->db->prepare("INSERT INTO usuario(nombre_user,password_user) VALUES (?,?)");
        $sentencia->execute(array($user,$password));
    }

}
?>