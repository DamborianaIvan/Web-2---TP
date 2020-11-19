<?php


class ConfigApp{
    public static $ACTION = "action";
    public static $PARAMS = "params";
    public static $ACTIONS = [
        'home'=> 'GetHome',
        'producto'=>'GetProducto',
        'productos'=>'GetPageProductos',
        'productosbycategoria'=>'GetProductosCat',
        'login'=>'GetLogin',
        'verificarLogin'=>'VerificarLogin',
        'productosAdmin'=>'GetProductos',
        'editar'=>'GetEditProductos',
        'eliminarProd'=>'BorrarProducto',
        'logout'=>'Logout',
        'agregarprod'=>'GetCreateProducto',
        'insertarnuevo'=>'AgregarProducto',
        'agregarcategoria'=>'GetCreateCategoria',
        'insertarcategoria'=>'InsertarCat',
        'editarcategorias'=>'EditarCategoria',
        'eliminarcategoria'=>'BorrarCategoria',
        'registro'=>'GetRegistro',
        'crearUsuario'=>'registroUser',
    ];
}