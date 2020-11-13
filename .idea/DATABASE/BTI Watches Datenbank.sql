-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 02. Nov 2020 um 21:34
-- Server-Version: 10.4.14-MariaDB
-- PHP-Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `btiwatches.de`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_armband`
--

CREATE TABLE `tbl_armband` (
  `id_armband` int(11) NOT NULL,
  `bezeichnungarmband` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `materialarmband` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `schliesse` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `tbl_armband`
--

INSERT INTO `tbl_armband` (`id_armband`, `bezeichnungarmband`, `materialarmband`, `schliesse`) VALUES
(1, 'Oyster, dreireihig, flache Elemente', 'Edelstahl Oystersteel', 'Oysterclasp-Faltschließe mit komfortabler 5‑mm-Easylink-Verlängerung'),
(2, 'Oysterflex-Band', 'Flexible Metallfederblätter überzogen mit hochwertigem Elastomer', 'Oysterlock-Sicherheitsfaltschließe mit Rolex Glidelock-Verlängerungssystem'),
(3, 'Oyster, dreireihig, flache Elemente', 'Rolesor gelb (Kombination aus Edelstahl Oystersteel und 18 Karat Gelbgold)', 'Oysterlock-Sicherheitsfaltschließe mit Rolex Glidelock-Verlängerungssystem'),
(4, 'Oyster, dreireihig, flache Elemente', 'Edelstahl Oystersteel', 'Oysterclasp-Faltschließe mit komfortabler 5‑mm-Easylink-Verlängerung');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_favorits`
--

