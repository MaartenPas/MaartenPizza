-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 27 okt 2014 om 16:16
-- Serverversie: 5.6.16
-- PHP-versie: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `cursusphp`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `chatpizzashop`
--

CREATE TABLE IF NOT EXISTS `chatpizzashop` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nickname` varchar(10) NOT NULL,
  `boodschap` varchar(250) NOT NULL,
  `datum` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Gegevens worden uitgevoerd voor tabel `chatpizzashop`
--

INSERT INTO `chatpizzashop` (`id`, `nickname`, `boodschap`, `datum`) VALUES
(1, 'Maarten', 'Hoi pizzashop!', '2014-10-21 13:13:54'),
(2, 'p624', 'kkk', '2014-10-21 13:15:48'),
(3, 'p624', 'kkk', '2014-10-21 13:15:56'),
(4, 'Maarten', 'hoi\r\n', '2014-10-23 08:40:23'),
(5, 'p438', 'test', '2014-10-27 14:46:12');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
