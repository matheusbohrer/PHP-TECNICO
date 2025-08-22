<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5 - Número Amigo</title>
</head>

<body>
    <form method="post" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="calcular_numero">Calcular</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['calcular_numero'])) {
            $numero = $_POST['numero'];

            if ($numero > 0) { 
                $fatorial = 1;
                for ($i = 1; $i <= $numero; $i++) {
                    $fatorial *= $i;
                }
                echo "O fatorial de $numero é <strong>$fatorial</strong>.";
            } elseif ($numero == 0) {
                echo "O número é <strong>zero</strong>.<br>";
                echo "O fatorial de 0 é <strong>1</strong>.";
            } else {
                echo "O número $numero é <strong>negativo</strong>.<br>";
                echo "Não existe fatorial definido para números negativos.";
            }
        }
    }
    ?>
</body>

</html>