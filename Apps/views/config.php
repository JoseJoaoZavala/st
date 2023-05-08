<?php

    $dbHost='localhost';
    $dbUsername='root';
    $dbPassoard='';
    $dbName='sysactivos';

    $conexao = new mysqli ($dbHost,$dbUsername,$dbPassoard,$dbName);

    if($conexao->connect_errno){
        echo "Erro";
    }else {
        echo "Conectado com sucesso";
    }

?>