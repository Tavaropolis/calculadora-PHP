<?php
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $operacao = $_GET["calcular"];

    switch($operacao) {
        case "somar": 
            $resultado = $num1 + $num2;
            break ;
        case "subtrair":
            $resultado = $num1 - $num2;
            break;
        case "multiplicar":
            $resultado = $num1 * $num2;
            break;
        case "dividir":
            $resultado = $num1 / $num2;
            break;
        
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>

    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Calculadora PHP 📱</h1>
        <form action="">
            <label for="num1">Primeiro Número</label>
            <input type="number" name="num1" value=<?= $num1 ?> required>
            <label for="num2">Segundo Número</label>
            <input type="number" name="num2" value=<?= $num2 ?>  required>
            <select name="calcular" id="">
                <option value="somar" <?= ($operacao == "somar")? "Selected" : "" ?>>Somar</option>
                <option value="subtrair" <?= ($operacao == "subtrair")? "Selected" : "" ?>>Subtrair</option>
                <option value="multiplicar" <?= ($operacao == "multiplicar")? "Selected" : "" ?>>Multiplicar</option>
                <option value="dividir" <?= ($operacao == "dividir")? "Selected" : "" ?>>Dividir</option>
            </select>
            <input type="submit" value="Calcular" class="botao">
            <p>O resultado da conta é <span id="valor"><?=$resultado ?></span></p>
        </form>
    </div>
</body>
</html>