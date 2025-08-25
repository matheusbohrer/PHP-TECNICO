<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10 - Sequência de Fibonacci</title>
</head>

<body>
    <form method="post" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>

        <button type="submit" name="gerar_fibonacci">Gerar Sequência</button>
    </form>

    <?php
    if (isset($_POST['gerar_fibonacci'])) {
        $limite = $_POST['numero'];

        if ($limite >= 0) {
            $fibonacci = [0, 1];
            $i = 2;

            while (true) {
                $proximo = $fibonacci[$i - 1] + $fibonacci[$i - 2];
                if ($proximo > $limite) {
                    break;
                }
                $fibonacci[] = $proximo;
                $i++;
            }

            echo "<p>Sequência de Fibonacci até $limite: " . implode(", ", $fibonacci) . "</p>";
        } else {
            echo "<p>Informe apenas números inteiros positivos.</p>";
        }
    }
    ?>
</body>

</html>
