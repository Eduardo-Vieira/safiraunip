<?php

/* 
 * Class de conexao
 */

class db extends Config {
         
    public function Db(){
        $conn = new PDO($this->dns[$this->dbset]['dns'],$this->dns[$this->dbset]['User'] ,$this->dns[$this->dbset]['Senha']);     
        return $conn; 
    }
    
}