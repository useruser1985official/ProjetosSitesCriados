<?php
require_once "FabricaConexao.php";

class ContatoDAO {
    private $con;
    
    public function __construct() {
        $this->con = FabricaConexao::getConexao();
    }
    
    public function salvar($nome, $mail, $mens, $data) {
        $sql = "insert into contato (nome, email, mensagem, data) values (?, ?, ?, ?)";
        
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
                echo "<h3>Não Existem Mensagens no Banco de Dados!</h3>\n";
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
            echo "<fieldset id=\"mensagens\">";
            echo "\n\t<legend>" . date("d/m/Y", strtotime($r["data"])) . "</legend>";
            echo "\n\t<h3>{$r['nome']}</h3>";
            echo "\n\t<h4>{$r['email']}</h4>";
            echo "\n\t<pre>\n";
            echo $r["mensagem"];
            echo "\n\t</pre>";
            echo "\n\t<input type=\"button\" value=\"Excluir\" onclick=\"location = 'excluir.php?id={$r['id']}'\"/>";
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