<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetição</title>
</head>

<body>
    <h1>Estrutura de Repetição</h1>
    <h2>Exemplo 01 - Contador</h2>
    <?php

    $x = 1;

    while ($x <= 10) {
        echo "O valor de x é: $x <br>";
        $x++;
    }

    ?>

    <h2>Exemplo 02 - </h2>

    <?php   
    $array = ["maçã", "pera", "uva", "banana", "laranja"];

    echo "O array tem " . count($array) . " elementos <br> <br>";

    $i = 0;
    while ($i < count($array)) {
        echo "O valor do array na posição $i é: $array[$i] <br>";
        $i++;
    }
    ?>

</body>

</html>