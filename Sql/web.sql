-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 27 Ara 2021, 09:11:20
-- Sunucu sürümü: 8.0.17
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `web`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE `ayar` (
  `ayarid` int(10) NOT NULL,
  `ayarlogo` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `baslik` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `aciklama` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `telefon` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `adres` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `facebook` varchar(121) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `instagram` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `twitter` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `youtube` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `keyword` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `fav` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `about` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `aboutt` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayarid`, `ayarlogo`, `baslik`, `aciklama`, `email`, `telefon`, `adres`, `facebook`, `instagram`, `twitter`, `youtube`, `keyword`, `fav`, `about`, `aboutt`) VALUES
(2, 'IspartaEmlak', 'Title', 'About', 'email@email.com', '00000000000', 'Adress', 'https://www.linkedin.com/in/bahri-uranlı-035318213/', 'https://www.instagram.com/bahri.urnl/', 'https://github.com/Bahri-Uranli', 'Kaldır', 'Keyword', '224072269426203', 'sas', 'sasa');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `baslik` varchar(250) NOT NULL,
  `aciklama` text NOT NULL,
  `sira` int(11) NOT NULL,
  `resim` varchar(250) NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kisi` varchar(250) NOT NULL,
  `konu` varchar(250) NOT NULL,
  `yazi` text NOT NULL,
  `title` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `about` text NOT NULL,
  `short` text NOT NULL,
  `subjects` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `blog`
--

INSERT INTO `blog` (`id`, `baslik`, `aciklama`, `sira`, `resim`, `kisi`, `konu`, `yazi`, `title`, `about`, `short`, `subjects`) VALUES
(6, 'Başlık', 'Açıklama', 1, '232492683125232wp4676569-4k-pc-wallpapers.jpg', 'Bahri', 'Konu', 'Kısa', 'Title', 'Description', 'Short', 'Subject'),
(8, 'Başlık 2', 'Açıklama 2', 2, '282582495323165wp4077063.jpg', 'Bahri', 'Konu 2', 'Kısa 2', 'Title 2', 'Description 2', 'Short 2', 'Subject 2');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blogen`
--

CREATE TABLE `blogen` (
  `id` int(11) NOT NULL,
  `baslik` varchar(250) NOT NULL,
  `aciklama` text NOT NULL,
  `sira` int(17) NOT NULL,
  `resim` varchar(250) NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kisi` varchar(250) NOT NULL,
  `konu` varchar(250) NOT NULL,
  `yazi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `blogen`
--

INSERT INTO `blogen` (`id`, `baslik`, `aciklama`, `sira`, `resim`, `kisi`, `konu`, `yazi`) VALUES
(2, 'Title', 'Description', 1, '254202110423206red-moon-8q.jpg', 'Bahri', 'Subject', 'Short'),
(3, 'Title 2', 'Description 2', 2, '274802251628555henry-chen-x7clQSWhlfE-unsplash.jpg', 'Bahri', 'Subject 2', 'Short 2');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `resim` varchar(250) NOT NULL,
  `link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cokluresim`
--

CREATE TABLE `cokluresim` (
  `id` int(11) NOT NULL,
  `resim` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `urun_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `cokluresim`
--

INSERT INTO `cokluresim` (`id`, `resim`, `urun_id`) VALUES
(62, '24020223962558220180207214342-6129419207.jpg', 1),
(63, '269282852829536images (1).jpg', 1),
(64, '230302631524254images.jpg', 1),
(65, '233142965721096indir.jpg', 1),
(66, '215792146926730unnamed.jpg', 1),
(67, '27190243332115420180207214342-6129419207.jpg', 2),
(68, '208552590625973images (1).jpg', 2),
(69, '289792418122463indir.jpg', 2),
(70, '210072680929815images.jpg', 2),
(71, '209602108626735unnamed.jpg', 2),
(72, '24605286592080820180207214342-6129419207.jpg', 3),
(73, '211352303928197images (1).jpg', 3),
(74, '271142269224728images.jpg', 3),
(75, '241532951122593indir.jpg', 3),
(76, '259802973629375unnamed.jpg', 3),
(77, '240042077220835images (1).jpg', 7999),
(78, '23867201912079720180207214342-6129419207.jpg', 7999),
(79, '296832928027467indir.jpg', 7999),
(80, '238682890624999images.jpg', 7999),
(81, '221292906525343unnamed.jpg', 7999),
(82, '232212766222900images (1).jpg', 8000),
(83, '22756222232174520180207214342-6129419207.jpg', 8000),
(84, '206122706220810images.jpg', 8000),
(85, '278412050224351indir.jpg', 8000),
(86, '238052912921195unnamed.jpg', 8000),
(88, '2360526554226175f8ba9b055428726dcc43fac.jpg', 8003),
(89, '218522432324879steve.png', 8003),
(90, '2915129549279242109 (2).jpg', 8003),
(91, '243252198224915wp7516651-black-mountain-wallpapers.jpg', 8003),
(92, '234682714429897af0941ba06185e9846af909ba9350baf.png', 8003),
(93, '266152045626725Moon-4K-Wallpaper-HD-3840x2160.jpg', 8003);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `emlak`
--

CREATE TABLE `emlak` (
  `id` int(11) NOT NULL,
  `resim` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `baslik` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `aciklama` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `sira` int(11) NOT NULL,
  `link` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `title` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `about` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `emlak`
--

INSERT INTO `emlak` (`id`, `resim`, `baslik`, `aciklama`, `sira`, `link`, `title`, `about`) VALUES
(8026, '288262522425127indir.jfif', '', '', 0, 'sss', '', ''),
(8027, '267042398627273wp4676569-4k-pc-wallpapers.jpg', '', '', 0, '', '', ''),
(8028, '227562462422522wp4676613-4k-pc-wallpapers.png', '', '', 0, '', '', ''),
(8029, '204342007228232wp4676619-4k-pc-wallpapers.jpg', 'sasasasa', '', 0, '', '', ''),
(8031, '211262757729719', '', '', 0, '', 'sasaas', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `emlaken`
--

CREATE TABLE `emlaken` (
  `id` int(11) NOT NULL,
  `resim` varchar(250) NOT NULL,
  `baslik` varchar(250) NOT NULL,
  `aciklama` text NOT NULL,
  `sira` int(11) NOT NULL,
  `link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `emlaken`
--

INSERT INTO `emlaken` (`id`, `resim`, `baslik`, `aciklama`, `sira`, `link`) VALUES
(3, '256732612727650wp4676582-4k-pc-wallpapers.jpg', 'Title', 'Description', 1, 'Link');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int(11) NOT NULL,
  `baslik` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `mesaj` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `email` varchar(222) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `konu` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `baslik`, `mesaj`, `email`, `konu`) VALUES
(19, 'ss', 's', 'bhrcraft@gmail.com', 's');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `id` int(11) NOT NULL,
  `kad` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `sifre` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `adsoyad` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `yetki` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `kad`, `sifre`, `adsoyad`, `yetki`) VALUES
(5, 'Deneme', 'deneme123', 'Deneme', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sponsor`
--

CREATE TABLE `sponsor` (
  `id` int(11) NOT NULL,
  `resim` varchar(250) NOT NULL,
  `baslik` varchar(250) NOT NULL,
  `aciklama` varchar(2500) NOT NULL,
  `emlaktipi` varchar(250) NOT NULL,
  `sira` int(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `sponsor`
--

INSERT INTO `sponsor` (`id`, `resim`, `baslik`, `aciklama`, `emlaktipi`, `sira`) VALUES
(21, '229212658520568gıLogoYatayPng.svg', '', 'Açıklma', '', 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`ayarid`);

--
-- Tablo için indeksler `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `blogen`
--
ALTER TABLE `blogen`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `cokluresim`
--
ALTER TABLE `cokluresim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `emlak`
--
ALTER TABLE `emlak`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `emlaken`
--
ALTER TABLE `emlaken`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `blogen`
--
ALTER TABLE `blogen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `cokluresim`
--
ALTER TABLE `cokluresim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- Tablo için AUTO_INCREMENT değeri `emlak`
--
ALTER TABLE `emlak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8032;

--
-- Tablo için AUTO_INCREMENT değeri `emlaken`
--
ALTER TABLE `emlaken`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
