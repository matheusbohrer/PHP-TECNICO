<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 14 - Ano Bissexto</title>
</head>

<body>
    <form method="post" action="">
        <label for="ano">Digite um ano:</label>
        <input type="number" id="ano" name="ano" required>

        <button type="submit" name="verificar_ano">Verificar</button>
    </form>

    <?php
    if (isset($_POST['verificar_ano'])) {
        $ano = $_POST['ano'];

        if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
            echo "<p>✅ O ano <strong>$ano</strong> é bissexto.</p>";
        } else {
            echo "<p>❌ O ano <strong>$ano</strong> não é bissexto.</p>";
        }
    }
    ?>
</body>

</html>
