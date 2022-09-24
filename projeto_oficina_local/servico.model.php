<?php 
    class Servico {
        private $id;
        private $situacao;
        private $nome;
        private $contato;
        private $servico;
        private $valor;
        private $data_cadastro;

        public function __get($atributo) {
            return $this->$atributo;
        }

        public function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }
    }
?>