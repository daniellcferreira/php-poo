<?php 
    abstract class Especie {
        protected $peso;
        protected $idade;
        protected $membros;

        public abstract function emitirSom();

        public function getPeso() {
            return $this->peso;
        }

        public function setPeso($p) {
            $this->peso = $p;
        }

        public function getIdade() {
            return $this->idade;
        }

        public function setIdade($i) {
            $this->idade = $i;
        }

        public function getMembros() {
            return $this->membros;
        }

        public function setMembros($m) {
            $this->membros = $m;
        }
    }
?>    