<?php
   require_once('libs/Smarty.class.php');
  
class ProductosView {
    private $Smarty;

    function __construct(){
        $this->Smarty = new Smarty();
        $this->Smarty->assign('BASE_URL', BASE_URL);
    }   
    public function DisplayProductosPage($Productos, $Categorias){ 

        $this->Smarty->assign('Productos', $Productos);
        $this->Smarty->assign('Categorias', $Categorias);
    

        $this->Smarty->display('templates/productos.tpl');
    }
}

?>