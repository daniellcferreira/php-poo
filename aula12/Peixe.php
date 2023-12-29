<?php 
require_once 'Animal.php';
    class Peixe extends Animal {
        private $corEscama;

        public function locomever() {
            echo "Nadando";
        }

        public function alimentar() {
            echo "Comendo substancias";
        }

        public function emitirSom() {
            echo "Peixe não faz som";
        }

        public function soltarBolha() {
            echo "Soltou uma bolha";
        }
    }
?>