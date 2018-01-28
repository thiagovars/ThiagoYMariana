-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2018 at 09:40 PM
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
(1, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Thiago', 'da Silveira', 0, 0, 1),
(2, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Mariana', 'Gerali', 0, 0, 1),
(3, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Izabel', 'Vargas', 0, 0, 0),
(4, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'João', 'da Silveira', 0, 0, 0),
(5, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Aline', 'Machado', 0, 0, 0),
(6, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Mathaeus', 'da Silveira', 0, 0, 0),
(7, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Bruna', 'Gauterio', 0, 0, 0),
(8, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Ezequiel', 'da Silveira', 0, 0, 0),
(9, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Clara', 'da Silveira', 0, 0, 0),
(10, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Patricia', 'da Silveira', 0, 0, 0),
(11, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'João Paulo', 'da Silveira', 0, 0, 0),
(12, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Rejane', 'da Silveira', 0, 0, 0),
(13, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Nadia', 'Vargas', 0, 0, 0),
(14, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Vera', 'Pacheco', 0, 0, 0),
(15, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'María Rosa', 'Rodríguez', 0, 0, 0),
(16, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Florencia', 'Gerali', 0, 0, 0),
(17, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Carlos', 'Rodríguez', 0, 0, 0),
(18, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Carmen', 'Cammarano', 0, 0, 0),
(19, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Alejandra', 'Rodríguez', 0, 0, 0),
(20, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'José', 'Bossano', 0, 0, 0),
(21, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Agustín', 'Bossano', 1, 0, 0),
(22, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Gustavo', 'Gerali', 0, 0, 0),
(23, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Wanda', 'Baldassari', 0, 0, 0),
(24, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Rodrigo', 'Romero', 0, 0, 0),
(25, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Flavia', 'Cigarán', 0, 0, 0),
(26, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Teresita', 'Olivieri', 0, 0, 0),
(27, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'José Pedro', 'Varela', 0, 0, 0),
(28, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Gabriel', 'Durante', 0, 0, 0),
(29, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Carol', 'Sarmento', 0, 0, 0),
(30, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Leandro', 'Ramos', 0, 0, 0),
(31, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Luiz', 'Ribeiro', 0, 0, 0),
(32, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Douglas', 'Gubert', 0, 0, 0),
(33, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Camila', 'Veiga', 0, 0, 0),
(34, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Alan', 'Gubert', 1, 0, 0),
(35, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Victor', 'Fleitas', 0, 0, 0),
(36, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Ivana', 'Baldassari', 0, 0, 0),
(37, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Germán', 'Fleitas', 0, 0, 0),
(38, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Francina', 'Fleitas', 0, 0, 0),
(39, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Lorena', 'Baldassari', 0, 0, 0),
(40, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Jorge', 'Díaz', 0, 0, 0),
(41, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Adriana', 'Díaz', 0, 0, 0),
(42, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Enrique', 'Patrón', 0, 0, 0),
(43, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Federico', 'Díaz', 1, 0, 0),
(44, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Constanza', 'Díaz', 1, 0, 0),
(45, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Sheila', 'Lima', 0, 0, 0),
(46, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Rafael', 'Szarblewski', 0, 0, 0),
(47, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Estela', 'Morelle', 0, 0, 0),
(48, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Bianca', 'Darski', 0, 0, 0),
(49, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Marden', 'Müller', 0, 0, 0),
(50, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Roberta', 'Grudzinski', 0, 0, 0),
(51, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Claudio', 'Coutto', 0, 0, 0),
(52, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Jennifer', 'Salaberry', 0, 0, 0),
(53, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Raúl', 'Díaz', 0, 0, 0),
(54, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Ingrid', 'Machado', 0, 0, 0),
(55, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Hernán', 'García', 0, 0, 0),
(56, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Nicolás', 'Licandro', 0, 0, 0),
(57, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Sofía', 'Pinto', 0, 0, 0),
(58, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Matías', 'Vain', 0, 0, 0),
(59, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Néstor', 'Ferreira', 0, 0, 0),
(60, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Rodolfo', 'Pereira', 0, 0, 0),
(61, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Valentina', 'Blanco', 0, 0, 0),
(62, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Nicolás', 'Zuccotti', 0, 0, 0),
(63, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Rodrigo', 'Tranquilo', 0, 0, 0),
(64, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Tatiana', 'Díaz', 0, 0, 0),
(65, '2018-01-27 22:55:28', '0000-00-00 00:00:00', 'Brian', 'Flores', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `guestsusers`
--

CREATE TABLE `guestsusers` (
  `guestusers_id` int(11) NOT NULL,
  `father_id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guestsusers`
--

INSERT INTO `guestsusers` (`guestusers_id`, `father_id`, `child_id`) VALUES
(1, 3, 4),
(2, 3, 5),
(3, 3, 13),
(4, 4, 5),
(5, 4, 3),
(6, 6, 7),
(7, 7, 6),
(8, 8, 9),
(9, 8, 45),
(10, 11, 12),
(11, 12, 11),
(12, 13, 3),
(13, 13, 14),
(14, 14, 13),
(15, 14, 3),
(16, 15, 16),
(17, 15, 17),
(18, 15, 18),
(19, 15, 19),
(20, 15, 20),
(21, 15, 21),
(22, 16, 15),
(23, 16, 17),
(24, 17, 15),
(25, 17, 16),
(26, 17, 18),
(27, 17, 19),
(28, 17, 20),
(29, 17, 21),
(30, 17, 22),
(31, 16, 18),
(32, 22, 24),
(33, 22, 16),
(34, 23, 22),
(35, 23, 24),
(36, 23, 25),
(37, 24, 25),
(38, 26, 27),
(39, 28, 29),
(40, 32, 33),
(41, 32, 34),
(42, 33, 34),
(43, 35, 36),
(44, 35, 37),
(45, 35, 38),
(46, 39, 40),
(47, 40, 43),
(48, 40, 44),
(49, 42, 43),
(50, 46, 47),
(51, 49, 50),
(52, 51, 52),
(53, 60, 61);

-- --------------------------------------------------------

--
-- Table structure for table `texts`
--

CREATE TABLE `texts` (
  `texto_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `body` longtext NOT NULL,
  `slug` varchar(55) NOT NULL,
  `language` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `texts`
--

INSERT INTO `texts` (`texto_id`, `created`, `modified`, `body`, `slug`, `language`) VALUES
(1, '2018-01-20 08:15:00', NULL, 'Tudo começa em um dia qualquer, de um ano qualquer, mas de uma forma atípica: a golpes. O kendo	foi o responsável pelo nosso primeiro encontro. A pesar da distância que nos separava, o vínculo que haviamos criado tornava-se cada vez mais forte. Finalmente, em um 29 de janeiro pudemos entender o que sentiamos um pelo outro. Dessa forma prometemos tentar o \"nós dois\" apesar das fronteiras.', 'tudo começa em', 'pt'),
(2, '2018-01-20 08:17:00', NULL, 'Todo se inicia en un día cualquiera, de un año cualquiera, pero de una forma atípica: a los golpes. El kendo fue el responsable de nuestro primer encuentro. A pesar de la distancia que nos separaba, el vínculo que habíamos creado se hacía cada vez más fuerte. Finalmente, un 29 de enero pudimos entender qué sentíamos el uno por el otro. De esta forma nos prometimos intentar el \"nosotros\" a pesar de las fronteras.', 'tudo começa em', 'es'),
(3, '2018-01-20 08:17:00', NULL, 'A meses indo e vindo, lutando contra o tempo e vencendo os quilômetros, foi em uma tarde de setembro que tudo mudou. Quando alguém se sente muito unido ao outro, a euforia dos encontros e o vazio da separação, podem jogar fardos pesados. E assim nos propusemos um novo objetivo: não deixar que o ano terminasse com o \"nós dois\" à distância. Agora a promessa se converteu em pacto.', 'a meses indo', 'pt'),
(4, '2018-01-20 08:19:00', NULL, 'Tras meses yendo y viniendo, de pelear contra el tiempo y los kilómetros; en una tarde de setiembre, simplemente todo cambió. Cuando alguien se siente muy unido al otro, la euforia de los encuentros y el vacío tras la separación, pueden jugar malas pasadas. Así que nos propusimos un nuevo objetivo: no dejaríamos que el año terminara con \"nosotros\" a distancia. Ahora la promesa, se volvió un pacto.', 'a meses indo', 'es'),
(5, '2018-01-20 08:22:00', NULL, 'Desde aquele setembro, cada dia que passava, aumentavam as certezas e não víamos a hora de cumprir com nosso pacto... Finalmente chega dezembro. Junto com ele, não somente a mudança do novo ano, mas a grande mudança de nossas vidas. Já não havia espaço para dúvidas ou medos. Uma passagem de ida, que ainda não tem par de volta, fora o suficiente quitar espaço para dúvidas e medos.', 'desde aquele setembro', 'pt'),
(6, '2018-01-20 08:22:00', NULL, 'Desde aquel setiembre, cada día que pasaba, se volvía certeza, y no veíamos la hora de cumplir con nuestro pacto... Finalmente, diciembre llegó, y con él, no sólo el cambio de año, sino de vida. No existían ya dudas ni miedos. Bastó con un pasaje de ida, que hasta ahora no tiene retorno.', 'desde aquele setembro', 'es'),
(7, '2018-01-21 13:13:00', NULL, 'Existem pessoas que acreditam em coincidências. Janeiro é nossa linda coincidência. Em janeiro inicio nosso amor. Em janeiro deixamos para trás a distância. Agora em janeiro, decidimos que queremos que o “nós dois” perdure pelo tempo.', 'existem pessoas que', 'pt'),
(8, '2018-01-21 13:14:00', NULL, 'Hay personas que creen en las coincidencias. Enero es nuestra hermosa coincidencia. En enero se inició nuestro amor, en enero dejamos atrás la distancia, y ahora, en enero, decidimos que queremos que el \"nosotros\" perdure en el tiempo.', 'existem pessoas que', 'es'),
(9, '2018-01-21 20:07:00', NULL, 'Por favor, no formulário de confirmação de presença, indique quem virá contigo e se deseja menu vegano.', 'por favor,', 'pt'),
(10, '2018-01-21 20:06:00', NULL, 'Por favor, a continuación complete la planilla de asistencia, indicando los invitados que asistirán y si desea menú vegano.', 'por favor,', 'es'),
(11, '2018-01-23 18:00:00', NULL, 'Breve relato das viagens, horas e distâncias com um lindo final. Seria só o começo?', 'breve relato de', 'pt'),
(12, '2018-01-23 18:00:00', NULL, 'Breve relato de viajes, horas y distancias, y con un hermoso final. ¿O comienzo?.', 'breve relato de', 'es');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `name` varchar(55) NOT NULL,
  `login` varchar(55) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(16) NOT NULL,
  `category` char(1) NOT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `created`, `modified`, `name`, `login`, `password`, `salt`, `category`, `confirmed`) VALUES
(1, '2018-01-24 20:00:00', NULL, 'Mariana Gerali', 'mariana', '889b2466f8141328762f8045b6c8f32f44bea167fa3c9db4ed43dce21cf1384817cee1abd4831a3b86fdba49b0b3c94da6840cd137eb7196c56da9765d90f187', 'a1c52bf898c46752', 'A', 1),
(2, '2018-01-24 20:00:00', NULL, 'Pedro Thiago Vargas da Silveira', 'thiago', '0cac58de7efec4f462dab435e26c75d64d4f0d03d01101cfbfde3c8a2d9a01c88ad2bb3681d1c1a13a32328829bde7eb6b7c528417f923911da10aa909e1b144', '9e77065de451c2f7', 'A', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`guest_id`);

--
-- Indexes for table `guestsusers`
--
ALTER TABLE `guestsusers`
  ADD PRIMARY KEY (`guestusers_id`);

--
-- Indexes for table `texts`
--
ALTER TABLE `texts`
  ADD PRIMARY KEY (`texto_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `guestsusers`
--
ALTER TABLE `guestsusers`
  MODIFY `guestusers_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `texts`
--
ALTER TABLE `texts`
  MODIFY `texto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
