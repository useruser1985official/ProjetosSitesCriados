<?php
class FabricaConexao {
    private const HOSTNAME = "mysql:host=localhost;dbname=desenhos_dicas;charset=utf8";
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

    public static function closeConnection($con, $stmt = null, $rs = null) {
        if($con != null) {
            try {
                unset($con);
            }
            catch(PDOException $ex) {
                echo "ERRO: {$ex->getMessage()}";
            }
        }

        if($stmt != null) {
            try {
                unset($stmt);
            }
            catch(PDOException $ex) {
                echo "ERRO: {$ex->getMessage()}";
            }
        }

        if($rs != null) {
            try {
                unset($rs);
            }
            catch(PDOException $ex) {
                echo "ERRO: {$ex->getMessage()}";
            }
        }
    }
}