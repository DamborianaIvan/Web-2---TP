<?php

class ProductosModel {

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=tienda;charset=utf8', 'root', '');
    }

    public function GetProducto($idProducto){
        $sentencia = $this->db->prepare("SELECT * FROM producto WHERE id_producto = ? ");
        $sentencia->execute(array($idProducto));
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }
    public function GetProductos(){
        $sentencia = $this->db->prepare("SELECT * FROM producto");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }
    // public function AgregarUsuario($user,$password,$email){
    //     $sentencia = $this->db->prepare("INSERT INTO usuario(nombre_usuario,mail_usuario,clave_usuario) VALUES (?,?,?)");
    //     $sentencia->execute(array($user,$email,$password));
    // }

}
?>