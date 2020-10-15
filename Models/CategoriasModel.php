<?php

class CategoriasModel {

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tienda;charset=utf8', 'root', '');
    }

    public function GetCategorias(){
        $sentencia = $this->db->prepare("SELECT * FROM categoria");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }


    public function InsertarCategoria($nombreCategoria){
        $sentencia = $this->db->prepare("INSERT INTO categoria (nombre_cat) VALUES (?)");
        $sentencia->execute(array($nombreCategoria));
    }
    public function EditarCategoria($idCategoria,$nombreCategoriaNueva){
        $sentencia = $this->db->prepare("UPDATE `categoria` SET `nombre_cat` = '$nombreCategoriaNueva' WHERE `categoria`.`id_cat`= $idCategoria");
        $sentencia->execute(); 
    }
    public function BorrarCategoria($id){
        $sentencia = $this->db->prepare("DELETE FROM categoria WHERE id_cat=?");
        $sentencia->execute(array($id));
    }
    
    // public function EditarProducto($id_prod, $nombre_prod,$descripcion_prod, $precio_prod,$categoria_prod){
    //     $sentencia = $this->db->prepare("UPDATE `producto` SET  `nombre_prod` = '$nombre_prod', `descripcion_prod` = '$descripcion_prod', `precio_prod` = '$precioMenu' WHERE `producto`.`id_producto` = $id_prod");
    //     $sentencia->execute();
    // }
    // public function BorrarCategoria($id){
    //     $sentencia = $this->db->prepare("DELETE FROM categoria WHERE id_categoria=?");
    //     $sentencia->execute(array($id));
    // }
     // public function AgregarUsuario($user,$password,$email){
    //     $sentencia = $this->db->prepare("INSERT INTO usuario(nombre_usuario,mail_usuario,clave_usuario) VALUES (?,?,?)");
    //     $sentencia->execute(array($user,$email,$password));
    // }
}
?>