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
        ["nome" => "Água", "preco" => 1.99],
        ["nome" => "Coca", "preco" => 5.99]
    );

    foreach ($itens as $produto) {
        $nome = $produto["nome"];
        $preco = $produto["preco"];
        echo "Produto: $nome, Preço: R$ " . number_format($preco, 2, ',', '.') . "<br>";
    }

    ?>


</body>

</html>