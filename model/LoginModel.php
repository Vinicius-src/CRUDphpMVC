<?php
require_once 'config/Conexao.php';
    class LoginModel{

        public function login($usuario,$senha)
        {
            $con=Conexao::getConexao();
            $sql=("SELECT * FROM usuario where usuario='".$usuario."' and senha='".$senha."'");

            $querrySelect=$con->prepare($sql);

            $querrySelect->execute();

            $result=$querrySelect->fetchAll();

           session_start();

            if(isset($result[0]['id_usuario'])){

                $token=md5(rand(1,10));
                $id=$result[0]['id_usuario'];
                $nome=$result[0]['nome'];

                

                $_SESSION['token_login']=$token;

               
                $_SESSION['nome']=$nome;

               

               $this->setTokenModel($id,$token);

                return 1;
            }
            return false;
          

        }

        public function setTokenModel($id, $token)
            {
                $con=Conexao::getConexao();
                $sql=("UPDATE usuario SET token_login='".$token."' WHERE id_usuario=$id");

                $querrySelect=$con->prepare($sql);

                $querrySelect->execute();
                
                $querrySelect->execute();

            }
        
        public function verificaToken($token)
            {
                $con=Conexao::getConexao();
                $sql=("SELECT * FROM usuario where usuario='".$token."'");

                $querrySelect=$con->prepare($sql);

                $querrySelect->execute();

                $result=$querrySelect->fetchAll();

                if(isset($result)){
                    return true;
                }
                return false;
            }
        


       

    }

?>