<?php 
    class Aluno extends Pessoa {
        private $matr;
        private $curso;

        public function cancelarMatr() {

        }

        public function getMatr() {
            return $this->matr;
        }

        public function setMatr($m) {
            $this->matr = $m;
        }

        public function getCurso() {
            return $this->curso;
        }

        public function setCurso($c) {
            $this->curso = $c;
        }
    }
?>