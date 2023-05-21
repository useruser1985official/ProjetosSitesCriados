<?php
require_once "FabricaConexao.php";

class ContatoDAO {
    private $con;
    
    public function __construct() {
        $this->con = FabricaConexao::getConexao();
    }
    
    public function salvar($nome, $idade, $mail, $sexo, $mensagem, $data) {
        $sql = "insert into contato (nome, idade, email, sexo, mensagem, data) values (?, ?, ?, ?, ?, ?)";
        
        try {
            $stmt = $this->con->prepare($sql);
            
            $stmt->bindValue(1, $nome);
            $stmt->bindValue(2, $idade);
            $stmt->bindValue(3, $mail);
            $stmt->bindValue(4, $sexo);
            $stmt->bindValue(5, $mensagem);
            $stmt->bindValue(6, $data);
            $stmt->execute();
            
            return true;           
        }
        catch(PDOException $ex) {
            echo "ERRO: {$ex->getMessage()}";
        }
        finally {
            FabricaConexao::closeConnection($this->con);
        }
    }
    
    public function buscar() {
        $sql = "select * from contato order by data desc";
        
        try {
            $stmt = $this->con->prepare($sql);
            
            $stmt->execute();
            
            $rs = $stmt->fetchAll();
            
            $total = $rs[0] ?? 0;
            
            if($total > 0) {
                $this->listar($rs);
            }
            else {
                echo "<h3>Nenhuma Mensagem Disponível no Banco de Dados!</h3>\n";
            }
        }
        catch(PDOException $ex) {
            echo "ERRO: {$ex->getMessage()}";
        }
        finally {
            FabricaConexao::closeConnection($this->con);
        }
    }
    
    private function listar($rows) {
        foreach($rows as $r) {
            echo "<fieldset>";
            echo "\n<legend>" . date("d/m/Y", strtotime($r["data"])) . "</legend>";
            echo "\n\t<h3>{$r["nome"]}</h3>";
            echo "\n\t<h4>{$r["idade"]} anos. Sexo: {$r["sexo"]}</h4>";
            echo "\n\t<h5>{$r["email"]}</h5>";
            echo "\n\t<pre>\n{$r["mensagem"]}\n\t</pre>";
            echo "\n\t<input type=\"button\" value=\"Excluir\" onclick=\"location = 'excluir.php?id={$r["id"]}'\"/>";
            echo "\n</fieldset>\n\n";
        }
    }
    
    public function excluir($id) {
        $sql = "delete from contato where id = ?";
        
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
            FabricaConexao::closeConnection($this->con);
        }
    }
}