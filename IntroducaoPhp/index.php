<?php
    echo "Hello, world!<br><br>";

    echo "Como Cocatenar:<br>";
    $idade = 20;
    $nome = "Marielly";
    echo "A " . $nome . " tem " . $idade . " anos" . ".<br><br>";

    echo "Variável Inteira:<br>";
    $qnt_prod = 61;
    $qnt_prod = $qnt_prod - 7;
    echo "Quantidade de produto no estoque: $qnt_prod <br><br>";

    echo "Variável Float:<br>";
    $saldo = 5.87;
    $deposito = 2570.52;
    $saldo = $saldo + $deposito;
    echo "Saldo: R$" . number_format($saldo, 2, ",", "."). "<br><br>";

    echo "Variável Boolean:<br>";
    $situacao = false;
    if($situacao) {
        echo "<span style='color: green;'>Situação verdadeira</span><br><br>";
    } else {
        echo "<span style='color: #FF0000;'>Situação falsa</span><br><br>";
    }
?>