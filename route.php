<?php
    require_once "Controllers\HomeController.php";
    require_once "Controllers\ProductosPageController.php";
    require_once "Controllers\LoginController.php";
    // require_once "Controllers\GaleriaController.php";
    // require_once "Controllers\MenuController.php";
    // require_once "Controllers\MenuAdminController.php";
    // require_once "Controllers\ContactoController.php";
    // require_once "Controllers\RegistroController.php";
    // require_once "Controllers\CategoriaController.php";
    // require_once "Controllers\LoginController.php";
   
    $action = $_GET["action"];
    
    
    

    
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
                $controller->GetPageProductos($partesURL[1]);
            }
            $controller = new ProductosPageController();
            $controller->GetPageProductos();
        }elseif ($partesURL[0] == "productosbycategoria") {
            $controller = new ProductosPageController();
            $controller->GetProductosCat($partesURL[1]);   
        }elseif ($partesURL[0] == "login") {
            $controller = new LoginController();
            $controller->GetLogin();   
        }


       
    }
    
    

    
?>
