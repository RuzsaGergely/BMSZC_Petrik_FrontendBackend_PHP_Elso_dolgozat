-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Dec 17. 22:40
-- Kiszolgáló verziója: 10.4.28-MariaDB
-- PHP verzió: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `php_elso_dolgozat`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `jatekok`
--

CREATE TABLE `jatekok` (
  `id` int(11) NOT NULL,
  `megnevezes` text NOT NULL COMMENT 'Játék megnevezése',
  `raktarkeszlet` int(11) NOT NULL COMMENT 'Raktárkészlet (db)',
  `forgkezd` date NOT NULL COMMENT 'Forgalmazás kezdete',
  `eukomp` tinyint(1) NOT NULL COMMENT 'Európai Uniós szabályoknak megfelel?',
  `tipus` varchar(1) NOT NULL COMMENT 'Játék típusa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `jatekok`
--

INSERT INTO `jatekok` (`id`, `megnevezes`, `raktarkeszlet`, `forgkezd`, `eukomp`, `tipus`) VALUES
(1, 'Chisa 99-in-1 Handheld gaming console', 12, '2023-12-13', 1, 'e'),
(2, 'Space Invaders', 100, '1980-01-01', 0, 'd'),
(3, 'Space Invaders 2', 100, '1990-10-10', 0, 'd'),
(4, 'Fakocka', 200, '2013-02-11', 0, 'a');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `jatekok`
--
ALTER TABLE `jatekok`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `jatekok`
--
ALTER TABLE `jatekok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
