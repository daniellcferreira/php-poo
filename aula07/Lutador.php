<?php 
    class Lutador {
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;


        public function apresentar() {
            echo "Lutador: " . $this->getNome();
            echo "Origem: " . $this->getNacionalidade();
            echo $this->getIdade() . " anos";
            echo $this->getAltura() . " m  de altura";
            echo "Pesando " . $this->getPeso() . "Kg";
            echo "Ganhou " . $this->getVitorias();
            echo "Perdeu " . $this->getDerrotas();
            echo "Empatou " . $this->getEmpates();    
        }
        
        public function status() {
            echo $this->getNome();
            echo "é um peso de " . $this->getCategoria();
            echo $this->getVitorias() . "vitorias";
            echo $this->getEmpates() . "empates";
            echo $this->getDerrotas() . "derrotas";
        }

        public function ganharLuta() {
            $this->setVitorias($this->getVitorias() + 1);    
        }

        public function perderLuta() {
            $this->setVitorias($this->getVitorias() - 1);    
        }

        public function empatarLuta() {
            $this->setVitorias($this->getVitorias() + 1);    
        }


        public function __construct($n, $s, $i, $a, $p, $v, $e, $d) {
            $this->setNome($n);
            $this->setNacionalidade($s);
            $this->setIdade($i);
            $this->setAltura($a);
            $this->setPeso($p);
            $this->setVitorias($v);
            $this->setEmpates($e);
            $this->setDerrotas($d);
        }

        private function getNome() {
            return $this->nome;
        }
        private function setNome($n) {
            $this->nome = $n;
        }

        private function getNacionalidade() {
            return $this-> nacionalidade;
        }
        private function setNacionalidade($s) {
            $this->nacionalidade = $s;
        }

        private function getIdade() {
            return $this->idade;
        }
        private function setIdade($i) {
            $this->idade = $i;
        }

        private function getAltura() {
            return $this->altura;
        }
        private function setAltura($a) {
            $this->altura = $a;
        }

        private function getPeso() {
            return $this->peso;
        }
        private function setPeso($p) {
            $this->peso = $p;
            $this->setCategoria();
        }

        private function getCategoria() {
            return $this->categoria;
        }
        private function setCategoria() {
            if ($this->getPeso() < 52.2) {
                $this->setCategoria("Invalido");
            } elseif ($this->getPeso() <= 70.3) {
                $this->setCategoria("Leve");
            } elseif ($this->getPeso() <= 83.9) {
                $this->setCategoria("Medio");
            } elseif ($this->getPeso() <= 120.2) {
                $this->setCategoria("Pesado");
            } else {
                $this->setCategoria("Invalido");
            }
        }

        private function getVitorias() {
            return $this->vitorias;
        }
        private function setVitorias($v) {
            $this->vitorias = $v;
        }

        private function getDerrotas() {
            return $this->derrotas;
        }
        private function setDerrotas($d) {
            $this->derrotas = $d;
        }

        private function getEmpates() {
            return $this->empates;
        }
        private function setEmpates($e) {
            $this->empates = $e;
        }
    }
?>