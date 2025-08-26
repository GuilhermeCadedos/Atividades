<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 5</title>
    <style>
        body { font-family: Arial; margin: 20px; }
    </style>
</head>
<body>
    <h2>Soma de Números (Array fixo)</h2>

    <?php

    $numeros = array("3","6","9","10","12");
    $soma = 0;
    
    foreach ( $numeros as $n){
        $soma += $n;
    }

    echo "<p>Números: " . implode(", ", $numeros) . "</p>";
    echo "<p>Soma total: <b>$soma</b></p>";
    ?>
</body>
</html>

