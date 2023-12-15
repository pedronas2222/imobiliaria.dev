<?php

header('Content-Type: application/json');

// Receber dados do corpo da requisição
$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, true);

// Dados da conexão com o banco de dados
include"../../connect.php";

// Verificar se o CPF já existe
$cpf = $input['CPF'];
$checkExistenceCpfQuery = "SELECT COUNT(*) AS count FROM tb_Pessoa WHERE CPF = ?";
$stmtCpf = $conn->prepare($checkExistenceCpfQuery);
$stmtCpf->bind_param('s', $cpf);
$stmtCpf->execute();
$stmtCpf->bind_result($countCpf);
$stmtCpf->fetch();
$stmtCpf->close();

if ($countCpf > 0) {
    $response = array('success' => false, 'message' => 'Usuário com este CPF já existe.');
    echo json_encode($response);
    exit();
}

// Verificar se o Nome de Usuário já existe
$usuario = $input['Usuario'];
$checkExistenceUsuarioQuery = "SELECT COUNT(*) AS count FROM tb_Pessoa WHERE Usuario = ?";
$stmtUsuario = $conn->prepare($checkExistenceUsuarioQuery);
$stmtUsuario->bind_param('s', $usuario);
$stmtUsuario->execute();
$stmtUsuario->bind_result($countUsuario);
$stmtUsuario->fetch();
$stmtUsuario->close();

if ($countUsuario > 0) {
    $response = array('success' => false, 'message' => 'Usuário com este Nome de Usuário já existe.');
    echo json_encode($response);
    exit();
}

// Inserir dados no banco de dados
$insertQuery = "INSERT INTO tb_Pessoa (Nome, WhatsApp, Usuario, Senha, CPF) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($insertQuery);
$stmt->bind_param('sssss', $input['Nome'], $input['WhatsApp'], $input['Usuario'], $input['Senha'], $input['CPF']);
$result = $stmt->execute();
$stmt->close();

if ($result) {
    $response = array('success' => true, 'message' => 'Usuário cadastrado com sucesso!');
    echo json_encode($response);
} else {
    $response = array('success' => false, 'message' => 'Erro ao cadastrar usuário no banco de dados.');
    echo json_encode($response);
}

// Fechar a conexão com o MySQL
$conn->close();
