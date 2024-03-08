<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $matrizBinaria = [];
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            $matrizBinaria[$i][$j] = rand(0, 1);
            echo $matrizBinaria[$i][$j] . " ";
        }
        echo "<br>";

    }

    echo "<br>";

    $matrizRandomica = [];
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            $matrizRandomica[$i][$j] = rand(0, 9);
            echo $matrizRandomica[$i][$j] . " ";
        }
        echo "<br>";
    }

    echo "<br>";

    $matrizResultado = [];
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            if ($matrizBinaria[$i][$j] === 1) {
                $matrizResultado[$i][$j] = 0;
            } else {
                $matrizResultado[$i][$j] = $matrizRandomica[$i][$j];
            }
        }
    }


    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            echo $matrizResultado[$i][$j] . " ";
        }
        echo "<br>";
    }
    ?>
</body>

</html>