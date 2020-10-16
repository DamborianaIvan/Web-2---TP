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
        $sentencia = $this->db->prepare("DELETE FROM `categoria` WHERE `categoria`.`id_cat`= $id");
        $sentencia->execute();
    }
   

}
?>