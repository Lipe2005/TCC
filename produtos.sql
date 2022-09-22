-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Set-2022 às 16:25
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(100) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `marca`, `tipo`) VALUES
(1, 'integralmedica', 'whey'),
(2, 'max titanium', 'whey'),
(3, 'probiotica', 'whey'),
(4, 'black skull', 'whey'),
(5, 'athletica', 'whey'),
(6, 'optimun', 'whey'),
(7, 'integralmedica', 'creatina'),
(8, 'max titanium', 'creatina'),
(9, 'probiotica', 'creatina'),
(10, 'black skull', 'creatina'),
(11, 'athletica', 'creatina'),
(12, 'optimun', 'creatina'),
(13, 'integralmedica', 'glutamina'),
(14, 'max titanium', 'glutamina'),
(15, 'probiotica', 'glutamina'),
(16, 'black skull', 'glutamina'),
(17, 'athletica', 'glutamina'),
(18, 'optimun', 'glutamina'),
(19, 'integralmedica', 'BCAA'),
(20, 'max titanium', 'BCAA'),
(21, 'probiotica', 'BCAA'),
(22, 'black skull', 'BCAA'),
(23, 'athletica', 'BCAA'),
(24, 'optimun', 'BCAA'),
(25, 'integralmedica', 'barra de proteina'),
(26, 'max titanium', 'barra de proteina'),
(27, 'probiotica', 'barra de proteina'),
(28, 'black skull', 'barra de proteina'),
(29, 'athletica', 'barra de proteina'),
(30, 'optimun', 'barra de proteina'),
(26, 'max titanium', 'barra de proteina'),
(27, 'probiotica', 'barra de proteina'),
(28, 'black skull', 'barra de proteina'),
(29, 'athletica', 'barra de proteina'),
(30, 'optimun', 'barra de proteina'),
(31, 'integralmedica', 'Multivitamínico'),
(32, 'max titanium', 'Multivitamínico'),
(33, 'probiotica', 'Multivitamínico'),
(34, 'black skull', 'Multivitamínico'),
(35, 'athletica', 'Multivitamínico'),
(36, 'optimun', 'Multivitamínico'),
(37, 'integralmedica', 'ômega 3'),
(38, 'max titanium', 'ômega 3'),
(39, 'probiotica', 'ômega 3'),
(40, 'black skull', 'ômega 3'),
(40, 'black skull', 'ômega 3'),
(41, 'athletica', 'ômega 3'),
(42, 'optimun', 'ômega 3'),
(43, 'integralmedica', 'Colágeno'),
(44, 'max titanium', 'Colágeno'),
(45, 'probiotica', 'Colágeno'),
(46, 'black skull', 'Colágeno'),
(47, 'athletica', 'Colágeno'),
(48, 'optimun', 'Colágeno'),
(49, 'integralmedica', 'carbroidato'),
(50, 'max titanium', 'carbroidato'),
(51, 'probiotica', 'carbroidato'),
(52, 'black skull', 'carbroidato'),
(53, 'athletica', 'carbroidato'),
(54, 'optimun', 'carbroidato');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
