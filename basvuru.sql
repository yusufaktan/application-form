-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 29 Mar 2021, 17:10:11
-- Sunucu sürümü: 10.4.18-MariaDB
-- PHP Sürümü: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `basvuru`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kisibilgileri`
--

CREATE TABLE `kisibilgileri` (
  `kisiID` int(11) NOT NULL,
  `AD` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `SOYAD` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `ADRES` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `EPOSTA` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `EVNO` varchar(10) COLLATE utf8_turkish_ci DEFAULT NULL,
  `CEP1` varchar(10) COLLATE utf8_turkish_ci DEFAULT NULL,
  `CEP2` varchar(10) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kisibilgileri`
--

INSERT INTO `kisibilgileri` (`kisiID`, `AD`, `SOYAD`, `ADRES`, `EPOSTA`, `EVNO`, `CEP1`, `CEP2`) VALUES
(1, 'Yusuf', 'Aktan', 'İstinye Üniversitesi', 'yusuf@gmail.com', '1111111111', '2222222222', '3333333333'),
(2, 'Emre', 'Özdemir', 'Malatya', 'emre@hotmail.com', '4444444444', '5555555555', '6666666666');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kisibilgileri`
--
ALTER TABLE `kisibilgileri`
  ADD PRIMARY KEY (`kisiID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kisibilgileri`
--
ALTER TABLE `kisibilgileri`
  MODIFY `kisiID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
