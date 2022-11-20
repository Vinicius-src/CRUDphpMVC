<?php
 
    class Login{

        public function index()
        {
            return include_once 'view/viewLogin.php';
        }

        public function entrar()
        { 
            
            require_once 'model/LoginModel.php';

            if(isset($_POST['entrar'])){

                $usuario=$_POST['usuario'];
                $senha=$_POST['senha'];

                $user= new LoginModel();

                $login=$user->login($usuario,$senha);
                
                if($login==true){

                    return header("location: home");
                }
                        
            }
            return header("location: /CRUD_MVC_php");
           
        }

        
        public function logout()
        {
            require_once 'model/LoginModel.php';

            $user= new LoginModel();

            if(isset($_SESSION['token_login'])){
                
                $_SESSION = array();

                unset($_COOKIE[session_name()]);

                session_destroy();
    

                return header("location: /CRUD_MVC_php");
            }
           
            
            
        }

        public function verificaSessao()
        {
            require_once 'model/LoginModel.php';

            $user= new LoginModel();

            if(!isset($_SESSION['token_login'])){
                
                $verificaSessao=$user->verificaToken($_SESSION['token_login']);

                

                if($verificaSessao==false){

                    return header("location: /CRUD_MVC_php");
                }

                return header("location: /CRUD_MVC_php");
            }
            

            
            
        }
        
    }