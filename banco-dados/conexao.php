<?php
require_once __DIR__ . '/config.php';
 
function conectar() {
    try {
        $pdo = new PDO(
            "mysql:host=" . bd-host . ";dbname=" . bd-nome . ";charset=utf8",
            bd-user,
            bd-senha
        );
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Erro na conexão: " . $e->getMessage());
    }
}