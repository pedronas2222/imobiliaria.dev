-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16/12/2023 às 16:27
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_imobcronus`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `imovel`
--

CREATE TABLE `imovel` (
  `ImovelID` int(11) NOT NULL,
  `TipoImovel` varchar(50) NOT NULL,
  `Endereco` varchar(255) NOT NULL,
  `Bairro` varchar(100) DEFAULT NULL,
  `Cidade` varchar(100) NOT NULL,
  `Estado` varchar(50) NOT NULL,
  `CEP` varchar(10) DEFAULT NULL,
  `Dormitorios` int(11) DEFAULT NULL,
  `Banheiros` int(11) DEFAULT NULL,
  `VagasGaragem` int(11) DEFAULT NULL,
  `AreaTotal` decimal(10,2) DEFAULT NULL,
  `ValorAluguel` decimal(10,2) DEFAULT NULL,
  `ValorVenda` decimal(10,2) DEFAULT NULL,
  `Descricao` text DEFAULT NULL,
  `DataCadastro` timestamp NOT NULL DEFAULT current_timestamp(),
  `DataAlteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `imovel`
--

INSERT INTO `imovel` (`ImovelID`, `TipoImovel`, `Endereco`, `Bairro`, `Cidade`, `Estado`, `CEP`, `Dormitorios`, `Banheiros`, `VagasGaragem`, `AreaTotal`, `ValorAluguel`, `ValorVenda`, `Descricao`, `DataCadastro`, `DataAlteracao`) VALUES
(1, 'Apartamento', 'Avenida Aoicalipse', 'Centro', 'Ourilândia do Norte', 'PA', '68390000', 2, 2, 1, 1200.00, 1500.00, 250000.00, '0', '2023-12-15 21:26:39', '2023-12-15 21:26:39'),
(2, 'Apartamento', 'Avenida Aoicalipse', 'Centro', 'Ourilândia do Norte', 'PA', '68390000', 2, 2, 1, 1200.00, 1500.00, 250000.00, 'Teste de desenvolvimento de software Innov Imobiliária - produto 001', '2023-12-15 21:28:04', '2023-12-15 21:28:04'),
(3, 'Apartamento', 'Avenida Aoicalipse', 'Centro', 'Ourilândia do Norte', 'PA', '68390000', 2, 2, 2, 1200.00, 1500.00, 250000.00, 'Teste de desenvolvimento de software Innov Imobiliária - produto 001', '2023-12-16 11:33:17', '2023-12-16 11:33:17'),
(4, 'Apartamento', 'Avenida Aoicalipse', 'Centro', 'Ourilândia do Norte', 'PA', '68390000', 2, 2, 1, 1200.00, 1500.00, 250000.00, 'Teste de desenvolvimento de software Innov Imobiliária - produto 001', '2023-12-16 11:45:45', '2023-12-16 11:45:45'),
(5, 'Apartamento', 'Avenida Aoicalipse', 'Centro', 'Ourilândia do Norte', 'PA', '68390000', 2, 2, 1, 1200.00, 1500.00, 250000.00, 'Teste de desenvolvimento de software Innov Imobiliária - produto 001', '2023-12-16 12:07:38', '2023-12-16 12:07:38');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_pessoa`
--

CREATE TABLE `tb_pessoa` (
  `PessoaID` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `WhatsApp` varchar(20) DEFAULT NULL,
  `DataCadastro` timestamp NOT NULL DEFAULT current_timestamp(),
  `DataAlteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `CPF` varchar(11) NOT NULL,
  `Senha` varchar(255) NOT NULL,
  `UsuarioAlteracao` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_pessoa`
--

INSERT INTO `tb_pessoa` (`PessoaID`, `Nome`, `Usuario`, `WhatsApp`, `DataCadastro`, `DataAlteracao`, `CPF`, `Senha`, `UsuarioAlteracao`) VALUES
(5, 'Aurora', 'aurora', '62991957693', '2023-12-14 19:17:10', '2023-12-14 19:17:10', '03078666298', '1020', NULL),
(6, 'Aurora', 'aurora1', '62991957693', '2023-12-14 19:17:55', '2023-12-14 19:17:55', '03078666299', '1020', NULL),
(7, 'Aurora', 'aurora2', '62991957693', '2023-12-14 19:19:17', '2023-12-14 19:19:17', '03078666288', 'MTAyMA==', NULL),
(8, 'Aurora', 'aurora77', '62991957693', '2023-12-14 19:24:17', '2023-12-14 19:24:17', '03078666277', '1020', NULL),
(9, 'Aurora', 'aurora11', '62991957693', '2023-12-14 19:25:53', '2023-12-14 19:25:53', '03078666211', 'MTAyMA==', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `imovel`
--
ALTER TABLE `imovel`
  ADD PRIMARY KEY (`ImovelID`);

--
-- Índices de tabela `tb_pessoa`
--
ALTER TABLE `tb_pessoa`
  ADD PRIMARY KEY (`PessoaID`),
  ADD UNIQUE KEY `CPF` (`CPF`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `imovel`
--
ALTER TABLE `imovel`
  MODIFY `ImovelID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_pessoa`
--
ALTER TABLE `tb_pessoa`
  MODIFY `PessoaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
