-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 30 jun 2022 om 13:03
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dirk_crudp4`
--
CREATE DATABASE IF NOT EXISTS `dirk_crudp4` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dirk_crudp4`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bericht`
--

CREATE TABLE `bericht` (
  `berichtID` int(6) NOT NULL,
  `naam` varchar(50) DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '',
  `bericht` text NOT NULL,
  `datum` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `bericht`
--

INSERT INTO `bericht` (`berichtID`, `naam`, `email`, `bericht`, `datum`) VALUES
(1, 'Dirk', 'dirk@gmail.com', 'Test', '2022-06-27'),
(2, 'Merdan', 'merdan@gmail.com', 'Test', '2022-06-27'),
(3, 'merdan', 'merdan@gmail.com', 'test\r\n', '2022-06-27');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `boekingen`
--

CREATE TABLE `boekingen` (
  `boekingID` int(6) NOT NULL,
  `gebruikerID` int(6) NOT NULL,
  `reisID` int(6) NOT NULL,
  `vliegveld` varchar(255) DEFAULT NULL,
  `volwassenen` int(6) DEFAULT NULL,
  `kinderen` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruikers`
--

CREATE TABLE `gebruikers` (
  `gebruikerID` int(6) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `voornaam` varchar(50) DEFAULT NULL,
  `achternaam` varchar(60) DEFAULT NULL,
  `isAdmin` tinyint(4) DEFAULT 0 COMMENT 'Altijd default value van 0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `gebruikers`
--

INSERT INTO `gebruikers` (`gebruikerID`, `username`, `password`, `voornaam`, `achternaam`, `isAdmin`) VALUES
(16, 'DirkEz', 'Dirk123', 'Dirk', 'Schaafstra', 1),
(17, 'Dirk', 'Dirk123', 'Dirk', 'Schaafstra', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `recenties`
--

CREATE TABLE `recenties` (
  `recentieID` int(6) NOT NULL,
  `hotel` varchar(255) DEFAULT NULL,
  `voornaam` varchar(50) NOT NULL DEFAULT '0',
  `achternaam` varchar(50) NOT NULL DEFAULT '',
  `bericht` text NOT NULL,
  `rating` int(1) NOT NULL DEFAULT 0,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `recenties`
--

INSERT INTO `recenties` (`recentieID`, `hotel`, `voornaam`, `achternaam`, `bericht`, `rating`, `datum`) VALUES
(17, 'Jakarta', 'Dirk', 'Schaafstra', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ultrices nisl a tincidunt interdum. Donec vehicula nibh sodales feugiat malesuada. Fusce tempor, leo consequat semper cursus, est nunc varius quam, ac ornare nulla nulla ut diam. Ut auctor nunc congue, mollis mi id, blandit ligula. Integer lorem eros, lacinia non fringilla et, lacinia in lorem. Vivamus mattis interdum neque, vitae laoreet risus porttitor vitae. Nullam eget rhoncus enim. Donec blandit leo magna, id accumsan ligula tristique a. Maecenas quis varius nisi, id porta augue. Aliquam in magna quis lacus posuere facilisis. Proin sit amet neque at ante euismod pretium id.', 4, '2022-06-29');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reizen`
--

CREATE TABLE `reizen` (
  `reisID` int(6) NOT NULL,
  `beginDatum` date DEFAULT NULL,
  `eindDatum` date DEFAULT NULL,
  `hotel` varchar(255) DEFAULT NULL,
  `prijs` int(4) DEFAULT NULL,
  `sterren` int(1) DEFAULT NULL,
  `Land` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `reizen`
--

INSERT INTO `reizen` (`reisID`, `beginDatum`, `eindDatum`, `hotel`, `prijs`, `sterren`, `Land`, `foto`) VALUES
(10, '2022-06-28', '2022-06-28', 'Et Suisse', 19, 4, 'Italie', '16356011.jpg'),
(12, '2022-06-27', '2022-06-28', 'Hilton', 30, 5, 'Amerika', 'hiltonamericas.jpg'),
(14, '2022-06-27', '2022-06-28', 'Jakarta', 15, 4, 'Nederland', 'Hotel-Jakarata-Amsterdam.jpg');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `bericht`
--
ALTER TABLE `bericht`
  ADD PRIMARY KEY (`berichtID`);

--
-- Indexen voor tabel `boekingen`
--
ALTER TABLE `boekingen`
  ADD PRIMARY KEY (`boekingID`) USING BTREE,
  ADD KEY `gebruikerID` (`gebruikerID`),
  ADD KEY `reisID` (`reisID`);

--
-- Indexen voor tabel `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD PRIMARY KEY (`gebruikerID`) USING BTREE;

--
-- Indexen voor tabel `recenties`
--
ALTER TABLE `recenties`
  ADD PRIMARY KEY (`recentieID`);

--
-- Indexen voor tabel `reizen`
--
ALTER TABLE `reizen`
  ADD PRIMARY KEY (`reisID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `bericht`
--
ALTER TABLE `bericht`
  MODIFY `berichtID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `boekingen`
--
ALTER TABLE `boekingen`
  MODIFY `boekingID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `gebruikerID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT voor een tabel `recenties`
--
ALTER TABLE `recenties`
  MODIFY `recentieID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT voor een tabel `reizen`
--
ALTER TABLE `reizen`
  MODIFY `reisID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `boekingen`
--
ALTER TABLE `boekingen`
  ADD CONSTRAINT `boekingen_ibfk_1` FOREIGN KEY (`gebruikerID`) REFERENCES `gebruikers` (`gebruikerID`),
  ADD CONSTRAINT `boekingen_ibfk_2` FOREIGN KEY (`reisID`) REFERENCES `reizen` (`reisID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
