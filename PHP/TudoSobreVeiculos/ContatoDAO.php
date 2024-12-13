<?php
    require_once "FabricaConexao.php";

    class ContatoDAO {
        private $con;

        public function __construct() {
            $this->con = FabricaConexao::getConexao();
        }

        public function salvar($nome, $mail, $idade, $sexo, $msg, $data) {
            $sql = "insert into contato (nome, email, idade, sexo, mensagem, data) values (?, ?, ?, ?, ?, ?)";
            $stmt = null;

            try {
                $stmt = $this->con->prepare($sql);

                $stmt->bindValue(1, $nome);
                $stmt->bindValue(2, $mail);
                $stmt->bindValue(3, $idade);
                $stmt->bindValue(4, $sexo);
                $stmt->bindValue(5, $msg);
                $stmt->bindValue(6, $data);

                $stmt->execute();

                return true;
            }
            catch(PDOException $ex) {
                echo "ERRO: {$ex->getMessage()}";
            }
            finally {
                FabricaConexao::closeConexao($this->con, $stmt);
            }
        }

        public function buscar() {
            $sql = "select * from contato order by data desc";
            $stmt = null;
            $rs = null;

            try {
                $stmt = $this->con->prepare($sql);

                $stmt->execute();

                $rs = $stmt->fetchAll();

                $total = $rs[0] ?? 0;

                if($total > 0) {
                    $this->listar($rs);
                }
                else {
                    echo "<h3>Nenhuma Mensagem no Banco de Dados!</h3>";
                }
            }
            catch(PDOException $ex) {
                echo "ERRO: {$ex->getMessage()}";
            }
            finally {
                FabricaConexao::closeConexao($this->con, $stmt, $rs);
            }
        }

        private function listar($rows) {
            foreach($rows as $r) {
                echo "<fieldset>\n\t";
                echo "<legend>" . date("d/m/Y", strtotime($r['data'])) . "</legend>\n\t";
                echo "<h4>Nome: {$r['nome']}</h4>\n\t";
                echo "<h5>E-mail: {$r['email']} - Idade: {$r['idade']} - Sexo: {$r['sexo']}</h5>\n\t";
                echo "<pre>\n{$r['mensagem']}\n\t</pre>\n\t";
                echo "<input type=\"button\" value=\"Excluir\" onclick=\"location = 'excluir.php?id={$r['id']}'\"/>\n";
                echo "</fieldset>\n";
            }
        }

        public function excluir($id) {
            $sql = "delete from contato where id = ?";
            $stmt = null;

            try {
                $stmt = $this->con->prepare($sql);

                $stmt->bindValue(1, $id);

                $stmt->execute();

                return true;
            }
            catch(PDOException $ex) {
                echo "ERRO: {$ex->getMessage()}";
            }
            finally {
                FabricaConexao::closeConexao($this->con, $stmt);
            }
        }
    }