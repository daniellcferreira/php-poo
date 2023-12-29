<?php 
require_once 'Mamifero.php';
    class Cachorro extends Mamifero {
        public function enterrarOsso() {
            echo "Enterrando o osso";
        }

        public function abanarRabo() {
            echo "Abanando o rabo";
        }
    }
?>