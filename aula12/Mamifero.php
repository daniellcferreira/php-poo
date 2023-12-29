<?php 
require_once 'Animal.php';
    class Mamifero extends Animal {
        private $corPelo;

        public function locomever() {
            echo "Correndo";
        }

        public function alimentar() {
            echo "Mamando";
        }

        public  function emitirSom() {
            echo "som de Mamifero";
        }

        public function getCorPelo() {
            return $this->corPelo;
        }

        public function setCorPelo($c) {
            $this->corPelo = $c;
        }
    }
?>