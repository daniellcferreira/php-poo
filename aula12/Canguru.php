<?php 
require_once 'Mamifero.php';
    class Canguru extends Mamifero {
        public function usarBolsa() {
            echo "Usando Bolsa";
        }

        public function locomever() {
            echo "Saltando";    
        }
    }

?>