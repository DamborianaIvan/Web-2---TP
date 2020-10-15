<?php

class ProductosModel {

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tienda;charset=utf8', 'root', '');
    }
    

    public function GetProductoById($idProducto){
        $sentencia = $this->db->prepare("SELECT * FROM producto WHERE id_producto = ? ");
        $sentencia->execute(array($idProducto));
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }
    public function GetProductosByCat($idCategoria){
        $sentencia = $this->db->prepare("SELECT * FROM producto WHERE id_categoria = ? ");
        $sentencia->execute(array($idCategoria));
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }




    public function GetProductos(){
        $sentencia = $this->db->prepare("SELECT * FROM producto");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    public function EditarProducto($id_prod, $nombre_prod,$descripcion_prod, $precio_prod,$estado_prod,$categoria_prod){
        $sentencia = $this->db->prepare("UPDATE `producto` SET  `nombre_prod` = '$nombre_prod', `descripcion_prod` = '$descripcion_prod', `precio_prod` = '$precio_prod',`estado_prod` = '$estado_prod', `id_categoria` = '$categoria_prod'  WHERE `producto`.`id_producto` = $id_prod");
        $sentencia->execute();
    }    
    public function BorrarProducto($id_prod){
        $sentencia= $this->db->prepare("DELETE FROM producto WHERE id_producto = $id_prod");
        $sentencia->execute();
    }
    public function AgregarProducto($nombre_prod,$descripcion_prod, $precio_prod,$estado_producto,$categoria_prod){
        $sentencia = $this->db->prepare("INSERT INTO producto (nombre_prod, precio_prod, descripcion_prod, estado_prod, id_categoria) VALUES (?,?,?,?,?)");
        $sentencia->execute(array($nombre_prod, $precio_prod, $descripcion_prod, $estado_producto, $categoria_prod));
    }
    





}
?>