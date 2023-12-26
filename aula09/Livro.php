<?php 
require_once 'Pessoa.php';
require_once 'Publicacao.php';
    class Livro implements Publicacao {
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        public function detalhes() {
            echo "<hr>Livro " . $this->titulo . " escrito por " . $this->autor;
            echo "<br> Paginas: " . $this->totPaginas . " atual " . $this->pagAtual;
            echo "<br> Sendo lido por " . $this->leitor->getNome();
        }

        function __construct($t, $a, $to, $l) {
            $this->titulo = $t;
            $this->autor = $a;
            $this->totPaginas = $to;
            $this->pagAtual = 0;
            $this->aberto = false;
            $this->leitor = $l;    
        }

        function getTitulo() {
            return $this->titulo;
        }
         function setTitulo($t) {
            $this->titulo = $t;
        }

        function getAutor() {
            return $this->autor;
        }
         function setAutor($a) {
            $this->autor = $a;
        }

        function getTotPaginas() {
            return $this->totPaginas;
        }
         function setTotPaginas($to) {
            $this->totPaginas = $to;
        }

        function getPagAtual() {
            return $this->pagAtual;
        }
         function setPagAtual($p) {
            $this->pagAtual = $p;
        }

        function getAberto() {
            return $this->aberto;
        }
         function setAberto($ab) {
            $this->aberto = $ab;
        }

        function getLeitor() {
            return $this->leitor;
        }
         function setLeitor($l) {
            $this->leitor = $l;
        }


        public function abrir() {
            $this->aberto = true;
        }

        public function fechar() {
            $this->aberto = false;
        }

        public function folhear($p) {
            if($p > $this->totPaginas) {
                $this->pagAtual = 0;
            } else {
                $this->pagAtual = $p;
            }
        }

        public function avancarPag() {
            $this->pagAtual ++;
        }

        public function voltarPag() {
            $this->pagAtual --;
        }
    }

?>