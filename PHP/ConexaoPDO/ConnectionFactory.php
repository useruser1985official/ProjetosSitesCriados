<?php
    class ConnectionFactory {
        private const HOSTNAME = "mysql:host=localhost;dbname=mercadophp;charset=utf8";
        private const USERNAME = "root";
        private const PASSWORD = "";

        public static function getConnection() {
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
                    $con = null;
                }
                catch(PDOException $ex) {
                    echo "ERRO: {$ex->getMessage()}";
                }
            }

            if($stmt != null) {
                try {
                    $stmt = null;
                }
                catch(PDOException $ex) {
                    echo "ERRO: {$ex->getMessage()}";
                }
            }

            if($rs != null) {
                try {
                    $rs = null;
                }
                catch(PDOException $ex) {
                    echo "ERRO: {$ex->getMessage()}";
                }
            }
        }
    }