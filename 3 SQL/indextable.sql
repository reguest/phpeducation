-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 06 Şub 2021, 16:48:11
-- Sunucu sürümü: 5.7.31
-- PHP Sürümü: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `qrlmelek_db1234`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `indextable`
--

DROP TABLE IF EXISTS `indextable`;
CREATE TABLE IF NOT EXISTS `indextable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imageIndex` varchar(255) NOT NULL,
  `index2` varchar(255) NOT NULL,
  `index3` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `indextable`
--

INSERT INTO `indextable` (`id`, `imageIndex`, `index2`, `index3`) VALUES
(0, '196', '', ''),
(1, '154.jpg', 'makyaj', ''),
(28, '155.jpg', 'Kategori', ''),
(29, '156.jpg', 'Kategori', ''),
(30, '157.jpg', '30', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
