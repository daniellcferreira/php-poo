<?php 
    require_once 'Controlador.php';
    class ControleRemoto implements Controlador {
        private $volume;
        private $ligado;
        private $tocando;
    
        public function ligar() {
            $this->setLigado(true);
        }

        public function desligar() {
            $this->setLigado(false);
        }

        public function abrirMenu() {
            echo "<br>Está Ligado?: " . ($this->getLigado()?"SIM":"NÂO");
            echo "<br>Está Tocando?: " . ($this->getTocando()?"SIM":"NÂO");
            echo "<br>Volume: " . $this->getVolume();
            for($i=0; $i <= $this->getVolume(); $i+=10) {
                echo "|";
            }
            echo "<br>";
        }

        public function fecharMenu() {
            echo "<br>Fechando Menu...";
        }

        public function maisVolume() {
            if ($this->getLigado()) {
                $this->setVolume($this->getVolume() + 1);
            }
        }

        public function menosVolume() {
            if ($this->getLigado()) {
                $this->setVolume($this->getVolume() - 1);
            }
        }

        public function ligarMudo() {
            if ($this->getLigado() && $this->getVolume() > 0) {
                $this->setVolume(0);
            }
        }

        public function desligarMudo() {
            if ($this->getLigado() && $this->getVolume() == 0) {
                $this->setVolume(50);
            }
        }

        public function play() {
            if ($this->getLigado() && ! ($this->getTocando())) {
                $this->setTocano(true);
            } 
        }

        public function pause() {
            if ($this->getLigado() && $this->getTocando()) {
                $this->setTocano(false);
            }
        }
        
        
        public function __construct() {
            $this->setVolume(50);
            $this->setLigado(false);
            $this->setTocano(false);
        }

        private function getVolume() {
            return $this->volume;
        }
        private function setVolume($v) {
            $this->volume = $v;
        }

        private function getLigado() {
            return $this->ligado;
        }
        private function setLigado($l) {
            $this->ligado = $l;
        }

        private function getTocando() {
            return $this->tocando;
        }
        private function setTocano($t) {
            $this->tocando = $t;
        }

    }
?>