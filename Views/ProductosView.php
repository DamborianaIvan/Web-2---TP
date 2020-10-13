<?php
   require_once('libs/Smarty.class.php');
  define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
class ProductosView {
    private $Smarty;

    function __construct(){
        $this->Smarty = new Smarty();
        $this->Smarty->assign('BASE_URL', $BASE_URL);
    }   
    public function DisplayProductosPage($Productos, $Categorias){ 

        $this->Smarty->assign('Productos', $Productos);
        $this->Smarty->assign('Categorias', $Categorias);
    

        $this->Smarty->display('templates/productos.tpl');
    }
}

?>