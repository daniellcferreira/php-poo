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

         function getNome() {
            return $this->nome;
        }
         function setNome($n) {
            $this->nome = $n;
        }

         function getNacionalidade() {
            return $this-> nacionalidade;
        }
         function setNacionalidade($s) {
            $this->nacionalidade = $s;
        }

         function getIdade() {
            return $this->idade;
        }
         function setIdade($i) {
            $this->idade = $i;
        }

         function getAltura() {
            return $this->altura;
        }
         function setAltura($a) {
            $this->altura = $a;
        }

         function getPeso() {
            return $this->peso;
        }
         function setPeso($p) {
            $this->peso = $p;
            $this->setCategoria();
        }

        function getCategoria() {
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

         function getVitorias() {
            return $this->vitorias;
        }
         function setVitorias($v) {
            $this->vitorias = $v;
        }

         function getDerrotas() {
            return $this->derrotas;
        }
         function setDerrotas($d) {
            $this->derrotas = $d;
        }

         function getEmpates() {
            return $this->empates;
        }
         function setEmpates($e) {
            $this->empates = $e;
        }
    }
    
?>