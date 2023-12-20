<?php 
    class ContaBanco {
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;


        public function __construct() {
            $this->saldo = 0;
            $this->status = false;
        }


        public function abrirConta($t) {
            $this->setTipo($t);
            $this->setStatus(true);
            if ($this->$t == "CC") {
                $this->setSaldo(50);
            } elseif ($this->$t == "CP") {
                $this->setSaldo(150);
            }
        }

        public function fecharConta() {
            if ($this->getSaldo() > 0) {
                echo "Conta com Dinheiro";
            } elseif ($this->getSaldo() <0) {
                echo "Conta em Debito";
            } else {
                $this->setStatus(false);
            }
        }

        public function depositar($s) {
            if ($this->getStatus() == true) {
                $this->setSaldo($this->getSaldo() + $s);
            } else {
                echo "Impossivel Depositar";
            }
        }

        public function sacar($s) {
            if ($this->getStatus() == true) {
                if ($this->getSaldo() > $s) {
                    $this->setSaldo($this->getSaldo() - $s);
                } else {
                    echo "Saldo Insuficiente";
                }
            } else {
                echo "Impossivel Sacar";
            }
        }

        public function pagarMensal() {
            $v = 0;
            if ($this->getTipo() == "CC") {
                $v = 12;
            } elseif ($this->getTipo() == "CP") {
                $v = 20;
            }
            if ($this->getStatus() == true) {
                if ($this->getSaldo() > $v) {
                    $this->setSaldo($this->getSaldo() - $v);
                } else {
                    echo "Saldo insuficiente";
                }
            } else {
                echo "Impossivel pagar";
            }
        }


        public function getnumConta() {
            return $this->numConta;
        }
        public function setnumConta($n) {
            $this->numConta = $n;
        }

        public function getTipo() {
            return $this->tipo;
        }
        public function setTipo($t) {
            $this->tipo = $t;
        }

        public function getDono() {
            return $this->dono;
        }
        public function setDono($d) {
            $this->dono = $d;
        }

        public function getSaldo() {
            return $this->saldo;
        }
        public function setSaldo($s) {
            $this->saldo = $s;
        }

        public function getStatus() {
            return $this->status;
        }
        public function setStatus($e) {
            $this->status = $e;
        }
        

    }

?>