
<?php
require_once ".\Models\ProductosModel.php";
require_once ".\Models\CategoriasModel.php";
require_once ".\Views\ProductosAdminView.php";

require_once "SecuredController.php";





class ProductosAdminController extends SecuredController{
    //Con el extends SecuredController, lo que hacemos es asegurar este controlador, y mas abajo, en el constructor corroboramos que el usuario este logeado.

    private $modelProductos;
    private $modelCategorias;
    private $view;

	function __construct(){
        //Llamo a el constructor del padre, el cual verifica si el usuario esta logeado.
         parent::__construct();

        $this->modelProductos = new ProductosModel(); 
        $this->modelCategorias = new CategoriasModel();
        $this->view = new ProductosAdminView();
    }


    //      Yo desde el menu que obtengo en esta funcion de abajo, con los datos de $menu puedo armar la vista
    public function GetProductos(){
        $productos = $this->modelProductos->GetProductos();
        $categorias = $this->modelCategorias->GetCategorias();     
        $this->view->DisplayAdmProds($productos,$categorias);
    }
    public function GetEditProductos($idProd){
        $categorias = $this->modelCategorias->GetCategorias();     
        $this->view->DisplayEditProds($categorias, $idProd);
    }
    public function GetCreateProducto(){
        $categorias = $this->modelCategorias->GetCategorias();
        $this->view->DisplayAgregaProd($categorias);
        header(PRODUCTOSADMIN);
    } 
    public function GetCreateCategoria(){
        $this->view->DisplayAgregaCat();
    
        
    }
    public function GetEditCategorias(){
        $categorias = $this->modelCategorias->GetCategorias();     
        $this->view->DisplayEditarCat($categorias);
    }





    
     public function EditarProducto($id_producto){
         $this->modelProductos->EditarProducto($id_producto, $_POST['NombreEditar'],$_POST['DescripcionProdEditar'],$_POST['PrecioEditar'],$_POST['CategoriaEditar'].value);
         header(PRODUCTOSADMIN);
     }

     public function BorrarProducto($id_borrar){
         $this->modelProductos->BorrarProducto($id_borrar);
         header(PRODUCTOSADMIN);
     }
     public function AgregarProducto(){
         $this->modelProductos->AgregarProducto($_POST['NombreNuevo'],$_POST['DescripcionNuevo'],$_POST['PrecioNuevo'],$_POST['EstadoNuevo'],$_POST['CategoriaNuevo']);
         header(PRODUCTOSADMIN);
     }






    //                    CATEGORIA  
    public function InsertarCat(){
        $this->modelCategorias->InsertarCategoria($_POST['CategoriaNueva']);
        header(PRODUCTOSADMIN);
    }


    public function EditarCategoria(){
      $this->modelCategorias->EditarCategoria($_POST['EditCategoria'],$_POST['NombreCategoriaEditada']);
      header(PRODUCTOSADMIN);
    }                                 
   
    public function BorrarCategoria($idCat){
        $this->modelCategorias->BorrarCategoria($idCat);
        header(PRODUCTOSADMIN);
    }
}


?>






