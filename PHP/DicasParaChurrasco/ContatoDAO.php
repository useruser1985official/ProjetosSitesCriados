<?php
require_once "FabricaConexao.php";

class ContatoDAO {
    private $con;
    
    public function __construct() {
        $this->con = FabricaConexao::getConexao();
    }
    
    public function salvar($nome, $mail, $sexo, $mens, $data) {
        $sql = "insert into contato (nome, mail, sexo, mensagem, data) values (?, ?, ?, ?, ?)";
        
        try {
            $stmt = $this->con->prepare($sql);
            
            $stmt->bindValue(1, $nome);
            $stmt->bindValue(2, $mail);
            $stmt->bindValue(3, $sexo);
            $stmt->bindValue(4, $mens);
            $stmt->bindValue(5, $data);
            
            $stmt->execute();
            
            return true;
        }
        catch(PDOException $ex) {
            echo "ERRO: {$ex->getMessage()}";
        }
        finally {
            FabricaConexao::closeConexao($this->con);
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
                echo "<h3>Nenhuma Mensagem Disponível no Banco de Dados!</h3>";
            }
        }
        catch(PDOException $ex) {
            echo "ERRO: {$ex->getMessage()}";
        }
        finally {
            FabricaConexao::closeConexao($this->con);
        }
    }
    
    private function listar($rows) {
        foreach($rows as $r) {
            echo "\n<fieldset>";
            echo "\n\t<legend>" . date("d/m/Y", strtotime($r['data'])) . "</legend>";
            echo "\n\t<h3>Nome: {$r['nome']}</h3>";
            echo "\n\t<h4>E-mail: {$r['mail']}</h4>";
            echo "\n\t<h5>Sexo: {$r['sexo']}</h5>";
            echo "\n\t<pre>\n{$r['mensagem']}\n\t</pre>";
            echo "\n\t<span><input type=\"button\" value=\"Excluir\" onclick=\"location = 'excluir.php?id={$r["id"]}'\"/></span>";
            echo "\n</fieldset>\n";
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
            FabricaConexao::closeConexao($this->con);
        }
    }
}