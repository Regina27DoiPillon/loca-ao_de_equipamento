<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logar</title>
    <link rel="stylesheet" href="<?php echo url; ?>decoracao/style.css">
</head>
<body class="flex altura-centro meio-centro">
    <form class="flex column altura-centro meio-centro login gap20" action="<?php echo url; ?>processar_login.php" method="POST">
        <?php if (isset($_GET['erro'])): ?>
            <p class="mensagem-erro">
                <?php
                    if ($_GET['erro'] === 'campos_vazios') {
                        echo 'Preencha todos os campos.';
                    } else {
                        echo 'Email ou senha inválidos.';
                    }
                ?>
            </p>
        <?php endif; ?>
        
        <div class="flex column">
            <label for="email-login">Email:</label>
            <input type="email" name="email-login" id="email-login">
        </div>

        <div class="flex column">
            <label for="senha-login">Senha:</label>
            <input type="password" name="senha-login" id="senha-login">
        </div>

        <button type="submit">Entrar</button>
</form>
    <script src="<?php echo url; ?>decoracao/javascript.js"></script>
</body>
</html>