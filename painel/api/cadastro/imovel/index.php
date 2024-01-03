<?php
header('Content-Type: application/json');

// Receber dados do corpo da requisição
$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, true);

// Conectar ao MySQL
include"../../conn.php";


// Inserir dados no banco de dados
$insertQuery = "INSERT INTO Imovel (TipoImovel, Endereco, Bairro, Cidade, Estado, CEP, Dormitorios, 
Banheiros, VagasGaragem, AreaTotal, ValorAluguel, ValorVenda, Descricao, Proprietario, TipoAnuncio) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($insertQuery);
$stmt->bind_param('ssssssiiidddsis', 
    $input['TipoImovel'],   // Tipo do Imóvel, se ( Apartamento, casa, terreno).
    $input['Endereco'],     // Rua e outras informações do endereço.
    $input['Bairro'],       // Bairro onde o imóvel está sendo anunciado.
    $input['Cidade'],       // Cidade onde o imóvel está sendo anunciado.
    $input['Estado'],       // Estado onde o imóvel será anunciado.
    $input['CEP'],          // CEP da rua ou da cidade, caso for cidade de CEP único.
    $input['Dormitorios'],  // Total de quartos.
    $input['Banheiros'],    // Banheiros, contando com suite.
    $input['VagasGaragem'], // Vagas da garagem, contando com moto e carro.
    $input['AreaTotal'],    // Área total em metros quadrados.
    $input['ValorAluguel'], // Valor do aluguel, se estiver sendo anunciado para aluguel.
    $input['ValorVenda'],   // Valor de venda, se o imóvel estiver sendo anunciado para vender.
    $input['Descricao'],    // Descrição do imóvel (digitação livre, para falar sobre o imóvel).
    $input['Proprietario'], // Dono do Imovel.
    $input['TipoAnuncio']   // Tipo de anúncio se (Aluguel, Venda).
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
