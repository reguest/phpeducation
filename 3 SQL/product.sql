-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 06 Şub 2021, 16:48:33
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
-- Tablo için tablo yapısı `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(20) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(120) NOT NULL,
  `product_brand` varchar(100) NOT NULL,
  `product_price` decimal(8,2) NOT NULL,
  `product_ram` varchar(255) NOT NULL,
  `product_storage` varchar(50) NOT NULL,
  `product_camera` varchar(20) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_quantity` mediumint(5) NOT NULL,
  `product_status` enum('0','1') NOT NULL COMMENT '0-active,1-inactive',
  `product_type` varchar(255) NOT NULL,
  `product_oldprice` varchar(255) NOT NULL,
  `product_discount` int(11) NOT NULL,
  `product_discount2` varchar(20) NOT NULL,
  `product_sale` int(11) NOT NULL,
  `product_explanation` varchar(300) NOT NULL,
  `visible` varchar(255) NOT NULL,
  `product_campaign` varchar(20) NOT NULL,
  `product_tipi` varchar(255) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_brand`, `product_price`, `product_ram`, `product_storage`, `product_camera`, `product_image`, `product_image2`, `product_quantity`, `product_status`, `product_type`, `product_oldprice`, `product_discount`, `product_discount2`, `product_sale`, `product_explanation`, `visible`, `product_campaign`, `product_tipi`) VALUES
(53, 'ık', 'MARKASI', '200.00', 'Göz', 'DİĞERİ', '', '13362466092548.png', '8396099', 0, '1', 'Göz', '', 1, '100', 0, 'qef', '1', '1', 'Göz Farı'),
(54, 'şl', 'ojh', '30.00', 'Dudak', 'pugpı', '', '6500840.png', '6500840', 0, '1', 'makyaj', '', 0, '15', 0, 'gp', '1', '0', '23'),
(56, 'hg', 'vby', '40.00', 'Yüz', '6t', '', '5001885.png', '5001885', 0, '1', 'makyaj', '', 0, '10', 0, '6', '1', '1', 'degerwef'),
(57, 'hg', 'vby', '50.00', 'Makyaj Fırçaları', '6t', '', '5001885.png', '5001885', 0, '1', 'makyaj', '', 0, '5', 0, '6', '1', '1', 'deger435');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
