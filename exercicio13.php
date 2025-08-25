<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 13 - Celsius para Fahrenheit</title>
</head>

<body>
    <form method="post" action="">
        <label for="celsius">Digite a temperatura em Celsius:</label>
        <input type="number" id="celsius" name="celsius" step="0.1" required>

        <button type="submit" name="converter">Converter</button>
    </form>

    <?php
    if (isset($_POST['converter'])) {
        $celsius = $_POST['celsius'];
        $fahrenheit = ($celsius * 9/5) + 32;

        echo "<p>$celsius °C correspondem a <strong>$fahrenheit °F</strong>.</p>";
    }
    ?>
</body>

</html>
