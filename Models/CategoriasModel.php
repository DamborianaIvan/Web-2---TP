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
        $sentencia = $this->db->prepare("INSERT INTO categoria (`id_cat`, `nombre_cat`) VALUES (NULL, $nombreCategoria)");
        $sentencia->execute(array(NULL, $nombreCategoria));
    }
    // public function EditarCategoria($nombreCategoriaNueva, $idCategoria){
    //     $sentencia = $this->db->prepare("UPDATE categoria SET `nombre_categoria` = '$nombreCategoriaNueva' WHERE id_categoria=$idCategoria");
    //     $sentencia->execute(); 
    // }
    // public function BorrarCategoria($id){
    //     $sentencia = $this->db->prepare("DELETE FROM categoria WHERE id_categoria=?");
    //     $sentencia->execute(array($id));
    // }
}
?>