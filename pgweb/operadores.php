<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo "<br>Operadores Aritméticos<br>";
    $a = 10;
    $b = 5;

    $ad = $a + $b; // adição
    $sb = $a - $b; // subtração
    $mt = $a * $b; // multiplicação
    $dv = $a / $b; // divisão
    $rt = $a % $b; // Resto
    $info = [$ad, $sb, $mt, $dv, $rt];
    var_dump($info);

    echo "<br>Operadores de atribuição<br>";

    $x = 0;
    $y = 5;

    $x = $y; //atribuição
    echo "O valor de x = ".$x."<br>";
    $x += $y; //atribuição de adição
    echo "O valor de x = ".$x."<br>";
    $x -= $y;//atribuição de subtração
    echo "O valor de x = ".$x."<br>";
    $x *= $y;//atribuição de multiplicação
    echo "O valor de x = ".$x."<br>";
    $x /= $y;//atribuição de divisão
    echo "O valor de x = ".$x."<br>";
    $x %= $y;//atribuição de resto
    echo "O valor de x = ".$x."<br>";

    echo "<br>Operadores de comparação<br>";

    $i = 10;
    $j = 10;

    echo "<br>";
    var_dump($i == $j);//igual
    echo "<br>";
    var_dump($i === $j);//idêntico
    echo "<br>";
    var_dump($i != $j); //diferente
    echo "<br>";
    var_dump($i <> $j);//diferente
    echo "<br>";
    var_dump($i > $j); //maior
    echo "<br>";
    var_dump($i < $j); //menor
    echo "<br>";
    var_dump($i >= $j); //maior ou igual
    echo "<br>";
    var_dump($i <= $j); //menor ou igual

    echo "<br>Operadores de incremento/decremento<br>";

    echo "<br>incremento<br>";

    $m = 0;
    echo "O valor de m = {$m} <br>";
    $m++;
    echo "O valor de m = {$m} <br>";
    $m++;
    echo "O valor de m = {$m} <br>";
    $m++;
    echo "O valor de m = {$m} <br>";
    $m++;
    echo "O valor de m = {$m} <br>";

    echo "<br>decremento<br>";

    $n = 10;
    echo "O valor de m = {$n} <br>";
    $n--;
    echo "O valor de m = {$n} <br>";
    $n--;
    echo "O valor de m = {$n} <br>";
    $n--;
    echo "O valor de m = {$n} <br>";
    $n--;
    echo "O valor de m = {$n} <br>";


    echo "<br>Operadores Lógicos<br>";

    $p = 10;
    $q = 20;

    echo "<br>and <br>";
    var_dump(($p == 10 && $q == 20));
    var_dump(($p == 10 and $q == 18));
    echo "<br>or <br>";
    var_dump(($p == 10 or $q == 20));
    var_dump(($p == 8 || $q == 20));
    echo "<br>XOR <br>";
    var_dump(($p == 10 xor $q == 18));
    var_dump(($p == 8 xor $q == 20));
    var_dump(($p == 10 xor $q == 20));
    var_dump(($p == 8 xor $q == 18));

    echo "<br>Negação <br>";
    var_dump((!$p <= 9));

    echo "<br>Operadores de Concatenação<br>";

    $nome = "Vilson";
    $sobrenome = "Soares de Siqueira";

    $nc = $nome.' '.$sobrenome;
    echo "<br> {$nc} <br>";

    $nome .= ' '.$sobrenome;
    echo "<br> {$nome} <br>";
    ?>
    
</body>
</html>