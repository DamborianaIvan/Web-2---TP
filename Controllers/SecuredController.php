<?php 
    //Lo que va hacer esto es asegurarse de que este logeado para hacer lo siguiente, si queres que primero pase por este controlador, solamente tenes que extender la clase del controlador que queres que este seguro.
    class SecuredController{
        

        function __construct(){

            session_start();
            if(isset($_SESSION["User"])){
                //Si esta logeado sigue con lo demas
            }else{
                //Si no esta logeado te manda al login
                header(LOGIN);
            }
        }

    }


?>