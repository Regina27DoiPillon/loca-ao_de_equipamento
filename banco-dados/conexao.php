<?php 
$host = "localhost";
$banco = "locacao-equipamentos";
$usuario = "root";
$senha = "";

try{
    //cria novo objeto pdo (cada objeto funciona para o respectivo arquivo)
    $pdo = new PDO(
        "mysql:host=$host;dbname=$banco;charset=utf8mb4",
        $usuario,
        $senha,
        [   PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
        //equivale ao setAtribute
    );
    
}catch(PDOException $e){
    die("Falha na conexão: " . $e->getMessage());
}