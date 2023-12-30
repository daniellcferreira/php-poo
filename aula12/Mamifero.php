<?php 
require_once 'Animal.php';
    class Mamifero extends Animal {
        private $corPelo;

        public function locomever() {
            echo "<p>Correndo</p>";
        }

        public function alimentar() {
            echo "<p>Mamando</p>";
        }

        public  function emitirSom() {
            echo "<p>som de Mamifero</p>";
        }

        public function getCorPelo() {
            return $this->corPelo;
        }

        public function setCorPelo($c) {
            $this->corPelo = $c;
        }
    }
?>