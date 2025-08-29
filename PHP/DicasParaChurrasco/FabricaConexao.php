<?php
class FabricaConexao {
    private const HOSTNAME = "mysql:host=localhost;dbname=churrasco_dicas;charset=utf8";
    private const USERNAME = "root";
    private const PASSWORD = "";
    
    public static function getConexao() {
        try {
            $conexao = new PDO(self::HOSTNAME, self::USERNAME, self::PASSWORD);
            
            return $conexao;
        }
        catch(PDOException $ex) {
            echo "ERRO: {$ex->getMessage()}";
        }
    }
    
    public static function closeConexao($con) {
        if($con != null) {
            try {
                unset($con);
            }
            catch(PDOException $ex) {
                echo "ERRO: {$ex->getMessage()}";
            }
        }
    }
}