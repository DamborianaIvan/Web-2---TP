<?php
   require_once('libs/Smarty.class.php');

    class LoginView {
        private $Smarty;

        function __construct(){
            $this->Smarty = new Smarty();
        }   
        public function DisplayLogin($Mensaje = ''){
            //El $message = '' es porque al principio no quiero poner ningun mensaje, pero despues si la contraseña es incorrecta si.
            $this->Smarty->assign('Mensaje', $Mensaje);
            $this->Smarty->display('templates/login.tpl');

        }
    }

?>