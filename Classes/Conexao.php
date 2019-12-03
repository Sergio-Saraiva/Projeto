<?php 
    class Conexao{
        public static function getConexao(){
            $conexao = new PDO("mysql:host=127.0.0.1:3306;dbname=forum", 'root', '123456789');

            return $conexao;
            
        }
    }
?>