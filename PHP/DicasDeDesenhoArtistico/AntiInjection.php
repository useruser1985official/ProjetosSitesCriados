<?php
class AntiInjection {
    private $limpa;
    private $inteiro;
    private static $listaNegra = array("select", "update", "drop", "truncate", "insert", "delete", "alter", "from", "where", "table", "tables", "database", "union", "--", "%", "<", ">", "[", "]", ":", "?", "`", "|", "*");

    public function texto($frase) : string {
        $this->limpa = htmlspecialchars($frase, ENT_QUOTES);
        $this->limpa = str_ireplace("--", "", $this->limpa);
        $this->limpa = strip_tags($this->limpa);
        $this->limpa = trim($this->limpa);

        return $this->limpa;
    }

    public function campo($frase) : string {
        $this->limpa = $this->texto($frase);
        $this->limpa = str_ireplace(self::$listaNegra, "", $this->limpa);

        return $this->limpa;
    }

    public function numero($num) : int {
        $this->inteiro = (int)$this->campo($num);

        return $this->inteiro;
    }
}