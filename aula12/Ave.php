<?php 
require_once 'Animal.php';
    class Ave extends Animal {
        private $corPena;

        public function locomever() {
            echo "Voando";
        }

        public function alimentar() {
            echo "Comendo frutas";
        }

        public function emitirSom() {
            echo "Som de ave";
        }

        public function fazerNinho() {
            echo "Contrir um ninho";
        }

        public function getCorPena() {
            return $this->corPena;
        }

        public function setCorPena($c) {
            $this->corPena = $c;
        }
    }
?>