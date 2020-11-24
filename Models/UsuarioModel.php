<?php

class UsuarioModel {

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tienda;charset=utf8', 'root', '');
    }

    public function GetUsers(){
        $sentencia = $this->db->prepare("SELECT * FROM usuario");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    public function GetUser($user){
        $sentencia = $this->db->prepare("SELECT * FROM usuario WHERE nombre_user = ? ");
        $sentencia->execute(array($user));
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }
    //Admin
    public function AgregarUsuarioNormal($user,$password,$mail){
        $sentencia = $this->db->prepare("INSERT INTO usuario(nombre_user,password_user,mail_user,prioridad_user) VALUES (?,?,?,?)");
        $sentencia->execute(array($user,$password,$mail,0));
    }

    public function EditarUsuario ($idUsuario, $prioridad){
        $sentencia = $this->db->prepare("UPDATE `usuario` SET `prioridad_user` = '$prioridad' WHERE `usuario`.`id_user`= $idUsuario");
        $sentencia->execute();
    }
    
}
?>