<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 1 - Questão 4</title>
</head>

<body>

    <h1>Calculo de Imposto de Renda</h1>

    <form action="">
        <label>Insira o seu salário anual:</label>
        <input type="number" name="valor" placeholder="Valor:">
        <input type="submit" value="Enviar">
    </form>

    <?php

    $calculo = $_REQUEST["valor"];
    function calcular($calculo)
    {
        $final = $calculo / 12;
        if ($final < 2259.20) {
            return "Taxa de imposto: isenta";
        } elseif ($final >= 2259.20 && $final < 2828.65) {
            return "Taxa de imposto: 7.5%" . "<br>" . "Valor da parcela a reduzir: " . $final * 0.075;
        } elseif ($final >= 2828.65 && $final < 3751.05) {
            return "Taxa de imposto: 15%" . "<br>" . "Valor da parcela a reduzir: " . $final * 0.15;
        } elseif ($final >= 3751.05 && $final < 4664.68) {
            return "Taxa de imposto: 22.5%" . "<br>" . "Valor da parcela a reduzir: " . $final * 0.225;
        } elseif ($final >= 4664.68) {
            return "Taxa de imposto: 27.5%" . "<br>" . "Valor da parcela a reduzir: " . $final * 0.275;
        }
    }
    echo calcular($calculo);

    ?>

</body>

</html>