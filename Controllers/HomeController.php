<?php
require_once ".\Views\HomeView.php";
require_once ".\Models\ProductosModel.php";


class HomeController {
    
    private $view;
    private $modelProductos;

	function __construct(){        
        $this->view = new HomeView();
        $this->modelProductos = new ProductosModel();
    }


    public function GetHome(){
        $productos = $this->modelProductos->GetProductos();
        $this->view->DisplayHome($productos);
                  
    }

}


?>