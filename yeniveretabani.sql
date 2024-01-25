-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 25 Oca 2024, 11:22:30
-- Sunucu sürümü: 8.0.30
-- PHP Sürümü: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `yeniveretabani`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `link_tablosu`
--

CREATE TABLE `link_tablosu` (
  `id` int NOT NULL,
  `isim` varchar(100) NOT NULL,
  `mapsApi` varchar(100) NOT NULL,
  `customUrl` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `link_tablosu`
--

INSERT INTO `link_tablosu` (`id`, `isim`, `mapsApi`, `customUrl`) VALUES
(1, 'test', 'test', 'http://localhost/yeniLink/a.php?isim=test');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `link_tablosu_yeni`
--

CREATE TABLE `link_tablosu_yeni` (
  `id` int NOT NULL,
  `isim` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `mapsApi` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `customUrl` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `urlrequest` int NOT NULL,
  `kayit_zamani` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `link_tablosu_yeni`
--

INSERT INTO `link_tablosu_yeni` (`id`, `isim`, `mapsApi`, `customUrl`, `urlrequest`, `kayit_zamani`) VALUES
(39, 'Yunus Maden', 'https://maps.app.goo.gl/yyC7eVn1RfDLx6399', 'http://localhost/PhpMysql-main/a.php?isim=Yunus+Maden', 5, '2024-01-25 13:41:07'),
(45, 'Test Yunus Maden', 'testttttsay', 'http://localhost/PhpMysql-main/a.php?isim=Test+Yunus+Maden', 0, '2024-01-25 13:57:54'),
(46, 'DRSuleyman Taş', 'https://maps.app.goo.gl/cAQFyDQPQSnoyTAB6', 'http://localhost/PhpMysql-main/a.php?isim=DRSuleyman+Ta%C5%9F', 2, '2024-01-25 13:58:40'),
(47, 'Yunus Maden', 'https://maps.app.goo.gl/cAQFyDQPQSnoyTAB6', 'http://localhost/PhpMysql-main/a.php?isim=Yunus+Maden', 5, '2024-01-25 14:11:18'),
(48, 'test', 'https://maps.app.goo.gl/cAQFyDQPQSnoyTAB6', 'http://localhost/PhpMysql-main/a.php?isim=test', 0, '2024-01-25 14:19:39');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `link_tablosu`
--
ALTER TABLE `link_tablosu`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `link_tablosu_yeni`
--
ALTER TABLE `link_tablosu_yeni`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `link_tablosu`
--
ALTER TABLE `link_tablosu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `link_tablosu_yeni`
--
ALTER TABLE `link_tablosu_yeni`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
