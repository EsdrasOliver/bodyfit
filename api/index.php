<?php

// Dados fictícios de um usuário
$usuario = [
    'id' => 1,
    'nome' => 'João Silva',
    'email' => 'joao@example.com'
];

// Transforma os dados do usuário em JSON e retorna
header('Content-Type: application/json');
echo json_encode($usuario);

?>
