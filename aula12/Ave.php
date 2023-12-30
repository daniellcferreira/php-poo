<?php 
require_once 'Animal.php';
    class Ave extends Animal {
        private $corPena;

        public function locomever() {
            echo "<p>Voando</p>";
        }

        public function alimentar() {
            echo "<p>Comendo frutas</p>";
        }

        public function emitirSom() {
            echo "<p>Som de ave</p>";
        }

        public function fazerNinho() {
            echo "<p>Contruindo um ninho</p>";
        }

        public function getCorPena() {
            return $this->corPena;
        }

        public function setCorPena($c) {
            $this->corPena = $c;
        }
    }
?>