CREATE TABLE `tbl_favorits` (
  `id_favorits` int(11) NOT NULL,
  `uhren_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_gehaeuse`
--

CREATE TABLE `tbl_gehaeuse` (
  `id_gehaeuse` int(11) NOT NULL,
  `bezeichnunggehaeuse` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `aufbau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `durchmesser` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `materialgehaeuse` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `luenette` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `aufzugskrone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `uhrglas` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `wasserdichtheit` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `tbl_gehaeuse`
--

INSERT INTO `tbl_gehaeuse` (`id_gehaeuse`, `bezeichnunggehaeuse`, `aufbau`, `durchmesser`, `materialgehaeuse`, `luenette`, `aufzugskrone`, `uhrglas`, `wasserdichtheit`) VALUES
(1, 'Oyster, 31 mm, Edelstahl Oystersteel und Weißgold mit Diamanten', 'Monoblock-Mittelteil, verschraubter Gehäuseboden und verschraubbare Aufzugskrone', '31 mm', 'Rolesor weiß (Kombination aus Edelstahl Oystersteel und 18 Karat Weißgold)', 'Diamantlünette', 'Verschraubbare Twinlock-Aufzugskrone mit doppeltem Dichtungssystem', 'Kratzfestes Saphirglas, Zykloplupe zur Vergrößerung des Datums', 'Bis 100 Meter Tiefe wasserdicht'),
(2, 'Oyster, 42 mm, Gelbgold', 'Monoblock-Mittelteil, verschraubter Gehäuseboden und verschraubbare Aufzugskrone', '42 mm', '18 Karat Gelbgold', 'Geriffelte, in beide Richtungen drehbare Rolex Ring-Command-Lünette', 'Verschraubbare Twinlock-Aufzugskrone mit doppeltem Dichtungssystem', 'Kratzfestes Saphirglas, Zykloplupe zur Vergrößerung des Datums', 'Bis 100 Meter Tiefe wasserdicht'),
(3, 'Oyster, 41 mm, Edelstahl Oystersteel und Gelbgold', 'Monoblock-Mittelteil, verschraubter Gehäuseboden und verschraubbare Aufzugskrone', '41 mm', 'Rolesor gelb (Kombination aus Edelstahl Oystersteel und 18 Karat Gelbgold)', 'In eine Richtung drehbare Lünette mit 60-Minuten-Graduierung und äußerst kratzfester Cerachrom-Zahle', 'Verschraubbare Triplock-Aufzugskrone mit dreifachem Dichtungssystem', 'Kratzfestes Saphirglas, Zykloplupe zur Vergrößerung des Datums', 'Bis 300 Meter Tiefe wasserdicht'),
(4, 'Oyster, 41 mm, Edelstahl Oystersteel', 'Monoblock-Mittelteil, verschraubter Gehäuseboden und verschraubbare Aufzugskrone', '41 mm', 'Edelstahl Oystersteel', 'Bombiert', 'Verschraubbare Twinlock-Aufzugskrone mit doppeltem Dichtungssystem', 'Kratzfestes Saphirglas', 'Bis 100 Meter Tiefe wasserdicht');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_hersteller`
--

CREATE TABLE `tbl_hersteller` (
  `id_hersteller` int(11) NOT NULL,
  `bezeichnunghersteller` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `tbl_hersteller`
--

INSERT INTO `tbl_hersteller` (`id_hersteller`, `bezeichnunghersteller`) VALUES
(1, 'Rolex'),
(2, 'Hubolt'),
(3, 'Audemars Pique'),
(4, 'Breitling'),
(5, 'Richard Mille');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_kauf`
--

CREATE TABLE `tbl_kauf` (
  `user_id` int(11) NOT NULL,
  `favorits_id` int(11) NOT NULL,
  `hinzugefügt_am` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_technische_details`
--

CREATE TABLE `tbl_technische_details` (
  `id_technische_details` int(11) NOT NULL,
  `gehaeuse_id` int(11) NOT NULL,
  `uhrwerk_id` int(11) NOT NULL,
  `armband_id` int(11) NOT NULL,
  `zifferblatt_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `tbl_technische_details`
--

INSERT INTO `tbl_technische_details` (`id_technische_details`, `gehaeuse_id`, `uhrwerk_id`, `armband_id`, `zifferblatt_id`) VALUES
(1, 1, 1, 1, 1),
(2, 2, 2, 2, 2),
(3, 3, 3, 3, 3),
(4, 4, 4, 4, 4);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_uhren`
--

CREATE TABLE `tbl_uhren` (
  `id_uhren` int(11) NOT NULL,
  `hersteller_id` int(11) NOT NULL,
  `technische_details_id` int(11) NOT NULL,
  `bezeichnunguhren` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `preis` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `bildname` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `tbl_uhren`
--

INSERT INTO `tbl_uhren` (`id_uhren`, `hersteller_id`, `technische_details_id`, `bezeichnunguhren`, `preis`, `bildname`) VALUES
(1, 1, 1, 'Datejust 31', '14.650€', 'Datejust 31.png'),
(2, 1, 2, 'SKY-DWELLER', '36.400€', 'SKY-DWELLER.png'),
(3, 1, 3, 'Submariner Date', '13.000€', 'Submariner Date.png'),
(4, 1, 4, 'Oyster Perpetual 41', '5.350€', 'Oyster Perpetual 41.png');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_uhrwerk`
--

CREATE TABLE `tbl_uhrwerk` (
  `id_uhrwerk` int(11) NOT NULL,
  `bezeichnunguhrwerk` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `kalieber` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ganggenauigkeit` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `funktionen` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `aufzug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gangreserve` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `tbl_uhrwerk`
--

INSERT INTO `tbl_uhrwerk` (`id_uhrwerk`, `bezeichnunguhrwerk`, `kalieber`, `ganggenauigkeit`, `funktionen`, `aufzug`, `gangreserve`) VALUES
(1, 'Mechanisches Perpetual-Uhrwerk, Selbstaufzugsmechanismus', '2236, Rolex Manufakturwerk', '-2/+2 Sekunden pro Tag, gemessen nach dem Einschalen des Uhrwerks', 'Stunden-, Minuten- und Sekundenzeiger im Zentrum. Automatischer Datumswechsel mit Schnellkorrektur. ', 'Selbstaufzugsmechanismus, in beide Richtungen aufziehend, Perpetual-Rotor', 'Circa 55 Stunden'),
(2, 'Mechanisches Perpetual-Uhrwerk mit Selbstaufzugsmechanismus, zweite Zeitzone, Jahreskalender', '9001, Rolex Manufakturwerk', '-2/+2 Sekunden pro Tag, gemessen nach dem Einschalen des Uhrwerks', 'Stunden-, Minuten- und Sekundenzeiger im Zentrum. 24-Stunden-Anzeige mit ex­zen­trischer Zahlenschei', 'Selbstaufzugsmechanismus, in beide Richtungen aufziehend, Perpetual-Rotor', 'Circa 72 Stunden'),
(3, 'Mechanisches Perpetual-Uhrwerk, Selbstaufzugsmechanismus', '3235, Rolex Manufakturwerk', '-2/+2 Sekunden pro Tag, gemessen nach dem Einschalen des Uhrwerks', 'Stunden-, Minuten- und Sekundenzeiger im Zentrum. Automatischer Datumswechsel mit Schnellkorrektur. ', 'Selbstaufzugsmechanismus, in beide Richtungen aufziehend, Perpetual-Rotor', 'Circa 70 Stunden'),
(4, 'Mechanisches Perpetual-Uhrwerk, Selbstaufzugsmechanismus', '3230, Rolex Manufakturwerk', '-2/+2 Sekunden pro Tag, gemessen nach dem Einschalen des Uhrwerks', 'Stunden-, Minuten- und Sekundenzeiger im Zentrum. Sekundenstopp für genaues Einstellen der Zeit', 'Selbstaufzugsmechanismus, in beide Richtungen aufziehend, Perpetual-Rotor', 'Circa 70 Stunden');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `benutzername` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vorname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nachname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `passwort` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `beigetreten_am` date NOT NULL,
  `geschlecht` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `benutzername`, `vorname`, `nachname`, `email`, `passwort`, `beigetreten_am`, `geschlecht`) VALUES
(1, 'Shweit', 'Dennis', 'van den Brock', 'dennisvandenbrock54@gmail.com', 'Denn!s0907', '2020-11-01', 'Männlich'),
(2, 'Shweit1', 'Moritz', 'Felser', 'dennisvandenbrock4@gmail.com', 'Denn!s0907', '2020-11-02', 'Männlich');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_zifferblatt`
--

CREATE TABLE `tbl_zifferblatt` (
  `id_zifferblatt` int(11) NOT NULL,
  `bezeichnungzifferblatt` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `tbl_zifferblatt`
--

INSERT INTO `tbl_zifferblatt` (`id_zifferblatt`, `bezeichnungzifferblatt`) VALUES
(1, 'Auberginefarben mit Diamanten'),
(2, 'Strahlend schwarz'),
(3, 'Königsblau'),
(4, 'Silbern');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `tbl_armband`
--
ALTER TABLE `tbl_armband`
  ADD PRIMARY KEY (`id_armband`);

--
-- Indizes für die Tabelle `tbl_favorits`
--
ALTER TABLE `tbl_favorits`
  ADD PRIMARY KEY (`id_favorits`),
  ADD KEY `uhren_id` (`uhren_id`);

--
-- Indizes für die Tabelle `tbl_gehaeuse`
--
ALTER TABLE `tbl_gehaeuse`
  ADD PRIMARY KEY (`id_gehaeuse`);

--
-- Indizes für die Tabelle `tbl_hersteller`
--
ALTER TABLE `tbl_hersteller`
  ADD PRIMARY KEY (`id_hersteller`);

--
-- Indizes für die Tabelle `tbl_kauf`
--
ALTER TABLE `tbl_kauf`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `favorits_id` (`favorits_id`);

--
-- Indizes für die Tabelle `tbl_technische_details`
--
ALTER TABLE `tbl_technische_details`
  ADD PRIMARY KEY (`id_technische_details`),
  ADD KEY `gehaeuse_id` (`gehaeuse_id`),
  ADD KEY `uhrwerk_id` (`uhrwerk_id`),
  ADD KEY `armband_id` (`armband_id`),
  ADD KEY `zifferblatt_id` (`zifferblatt_id`);

--
-- Indizes für die Tabelle `tbl_uhren`
--
ALTER TABLE `tbl_uhren`
  ADD PRIMARY KEY (`id_uhren`),
  ADD KEY `hersteller_id` (`hersteller_id`),
  ADD KEY `technische_details_id` (`technische_details_id`);

--
-- Indizes für die Tabelle `tbl_uhrwerk`
--
ALTER TABLE `tbl_uhrwerk`
  ADD PRIMARY KEY (`id_uhrwerk`);

--
-- Indizes für die Tabelle `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indizes für die Tabelle `tbl_zifferblatt`
--
ALTER TABLE `tbl_zifferblatt`
  ADD PRIMARY KEY (`id_zifferblatt`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
