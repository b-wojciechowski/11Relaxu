-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 21 Lut 2020, 13:24
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
-- Struktura tabeli dla tabeli `votes`
--

CREATE TABLE `votes` (
  `Id` char(40) COLLATE utf8_polish_ci NOT NULL,
  `VoteOnPlayerId` char(40) COLLATE utf8_polish_ci NOT NULL,
  `VoteDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `Voter` char(40) COLLATE utf8_polish_ci NOT NULL,
  `browserAgent` text COLLATE utf8_polish_ci NOT NULL,
  `voterIP` varchar(25) COLLATE utf8_polish_ci NOT NULL,
  `IsDeleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `votes`
--

INSERT INTO `votes` (`Id`, `VoteOnPlayerId`, `VoteDate`, `Voter`, `browserAgent`, `voterIP`, `IsDeleted`) VALUES
('27a1b2b5-5420-11ea-a60f-e4115b471390', 'A72A9E5B-50BC-11EA-A60F-E4115B471390', '2020-02-20 20:32:12', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('2b2d34b2-5434-11ea-a60f-e4115b471390', '36C09F01-50C4-11EA-A60F-E4115B471390', '2020-02-20 22:55:28', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('3dfa5038-541f-11ea-a60f-e4115b471390', 'BC935B86-50BC-11EA-A60F-E4115B471390', '2020-02-20 20:25:40', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('3e260a5d-5425-11ea-a60f-e4115b471390', 'A72A9E5B-50BC-11EA-A60F-E4115B471390', '2020-02-20 21:08:38', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('3e264b13-5425-11ea-a60f-e4115b471390', '40DE49EF-50C6-11EA-A60F-E4115B471390', '2020-02-20 21:08:38', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('3e269eaa-5425-11ea-a60f-e4115b471390', 'D803AD88-50C2-11EA-A60F-E4115B471390', '2020-02-20 21:08:38', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('3e26ea2a-5425-11ea-a60f-e4115b471390', '9FAF7B5D-477D-11EA-83C4-E4115B471390', '2020-02-20 21:08:38', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('3e271bcb-5425-11ea-a60f-e4115b471390', 'D80366D6-50C2-11EA-A60F-E4115B471390', '2020-02-20 21:08:38', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('3e277108-5425-11ea-a60f-e4115b471390', 'FDA086B3-50C4-11EA-A60F-E4115B471390', '2020-02-20 21:08:38', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('3e27b8bf-5425-11ea-a60f-e4115b471390', '05A4711C-50C4-11EA-A60F-E4115B471390', '2020-02-20 21:08:38', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('3e27ef13-5425-11ea-a60f-e4115b471390', 'E774B0D1-50C3-11EA-A60F-E4115B471390', '2020-02-20 21:08:38', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('3e283047-5425-11ea-a60f-e4115b471390', '7841AFBC-477D-11EA-83C4-E4115B471390', '2020-02-20 21:08:38', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('3e2886be-5425-11ea-a60f-e4115b471390', '36C0E9A7-50C4-11EA-A60F-E4115B471390', '2020-02-20 21:08:38', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('3e28d15f-5425-11ea-a60f-e4115b471390', '9FAF79FA-477D-11EA-83C4-E4115B471390', '2020-02-20 21:08:38', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('485d8893-541f-11ea-a60f-e4115b471390', '40DE49EF-50C6-11EA-A60F-E4115B471390', '2020-02-20 20:25:58', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('4c8c130a-5420-11ea-a60f-e4115b471390', 'A72A9E5B-50BC-11EA-A60F-E4115B471390', '2020-02-20 20:33:14', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('4ffa5f01-5426-11ea-a60f-e4115b471390', 'A72A9E5B-50BC-11EA-A60F-E4115B471390', '2020-02-20 21:16:17', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('70c63d00-5424-11ea-a60f-e4115b471390', 'BC935B86-50BC-11EA-A60F-E4115B471390', '2020-02-20 21:02:53', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('70c68025-5424-11ea-a60f-e4115b471390', '40DE49EF-50C6-11EA-A60F-E4115B471390', '2020-02-20 21:02:53', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('7fd28963-5424-11ea-a60f-e4115b471390', 'A72A9E5B-50BC-11EA-A60F-E4115B471390', '2020-02-20 21:03:18', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('7fd2d2c3-5424-11ea-a60f-e4115b471390', '9FAF7B5D-477D-11EA-83C4-E4115B471390', '2020-02-20 21:03:18', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('7fd316a2-5424-11ea-a60f-e4115b471390', '7844D152-477D-11EA-83C4-E4115B471390', '2020-02-20 21:03:18', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('7fd35484-5424-11ea-a60f-e4115b471390', 'C1BB64F4-50C2-11EA-A60F-E4115B471390', '2020-02-20 21:03:18', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('7fd397d4-5424-11ea-a60f-e4115b471390', 'D22005B1-479D-11EA-83C4-E4115B471390', '2020-02-20 21:03:18', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('7fd3d545-5424-11ea-a60f-e4115b471390', '9FAF6A55-477D-11EA-83C4-E4115B471390', '2020-02-20 21:03:18', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('7fd41101-5424-11ea-a60f-e4115b471390', '9FAF79FA-477D-11EA-83C4-E4115B471390', '2020-02-20 21:03:18', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('82cb85f9-541f-11ea-a60f-e4115b471390', 'A72A9E5B-50BC-11EA-A60F-E4115B471390', '2020-02-20 20:27:36', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('85a0eb45-5431-11ea-a60f-e4115b471390', 'A72A9E5B-50BC-11EA-A60F-E4115B471390', '2020-02-20 22:36:31', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', '::1', 1),
('85a59563-5431-11ea-a60f-e4115b471390', '8BF6648F-50C2-11EA-A60F-E4115B471390', '2020-02-20 22:36:31', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', '::1', 1),
('85a8b388-5431-11ea-a60f-e4115b471390', '905FA6EB-4D02-11EA-AC53-E4115B471390', '2020-02-20 22:36:31', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', '::1', 1),
('85aa5c72-5431-11ea-a60f-e4115b471390', '783DA43A-477D-11EA-83C4-E4115B471390', '2020-02-20 22:36:31', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', '::1', 1),
('85ac04de-5431-11ea-a60f-e4115b471390', '9FAF6A55-477D-11EA-83C4-E4115B471390', '2020-02-20 22:36:31', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', '::1', 1),
('85ad9394-5431-11ea-a60f-e4115b471390', '9FAF79FA-477D-11EA-83C4-E4115B471390', '2020-02-20 22:36:31', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', '::1', 1),
('883960cd-5420-11ea-a60f-e4115b471390', 'D803AD88-50C2-11EA-A60F-E4115B471390', '2020-02-20 20:34:54', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('883ae46e-5420-11ea-a60f-e4115b471390', '9FAF7B5D-477D-11EA-83C4-E4115B471390', '2020-02-20 20:34:54', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('89b86bf9-5423-11ea-a60f-e4115b471390', 'A72A9E5B-50BC-11EA-A60F-E4115B471390', '2020-02-20 20:56:25', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('89b8afd1-5423-11ea-a60f-e4115b471390', '40DE49EF-50C6-11EA-A60F-E4115B471390', '2020-02-20 20:56:25', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('89b8f057-5423-11ea-a60f-e4115b471390', 'D803AD88-50C2-11EA-A60F-E4115B471390', '2020-02-20 20:56:25', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('89b961cd-5423-11ea-a60f-e4115b471390', '9FAF7B5D-477D-11EA-83C4-E4115B471390', '2020-02-20 20:56:25', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('89b9c69d-5423-11ea-a60f-e4115b471390', 'D80366D6-50C2-11EA-A60F-E4115B471390', '2020-02-20 20:56:25', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('89ba0b3a-5423-11ea-a60f-e4115b471390', 'FDA086B3-50C4-11EA-A60F-E4115B471390', '2020-02-20 20:56:25', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('89ba4747-5423-11ea-a60f-e4115b471390', '05A4711C-50C4-11EA-A60F-E4115B471390', '2020-02-20 20:56:25', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('89ba81b1-5423-11ea-a60f-e4115b471390', 'E774B0D1-50C3-11EA-A60F-E4115B471390', '2020-02-20 20:56:25', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('89be5a8c-5423-11ea-a60f-e4115b471390', '7841AFBC-477D-11EA-83C4-E4115B471390', '2020-02-20 20:56:25', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('89bea1b7-5423-11ea-a60f-e4115b471390', '05A42F57-50C4-11EA-A60F-E4115B471390', '2020-02-20 20:56:25', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('89beda05-5423-11ea-a60f-e4115b471390', 'FDA0CA11-50C4-11EA-A60F-E4115B471390', '2020-02-20 20:56:25', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('90a26a0d-541f-11ea-a60f-e4115b471390', '9FAF79FA-477D-11EA-83C4-E4115B471390', '2020-02-20 20:27:59', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('a8612b40-5424-11ea-a60f-e4115b471390', '9FAF79FA-477D-11EA-83C4-E4115B471390', '2020-02-20 21:04:26', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('af0ca3a2-5422-11ea-a60f-e4115b471390', 'A72A9E5B-50BC-11EA-A60F-E4115B471390', '2020-02-20 20:50:18', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '', 1),
('af0ce4fd-5422-11ea-a60f-e4115b471390', '7844D152-477D-11EA-83C4-E4115B471390', '2020-02-20 20:50:18', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '', 1),
('af0d343f-5422-11ea-a60f-e4115b471390', '783DA43A-477D-11EA-83C4-E4115B471390', '2020-02-20 20:50:18', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '', 1),
('af0d8942-5422-11ea-a60f-e4115b471390', '9FAF6A55-477D-11EA-83C4-E4115B471390', '2020-02-20 20:50:18', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '', 1),
('b2760251-5437-11ea-a60f-e4115b471390', 'A72A9E5B-50BC-11EA-A60F-E4115B471390', '2020-02-20 23:20:44', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', '::1', 0),
('b5966079-5421-11ea-a60f-e4115b471390', 'A72A9E5B-50BC-11EA-A60F-E4115B471390', '2020-02-20 20:43:20', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('b84e6a5b-5420-11ea-a60f-e4115b471390', 'A72A9E5B-50BC-11EA-A60F-E4115B471390', '2020-02-20 20:36:15', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('b84eabe5-5420-11ea-a60f-e4115b471390', '9FAF7B5D-477D-11EA-83C4-E4115B471390', '2020-02-20 20:36:15', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('b84f04cb-5420-11ea-a60f-e4115b471390', '548A4C74-50C3-11EA-A60F-E4115B471390', '2020-02-20 20:36:15', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('b84f508c-5420-11ea-a60f-e4115b471390', 'A707EC01-477D-11EA-83C4-E4115B471390', '2020-02-20 20:36:15', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('b84f8e91-5420-11ea-a60f-e4115b471390', '9FAF79FA-477D-11EA-83C4-E4115B471390', '2020-02-20 20:36:15', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('bbe094be-541f-11ea-a60f-e4115b471390', 'BC935B86-50BC-11EA-A60F-E4115B471390', '2020-02-20 20:29:11', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('c951e5c9-5422-11ea-a60f-e4115b471390', 'A72A9E5B-50BC-11EA-A60F-E4115B471390', '2020-02-20 20:51:03', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('c952311c-5422-11ea-a60f-e4115b471390', '7844D152-477D-11EA-83C4-E4115B471390', '2020-02-20 20:51:03', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('c9527e8c-5422-11ea-a60f-e4115b471390', '783DA43A-477D-11EA-83C4-E4115B471390', '2020-02-20 20:51:03', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('c952c339-5422-11ea-a60f-e4115b471390', '9FAF6A55-477D-11EA-83C4-E4115B471390', '2020-02-20 20:51:03', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('c9eafb13-5420-11ea-a60f-e4115b471390', 'A72A9E5B-50BC-11EA-A60F-E4115B471390', '2020-02-20 20:36:45', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('c9eb40d9-5420-11ea-a60f-e4115b471390', '9FAF7B5D-477D-11EA-83C4-E4115B471390', '2020-02-20 20:36:45', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('c9eb82d2-5420-11ea-a60f-e4115b471390', '7844D152-477D-11EA-83C4-E4115B471390', '2020-02-20 20:36:45', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('c9ec0122-5420-11ea-a60f-e4115b471390', '7841AFBC-477D-11EA-83C4-E4115B471390', '2020-02-20 20:36:45', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('c9ec4cb1-5420-11ea-a60f-e4115b471390', 'A707EC01-477D-11EA-83C4-E4115B471390', '2020-02-20 20:36:45', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('c9eca0df-5420-11ea-a60f-e4115b471390', '783DA43A-477D-11EA-83C4-E4115B471390', '2020-02-20 20:36:45', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('c9ed04d2-5420-11ea-a60f-e4115b471390', '9FAF6A55-477D-11EA-83C4-E4115B471390', '2020-02-20 20:36:45', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('c9ed5c11-5420-11ea-a60f-e4115b471390', '36C0E9A7-50C4-11EA-A60F-E4115B471390', '2020-02-20 20:36:45', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('c9edb9d6-5420-11ea-a60f-e4115b471390', '9FAF79FA-477D-11EA-83C4-E4115B471390', '2020-02-20 20:36:45', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('cad6ed83-5434-11ea-a60f-e4115b471390', 'A72A9E5B-50BC-11EA-A60F-E4115B471390', '2020-02-20 22:59:56', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('cad73421-5434-11ea-a60f-e4115b471390', '40DE49EF-50C6-11EA-A60F-E4115B471390', '2020-02-20 22:59:56', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('cad77394-5434-11ea-a60f-e4115b471390', 'D803AD88-50C2-11EA-A60F-E4115B471390', '2020-02-20 22:59:56', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('cad7b56a-5434-11ea-a60f-e4115b471390', '9FAF7B5D-477D-11EA-83C4-E4115B471390', '2020-02-20 22:59:56', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('cad7f278-5434-11ea-a60f-e4115b471390', 'D80366D6-50C2-11EA-A60F-E4115B471390', '2020-02-20 22:59:56', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('cad83140-5434-11ea-a60f-e4115b471390', 'FDA086B3-50C4-11EA-A60F-E4115B471390', '2020-02-20 22:59:56', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('cad8702f-5434-11ea-a60f-e4115b471390', '05A4711C-50C4-11EA-A60F-E4115B471390', '2020-02-20 22:59:56', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('cad8b0bd-5434-11ea-a60f-e4115b471390', '783DA43A-477D-11EA-83C4-E4115B471390', '2020-02-20 22:59:56', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('cad8f1d5-5434-11ea-a60f-e4115b471390', '9FAF6A55-477D-11EA-83C4-E4115B471390', '2020-02-20 22:59:56', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('cad9367e-5434-11ea-a60f-e4115b471390', '9FAF79FA-477D-11EA-83C4-E4115B471390', '2020-02-20 22:59:56', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('cad972e3-5434-11ea-a60f-e4115b471390', '33169AF9-50BE-11EA-A60F-E4115B471390', '2020-02-20 22:59:56', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('cbcfb8eb-541f-11ea-a60f-e4115b471390', '36C09F01-50C4-11EA-A60F-E4115B471390', '2020-02-20 20:29:38', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('ce09d8a4-5422-11ea-a60f-e4115b471390', 'A72A9E5B-50BC-11EA-A60F-E4115B471390', '2020-02-20 20:51:10', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('ce0a1617-5422-11ea-a60f-e4115b471390', '7844D152-477D-11EA-83C4-E4115B471390', '2020-02-20 20:51:10', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('ce0a545c-5422-11ea-a60f-e4115b471390', '783DA43A-477D-11EA-83C4-E4115B471390', '2020-02-20 20:51:10', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('ce0a8d4c-5422-11ea-a60f-e4115b471390', '9FAF6A55-477D-11EA-83C4-E4115B471390', '2020-02-20 20:51:10', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('ce0ae911-5422-11ea-a60f-e4115b471390', '9FAF79FA-477D-11EA-83C4-E4115B471390', '2020-02-20 20:51:10', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('ce0b31e8-5422-11ea-a60f-e4115b471390', '33169AF9-50BE-11EA-A60F-E4115B471390', '2020-02-20 20:51:10', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '::1', 1),
('db3473bd-5420-11ea-a60f-e4115b471390', 'A72A9E5B-50BC-11EA-A60F-E4115B471390', '2020-02-20 20:37:14', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('db34b73b-5420-11ea-a60f-e4115b471390', '9FAF7B5D-477D-11EA-83C4-E4115B471390', '2020-02-20 20:37:14', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('db350a57-5420-11ea-a60f-e4115b471390', '548A4C74-50C3-11EA-A60F-E4115B471390', '2020-02-20 20:37:14', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('db356100-5420-11ea-a60f-e4115b471390', '78491BFB-477D-11EA-83C4-E4115B471390', '2020-02-20 20:37:14', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('db359ee8-5420-11ea-a60f-e4115b471390', '7844D152-477D-11EA-83C4-E4115B471390', '2020-02-20 20:37:14', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('db35fd23-5420-11ea-a60f-e4115b471390', '7841AFBC-477D-11EA-83C4-E4115B471390', '2020-02-20 20:37:14', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('db365ecf-5420-11ea-a60f-e4115b471390', 'A707EC01-477D-11EA-83C4-E4115B471390', '2020-02-20 20:37:14', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('db36aafe-5420-11ea-a60f-e4115b471390', '783DA43A-477D-11EA-83C4-E4115B471390', '2020-02-20 20:37:14', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('db36e4cc-5420-11ea-a60f-e4115b471390', '9FAF6A55-477D-11EA-83C4-E4115B471390', '2020-02-20 20:37:14', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('db372574-5420-11ea-a60f-e4115b471390', '36C0E9A7-50C4-11EA-A60F-E4115B471390', '2020-02-20 20:37:14', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('db375a3b-5420-11ea-a60f-e4115b471390', '9FAF79FA-477D-11EA-83C4-E4115B471390', '2020-02-20 20:37:14', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('dd942fd6-541f-11ea-a60f-e4115b471390', 'BC935B86-50BC-11EA-A60F-E4115B471390', '2020-02-20 20:30:08', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('fbbc07a3-5420-11ea-a60f-e4115b471390', 'A72A9E5B-50BC-11EA-A60F-E4115B471390', '2020-02-20 20:38:08', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('fbbc47d2-5420-11ea-a60f-e4115b471390', '9FAF7B5D-477D-11EA-83C4-E4115B471390', '2020-02-20 20:38:08', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('fbbc8437-5420-11ea-a60f-e4115b471390', '8BF6648F-50C2-11EA-A60F-E4115B471390', '2020-02-20 20:38:08', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('fbbcce1f-5420-11ea-a60f-e4115b471390', '548A4C74-50C3-11EA-A60F-E4115B471390', '2020-02-20 20:38:08', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('fbbd38cd-5420-11ea-a60f-e4115b471390', '7844D152-477D-11EA-83C4-E4115B471390', '2020-02-20 20:38:08', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('fbbd7b44-5420-11ea-a60f-e4115b471390', '7841AFBC-477D-11EA-83C4-E4115B471390', '2020-02-20 20:38:08', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('fbbdd550-5420-11ea-a60f-e4115b471390', 'A707EC01-477D-11EA-83C4-E4115B471390', '2020-02-20 20:38:08', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('fbbe2e2c-5420-11ea-a60f-e4115b471390', '783DA43A-477D-11EA-83C4-E4115B471390', '2020-02-20 20:38:08', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('fbbe753e-5420-11ea-a60f-e4115b471390', '9FAF6A55-477D-11EA-83C4-E4115B471390', '2020-02-20 20:38:08', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('fbbeb517-5420-11ea-a60f-e4115b471390', '9FAF79FA-477D-11EA-83C4-E4115B471390', '2020-02-20 20:38:08', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1),
('fbbeed96-5420-11ea-a60f-e4115b471390', '33169AF9-50BE-11EA-A60F-E4115B471390', '2020-02-20 20:38:08', '2908b435-4b46-11ea-83c4-e4115b471390', 'Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1', '::1', 1);

--
-- Wyzwalacze `votes`
--
DELIMITER $$
CREATE TRIGGER `votes_trigger` BEFORE INSERT ON `votes` FOR EACH ROW BEGIN 
    SET NEW.Id = UUID(); 
END
$$
DELIMITER ;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
