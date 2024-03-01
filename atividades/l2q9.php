<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 2 - Questão 9</title>
</head>

<body>
    <?php

    $itens = array(
        "Água" => 1.99,
        "Coca" => 5.99,
        "Energético" => 15.99
    );

    foreach ($itens as $nomeProduto => $preco) {
        echo "Produto: $nomeProduto, Preço: R$ " . number_format($preco, 2, ',', '.') . "<br>";
    }

    ?>
</body>

</html>