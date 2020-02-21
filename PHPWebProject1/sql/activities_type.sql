-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 21 Lut 2020, 13:40
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
-- Struktura tabeli dla tabeli `activities_type`
--

CREATE TABLE `activities_type` (
  `Id` char(40) COLLATE utf8_polish_ci NOT NULL,
  `ActivityName` varchar(128) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `activities_type`
--

INSERT INTO `activities_type` (`Id`, `ActivityName`) VALUES
('d2ac93aa-54a6-11ea-a60f-e4115b471390', 'Oddanie g³osów po raz pierwszy'),
('d2acd6fa-54a6-11ea-a60f-e4115b471390', 'Uniewa¿nienie g³osów'),
('e0bf6284-54a6-11ea-a60f-e4115b471390', 'Oddanie g³osów po raz kolejny'),
('e0bf868e-54a6-11ea-a60f-e4115b471390', 'Zalogowanie siê'),
('1eb4ac7f-54a7-11ea-a60f-e4115b471390', 'Wylogowanie siê'),
('1eb4e3de-54a7-11ea-a60f-e4115b471390', 'Przegl¹danie rankingów'),
('63f7ba4b-54a7-11ea-a60f-e4115b471390', 'Otwarcie mojej 11-stki');

--
-- Wyzwalacze `activities_type`
--
DELIMITER $$
CREATE TRIGGER `activities_type_insert_guid` BEFORE INSERT ON `activities_type` FOR EACH ROW BEGIN 
    SET NEW.Id = UUID(); 
END
$$
DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
