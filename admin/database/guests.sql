-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2018 at 04:41 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tym_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `guest_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime NOT NULL,
  `name` varchar(55) DEFAULT NULL,
  `surname` varchar(55) DEFAULT NULL,
  `undertwelve` tinyint(1) NOT NULL DEFAULT '0',
  `vegan_menu` tinyint(1) NOT NULL DEFAULT '0',
  `confirmed` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`guest_id`, `created`, `modified`, `name`, `surname`, `undertwelve`, `vegan_menu`, `confirmed`) VALUES
(1, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Thiago', 'da Silveira', 0, 0, 0),
(2, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Mariana', 'Gerali', 0, 0, 0),
(3, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Izabel', 'Vargas', 0, 0, 0),
(4, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'João', 'da Silveira', 0, 0, 0),
(5, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Aline', 'Machado', 0, 0, 0),
(6, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Mathaeus', 'da Silveira', 0, 0, 0),
(7, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Bruna', 'Gauterio', 0, 0, 0),
(8, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Ezequiel', 'da Silveira', 0, 0, 0),
(9, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Clara', 'da Silveira', 0, 0, 0),
(10, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Patricia', 'da Silveira', 0, 0, 0),
(11, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'João Paulo', 'da Silveira', 0, 0, 0),
(12, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Rejane', 'da Silveira', 0, 0, 0),
(13, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Nadia', 'Vargas', 0, 0, 0),
(14, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Vera', 'Pacheco', 0, 0, 0),
(15, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'María Rosa', 'Rodríguez', 0, 0, 0),
(16, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Florencia', 'Gerali', 0, 0, 0),
(17, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Carlos', 'Rodríguez', 0, 0, 0),
(18, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Carmen', 'Cammarano', 0, 0, 0),
(19, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Alejandra', 'Rodríguez', 0, 0, 0),
(20, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'José', 'Bossano', 0, 0, 0),
(21, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Agustín', 'Bossano', 1, 0, 0),
(22, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Gustavo', 'Gerali', 0, 0, 0),
(23, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Wanda', 'Baldassari', 0, 0, 0),
(24, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Rodrigo', 'Romero', 0, 0, 0),
(25, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Flavia', 'Cigarán', 0, 0, 0),
(26, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Teresita', 'da Silveira', 0, 0, 0),
(27, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'José Pedro', 'Varela', 0, 0, 0),
(28, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Gabriel', 'Durante', 0, 0, 0),
(29, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Carol', 'Sarmento', 0, 0, 0),
(30, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Leandro', 'Ramos', 0, 0, 0),
(31, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Luiz', 'Ribeiro', 0, 0, 0),
(32, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Douglas', 'Gubert', 0, 0, 0),
(33, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Camila', 'Veiga', 0, 0, 0),
(34, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Alan', 'Gubert', 1, 0, 0),
(35, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Victor', 'Fleitas', 0, 0, 0),
(36, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Ivana', 'Baldassari', 0, 0, 0),
(37, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Germán', 'Fleitas', 0, 0, 0),
(38, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Francina', 'Fleitas', 0, 0, 0),
(39, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Lorena', 'Baldassari', 0, 0, 0),
(40, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Jorge', 'Díaz', 0, 0, 0),
(41, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Adriana', 'Díaz', 0, 0, 0),
(42, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Enrique', 'da Silveira', 0, 0, 0),
(43, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Federico', 'Díaz', 1, 0, 0),
(44, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Cony', 'Díaz', 1, 0, 0),
(45, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Sheila', 'Lima', 0, 0, 0),
(46, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Rafael', 'Szarblewski', 0, 0, 0),
(47, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Estela', 'Morelle', 0, 0, 0),
(48, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Bianca', 'Darski', 0, 0, 0),
(49, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Marden', 'Müller', 0, 0, 0),
(50, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Roberta', 'Grudzinski', 0, 0, 0),
(51, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Claudio', 'Coutto', 0, 0, 0),
(52, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Jennifer', 'Salaberry', 0, 0, 0),
(53, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Raúl', 'Díaz', 0, 0, 0),
(54, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Ingrid', 'Machado', 0, 0, 0),
(55, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Hernán', 'García', 0, 0, 0),
(56, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Nicolás', 'Licandro', 0, 0, 0),
(57, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Sofía', 'Pinto', 0, 0, 0),
(58, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Matías', 'Vain', 0, 0, 0),
(59, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Néstor', 'Ferreira', 0, 0, 0),
(60, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Rodolfo', 'Pereira', 0, 0, 0),
(61, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Valentina', 'Blanco', 0, 0, 0),
(62, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Nicolás', 'Zuccotti', 0, 0, 0),
(63, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Rodrigo', 'Tranquilo', 0, 0, 0),
(64, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Tatiana', 'Díaz', 0, 0, 0),
(65, '2018-01-27 00:40:24', '0000-00-00 00:00:00', 'Brian', 'Flores', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`guest_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
