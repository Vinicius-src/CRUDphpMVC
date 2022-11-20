<?php
abstract class Core{
    

    static function route($url){
        

        require_once 'controller/login.php';
        $user=new Login();

        $url=$url ?? '';

        if(isset($url)){
           
            switch ( $url ){

                case '';
                   
                    if(isset($_SESSION['token_login'])){

                        return header("location: home");
                    }

                    $user->index();

                break;

                case 'login';

                    $user->entrar();
                break;

                case 'logout';

                        $user->logout();
                 break;

                case 'home';
                        $user->verificaSessao();
                        require_once 'controller/Home.php';
                        
                        Home::index();
                    
                    break;

                case 'criar_publicacao';

                        $user->verificaSessao();
                        require_once 'controller/Home.php';

                        Home::formCriar();

                    break;
                    
                
                case 'home-publicacao';

                        require_once 'controller/publicacao.php';
                        $user->verificaSessao();
                        Publicacao::index();

                    break;

                case 'home-publicacao-editar';

                    require_once 'controller/publicacao.php';

                    $user->verificaSessao();
                    Publicacao::editar();

                    break;
                
                case 'home-publicacao-atualizar';

                    require_once 'controller/publicacao.php';

                    $user->verificaSessao();
                    Publicacao::atualizarPublicacao();

                    break;

                case 'home-publicacao-deletar';

                    require_once 'controller/publicacao.php';

                    $user->verificaSessao();
                    Publicacao::deletar();

                    break;

            }
        }


    }
}

?>