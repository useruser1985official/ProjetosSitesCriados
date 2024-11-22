<?php
require_once "FabricaConexao.php";

class AdminDAO {
    private $con;
    
    public function __construct() {
        $this->con = FabricaConexao::getConexao();
    }
    
    public function salvar($login, $senha) {
        $sql = "insert into admin (login, senha, sal) values (?, ?, ?)";
        
        $sal = time();
        $salgada = $senha . $sal;
        $crip = sha1($salgada);

        $stmt = null;
        
        try {
            $stmt = $this->con->prepare($sql);
            
            $stmt->bindValue(1, $login);
            $stmt->bindValue(2, $crip);
            $stmt->bindValue(3, $sal);
            
            $stmt->execute();
            
            echo "Novo Login Inserido com Sucesso!";
            
            return true;
        }
        catch(PDOException $ex) {
            echo "ERRO: {$ex->getMessage()}";
        }
        finally {
            FabricaConexao::closeConnection($this->con, $stmt);
        }
    }
    
    public function buscar($login, $senha, $lemb) {
        $sql = "select * from admin where login = ? limit 1";
        
        $stmt = null;
        $rs = null;

        try {
            $stmt = $this->con->prepare($sql);
            
            $stmt->bindValue(1, $login);
            
            $stmt->execute();
            
            $rs = $stmt->fetchAll();
            
            $row = $rs[0] ?? 0;
            
            $this->listar($login, $senha, $lemb, $row);
        }
        catch(PDOException $ex) {
            echo "ERRO: {$ex->getMessage()}";
        }
        finally {
            FabricaConexao::closeConnection($this->con, $stmt, $rs);
        }
    }
    
    private function listar($login, $senha, $lemb, $row) {
        $sal = $row["sal"];
        $salgada = $senha . $sal;
        $crip = sha1($salgada);
        
        if($login == $row["login"] && $crip == $row["senha"]) {
            $exp = ($lemb == "on") ? 3600 * 24 * 30 : null;

            session_set_cookie_params($exp, "CuriosidadesSobreCerveja", "localhost");
            session_start();
            $_SESSION["CuriosidadesSobreCerveja"]["logado"] = true;
            header("location: consultas.php");
        }
        else if($login == $row["login"] && $crip != $row["senha"]) {
            $_SESSION["CuriosidadesSobreCerveja"]["logado"] = null;
            header("location: admin.php?env=senha");
        }
        else {
            $_SESSION["CuriosidadesSobreCerveja"]["logado"] = null;
            header("location: admin.php?env=usuario");
        }
    }
    
    public function excluir($login) {
        $sql = "delete from admin where login = ?";
        
        try {
            $stmt = $this->con->prepare($sql);
            
            $stmt->bindValue(1, $login);
            
            $stmt->execute();
            
            echo "Login Excluído com Sucesso!";
            
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