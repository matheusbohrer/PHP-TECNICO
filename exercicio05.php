<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5 - Número Amigo</title>
</head>

<body>
    <form method="post" action="">
        <label for="numero1">Digite o primeiro número:</label>
        <input type="number" id="numero1" name="numero1" required>

        <label for="numero2">Digite o segundo número:</label>
        <input type="number" id="numero2" name="numero2" required>

        <button type="submit" name="calcular_numero">Calcular</button>
    </form>

    <?php
    function somaDivisores($num)
    {
        $soma = 0;
        for ($i = 1; $i <= $num / 2; $i++) {
            if ($num % $i == 0) {
                $soma += $i;
            }
        }
        return $soma;
    }

    if (isset($_POST['calcular_numero'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];

        if ($numero1 > 0 && $numero2 > 0) {
            $soma1 = somaDivisores($numero1);
            $soma2 = somaDivisores($numero2);

            if ($soma1 == $numero2 && $soma2 == $numero1) {
                echo "Os números $numero1 e $numero2 são <strong>números amigos</strong>.";
            } else {
                echo "Os números $numero1 e $numero2 <strong>não são números amigos</strong>.";
            }
        } else {
            echo "Informe apenas números inteiros positivos.";
        }
    }
    ?>
</body>

</html>
