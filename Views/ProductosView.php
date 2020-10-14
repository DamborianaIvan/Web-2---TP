<?php
   require_once('libs/Smarty.class.php');
  
    class ProductosView {
        private $Smarty;

        function __construct(){
            $this->Smarty = new Smarty();
            $this->Smarty->assign('BASE_URL', BASE_URL);
        }   

        //Display de todos los productos
        public function DisplayProductosPage($Productos, $Categorias){ 

            $this->Smarty->assign('Productos', $Productos);
            $this->Smarty->assign('Categorias', $Categorias);
        

            $this->Smarty->display('templates/productos.tpl');
        }


        //Display de un producto solo
        public function DisplayProductoPage($Producto){ 

            $this->Smarty->assign('Producto', $Producto);
    
            $this->Smarty->display('templates/producto.tpl');
        }
}

?>