<?php 
    class Lutar {
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        public function marcarLuta() {

        }    

        public function lutar() {
            
        }


        private function getDesafiado() {
            return $this->desafiado;
        }
        private function setDesafiado($d) {
            $this->desafiado = $d;
        }

        private function getDesafiante() {
            return $this->desafiante;
        }
        private function setDesafiante($de) {
            $this->desafiante = $de;
        }

        private function getRounds() {
            return $this->rounds;
        }
        private function setRounds($r) {
            $this->rounds = $r;
        }

        private function getAprovada() {
            return $this->aprovada;
        }
        private function setNome($a) {
            $this->aprovada = $a;
        }
    }



?>