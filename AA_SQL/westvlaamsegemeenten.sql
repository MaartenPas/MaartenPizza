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
-- Tabelstructuur voor tabel `westvlaamsegemeenten`
--

CREATE TABLE IF NOT EXISTS `westvlaamsegemeenten` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `gemeentenaam` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8715 ;

--
-- Gegevens worden uitgevoerd voor tabel `westvlaamsegemeenten`
--

INSERT INTO `westvlaamsegemeenten` (`id`, `gemeentenaam`) VALUES
(8456, '8000 - Brugge'),
(8457, '8000 - Koolkerke'),
(8458, '8020 - Hertsberge'),
(8459, '8020 - Oostkamp'),
(8460, '8020 - Ruddervoorde'),
(8461, '8020 - Waardamme'),
(8462, '8200 - Sint-Andries'),
(8465, '8200 - Sint-Michiels'),
(8466, '8210 - Loppem'),
(8467, '8210 - Veldegem'),
(8468, '8210 - Zedelgem'),
(8469, '8211 - Aartrijke'),
(8470, '8300 - Knokke'),
(8471, '8300 - Knokke-Heist'),
(8472, '8300 - Westkapelle'),
(8473, '8301 - Heist-aan-Zee'),
(8474, '8301 - Ramskapelle'),
(8475, '8310 - Assebroek'),
(8476, '8310 - Sint-Kruis'),
(8477, '8340 - Damme'),
(8478, '8340 - Hoeke'),
(8479, '8340 - Lapscheure'),
(8480, '8340 - Moerkerke'),
(8481, '8340 - Oostkerke'),
(8482, '8340 - Sijsele'),
(8483, '8370 - Blankenberge'),
(8484, '8370 - Uitkerke'),
(8485, '8377 - Houtave'),
(8486, '8377 - Meetkerke'),
(8487, '8377 - Nieuwmunster'),
(8488, '8377 - Zuienkerke'),
(8489, '8380 - Dudzele'),
(8490, '8380 - Lissewege'),
(8491, '8380 - Zeebrugge'),
(8492, '8400 - Oostende'),
(8493, '8400 - Oostende'),
(8494, '8400 - Stene'),
(8495, '8400 - Zandvoorde'),
(8496, '8420 - De Haan'),
(8497, '8420 - Klemskerke'),
(8498, '8420 - Wenduine'),
(8499, '8421 - Vlissegem'),
(8500, '8430 - Middelkerke'),
(8501, '8431 - Wilskerke'),
(8502, '8432 - Leffinge'),
(8503, '8433 - Mannekensvere'),
(8504, '8433 - Schore'),
(8505, '8433 - Sint-Pieters-Kapelle'),
(8506, '8433 - Slijpe'),
(8507, '8433 - Spermalie'),
(8508, '8434 - Lombardsijde'),
(8509, '8434 - Westende'),
(8510, '8450 - Bredene'),
(8511, '8460 - Ettelgem'),
(8512, '8460 - Oudenburg'),
(8513, '8460 - Roksem'),
(8514, '8460 - Westkerke'),
(8515, '8470 - Gistel'),
(8516, '8470 - Moere'),
(8517, '8470 - Snaaskerke'),
(8518, '8470 - Zevekote'),
(8519, '8480 - Bekegem'),
(8520, '8480 - Eernegem'),
(8521, '8480 - Ichtegem'),
(8522, '8490 - Jabbeke'),
(8523, '8490 - Snellegem'),
(8524, '8490 - Stalhille'),
(8525, '8490 - Varsenare'),
(8526, '8490 - Zerkegem'),
(8527, '8500 - Kortrijk'),
(8528, '8501 - Bissegem'),
(8529, '8501 - Heule'),
(8530, '8510 - Bellegem'),
(8531, '8510 - Kooigem'),
(8532, '8510 - Marke'),
(8533, '8510 - Rollegem'),
(8534, '8511 - Aalbeke'),
(8535, '8520 - Kuurne'),
(8536, '8530 - Harelbeke'),
(8537, '8531 - Bavikhove'),
(8538, '8531 - Hulste'),
(8539, '8540 - Deerlijk'),
(8540, '8550 - Zwevegem'),
(8541, '8551 - Heestert'),
(8542, '8552 - Moen'),
(8543, '8553 - Otegem'),
(8544, '8554 - Sint-Denijs'),
(8545, '8560 - Gullegem'),
(8546, '8560 - Moorsele'),
(8547, '8560 - Wevelgem'),
(8548, '8570 - Anzegem'),
(8549, '8570 - Gijzelbrechtegem'),
(8550, '8570 - Ingooigem'),
(8551, '8570 - Vichte'),
(8552, '8572 - Kaster'),
(8553, '8573 - Tiegem'),
(8554, '8580 - Avelgem'),
(8555, '8581 - Kerkhove'),
(8556, '8581 - Waarmaarde'),
(8557, '8582 - Outrijve'),
(8558, '8583 - Bossuit'),
(8559, '8587 - Helkijn'),
(8560, '8587 - Spiere'),
(8561, '8587 - Spiere-Helkijn'),
(8562, '8600 - Beerst'),
(8563, '8600 - Diksmuide'),
(8564, '8600 - Driekapellen'),
(8565, '8600 - Esen'),
(8566, '8600 - Kaaskerke'),
(8567, '8600 - Keiem'),
(8568, '8600 - Lampernisse'),
(8569, '8600 - Leke'),
(8570, '8600 - Nieuwkapelle'),
(8571, '8600 - Oostkerke'),
(8572, '8600 - Oudekapelle'),
(8573, '8600 - Pervijze'),
(8574, '8600 - Sint-Jacobs-Kapelle'),
(8575, '8600 - Stuivekenskerke'),
(8576, '8600 - Vladslo'),
(8577, '8600 - Woumen'),
(8578, '8610 - Handzame'),
(8579, '8610 - Kortemark'),
(8580, '8610 - Werken'),
(8581, '8610 - Zarren'),
(8582, '8620 - Nieuwpoort'),
(8583, '8620 - Ramskapelle'),
(8584, '8620 - Sint-Joris'),
(8585, '8630 - Avekapelle'),
(8586, '8630 - Beauvoorde'),
(8587, '8630 - Booitshoeke'),
(8588, '8630 - Bulskamp'),
(8589, '8630 - De Moeren'),
(8590, '8630 - Eggewaartskapelle'),
(8591, '8630 - Houtem'),
(8592, '8630 - Steenkerke'),
(8593, '8630 - Veurne'),
(8594, '8630 - Vinkem'),
(8595, '8630 - Wulveringem'),
(8596, '8630 - Zoutenaaie'),
(8597, '8640 - Oostvleteren'),
(8598, '8640 - Vleteren'),
(8599, '8640 - Westvleteren'),
(8600, '8640 - Woesten'),
(8601, '8647 - Lo'),
(8602, '8647 - Lo-Reninge'),
(8603, '8647 - Noordschote'),
(8604, '8647 - Pollinkhove'),
(8605, '8647 - Reninge'),
(8606, '8650 - Houthulst'),
(8607, '8650 - Klerken'),
(8608, '8650 - Merkem'),
(8609, '8660 - Adinkerke'),
(8610, '8660 - De Panne'),
(8611, '8670 - Koksijde'),
(8612, '8670 - Oostduinkerke'),
(8613, '8670 - Wulpen'),
(8614, '8680 - Bovekerke'),
(8615, '8680 - Koekelare'),
(8616, '8680 - Zande'),
(8617, '8690 - Alveringem'),
(8618, '8690 - Hoogstade'),
(8619, '8690 - Oeren'),
(8620, '8690 - Sint-Rijkers'),
(8621, '8691 - Beveren-aan-den-Ijzer'),
(8622, '8691 - Gijverinkhove'),
(8623, '8691 - Izenberge'),
(8624, '8691 - Leisele'),
(8625, '8691 - Stavele'),
(8626, '8700 - Aarsele'),
(8627, '8700 - Kanegem'),
(8628, '8700 - Schuiferskapelle'),
(8629, '8700 - Tielt'),
(8630, '8710 - Ooigem'),
(8631, '8710 - Sint-Baafs-Vijve'),
(8632, '8710 - Wielsbeke'),
(8633, '8720 - Dentergem'),
(8634, '8720 - Markegem'),
(8635, '8720 - Oeselgem'),
(8636, '8720 - Wakken'),
(8637, '8730 - Beernem'),
(8638, '8730 - Oedelem'),
(8639, '8730 - Sint-Joris'),
(8640, '8740 - Egem'),
(8641, '8740 - Pittem'),
(8642, ' 8750 - Wingene'),
(8643, '8750 - Zwevezele'),
(8644, '8755 - Ruiselede'),
(8645, '8760 - Meulebeke'),
(8646, '8770 - Ingelmunster'),
(8647, '8780 - Oostrozebeke'),
(8648, '8790 - Waregem'),
(8649, '8791 - Beveren'),
(8650, '8792 - Desselgem'),
(8651, '8793 - Sint-Eloois-Vijve'),
(8652, '8800 - Beveren'),
(8653, '8800 - Oekene'),
(8654, '8800 - Roeselare'),
(8655, '8800 - Rumbeke'),
(8656, '8810 - Lichtervelde'),
(8657, '8820 - Torhout'),
(8658, '8830 - Gits'),
(8659, '8830 - Hooglede'),
(8660, '8840 - Oostnieuwkerke'),
(8661, '8840 - Staden'),
(8662, '8840 - Westrozebeke'),
(8663, '8850 - Ardooie'),
(8664, '8851 - Koolskamp'),
(8665, '8860 - Lendelede'),
(8666, '8870 - Emelgem'),
(8667, '8870 - Izegem'),
(8668, '8870 - Kachtem'),
(8669, '8880 - Ledegem'),
(8670, '8880 - Rollegem-Kapelle'),
(8671, '8880 - Sint-Eloois-Winkel'),
(8672, '8890 - Dadizele'),
(8673, '8890 - Moorslede'),
(8674, '8900 - Brielen'),
(8675, '8900 - Dikkebus'),
(8676, '8900 - Ieper'),
(8677, '8900 - Sint-Jan'),
(8678, '8902 - Hollebeke'),
(8679, '8902 - Voormezele'),
(8680, '8902 - Zillebeke'),
(8681, '8904 - Boezinge'),
(8682, '8904 - Zuidschote'),
(8683, '8906 - Elverdinge'),
(8684, '8908 - Vlamertinge'),
(8685, '8920 - Bikschote'),
(8686, '8920 - Langemark'),
(8687, '8920 - Langemark-Poelkapelle'),
(8688, '8920 - Poelkapelle'),
(8689, '8930 - Lauwe'),
(8690, '8930 - Menen'),
(8691, '8930 - Rekkem'),
(8692, '8940 - Geluwe'),
(8693, '8940 - Wervik'),
(8694, '8950 - Heuvelland'),
(8695, '8950 - Nieuwkerke'),
(8696, '8951 - Dranouter'),
(8697, '8952 - Wulvergem'),
(8698, '8953 - Wijtschate'),
(8699, '8954 - Westouter'),
(8700, '8956 - Kemmel'),
(8701, '8957 - Mesen'),
(8702, '8957 - Messines'),
(8703, '8958 - Loker'),
(8704, '8970 - Poperinge'),
(8705, '8970 - Reningelst'),
(8706, '8972 - Krombeke'),
(8707, '8972 - Proven'),
(8708, '8972 - Roesbrugge-Haringe'),
(8709, '8978 - Watou'),
(8710, '8980 - Beselare'),
(8711, '8980 - Geluveld'),
(8712, '8980 - Passendale'),
(8713, '8980 - Zandvoorde'),
(8714, '8980 - Zonnebeke');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;