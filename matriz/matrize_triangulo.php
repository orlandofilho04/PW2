<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <h1>Matriz em Triângulo</h1>

    <?php
    $tamanho = 100;
    $matriz = array();

    for ($i = 0; $i < $tamanho; $i++) {
        for ($s = 0; $s < $tamanho - $i - 1; $s++) {
            echo "&nbsp;&nbsp;";
        }
        for ($n = 0; $n <= $i; $n++) {
            $matriz[$i][$n] = $n + 1;
            echo $matriz[$i][$n] . " ";
        }
        echo "<br>";
    }
    ?>

</body>

</html>