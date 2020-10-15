<?php
    require_once "Controllers\HomeController.php";
    require_once "Controllers\ProductosPageController.php";
    require_once "Controllers\LoginController.php";
    require_once "Controllers\ProductosAdminController.php";
    // require_once "Controllers\GaleriaController.php";
    // require_once "Controllers\MenuController.php";
    // require_once "Controllers\ContactoController.php";
    // require_once "Controllers\RegistroController.php";
    // require_once "Controllers\CategoriaController.php";
    // require_once "Controllers\LoginController.php";
   
    $action = $_GET["action"];
    
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']));
    

    
    if($action == ''){ 
        $controller = new HomeController();
        $controller->GetHome();
    }
    if (isset($action)){
        $partesURL = explode("/", $action);
        if($partesURL[0] == "home"){
            $controller = new HomeController();
            $controller->GetHome();
        }elseif ($partesURL[0] == "productos") {
            if (isset($partesURL[1])){
                $controller = new ProductosPageController();
                $controller->GetProducto($partesURL[1]);
            }else{
                $controller = new ProductosPageController();
                $controller->GetPageProductos();
            }
        }elseif ($partesURL[0] == "productosbycategoria") {
            $controller = new ProductosPageController();
            $controller->GetProductosCat($partesURL[1]);   
        }elseif ($partesURL[0] == "login") {
            $controller = new LoginController();
            $controller->GetLogin();   
        }elseif ($partesURL[0]== "verificarLogin") {
            $controller = new LoginController();
            $controller->VerificarLogin();
        }elseif ($partesURL[0]== "productosAdmin") {
            $controller = new ProductosAdminController();
            $controller->GetProductos();
        }elseif ($partesURL[0] == "editar") {
            $controller = new ProductosAdminController();
            $controller->GetEditProductos($partesURL[1]);
        }elseif ($partesURL[0] == "editarProducto") {
            $controller = new ProductosAdminController();
            $controller->EditarProducto($partesURL[1]);
        }elseif ($partesURL[0]=="eliminarProd") {
            $controller = new ProductosAdminController();
            $controller->BorrarProducto($partesURL[1]);
        }elseif ($partesURL[0]=="logout"){
            $controller = new LoginController();
            $controller->Logout();
        }elseif ($partesURL[0]=="agregarprod") {
            $controller = new ProductosAdminController();
            $controller->GetCreateProducto();
        }elseif ($partesURL[0]=="insertarnuevo") {
            $controller = new ProductosAdminController();
            $controller->AgregarProducto();
        }elseif ($partesURL[0]=="agregarcategoria") {
            $controller = new ProductosAdminController();
            $controller->GetCreateCategoria();
         }elseif ($partesURL[0]=="insertarcategoria") {
            $controller = new ProductosAdminController();
            $controller->InsertarCat();
        }elseif ($partesURL[0]=="editarcategorias") {
            $controller = new ProductosAdminController();
            $controller->GetEditCategorias();
        }elseif ($partesURL[0]=="editarcategoria") {
            $controller = new ProductosAdminController();
            $controller->EditarCategoria($partesURL[1]);
        }elseif ($partesURL[0]=="eliminarcategoria") {
            $controller = new ProductosAdminController();
            $controller->BorrarCategoria($partesURL[1]);
        }
    }
    
    

    
?>
