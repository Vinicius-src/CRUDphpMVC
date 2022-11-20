<?php
abstract class Home{

    public static function index()
    {
        $publicacao=Home::buscarPublicacao();
    
        return [include_once 'view/cabecalho.html', include_once 'view/tabelaLinkPublicacao.html'];
    }

    public static function formCriar()
    {
        if(isset($_POST['criarPublicacao'])){

            $data =$_POST['data'];
            $titulo=$_POST['titulo'];
            $conteudo=$_POST['conteudo'];

            Home::setPublicacao($data,$titulo,$conteudo);

            return header("location: home");

        }
    
        return [include_once 'view/cabecalho.html', include_once 'view/formCriarPublicacao.html'];
    }

    public function setPublicacao($data,$titulo,$conteudo)
    {
        require_once 'model/PublicacaoModel.php';

        $objeto=new  PublicacaoModel;
        $objeto->setPublicacao($data,$titulo,$conteudo);

        return 1 ;
    }
    public function buscarPublicacao()
    {
        require_once 'model/PublicacaoModel.php';

        $objeto=new PublicacaoModel;
        

        if(isset($_POST['buscar'])){

            $busca=$_POST['busca'];

            $result=$objeto->getPublicacaoPesquisar($busca);

            if(isset($result)){
                
                return $result;
            }
            return 2;
        }

        $result=$objeto->getPublicacao();

        if(isset($result)){
                
            return $result;
        }
        
        return 1;
    }

}

?>