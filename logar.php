<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logar</title>
    <link rel="stylesheet" href="<?php echo url; ?>decoracao/style.css">
</head>
<body class="flex altura-centro meio-centro column">
    <h3>Entre na sua conta!</h3>
    <form class="flex column altura-centro meio-centro login gap20" action="<?php echo url; ?>processar_login.php" method="POST" id="logar-cliente">
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
            <label for="email_login">Email:</label>
            <input type="email" name="email_login" id="email_login">
        </div>

        <div class="flex column">
            <label for="senha_login">Senha:</label>
            <input type="password" name="senha_login" id="senha_login">
        </div>

        <button type="submit">Entrar</button>
</form>
            <div class="flex row gap10">
                <p>Não tem uma conta?</p><a href="<?php echo url; ?>cadastrar.php"> Crie aqui</a>
            </div>

    <script src="<?php echo url; ?>decoracao/javascript.js"></script>
</body>
</html>