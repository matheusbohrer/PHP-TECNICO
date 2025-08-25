<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 08 - Contar Pares</title>
</head>

<body>
    <form method="post" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>

        <button type="submit" name="verificar_numero">Contar Pares</button>
    </form>

    <?php
    if (isset($_POST['verificar_numero'])) {
        $numero = $_POST['numero'];

        if ($numero > 0) {
           
            $quantidadePares = intdiv($numero, 2);

            echo "<p>Entre 1 e $numero existem <strong>$quantidadePares</strong> números pares.</p>";
        } else {
            echo "<p>Informe apenas números inteiros positivos.</p>";
        }
    }
    ?>
</body>

</html>
