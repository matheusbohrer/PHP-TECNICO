<?php
// Inicia a sessão
session_start();


// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Usuário e senha fixos para exemplo
    $usuario_correto = 'admin';
    $senha_correta = '1234';


    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';


    if ($usuario === $usuario_correto && $senha === $senha_correta) {
        $_SESSION['logado'] = true;
        header('Location: painel.php');
        exit;
    } else {
        $erro = 'Usuário ou senha incorretos!';
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f2f2f2; }
        .login-container {
            width: 300px; margin: 100px auto; padding: 20px;
            background: #fff; border-radius: 8px; box-shadow: 0 0 10px #ccc;
        }
        input[type="text"], input[type="password"] {
            width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;
        }
        input[type="submit"] {
            width: 100%; padding: 8px; background: #007bff; color: #fff; border: none; border-radius: 4px;
            cursor: pointer;
        }
        .erro { color: red; }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php if (!empty($erro)): ?>
            <p class="erro"><?= htmlspecialchars($erro) ?></p>
        <?php endif; ?>
        <form method="post">
            <label for="usuario">Usuário:</label>
            <input type="text" id="usuario" name="usuario" required>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
            <input type="submit" value="Entrar">
        </form>
    </div>
</body>
</html>

