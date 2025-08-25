<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 16 - Votação</title>
</head>

<body>
    <form method="post" action="">
        <label for="nome">Digite seu nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="idade">Digite sua idade:</label>
        <input type="number" id="idade" name="idade" required>

        <button type="submit" name="verificar_voto">Verificar</button>
    </form>

    <?php
    if (isset($_POST['verificar_voto'])) {
        $nome = trim($_POST['nome']);
        $idade = intval($_POST['idade']);

        if ($idade < 16) {
            echo "<p>$nome, você <strong>não pode votar</strong>.</p>";
        } elseif (($idade >= 16 && $idade < 18) || $idade > 70) {
            echo "<p>$nome, você <strong>pode votar, mas é opcional</strong>.</p>";
        } else {
            echo "<p>$nome, você <strong>é obrigado a votar</strong>.</p>";
        }
    }
    ?>
</body>

</html>
