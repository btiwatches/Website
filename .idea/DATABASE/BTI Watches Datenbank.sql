-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 18. Nov 2020 um 20:15
-- Server-Version: 10.4.14-MariaDB
-- PHP-Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `btiwatches`
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
(4, 'Oyster, dreireihig, flache Elemente', 'Edelstahl Oystersteel', 'Oysterclasp-Faltschließe mit komfortabler 5‑mm-Easylink-Verlängerung'),
(5, 'President, dreireihig, halbrunde Elemente', '18 Karat Gelbgold', 'Verdeckte Crownclasp-Faltschließe'),
(6, 'Oysterflex-Band', 'Flexible Metallfederblätter überzogen mit hochwertigem Elastomer', 'Oysterlock-Sicherheitsfaltschließe mit Rolex Glidelock-Verlängerungssystem'),
(7, 'Jubilee, fünfreihig', 'Edelstahl Oystersteel', 'Oysterlock-Sicherheitsfaltschließe mit komfortabler 5‑mm-Easylink-Verlängerung'),
(8, 'Jubilee, fünfreihig', 'Rolesor gelb (Kombination aus Edelstahl Oystersteel und 18 Karat Gelbgold)', 'Verdeckte Crownclasp-Faltschließe'),
(9, 'Oyster, dreireihig, flache Elemente', 'Edelstahl Oystersteel', 'Oysterclasp-Faltschließe mit komfortabler 5‑mm-Easylink-Verlängerung\r\n'),
(10, 'Oyster, dreireihig, flache Elemente', 'Edelstahl Oystersteel', 'Oysterclasp-Faltschließe mit komfortabler 5‑mm-Easylink-Verlängerung'),
(11, 'Armband aus schwarzem und blauem strukturierten und gefütterten Kautschuk', '', 'Faltschließe aus Titan'),
(12, 'Armband aus schwarzem gefütterten Kautschuk', 'Kautschuk', 'Faltschließe aus Edelstahl'),
(13, 'Armband aus schwarzem strukturiertem und gefüttertem Kautschuk', '\r\nTitan', 'Faltschließe aus Titan'),
(14, 'Armband aus grauem, glattem Kautschuk', 'Kautschuk', 'Faltschließe aus Titan'),
(15, 'Armband aus schwarzem Kautschuk', 'Kautschuk', 'Faltschließe aus schwarzer Keramik und schwarzplattiertem Titan\r\n'),
(16, 'Armband aus schwarzem und blauem strukturierten und gefütterten Kautschuk\r\n', 'Kautschuk', 'Faltschließe aus schwarzer Keramik und schwarzplattiertem Titan\r\n\r\n'),
(17, 'Armband aus schwarzem Kautschuk und mehrfarbigem Alligatorleder\r\n', 'Alligatorleder', 'Faltschließe aus 18 Karat King Gold und schwarzplattiertem Edelstahl\r\n');

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
(4, 'Oyster, 41 mm, Edelstahl Oystersteel', 'Monoblock-Mittelteil, verschraubter Gehäuseboden und verschraubbare Aufzugskrone', '41 mm', 'Edelstahl Oystersteel', 'Bombiert', 'Verschraubbare Twinlock-Aufzugskrone mit doppeltem Dichtungssystem', 'Kratzfestes Saphirglas', 'Bis 100 Meter Tiefe wasserdicht'),
(5, 'Oyster, 40 mm, Gelbgold', 'Monoblock-Mittelteil, verschraubter Gehäuseboden und verschraubbare Aufzugskrone', '40 mm', '18 Karat Gelbgold', 'Geriffelt', 'Verschraubbare Twinlock-Aufzugskrone mit doppeltem Dichtungssystem', 'Kratzfestes Saphirglas, Zykloplupe zur Vergrößerung des Datums', 'Bis 100 Meter Tiefe wasserdicht'),
(6, 'Oyster, 42 mm, Weißgold', 'Monoblock-Mittelteil, verschraubter Gehäuseboden und verschraubbare Aufzugskrone', '42 mm', '18 Karat Weißgold', 'In beide Richtungen drehbare Lünette mit 60‑Minuten-Graduierung, Cerachrom-Zahlenscheibe aus mattsch', 'Verschraubbare Triplock-Aufzugskrone mit dreifachem Dichtungssystem', 'Kratzfestes Saphirglas, Zykloplupe zur Vergrößerung des Datums', 'Bis 100 Meter Tiefe wasserdicht'),
(7, 'Oyster, 40 mm, Edelstahl Oystersteel', 'Monoblock-Mittelteil, verschraubter Gehäuseboden und verschraubbare Aufzugskrone', '40 mm', 'Edelstahl Oystersteel', 'In beide Richtungen drehbare Lünette mit 24-Stunden-Graduierung. Zweifarbige Cerachrom-Zahlenscheibe', 'Verschraubbare Triplock-Aufzugskrone mit dreifachem Dichtungssystem', 'Kratzfestes Saphirglas, Zykloplupe zur Vergrößerung des Datums', 'Bis 100 Meter Tiefe wasserdicht'),
(8, 'Oyster, 28 mm, Edelstahl Oystersteel und Gelbgold', 'Monoblock-Mittelteil, verschraubter Gehäuseboden und verschraubbare Aufzugskrone', '28 mm', 'Rolesor gelb (Kombination aus Edelstahl Oystersteel und 18 Karat Gelbgold)', 'Geriffelt', 'Verschraubbare Twinlock-Aufzugskrone mit doppeltem Dichtungssystem', 'Kratzfestes Saphirglas, Zykloplupe zur Vergrößerung des Datums', 'Bis 100 Meter Tiefe wasserdicht'),
(9, 'Oyster, 40 mm, Edelstahl Oystersteel', 'Monoblock-Mittelteil, verschraubter Gehäuseboden und verschraubbare Aufzugskrone', '40 mm', 'Edelstahl Oystersteel', 'Poliert', 'Verschraubbare Twinlock-Aufzugskrone mit doppeltem Dichtungssystem', 'Kratzfestes Saphirglas', '\r\nBis 100 Meter Tiefe wasserdicht'),
(10, 'Oyster, 40 mm, Edelstahl Oystersteel', 'Monoblock-Mittelteil, verschraubter Gehäuseboden und verschraubbare Aufzugskrone\r\n', '40 mm', 'Edelstahl Oystersteel', 'Poliert', 'Verschraubbare Twinlock-Aufzugskrone mit doppeltem Dichtungssystem', 'Kratzfestes Saphirglas, grün', 'Bis 100 Meter Tiefe wasserdicht'),
(11, 'Satiniertes und poliertes Titan', 'Satiniertes und poliertes Titan', '42 mm', 'Titan', 'Satiniertes und poliertes Titan mit 6 h-förmigen Schrauben aus Titan', '', 'Entspiegeltes Saphirglas', '100 m oder 10 ATM'),
(12, 'Satiniertes und poliertes Titan', '', '45 mm', 'Titan', 'Vertikal satiniertes Titan mit 6 h-förmigen Schrauben aus Titan', '', 'Entspiegeltes Saphirglas', '50 m oder 5 ATM'),
(13, 'Satiniertes und poliertes Titan', '', '45 mm', 'Titan', 'Titan', '', 'Saphirglas', '50 m oder 5 ATM'),
(14, 'Glasperlgestrahltes 18 Karat Weißgold mit Schrauben aus Titan', '', '45 mm', 'Titan', 'Poliertes 18 Karat Magic Gold mit 6 h-förmigen Schrauben aus schwarzplattiertem Titan', '', 'Entspiegeltes Saphirglas', '30 m oder 3 ATM'),
(15, 'Satinierte und polierte schwarze Keramik\r\n', '', '45 mm\r\n', 'Keramik', 'Satinierte und polierte schwarze Keramik mit 6 h-förmigen Schrauben aus Titan\r\n', '', 'Entspiegeltes mehrfach facettiertes Saphirglas\r\n', '100 m oder 10 ATM\r\n'),
(16, 'Glasperlgestrahlte und polierte blaue Keramik\r\n', '', '42 mm\r\n', 'Keramik', 'Glasperlgestrahlte und polierte blaue Keramik\r\n', '', 'Entspiegeltes Saphirglas\r\n', '30 m oder 3 ATM\r\n'),
(17, 'Satiniertes und poliertes 18 Karat King Gold Mit 166 farbigen Edelsteinen besetzt\r\n', '', '42 mm\r\n', '', 'Poliertes 18 Karat King Gold Mit 54 farbigen Edelsteinen im Baguetteschliff besetzt 6 h-förmige Schr', '', 'Entspiegeltes Saphirglas\r\n', '100 m oder 10 ATM\r\n');

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
(2, 'Hublot'),
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
(4, 4, 4, 4, 4),
(5, 5, 5, 5, 5),
(6, 6, 6, 6, 6),
(7, 7, 7, 7, 7),
(8, 8, 8, 8, 8),
(9, 9, 9, 9, 9),
(10, 10, 10, 10, 10),
(11, 11, 11, 11, 11),
(12, 12, 12, 12, 12),
(13, 13, 13, 13, 13),
(14, 14, 14, 14, 14),
(15, 15, 15, 15, 15),
(16, 16, 16, 16, 16),
(17, 17, 17, 17, 17);

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
(1, 1, 1, 'DATEJUST 31', '14.650€', 'Datejust 31.png'),
(2, 1, 2, 'SKY-DWELLER', '36.400€', 'SKY-DWELLER.png'),
(3, 1, 3, 'SUBMARINER DATE', '13.000€', 'Submariner Date.png'),
(4, 1, 4, 'Oyster Perpetual 41', '5.350€', 'Oyster Perpetual 41.png'),
(5, 1, 5, 'DAY‑DATE 40', '33.300 €', 'DAY‑DATE 40.png'),
(6, 1, 6, 'YACHT‑MASTER 42', '26.300€', 'Yachtmaster 42.png'),
(7, 1, 7, 'GMT-Master II', '8.800 €\r\n\r\n', 'Gmt-master 2.png'),
(8, 1, 8, 'LADY‑DATEJUST', '10.500 €\r\n\r\n', 'Ladydatejust.png'),
(9, 1, 9, 'AIR‑KING\r\n\r\n', '5.850 €', 'rolex airking.png'),
(10, 1, 10, 'MILGAUSS', '7.600 €', 'rolex milgauss.png'),
(11, 2, 11, 'BIG BANG\r\nUNICO TITANIUM BLUE', '17,500€', 'BIG BANG.png'),
(12, 2, 12, 'CLASSIC FUSION\r\nCHRONOGRAPH TITANIUM', '10.300€', 'CLASSIC FUSION.png\r\n'),
(13, 2, 13, 'SPIRIT OF BIG BANG\r\nMECA-10 TITANIUM', '22,700€', 'SPIRIT OF BIG BANG.png\r\n'),
(14, 2, 14, 'MP\r\nTECHFRAME FERRARI TOURBILLON CHRONOGRAPH SAPPHIRE WHITE GOLD', '177,000€', 'TECHFRAME FERRARI TOURBILLON CHRONOGRAPH SAPPHIRE WHITE GOLD.png'),
(15, 2, 15, 'BIG BANG\r\nSANG BLEU II ALL BLACK', '26,900€', 'SANG BLEU II ALL BLACK.png\r\n'),
(16, 2, 16, 'BIG BANG\r\nE UEFA CHAMPIONS LEAGUE™', '7,000€', 'E UEFA CHAMPIONS LEAGUE™.png\r\n'),
(17, 2, 17, 'SPIRIT OF BIG BANG\r\nKING GOLD RAINBOW', '92,400€', 'KING GOLD RAINBOW.png\r\n');

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
(4, 'Mechanisches Perpetual-Uhrwerk, Selbstaufzugsmechanismus', '3230, Rolex Manufakturwerk', '-2/+2 Sekunden pro Tag, gemessen nach dem Einschalen des Uhrwerks', 'Stunden-, Minuten- und Sekundenzeiger im Zentrum. Sekundenstopp für genaues Einstellen der Zeit', 'Selbstaufzugsmechanismus, in beide Richtungen aufziehend, Perpetual-Rotor', 'Circa 70 Stunden'),
(5, 'Mechanisches Perpetual-Uhrwerk, Selbstaufzugsmechanismus', '3255, Rolex Manufakturwerk', '-2/+2 Sekunden pro Tag, gemessen nach dem Einschalen des Uhrwerks', 'Stunden-, Minuten- und Sekundenzeiger im Zentrum. Automatischer Datums- und Wochentagswechsel in Sic', 'Selbstaufzugsmechanismus, in beide Richtungen aufziehend, Perpetual-Rotor', 'Circa 70 Stunden'),
(6, 'Mechanisches Perpetual-Uhrwerk, Selbstaufzugsmechanismus', '3235, Rolex Manufakturwerk', '-2/+2 Sekunden pro Tag, gemessen nach dem Einschalen des Uhrwerks', 'Stunden-, Minuten- und Sekundenzeiger im Zentrum. Automatischer Datumswechsel mit Schnellkorrektur. ', 'Selbstaufzugsmechanismus, in beide Richtungen aufziehend, Perpetual-Rotor', 'Circa 70 Stunden'),
(7, 'Mechanisches Perpetual-Uhrwerk mit Selbstaufzugsmechanismus, GMT-Funktion', '3285, Rolex Manufakturwerk', '-2/+2 Sekunden pro Tag, gemessen nach dem Einschalen des Uhrwerks', 'Stunden-, Minuten- und Sekundenzeiger im Zentrum. 24-Stunden-Anzeige. Gleichzeitige Anzeige einer zw', 'Selbstaufzugsmechanismus, in beide Richtungen aufziehend, Perpetual-Rotor', 'Circa 70 Stunden\r\n'),
(8, 'Mechanisches Perpetual-Uhrwerk, Selbstaufzugsmechanismus', '2236, Rolex Manufakturwerk', '-2/+2 Sekunden pro Tag, gemessen nach dem Einschalen des Uhrwerks', 'Stunden-, Minuten- und Sekundenzeiger im Zentrum. Automatischer Datumswechsel mit Schnellkorrektur. ', 'Selbstaufzugsmechanismus, in beide Richtungen aufziehend, Perpetual-Rotor', 'Circa 55 Stunden'),
(9, 'Mechanisches Perpetual-Uhrwerk mit Selbstaufzugsmechanismus, Schutz des Uhrwerks durch magnetischen ', '3131, Rolex Manufakturwerk', '-2/+2 Sekunden pro Tag, gemessen nach dem Einschalen des Uhrwerks', 'Stunden-, Minuten- und Sekundenzeiger im Zentrum. Sekundenstopp für genaues Einstellen der Zeit', 'Selbstaufzugsmechanismus, in beide Richtungen aufziehend, Perpetual-Rotor', 'Circa 48 Stunden'),
(10, 'Mechanisches Perpetual-Uhrwerk mit Selbstaufzugsmechanismus, Schutz des Uhrwerks durch magnetischen ', '3131, Rolex Manufakturwerk', '-2/+2 Sekunden pro Tag, gemessen nach dem Einschalen des Uhrwerks', 'Stunden-, Minuten- und Sekundenzeiger im Zentrum. Sekundenstopp für genaues Einstellen der Zeit', 'Selbstaufzugsmechanismus, in beide Richtungen aufziehend, Perpetual-Rotor', 'Circa 48 Stunden'),
(11, 'HUB1280 UNICO Automatisches Manufaktur-Chronographenwerk mit Flyback-Funktion und Säulenrad', 'HUB 1242', '', '', 'Automatik', '72 Stunden'),
(12, 'HUB1143 Automatisches Chronographenwerk', '', '', '', 'Automatik', '42 Stunden'),
(13, 'HUB1233 Skelettiertes Manufakturwerk mit Handaufzug und Gangreserveanzeige', '', '', '', '', '10 Tage'),
(14, 'HUB6311 Skelettiertes Manufakturwerk mit Handaufzug, Chronograph und Tourbillon\r\n', '', '', '', '', '115 Stunden\r\n'),
(15, 'HUB1240 UNICO Automatisches Manufaktur-Chronographenwerk mit Flyback-Funktion und Säulenrad\r\n', '', '', '', '', '72 Stunden\r\n'),
(16, 'Qualcomm® Snapdragon Wear™ 3100\r\n', '', '', '', '', 'Ca. 1 Tag\r\n'),
(17, 'HUB4700 Automatisches skelettiertes Chronographenwerk\r\n', '', '', '', '', '50 Stunden\r\n');

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
(4, 'Silbern'),
(5, 'Weiß'),
(6, 'Schwarz'),
(7, 'Schwarz\r\n'),
(8, 'Champagnerfarben mit Diamanten'),
(9, 'Schwarz'),
(10, 'Z-blau'),
(11, 'Mattblau skelettiert'),
(12, 'Mattes schwarzes Zifferblatt'),
(13, 'Mattes schwarzes skelettiertes Zifferblatt'),
(14, 'Saphirglas und opalinfarben in Grau\r\n'),
(15, 'Saphirglas und opalinfarben in Grau\r\n'),
(16, 'Digitale Hublot-Zifferblätter\r\n'),
(17, 'Skelettiert, mattschwarz Mit 89 farbigen Edelsteinen besetzt\r\n');

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
