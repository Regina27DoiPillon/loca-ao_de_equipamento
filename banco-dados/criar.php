<?php
$host = "localhost";
$usuario = "root";
$senha = "";

//execução de tentativa
try{
    //PDO é uma classe nativa do php q sabe conversar com o banco de dados.
    //O new cria o objeto, e o $pdo é a variável que guarda esse objeto.
    $pdo = new PDO("mysql:host=$host;charset=utf8mb4", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //"chame este método do objeto"
    //setAttribute recebe duas coisas: qual configuração mudar (ATTR_ERRMODE, o modo de tratar erros) e para qual valor (ERRMODE_EXCEPTION, lançar exceções).
    $pdo->exec("create database if not exists locacao_equipamentos;");
    //o pdo executa a frase no banco
    $pdo->exec("use locacao_equipamentos;");


    $pdo->exec("create table if not exists produtos(
    id int auto_increment primary key,
    nome varchar(250) not null,
    preco decimal(250,2) not null,
    inserido_em timestamp default current_timestamp
    );");
    echo"Banco de tabela criados com sucesso";

}catch(PDOException $e){
    echo""Error: " . $e->getMessage(); //aqui é onde mostra o erro

    /* //configura o comportamento do objeto que já existe. O -> significa "chame este método do objeto". setAttribute recebe duas coisas: qual configuração mudar (ATTR_ERRMODE, o modo de tratar erros) e para qual valor (ERRMODE_EXCEPTION, lançar exceções). */
}