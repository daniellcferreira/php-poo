<?php 
require_once 'Animal.php';
    class Reptil extends Animal {
        private $corEscama;

        public function locomever() {
            echo "<p>Rastejando</p>";
        }

        public function alimentar() {
            echo "<p>Comendo Vegetais</p>";
        }

        public function emitirSom() {
            echo "<p>Som de reptil</p>";
        }

        public function getCorEscama() {
            return $this->corEscama;
        }

        public function setCorEscama($c) {
            $this->corEscama = $c;
        }
    }
?>