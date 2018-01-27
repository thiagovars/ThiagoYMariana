-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2018 at 03:14 AM
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
