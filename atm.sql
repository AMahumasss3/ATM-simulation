-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2022 at 05:41 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atm`
--

-- --------------------------------------------------------

--
-- Table structure for table `credelec`
--

CREATE TABLE `credelec` (
  `id` int(11) NOT NULL,
  `contador` varchar(40) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `valor` double NOT NULL,
  `codigo_recarga` varchar(40) NOT NULL,
  `conta` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credelec`
--

INSERT INTO `credelec` (`id`, `contador`, `nome`, `valor`, `codigo_recarga`, `conta`) VALUES
(3, '1111233333', '123456789321', 600, '0', '110102048342'),
(4, '11010101010', '123456789321', 500, '0', '110102048342'),
(5, '820000', '123456789321', 200, '0', '110102048342'),
(8, '1234555', '123456789321', 450000, '0', '110102048342'),
(12, '097654332', '123456789321', 140, '0', '110102048342'),
(13, '12345667899', '123456789321', 5, '0', '110102048342'),
(14, '1223934945', '123456789321', 400, '0', '110102048342'),
(15, '1102334456', '123456789321', 500, '0', '110102048342'),
(16, '11100924444', 'nome Contador', 5000, '8952466584125424', '110102048342'),
(17, '123456778123', 'nome Contador', 500, '0568155676221811', '849551775'),
(18, '123444444444', 'nome Contador', 500, '8509984011274408', '849551775'),
(19, '123444444444', 'nome Contador', 1000, '6766523245980708', '849551775');

-- --------------------------------------------------------

--
-- Table structure for table `credito`
--

