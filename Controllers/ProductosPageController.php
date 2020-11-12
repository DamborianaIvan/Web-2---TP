
<?php
require_once ".\Models\ProductosModel.php";
require_once ".\Models\CategoriasModel.php";
require_once ".\Views\ProductosView.php";
require_once ".\Views\HomeView.php";







class ProductosPageController {

    private $modelProductos;
    private $modelCategorias;
    private $viewProductos;

	function __construct(){

        
        
        $this->modelProductos = new ProductosModel();
        $this->modelCategorias = new CategoriasModel();
        $this->viewProductos = new Productosview();
        $this->viewAdmin = new ProductosAdminView();
        $this->view = new HomeView();
    }
    //HOME
    public function GetHome(){
        $productos = $this->modelProductos->GetProductos();
        $this->view->DisplayHome($productos);           
    }

    //Obtengo los productos de la base de datos y los envio a la vista
    public function GetPageProductos(){
        $productos = $this->modelProductos->GetProductos();     
        $categorias = $this->modelCategorias->GetCategorias();
        $this->viewProductos->DisplayProductosPage($productos,$categorias);
    }

    //Obtengo un producto x categoria de la base de datos y los envio a la vista
    public function GetProductosCat($id_categoria){
        $productos = $this->modelProductos->GetProductosByCat($id_categoria);     
        $categorias = $this->modelCategorias->GetCategorias();
        $this->viewProductos->DisplayProductosPage($productos,$categorias);     
    }

    //Obtengo un prducto x id de la base de datos y los envio a la vista
    public function GetProducto($id_prod){
        $producto = $this->modelProductos->GetProductoById($id_prod); 
        $this->viewProductos->DisplayProductoPage($producto);  
       
    }
}



?>