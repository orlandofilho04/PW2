<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetição for</title>
</head>

<body>
    <h1>Estrutura de Repetição for</h1>
    <h2>Exemplo 01 - Contador</h2>
    <?php

    for ($x = 1; $x <= 10; $x++) {
        echo "O valor de x é: $x <br>";
    }
    ?>

    <h2>Exemplo 02 - </h2>

    <?php
    $array = ["maçã", "pera", "uva", "banana", "laranja"];
    //$array = [];
    echo "O array tem " . count($array) . " elementos <br> <br>";

    $i = 0;
    for ($i = 0; $i < count($array); $i++) {
        if (count($array) > 0) {
            echo "O valor do array na posição $i é: $array[$i] <br>";
        } else {
            echo "O array está vazio";
        }
    }
    ?>

</body>

</html>