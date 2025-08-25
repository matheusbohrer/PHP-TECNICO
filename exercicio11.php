<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11 - Verificar Palíndromo</title>
</head>

<body>
    <form method="post" action="">
        <label for="palavra">Digite uma palavra:</label>
        <input type="text" id="palavra" name="palavra" required>

        <button type="submit" name="verificar_palindromo">Verificar</button>
    </form>

    <?php
    if (isset($_POST['verificar_palindromo'])) {
        $palavra = strtolower(trim($_POST['palavra'])); 
        $invertida = strrev($palavra);

        if ($palavra === $invertida) {
            echo "<p>A palavra <strong>$palavra</strong> é um palíndromo.</p>";
        } else {
            echo "<p>A palavra <strong>$palavra</strong> não é um palíndromo.</p>";
        }
    }
    ?>
</body>

</html>
