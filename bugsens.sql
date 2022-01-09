-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 09 Oca 2022, 17:14:11
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
  `name` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `department` varchar(100) NOT NULL,
  `sc_number` int(5) NOT NULL,
  `photo` varchar(50) NOT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`adminID`, `name`, `password`, `username`, `department`, `sc_number`, `photo`) VALUES
(1, 'Ali Atilgan', '$2y$10$AbDzUQnocCpNR/Ewnjxqte3Vg2KkUcmyDopfhfq88gui1ZiHyNtmq', 'admin', 'Police Deparment', 17000103, 'ali.png'),
(2, 'Mohamed Elshagmani', '$2y$10$AbDzUQnocCpNR/Ewnjxqte3Vg2KkUcmyDopfhfq88gui1ZiHyNtmq', 'muhammed', 'FBI', 19701343, 'muhammed.jpeg'),
(3, 'Berkay Kalayci', '$2y$10$AbDzUQnocCpNR/Ewnjxqte3Vg2KkUcmyDopfhfq88gui1ZiHyNtmq', 'berkay', 'CIA Oficcer', 17000108, 'berkay.jpeg'),
(4, 'Onurcan Uzunsimsek', '$2y$10$AbDzUQnocCpNR/Ewnjxqte3Vg2KkUcmyDopfhfq88gui1ZiHyNtmq', 'onurcan', 'Turkish', 19001323, 'onurcan.jpeg'),
(5, 'Beytullah Gezginci', '$2y$10$AbDzUQnocCpNR/Ewnjxqte3Vg2KkUcmyDopfhfq88gui1ZiHyNtmq', 'beytullah', 'Rainbow Officer', 18700616, 'beytullah.jpeg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `criminalpeople`
--

DROP TABLE IF EXISTS `criminalpeople`;
CREATE TABLE IF NOT EXISTS `criminalpeople` (
  `cp_id` int(10) NOT NULL AUTO_INCREMENT,
  `cp_name` varchar(100) NOT NULL,
  `cp_reporter` varchar(50) DEFAULT NULL,
  `cp_reportermail` varchar(50) DEFAULT NULL,
  `cp_age` varchar(5) NOT NULL,
  `cp_photos` varchar(100) NOT NULL,
  `cp_details` varchar(255) NOT NULL,
  `cp_contact` varchar(100) NOT NULL,
  `cp_phone` varchar(20) NOT NULL,
  `cp_show` int(1) NOT NULL,
  `cp_date` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `criminalpeople`
--

INSERT INTO `criminalpeople` (`cp_id`, `cp_name`, `cp_reporter`, `cp_reportermail`, `cp_age`, `cp_photos`, `cp_details`, `cp_contact`, `cp_phone`, `cp_show`, `cp_date`) VALUES
(4, 'John Richmond', 'Emma Ortiz\r\n', 'huso@gmail.com', '36', 'JohnRichmond.jpg', 'slender with pink skin, John has an unadventurous feel about him. He has a wide face, a bulbous nose, and narrow lips. His blue eyes are prominent', '31 NW. Circle Circle\r\nBrandon, FL 33510', '(455) 359-3245', 1, '2022/01/07'),
(5, 'Randy Clemons', 'Tiah Trejo\r\n', 'ahmet@gmail.com', '56', 'RandyClemons.jpg', 'plump with orange skin, Richard has an unreliable feel about him.\r\nHe has a narrow face with a cleft chin, a broad nose, small ears and puffy lips. His blue eyes are hooded', '500 Strawberry St.\r\nNew York, NY 10040', '(928) 600-2883', 0, '2022/01/07'),
(6, 'Josephine Merrill', 'Taliyah Marriott\r\n', 'atilgan1024@gmail.com', '35', 'JosephineMerrill.jpg', 'Standing short and small-bodied with brown skin, Josephine has a conniving feel about her.\r\nShe has a triangular face with a square jaw, a hooked nose, large ears', '74 Alexander Road\r\nLondon\r\nSE76 4ZW', '(979) 841-4527', 1, '2022/01/07');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `missingpeople`
--

DROP TABLE IF EXISTS `missingpeople`;
CREATE TABLE IF NOT EXISTS `missingpeople` (
  `mp_id` int(10) NOT NULL AUTO_INCREMENT,
  `mp_name` varchar(100) NOT NULL,
  `mp_reporter` varchar(50) DEFAULT NULL,
  `mp_reportermail` varchar(50) DEFAULT NULL,
  `mp_age` varchar(5) NOT NULL,
  `mp_photos` varchar(100) NOT NULL,
  `mp_details` varchar(255) NOT NULL,
  `mp_contact` varchar(100) NOT NULL,
  `mp_phone` varchar(20) NOT NULL,
  `mp_show` int(1) NOT NULL,
  `mp_date` varchar(10) NOT NULL,
  PRIMARY KEY (`mp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `missingpeople`
--

INSERT INTO `missingpeople` (`mp_id`, `mp_name`, `mp_reporter`, `mp_reportermail`, `mp_age`, `mp_photos`, `mp_details`, `mp_contact`, `mp_phone`, `mp_show`, `mp_date`) VALUES
(1, 'Raymond Hector', 'Levi Murdo', 'Levi@gmail.com', '13', 'RaymondHector.jpg', 'He is Christmas Island. He didn\'t finish school. He is allergic to milk. Physically, Raymond is in good shape. He is very tall for his age with pale skin, dark brown hair and black eyes. He has a birthmark on his forehead.', '157 Fairfax Drive\r\nRiverside CA California 92501', '909-214-5239', 1, '2008/11/28'),
(2, 'Helen Chantal', 'Anzhela Goku', 'goku@gmail.com', '14', 'HelenChantal.jpg', 'She lives in a working class neighbourhood. Her mother passed away 10 years ago, leaving her father, an electrician Paul, to look after her. Helen goes to Shelbyville School, where her favourite subjects are chemistry and physics.', '1124 Primrose Lane\r\nFitchburg WI Wisconsin', '608-507-5636', 0, '2008/11/28'),
(3, 'Travon Stewart', 'Erik Wolfgang', 'wolfgang@gmail.com', '30', 'TravonStewart.jpg', 'Standing 165 tall, and fat with tan skin, Travon has a focused feel about him.\r\nHe has a wide face, a big nose, and full lips. His dark brown eyes are hooded and he has no eyebrows.', '975 Old Fairfield Dr.\r\nAstoria, NY 11106', '(423) 534-7084', 1, '2022/01/28'),
(4, 'Shawnte Nunez', 'Eudoxos Pelagios', 'pelagios@gmail.com', '29', 'ShawnteNunez.jpg', 'Standing 155 tall, and muscular with fair skin, Shawnte has an attractive feel about him.\r\nHe has an angular face with a round chin, a hooked nose, and puffy lips. His black eyes are narrow and he has neat eyebrows.', '77 Church Street\r\nLondon\r\nNW15 0XB', '(585) 268-1175', 0, '2008/11/28'),
(5, 'Mildred Maud Greenway', 'Balam Maike', 'maike@gmail.com', '21', 'MildredMaudGreenway.jpg', 'She is American who defines herself as straight. She didn\'t finish school. She has a severe phobia of bees. Physically, Mildred is not in great shape. She needs to lose quite a lot of weight. She is very tall with olive skin, blonde hair and blue eyes.', '2671 Grant View Drive\r\nNew Berlin WI 53151', '414-507-6311', 0, '2008/03/28'),
(8, 'Ella Weeks', 'Arend Sophia', 'sophia@gmail.com', '43', 'EllaWeeks.jpg', 'Standing 158 tall, and stout with tan skin, Ella has an authoritative feel about her.\r\nShe has a long face, a big nose, and small lips. Her hazel eyes are large and she has bushy eyebrows.', '138 West Brickell St.\r\nRochester, NY 14609', '(418) 375-6059', 0, '2028/11/28'),
(13, 'Jimena Hansen', 'Jördis Arnfried', 'arnfried@gmail.com', '25', 'JimenaHansen.jpg', 'Standing 150 tall, and muscular with olive skin, Annie has a very passive-aggressive feel about her. She has an angular face with a cleft chin, a narrow nose, ears that stick out, bony cheeks and thin lips.\r\n', '9448 Rosewood Ave.\r\nBrooklyn, NY 11225', '(341) 491-7288', 1, '2018/11/28');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
