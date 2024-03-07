<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrizes</title>
</head>
<body>
    <h1>Matrizes</h1>
    <h2>Exemplo 2</h2>

    <?php
    $line = 5;
    $column = 5;
        for ($i=0; $i < $line; $i++) { 
            for ($j=0; $j < $column; $j++) { 
                echo "{$i}.{$j} ";
            }
            echo "<br>";
        }
    ?>
</body>
</html>