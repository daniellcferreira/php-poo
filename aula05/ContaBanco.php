<?php 
    class ContaBanco {
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        public function abrirConta($t) {
            $this->setTipo($t);
            $this->setStatus(true);
            if ($t == "CC") {
                $this->setSaldo(50);
            } elseif ($t == "CP") {
                $this->setSaldo(150);
            }
        }

        public function fecharConta() {
            if ($this->getSaldo() > 0) {
                echo "<p>Conta com Dinheiro, não pode ser fechada!</p>";
            } elseif ($this->getSaldo() < 0) {
                echo "<p>Conta em Debito, Impossivel encerrar!</p>";
            } else {
                $this->setStatus(false);
                echo "<p>Conta de " . $this->getDono() . " fechada com sucesso!</p>";
            }
        }

        public function depositar($s) {
            if ($this->getStatus() == true) {
                $this->setSaldo($this->getSaldo() + $s);
                echo "<p>Deposito de R$$s na conta de " . $this->getDono() . "</p>";
            } else {
                echo "<p>Conta fechada. Impossivel Depositar</p>";
            }
        }

        public function sacar($s) {
            if ($this->getStatus() == true) {
                if ($this->getSaldo() >= $s) {
                    $this->setSaldo($this->getSaldo() - $s);
                    echo "<p>Saque de R$$s autorizado na conta de {$this->getDono()}</p>";
                } else {
                    echo "<p>Saldo Insuficiente para saque</p>";
                }
            } else {
                echo "<p>Impossivel Sacar</p>";
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
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Mensalidade de R$$v debitada na conta de " . $this->getDono() . "</p>";
            } else {
                    echo "<p>Problemas com a conta. Não pode cobrar</p>";
                }
            }


        public function __construct() {
            $this->setSaldo(0);
            $this->setStatus(false);
            echo "<p>Conta criada com sucesso!</p>";
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