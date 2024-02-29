<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case</title>
</head>
<body>
    <?php
    $op = 1;
    switch ($op) {
        case 1:
            echo "Opção 1";
            break;
        case 2:
            echo "Opção 2";
            break;
        case 3:
            echo "Opção 3";
            break;
        default:
            echo "Opção inválida";
            break;
    }
    ?>
</body>
</html>