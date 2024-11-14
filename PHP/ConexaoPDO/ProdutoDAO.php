<?php
    require_once "ConnectionFactory.php";
    require_once "Produto.php";

    class ProdutoDAO {
        private $con = null;

        public function __construct() {
            $this->con = ConnectionFactory::getConnection();
        }

        public function save($prod) {
            $sql = "insert into produto (descricao, qtd, valor) values (?, ?, ?)";

            $stmt = null;
            
            try {
                $stmt = $this->con->prepare($sql);

                $stmt->bindValue(1, $prod->getDescricao());
                $stmt->bindValue(2, $prod->getQtd());
                $stmt->bindValue(3, $prod->getValor());

                $stmt->execute();

                return true;
            }
            catch(PDOException $ex) {
                echo "ERRO: {$ex->getMessage()}";
            }
            finally {
                ConnectionFactory::closeConnection($this->con, $stmt);
            }
        }

        public function findAll() {
            $sql = "select * from produto";

            $stmt = null;
            $rs = null;

            $produtos = array();

            try {
                $stmt = $this->con->prepare($sql);

                $stmt->execute();

                $rs = $stmt->fetchAll();

                $total = $rs[0] ?? 0;

                foreach($rs as $r) {
                    $prod = new Produto();

                    $prod->setId($r["id"]);
                    $prod->setDescricao($r["descricao"]);
                    $prod->setQtd($r["qtd"]);
                    $prod->setValor($r["valor"]);

                    array_push($produtos, $prod);
                }
            }
            catch(PDOException $ex) {
                echo "ERRO: {$ex->getMessage()}";
            }
            finally {
                ConnectionFactory::closeConnection($this->con, $stmt, $rs);
            }

            return $produtos;
        }

        public function update($prod) {
            $sql = "update produto set descricao = ?, qtd = ?, valor = ? where id = ?";

            $stmt = null;

            try {
                $stmt = $this->con->prepare($sql);

                $stmt->bindValue(1, $prod->getDescricao());
                $stmt->bindValue(2, $prod->getQtd());
                $stmt->bindValue(3, $prod->getValor());
                $stmt->bindValue(4, $prod->getId());

                $stmt->execute();

                return true;
            }
            catch(PDOException $ex) {
                echo "ERRO: {$ex->getMessage()}";
            }
            finally {
                ConnectionFactory::closeConnection($this->con, $stmt);
            }
        }

        public function delete($prod) {
            $sql = "delete from produto where id = ?";

            $stmt = null;

            try {
                $stmt = $this->con->prepare($sql);

                $stmt->bindValue(1, $prod->getId());

                $stmt->execute();

                return true;
            }
            catch(PDOException $ex) {
                echo "ERRO: {$ex->getMessage()}";
            }
            finally {
                ConnectionFactory::closeConnection($this->con, $stmt);
            }
        }
    }