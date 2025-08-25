<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 12 - Contar Vogais</title>
</head>

<body>
    <form method="post" action="">
        <label for="texto">Digite uma frase ou palavra:</label>
        <input type="text" id="texto" name="texto" required>

        <button type="submit" name="contar_vogais">Contar Vogais</button>
    </form>

    <?php
    if (isset($_POST['contar_vogais'])) {
        $texto = strtolower($_POST['texto']); 

        $contador = 0;
        for ($i = 0; $i < strlen($texto); $i++) {
            if (in_array($texto[$i], $vogais)) {
                $contador++;
            }
        }

        echo "<p>O texto digitado contém <strong>$contador</strong> vogais.</p>";
    }
    ?>
</body>

</html>
