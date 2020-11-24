<?php
   require_once('libs/Smarty.class.php');
  
class ProductosAdminView {
    private $Smarty;

    function __construct(){
        $this->Smarty = new Smarty();
        $this->Smarty->assign('BASE_URL', BASE_URL);
    }   
    public function DisplayAdmProds($Productos, $Categorias){ 

        $this->Smarty->assign('Productos', $Productos);
        $this->Smarty->assign('Categorias', $Categorias);
    

        $this->Smarty->display('templates/productosAdmin.tpl');
    }
    //Display de editarprod
    public function DisplayEditProds($Categorias, $idProd){ 

        $this->Smarty->assign('Categorias', $Categorias);
        $this->Smarty->assign('Id', $idProd);
        
    

        $this->Smarty->display('templates/editarProd.tpl');
    }
    //Display de Insertar Producto
    public function DisplayAgregaProd($Categorias){ 

        $this->Smarty->assign('Categorias', $Categorias);


        $this->Smarty->display('templates/agregarProd.tpl');
    }
    //Display de Insertar Categoria
    public function DisplayAgregaCat(){ 
        
        $this->Smarty->display('templates/agregarCategoria.tpl');
    }

    public function DisplayEditarCat($Categorias){ 
        $this->Smarty->assign('Categorias', $Categorias);

        $this->Smarty->display('templates/editarCategoria.tpl');
    }


    //Display del editar usuario, para cambiar prioridades
    public function DisplayEditUser($Usuarios){ 

        $this->Smarty->assign('Usuarios', $Usuarios);
        
        
    

        $this->Smarty->display('templates/editarUsuario.tpl');
    }
}

?>