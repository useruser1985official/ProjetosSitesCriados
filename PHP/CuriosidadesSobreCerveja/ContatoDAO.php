<?php
require_once "FabricaConexao.php";

class ContatoDAO {
    private $con;
    
    public function __construct() {
        $this->con = FabricaConexao::getConexao();
    }
    
    public function salvar($nome, $mail, $idad, $sexo, $cerv, $mens, $data) {
        $sql = "insert into contato (id, nome, mail, idade, sexo, cerveja, mensagem, data) values (default, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = null;

        try {
            $stmt = $this->con->prepare($sql);
            
            $stmt->bindValue(1, $nome);
            $stmt->bindValue(2, $mail);
            $stmt->bindValue(3, $idad);
            $stmt->bindValue(4, $sexo);
            $stmt->bindValue(5, $cerv);
            $stmt->bindValue(6, $mens);
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
                echo "<h3>Não Existem Mensagens no Banco de Dados!</h3>";
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
            echo "\n\t<legend>" . date("d/m/Y", strtotime($r['data'])) . "</legend>";
            echo "\n\t<h3>Nome: {$r['nome']}</h3>";
            echo "\n\t<h4>E-mail: {$r['mail']}</h4>";
            echo "\n\t<h6>Idade: {$r['idade']}</h6>";
            echo "\n\t<h5>Sexo: {$r['sexo']}</h5>";
            echo "\n\t<pre>\n{$r['mensagem']}\n\t</pre>";
            echo "\n\t<input type=\"button\" value=\"Excluir\" onclick=\"location = 'excluir.php?id={$r["id"]}'\"/>";
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