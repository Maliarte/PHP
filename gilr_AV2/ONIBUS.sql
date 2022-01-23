-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 16-Dez-2021 às 08:27
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `3DAW`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ONIBUS`
--

CREATE TABLE `ONIBUS` (
  `ID` int(3) NOT NULL,
  `MARCA` varchar(20) NOT NULL,
  `MODELO` varchar(20) NOT NULL,
  `ASSENTOS` int(2) NOT NULL,
  `BANHEIRO` char(1) NOT NULL,
  `AR_CONDICIONADO` char(1) NOT NULL,
  `CHASSI` varchar(20) NOT NULL,
  `PLACA` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ONIBUS`
--

INSERT INTO `ONIBUS` (`ID`, `MARCA`, `MODELO`, `ASSENTOS`, `BANHEIRO`, `AR_CONDICIONADO`, `CHASSI`, `PLACA`) VALUES
(1, 'SCANIA', 'AERO CONFORT', 32, 'S', 'S', '22332BR663549', 'LCY7A05'),
(2, 'MERCEDES BENZ', 'ARRIZO ULTRA', 28, 'N', 'S', '65564BR223172', 'MAD8A65'),
(3, 'SCANIA', 'SUPERBUS', 23, 'N', 'S', '76659BR98887', 'DAW3F10'),
(4, 'VOLVO', 'SUPER STAR', 32, 'S', 'S', '44657BR884759', 'FAZ3M99'),
(5, 'VOLVO', 'SUPER STAR', 32, 'S', 'S', '44657BR884759', 'FAZ3M99'),
(6, 'VOLVO', 'SUPER STAR', 32, 'S', 'S', '44657BR884759', 'FAZ3M99');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ONIBUS`
--
ALTER TABLE `ONIBUS`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ONIBUS`
--
ALTER TABLE `ONIBUS`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;