<?php
class AntiInjection {
    private $tags;
    private $muda;
    private $retira;
    private $escape;
    private $limpa;
    private $inteiro;
    private static $listaNegra = array("select", "update", "drop", "truncate", "insert", "delete", "alter", "from", "where", "table", "tables", "database", "union", ";", "--", "#", "%", "&", "'", "\"", "(", ")", "<", ">", "[", "]", ":", "?", "`", "|", "*");

    public function texto($frase) : string {
        $this->tags = strip_tags($frase);
        $this->retira = str_ireplace("--", "", $this->tags);
        $this->muda = htmlspecialchars($this->retira, ENT_QUOTES);
        $this->escape = (get_magic_quotes_gpc()) ? $this->muda : addslashes($this->muda);
        $this->limpa = trim($this->escape);

        return $this->limpa;
    }
    
    public function campo($frase) : string {
        $this->tags = strip_tags($frase);
        $this->retira = str_ireplace(self::$listaNegra, "", $this->tags);
        $this->muda = htmlspecialchars($this->retira, ENT_QUOTES);
        $this->escape = (get_magic_quotes_gpc()) ? $this->muda : addslashes($this->muda);
        $this->limpa = trim($this->escape);

        return $this->limpa;
    }
    
    public function numero($num) : int {
        $this->tags = strip_tags($num);
        $this->retira = str_ireplace(self::$listaNegra, "", $this->tags);
        $this->inteiro = (int)$this->retira;

        return $this->inteiro;
    }
}