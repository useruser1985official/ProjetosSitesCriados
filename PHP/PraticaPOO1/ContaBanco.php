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

            if($t == "CC") {
                $this->setSaldo(50);
            }
            else if($t == "CP") {
                $this->setSaldo(150);
            }

            echo "<p>Conta aberta com sucesso!</p>";
        }

        public function fecharConta() {
            if($this->getSaldo() > 0) {
                echo "<p>A conta ainda tem dinheiro, não podemos fechá-la!</p>";
            }
            else if($this->getSaldo() < 0) {
                echo "<p>A conta está em débito, não podemos fechá-la!</p>";
            }
            else {
                $this->setStatus(false);

                echo "<p>A conta de {$this->getDono()} foi encerrada com sucesso!</p>";
            }
        }

        public function depositar($v) {
            if($this->getStatus() == true) {
                $this->setSaldo($this->getSaldo() + $v);

                echo "<p>Depósito de R\${$v} autorizado na conta de {$this->getDono()}.</p>";
            }
            else {
                echo "<p>Conta fechada ou inexistente!</p>";
            }
        }

        public function sacar($v) {
            if($this->getStatus() == true) {
                if($this->getSaldo() >= $v) {
                    $this->setSaldo($this->getSaldo() - $v);

                    echo "<p>Saque de R\${$v} autorizado na conta de {$this->getDono()}.</p>";
                }
                else {
                    echo "<p>Saldo insuficiente para saque!</p>";
                }
            }
            else {
                echo "<p>Essa conta tá fechada ou não existe!</p>";
            }
        }

        public function pagarMensal() {
            if($this->getTipo() == "CC") {
                $v = 12;
            }
            else if($this->getTipo() == "CP") {
                $v = 20;
            }

            if($this->getStatus() == true) {
                $this->setSaldo($this->getSaldo() - $v);

                echo "<p>Mensalidade de R\${$v} debitada da conta de {$this->getDono()}.</p>";
            }
            else {
                echo "<p>Problemas na conta, não podemos cobrar.</p>";
            }
        }

        public function __construct() {
            $this->setSaldo(0);
            $this->setStatus(false);
        }

        public function __destruct() {
            echo "Objeto ContaBanco Destruído!<br/>";
        }

        public function getNumConta() {
            return $this->numConta;
        }

        public function getTipo() {
            return $this->tipo;
        }

        public function getDono() {
            return $this->dono;
        }

        public function getSaldo() {
            return $this->saldo;
        }

        public function getStatus() {
            return $this->status;
        }

        public function setNumConta($numConta) {
            $this->numConta = $numConta;
        }

        public function setTipo($tipo) {
            $this->tipo = $tipo;
        }

        public function setDono($dono) {
            $this->dono = $dono;
        }

        public function setSaldo($saldo) {
            $this->saldo = $saldo;
        }

        public function setStatus($status) {
            $this->status = $status;
        }
    }