<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Operadores Aritméticos</title>
    </head>
    <body>
        <?php
            $a = 2;
            $b = 4;
            $c = 7;
            echo "<h1>Operadores aritméticos</h1>";
            echo "Números: $a, $b, $c.<br><br>";

            echo "Soma:<br>";
            $resultado_soma = $a + $b = $c;
            echo "A soma dos números é $resultado_soma <br><br>";

            echo "Subtração:<br>";
            $resultado_subtracao = $a - $b - $c;
            echo "A subtração dos números dá $resultado_subtracao.<br><br>";

            echo "Multiplicação:<br>";
            $resultado_multiplicacao = $a * $b * $c;
            echo "A multiplicação dos números dá $resultado_multiplicacao.<br><br>";

            echo "Divisão:<br>";
            $resultado_divisao = $a / $b / $c;
            echo "A divisão dos números dá $resultado_divisao.<br><br>";

            echo "Resto da divisão:<br>";
            $resultado_resto = $a % $b % $c;
            echo "O resto da divisão dos números dá $resultado_resto.<br><br>";
        ?>
    </body>
</html>