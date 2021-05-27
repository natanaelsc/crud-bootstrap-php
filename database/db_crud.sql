-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/05/2021 às 00:47
-- Versão do servidor: 10.4.18-MariaDB
-- Versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_crud`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cpf_cnpj` varchar(14) NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `hood` varchar(100) NOT NULL,
  `zip_code` int(8) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `phone` int(13) NOT NULL,
  `mobile` int(13) NOT NULL,
  `ie` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `customers`
--

INSERT INTO `customers` (`id`, `name`, `cpf_cnpj`, `birthdate`, `address`, `hood`, `zip_code`, `city`, `state`, `phone`, `mobile`, `ie`, `created`, `modified`) VALUES
(1, 'Fulano de Tal', '123.456.789-00', '1989-01-01', 'Rua da Web, 123', 'Internet', 1234568, 'Teste', 'Teste', 5555555, 55555555, 123456, '2016-05-24 00:00:00', '2021-05-27 15:49:42'),
(2, 'Fulano de Tal', '123.456.789-00', '1989-01-01', 'Rua da Web, 123', 'Internet', 1234568, 'Teste', 'Teste', 5555555, 55555555, 123456, '2016-05-24 00:00:00', '2016-05-24 00:00:00'),
(3, 'Fulano de Tal', '123.456.789-00', '1989-01-01', 'Rua da Web, 123', 'Internet', 1234568, 'Teste', 'Teste', 5555555, 55555555, 123456, '2016-05-24 00:00:00', '2016-05-24 00:00:00'),
(4, 'Fulano de Tal', '123.456.789-00', '1989-01-01', 'Rua da Web, 123', 'Internet', 1234568, 'Teste', 'Teste', 5555555, 55555555, 123456, '2016-05-24 00:00:00', '2016-05-24 00:00:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
