-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 02 Oca 2024, 22:08:18
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
-- Tablo için tablo yapısı `etkinlik`
--

CREATE TABLE `etkinlik` (
  `etkinlik_id` int(100) NOT NULL,
  `etkinlik_baslik` text NOT NULL,
  `etkinlik_tm` text NOT NULL,
  `fotograf` varchar(500) NOT NULL,
  `konum` varchar(100) NOT NULL,
  `tarih` varchar(200) NOT NULL,
  `saat` varchar(200) NOT NULL,
  `kullanici_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `etkinlik`
--

INSERT INTO `etkinlik` (`etkinlik_id`, `etkinlik_baslik`, `etkinlik_tm`, `fotograf`, `konum`, `tarih`, `saat`, `kullanici_id`) VALUES
(6, 'ddddddddddddddddddddddd', '', '', '', '', '', 11),
(7, 'ddddddddddddddddddddddd', '', ' ', '', '', '', 11),
(8, 'hhhhhhhhhhhhhhhhh', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', ' Ekran görüntüsü 2023-11-21 020319.png', 'hhhhhhhhh', '2006-12-15', '14.32', 11),
(9, 'Emre', 'mal', ' Ekran görüntüsü 2023-11-21 020319.png', 'eşme', '2003-05-15', '22.40', 11),
(10, 'aaaaa', 'aaaaaa', ' ', 'ssss', '1526-05-06', '14.32', 9);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `etkinlik`
--
ALTER TABLE `etkinlik`
  ADD PRIMARY KEY (`etkinlik_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `etkinlik`
--
ALTER TABLE `etkinlik`
  MODIFY `etkinlik_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
