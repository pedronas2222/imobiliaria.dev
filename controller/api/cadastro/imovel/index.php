<?php
header('Content-Type: application/json');

// Receber dados do corpo da requisição
$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, true);

// Conectar ao MySQL
include"../../conn.php";


// Inserir dados no banco de dados
$insertQuery = "INSERT INTO Imovel (TipoImovel, Endereco, Bairro, Cidade, Estado, CEP, Dormitorios, Banheiros, VagasGaragem, AreaTotal, ValorAluguel, ValorVenda, Descricao) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($insertQuery);
$stmt->bind_param('ssssssiiiddds', 
    $input['TipoImovel'],
    $input['Endereco'],
    $input['Bairro'],
    $input['Cidade'],
    $input['Estado'],
    $input['CEP'],
    $input['Dormitorios'],
    $input['Banheiros'],
    $input['VagasGaragem'],
    $input['AreaTotal'],
    $input['ValorAluguel'],
    $input['ValorVenda'],
    $input['Descricao']
);

$result = $stmt->execute();
$stmt->close();

if ($result) {
    $response = array('success' => true, 'message' => 'Imóvel cadastrado com sucesso!');
    echo json_encode($response);
} else {
    $response = array('success' => false, 'message' => 'Erro ao cadastrar imóvel no banco de dados.');
    echo json_encode($response);
}

// Fechar a conexão com o MySQL
$conn->close();
?>
