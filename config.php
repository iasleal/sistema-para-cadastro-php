<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario-iasmin';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

// if($conexao->connect_errno)
// {
//    echo "erro";
// }
// else
// {
//     echo "conexão efetuada com sucesso";
// }
