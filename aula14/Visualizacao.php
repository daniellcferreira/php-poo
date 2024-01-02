<?php 
require_once 'Video.php';
require_once 'Gafanhoto.php';
    class Visualizacao {
        private $espectador;
        private $filme;

        public function __construct($e, $f) {
            $this->espectador = $e;
            $this->filme = $f;
            $this->filme->setViews($this->filme->getViews() + 1);
            $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
        }

        public function avaliar() {
            $this->filme->setAvaliacao(5);
        }

        public function avaliarNota($n) {
            $this->filme->setAvaliacao($n);
        } 

        public function avaliarPorc($p) {
            $nova = 0;
            if($p <= 20) {
                $nova = 3;
            } elseif ($p <= 50) {
                $nova = 5;
            } elseif($p <= 90) {
                $nova = 8;
            } else {
                $nova = 10;
            } 
            $this->filme->setAvaliacao($nova);
        }

        public function getEspectador() {
            return $this->espectador;
        }

        public function setEspectador($e) {
            $this->espectador = $e;
        }

        public function getFilme() {
            return $this->filme;
        }

        public function setFilme($f) {
            $this->filme = $f;
        }
 
    }
?>