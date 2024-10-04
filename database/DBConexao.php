<?php

class DBConexao {
    
        // Configuraç~poes do banco de dados
        private $host = "localhost";
        private $dbname = "biblioteca";
        private $username = "root";
        private $password = "senac2023";

        private $conx;
        private static $instance = null;

    
        public function __construct(){
            try {
                //inicializar a conexão
                $this->conx = new PDO ("mysql:host=$this->host;dbname=$this->dbname;charset=utf8", $this->username,$this->password);
            }
            catch (PDOException $e){
                //Capturar o erro da conexão 
                echo "Erro na conexão com o banco de dados: " .$e->getMessage();
            }
        }
        /** Método estático para obter a instancia unica da conexão (implementação do singleto) */

        public static function getConexao(){
            if(!self::$instance){
                self::$instance = new DBConexao()
            }
        }
    }