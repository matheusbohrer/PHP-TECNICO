<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 15 - Calcular IMC</title>
</head>

<body>
    <form method="post" action="">
        <label for="peso">Digite o peso (kg):</label>
        <input type="number" id="peso" name="peso" step="0.1" required>

        <label for="altura">Digite a altura (m):</label>
        <input type="number" id="altura" name="altura" step="0.01" required>

        <button type="submit" name="calcular_imc">Calcular IMC</button>
    </form>

    <?php
    if (isset($_POST['calcular_imc'])) {
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        if ($peso > 0 && $altura > 0) {
            $imc = $peso / ($altura * $altura);
            $imcFormatado = number_format($imc, 2);

            if ($imc < 18.5) {
                $categoria = "Abaixo do peso";
            } elseif ($imc < 25) {
                $categoria = "Peso normal";
            } elseif ($imc < 30) {
                $categoria = "Sobrepeso";
            } elseif ($imc < 35) {
                $categoria = "Obesidade grau I";
            } elseif ($imc < 40) {
                $categoria = "Obesidade grau II";
            } else {
                $categoria = "Obesidade grau III";
            }

            echo "<p>Seu IMC é <strong>$imcFormatado</strong>. Categoria: <strong>$categoria</strong>.</p>";
        } else {
            echo "<p>Informe valores válidos de peso e altura.</p>";
        }
    }
    ?>
</body>

</html>
