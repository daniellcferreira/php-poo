<?php 
    class Pessoa {
        private $nome;
        private $idade;
        private $sexo;

        public function fazerAniv() {

        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($n) {
            $this->nome = $n;
        }

        public function getIdade() {
            return $this->idade;
        }

        public function setIdade($i) {
            $this->idade = $i;
        }

        public function getSexo() {
            return $this->sexo;
        }

        public function set($s) {
            $this->sexo = $s;
        }
    }
?>