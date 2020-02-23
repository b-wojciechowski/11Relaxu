-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 23 Lut 2020, 22:58
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
-- Struktura tabeli dla tabeli `infoupdates`
--

CREATE TABLE `infoupdates` (
  `Id` char(40) COLLATE utf8_polish_ci NOT NULL,
  `PlayerId` char(40) COLLATE utf8_polish_ci NOT NULL,
  `CreateDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `Author` varchar(64) COLLATE utf8_polish_ci DEFAULT NULL,
  `update_additionalPositions` varchar(200) COLLATE utf8_polish_ci DEFAULT NULL,
  `update_birthYear` int(11) DEFAULT NULL,
  `update_info-comments` text COLLATE utf8_polish_ci DEFAULT NULL,
  `update_playYears` varchar(150) COLLATE utf8_polish_ci DEFAULT NULL,
  `update_shirtNumber` int(11) DEFAULT NULL,
  `updateStatus` varchar(100) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Wyzwalacze `infoupdates`
--
DELIMITER $$
CREATE TRIGGER `infoupdates_insert_guid` BEFORE INSERT ON `infoupdates` FOR EACH ROW BEGIN 
    SET NEW.id= UUID(); 
END
$$
DELIMITER ;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `infoupdates`
--
ALTER TABLE `infoupdates`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
