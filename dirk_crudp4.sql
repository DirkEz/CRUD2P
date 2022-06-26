-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 26 jun 2022 om 21:14
-- Serverversie: 10.4.22-MariaDB
-- PHP-versie: 8.1.2

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
-- Tabelstructuur voor tabel `boekingen`
--

CREATE TABLE `boekingen` (
  `boekingID` int(6) NOT NULL,
  `gebruikerID` int(6) NOT NULL,
  `reisID` int(6) NOT NULL,
  `beginDatum` date NOT NULL,
  `EindDatum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contact`
--

CREATE TABLE `contact` (
  `contactID` int(6) NOT NULL,
  `gebruikerID` int(6) DEFAULT NULL,
  `voornaam` varchar(50) NOT NULL,
  `bericht` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `contact`
--

INSERT INTO `contact` (`contactID`, `gebruikerID`, `voornaam`, `bericht`) VALUES
(1, 4, 'Dirk', 'Test');

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
  `admin` tinyint(4) DEFAULT 0 COMMENT 'Altijd default value van 0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `gebruikers`
--

INSERT INTO `gebruikers` (`gebruikerID`, `username`, `password`, `voornaam`, `achternaam`, `admin`) VALUES
(4, 'DirkEz', 'Dirk123', 'Dirk', 'Schaafstra', 1),
(8, 'Dirk', 'Dirk123', 'Dirk', 'Schaafstra', 0),
(15, 'Merdan', 'hoidirk', 'Merdan', 'Can', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `recenties`
--

CREATE TABLE `recenties` (
  `recentieID` int(6) NOT NULL,
  `voornaam` varchar(50) NOT NULL DEFAULT '0',
  `achternaam` varchar(50) NOT NULL DEFAULT '',
  `bericht` text NOT NULL,
  `rating` int(1) NOT NULL DEFAULT 0,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `recenties`
--

INSERT INTO `recenties` (`recentieID`, `voornaam`, `achternaam`, `bericht`, `rating`, `datum`) VALUES
(2, 'Merdan', 'Can', 'vitae sapien pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas sed tempus urna et pharetra pharetra massa massa ultricies mi quis hendrerit dolor magna eget est lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas integer eget aliquet nibh praesent tristique magna sit amet purus gravida quis blandit turpis cursus in hac habitasse platea dictumst quisque sagittis purus sit amet volutpat consequat mauris nunc congue nisi vitae suscipit tellus mauris a diam maecenas sed enim ut sem viverra aliquet eget sit amet tellus', 5, '2022-06-23'),
(3, 'Dirk', 'Schaafstra', 'vitae sapien pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas sed tempus urna et pharetra pharetra massa massa ultricies mi quis hendrerit dolor magna eget est lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas integer eget aliquet nibh praesent tristique magna sit amet purus gravida quis blandit turpis cursus in hac habitasse platea dictumst quisque sagittis purus sit amet volutpat consequat mauris nunc congue nisi vitae suscipit tellus mauris a diam maecenas sed enim ut sem viverra aliquet eget sit amet tellus', 5, '2022-06-23'),
(4, 'Gavin', 'Tetteroo', 'vitae sapien pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas sed tempus urna et pharetra pharetra massa massa ultricies mi quis hendrerit dolor magna eget est lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas integer eget aliquet nibh praesent tristique magna sit amet purus gravida quis blandit turpis cursus in hac habitasse platea dictumst quisque sagittis purus sit amet volutpat consequat mauris nunc congue nisi vitae suscipit tellus mauris a diam maecenas sed enim ut sem viverra aliquet eget sit amet tellus', 2, '2022-06-23'),
(5, 'Leon', 'de Haas', 'vitae sapien pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas sed tempus urna et pharetra pharetra massa massa ultricies mi quis hendrerit dolor magna eget est lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas integer eget aliquet nibh praesent tristique magna sit amet purus gravida quis blandit turpis cursus in hac habitasse platea dictumst quisque sagittis purus sit amet volutpat consequat mauris nunc congue nisi vitae suscipit tellus mauris a diam maecenas sed enim ut sem viverra aliquet eget sit amet tellus', 3, '2022-06-23'),
(6, 'swagmaster69', '', 'gangstersite maar soms een beetje gettho', 69, '2022-06-23'),
(7, 'Randy', 'Jansen', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eu aliquet est, vitae rhoncus augue. Curabitur congue ex ipsum, a vulputate sem viverra id. Donec vel sapien eros. Curabitur elementum nulla nunc, sit amet lobortis urna bibendum at. Maecenas sodales quam tellus, sit amet euismod dolor pharetra et. Nunc suscipit consectetur augue sed aliquet. Etiam accumsan nisl sit amet diam varius, at tempor felis vehicula. Ut placerat sapien sed libero cursus molestie. Vestibulum sollicitudin condimentum enim, sit amet tincidunt lorem sollicitudin a. Interdum et malesuada fames ac ante ipsum primis in faucibus. In mollis convallis massa, sit amet tincidunt magna.', 3, '2022-06-23'),
(8, 'Youri', 'Gruiters', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eu aliquet est, vitae rhoncus augue. Curabitur congue ex ipsum, a vulputate sem viverra id. Donec vel sapien eros. Curabitur elementum nulla nunc, sit amet lobortis urna bibendum at. Maecenas sodales quam tellus, sit amet euismod dolor pharetra et. Nunc suscipit consectetur augue sed aliquet. Etiam accumsan nisl sit amet diam varius, at tempor felis vehicula. Ut placerat sapien sed libero cursus molestie. Vestibulum sollicitudin condimentum enim, sit amet tincidunt lorem sollicitudin a. Interdum et malesuada fames ac ante ipsum primis in faucibus. In mollis convallis massa, sit amet tincidunt magna.', 5, '2022-06-23'),
(9, 'Bjoreno', '.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eu aliquet est, vitae rhoncus augue. Curabitur congue ex ipsum, a vulputate sem viverra id. Donec vel sapien eros. Curabitur elementum nulla nunc, sit amet lobortis urna bibendum at. Maecenas sodales quam tellus, sit amet euismod dolor pharetra et. Nunc suscipit consectetur augue sed aliquet. Etiam accumsan nisl sit amet diam varius, at tempor felis vehicula. Ut placerat sapien sed libero cursus molestie. Vestibulum sollicitudin condimentum enim, sit amet tincidunt lorem sollicitudin a. Interdum et malesuada fames ac ante ipsum primis in faucibus. In mollis convallis massa, sit amet tincidunt magna.', 1, '2022-06-23'),
(10, 'hans', 'jansen', 'WOWWWWW DIT IS ECHT EEN DIKKE SITE PROMO MOGELIJK?', 5, '2022-06-23'),
(11, 'mo', 'azarkan', 'dikke oplichters. heb een reis teurg naar marokko geboekt door wilders, maar heb door deze kaulo website mijn tickets niet gekregen', 0, '2022-06-23');

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
(2, NULL, NULL, 'Van der Valk', 500, 4, 'Nederland', NULL),
(3, '2022-06-15', '2022-06-30', 'Van der Valk', 2500, 5, 'eqqweeqqe', 'unknown.png'),
(4, '2022-06-15', '2022-06-30', 'Van der Valk', 2500, 5, 'eqqweeqqe', 'unknown.png'),
(5, '2022-06-24', '2022-06-30', 'Van der Valk', 2500, 5, 'Nederland', 'unknown.png'),
(6, '2022-06-29', '2022-06-30', 'Van der Valk Lent', 2500, 5, 'Nederland', 'unknown.png');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `boekingen`
--
ALTER TABLE `boekingen`
  ADD PRIMARY KEY (`boekingID`,`beginDatum`,`EindDatum`) USING BTREE,
  ADD KEY `gebruikerID` (`gebruikerID`),
  ADD KEY `reisID` (`reisID`);

--
-- Indexen voor tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactID`) USING BTREE,
  ADD KEY `GebruikerID_contact` (`gebruikerID`);

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
-- AUTO_INCREMENT voor een tabel `boekingen`
--
ALTER TABLE `boekingen`
  MODIFY `boekingID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `gebruikerID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT voor een tabel `recenties`
--
ALTER TABLE `recenties`
  MODIFY `recentieID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT voor een tabel `reizen`
--
ALTER TABLE `reizen`
  MODIFY `reisID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `boekingen`
--
ALTER TABLE `boekingen`
  ADD CONSTRAINT `boekingen_ibfk_1` FOREIGN KEY (`gebruikerID`) REFERENCES `gebruikers` (`gebruikerID`),
  ADD CONSTRAINT `boekingen_ibfk_2` FOREIGN KEY (`reisID`) REFERENCES `reizen` (`reisID`);

--
-- Beperkingen voor tabel `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `GebruikerID_contact` FOREIGN KEY (`gebruikerID`) REFERENCES `gebruikers` (`gebruikerID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
