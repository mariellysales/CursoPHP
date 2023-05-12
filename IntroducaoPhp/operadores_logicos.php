<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Operadores Lógicos</title>
    </head>
    <body>
        <?php
            echo "<h1>Operadores Lógicos</h1>";
            $a = 10;
            $b = 8;
            $c = 7;
            echo "Valores: $a, $b, $c <br><br>";
//AND == &&
            if(($a == 10) AND ($b == 8)){
                echo "Utilizando AND: Verdadeiro <br><br>";
            } else{
                echo "Utilizando AND: Falso<br><br>";
            }
//OR = ||
            if(($a == 10) OR ($b == 7)){
                echo "Utilizando OR: Verdadeiro <br><br>";
            } else{
                echo "Utilizando OR: Falso<br><br>";
            }

            if(($a == 10) XOR ($b == 8)){
                echo "Utilizando XOR: Verdadeiro <br><br>";
            } else{
                echo "Utilizando XOR: Falso<br><br>";
            }

            if(!empty($c)){
                echo "Utilizando !: Verdadeiro <br><br>";
            } else{
                echo "Utilizando !: Falso<br><br>";
            }

            if(($a == 10) && ($b == 8)){
                echo "Utilizando AND: Verdadeiro <br><br>";
            } else{
                echo "Utilizando AND: Falso<br><br>";
            }

            if(($a == 10) || ($b == 8)){
                echo "Utilizando AND: Verdadeiro <br><br>";
            } else{
                echo "Utilizando AND: Falso<br><br>";
            }
        ?>
    </body>
</html>