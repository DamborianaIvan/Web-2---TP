<?php
   require_once('libs/Smarty.class.php');

class ProductosView {
    private $Smarty;

    function __construct(){
        $this->Smarty = new Smarty();
    }   
    public function DisplayProductosPage($Productos){ 

        $this->Smarty->assign('Productos', $Productos);
    

        $this->Smarty->display('templates/productos.tpl');
    }
}

?>