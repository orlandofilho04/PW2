<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 2 - Questão 7</title>
</head>

<body>
    <?php

    $variavelDeLoop = 0;

    while (true) {
        echo "O valor de variavelDeLoop é: " . $variavelDeLoop . "<br>";
        if ($variavelDeLoop >= 10) {
            break;
        }
        $variavelDeLoop++;
    }

    ?>
</body>

</html>