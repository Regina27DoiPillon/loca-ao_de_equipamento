<?php
require_once __DIR__ . '/config.php';
 
try {
    // Conecta sem selecionar banco ainda, para poder criá-lo
    $pdo = new PDO("mysql:host=" . <bd-host></bd-host> . ";charset=utf8", bd-user, bd-senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    // Cria o banco de dados se não existir
    $pdo->exec("CREATE DATABASE IF NOT EXISTS " . bd-nome);
    $pdo->exec("USE " . bd-nome);
 
    // Tabela usuário
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS usuario (
            id_usuario INT PRIMARY KEY AUTO_INCREMENT,
            nome VARCHAR(120) NOT NULL,
            email VARCHAR(150) UNIQUE NOT NULL,
            senha VARCHAR(255) NOT NULL,
            perfil VARCHAR(30) NOT NULL
        )
    ");
 
    // Tabela categoria
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS categoria (
            id_categoria INT PRIMARY KEY AUTO_INCREMENT,
            nome VARCHAR(100) NOT NULL,
            descricao VARCHAR(255)
        )
    ");
 
    // Tabela equipamento
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS equipamento (
            id_equipamento INT PRIMARY KEY AUTO_INCREMENT,
            nome VARCHAR(120) NOT NULL,
            descricao VARCHAR(255),
            status VARCHAR(30),
            id_categoria INT NOT NULL,
            FOREIGN KEY (id_categoria) REFERENCES categoria(id_categoria)
        )
    ");
 
    // Tabela agendamento
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS agendamento (
            id_agendamento INT PRIMARY KEY AUTO_INCREMENT,
            data_inicio DATE NOT NULL,
            data_fim DATE NOT NULL,
            status VARCHAR(30),
            id_usuario INT NOT NULL,
            id_equipamento INT NOT NULL,
            FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario),
            FOREIGN KEY (id_equipamento) REFERENCES equipamento(id_equipamento)
        )
    ");
 
    // Tabela EMPRESTIMO
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS emprestimo (
            id_emprestimo INT PRIMARY KEY AUTO_INCREMENT,
            data_retirada DATE NOT NULL,
            data_prevista_devolucao DATE NOT NULL,
            data_devolucao DATE,
            status VARCHAR(30),
            id_usuario INT NOT NULL,
            id_equipamento INT NOT NULL,
            FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario),
            FOREIGN KEY (id_equipamento) REFERENCES equipamento(id_equipamento)
        )
    ");
 
    // Tabela manutenção
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS manutencao (
            id_manutencao INT PRIMARY KEY AUTO_INCREMENT,
            data_manutencao DATE NOT NULL,
            descricao VARCHAR(255),
            tipo VARCHAR(50),
            status VARCHAR(30),
            id_equipamento INT NOT NULL,
            FOREIGN KEY (id_equipamento) REFERENCES equipamento(id_equipamento)
        )
    ");
 
    echo "Sucesso!";
 
} catch (PDOException $e) {
    die("Erro ao criar o banco: " . $e->getMessage());
}