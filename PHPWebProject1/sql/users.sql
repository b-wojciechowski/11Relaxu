-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 18 Mar 2020, 20:21
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
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `Id` char(40) COLLATE utf8_polish_ci NOT NULL,
  `Name` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `LastName` varchar(128) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_polish_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `CreatedDate` datetime NOT NULL DEFAULT current_timestamp(),
  `LastLoginDate` datetime DEFAULT NULL,
  `Confirmed` int(11) NOT NULL,
  `Notes` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`Id`, `Name`, `LastName`, `email`, `password`, `CreatedDate`, `LastLoginDate`, `Confirmed`, `Notes`) VALUES
('0a183104-52a2-11ea-a60f-e4115b471390', 'Jan', 'Kowalski', 'jk@wp.pl', 'jan', '2020-02-18 23:57:07', NULL, 0, NULL),
('2746b7ab-5676-11ea-a60f-e4115b471390', 'test@test.pl', '1', 'du@pa.pl', '1', '2020-02-23 20:52:28', '2020-02-23 20:52:28', 0, NULL),
('2908b435-4b46-11ea-83c4-e4115b471390', 'Bartłomiej', 'Wojciechowski', 'test@test.pl', 'test', '2020-02-09 21:36:27', '2020-03-18 19:36:39', 0, NULL),
('3b99d830-694d-11ea-9cc4-e4115b471390', 'Agata', 'Klekotko', 'agata@test.pl', '$2y$10$sU2A3caxSUh3gj1Z1JE3m.Yn4CX2agRbI5vPGLR4XF6ZqqcXSqcIa', '2020-03-18 20:18:22', NULL, 0, 'test'),
('3c3b446a-694c-11ea-9cc4-e4115b471390', 'Michał', 'Kośmider', 'michal@test.pl', '$2y$10$TmaXZhAtgHU5ZT406bPHnuoBqHVXLYr2aPlYuheWqHQO3bjuhBs2W', '0000-00-00 00:00:00', NULL, 0, NULL),
('6583ce86-5676-11ea-a60f-e4115b471390', 'Kacper', 'Wojciechowski', 'kacper@test.pl', 'test', '2020-02-23 20:54:13', '2020-02-23 21:28:34', 0, NULL);

--
-- Wyzwalacze `users`
--
DELIMITER $$
CREATE TRIGGER `users_GUID` BEFORE INSERT ON `users` FOR EACH ROW begin
 SET new.Id = uuid();
end
$$
DELIMITER ;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
