-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 29 Ara 2023, 13:52:00
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `mertmaki_gunlukizler`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` bigint(11) NOT NULL,
  `adsoyad` varchar(30) NOT NULL,
  `eposta` varchar(50) NOT NULL,
  `kullaniciadi` varchar(30) NOT NULL,
  `sifre` varchar(16) NOT NULL,
  `ktur` varchar(20) NOT NULL,
  `pp` varchar(75) NOT NULL,
  `tarih` datetime NOT NULL DEFAULT current_timestamp(),
  `instagram` varchar(150) NOT NULL,
  `twitter` varchar(150) NOT NULL,
  `facebook` varchar(150) NOT NULL,
  `tiktok` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `adsoyad`, `eposta`, `kullaniciadi`, `sifre`, `ktur`, `pp`, `tarih`, `instagram`, `twitter`, `facebook`, `tiktok`) VALUES
(9, 'hamza', 'admin@gmail.com', 'admin', 'admin1234', '', '', '2023-12-28 00:24:24', '', '', '', ''),
(10, 'ilknur', 'ilknur@gmail.com', 'ialtuntas', '1234', '', '', '2023-12-28 12:41:28', '', '', '', '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
