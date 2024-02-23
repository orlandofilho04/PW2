<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Impar</title>
</head>
<body>
    <form action="" method="POST">
        <label for="numero">
            Digite um número:
            <input type="number" name="numero" id="numero">
        </label>
        <button type="submit">Verificar</button>
    </form>
    <br>
    <?php

    if(isset($_POST['numero'])){
        $numero = intval($_POST['numero']);
        if($numero % 2 == 0){
            echo "O número {$numero} é par";
        }else{
            echo "O número {$numero} é impar";
        }
    }
    
    ?>
</body>
</html>