<?php
require_once 'Pessoa.php';
    class Professor extends Pessoa {
        private $especialidade;
        private $salario;

        public function receberAum($aum) {
            $this->salario +- $aum;
        }

        public function getEspecialidade() {
            return $this->especialidade;
        }

        public function seteEspecialidade($e) {
            $this->especialidade = $e;
        }

        public function getSalario() {
            return $this->salario;
        }

        public function setNome($s) {
            $this->salario = $s;
        }
    }
?>