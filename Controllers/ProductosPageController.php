
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

    //Obtengo los productos de la base de datos y los envio a la vista
    public function GetPageProductos(){
        $productos = $this->modelProductos->GetProductos();     
        $categorias = $this->modelCategorias->GetCategorias();
        $this->view->DisplayProductosPage($productos,$categorias);
    }

    //Obtengo un producto x categoria de la base de datos y los envio a la vista
    public function GetProductosCat($id_categoria){
        $productos = $this->modelProductos->GetProductosByCat($id_categoria);     
        $categorias = $this->modelCategorias->GetCategorias();
        $this->view->DisplayProductosPage($productos,$categorias);  
       
    }

    //Obtengo un prducto x id de la base de datos y los envio a la vista
    public function GetProducto($id_prod){
        $producto = $this->modelProductos->GetProductoById($id_prod); 
        $this->view->DisplayProductoPage($producto);  
       
    }


}

?>