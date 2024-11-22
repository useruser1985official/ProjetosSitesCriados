<?php
require_once "FabricaConexao.php";

class ContatoDAO {
    private $con;
    
    public function __construct() {
        $this->con = FabricaConexao::getConexao();
    }
    
    public function salvar($nome, $mail, $opcao, $idade, $mens, $arq, $data) {
        $sql = "insert into contato (nome, email, opcao, idade, mensagem, arquivo, data) values (?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = null;

        try {
            $stmt = $this->con->prepare($sql);
            
            $stmt->bindValue(1, $nome);
            $stmt->bindValue(2, $mail);
            $stmt->bindValue(3, $opcao);
            $stmt->bindValue(4, $idade);
            $stmt->bindValue(5, $mens);
            $stmt->bindValue(6, $arq);
            $stmt->bindValue(7, $data);
            $stmt->execute();
            
            return true;
        }
        catch(PDOException $ex) {
            echo "ERRO: {$ex->getMessage()}";
        }
        finally {
            FabricaConexao::closeConnection($this->con, $stmt);
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
                echo "<h3>Nenhuma Mensagem Disponível no Banco de Dados!</h3>";
            }
        }
        catch(PDOException $ex) {
            echo "ERRO: {$ex->getMessage()}";
        }
        finally {
            FabricaConexao::closeConnection($this->con, $stmt, $rs);
        }
    }
    
    private function listar($rows) {
        foreach($rows as $r) {
            echo "\n<fieldset>";
            echo "\n\t<legend>" . date("d/m/Y", strtotime($r["data"])) . "</legend>";
            echo "\n\t<h3>{$r['nome']}</h3>";
            echo "\n\t<h4>{$r['idade']} anos. Opção: {$r['opcao']}</h4>";
            echo "\n\t<h5>{$r['email']}</h5>";
            echo "\n\t<pre>\n{$r['mensagem']}\n\t</pre>";
            echo "\n\t<input type=\"button\" value=\"Excluir\" onclick=\"location = 'excluir.php?id={$r['id']}'\"/>";
            echo "\n</fieldset>\n";
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
            FabricaConexao::closeConnection($this->con, $stmt);
        }
    }
}