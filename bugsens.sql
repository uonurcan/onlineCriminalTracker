-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 27 Ara 2021, 23:17:04
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
-- Veritabanı: `bugsens`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `adminID` int(100) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) NOT NULL,
  `admin_surname` varchar(100) NOT NULL,
  `admin_pwd` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `criminalpeople`
--

DROP TABLE IF EXISTS `criminalpeople`;
CREATE TABLE IF NOT EXISTS `criminalpeople` (
  `cp_id` int(10) NOT NULL AUTO_INCREMENT,
  `cp_name` varchar(100) NOT NULL,
  `cp_age` varchar(5) NOT NULL,
  `cp_photos` varchar(100) NOT NULL,
  `cp_details` varchar(255) NOT NULL,
  `cp_contact` varchar(100) NOT NULL,
  `cp_phone` varchar(20) NOT NULL,
  `cp_show` tinyint(1) NOT NULL,
  PRIMARY KEY (`cp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `criminalpeople`
--

INSERT INTO `criminalpeople` (`cp_id`, `cp_name`, `cp_age`, `cp_photos`, `cp_details`, `cp_contact`, `cp_phone`, `cp_show`) VALUES
(2, 'Timothy Franklin \r\n', '50', 'TimothyFranklin.jpg', 'Standing tall and built like a tank with pale skin, Timothy has an impressive feel about him.He has a lean face with a pointed chin, a pointed nose, narrow lips, and his brown eyes are heavy-lidded.\r\n', '4 NW. Helen Avenue\r\nPortland, ME 04103', '(786) 837-3425', 1),
(3, 'Logan Farmer\r\n', '26', 'LoganFarmer.jpg', 'Standing 5\' 7\" tall, and diminutive with fair skin, Logan has a stoic feel about him.\r\nHe has a square face, a bulbous nose, and large lips. His light green eyes are heavy-lidded and he has angular eyebrows.', '907 Princeton Circle\r\nSheboygan, WI 53081', '(762) 745-1379', 1),
(4, 'John Richmond', '36', 'JohnRichmond.jpg', 'Standing 6\' 1\" tall, and slender with pink skin, John has an unadventurous feel about him. He has a wide face, a bulbous nose, and narrow lips. His blue eyes are prominent and he has fine eyebrows.', '31 NW. Circle Circle\r\nBrandon, FL 33510', '(455) 359-3245', 1),
(5, 'Randy Clemons', '56', 'RandyClemons.jpg', 'Standing 5\' 7\" tall, and plump with orange skin, Richard has an unreliable feel about him.\r\nHe has a narrow face with a cleft chin, a broad nose, small ears and puffy lips. His blue eyes are hooded, and he has thin eyebrows.', '500 Strawberry St.\r\nNew York, NY 10040', '(928) 600-2883', 1),
(6, 'Josephine Merrill', '35', 'JosephineMerrill.jpg', 'Standing short and small-bodied with brown skin, Josephine has a conniving feel about her.\r\nShe has a triangular face with a square jaw, a hooked nose, large ears, defined cheekbones and narrow lips.', '74 Alexander Road\r\nLondon\r\nSE76 4ZW', '(979) 841-4527', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `missingpeople`
--

DROP TABLE IF EXISTS `missingpeople`;
CREATE TABLE IF NOT EXISTS `missingpeople` (
  `mp_id` int(10) NOT NULL AUTO_INCREMENT,
  `mp_name` varchar(100) NOT NULL,
  `mp_age` varchar(5) NOT NULL,
  `mp_photos` varchar(100) NOT NULL,
  `mp_details` varchar(255) NOT NULL,
  `mp_contact` varchar(100) NOT NULL,
  `mp_phone` varchar(20) NOT NULL,
  `mp_show` tinyint(1) NOT NULL,
  PRIMARY KEY (`mp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `missingpeople`
--

INSERT INTO `missingpeople` (`mp_id`, `mp_name`, `mp_age`, `mp_photos`, `mp_details`, `mp_contact`, `mp_phone`, `mp_show`) VALUES
(1, 'Raymond Hector', '13', 'RaymondHector.jpg', 'He is Christmas Island. He didn\'t finish school. He is allergic to milk. Physically, Raymond is in good shape. He is very tall for his age with pale skin, dark brown hair and black eyes. He has a birthmark on his forehead.', '157 Fairfax Drive\r\nRiverside CA California 92501', '909-214-5239', 1),
(2, 'Helen Chantal', '14', 'HelenChantal.jpg', 'She lives in a working class neighbourhood. Her mother passed away 10 years ago, leaving her father, an electrician Paul, to look after her. Helen goes to Shelbyville School, where her favourite subjects are chemistry and physics.', '1124 Primrose Lane\r\nFitchburg WI Wisconsin', '608-507-5636', 1),
(3, 'Travon Stewart', '30', 'TravonStewart.jpg', 'Standing 6\' 5\" tall, and fat with tan skin, Travon has a focused feel about him.\r\nHe has a wide face, a big nose, and full lips. His dark brown eyes are hooded and he has no eyebrows.', '975 Old Fairfield Dr.\r\nAstoria, NY 11106', '(423) 534-7084', 1),
(4, 'Shawnte Nunez', '29', 'ShawnteNunez.jpg', 'Standing 5\' 5\" tall, and muscular with fair skin, Shawnte has an attractive feel about him.\r\nHe has an angular face with a round chin, a hooked nose, and puffy lips. His black eyes are narrow and he has neat eyebrows.', '77 Church Street\r\nLondon\r\nNW15 0XB', '(585) 268-1175', 1),
(5, 'Mildred Maud Greenway', '21', 'MildredMaudGreenway.jpg', 'She is American who defines herself as straight. She didn\'t finish school. She has a severe phobia of bees. Physically, Mildred is not in great shape. She needs to lose quite a lot of weight. She is very tall with olive skin, blonde hair and blue eyes.', '2671 Grant View Drive\r\nNew Berlin WI 53151', '414-507-6311', 1),
(8, 'Ella Weeks', '43', 'EllaWeeks.jpg', 'Standing 5\' 8\" tall, and stout with tan skin, Ella has an authoritative feel about her.\r\nShe has a long face, a big nose, and small lips. Her hazel eyes are large and she has bushy eyebrows.', '138 West Brickell St.\r\nRochester, NY 14609', '(418) 375-6059', 1),
(13, 'Jimena Hansen', '25', 'JimenaHansen.jpg', 'Standing 5\' 0\" tall, and muscular with olive skin, Annie has a very passive-aggressive feel about her. She has an angular face with a cleft chin, a narrow nose, ears that stick out, bony cheeks and thin lips.\r\n', '9448 Rosewood Ave.\r\nBrooklyn, NY 11225', '(341) 491-7288', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
