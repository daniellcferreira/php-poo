<?php 
    class Funcionario extends Pessoa {
        private $setor;
        private $trabalhando;

        public function mudarTrabalho() {

        }

        public function getSetor() {
            return $this->setor;
        }

        public function setSetor($s) {
            $this->setor = $s;
        }

        public function getTrabalhando() {
            return $this->trabalhando;
        }

        public function setTrabalhando($t) {
            $this->trabalhando = $t;
        }
    }
?>