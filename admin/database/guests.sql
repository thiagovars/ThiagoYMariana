-- phpMyAdmin SQL Dump
-- version 4.4.15.1
-- http://www.phpmyadmin.net
--
-- Host: mysql472.umbler.com
-- Generation Time: Apr 22, 2018 at 04:59 PM
-- Server version: 5.6.30-log
-- PHP Version: 5.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE IF NOT EXISTS `guests` (
  `guest_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime NOT NULL,
  `name` varchar(55) DEFAULT NULL,
  `surname` varchar(55) DEFAULT NULL,
  `undertwelve` tinyint(1) NOT NULL DEFAULT '0',
  `vegan_menu` tinyint(1) NOT NULL DEFAULT '0',
  `confirmed` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`guest_id`, `created`, `modified`, `name`, `surname`, `undertwelve`, `vegan_menu`, `confirmed`) VALUES
(3, '2018-01-28 17:59:52', '2018-04-22 15:53:06', 'Izabel', 'Vargas', 0, 0, 0),
(4, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'João Paulo da Silveira', 'Filho', 0, 0, 0),
(5, '2018-01-28 17:59:52', '2018-04-22 16:05:59', 'Aline', 'Machado', 0, 0, 0),
(6, '2018-01-28 17:59:52', '2018-04-22 16:07:54', 'Mathaeus', 'da Silveira', 0, 0, 0),
(7, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Bruna', 'Gauterio', 0, 0, 0),
(8, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Ezequiel', 'da Silveira', 0, 0, 0),
(9, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Clara', 'da Silveira', 0, 0, 0),
(10, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Patricia', 'da Silveira', 0, 0, 0),
(12, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'João Paulo', 'da Silveira', 0, 0, 0),
(13, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Rejane', 'da Silveira', 0, 0, 0),
(14, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Nadia', 'Vargas', 0, 0, 0),
(15, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Vera', 'Pacheco', 0, 0, 0),
(16, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'María Rosa', 'Rodríguez', 0, 0, 0),
(17, '2018-01-28 17:59:52', '2018-04-22 15:56:07', 'Florencia', 'Gerali', 0, 0, 0),
(18, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Carlos', 'Rodríguez', 0, 0, 0),
(19, '2018-01-28 17:59:52', '2018-04-22 16:06:00', 'Carmen', 'Cammarano', 0, 0, 0),
(20, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Alejandra', 'Rodríguez', 0, 0, 0),
(21, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'José', 'Bossano', 0, 0, 0),
(22, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Agustín', 'Bossano', 1, 0, 0),
(23, '2018-01-28 17:59:52', '2018-04-22 16:14:59', 'Gustavo', 'Gerali', 0, 0, 0),
(24, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Wanda', 'Baldassari', 0, 0, 0),
(25, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Rodrigo', 'Romero', 0, 0, 0),
(28, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'José Pedro', 'Varela', 0, 0, 0),
(29, '2018-01-28 17:59:52', '2018-04-22 17:00:33', 'Gabriel', 'Durante', 0, 0, 0),
(31, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Leandro', 'Ramos', 0, 0, 0),
(32, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Luiz', 'Ribeiro', 0, 0, 0),
(33, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Douglas', 'Gubert', 0, 0, 0),
(34, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Camila', 'Veiga', 0, 0, 0),
(35, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Alan', 'Gubert', 1, 0, 0),
(36, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Victor', 'Fleitas', 0, 0, 0),
(37, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Ivana', 'Baldassari', 0, 0, 0),
(38, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Germán', 'Fleitas', 0, 0, 0),
(39, '2018-01-28 17:59:52', '2018-04-22 16:15:07', 'Francina', 'Fleitas', 0, 0, 0),
(40, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Lorena', 'Baldassari', 0, 0, 0),
(41, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Jorge', 'Díaz', 0, 0, 0),
(42, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Adriana', 'Díaz', 0, 0, 0),
(43, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Enrique', 'Patrón', 0, 0, 0),
(44, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Federico', 'Díaz', 1, 0, 0),
(45, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Constanza', 'Díaz', 1, 0, 0),
(46, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Scheila', 'Lima', 0, 0, 0),
(47, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Rafael', 'Szarblewski', 0, 0, 0),
(48, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Estela', 'Morelle', 0, 0, 0),
(49, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Bianca', 'Darski', 0, 0, 0),
(50, '2018-01-28 17:59:52', '2018-04-22 16:13:16', 'Marden', 'Müller', 0, 0, 0),
(51, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Roberta', 'Grudzinski', 0, 0, 0),
(54, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Raúl', 'Díaz', 0, 0, 0),
(55, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Ingrid', 'Machado', 0, 0, 0),
(56, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Hernán', 'García', 0, 0, 0),
(57, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Nicolás', 'Licandro', 0, 0, 0),
(58, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Sofía', 'Pinto', 0, 0, 0),
(60, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Néstor', 'Ferreira', 0, 0, 0),
(63, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Nicolás', 'Zuccotti', 0, 0, 0),
(66, '2018-01-28 17:59:52', '0000-00-00 00:00:00', 'Brian', 'Flores', 0, 0, 0),
(67, '0000-00-00 00:00:00', '2018-04-22 16:17:33', 'Teresita', 'Oliviera', 0, 0, 0),
(68, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Mónica', 'Barreto', 0, 0, 0),
(69, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Pablo', 'Cibils', 0, 0, 0),
(70, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Agustín', 'Cibils', 0, 0, 0),
(71, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Flavia', 'Inmediato', 0, 0, 0),
(72, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Rasjid', 'César', 0, 0, 0),
(73, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Daniel', 'Cuña', 0, 0, 0),
(74, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guacira', 'Cardoso', 0, 0, 0),
(75, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Marcelo', 'Saporiti', 0, 0, 0),
(76, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Graciela', 'Correa', 0, 0, 0),
(77, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Eduardo', 'Corrêa', 0, 0, 0),
(78, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Angélica', 'Corrêa', 0, 0, 0);

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
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=79;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
