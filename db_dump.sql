-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 03. Jun 2019 um 20:19
-- Server-Version: 10.1.40-MariaDB
-- PHP-Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `video_platform`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_creator`
--

CREATE TABLE `tbl_creator` (
  `pk_creator` int(11) NOT NULL,
  `txt_name` text CHARACTER SET latin1,
  `txt_creatorImage` text CHARACTER SET latin1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `tbl_creator`
--

INSERT INTO `tbl_creator` (`pk_creator`, `txt_name`, `txt_creatorImage`) VALUES
(1, 'Geralt', 'creator_geralt.jpg'),
(2, 'Ciri', 'creator_ciri.jpg'),
(3, 'Vesimir', 'creator_vesimir.jpg'),
(4, 'Yennefer', 'creator_yennefer.jpg');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_folge`
--

CREATE TABLE `tbl_folge` (
  `pk_folge` int(11) NOT NULL,
  `fk_game` int(11) DEFAULT NULL,
  `int_folgennummer` int(11) DEFAULT NULL,
  `txt_folgentitel` text CHARACTER SET utf8,
  `txt_folgenbeschreibung` text CHARACTER SET utf8,
  `txt_thumbnailImage` text CHARACTER SET utf8,
  `upload_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `txt_filepath` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `tbl_folge`
--

INSERT INTO `tbl_folge` (`pk_folge`, `fk_game`, `int_folgennummer`, `txt_folgentitel`, `txt_folgenbeschreibung`, `txt_thumbnailImage`, `upload_date`, `txt_filepath`) VALUES
(1, 1, 1, 'Darude Sandstorm', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.  amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', 'thumbnail_folge1.jpg', '2019-01-08 21:26:54', 'y6120QOlsfU'),
(2, 2, 2, 'Darude Sandstorm', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.  amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', 'thumbnail_folge2.jpg', '2019-01-09 21:26:54', 'y6120QOlsfU'),
(3, 3, 3, 'Darude Sandstorm', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.  amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', 'thumbnail_folge3.jpg', '2019-01-10 21:26:54', 'y6120QOlsfU'),
(4, 4, 4, 'Darude Sandstorm', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.  amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', 'thumbnail_folge4.jpg', '2019-01-11 21:26:54', 'y6120QOlsfU'),
(5, 5, 5, 'Darude Sandstorm', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.  amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', 'thumbnail_folge5.jpg', '2019-01-12 21:26:54', 'y6120QOlsfU'),
(6, 6, 1, 'Darude Sandstorm', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.  amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', 'thumbnail_folge1.jpg', '2019-01-13 21:26:54', 'y6120QOlsfU'),
(7, 1, 2, 'Darude Sandstorm', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.  amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', 'thumbnail_folge2.jpg', '2019-01-14 21:26:54', 'y6120QOlsfU'),
(8, 2, 3, 'Darude Sandstorm', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.  amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', 'thumbnail_folge3.jpg', '2019-01-15 21:26:54', 'y6120QOlsfU'),
(9, 3, 4, 'Darude Sandstorm', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.  amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', 'thumbnail_folge4.jpg', '2019-01-16 21:26:54', 'y6120QOlsfU'),
(10, 4, 5, 'Darude Sandstorm', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.  amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', 'thumbnail_folge5.jpg', '2019-01-17 21:26:54', 'y6120QOlsfU'),
(11, 5, 1, 'Darude Sandstorm', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.  amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', 'thumbnail_folge1.jpg', '2019-01-18 21:26:54', 'y6120QOlsfU'),
(12, 6, 2, 'Darude Sandstorm', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.  amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', 'thumbnail_folge2.jpg', '2019-01-19 21:26:54', 'y6120QOlsfU'),
(13, 1, 3, 'Darude Sandstorm', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.  amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', 'thumbnail_folge3.jpg', '2019-01-20 21:26:54', 'y6120QOlsfU'),
(14, 2, 4, 'Darude Sandstorm', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.  amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', 'thumbnail_folge4.jpg', '2019-01-21 21:26:54', 'y6120QOlsfU'),
(15, 3, 5, 'Darude Sandstorm', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.  amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', 'thumbnail_folge5.jpg', '2019-01-22 21:26:54', 'y6120QOlsfU'),
(16, 4, 1, 'Darude Sandstorm', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.  amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', 'thumbnail_folge1.jpg', '2019-01-23 21:26:54', 'y6120QOlsfU'),
(17, 5, 2, 'Darude Sandstorm', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.  amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', 'thumbnail_folge2.jpg', '2019-01-24 21:26:54', 'y6120QOlsfU'),
(18, 6, 3, 'Darude Sandstorm', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.  amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', 'thumbnail_folge3.jpg', '2019-01-25 21:26:54', 'y6120QOlsfU'),
(19, 1, 4, 'Darude Sandstorm', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.  amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', 'thumbnail_folge4.jpg', '2019-01-08 21:20:54', 'y6120QOlsfU'),
(20, 2, 5, 'Darude Sandstorm', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.  amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', 'thumbnail_folge5.jpg', '2019-01-09 21:20:54', 'y6120QOlsfU'),
(21, 3, 1, 'Darude Sandstorm', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.  amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', 'thumbnail_folge1.jpg', '2019-01-10 21:20:54', 'y6120QOlsfU'),
(22, 4, 2, 'Darude Sandstorm', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.  amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', 'thumbnail_folge2.jpg', '2019-01-11 21:20:54', 'y6120QOlsfU'),
(23, 5, 3, 'Darude Sandstorm', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.  amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', 'thumbnail_folge3.jpg', '2019-01-12 21:20:54', 'y6120QOlsfU'),
(24, 6, 4, 'Darude Sandstorm', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.  amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', 'thumbnail_folge4.jpg', '2019-01-13 21:20:54', 'y6120QOlsfU'),
(25, 1, 5, 'Darude Sandstorm', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.  amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', 'thumbnail_folge5.jpg', '2019-01-14 21:20:54', 'y6120QOlsfU'),
(26, 2, 1, 'Darude Sandstorm', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.  amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', 'thumbnail_folge1.jpg', '2019-01-15 21:20:54', 'y6120QOlsfU'),
(27, 3, 2, 'Darude Sandstorm', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.  amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', 'thumbnail_folge2.jpg', '2019-01-16 21:20:54', 'y6120QOlsfU'),
(28, 4, 3, 'Darude Sandstorm', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.  amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', 'thumbnail_folge3.jpg', '2019-01-17 21:20:54', 'y6120QOlsfU'),
(29, 5, 4, 'Darude Sandstorm', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.  amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', 'thumbnail_folge4.jpg', '2019-01-18 21:20:54', 'y6120QOlsfU'),
(30, 6, 5, 'Darude Sandstorm', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.  amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', 'thumbnail_folge5.jpg', '2019-01-19 21:20:54', 'y6120QOlsfU');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_game`
--

CREATE TABLE `tbl_game` (
  `pk_game` int(11) NOT NULL,
  `txt_gamename` text CHARACTER SET latin1,
  `txt_coverImage` text CHARACTER SET latin1,
  `creation_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fk_creator` int(11) DEFAULT NULL,
  `int_source` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `tbl_game`
--

INSERT INTO `tbl_game` (`pk_game`, `txt_gamename`, `txt_coverImage`, `creation_date`, `fk_creator`, `int_source`) VALUES
(1, 'The Witcher 1', 'cover_thewitcher1.jpg', '2019-01-08 21:26:54', 1, 1),
(2, 'The Witcher 2', 'cover_thewitcher2.jpg', '2019-01-06 21:26:54', 2, 1),
(3, 'The Witcher 3', 'cover_thewitcher3.jpg', '2019-01-02 21:26:54', 3, 1),
(4, 'Crysis 1', 'cover_crysis1.jpg', '2019-01-01 21:26:54', 4, 1),
(5, 'Crysis 2', 'cover_crysis2.jpg', '2018-12-25 21:26:54', 1, 1),
(6, 'Crysis 3', 'cover_crysis3.jpg', '2018-12-12 21:26:54', 2, 1);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `tbl_creator`
--
ALTER TABLE `tbl_creator`
  ADD PRIMARY KEY (`pk_creator`);

--
-- Indizes für die Tabelle `tbl_folge`
--
ALTER TABLE `tbl_folge`
  ADD PRIMARY KEY (`pk_folge`),
  ADD KEY `fk_game` (`fk_game`);

--
-- Indizes für die Tabelle `tbl_game`
--
ALTER TABLE `tbl_game`
  ADD PRIMARY KEY (`pk_game`),
  ADD KEY `fk_creator` (`fk_creator`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `tbl_creator`
--
ALTER TABLE `tbl_creator`
  MODIFY `pk_creator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `tbl_folge`
--
ALTER TABLE `tbl_folge`
  MODIFY `pk_folge` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT für Tabelle `tbl_game`
--
ALTER TABLE `tbl_game`
  MODIFY `pk_game` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `tbl_folge`
--
ALTER TABLE `tbl_folge`
  ADD CONSTRAINT `tbl_folge_ibfk_1` FOREIGN KEY (`fk_game`) REFERENCES `tbl_game` (`pk_game`);

--
-- Constraints der Tabelle `tbl_game`
--
ALTER TABLE `tbl_game`
  ADD CONSTRAINT `tbl_game_ibfk_1` FOREIGN KEY (`fk_creator`) REFERENCES `tbl_creator` (`pk_creator`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
