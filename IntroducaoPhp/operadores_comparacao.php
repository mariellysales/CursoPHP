<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Operadores de Comparação</title>
    </head>
    <body>
        <?php
            echo "<h1>Operadores de comparação</h1>";
            $a = 10;
            $b = 8;
            echo "Valores: $a, $b <br><br>";

            echo "Igual a (==)<br>";
            if($a == $b){
                echo "Verdadeiro: o número $a é igual ao valor $b <br><br>";
            } else{
                echo "Falso: o número $a não é igual ao valor $b <br><br>";
            }

            echo "Diferença (!=)<br>";
            if($a != $b){
                echo "Verdadeiro: $a é diferente de $b <br><br>";
            } else{
                echo "Falso: $a é igual a $b <br><br>";
            }

            echo "Menor (<)<br>";
            if($a < $b){
                echo "Verdadeiro: $a é menor que $b <br><br>";
            } else{
                echo "Falso: $a é maior que $b <br><br>";
            }

            echo "Maior (>)<br>";
            if($a > $b){
                echo "Verdadeiro: $a é maior que $b <br><br>";
            } else{
                echo "Falso: $a é menor que $b <br><br>";
            }

            echo "Menor ou igual (<=)<br>";
            if($a <= $b){
                echo "Verdadeiro: $a é menor ou igual a $b <br><br>";
            } else{
                echo "Falso: $a é maior ou igual a $b <br><br>";
            }

            echo "Maior ou igual(>=)<br>";
            if($a >= $b){
                echo "Verdadeiro: $a é maior ou igual a $b <br><br>";
            } else{
                echo "Falso: $a é menor ou igual a $b <br><br>";
            }

        ?>
    </body>
</html>