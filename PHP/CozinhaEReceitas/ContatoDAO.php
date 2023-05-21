<?php
require_once "FabricaConexao.php";

class ContatoDAO {
    private $con;
    
    public function __construct() {
        $this->con = FabricaConexao::getConexao();
    }
    
    public function salvar($nome, $mail, $sexo, $moti, $mens, $novi, $data) {
        $sql = "insert into contato (nome, mail, sexo, motivo, mensagem, envio, data) values (?, ?, ?, ?, ?, ?, ?)";
        
        try {
            $stmt = $this->con->prepare($sql);
            
            $stmt->bindValue(1, $nome);
            $stmt->bindValue(2, $mail);
            $stmt->bindValue(3, $sexo);
            $stmt->bindValue(4, $moti);
            $stmt->bindValue(5, $mens);
            $stmt->bindValue(6, $novi);
            $stmt->bindValue(7, $data);
            
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
                echo "<h3>Não Existem Mensagens no Banco de Dados!</h3>";
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
            echo "<legend>" . date("d/m/Y", strtotime($r['data'])) . "</legend>";
            echo "<h3>Nome: {$r['nome']}</h3>";
            echo "<h4>E-mail: {$r['mail']}</h4>";
            echo "<h5>Sexo: {$r['sexo']}</h5>";
            echo "<h6>Motivo: {$r['motivo']}</h6>";
            echo "<h6>Enviar Mensagens: {$r['envio']}</h6>";
            echo "<pre>{$r['mensagem']}</pre>";
            echo "<input type=\"button\" value=\"Excluir\" onclick=\"location = 'excluir.php?id={$r["id"]}'\"/>";
            echo "</fieldset>";
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
