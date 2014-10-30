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
-- Tabelstructuur voor tabel `pizzashopmenus`
--

CREATE TABLE IF NOT EXISTS `pizzashopmenus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product` varchar(40) NOT NULL,
  `prijs` decimal(4,2) NOT NULL,
  `categorie` varchar(40) NOT NULL,
  `omschrijving` varchar(200) NOT NULL,
  `aantal` int(4) NOT NULL,
  `product_code` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Gegevens worden uitgevoerd voor tabel `pizzashopmenus`
--

INSERT INTO `pizzashopmenus` (`id`, `product`, `prijs`, `categorie`, `omschrijving`, `aantal`, `product_code`) VALUES
(1, 'Pizza Seba (klein)', '6.50', 'pizza', '(tomaat, mozzarella, champignons)', 1, 'hoi'),
(5, 'Pizza Napoletana (klein)', '7.00', 'pizza', '(mozzarella, gesneden tomaten, knoflook en olijfolie)', 1, 'hoi1'),
(6, 'Pizza Marinara (klein)', '5.00', 'pizza', ' (tomaat, knoflook, olijfolie en oregano)', 1, 'hoi2'),
(7, 'Pizza Margherita (klein)', '7.10', 'pizza', ' (tomaten, mozzarella en basilicum)', 1, 'hoi3'),
(8, 'Pizza Napoletana/Romana (klein)', '7.00', 'pizza', '(tomaat, mozzarella, ansjovis en kappertjes)', 1, 'hoi4'),
(9, 'Pizza Viennese (klein)', '7.10', 'pizza', ' (tomaat, mozzarella, Duitse worst, oregano, olijfolie)', 1, 'hoi5'),
(10, 'Pizza Capriciosa (klein)', '8.00', 'pizza', '(mozzarella, gesneden tomaten, knoflook en olijfolie)', 1, 'hoi6'),
(11, 'Pizza Quattro Formaggi (klein)', '7.00', 'pizza', '(gorgonzola, mozzarella, pecorino en taleggio)', 1, 'hoi7'),
(12, 'Pizza Quattro Stagioni (klein)', '7.00', 'pizza', '(tomaat, mozzarella, ham, champignons, olijven, artisjokken)', 1, 'hoi8'),
(13, 'Pizza Bianca (klein)', '8.00', 'pizza', ' (olijfolie, zeezout, rozemarijn)', 1, 'hoi9'),
(14, 'Pizza alla Casalinga (klein)', '5.00', 'pizza', '(mozzarella, gesneden tomaten, knoflook en olijfolie)', 1, 'hoi10'),
(15, 'Pizza Calzone (klein)', '8.00', 'pizza', '(gevulde dubbelgevouwen pizza, met tomaat, mozzarella en diverse andere ingrediÃ«nten)', 1, 'hoi11'),
(16, 'Spaghetti bolognese spaghetti (klein)', '8.00', 'pizza', '(tomatensaus, gehakt)', 1, 'hoi12'),
(17, 'Pasta Bolognese Tagliatelle (klein)', '8.50', 'pizza', '(tomatensaus, gehakt)', 1, 'hoi13'),
(18, 'Pasta Al Pesto Bolognese (klein)', '7.50', 'pizza', '(roomkruidensaus op basis van basilicum)', 1, 'hoi14'),
(19, 'Pasta Al Pesto Tagliatelle (klein)', '8.50', 'pizza', '(roomkruidensaus op basis van basilicum)', 1, 'hoi15'),
(20, 'Pasta Frutti di Mare Spaghetti (klein)', '10.50', 'pizza', 'tomatensaus, zeevruchten, uien', 1, 'hoi16'),
(22, 'Pizza 4 Kazen (klein)', '5.50', 'pizza', '(Tomatensaus, kaas, gorgonzola, mozzarella, feta)', 0, ''),
(23, 'Pizza 4 Kazen (Groot)', '7.50', 'pizza', '(Tomatensaus, kaas, gorgonzola, mozzarella, feta)', 0, ''),
(24, 'Pizza Di mare (klein)', '7.00', 'pizza', '(Tomatensaus, kaas, zeevruchten, look)', 0, ''),
(25, 'Pizza Di mare (groot)', '8.50', 'pizza', '(Tomatensaus, kaas, zeevruchten, look)', 0, ''),
(26, 'Spaghettie Carbonara', '7.00', 'pasta', '(tomatensaus, ham, ei)', 0, ''),
(27, 'Spaghetti Du Chef', '7.00', 'pasta', '(bolognesesaus, roomsaus, ham, broccoli)', 0, ''),
(28, 'Spaghetti Funghi', '7.00', 'pasta', '(roomsaus, champignons, ham)', 0, ''),
(29, 'Spaghetti Kip', '7.00', 'pasta', '(tomatensaus, roomsaus, kip, champignons)', 0, ''),
(30, 'Broodje gezond', '3.20', 'broodje', 'groenten en saus', 0, ''),
(31, 'Broodje gezond speciaal', '3.70', 'broodje', 'groenten en zongedroogde tomaten', 0, ''),
(32, 'Broodje Smos', '4.50', 'broodje', 'kaas, hesp, amÃ©ricain, ei, tomaat, cocktail', 0, ''),
(33, 'Broodje Exotic', '3.90', 'broodje', 'krabsalade, ananas, sla', 0, ''),
(34, 'Frikandel', '1.20', 'snack', '', 0, ''),
(35, 'Boulet', '1.50', 'snack', '', 0, ''),
(36, 'Fishstick', '1.50', 'snack', '', 0, ''),
(37, 'Vleeskroket', '1.50', 'snack', '', 0, ''),
(38, 'Cervela', '1.50', 'snack', '', 0, ''),
(39, 'Frikandel Special', '1.50', 'snack', '', 0, ''),
(40, 'Kipcorn', '1.50', 'snack', '', 0, ''),
(41, 'Mexicano', '1.50', 'snack', '', 0, ''),
(42, 'Kaaskroket', '1.50', 'snack', '', 0, ''),
(43, 'KipsatÃ©', '2.20', 'snack', '', 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
