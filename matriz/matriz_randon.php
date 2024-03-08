<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz Aleatória</title>
</head>

<body>
    <h1>Matriz Randon</h1>

    <?php
    $matriz_linha = [];
    $linha = 5;
    $coluna = 5;

    for ($i = 0; $i < $linha; $i++) {
        $matriz_coluna = [];
        for ($j = 0; $j < $coluna; $j++) {
            $r = rand(0, 1);
            array_push($matriz_coluna, $r);
        }
        array_push($matriz_linha, $matriz_coluna);
    }
    for ($i = 0; $i < $linha; $i++) {
        for ($j = 0; $j < $coluna; $j++) {
            echo $matriz_linha[$i][$j] . " ";
        }
        echo "<br>";
    }

    echo "<br>"

        ?>
</body>

</html>