<?php
    $servername = "localhost"; //servidor local
    $database = "baseteste"; //nome do banco de dados
    $username = "root"; //user padrao
    $password = ""; //senha para conexão com o banco de dados

    //Cria a conexão

    $conexao = mysqli_connect($servername, $username, $password, $database);

?>