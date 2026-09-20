<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/conexao.php';

session_start();

// Só processa se o formulário foi realmente enviado via POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . url . 'logar.php');
    exit;
}

$email = trim($_POST['email'] ?? '');
$senha = trim($_POST['senha'] ?? '');

// Confere de novo no servidor 
if ($email === '' || $senha === '') {
    header('Location: ' . url . 'logar.php?erro=campos_vazios');
    exit;
}

$pdo = conectar();

// Busca o usuário pelo email
$stmt = $pdo->prepare("SELECT id_usuario, nome, email, senha, perfil FROM usuario WHERE email = :email");
$stmt->execute(['email' => $email]);
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

// Verifica se o usuário existe e se a senha confere
if ($usuario && $senha === $usuario['senha']) {

    // Guarda os dados do usuário na sessão, para usar em outras páginas
    $_SESSION['usuario_id']    = $usuario['id_usuario'];
    $_SESSION['usuario_nome']  = $usuario['nome'];
    $_SESSION['usuario_email'] = $usuario['email'];
    $_SESSION['usuario_perfil'] = $usuario['perfil'];

    // Login certo: redireciona para o painel/menu principal
    header('Location: ' . url . 'menu.php');
    exit;

} else {
    // Usuário não existe ou senha errada: volta pro login com aviso
    header('Location: ' . url . 'logar.php?erro=invalido');
    exit;
}