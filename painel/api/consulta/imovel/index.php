<?php

    // Configuração do banco de dados
    include"../../conn.php";
    
    // Consulta SQL
    $query = 'SELECT * FROM Imovel';
    
    // Executar a consulta
    $resultado = $conn->query($query);
    
    // Verificar se a consulta foi bem-sucedida
    if ($resultado) {
        // Criar uma array para armazenar os resultados
        $dadosDosImoveis = array();
    
        // Iterar sobre os resultados
        while ($imovel = $resultado->fetch_assoc()) {
            // Adicionar cada imóvel à array
            $dadosDosImoveis[] = $imovel;
        }
    
        // Retornar os dados como JSON
        header('Content-Type: application/json');
        echo json_encode($dadosDosImoveis);
    } else {
        echo 'Erro na consulta: ' . $conn->error;
    }
    
    // Fechar a conexão
    $conn->close();
?>
    