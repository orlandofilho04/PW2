<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcula Media</title>
</head>
<body>
    <?php

    $nota = $_POST['nota1'];
    $nota2 = $_REQUEST['nota2'];

    $media = ($nota + $nota2) / 2;

    if($media >= 70){
        echo "Aprovado com média {$media}";
        
    }else if($media >= 40 && $media < 70){
        echo "Recuperação com média {$media}";
    }    
    else{
        echo "Reprovado com média {$media}";
    }
    ?>
</body>
</html>