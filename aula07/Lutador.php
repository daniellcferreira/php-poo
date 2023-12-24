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
            echo "<p>---------------------</p>";
            echo "<p>Lutador: " . $this->getNome();
            echo "<br>Origem: " . $this->getNacionalidade();
            echo "<br>" . $this->getIdade() . " anos";
            echo "<br>" . $this->getAltura() . " m de altura";
            echo "<br>Pesando " . $this->getPeso() . "Kg";
            echo "<br>Ganhou " . $this->getVitorias();
            echo " Perdeu " . $this->getDerrotas();
            echo " Empatou " . $this->getEmpates() . " </p>";    
        }
        
        public function status() {
            echo "<p>--------------------</p>";
            echo "<p>" . $this->getNome();
            echo " é um peso " . $this->getCategoria() . ".";
            echo " Com " . $this->getVitorias() . " vitorias,";
            echo " " . $this->getEmpates() . " empates,";
            echo " " . $this->getDerrotas() . " derrotas</p>";
        }

        public function ganharLuta() {
            $this->setVitorias($this->getVitorias() + 1);    
        }

        public function perderLuta() {
            $this->setDerrotas($this->getDerrotas() + 1);    
        }

        public function empatarLuta() {
            $this->setEmpates($this->getEmpates() + 1);    
        }


        public function __construct($n, $s, $i, $a, $p, $v, $e, $d) {
            $this->nome = $n;
            $this->nacionalidade = $s;
            $this->idade = $i;
            $this->altura = $a;
            $this->setPeso($p);
            $this->vitorias = $v;
            $this->empates = $e;
            $this->derrotas = $d;
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
            if ($this->peso < 52.2) {
                $this->categoria = "Invalido";
            } elseif ($this->peso <= 70.3) {
                $this->categoria = "Leve";
            } elseif ($this->peso <= 83.9) {
                $this->categoria ="Medio";
            } elseif ($this->peso <= 120.2) {
                $this->categoria = "Pesado";
            } else {
                $this->categoria= "Invalido";
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