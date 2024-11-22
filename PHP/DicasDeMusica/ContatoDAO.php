<?php
require_once "FabricaConexao.php";

class ContatoDAO {
    private $con;
    
    public function __construct() {
        $this->con = FabricaConexao::getConexao();
    }
    
    public function salvar($nome, $mail, $mens, $data) {
        $sql = "insert into contato (nome, email, mensagem, data) values (?, ?, ?, ?)";
        
        $stmt = null;

        try {
            $stmt = $this->con->prepare($sql);
            
            $stmt->bindValue(1, $nome);
            $stmt->bindValue(2, $mail);
            $stmt->bindValue(3, $mens);
            $stmt->bindValue(4, $data);
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
            echo "<fieldset>";
            echo "<legend>" . date("d/m/Y", strtotime($r["data"])) . "</legend>";
            echo "<h3>" . $r["nome"] . "</h3>";
            echo "<h5>" . $r["email"] . "</h5>";
            echo "<pre>" . $r["mensagem"] . "</pre>";
            echo "<input type=\"button\" value=\"Excluir\" onclick=\"location = 'excluir.php?id={$r["id"]}'\"/>";
            echo "</fieldset>";
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