<?php
    require_once "Controllers\HomeController.php";
    require_once "Controllers\ProductosPageController.php";
    require_once "Controllers\LoginController.php";
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
            $controller = new ProductosPageController();
            $controller->GetProductos();
        }elseif ($partesURL[0] == "editar") {
            $controller = new ProductosPageController();
            $controller->GetEditProductos($partesURL[1]);
        }elseif ($partesURL[0] == "editarProducto") {
            $controller = new ProductosPageController();
            $controller->EditarProducto($partesURL[1]);
        }elseif ($partesURL[0]=="eliminarProd") {
            $controller = new ProductosPageController();
            $controller->BorrarProducto($partesURL[1]);
        }elseif ($partesURL[0]=="logout"){
            $controller = new LoginController();
            $controller->Logout();
        }elseif ($partesURL[0]=="agregarprod") {
            $controller = new ProductosPageController();
            $controller->GetCreateProducto();
        }elseif ($partesURL[0]=="insertarnuevo") {
            $controller = new ProductosPageController();
            $controller->AgregarProducto();
        }elseif ($partesURL[0]=="agregarcategoria") {
            $controller = new ProductosPageController();
            $controller->GetCreateCategoria();
         }elseif ($partesURL[0]=="insertarcategoria") {
            $controller = new ProductosPageController();
            $controller->InsertarCat();
        }elseif ($partesURL[0]=="editarcategorias") {
            $controller = new ProductosPageController();
            $controller->GetEditCategorias();
        }elseif ($partesURL[0]=="editarcategoria") {
            $controller = new ProductosPageController();
            $controller->EditarCategoria($partesURL[1]);
        }elseif ($partesURL[0]=="eliminarcategoria") {
            $controller = new ProductosPageController();
            $controller->BorrarCategoria($partesURL[1]);
        }
    }
    
    

    
?>
