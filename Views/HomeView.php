<?php
   require_once('libs/Smarty.class.php');

    class HomeView {
        private $Smarty;

        function __construct(){
            $this->Smarty = new Smarty();
        }   
        public function DisplayHome($Productos){ 
            $this->Smarty->assign('Productos', $Productos);
            $this->Smarty->display('templates/home.tpl');
        }
    }

?>