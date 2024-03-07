<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz Identidade</title>
</head>
<body>
    <h1>Matriz Identidade</h1>
    <?php
    $line = 5;
    $column = 5;
        for ($i=0; $i < $line; $i++) { 
            for ($j=0; $j < $column; $j++) { 
                if ($i == $j) {
                    echo "1 ";
                } else {
                    echo "0 ";
                }
            }
            echo "<br>";
        }
    ?>
</body>
</html>