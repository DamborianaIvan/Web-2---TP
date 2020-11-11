<?php
require_once "SecuredController.php";
require_once ".\Views\ProductosAdminView.php";
require_once ".\Models\ProductosModel.php";


class ProductosAdminController extends SecuredController{
    private $modelProductos;
    private $modelCategorias;
    private $viewProductos;

	function __construct(){
        //Llamo a el constructor del padre, el cual verifica si el usuario esta logeado.
        parent::__construct();

        $this->modelProductos = new ProductosModel();
        $this->modelCategorias = new CategoriasModel();
        $this->viewProductos = new Productosview();
        $this->viewAdmin = new ProductosAdminView();
    }
    public function GetProductos(){
        $productos = $this->modelProductos->GetProductos();
        $categorias = $this->modelCategorias->GetCategorias();     
        $this->viewAdmin->DisplayAdmProds($productos,$categorias);
    }
    public function GetEditProductos($idProd){
        $categorias = $this->modelCategorias->GetCategorias();     
        $this->viewAdmin->DisplayEditProds($categorias, $idProd);
    }
    public function GetCreateProducto(){
        $categorias = $this->modelCategorias->GetCategorias();
        $this->viewAdmin->DisplayAgregaProd($categorias);
        header(PRODUCTOSADMIN);
    } 
    public function GetCreateCategoria(){
        $this->viewAdmin->DisplayAgregaCat();

        
    }
    public function GetEditCategorias(){
        $categorias = $this->modelCategorias->GetCategorias();     
        $this->viewAdmin->DisplayEditarCat($categorias);
    }

    public function EditarProducto($id_producto){
        $this->modelProductos->EditarProducto($id_producto, $_POST['NombreEditar'],$_POST['DescripcionProdEditar'],$_POST['PrecioEditar'],$_POST['EstadoProdEditar'],$_POST['CategoriaEditar']);
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