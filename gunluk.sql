-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 02 Oca 2024, 21:41:19
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
-- Tablo için tablo yapısı `gunluk`
--

CREATE TABLE `gunluk` (
  `gunluk_id` int(10) NOT NULL,
  `baslik` varchar(27) NOT NULL,
  `icerik` mediumtext NOT NULL,
  `tarih` date NOT NULL,
  `kullanici_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `gunluk`
--

INSERT INTO `gunluk` (`gunluk_id`, `baslik`, `icerik`, `tarih`, `kullanici_id`) VALUES
(31, 'hgfhgf', 'vhgf', '2024-01-04', 12);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `gunluk`
--
ALTER TABLE `gunluk`
  ADD PRIMARY KEY (`gunluk_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `gunluk`
--
ALTER TABLE `gunluk`
  MODIFY `gunluk_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
