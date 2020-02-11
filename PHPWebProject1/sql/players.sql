-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 11 Lut 2020, 20:06
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
('207dc9c8-477d-11ea-83c4-e4115b471390', 'Hubert', 'Sapi�ski', 'napastnik', 0, 1990, '2006', '2020-02-04 18:35:14', 'Administrator', 0, NULL, NULL),
('783da43a-477d-11ea-83c4-e4115b471390', 'Bart�omiej', 'Wojciechowski', 'pomocnik', 0, 2011, 'obecnie', '2020-01-31 14:54:10', 'Administrator', 0, NULL, NULL),
('7841afbc-477d-11ea-83c4-e4115b471390', 'Micha�', 'Ko�mider', 'pomocnik', 0, 2012, 'obecnie', '2020-01-31 14:54:10', 'Administrator', 0, NULL, NULL),
('7844d152-477d-11ea-83c4-e4115b471390', 'Kacper', 'Wojciechowski', 'obro�ca', 12, 2016, 'obecnie', '2020-01-31 14:54:10', 'Administrator', 0, NULL, NULL),
('78491bfb-477d-11ea-83c4-e4115b471390', 'Pawe�', 'Widuli�ski', 'obro�ca', 4, 1987, '2010', '2020-01-31 16:13:00', 'Administrator', 0, NULL, NULL),
('9faf6a55-477d-11ea-83c4-e4115b471390', 'Rafa�', 'Wojciechowski', 'pomocnik', 0, 1991, '2012', '2020-02-04 18:33:56', 'Administrator', 0, NULL, NULL),
('9faf79fa-477d-11ea-83c4-e4115b471390', 'Micha�', 'Mojski', 'napastnik', 8, 1998, '2015', '2020-01-31 16:18:51', 'Administrator', 0, NULL, NULL),
('9faf7b5d-477d-11ea-83c4-e4115b471390', 'Mateusz', 'Pi�tek', 'obro�ca', 3, 2003, 'obecnie', '2020-01-31 16:48:14', 'Administrator', 0, NULL, NULL),
('a707ec01-477d-11ea-83c4-e4115b471390', '�ukasz', 'Kujawa', 'pomocnik', 2, 2017, 'obecnie', '2020-01-31 16:15:11', 'Administrator', 0, NULL, NULL),
('d22005b1-479d-11ea-83c4-e4115b471390', 'Sylwek', 'Marcinkowski', 'pomocnik', 0, 1989, '2013', '2020-02-04 22:29:18', 'Administrator', 0, NULL, NULL);

--
-- Wyzwalacze `players`
--
DELIMITER $$
CREATE TRIGGER `player_GUID` BEFORE INSERT ON `players` FOR EACH ROW begin
 SET new.Id = uuid();
end
$$
DELIMITER ;

--
-- Indeksy dla zrzut�w tabel
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