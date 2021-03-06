
<?php
require_once ".\Models\UsuarioModel.php";
require_once ".\Views\LoginView.php";




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
    public function GetRegistro(){
        $this->view->DisplayRegistro(); 
    }
    //verifica un registro valido y no existente y lo envia a la bd
    public function registroUser(){
        if($_POST['newUserName'] && $_POST['newUserPass']){
            $pass = password_hash($_POST['newUserPass'], PASSWORD_DEFAULT);
            $user = $_POST['newUserName'];
            $email = $_POST['newUserEmail'];
                $dbUser = $this->modelUsuario->GetUser($user);
                if(count($dbUser) > 0){
                    $this->view->DisplayRegistro("El usuario ya existe.");
                }else{
                    $this->modelUsuario->AgregarUsuarioNormal($user,$pass,$email);
                    session_start();
                    $_SESSION["User"] = $user;                    
                    header(PRODUCTOS);
                }   
        }else{
            $this->view->DisplayRegistro("Complete todos los campos por favor.");
        }
    }
    //El logout es solo esto, despues se pone en un boton
    public function Logout(){
        session_start();
        session_destroy();
        header(LOGIN);
    }
    
    public function VerificarLogin(){
        if(($_POST["usuarioId"]) && ($_POST["passwordId"])){
        $user = $_POST["usuarioId"];
        $pass = $_POST["passwordId"];
        $dbUser = $this->modelUsuario->GetUser($user);
            if(isset($dbUser)){
                 //password_verify desencripta la contraseña encriptada guardada en este caso en hash y la compara con la ingresada
                if(password_verify($pass,$dbUser[0]["password_user"])){
                    //Redireccionar a Pagina administrador
                    session_start();
                    $_SESSION["User"] = $user;                    
                    header(PRODUCTOS);
                }else{
                    //No es correcta la contraseña
                    $this->view->DisplayLogin("Contraseña incorrecta.");
                }
            }else{
                //No existe el usuario
                $this->view->DisplayLogin("No existe el usuario.");
            }
        }else{
            $this->view->DisplayLogin("Ambos campos son obligatorios");
        }
    }
  

   
    

}

?>