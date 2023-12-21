<?php 
    class ControleRemoto {
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
            echo $this->getLigado();
            echo $this->getVolume();

            echo $this->getTocando();
        }

        public function fecharMenu() {
            echo "Fechando Menu...";
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
            echo "ligado";
        }

        public function desligarMudo() {
            echo "desligado";
        }

        public function play() {
            echo "play";
        }

        public function pause() {
            echo "pause";
        }
        
        
        private function __construct() {
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