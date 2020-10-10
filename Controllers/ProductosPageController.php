
<?php
require_once ".\Models\ProductosModel.php";
require_once ".\Views\ProductosView.php";


class ProductosPageController{

    private $modelProductos;
    private $view;

	function __construct(){


        $this->modelProductos = new ProductosModel();
        $this->view = new ProductosView();
    }


    //Yo desde el menu que obtengo en esta funcion de abajo, con los datos de $menu puedo armar la vista
    public function GetProductos(){
        $productos = $this->modelProductos->GetProductos();     
        $this->view->DisplayProductosPage($productos);
    }


}

?>