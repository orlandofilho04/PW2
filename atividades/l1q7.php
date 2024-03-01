<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 1 - Questão 7</title>
</head>

<body>

    <h1>Valor da passagem de Rubiataba a Ceres: 22 reais</h1>

    <form action="">
        <label>Escolha o que você é:</label>
        <select name="detalhe" id="detalhe">
            <option value="comum">Comum</option>
            <option value="estudante">Estudante</option>
            <option value="idoso">Idoso</option>
        </select>
        <input type="submit" value="Enviar">
    </form>

    <?php

    $escolha = $_REQUEST["detalhe"];
    function calcularDesconto($escolha)
    {
        $passagem = 22;
        if ($escolha == "comum") {
            return "Sem desconto, valor total: " . $passagem . " reais";
        } elseif ($escolha == "estudante") {
            return "Com desconto de 50%, valor total: " . $passagem / 2 . " reais";
        } elseif ($escolha == "idoso") {
            return "Com desconto de 40%, valor total: " . $passagem * 0.6 . " reais";
        }
    }
    echo calcularDesconto($escolha);

    ?>

</body>

</html>