<?php
    # * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    # ATEN��O
    #  Antes de tudo verifique sua conex�o com o banco de dados
    #  para que o registro possa ser inserido/vizualizado editando
    # o arquivo 'funcoes.php'.
    # * * * * * * * * * * * * * * * * * * * * * * * * * * * * *

# FUN��O PARA CONECTAR AO BANCO DE DADOS
# * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
      function conecta(){
         $local  = 'localhost'; # localiza��o do banco de dados
         $banco  = 'dbunip01_pro'; # nome do banco de dados
         $usuario = 'userphp'; # nome de acesso ao banco de dados
         $senha  = '12345'; # senha de acesso ao banco de dados      
# * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
         # 1� passo - Conectar ao banco de dados
         if (!($conexao = mysql_connect($local, $usuario, $senha))){
            echo 'Erro ao conectar no banco de dados localizado em '.$local;
         } else {
         # 2� passo - Selecionar o banco de dados
            if (!($selecionar_banco=mysql_select_db($banco, $conexao))){
               echo 'Erro ao selecionar o banco de dados '.$banco;
            }
         }
     }

      

# * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *


# FUN��O DE EXECU��O DE SQL`s
# * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
      function executar_sql($sql){
         if ($conexao = mysql_query($sql)){
            return 'Comando executado com sucesso...<br>';
         } else {
            return 'Erro ao executar o comando...<br>';
         }
      }
# * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *


# FUN��O de Converter data
# * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    function converter_data($strData) {
        // Recebemos a data no formato: dd/mm/aaaa
        // Convertemos a data para o formato: aaaa-mm-dd
        if ( preg_match('#/#',$strData) == 1 ) {
                $strDataFinal = "'";
                $strDataFinal .= implode('-', array_reverse(explode('/',$strData)));
                $strDataFinal .= "'";
        }
        return $strDataFinal;
   }
# * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *


# FUN��O IIF
# * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
function IIF($condion, $true, $false ) {
    if($condion){
      $v = $true;
    }else{
      $v = $false;
    }
    return $v;
}
# * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
# FUN��O Troca Prefixo de localiza��o
# * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
function trocaprefixo($txt) {
       for($a = 1; $a <= strlen($txt); $a++ )
       {
         $p = substr($txt,$a*-1,1);
         $stv = IIF($p == '*','%',$p);
         $vt .= $stv;
       }
    return strrev($vt);
}

# FUN��O Formata data
# * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
function format_data($strdata) {
    if(date('d/m/Y', strtotime($strdata))== '31/12/1969'){
    $strDataF = ' - ';
    }else{
    $strDataF = date('d/m/Y', strtotime($strdata));
    }
return $strDataF;
}



function session_checker(){

if (!isset($_SESSION['usuario_id'])){

header ("Location:#");
exit();

}

}

?>
