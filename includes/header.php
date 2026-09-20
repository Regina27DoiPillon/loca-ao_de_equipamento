<?php require_once __DIR__ . '/../config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo</title>
    <link rel="stylesheet" href="<?php echo url; ?>decoracao/style.css">
</head>
    <header class="flex row navbar-site space-between altura-centro">
    <img src="<?php echo url; ?>/midia/icons/logomarca.png" alt="logo" class="h80 circulo">
    <ul class="flex row gap50">
        <li class="lista">Categorias</li>
        <li class="lista">Agendamento</li>
        <li class="lista">Entre em Contato</li>
    </ul>
    <nav class="flex row">
        <input type="text" placeholder="Procurar algum item" class="barra-pesquisa">
        <button class="button" type="submit"><img src="https://cdn-icons-png.flaticon.com/512/3183/3183361.png" alt="procurar" class="h30"></button>
    </nav>
    
    <img src="https://cdn-icons-png.flaticon.com/512/711/711769.png" alt="perfil" class="h50 circulo">
    </header>
<body>