<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6 - Divisores de um Número</title>
</head>

<body>
    <form method="post" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>

        <button type="submit" name="calcular_numero">Mostrar Divisores</button>
    </form>

    <?php
    function divisores($num)
    {
        $divs = [];
        for ($i = 1; $i <= $num; $i++) {
            if ($num % $i == 0) {
                $divs[] = $i;
            }
        }
        return $divs;
    }

    if (isset($_POST['calcular_numero'])) {
        $numero = $_POST['numero'];

        if ($numero > 0) {
            $divs = divisores($numero);
            echo "<p>Os divisores de $numero são: " . implode(", ", $divs) . ".</p>";
        } else {
            echo "<p>Informe apenas números inteiros positivos.</p>";
        }
    }
    ?>
</body>

</html>
