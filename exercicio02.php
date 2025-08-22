<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 - Tabuada</title>
</head>
<body>
    <form method="post" action="">
        <label for="numero">Digite um número para calcular a tabuada:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="calcular_tabuada">Calcular</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(isset($_POST['calcular_tabuada'])) {
            $numero = $_POST['numero'];

            echo "<h3>Tabuada do $numero</h3>";
            echo "<ul>";
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<li>$numero x $i = $resultado</li>";
            }
            echo "</ul>";
        }
    }
    ?>
</body>
</html>