<?php 
require_once 'Animal.php';
    class Reptil extends Animal {
        private $corEscama;

        public function locomever() {
            echo "Rastejando";
        }

        public function alimentar() {
            echo "Comendo Vegetais";
        }

        public function emitirSom() {
            echo "Som de reptil";
        }

        public function getCorEscama() {
            return $this->corEscama;
        }

        public function setCorEscama($c) {
            $this->corEscama = $c;
        }
    }
?>