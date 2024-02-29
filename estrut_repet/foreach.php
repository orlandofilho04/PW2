<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetição for each</title>
</head>

<body>
    <h1>Estrutura de Repetição for each</h1>
    <h2>Exemplo 01 - listar array</h2>
    <?php
    $array = ["maçã", "pera", "uva", "banana", "laranja"];
    foreach ($array as $value) {
        echo "O valor do array é: $value <br>";
    }
    ?>

    <h2>Exemplo 02 - </h2>
    <?php
    $arraym = [["fruta" => "maçã"], ["fruta" => "pera"], ["fruta" => "uva"], ["fruta" => "banana"], ["fruta" => "laranja"]];
    foreach ($arraym as $k => $value) {
        echo "O valor do array é: " . $value["fruta"] . "<br>";
    }
    ?>

</body>

</html>