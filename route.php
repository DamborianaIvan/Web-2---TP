<?php
    require_once "Controllers\HomeController.php";
    require_once "Controllers\ProductosPageController.php";
    // require_once "Controllers\GaleriaController.php";
    // require_once "Controllers\MenuController.php";
    // require_once "Controllers\MenuAdminController.php";
    // require_once "Controllers\ContactoController.php";
    // require_once "Controllers\RegistroController.php";
    // require_once "Controllers\CategoriaController.php";
    // require_once "Controllers\LoginController.php";
    
    $action = $_GET["action"];
    
    $partesURL = explode("/", $action);
    

    
    if($action == ''){ 
        $controller = new HomeController();
        $controller->GetHome();
    }
    switch ($partesURL[0]){
        case 'home' :
            $controller = new HomeController();
            $controller->GetHome();
        break;
        case 'productos' :
            $controller = new ProductosPageController();
            $controller->GetPageProductos();
    }
        // {
        //         $partesURL = explode("/", $action);
        //         if($partesURL[0] == "home"){ 
        //             $controller = new HomeController();
        //             $controller->GetHome();
        //         }
        //         if($partesURL[0] == "home"){ 
        //             $controller = new HomeController();
        //             $controller->GetHome();
        //         }
        //    elseif($partesURL[0] == "menu"){ 
        //         $controller = new MenuController();
        //         $controller->GetMenus();
        //     }elseif($partesURL[0] == "menuAdmin"){ 
        //         $controller = new MenuAdminController();
        //         $controller->GetMenus();
        //     }elseif($partesURL[0] == "agregarMenu"){ 
        //         $controller = new MenuAdminController();
        //         $controller->InsertarMenu();
        //     }elseif($partesURL[0] == "editarMenu"){ 
        //         $controller = new MenuAdminController();
        //         $controller->EditarMenu();
        //     }elseif($partesURL[0] == "borrar"){ 
        //         $controller = new MenuAdminController();
        //         $controller->BorrarMenu($partesURL[1]);
        //     }elseif($partesURL[0] == "nosotros") {
        //         $controller = new NosotrosController();
        //         $controller->GetNosotros();
        //    }elseif($partesURL[0] == "galeria") {
        //         $controller = new GaleriaController();
        //         $controller->GetGaleria();
        //    }elseif($partesURL[0] == "editarCategoria") {
        //         $controller = new MenuAdminController();
        //         $controller->EditarCategoria();
        //     }elseif($partesURL[0] == "crearCategoria") {
        //         $controller = new MenuAdminController();
        //         $controller->InsertarCategoria();
        //     }elseif($partesURL[0] == "borrarCategoria") {
        //         $controller = new MenuAdminController();
        //         $controller->BorrarCategoria($partesURL[1]);
        //     }elseif($partesURL[0] == "contacto") {
        //         $controller = new ContactoController();
        //         $controller->GetContacto();
        //     }elseif($partesURL[0] == "registrar") {
        //         $controller = new RegistroController();
        //         $controller->GetRegistro();
        //     }elseif($partesURL[0] == "crearUsuario") {
        //         $controller = new RegistroController();
        //         $controller->CrearUsuario();
        //     }elseif($partesURL[0] == "ingresar") {
        //         $controller = new LoginController();
        //         $controller->GetLogin();
        //     }elseif($partesURL[0] == "verificarLogin") {
        //         $controller = new LoginController();
        //         $controller->verificarLogin();
        //     }elseif($partesURL[0] == "logout") {
        //         $controller = new LoginController();
        //         $controller->Logout();
        //     }
    //         elseif($partesURL[0] == "borrar") {
    //         BorrarTarea($partesURL[1]);
    //         $controller = new MenuController();
    //         $controller->BorrarTarea($partesURL[1]);
    //     }
    // }
    
     


    
?>
