-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 20 Sty 2023, 17:47
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `czlonkowie`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `przypomnienie`
--

CREATE TABLE `przypomnienie` (
  `login` varchar(100) NOT NULL,
  `haslo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `przypomnienie`
--

INSERT INTO `przypomnienie` (`login`, `haslo`) VALUES
('mario', 'bros'),
('dddd', 'd'),
('', ''),
('raz', 'dwa'),
('', ''),
('blaalalale', 'tak samo'),
('', ''),
('kapitan2', 'kapitanzn'),
('', ''),
('grzejnik', 'cieplo+21'),
('', ''),
('mech', 'mech');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `login` varchar(100) NOT NULL,
  `haslo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `login`, `haslo`, `email`, `date`) VALUES
(10, 'mario', 'bros', 'mariobros@email.pl', '2022-05-22 15:13:08'),
(21, 'frank', '$2y$10$7TO98QMESUR1DIHsZhZR..ms2fG69hinBuBshgx36yugF89NBLq.2', 'frank@gmail.com', '2022-10-09 14:37:01'),
(22, 'pawel', '$2y$10$YNuHfZaz47iD6/LFoGP2P.NuxCmxPbenZwJtBZWL1lq7.GOaBHatS', 'p.matys21@gmail.com', '2022-10-09 17:36:50'),
(23, 'francja', '$2y$10$EynCya6.lATXoV4lViGgLeJdCDO2VZHKWthdbgV2WM3vA1dbqM3bW', 'francja@gmial.com', '2022-10-09 17:56:05'),
(24, 'blaalalal', '$2y$10$kWanf3tOWvSER8X9cv.4nuWZ80EohI9VMGm8mLVz724HugcSxDtZ.', 'sdfsdfd@email.com', '2022-10-10 10:27:13'),
(25, 'brbbr', '$2y$10$RurSlRrSgyEmPzO06/EyCuWM1KG0fjzNo1mJsb.AmMDr.1Mvr0SBi', 'md@wp.pl', '2022-10-10 10:30:59'),
(27, 'esfd', '$2y$10$XmJKc2.Sso5XHbohOIgnYe35eprgx9lh8SqClaW7p7s1Nve4vuNwm', 'mario@wwp.pl', '2022-10-10 10:37:47'),
(28, 'sfdfds', '$2y$10$FeLCwT9V6yTF7oX9W0aAwed6/qnI0ydy3MEbDGgyADoPWzvTu51bK', 'mari@ds.com', '2022-10-10 10:40:17'),
(29, '2323', '$2y$10$IIzthiUROt2pFE0k8UtO1uKGQYqzLg2SxEWh3jdYvleL.HTiSv/PW', 'ma@wp.pl', '2022-10-10 10:42:09'),
(30, 'ssssse', '$2y$10$Y9lbbQrGpXJLhI28K4U5ZuN3XcBhzrTwi5t48854Zmao9HrmFVa9C', 'mario@ww.pl', '2022-10-10 12:46:19'),
(31, 'ewrewrwef', '$2y$10$zex9OhCIIs/NhO3fwYoyQubKZtJ1E32dVy0NtuvdAUk5BJZwjdgyW', 'mar@dd.pl', '2022-10-10 12:47:56'),
(32, 'polaroid', '$2y$10$AUf/QZtntgSjFxumg/.dB.E0dsmpOwLv2wLbghvk9Bjfmpmxa5obm', 'marioeefw@dsf.pl', '2022-10-10 12:54:01'),
(33, 'blaalalale', '$2y$10$eTstA23nXunC9ID1nbmR1.fnqUx11AQ4zIdQ/eCbjiNQDFqp4BbuO', 'marioee@dd.pl', '2022-10-10 12:56:31'),
(34, 'kapitan2', '$2y$10$eSm4sYY5DThnXm6iPU.mlOhiO3cskePWOlcQLr/wdMtTH2odBE89O', 'kapitan@put.pl', '2022-10-10 12:58:51'),
(35, 'grzejnik', '$2y$10$732fKnoihhYwkjCKuxUJBuEA/7B0yqaJf08cR1mgHQbCE0PgWbefm', 'grzejnik@grzeje.pl', '2022-10-10 13:02:42'),
(36, 'mech', '$2y$10$sUCLzlkd3Rzp3GTbTUw6HeLDLQ7GsOpOGGsZkFS..hJd/cmPIVxHC', 'mech@gmail.com', '2023-01-20 16:15:40');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `login` (`login`),
  ADD KEY `haslo` (`haslo`),
  ADD KEY `date` (`date`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
