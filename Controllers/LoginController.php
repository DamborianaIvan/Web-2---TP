
<?php
require_once ".\Models\UsuarioModel.php";
require_once ".\Views\LoginView.php";
define('LOGIN', "Location: http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"])."/login");
define('PRODUCTOSADMIN', "Location: http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"])."/productosAdmin");
define('LOGOUT', "Location: http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"])."/logout");

class LoginController{

    private $modelUsuario;
    private $view;

	function __construct(){
        $this->modelUsuario= new UsuarioModel();
        $this->view = new LoginView();
    }


    //Yo desde el menu que obtengo en esta funcion de abajo, con los datos de $menu puedo armar la vista
    
    public function GetLogin(){
        $this->view->DisplayLogin(); 
    }

    //El logout es solo esto, despues se pone en un boton
    public function Logout(){
        session_start();
        session_destroy();
        header(LOGIN);
    }
    
    public function verificarLogin(){
        $user = $_POST["usuarioId"];
        $pass = $_POST["passwordId"];
        $dbUser = $this->modelUsuario->GetUser($user);
        var_dump($dbUser);
        if(isset($dbUser)){
             //password_verify desencripta la contraseña encriptada guardada en este caso en hash y la compara con la ingresada
            if(password_verify($pass,$dbUser[0]["password_user"])){
                //Redireccionar a Pagina administrador
                session_start();
                $_SESSION["User"] = $user;                    
                header(PRODUCTOSADMIN);
            }else{
                //No es correcta la contraseña
                $this->view->DisplayLogin("Contraseña incorrecta.");
            }
        }else{
            //No existe el usuario
            $this->view->DisplayLogin("No existe el usuario.");
        }
    }
  
}

?>