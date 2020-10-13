
<?php
require_once ".\Models\ProductosModel.php";
require_once ".\Models\CategoriasModel.php";
require_once ".\Views\ProductosView.php";


class ProductosPageController{

    private $modelProductos;
    private $modelCategorias;
    private $view;

	function __construct(){
        $this->modelProductos = new ProductosModel();
        $this->modelCategorias = new CategoriasModel();
        $this->view = new ProductosView();
    }


    //Yo desde el menu que obtengo en esta funcion de abajo, con los datos de $menu puedo armar la vista
    public function GetPageProductos(){
        $productos = $this->modelProductos->GetProductos();     
        $categorias = $this->modelCategorias->GetCategorias();
        $this->view->DisplayProductosPage($productos,$categorias);
    }
    public function GetProductosCat($id_categoria){
        $productos = $this->modelProductos->GetProductosByCat($id_categoria);     
        $categorias = $this->modelCategorias->GetCategorias();
        $this->view->DisplayProductosPage($productos,$categorias);  
       
    }


}

?>