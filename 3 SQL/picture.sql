-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 06 Şub 2021, 16:48:22
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
-- Tablo için tablo yapısı `picture`
--

DROP TABLE IF EXISTS `picture`;
CREATE TABLE IF NOT EXISTS `picture` (
  `picture_id` int(11) NOT NULL AUTO_INCREMENT,
  `picture_name` varchar(255) NOT NULL,
  `picture_category` varchar(255) NOT NULL,
  PRIMARY KEY (`picture_id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `picture`
--

INSERT INTO `picture` (`picture_id`, `picture_name`, `picture_category`) VALUES
(0, '', '18011139'),
(3, '1.png', '1'),
(25, '169.jpg', '30'),
(27, '171.jpg', '30'),
(28, '172.jpg', '1'),
(29, '173.jpg', '1'),
(30, '7164219.png', '7164219'),
(32, '15362771.png', '15362771'),
(33, '18011139.png', '18011139'),
(34, '1788690.png', '1788690'),
(50, '6528189.png', '6528189'),
(52, '6500840.png', '6500840'),
(53, '6092546.png', '6092546'),
(54, '11974246092547.png', '8396099'),
(55, '13362466092548.png', '8396099'),
(56, '5001885.png', '5001885');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
