<?php require_once __DIR__ . '/config.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body class="">
    <nav class="">
        <h1>Cadastrar produto</h1>

    <form action="salvar.php" method="POST">
        <!-- salvar.php é pra onde os dados serão enviados -->
        <label for="nome_prod_cadastrar">Nome:</label><br>
        <input type="text" id="nome_prod_cadastrar" name="nome_prod_cadastrar" required><br><br>

        <label for="preco_cadastrar">Preço:</label><br>
        <input type="number" id="preco_cadastrar" name="preco_cadastrar" required><br><br>

        <button type="submit">Salvar</button>
    </form>

    <p><a href="<?php echo url; ?>listar.php">Ver cadastros</a></p>
    </nav>
</body>
</html>