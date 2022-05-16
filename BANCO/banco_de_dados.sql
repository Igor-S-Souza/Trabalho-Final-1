-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Maio-2022 às 00:14
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banco_de_dados`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `entidade` varchar(30) DEFAULT NULL,
  `setor` varchar(30) DEFAULT NULL,
  `cargo` varchar(20) DEFAULT NULL,
  `contato` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `observacao` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `saida_solicitacao`
--

CREATE TABLE `saida_solicitacao` (
  `id_saida` int(11) NOT NULL,
  `protocolo` varchar(30) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `setor` varchar(30) NOT NULL,
  `recepcao` varchar(30) NOT NULL,
  `problema` varchar(200) NOT NULL,
  `horario` varchar(30) NOT NULL,
  `data` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacao`
--

CREATE TABLE `solicitacao` (
  `id_solicitacao` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `setor` varchar(30) DEFAULT NULL,
  `recepcao` varchar(30) DEFAULT NULL,
  `problema` varchar(200) DEFAULT NULL,
  `horario` varchar(30) DEFAULT NULL,
  `protocolo` varchar(10) DEFAULT NULL,
  `contato` varchar(30) DEFAULT NULL,
  `data1` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `status1`
--

CREATE TABLE `status1` (
  `id` int(11) NOT NULL,
  `protocolo` varchar(30) DEFAULT NULL,
  `data4` varchar(30) DEFAULT NULL,
  `horario4` varchar(30) DEFAULT NULL,
  `nome4` varchar(30) DEFAULT NULL,
  `contato4` varchar(30) DEFAULT NULL,
  `setor` varchar(30) DEFAULT NULL,
  `problema` varchar(200) DEFAULT NULL,
  `recepcao` varchar(30) DEFAULT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `status1`
--

INSERT INTO `status1` (`id`, `protocolo`, `data4`, `horario4`, `nome4`, `contato4`, `setor`, `problema`, `recepcao`, `status`) VALUES
(4, '89efbb', '16/05/2022', '18:51', 'Igor', '867574', 'ADM', '412421', 'Aguardando técnico...', 'Em andamento...');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_por_setor`
--

CREATE TABLE `usuario_por_setor` (
  `id` int(11) NOT NULL,
  `contato` varchar(30) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL,
  `login` varchar(20) DEFAULT NULL,
  `nome` varchar(40) DEFAULT NULL,
  `setor` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario_por_setor`
--

INSERT INTO `usuario_por_setor` (`id`, `contato`, `senha`, `login`, `nome`, `setor`) VALUES
(1, '867574', '123', 'igor-souza', 'Igor', 'ADM');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `saida_solicitacao`
--
ALTER TABLE `saida_solicitacao`
  ADD PRIMARY KEY (`id_saida`);

--
-- Índices para tabela `solicitacao`
--
ALTER TABLE `solicitacao`
  ADD PRIMARY KEY (`id_solicitacao`);

--
-- Índices para tabela `status1`
--
ALTER TABLE `status1`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario_por_setor`
--
ALTER TABLE `usuario_por_setor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `saida_solicitacao`
--
ALTER TABLE `saida_solicitacao`
  MODIFY `id_saida` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `solicitacao`
--
ALTER TABLE `solicitacao`
  MODIFY `id_solicitacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `status1`
--
ALTER TABLE `status1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuario_por_setor`
--
ALTER TABLE `usuario_por_setor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
