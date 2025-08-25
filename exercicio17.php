<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 17 - Validar Data</title>
</head>

<body>
    <form method="post" action="">
        <label for="dia">Dia:</label>
        <input type="number" id="dia" name="dia" min="1" max="31" required>

        <label for="mes">Mês:</label>
        <input type="number" id="mes" name="mes" min="1" max="12" required>

        <label for="ano">Ano:</label>
        <input type="number" id="ano" name="ano" min="1" required>

        <button type="submit" name="validar_data">Validar Data</button>
    </form>

    <?php
    if (isset($_POST['validar_data'])) {
        $dia = intval($_POST['dia']);
        $mes = intval($_POST['mes']);
        $ano = intval($_POST['ano']);

        if (checkdate($mes, $dia, $ano)) {
            echo "<p>A data <strong>$dia/$mes/$ano</strong> é válida ✅.</p>";
        } else {
            echo "<p>A data <strong>$dia/$mes/$ano</strong> é inválida ❌.</p>";
        }
    }
    ?>
</body>

</html>
