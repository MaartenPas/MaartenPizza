-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 27 okt 2014 om 16:15
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
-- Tabelstructuur voor tabel `gebruikerspizzashop`
--

CREATE TABLE IF NOT EXISTS `gebruikerspizzashop` (
  `GebruikersId` int(11) NOT NULL AUTO_INCREMENT,
  `Gebruikersnaam` varchar(30) NOT NULL,
  `Wachtwoord` varchar(40) NOT NULL,
  `Voornaam` varchar(255) NOT NULL,
  `Familienaam` varchar(255) NOT NULL,
  `Adres` varchar(255) NOT NULL,
  `Stad` varchar(50) NOT NULL,
  `Email` char(30) NOT NULL,
  `Telefoon` char(20) NOT NULL,
  `Boodschap` varchar(50) NOT NULL,
  PRIMARY KEY (`GebruikersId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Gegevens worden uitgevoerd voor tabel `gebruikerspizzashop`
--

INSERT INTO `gebruikerspizzashop` (`GebruikersId`, `Gebruikersnaam`, `Wachtwoord`, `Voornaam`, `Familienaam`, `Adres`, `Stad`, `Email`, `Telefoon`, `Boodschap`) VALUES
(30, '1', '2', '3', '4', '5', '6', 'maarten.passchyn@gmail.com', '7', '8'),
(31, 'Gebruikersnaam', 'Wachtwoord', 'Voornaam', 'Familienaam', 'Adres', 'Stad', 'maarten.passchyn@gmail.com', 'Telefoon', ''),
(32, 'admin', 'admin', 'Voornaam', 'Familienaam', 'Adres', 'Stad', 'maarten.passchyn@gmail.com', 'Telefoon', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
