<?php 
require_once 'Pessoa.php';
    class Gafanhoto extends Pessoa {
        private $login;
        private $totAssistido;

        public function viuMaisUm() {
            $this->totAssistido ++;
        }

        public function __construct($n, $i, $s, $l) {
            parent::__construct($n, $i, $s);
            $this->login = $l;
            $this->totAssistido = 0;    
        }

        public function getLogin() {
            return $this->login;
        }

        public function setLogin($l) {
            $this->login = $l;
        }

        public function getTotAssistido() {
            return $this->totAssistido;
        }

        public function setTotAssistido($t) {
            $this->totAssistido = $t;
        }
        

    }
?>