CREATE TABLE `credito` (
  `id` int(11) NOT NULL,
  `valor` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `Operadora` enum('TMCEL','VODACOM','MOVITEL','') NOT NULL,
  `conta` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credito`
--

INSERT INTO `credito` (`id`, `valor`, `codigo`, `telefone`, `Operadora`, `conta`) VALUES
(1, 500, 2147483647, '820321234', 'TMCEL', '110102048342'),
(2, 500, 2147483647, '820532123', 'TMCEL', '110102048342'),
(3, 300, 2147483647, '820110441', 'TMCEL', '110102048342'),
(4, 500, 2147483647, '8293212111', 'TMCEL', '110102048342'),
(5, 600, 2147483647, '82667890', 'TMCEL', '110102048342'),
(6, 500, 2147483647, '849551775', 'TMCEL', '110102048342'),
(7, 500, 2147483647, '879308110', 'TMCEL', '110102048342'),
(8, 10, 2147483647, '827110470', 'TMCEL', '110102048342'),
(9, 500, 2147483647, '879531024', 'TMCEL', '110102048342'),
(10, 100, 2147483647, '50', 'TMCEL', '110102048342'),
(11, 100, 2147483647, '849551775', 'TMCEL', '110102048342'),
(12, 1000, 2147483647, '848875822', 'TMCEL', '110102048342'),
(13, 10000, 2147483647, '848875822', 'TMCEL', '110102048342'),
(14, 100, 2147483647, '848875822', 'TMCEL', '110102048342'),
(15, 100, 2147483647, '848875822', 'TMCEL', '110102048342'),
(16, 2000, 2147483647, '82558578', 'TMCEL', '110102048342'),
(17, 150, 2147483647, '836968596', 'TMCEL', '110102048342'),
(18, 100, 2147483647, '8685978458', 'TMCEL', '110102048342'),
(19, 1000, 2147483647, '830921293', 'TMCEL', '110102048342'),
(20, 500, 2147483647, '840555122', 'TMCEL', '110102048342'),
(21, 500, 2147483647, '832293933', 'TMCEL', '110102048342'),
(22, 500, 2147483647, '879021234', 'TMCEL', '110102048342'),
(23, 300, 2147483647, '874012345', 'TMCEL', '110102048342'),
(24, 300, 2147483647, '874012345', 'TMCEL', '110102048342'),
(25, 300, 2147483647, '874012345', 'TMCEL', '110102048342'),
(26, 300, 2147483647, '864042123', 'TMCEL', '110102048342'),
(27, 800, 2147483647, '879865467', 'TMCEL', '110102048342'),
(28, 800, 2147483647, '879865467', 'TMCEL', '110102048342'),
(29, 500, 2147483647, '874901233', 'TMCEL', '110102048342'),
(30, 500, 2147483647, '840212845', 'TMCEL', '849551775'),
(31, 500, 2147483647, '840212845', 'TMCEL', '849551775'),
(32, 500, 2147483647, '829832393', 'TMCEL', '849551775'),
(33, 500, 2147483647, '829832393', 'TMCEL', '849551775'),
(34, 500, 2147483647, '874922773', 'TMCEL', '849551775'),
(35, 500, 2147483647, '874922773', 'TMCEL', '849551775'),
(36, 500, 2147483647, '874922773', 'TMCEL', '849551775'),
(37, 500, 2147483647, '874922773', 'TMCEL', '849551775'),
(38, 500, 2147483647, '874922773', 'TMCEL', '849551775'),
(39, 500, 2147483647, '874922773', 'TMCEL', '849551775'),
(40, 500, 2147483647, '874922773', 'TMCEL', '849551775'),
(41, 500, 2147483647, '849201239', 'TMCEL', '849551775'),
(42, 500, 2147483647, '849201239', 'TMCEL', '849551775'),
(43, 1000, 2147483647, '831923123', 'TMCEL', '849551775'),
(44, 50, 2147483647, '879020332', 'TMCEL', '849551775');

-- --------------------------------------------------------

--
-- Table structure for table `movimento`
--

CREATE TABLE `movimento` (
  `id` int(11) NOT NULL,
  `nome` enum('Compra Credelec','Compra Credito','Levantamento','') NOT NULL,
  `descricao` text NOT NULL,
  `valor` double NOT NULL,
  `conta` varchar(20) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movimento`
--

INSERT INTO `movimento` (`id`, `nome`, `descricao`, `valor`, `conta`, `data`) VALUES
(1, 'Compra Credito', '', 500, '110102048342', '2022-05-19 20:43:58'),
(2, 'Compra Credelec', '', 500, '110102048342', '2022-05-19 20:43:58'),
(3, 'Compra Credelec', '', 9000, '110102048342', '2022-05-19 20:43:58'),
(4, 'Compra Credito', '', 500, '110102048342', '2022-05-19 20:43:58'),
(5, 'Compra Credelec', '', 600, '110102048342', '2022-05-19 20:43:58'),
(6, 'Compra Credito', '', 300, '110102048342', '2022-05-19 20:43:58'),
(7, 'Compra Credelec', '', 500, '110102048342', '2022-05-19 20:43:58'),
(8, 'Compra Credito', '', 500, '110102048342', '2022-05-19 20:43:58'),
(9, 'Compra Credito', '', 600, '110102048342', '2022-05-19 20:43:58'),
(10, 'Compra Credelec', '', 200, '110102048342', '2022-05-19 20:43:58'),
(13, 'Compra Credelec', '', 450000, '110102048342', '2022-05-19 20:43:58'),
(17, 'Compra Credito', '', 500, '110102048342', '2022-05-19 20:43:58'),
(18, 'Compra Credito', '', 500, '110102048342', '2022-05-19 20:43:58'),
(19, 'Levantamento', '', 6000, '110102048342', '2022-05-19 20:43:58'),
(20, 'Levantamento', '', 500, '110102048342', '2022-05-19 20:43:58'),
(21, 'Levantamento', '', 500, '110102048342', '2022-05-19 20:43:58'),
(22, 'Levantamento', '', 100, '110102048342', '2022-05-19 20:43:58'),
(23, 'Compra Credito', '', 10, '110102048342', '2022-05-19 20:43:58'),
(24, 'Compra Credelec', '', 140, '110102048342', '2022-05-19 20:43:58'),
(25, 'Compra Credito', '', 500, '110102048342', '2022-05-19 20:43:58'),
(26, 'Compra Credito', '', 100, '110102048342', '2022-05-19 20:43:58'),
(27, 'Levantamento', '', 500, '110102048342', '2022-05-20 07:20:19'),
(28, 'Compra Credito', '', 100, '110102048342', '2022-05-20 07:50:41'),
(29, 'Compra Credelec', '', 5, '110102048342', '2022-05-20 08:53:44'),
(30, 'Compra Credito', '', 1000, '110102048342', '2022-05-20 10:08:26'),
(31, 'Compra Credito', '', 10000, '110102048342', '2022-05-20 10:08:39'),
(32, 'Compra Credito', '100MTS Vodacom', 100, '110102048342', '2022-05-20 10:32:23'),
(33, 'Levantamento', 'Levantou com sucesso', 1000, '110102048342', '2022-05-20 10:35:29'),
(34, 'Compra Credito', '2000MTS Vodacom', 2000, '110102048342', '2022-05-20 10:36:03'),
(35, 'Compra Credito', '150MTS Tmcel', 150, '110102048342', '2022-05-20 10:36:26'),
(36, 'Compra Credito', '100MTS Movitel', 100, '110102048342', '2022-05-20 10:36:48'),
(37, 'Compra Credelec', 'Comprou com sucesso', 400, '110102048342', '2022-05-20 11:13:16'),
(38, 'Compra Credito', '1000MTS Tmcel', 1000, '110102048342', '2022-05-20 11:23:57'),
(39, 'Compra Credelec', 'Comprou com sucesso', 500, '110102048342', '2022-05-20 13:35:15'),
(40, 'Compra Credelec', 'Comprou com sucesso', 5000, '110102048342', '2022-05-20 13:48:17'),
(41, 'Compra Credito', '500MTS Vodacom', 500, '110102048342', '2022-05-20 14:01:45'),
(42, 'Compra Credito', '500MTS Tmcel', 500, '110102048342', '2022-05-20 14:10:25'),
(43, 'Compra Credito', '500MTS Movitel', 500, '110102048342', '2022-05-20 14:12:56'),
(44, 'Compra Credito', '300MTS Movitel', 300, '110102048342', '2022-05-20 14:14:44'),
(45, 'Compra Credito', '300MTS Movitel', 300, '110102048342', '2022-05-20 14:19:28'),
(46, 'Compra Credito', '300MTS Movitel', 300, '110102048342', '2022-05-20 14:19:32'),
(47, 'Compra Credito', '300MTS Movitel', 300, '110102048342', '2022-05-20 14:19:45'),
(48, 'Compra Credito', '800MTS Movitel', 800, '110102048342', '2022-05-20 14:20:09'),
(49, 'Compra Credito', '800MTS Movitel', 800, '110102048342', '2022-05-20 14:22:17'),
(50, 'Compra Credito', '500MTS Movitel', 500, '110102048342', '2022-05-20 14:25:17'),
(51, 'Levantamento', 'Levantou com sucesso', 1000, '110102048342', '2022-05-20 14:36:08'),
(52, 'Levantamento', 'Levantou com sucesso', 1000, '849551775', '2022-05-20 15:06:46'),
(53, 'Compra Credito', '500MTS Vodacom', 500, '849551775', '2022-05-20 15:07:21'),
(54, 'Compra Credito', '500MTS Vodacom', 500, '849551775', '2022-05-20 15:07:25'),
(55, 'Compra Credelec', 'Comprou com sucesso', 500, '849551775', '2022-05-20 15:08:06'),
(56, 'Compra Credito', '500MTS Tmcel', 500, '849551775', '2022-05-20 15:08:34'),
(57, 'Compra Credito', '500MTS Tmcel', 500, '849551775', '2022-05-20 15:08:39'),
(58, 'Compra Credito', '500MTS Movitel', 500, '849551775', '2022-05-20 15:09:01'),
(59, 'Compra Credito', '500MTS Movitel', 500, '849551775', '2022-05-20 15:09:06'),
(60, 'Compra Credito', '500MTS Movitel', 500, '849551775', '2022-05-20 15:09:11'),
(61, 'Compra Credito', '500MTS Movitel', 500, '849551775', '2022-05-20 15:09:18'),
(62, 'Compra Credito', '500MTS Movitel', 500, '849551775', '2022-05-20 15:09:20'),
(63, 'Compra Credito', '500MTS Movitel', 500, '849551775', '2022-05-20 15:09:29'),
(64, 'Compra Credito', '500MTS Movitel', 500, '849551775', '2022-05-20 15:09:33'),
(65, 'Compra Credelec', 'Comprou com sucesso', 500, '849551775', '2022-05-20 15:11:42'),
(66, 'Compra Credito', '500MTS Vodacom', 500, '849551775', '2022-05-20 15:12:29'),
(67, 'Compra Credito', '500MTS Vodacom', 500, '849551775', '2022-05-20 15:12:30'),
(68, 'Compra Credelec', 'Comprou com sucesso', 1000, '849551775', '2022-05-20 15:13:43'),
(69, 'Compra Credito', '1000MTS Tmcel', 1000, '849551775', '2022-05-20 15:14:49'),
(70, 'Compra Credito', '50MTS Vodacom', 50, '849551775', '2022-05-20 15:32:24');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `conta` varchar(20) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `saldo` double NOT NULL,
  `nome` varchar(40) NOT NULL,
  `apelido` varchar(40) NOT NULL,
  `actividade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`conta`, `senha`, `saldo`, `nome`, `apelido`, `actividade`) VALUES
('110102048342', '12345', 373245, 'Alessandro', 'Mahumane', 3),
('849551775', '12345', 38450, 'Teresa', 'Vilanculos', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credelec`
--
ALTER TABLE `credelec`
  ADD PRIMARY KEY (`id`),
  ADD KEY `conta` (`conta`);

--
-- Indexes for table `credito`
--
ALTER TABLE `credito`
  ADD PRIMARY KEY (`id`),
  ADD KEY `conta` (`conta`);

--
-- Indexes for table `movimento`
--
ALTER TABLE `movimento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `conta` (`conta`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`conta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `credelec`
--
ALTER TABLE `credelec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `credito`
--
ALTER TABLE `credito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `movimento`
--
ALTER TABLE `movimento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `credelec`
--
ALTER TABLE `credelec`
  ADD CONSTRAINT `conta` FOREIGN KEY (`conta`) REFERENCES `usuario` (`conta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `credito`
--
ALTER TABLE `credito`
  ADD CONSTRAINT `credito_ibfk_1` FOREIGN KEY (`conta`) REFERENCES `usuario` (`conta`);

--
-- Constraints for table `movimento`
--
ALTER TABLE `movimento`
  ADD CONSTRAINT `movimento_ibfk_1` FOREIGN KEY (`conta`) REFERENCES `usuario` (`conta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
