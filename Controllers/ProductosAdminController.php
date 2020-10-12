
<?php
require_once ".\Models\ProductosModel.php";
require_once ".\Views\ProductosAdminView.php";

require_once "SecuredController.php";
define('MENUADMIN', "Location: http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"])."/menuAdmin");




class MenuAdminController extends SecuredController{
    //Con el extends SecuredController, lo que hacemos es asegurar este controlador, y mas abajo, en el constructor corroboramos que el usuario este logeado.

    private $modelMenu;
    private $modelCategoria;
    private $view;

	function __construct(){
        //Llamo a el constructor del padre, el cual verifica si el usuario esta logeado.
         parent::__construct();

        $this->modelMenu = new MenuModel(); 
        $this->modelCategoria = new CategoriaModel();
        $this->view = new MenuAdminView();
    }


    //      Yo desde el menu que obtengo en esta funcion de abajo, con los datos de $menu puedo armar la vista
    public function GetMenus(){
        $menus = $this->modelMenu->GetMenus();
        $categorias = $this->modelCategoria->GetCategorias();     
        $this->view->DisplayMenus($menus,$categorias);
    }

    //                          MENU

    public function InsertarMenu(){
        $this->modelMenu->InsertarMenu($_POST['Nombre'],$_POST['Descripcion'],$_POST['Precio'],$_POST['Categoria'].value);
        header(MENUADMIN);
    }
    public function EditarMenu(){
        $this->modelMenu->EditarMenu($_POST['IndiceMenuEditar'].value,$_POST['NombreMenuEditar'],$_POST['DescripcionMenuEditar'],$_POST['PrecioMenuEditar'],$_POST['CategoriaMenuEditar'].value);
        header(MENUADMIN);
    }

    public function BorrarMenu($id){
        $this->modelMenu->BorrarMenu($id);
        header(MENUADMIN);
    }

    //                      CATEGORIA  

    public function EditarCategoria(){
      $this->modelCategoria->EditarCategoria($_POST['NuevaCategoriaEditar'],$_POST['CategoriaEditar'].value);
      header(MENUADMIN);
    }                                 
    public function InsertarCategoria(){
        $this->modelCategoria->InsertarCategoria($_POST['NuevaCategoria']);
        header(MENUADMIN);
    }
    public function BorrarCategoria($id){
        $this->modelCategoria->BorrarCategoria($id);
        header(MENUADMIN);
    }
}


?>






