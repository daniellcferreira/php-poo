<?php 
    class Pessoa {
        private $nome;
        private $idade;
        private $sexo;

        public function fazerAniver() {
            $this->idade ++;   
        }

        function __construct($n, $i, $s) {
            $this->nome = $n;
            $this->idade = $i;
            $this->sexo = $s;   
        }

        function getNome() {
            return $this-> nome;
        }
        function setNome($n) {
            $this->nome = $n;
        }

        function getIdade() {
            return $this-> idade;
        }
        function setIdade($i) {
            $this->idade = $i;
        }

        function getSexo() {
            return $this-> sexo;
        }
        function setSexo($s) {
            $this->sexo = $s;
        }
    }
?>