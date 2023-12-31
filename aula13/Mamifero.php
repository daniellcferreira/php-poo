<?php 
require_once 'Especie.php';
    class Mamifero extends Especie {
        protected $corPelo;

        public function emitirSom() {
            echo "<p>Som de mamifero</p>";
        }

        public function getCorPelo() {
            return $this->corPelo;
        }

        public function setCorPelo($c) {
            $this->corPelo = $c;
        }
    }
?>