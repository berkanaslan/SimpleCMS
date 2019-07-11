-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Anamakine: sql208.byethost.com
-- Üretim Zamanı: 10 Tem 2019, 12:57:03
-- Sunucu sürümü: 5.6.41-84.1
-- PHP Sürümü: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE b18_20292956_tbp;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `b18_20292956_tbp`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anasayfa`
--

CREATE TABLE IF NOT EXISTS `anasayfa` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `yazi` varchar(750) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` date NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=42 ;

--
-- Tablo döküm verisi `anasayfa`
--

INSERT INTO `anasayfa` (`no`, `baslik`, `yazi`, `resim`, `tarih`) VALUES
(2, '2. GiriÅŸ Metni', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'logo.jpg', '2017-06-25'),
(3, '3. GiriÅŸ Metni', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'yuklemedeneme.jpg', '2017-06-25'),
(17, 'Panel Ã¼zerinden dÃ¼zenleme.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. -- ArtÄ±k panel Ã¼zerinden post dÃ¼zenleme iÅŸlemi yapÄ±lÄ±yor.', 'photo.jpg', '2017-06-25'),
(18, 'Sayfalama Ä°ÅŸlemi', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. -- ArtÄ±k her sayfada sadece 1post gÃ¶zÃ¼kecek. Eski postlar otomatik olarak sayfalaÅŸtÄ±rÄ±lacak.', 'photo.jpg', '2017-06-26'),
(20, 'Panel BazlÄ± Tarih Denemesi', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. -- ArtÄ±k postlara tarih atanabiliyor.', 'icon_512x5122x.png', '2017-06-26');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ziyaretcidefteri`
--

CREATE TABLE IF NOT EXISTS `ziyaretcidefteri` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `adsoyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=13 ;

--
-- Tablo döküm verisi `ziyaretcidefteri`
--

INSERT INTO `ziyaretcidefteri` (`no`, `adsoyad`, `mesaj`, `email`) VALUES
(1, 'Berkan Aslan', 'Ziyaretçi mesajı deneme.', 'aslaanberkan@gmail.com'),
(5, 'Berkan A.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute.', 'aslaanberkan@gmail.com');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
