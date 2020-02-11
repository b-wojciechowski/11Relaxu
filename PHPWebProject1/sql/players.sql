-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 11 Lut 2020, 21:12
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `1150lecia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `players`
--

CREATE TABLE `players` (
  `Id` char(40) COLLATE utf8_polish_ci NOT NULL,
  `Name` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `LastName` varchar(128) COLLATE utf8_polish_ci NOT NULL,
  `Position` varchar(64) COLLATE utf8_polish_ci DEFAULT NULL,
  `Votes` int(11) DEFAULT 0,
  `DateFrom` int(11) DEFAULT NULL,
  `DateTo` varchar(11) COLLATE utf8_polish_ci DEFAULT NULL,
  `CreatedDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `CreatedBy` varchar(64) COLLATE utf8_polish_ci NOT NULL DEFAULT 'Administrator',
  `IsDeleted` tinyint(1) NOT NULL DEFAULT 0,
  `AdditionalPositions` varchar(128) COLLATE utf8_polish_ci DEFAULT NULL,
  `Notes` varchar(1000) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `players`
--

INSERT INTO `players` (`Id`, `Name`, `LastName`, `Position`, `Votes`, `DateFrom`, `DateTo`, `CreatedDate`, `CreatedBy`, `IsDeleted`, `AdditionalPositions`, `Notes`) VALUES
('207DC9C8-477D-11EA-83C4-E4115B471390', 'Hubert', 'Sapiñski', 'napastnik', 0, 1990, '2006', '2020-02-04 18:35:14', 'Administrator', 0, NULL, NULL),
('783DA43A-477D-11EA-83C4-E4115B471390', 'Bart³omiej', 'Wojciechowski', 'pomocnik', 0, 2011, 'obecnie', '2020-01-31 14:54:10', 'Administrator', 0, NULL, NULL),
('7841AFBC-477D-11EA-83C4-E4115B471390', 'Micha³', 'Koœmider', 'pomocnik', 0, 2012, 'obecnie', '2020-01-31 14:54:10', 'Administrator', 0, NULL, NULL),
('7844D152-477D-11EA-83C4-E4115B471390', 'Kacper', 'Wojciechowski', 'obroñca', 12, 2016, 'obecnie', '2020-01-31 14:54:10', 'Administrator', 0, NULL, NULL),
('78491BFB-477D-11EA-83C4-E4115B471390', 'Pawe³', 'Widuliñski', 'obroñca', 4, 1987, '2010', '2020-01-31 16:13:00', 'Administrator', 0, NULL, NULL),
('905FA6EB-4D02-11EA-AC53-E4115B471390', 'Kazimierz', 'Sadowski', 'Obroñca', 0, 1970, '1981', '2020-02-11 19:13:19', 'Administrator', 0, NULL, NULL),
('9FAF6A55-477D-11EA-83C4-E4115B471390', 'Rafa³', 'Wojciechowski', 'pomocnik', 0, 1991, '2012', '2020-02-04 18:33:56', 'Administrator', 0, NULL, NULL),
('9FAF79FA-477D-11EA-83C4-E4115B471390', 'Micha³', 'Mojski', 'napastnik', 8, 1998, '2015', '2020-01-31 16:18:51', 'Administrator', 0, NULL, NULL),
('9FAF7B5D-477D-11EA-83C4-E4115B471390', 'Mateusz', 'Pi¹tek', 'obroñca', 3, 2003, 'obecnie', '2020-01-31 16:48:14', 'Administrator', 0, NULL, NULL),
('A707EC01-477D-11EA-83C4-E4115B471390', '£ukasz', 'Kujawa', 'pomocnik', 2, 2017, 'obecnie', '2020-01-31 16:15:11', 'Administrator', 0, NULL, NULL),
('D22005B1-479D-11EA-83C4-E4115B471390', 'Sylwek', 'Marcinkowski', 'pomocnik', 0, 1989, '2013', '2020-02-04 22:29:18', 'Administrator', 0, NULL, NULL);

--
-- Wyzwalacze `players`
--
DELIMITER $$
CREATE TRIGGER `player_GUID` BEFORE INSERT ON `players` FOR EACH ROW begin
 SET new.Id = UPPER(uuid());
end
$$
DELIMITER ;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
