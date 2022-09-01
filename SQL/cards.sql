-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Jun-2022 às 05:03
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cards`
--
CREATE DATABASE IF NOT EXISTS `cards` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cards`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `carta`
--

CREATE TABLE `carta` (
  `id_carta` int(11) NOT NULL,
  `tipo` int(1) NOT NULL,
  `repete` tinyint(1) NOT NULL,
  `classe` varchar(20) NOT NULL,
  `subclasse` varchar(20) DEFAULT NULL,
  `descreve` varchar(255) DEFAULT NULL,
  `atk` int(4) NOT NULL,
  `def` int(4) NOT NULL,
  `nome` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `carta`
--

INSERT INTO `carta` (`id_carta`, `tipo`, `repete`, `classe`, `subclasse`, `descreve`, `atk`, `def`, `nome`) VALUES
(2, 2, 1, 'Criatura', 'Hostil', 'A aranha Jockey é a rara aparição de uma aranha que está sendo montado por um esqueleto. Uma aranha Jockey tem 1% de chance de aparecer. É o mob mais raro encontrado', 4500, 4200, 'Aranha Jockey'),
(5, 1, 0, 'Dragão', 'Adulto', NULL, 9000, 8000, 'Dragão Gelo'),
(6, 3, 0, 'Curiosidade', 'Lorem ipsum', 'O carvão é um dos materiais mais fáceis de serem encontrados no subsolo, então não haverá problemas com falta de tochas.', 3330, 3250, 'Morcegos'),
(7, 2, 1, 'Criatura', 'Hostil', 'Com o Creeper tem de se tomar muito cuidado, muito mesmo, porque ele tem um poder de explosão imenso e se isso acontecer perto de sua casa não será muito bom.', 4500, 2000, 'Crepper');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carta`
--
ALTER TABLE `carta`
  ADD PRIMARY KEY (`id_carta`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carta`
--
ALTER TABLE `carta`
  MODIFY `id_carta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
