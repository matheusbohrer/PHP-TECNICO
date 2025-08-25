<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 18 - Maior Número</title>
</head>

<body>
    <form method="post" action="">
        <label for="num1">Digite o primeiro número:</label>
        <input type="number" id="num1" name="num1" required>

        <label for="num2">Digite o segundo número:</label>
        <input type="number" id="num2" name="num2" required>

        <label for="num3">Digite o terceiro número:</label>
        <input type="number" id="num3" name="num3" required>

        <button type="submit" name="verificar_maior">Verificar Maior</button>
    </form>

    <?php
    if (isset($_POST['verificar_maior'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        $maior = max($num1, $num2, $num3);

        echo "<p>O maior número entre $num1, $num2 e $num3 é <strong>$maior</strong>.</p>";
    }
    ?>
</body>

</html>
