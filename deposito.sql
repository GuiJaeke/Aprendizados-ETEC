-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19/11/2024 às 20:59
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `deposito`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `aluguels`
--

CREATE TABLE `aluguels` (
  `id` int(11) NOT NULL,
  `inUse` tinyint(1) NOT NULL DEFAULT 0,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `ferramentaId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `aluguels`
--

INSERT INTO `aluguels` (`id`, `inUse`, `createdAt`, `updatedAt`, `userId`, `ferramentaId`) VALUES
(1, 1, '2024-11-19 17:05:52', '2024-11-19 17:05:52', 1, 1),
(2, 0, '2024-11-19 17:06:17', '2024-11-19 17:06:19', 1, 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `ferramenta`
--

CREATE TABLE `ferramenta` (
  `id` int(11) NOT NULL,
  `nome_fer` varchar(255) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `ferramenta`
--

INSERT INTO `ferramenta` (`id`, `nome_fer`, `createdAt`, `updatedAt`) VALUES
(1, 'furadeira', '2024-11-19 17:05:41', '2024-11-19 17:05:41'),
(2, 'furadeira', '2024-11-19 17:05:41', '2024-11-19 17:05:41'),
(3, 'furadeira', '2024-11-19 17:05:41', '2024-11-19 17:05:41');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome_user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `nome_user`, `password`, `createdAt`, `updatedAt`) VALUES
(1, 'tocao', '1234', '2024-11-19 17:05:27', '2024-11-19 17:05:27');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `aluguels`
--
ALTER TABLE `aluguels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `ferramentaId` (`ferramentaId`);

--
-- Índices de tabela `ferramenta`
--
ALTER TABLE `ferramenta`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluguels`
--
ALTER TABLE `aluguels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `ferramenta`
--
ALTER TABLE `ferramenta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `aluguels`
--
ALTER TABLE `aluguels`
  ADD CONSTRAINT `aluguels_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `aluguels_ibfk_2` FOREIGN KEY (`ferramentaId`) REFERENCES `ferramenta` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
