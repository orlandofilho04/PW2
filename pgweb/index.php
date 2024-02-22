<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php


    $a = 3;
    $b = 5;

    $c = pow($a,2) + pow($b,2);//potenciação

    $hip = sqrt($c);//raiz quadrada
    $ceil = ceil($hip);
    $floor = floor($hip);
    echo "A hipot. é {$hip}, {$ceil}, {$floor} <br>";

    $a = [1,4,6,2,9,10];

    $maior = max($a);
    $menor = min($a);

    echo "<br>O maior é = {$maior}, menor = {$menor}";
    ?>

</body>

</html>