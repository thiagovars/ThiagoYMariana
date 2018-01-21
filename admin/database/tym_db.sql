-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2018 at 10:09 PM
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
(8, '2018-01-21 13:14:00', NULL, 'Hay personas que creen en las coincidencias. Enero es nuestra hermosa coincidencia. En enero se inició nuestro amor, en enero dejamos atrás la distancia, y ahora, en enero, decidimos que queremos que el \"nosotros\" perdure en el tiempo.', 'existem pessoas que', 'es');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `texts`
--
ALTER TABLE `texts`
  ADD PRIMARY KEY (`texto_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `texts`
--
ALTER TABLE `texts`
  MODIFY `texto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
