
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

    //                          MENU

    // public function InsertarMenu(){
    //     $this->modelProductos->InsertarMenu($_POST['Nombre'],$_POST['Descripcion'],$_POST['Precio'],$_POST['Categoria'].value);
    //     header(MENUADMIN);
    // }
    // public function EditarMenu(){
    //     $this->modelProductos->EditarMenu($_POST['IndiceMenuEditar'].value,$_POST['NombreMenuEditar'],$_POST['DescripcionMenuEditar'],$_POST['PrecioMenuEditar'],$_POST['CategoriaMenuEditar'].value);
    //     header(MENUADMIN);
    // }

    // public function BorrarMenu($id){
    //     $this->modelProductos->BorrarMenu($id);
    //     header(MENUADMIN);
    // }

    //                      CATEGORIA  

    // public function EditarCategoria(){
    //   $this->modelCategoria->EditarCategoria($_POST['NuevaCategoriaEditar'],$_POST['CategoriaEditar'].value);
    //   header(MENUADMIN);
    // }                                 
    // public function InsertarCategoria(){
    //     $this->modelCategoria->InsertarCategoria($_POST['NuevaCategoria']);
    //     header(MENUADMIN);
    // }
    // public function BorrarCategoria($id){
    //     $this->modelCategoria->BorrarCategoria($id);
    //     header(MENUADMIN);
    // }
}


?>






