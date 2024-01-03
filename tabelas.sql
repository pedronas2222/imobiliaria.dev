tb_pessoa (nome da tabela)
-- Tabela para armazenar informações de pessoas
CREATE TABLE tb_Pessoa (
    PessoaID INT PRIMARY KEY AUTO_INCREMENT,
    Nome VARCHAR(50) NOT NULL,
    Usuario VARCHAR(50) NOT NULL,
    DataCadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    DataAlteracao TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CPF VARCHAR(11) UNIQUE NOT NULL,
    Senha VARCHAR(255) NOT NULL, -- Recomendado armazenar senhas com hash
    UsuarioAlteracao VARCHAR(50) DEFAULT NULL
);


-- Tabela para armazenar informações de endereços
CREATE TABLE tb_Endereco (
    EnderecoID INT PRIMARY KEY AUTO_INCREMENT,
    PessoaID INT,
    Logradouro VARCHAR(100),
    Numero VARCHAR(10),
    Bairro VARCHAR(50),
    Cidade VARCHAR(50),
    Estado VARCHAR(50),
    CEP VARCHAR(10),
    FOREIGN KEY (PessoaID) REFERENCES Pessoa(PessoaID)
);





CREATE TABLE Imovel (
    ImovelID INT PRIMARY KEY AUTO_INCREMENT,
    TipoImovel VARCHAR(50) NOT NULL,
    Endereco VARCHAR(255) NOT NULL,
    Bairro VARCHAR(100),
    Cidade VARCHAR(100) NOT NULL,
    Estado VARCHAR(50) NOT NULL,
    CEP VARCHAR(10),
    Dormitorios INT,
    Banheiros INT,
    VagasGaragem INT,
    AreaTotal DECIMAL(10, 2),
    ValorAluguel DECIMAL(10, 2),
    ValorVenda DECIMAL(10, 2),
    Descricao TEXT,
    DataCadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    DataAlteracao TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- tabela para subir as imagens
CREATE TABLE imagens (
    id INT PRIMARY KEY AUTO_INCREMENT,
    CodigoImovel INT,
    CodigoSindico INT,
    ChaveCadastro VARCHAR(255),
    nome_imagem1 VARCHAR(255),
    dados_imagem1 BLOB,
    nome_imagem2 VARCHAR(255),
    dados_imagem2 BLOB,
    nome_imagem3 VARCHAR(255),
    dados_imagem3 BLOB,
    nome_imagem4 VARCHAR(255),
    dados_imagem4 BLOB,
    nome_imagem5 VARCHAR(255),
    dados_imagem5 BLOB,
    nome_imagem6 VARCHAR(255),
    dados_imagem6 BLOB
);





-- explicação dos campos
ImovelID: Identificador único para cada imóvel.
TipoImovel: Tipo de imóvel (casa, apartamento, terreno, etc.).
Endereco: Endereço do imóvel.
Bairro: Bairro do imóvel.
Cidade: Cidade do imóvel.
Estado: Estado do imóvel.
CEP: Código de Endereçamento Postal do imóvel.
Dormitorios: Número de dormitórios no imóvel.
Banheiros: Número de banheiros no imóvel.
VagasGaragem: Número de vagas de garagem.
AreaTotal: Área total do imóvel em metros quadrados.
ValorAluguel: Valor do aluguel mensal do imóvel.
ValorVenda: Valor de venda do imóvel.
Descricao: Descrição detalhada do imóvel.
DataCadastro: Data e hora do cadastro do imóvel (preenchida automaticamente com a data/hora atual quando um novo imóvel é inserido).
DataAlteracao: Data e hora da última alteração nos dados do imóvel (atualizada automaticamente sempre que há uma alteração nos dados).