-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 01 Haz 2022, 20:20:17
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
-- Veritabanı: `ginewsite`
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
  `logoyu` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `logoa` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayarid`, `ayarlogo`, `baslik`, `aciklama`, `email`, `telefon`, `adres`, `facebook`, `instagram`, `twitter`, `youtube`, `keyword`, `fav`, `logoyu`, `logoa`) VALUES
(2, 'IspartaEmlak', 'GELECEĞİN IŞIKLARI | 2022', '2018 yılında kurulan ulusal çapta pek çok başarı elde eden teknoloji takımı Geleceğin Işıkları.', 'geleceginisiklari32@gmail.com', '05422178590', 'Işıkkent Anadolu İmam Hatip Lisesi, Işıkkent Mahallesi, 5703. Sk. No:12, Merkez/Isparta', 'https://www.linkedin.com/company/geleceginisiklari/', 'https://www.instagram.com/geleceginisiklaritakimi/', 'https://twitter.com/gisiklaritakimi', 'https://www.youtube.com/channel/UCmDQejMPmMzELAFm2v0SoIA', 'teknofest, tübitak, meb, başarılı örnekler sergisi, ödül, teknoloji.', '226462701626670gıLogoFavicon.png', '264742396925277klassy-logo.png', '237082209728543white-logo.png');

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
  `title` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `about` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `emlak`
--

INSERT INTO `emlak` (`id`, `resim`, `baslik`, `aciklama`, `sira`, `link`, `title`, `about`) VALUES
(8026, '209102244921390mbssteam1 800x800.jpg', 'Ulusal STEAM Yarışması FİNAL', 'CELAL BAYAR ÜNİVERSİTESİ TARAFINDAN DAVET EDİLDİĞİMİZ MANİSA BİLİM ŞENLİĞİ STEAM YARIŞMASINDAYIZ', 3, '', 'National STEAM Competition FINAL', 'WE ARE AT THE MANİSA SCİENCE FESTİVAL STEAM COMPETİTİON, WHİCH WE WERE İNVİTED BY CELAL BAYAR UNİVERSİTY'),
(8027, '272262541324177rcucak1 800x800.jpg', 'RC Uçak Çalışmaları', '2021-2022 yılı için İHA Yarışması için RC Uçak çalışması', 6, '', 'RC Airplane Studies', 'RC Airplane study for UAV Competition for the year 2021-2022'),
(8028, '217532220624897tubitak1 800x800.jpg', 'TÜBİTAK Bölge Finalleri 2020', 'KONYA BÖLGE FİNALLERİNDE STANDIMIZDAYIZ', 5, '', 'TÜBİTAK Regional Finals 2020', 'WE ARE AT OUR STAND IN KONYA REGIONAL FINALS'),
(8029, '230672170022214teknofest 1-800x800.jpg', 'TEKNOFEST 2020 GAZİANTEP', 'TEKNOFEST 2020 1468 PROJE ARASINDAN TÜRKİYE 21.LİĞİ', 2, '', 'TEKNOFEST 2020 GAZİANTEP', 'TEKNOFEST 2020 21th place IN TURKEY AMONG 1468 PROJECTS'),
(8031, '241512949823045teknofest0 800x800.jpg', 'TEKNOFEST 2021 İSTANBUL', 'TEKNOFEST 2021 16432 PROJE ARASINDAN TÜRKİYE 14.LÜĞÜ', 1, '', 'TEKNOFEST 2021 İSTANBUL', 'TEKNOFEST 2021 14th place IN TURKEY AMONG 16432 PROJECTS'),
(8032, '231572946227662teknofest 2 800x800.jpg', 'TEKNOFEST 2020 GAZİANTEP', 'SAYIN HALUK BAYRAKTAR TAKIMIMIZ İLE BİRLİKTE', 8, '', 'TEKNOFEST 2020 GAZİANTEP', 'MR. HALUK BAYRAKTAR WITH OUR TEAM'),
(8033, '2267726556260042021toplanti1 800x800.jpg', '2020-2021 Yılı Online Çalışmaları', '2021 YILINDA ONLİNE OLARAK ÇALIŞMALARIMIZA DEVAM ETTİK', 12, '', 'Online Studies for 2020-2021', 'WE CONTINUED OUR WORK ONLINE IN 2021'),
(8034, '273552974321559tubitak2 800x800.jpg', 'TÜBİTAK Bölge Finalleri 2020', 'KONYA FİNALLERİ İÇİN DEDEMAN OTEL\'DE', 11, '', 'TÜBİTAK Regional Finals 2020', 'AT DEDEMAN HOTEL FOR KONYA FINALS'),
(8035, '245872484226630tubitak22\'1 800x800.jpg', 'TÜBİTAK Bölge Finalleri 2022', 'KONYA BÖLGE FİNALLERİNDE STANDIMIZDAYIZ', 4, '', 'TUBITAK Regional Finals 2022', 'WE ARE AT OUR STAND IN KONYA REGIONAL FINALS'),
(8036, '242002281223540gypfikirmaratonu1 800x800.jpg', 'T3 GYP Fikir Maratonu', 'T3 VAKFI GYP FİKİR MARATONU\'NDA 2 GÜNLÜK ZORLU SÜRECİ BAŞARIYLA TAMAMLADIK', 9, '', 'T3 GYP Ideathon', 'WE SUCCESSFULLY COMPLETED THE DIFFICULT 2-DAY PROCESS AT T3 FOUNDATION GYP IDEAS MARATHON'),
(8037, '299072285825428teknofest9 800x800.jpg', 'TEKNOFEST 2021 İSTANBUL', 'Sayın Selçuk Bayraktar ile Takım Kaptanımız', 7, '', 'TEKNOFEST 2021 İSTANBUL', 'Our Team Captain with Mr. Selçuk Bayraktar'),
(8038, '263052265325642teknofest3 800x800.jpg', 'TEKNOFEST 2021 İSTANBUL', 'TEKNOFEST 2021 YARIŞMA ALANI', 10, '', 'TEKNOFEST 2021 İSTANBUL', 'TEKNOFEST 2021 COMPETITION AREA'),
(8039, '218612724826835teknofest 3 800x800.jpg', 'TEKNOFEST 2020 GAZİANTEP', 'TEKNOFEST 2020 GAZİANTEP STANDIMIZDA', 13, '', 'TEKNOFEST 2020 GAZİANTEP', 'TEKNOFEST 2020 AT OUR STAND IN GAZIANTEP'),
(8040, '267932349626900tubitak22\'2 800x800.jpg', 'TÜBİTAK Bölge Finalleri 2022', 'TÜBİTAK KONYA BÖLGE FİNALLERİNDE STANDIMIZA GELEN MİSAFİRLERİMİZLE', 14, '', 'TUBITAK Regional Finals 2022', 'WİTH OUR GUESTS WHO COME TO OUR STAND AT TÜBİTAK KONYA REGİONAL FİNALS'),
(8041, '211782003625989tubitak4 800x800.jpg', 'TÜBİTAK Bölge Finalleri 2020', 'TÜBİTAK KONYA BÖLGE FİNALLERİNDE STANDIMIZDA', 15, '', 'TÜBİTAK Regional Finals 2020', 'TÜBİTAK KONYA REGIONAL FINALS AT OUR STAND'),
(8042, '241222651029395teknofest1 800x800.jpg', 'TEKNOFEST 2021 İSTANBUL', 'TEKNOFEST 2021 İNSANLIK YARARINA TEKNOLOJİ YARIŞMASINDA', 16, '', 'TEKNOFEST 2021 İSTANBUL', 'TEKNOFEST 2021 TECHNOLOGY FOR HUMANİTY COMPETİTİON'),
(8043, '241412405622242tubitak3 800x800.jpg', 'TÜBİTAK Bölge Finalleri 2020', 'TÜBİTAK Konya Bölge Finallerinde', 17, '', 'TÜBİTAK Regional Finals 2020', 'TÜBİTAK Konya Regional Finals'),
(8044, '263262047826164teknofest 4 800x800.jpg', 'TEKNOFEST 2020 GAZİANTEP', 'TEKNOFEST 2020 TÜBİTAK BAŞKANI SAYIN HASAN MANDAL İLE BERABER', 18, '', 'TEKNOFEST 2020 GAZİANTEP', 'TOGETHER WITH TEKNOFEST 2020 TUBITAK CHAIRMAN HASAN MANDAL'),
(8045, '290072435724860mbssteam2 800x800.jpg', 'Ulusal STEAM Yarışması FİNAL', 'STEAM YARIŞMASINDAKİ STANDIMIZA TÜBİTAK BAŞKANI SAYIN HASAN MANDALIN ZİYARETİ', 19, '', 'National STEAM Competition FINAL', 'TUBITAK CHAIRMAN HASAN MANDALIN VISIT OUR STAND AT THE STEAM COMPETITION'),
(8046, '283052990623377mem ödül 800x800.jpg', 'Isparta İl Millî Eğitim Müdürlüğü Ödülü', 'ISPARTA İL MİLLÎ EĞİTİM MÜDÜR YARDIMCISI FEVZİ GÜÇLÜ, ÖDÜLÜMÜZÜ TAKDİM EDERKEN', 20, '', 'Isparta Provincial Directorate of National Education Award', 'ISPARTA PROVINCIAL EDUCATION DEPUTY MANAGER FEVZİ GÜÇLÜ PRESENTING AWARD'),
(8047, '213422993824235mbssteam3 800x800.jpg', 'Ulusal STEAM Yarışması FİNAL', 'CELAL BAYAR ÜNİVERSİTESİ TARAFINDAN VERİLEN ULUSAL STEAM YARIŞMASI KATILIM BELGESİ', 21, '', 'National STEAM Competition FINAL', 'CELAL BAYAR ÜNİVERSİTESİ TARAFINDAN VERİLEN ULUSAL STEAM YARIŞMASI KATILIM BELGESİ'),
(8048, '298142882329954Başlıksız-2.jpg', 'TEKNOFEST 2020 ve TÜBİTAK 2204A 2020 Katılım Belgeleri', 'TEKNOFEST 2020 VE TÜBİTAK 2204A 2020 BÖLGE FİNALİ İÇİN T3 VAKFI VE TÜBİTAK TARAFINDAN VERİLEN KATILIM BELGELERİ', 22, '', 'TEKNOFEST 2020 and TÜBİTAK 2204A 2020 Participation Certificates', 'PARTICIPATION CERTİFİCATES GIVEN BY T3 FOUNDATION AND TUBITAK FOR TEKNOFEST 2020 AND TUBITAK 2204A 2020 REGIONAL FINAL');

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
(5, 'Deneme', 'deneme123', 'Deneme', '0'),
(11, 'selim', 'Sa:2217340', 'Selim', '0'),
(12, 'bahri', 'omgnoob32', 'Bahri', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sponsor`
--

CREATE TABLE `sponsor` (
  `id` int(11) NOT NULL,
  `resim` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `baslik` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `aciklama` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `emlaktipi` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `sira` int(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `sponsor`
--

INSERT INTO `sponsor` (`id`, `resim`, `baslik`, `aciklama`, `emlaktipi`, `sira`) VALUES
(14, '260132385524665isikkentlogo.png', '', 'https://linktr.ee/isikkentaihl', '.filter-2021', 1),
(21, '292492864025317piarge.png', '', 'piarge', '', 2),
(22, '296462001325514isimavlogo.png', '', 'index', '', 4),
(23, '203212066429472ervetlogo.png', '', 'https://www.instagram.com/ervetveteriner/', '', 3);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`ayarid`);

--
-- Tablo için indeksler `emlak`
--
ALTER TABLE `emlak`
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
-- Tablo için AUTO_INCREMENT değeri `emlak`
--
ALTER TABLE `emlak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8049;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
