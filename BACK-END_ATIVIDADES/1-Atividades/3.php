<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 3</title>
    <style>
        body { font-family: Arial; margin: 20px; }
    </style>
</head>
<body>
    <h2>Verifique se você é maior de idade</h2>
    <form method="post">
        <input type="number" name="idade" placeholder="Sua idade">
        <input type="submit" value="Verificar">
    </form>

    <?php
    if (isset($_POST['idade'])) {
        $idade = $_POST['idade'];
        if ($idade >= '18') {
            echo'<p>Você é maior de idade</p>';
        }
        else {
            echo '<p>Você é menor de idade</p>';
        }

    }
    ?>
</body>
</html>
