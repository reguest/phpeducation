-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 06 Şub 2021, 16:51:26
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
-- Tablo için tablo yapısı `rezerveler`
--

DROP TABLE IF EXISTS `rezerveler`;
CREATE TABLE IF NOT EXISTS `rezerveler` (
  `rezerve_id` int(11) NOT NULL AUTO_INCREMENT,
  `rezerve_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `rezerve_tel` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `rezerve_tarihi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `rezerve_turu` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `rezerve_kisi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `rezerve_fiyati` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `rezerve_email` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `rezerve_tc` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `rezerve_il` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `rezerve_ogrenci` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `rezerve_dtarihi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `rezerve_katilim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `rezerve_turtarihi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`rezerve_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `rezerveler`
--

INSERT INTO `rezerveler` (`rezerve_id`, `rezerve_adi`, `rezerve_tel`, `rezerve_tarihi`, `rezerve_turu`, `rezerve_kisi`, `rezerve_fiyati`, `rezerve_email`, `rezerve_tc`, `rezerve_il`, `rezerve_ogrenci`, `rezerve_dtarihi`, `rezerve_katilim`, `rezerve_turtarihi`) VALUES
(3, 'Orhan', '05343041298', '21.09.2020 23:20:00', 'KARADENİZ ', '5', '150', 'admin@mail.com', '325665+9', 'Merkez', 'Evet', '2020-09-02', 'Evet', '21.06.2020');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
