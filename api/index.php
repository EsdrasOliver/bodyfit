<?php

$host = 'localhost';  // Ou o endereço IP do servidor local
$dbname = 'usuarios';
$username = 'root';  // Substitua pelo seu nome de usuário do banco de dados
$password = '';   // Substitua pela sua senha do banco de dados

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

    // Defina o atributo PDO para lançar exceções em erros
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Preparar e executar a consulta SELECT
    $stmt = $pdo->query("SELECT * FROM new_table");

    // Recuperar os resultados como objetos
    $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);

    // Transformar os resultados em JSON
    $jsonResultados = json_encode($resultados);

    // Exibir o JSON
    header('Content-Type: application/json');
    echo $jsonResultados;
} catch (PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
}

?>
