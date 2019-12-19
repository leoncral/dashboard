<?php

include 'conexao/conexao.php';
$cod = $_POST['cod'];

if($cod == 1) {
    $mes = $_POST['mes'];
    $quantidade = $_POST['quantidade'];
    $valor = $_POST['valor'];

    $sql = "INSERT INTO vendas (mes_venda, quantidade_venda, valor_venda) VALUES ('$mes', $quantidade, $valor)";

    $inserir = mysqli_query($conexao, $sql);

    header('Location: dashboard.php?pagina=vendas');
}
if($cod == 2){
    $mes = $_POST['mes'];
    $quantidade = $_POST['quantidade'];

    $sql = "INSERT INTO clientes (mes_cliente, quantidade) VALUES ('$mes', $quantidade)";

    $inserir = mysqli_query($conexao, $sql);

    header('Location: dashboard.php?pagina=clientes');
}

?>