<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 8</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        input { padding: 5px; margin: 5px; }
    </style>
</head>
<body>
    <h2>Login Simples</h2>
    <form method="post">
        <input type="text" name="user" placeholder="Usuário">
        <input type="password" name="pass" placeholder="Senha">
        <input type="submit" value="Entrar">
    </form>

    <?php
    include("8_usuarios.php");

    if (isset($_POST['user'])) {
        $usuario = $_POST['user'];
        $senha = $_POST['pass'];
        if ($usuario =="admin" && $senha == "123") {
            echo"<p>usuario e senha correto!</p>";
        }
        else{
             echo"<p>usuario e senha incorretos!</p>";
        }

    }
    ?>
</body>
</html>

