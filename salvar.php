<? 
require_once __DIR__ . '/config.php'; 
require_once __DIR__ . '/banco-dados/conexao.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST"){
    die("Acesso inválido");
    /* se o método recebidp é diferente de post, cancela o código */
}

$nome = trim($_POST["nome_prod_cadastrar"] ?? "");
$preco = trim($_POST["preco_cadastrar"] ?? "");

/* atribui os dados às variáreis */

if($nome === "" ){
    die("Dados inválidos. <a href='menu.php'>Voltar</a>");

}

try{
    $sql = " insert into produtos (nome, preco) values (:nome_prod_cadastrar, :preco_cadastrar)";
    $stmt = $pdo->prepare($sql);
    $stmt = execute([
        ":nome_prod_cadastrar" => nome_prod_cadastrar,
        ":preco_cadastrar" => preco_cadastrar,
    ]);
}