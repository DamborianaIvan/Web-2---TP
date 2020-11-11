<?php

class ConfigApp{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
        'home'=> "home",
        'productos'=> "productos",
        'productosbycategoria'=>'productosbycategoria',
        'login'=>'iniciarsesion',
        'verificarLogin'=> 'verificarLogin',
        'productosAdmin'=>'productosAdmin',
        'editar'=>'editar',
        'editarProducto'=>'editarProducto',
        'eliminarProd'=>'eliminar',
        'logout'=>'logout',
        'agregarprod'=>'agregarprod',
        'insertarnuevo'=>'insertarnuevo',
        'agregarcategoria'=>'agregarcat',
        'insertarcategoria'=>'insertarcat',
        'editarcategorias'=>'editarcategorias',
        'eliminarcategoria'=>'eliminarcat'
    ];
}






?>