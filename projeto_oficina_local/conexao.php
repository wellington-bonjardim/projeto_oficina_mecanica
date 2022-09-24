<?php 
    class Conexao {
        private $host = 'localhost';
        private $dbname = 'projeto_oficina';
        private $user = 'root';
        private $pass = '';

        public function conectar() {
            try {

                $conexao = new PDO(
                    "mysql:host=$this->host; dbname=$this->dbname", //DNS
                    "$this->user", //usuario
                    "$this->pass" //senha
                );

                return $conexao;

            } catch(PDOException $e) {
                echo '<p>'.$e->getMessage().'</p>';
            }
        }
    }
?>