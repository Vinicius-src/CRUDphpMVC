<?php


abstract class  Publicacao{

    public static function index()
    {
        

        if(isset($_POST['abrirPublicacao'])){

            require_once 'model/PublicacaoModel.php';

            $id=$_POST['id'];

            $objeto=new  PublicacaoModel;

            $result=$objeto->getPublicacaoId($id);
            if(isset($result)){

                
                return  [include_once 'view/cabecalho.html',include_once 'view/publicacao.html'];
            }
            
        }
        return  header("location: home");
    }

    public static function deletar()
    {
        if(isset($_POST['deletarPublicacao'])){

        require_once 'model/PublicacaoModel.php';
        

        $objeto=new PublicacaoModel;
        
        $id=$_POST['id'];

        $objeto->deletar($id);
        }
        return header("location: home");

    }

    public static function editar()
    {  
        if(isset($_POST['editarPublicacao'])){

            require_once 'model/PublicacaoModel.php';

            $objeto=new PublicacaoModel;

            $id=$_POST['id'];


            $result=$objeto->getPublicacaoId($id);

            if(isset($result)){

                return  [include_once 'view/cabecalho.html',include_once 'view/formEditarPublicacao.html'];
            }
        }
        return  header("location: home");
    }

    public static function atualizarPublicacao()
    {
        if(isset($_POST['atualizarPublicacao'])){

            require_once 'model/PublicacaoModel.php';

            $objeto=new PublicacaoModel;

            $id=$_POST['id'];
            $titulo=$_POST['titulo'];
            $data=$_POST['data'];
            $conteudo=$_POST['conteudo'];

            $objeto->atualizarPublicacao($id,$titulo,$data,$conteudo);

        }
        return  header("location: home");
    }

}

?>