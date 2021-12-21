-- phpMyAdmin SQL Dump
-- https://www.phpmyadmin.net/
-- Host: localhost
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Estrutura da tabela `EMPRESTIMO`

CREATE TABLE `EMPRESTIMO` (
  `CPF` int(30) NOT NULL,
  `NOME` varchar(20) NOT NULL,
  `CREDITO` varchar(20) NOT NULL,
  `SPC` boolean (2) NOT NULL,
  `RENDA` float (20) NOT NULL,
  `PARCELAS` int(25) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `EMPRESTIMO`
--

INSERT INTO `EMPRESTIMO` (
    `CPF`, `NOME`, `CREDITO`, `SPC`, `RENDA`, `PARCELAS`
    ) VALUES
            (13289076421, 'ALESSANDA', 'SIM', 'S', '1400' , '5'),
            (21328907642, 'CLOTILDE' , 'SIM', 'N', '40000', '10'),
            (32132890764, 'JOAO'     , 'NAO', 'N', '7667' , '8'),
            (43213289076, 'CALIGULA' , 'NAO', 'S', '8800' , '4'),
            (54321328907, 'PEDRO'    , 'SIM', 'S', '65000', '2'),
            (65432132890, 'TOMAS'    , 'SIM', 'S', '44000', '1');

--
-- Índices para tabelas despejadas

-- Índices para tabela `emprestimo`
--
ALTER TABLE `EMPRESTIMO`
  ADD PRIMARY KEY (`CPF`);

--
-- AUTO_INCREMENT de tabela `EMPRESTIMO`
--
ALTER TABLE `EMPRESTIMO`
  MODIFY `CPF` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;