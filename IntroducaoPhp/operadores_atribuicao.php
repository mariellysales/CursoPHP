<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Operadores Atribuição</title>
    </head>
    <body>
        <?php
            $a = 1;
            $b = 2;
            $c = 3;
            $result = 6;
            echo "<h1>Operadores atribuição</h1>";
            echo "Números: $a, $b, $c e $result.<br><br>";

            echo "Somar o valor $result pelo valor $a:<br>";
            $result += $a;
            echo "Resultado: $result <br><br>";

            echo "Subtrair o valor $result pelo valor $b:<br>";
            $result -= $b;
            echo "Resultado: $result <br><br>";

            echo "Multiplicar o valor $result pelo valor $b:<br>";
            $result *= $b;
            echo "Resultado: $result <br><br>";

            echo "Dividir o valor $result pelo valor $b:<br>";
            $result /= $b;
            echo "Resultado: $result <br><br>";

            echo "O resto do valor $result pelo valor $b:<br>";
            $result %= $b;
            echo "Resultado: $result <br><br>";

            echo "Concatenação<br>";
            $d = "Bom ";
            $d .= "dia, ";
            $d .= "Mary!";
            //usada geralmente dentro de laços

            echo "$d";
        ?>
    </body>
</html>