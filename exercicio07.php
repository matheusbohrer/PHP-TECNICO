<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07- Número Perfeito</title>
</head>

<body>
    <form method="post" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>

        <button type="submit" name="verificar_numero">Verificar</button>
    </form>

    <?php
    function divisoresProprios($num)
    {
        $divs = [];
        for ($i = 1; $i < $num; $i++) { 
            if ($num % $i == 0) {
                $divs[] = $i;
            }
        }
        return $divs;
    }

    if (isset($_POST['verificar_numero'])) {
        $numero = $_POST['numero'];

        if ($numero > 0) {
            $divs = divisoresProprios($numero);
            $soma = array_sum($divs);

            echo "<p>Divisores próprios de $numero: " . implode(", ", $divs) . " (soma = $soma)</p>";

            if ($soma == $numero) {
                echo "<p>✅ O número $numero é <strong>perfeito</strong>.</p>";
            } else {
                echo "<p>❌ O número $numero <strong>não é perfeito</strong>.</p>";
            }
        } else {
            echo "<p>Informe apenas números inteiros positivos.</p>";
        }
    }
    ?>
</body>

</html>
