<?php

// Dados da conexão com o banco de dados
$host = 'dev.pedro.com';
$user = 'root';
$password = '';
$database = 'db_imobcronus';

// Conectar ao MySQL
$conn = new mysqli($host, $user, $password, $database);

// Verificar a conexão
if ($conn->connect_error) {
    $response = array('success' => false, 'message' => 'Erro na conexão com o banco de dados: ' . $conn->connect_error);
    echo json_encode($response);
    exit();
}

?>