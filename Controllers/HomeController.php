<?php
require_once ".\Views\HomeView.php";


class HomeController {
    
    private $view;

	function __construct(){        
        $this->view = new HomeView();
    }


    public function GetHome(){
        $this->view->DisplayHome();
                  
    }

}


?>