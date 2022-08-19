-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Mar-2022 às 17:32
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_restaurante`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pratos`
--

CREATE TABLE `tb_pratos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `preco` float(6,2) NOT NULL,
  `calorias` int(11) NOT NULL,
  `destaque` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_pratos`
--

INSERT INTO `tb_pratos` (`id`, `codigo`, `nome`, `categoria`, `descricao`, `preco`, `calorias`, `destaque`) VALUES
(2, '540', 'Lasanha', 'prato-principal', 'Lasanha deliciosa', 50.00, 449, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_pratos`
--
ALTER TABLE `tb_pratos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_pratos`
--
ALTER TABLE `tb_pratos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
