<?php require_once __DIR__ . '/config.php'; 
require "conexao.php"

//compara o tipo de método. O único método que passa é o post.
//se não der certo, acontece a morte instantânea do arquivo.
if($_SERVER["REQUEST_METHOD"] !== "POST"){
    die("Acesso inválido.");
}



?>
