<?php
require_once 'config/Conexao.php';
    class PublicacaoModel{

        public function getPublicacao()
        {
            $con=Conexao::getConexao();
            $sql=("SELECT id_publicacao,titulo,data FROM publicacao");

            $querrySelect=$con->prepare($sql);

            $querrySelect->execute();

            $result=$querrySelect->fetchAll();

            if(isset($result[0])){
                
                return $result;
            }

           return null;

        }
        public function getPublicacaoId($id)
        {
            
            $con=Conexao::getConexao();
            $sql=("SELECT id_publicacao,titulo,data,conteudo FROM publicacao WHERE id_publicacao='".$id."'");

            $querrySelect=$con->prepare($sql);

            $querrySelect->execute();

            $result=$querrySelect->fetchAll();

            if(isset($result[0])){
                
                return $result;
            }

            return null;
        }

        public function getPublicacaoPesquisar($busca)
        {
            $con=Conexao::getConexao();
            $sql=("SELECT id_publicacao,titulo,data FROM publicacao WHERE titulo LIKE '%".$busca."%'");

            $querrySelect=$con->prepare($sql);

            $querrySelect->execute();

            $result=$querrySelect->fetchAll();

            if(isset($result[0])){
                
                return $result;
            }

           return null;

        }

        public function setPublicacao($data,$titulo,$conteudo)
        {
            $con=Conexao::getConexao();

            $sql=("INSERT INTO publicacao(privado,data,titulo,conteudo) VALUES(0,'".$data."','".$titulo."','".$conteudo."')");

            $querrySelect=$con->prepare($sql);

            $querrySelect->execute();

        }

        public function deletar($id)
        { 
            $con=Conexao::getConexao();

            $sql=("DELETE FROM publicacao WHERE id_publicacao='".$id."'");

            $querrySelect=$con->prepare($sql);

            $querrySelect->execute();

        }

        public function atualizarPublicacao($id,$titulo,$data,$conteudo)
        {
            $con=Conexao::getConexao();

            $sql=("UPDATE publicacao SET titulo='".$titulo."', data='".$data."', conteudo='".$conteudo."' WHERE id_publicacao='".$id."'");

            $querrySelect=$con->prepare($sql);
          
            $querrySelect->execute();
        }
      
        
    
        


       

    }

?>