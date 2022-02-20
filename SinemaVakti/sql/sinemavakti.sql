-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 Oca 2022, 00:46:07
-- Sunucu sürümü: 10.4.6-MariaDB
-- PHP Sürümü: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `sinemavakti`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `kuladi` varchar(30) NOT NULL,
  `sifre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `kuladi`, `sifre`) VALUES
(1, 'admin', 123),
(2, 'a', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `biletler`
--

CREATE TABLE `biletler` (
  `id` int(11) NOT NULL,
  `idizleyici` int(11) DEFAULT NULL,
  `salonid` varchar(7) DEFAULT NULL,
  `alinankoltuk` int(11) DEFAULT NULL,
  `filmid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `biletler`
--

INSERT INTO `biletler` (`id`, `idizleyici`, `salonid`, `alinankoltuk`, `filmid`) VALUES
(1, 1, 'SALON02', 4, 2),
(3, 12, 'SALON10', 3, 11),
(5, 1, 'SALON05', 5, 13);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `filmler`
--

CREATE TABLE `filmler` (
  `filmid` int(11) NOT NULL,
  `filmismi` varchar(40) DEFAULT NULL,
  `salonid` varchar(7) DEFAULT NULL,
  `turu` varchar(10) DEFAULT NULL,
  `adres` varchar(68) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `filmler`
--

INSERT INTO `filmler` (`filmid`, `filmismi`, `salonid`, `turu`, `adres`) VALUES
(1, 'Iron Man', 'SALON01', 'Aksiyon', 'img/filmler/ironman.jpg'),
(2, 'Matrix Resurrections', 'SALON02', 'Aksiyon', 'img/filmler/matrixresurrection.jpg'),
(3, 'Seance', 'SALON03', 'Korku', 'img/filmler/seance.jpg'),
(11, 'Hızlı Ve Öfkeli 9', 'SALON10', 'Aksiyon', 'img/filmler/hizliveofkeli.jpg'),
(12, 'Nalan', 'SALON04', 'Komedi', 'img/filmler/nalan.jpg'),
(13, 'Lubbey', 'SALON05', 'Korku', 'img/filmler/lubbey.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `izleyici`
--

CREATE TABLE `izleyici` (
  `id` int(11) NOT NULL,
  `isim` varchar(30) DEFAULT NULL,
  `eposta` varchar(50) DEFAULT NULL,
  `sifre` varchar(30) DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `izleyici`
--

INSERT INTO `izleyici` (`id`, `isim`, `eposta`, `sifre`, `tel`) VALUES
(1, 'adem soner', 'adem_soner@hotmail.com.tr', '123', '5051025239'),
(12, 'Adem cumali', 'cumaliata@gmail', '1234', '5051025238'),
(15, 'baho', 'baho@gmail.com', 'baho', '5236987412');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `salonlar`
--

CREATE TABLE `salonlar` (
  `salonid` int(11) NOT NULL,
  `salonismi` varchar(7) DEFAULT NULL,
  `koltuk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `salonlar`
--

INSERT INTO `salonlar` (`salonid`, `salonismi`, `koltuk`) VALUES
(2, 'SALON02', 5),
(3, 'SALON03', 5),
(4, 'SALON04', 3),
(8, 'SALON10', 3),
(13, 'SALON08', 3),
(14, 'SALON05', 5),
(15, 'SALON01', 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `biletler`
--
ALTER TABLE `biletler`
  ADD PRIMARY KEY (`id`),
  ADD KEY `salonid` (`salonid`),
  ADD KEY `idizleyici` (`idizleyici`),
  ADD KEY `filmid` (`filmid`);

--
-- Tablo için indeksler `filmler`
--
ALTER TABLE `filmler`
  ADD PRIMARY KEY (`filmid`),
  ADD KEY `salonid` (`salonid`);

--
-- Tablo için indeksler `izleyici`
--
ALTER TABLE `izleyici`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `salonlar`
--
ALTER TABLE `salonlar`
  ADD PRIMARY KEY (`salonid`),
  ADD KEY `salonismi` (`salonismi`) USING BTREE;

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `biletler`
--
ALTER TABLE `biletler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `filmler`
--
ALTER TABLE `filmler`
  MODIFY `filmid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Tablo için AUTO_INCREMENT değeri `izleyici`
--
ALTER TABLE `izleyici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `salonlar`
--
ALTER TABLE `salonlar`
  MODIFY `salonid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `biletler`
--
ALTER TABLE `biletler`
  ADD CONSTRAINT `biletler_ibfk_1` FOREIGN KEY (`salonid`) REFERENCES `salonlar` (`salonismi`) ON DELETE CASCADE ON UPDATE SET NULL,
  ADD CONSTRAINT `biletler_ibfk_2` FOREIGN KEY (`idizleyici`) REFERENCES `izleyici` (`id`) ON DELETE CASCADE ON UPDATE SET NULL,
  ADD CONSTRAINT `biletler_ibfk_3` FOREIGN KEY (`filmid`) REFERENCES `filmler` (`filmid`) ON DELETE CASCADE ON UPDATE SET NULL;

--
-- Tablo kısıtlamaları `filmler`
--
ALTER TABLE `filmler`
  ADD CONSTRAINT `filmler_ibfk_1` FOREIGN KEY (`salonid`) REFERENCES `salonlar` (`salonismi`) ON DELETE CASCADE ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
