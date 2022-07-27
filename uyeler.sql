-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 30 Ara 2021, 16:17:35
-- Sunucu sürümü: 10.4.20-MariaDB
-- PHP Sürümü: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `uyeler`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `katagoriler`
--

CREATE TABLE `katagoriler` (
  `kat_id` int(6) UNSIGNED NOT NULL,
  `kat_ad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `katagoriler`
--

INSERT INTO `katagoriler` (`kat_id`, `kat_ad`) VALUES
(1, 'Makale Ekle'),
(2, 'Makale Listele');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kayitlist`
--

CREATE TABLE `kayitlist` (
  `id` int(6) UNSIGNED NOT NULL,
  `uye_adisoyadi` varchar(30) NOT NULL,
  `uye_mail` varchar(50) NOT NULL,
  `uye_tel` varchar(50) NOT NULL,
  `uye_adres` varchar(100) NOT NULL,
  `uye_pw` varchar(50) NOT NULL,
  `kayit_tarihi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kayitlist`
--

INSERT INTO `kayitlist` (`id`, `uye_adisoyadi`, `uye_mail`, `uye_tel`, `uye_adres`, `uye_pw`, `kayit_tarihi`) VALUES
(1, 'Mertcan Karataşoğlu', 'mert@gmail.com', '5555555555', 'Ankara', '123456', '2021-08-13 10:04:30'),
(2, 'buğra aydoğan', 'bugra@gmail.com', '54561651651', 'ankara', '123456', '2021-08-17 17:58:20');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `makaleler`
--

CREATE TABLE `makaleler` (
  `id` int(6) UNSIGNED NOT NULL,
  `m_baslik` varchar(50) NOT NULL,
  `m_yazar` varchar(50) NOT NULL,
  `m_yazarid` int(11) NOT NULL,
  `icerik` text DEFAULT NULL,
  `kayit_tarihi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `makaleler`
--

INSERT INTO `makaleler` (`id`, `m_baslik`, `m_yazar`, `m_yazarid`, `icerik`, `kayit_tarihi`) VALUES
(1, 'deneme1', 'mert@gmail.com ', 1, '<p>Merhabalar Mertcan&nbsp;</p>\r\n', '2021-08-13 10:14:04'),
(2, 'deneme2', 'bugra@gmail.com ', 2, '<p>fksdjfjklsdghsldk</p>\r\n', '2021-08-17 17:58:57');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `katagoriler`
--
ALTER TABLE `katagoriler`
  ADD PRIMARY KEY (`kat_id`);

--
-- Tablo için indeksler `kayitlist`
--
ALTER TABLE `kayitlist`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `makaleler`
--
ALTER TABLE `makaleler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `katagoriler`
--
ALTER TABLE `katagoriler`
  MODIFY `kat_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `kayitlist`
--
ALTER TABLE `kayitlist`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `makaleler`
--
ALTER TABLE `makaleler`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
