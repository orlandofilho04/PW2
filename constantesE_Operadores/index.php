<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
</head>
<body>
    <?php

    $a = 10;
    $b = 5;

    $ab = $a + $b; //Adição
    $sb = $a - $b; //Subtração
    $mb = $a * $b; //Multiplicação
    $db = $a / $b; //Divisão
    $rb = $a % $b; //Resto da divisão

    var_dump([$ab, $sb, $mb, $db, $rb]);

    $vet = [$ab, $sb, $mb, $db, $rb];
    
    var_dump($vet[2]);

    //Operações de atribuição
    echo "<br>";
    $x = 10;
    $y = 5;

    $x = $y; //Atribuição
    echo $x."<br>";
    var_dump($x);
    $x += $y; //Atribuição de adição
    echo $x."<br>";
    var_dump($x);
    $x -= $y; //Atribuição de subtração
    echo $x."<br>";
    var_dump($x);
    $x *= $y; //Atribuição de multiplicação
    echo $x."<br>";
    var_dump($x);
    $x /= $y; //Atribuição de divisão
    echo $x."<br>";
    var_dump($x);
    $x %= $y; //Atribuição de resto
    echo $x."<br>";
    var_dump($x);


    ?>
    
</body>
</html>