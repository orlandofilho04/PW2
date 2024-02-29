<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetição do while</title>
</head>

<body>
    <h1>Estrutura de Repetição dowhile</h1>
    <h2>Exemplo 01 - Contador</h2>
    <?php

    $x = 0;

    do {
        echo "O valor de x é: $x <br>";
        $x++;
    } while ($x <= 10);

    ?>

    <h2>Exemplo 02 - </h2>

    <?php
    $array = ["maçã", "pera", "uva", "banana", "laranja"];
    //$array = [];
    echo "O array tem " . count($array) . " elementos <br> <br>";

    $i = 0;
    do {
        if (count($array) > 0) {
            echo "O valor do array na posição $i é: $array[$i] <br>";
            $i++;
        } else {
            echo "O array está vazio";
        }

    } while ($i < count($array));
    ?>

</body>

</html>