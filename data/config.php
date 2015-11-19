<?php

/* 
 * clase de configuraçãoes
 */

Class Config {
    
        //Configuração dns para banco de dado
        var $dbset ='mysql'; //banco que sera uando
        var $dns = array(
            'mysql'=>array(
                'dns'=>'mysql:host=localhost;dbname=dbunip01_pro',
                'User'=>'userphp',
                'Senha'=>'12345' ),
            'mssql'=>array(
                 'dns'=>'"mssql:host=localhost;dbname=db_framework',
                 'User'=>'usuario',
                 'Senha'=>'senha' ),
            );
        
        //Titulo do sistema (Nome)
        var $titulo = 'Safira';
        //versão do sistema
        var $versao = '1.0.0';

}