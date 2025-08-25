<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 09 - Soma entre dois números</title>
</head>

<body>
    <form method="post" action="">
        <label for="numero1">Digite o primeiro número:</label>
        <input type="number" id="numero1" name="numero1" required>

        <label for="numero2">Digite o segundo número:</label>
        <input type="number" id="numero2" name="numero2" required>

        <button type="submit" name="calcular_soma">Calcular Soma</button>
    </form>

    <?php
    if (isset($_POST['calcular_soma'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];

        if ($numero1 != $numero2) {
         
            $menor = min($numero1, $numero2);
            $maior = max($numero1, $numero2);

            $soma = 0;
            for ($i = $menor; $i <= $maior; $i++) {
                $soma += $i;
            }

            echo "<p>A soma de todos os números entre $menor e $maior é: <strong>$soma</strong>.</p>";
        } else {
            echo "<p>Os números são iguais, a soma é: <strong>$numero1</strong>.</p>";
        }
    }
    ?>
</body>

</html>
