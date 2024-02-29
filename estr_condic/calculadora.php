<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calc</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form action="">
        <label for="valor1">Valor 1</label>
        <input type="text" name="valor1" id="valor1"><br><br>

        <label for="op">Operação</label>
        <select name="op" id="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select><br><br>

        <label for="valor2">Valor 2</label>
        <input type="text" name="valor2" id="valor2"><br><br>

        <input type="submit" value="calcular">
    </form>

    <?php
    if (isset($_REQUEST['valor1']) && isset($_REQUEST['valor2']) && isset($_REQUEST['op'])) {
        
        $op = $_REQUEST['op'];
        $valor1 = $_REQUEST['valor1'];
        $valor2 = $_REQUEST['valor2'];

        switch ($op) {
            case '+':
                echo "A soma é: " . ($valor1 + $valor2);
                break;
            case '-':
                echo "A subtração é: " . ($valor1 - $valor2);
                break;
            case '*':
                echo "A multiplicação é: " . ($valor1 * $valor2);
                break;
            case '/':
                echo "A divisão é: " . ($valor1 / $valor2);
                break;
            default:
                echo "Operação inválida";
                break;
        }
    }
    ?>
</body>
</html>