<?php
require_once "Controllers\ProductosPageController.php";
require_once "Controllers\ProductosAdminController.php";
require_once "Controllers\LoginController.php";
require_once "routerClass.php";


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']));
define('LOGIN', "Location: http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"])."/login");
define('PRODUCTOSADMIN', "Location: http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"])."/productosAdmin");
define('LOGOUT', "Location: http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"])."/logout");
define('PRODUCTOS', "Location: http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"])."/productos");


$r = new Router();



$r->addRoute("home", "GET", "ProductosPageController", "GetHome");
$r->addRoute("productos", "GET", "ProductosPageController","GetPageProductos");
$r->addRoute("productos/:ID", "GET", "ProductosPageController","GetProducto");
$r->addRoute("productosbycategoria", "GET", "ProductosPageController", "GetProductosCat");



$r->addRoute("login", "GET", "LoginController", "GetLogin");
$r->addRoute("verificarLogin", "GET", "LoginController", "VerificarLogin");
$r->addRoute("logout", "GET","LoginController","Logout");
$r->addRoute("registro", "GET","LoginController","GetRegistro");
$r->addRoute("crearUsuario", "GET","LoginController","registroUser");


$r->addRoute("productosAdmin", "GET", "ProductosAdminController", "GetProductos");
$r->addRoute("editar/:ID","GET", "ProductosAdminController","GetEditProductos");
$r->addRoute("editarProducto/:ID", "GET","ProductosAdminController","EditarProducto" );
$r->addRoute("eliminarProd/:ID", "GET","ProductosAdminController","BorrarProducto");
$r->addRoute("agregarprod", "POST","ProductosAdminController","GetCreateProducto");
$r->addRoute("insertarnuevo","POST","ProductosAdminController","AgregarProducto");
$r->addRoute("insertarcategoria", "POST","ProductosAdminController","InsertarCat");
$r->addRoute("editarcategorias/:ID","GET","ProductosAdminController","EditarCategoria");
$r->addRoute("editarcategorias","GET","ProductosAdminController","GetEditCategorias");
$r->addRoute("eliminarcategoria/:ID", "GET","ProductosAdminController","BorrarCategoria");







//ruta por defecto
$r->setDefaultRoute("ProductosPageController", "GetHome");

//run
$r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 


