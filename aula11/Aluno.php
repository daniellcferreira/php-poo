<?php 
require_once 'Pessoa.php';
    class Aluno extends Pessoa {
        private $matricula;
        private $curso;

        public function pagarMesalidade() {
            echo "<p>Pagando mensalidade do aluno " . $this->getNome() . " </p>";
        }

        public function getMatricula() {
            return $this->matricula;
        }

        public function setMatricula($m) {
            $this->matricula = $m;
        }

        public function getCurso() {
            return $this->curso;
        }

        public function setCurso($c) {
            $this->curso = $c;
        }
    }

?>