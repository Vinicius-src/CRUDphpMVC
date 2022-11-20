<?php

    abstract class Conexao
    {
        private static $conexao;

        public static function getConexao()
        {   
            $host=$_ENV['HOST'];
            $db_name=$_ENV['DB_name'];
            $user=$_ENV['USER'];
            $pass=$_ENV['PASS'];

            if(self::$conexao==null){
                
                self::$conexao=new PDO('mysql:host='.$host.';dbname='.$db_name.';'.$user.','.$pass);
            }
            return self::$conexao;
        }
    }

?>