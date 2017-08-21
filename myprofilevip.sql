-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2017 at 01:02 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myprofilevip`
--
CREATE DATABASE IF NOT EXISTS `myprofilevip` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `myprofilevip`;

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

DROP TABLE IF EXISTS `awards`;
CREATE TABLE `awards` (
  `id_awards` int(11) NOT NULL,
  `id_customer` int(20) NOT NULL,
  `award_name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `year` year(4) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id_awards`, `id_customer`, `award_name`, `description`, `year`, `status`) VALUES
(1, 35, 'juara 1 olahraga', 'jsdkshd sdhskdhs dlslhdioshd ishdlsihdpishdphs sequat, posuere nulla varius, molestie lorem. Duis quis nibh leo. Curabitur a quam eu mi convallis auctor nec id mauris. Nullam mattis turpis eu turpis tincidunt, et pellentesque leo imperdiet. Vivamus malesuada, sem laoreet dictum pulvinar, orci lectus rhoncus sapien, ut consectetur augue nibh in neque. In tincidunt sed enim et tincidunt.', 2015, 'on');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `identifier` longtext NOT NULL,
  `photo_url` varchar(25) NOT NULL,
  `profile_url` varchar(25) NOT NULL,
  `nama_depan` varchar(100) NOT NULL,
  `nama_belakang` varchar(200) DEFAULT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat_jalan` text NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `telepon` varchar(30) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `status_pernikahan` enum('Single','Married','Divorced') NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `photo` varchar(10) NOT NULL,
  `summary` text NOT NULL,
  `hobbies_interest` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `username`, `identifier`, `photo_url`, `profile_url`, `nama_depan`, `nama_belakang`, `tanggal_lahir`, `alamat_jalan`, `kode_pos`, `telepon`, `email`, `jenis_kelamin`, `status_pernikahan`, `nationality`, `photo`, `summary`, `hobbies_interest`) VALUES
(35, 'kuntikhoirunnisaa', '8.5945468300537e17', 'http://abs.twimg.com/stic', 'http://twitter.com/kuntin', 'Kunti', 'Khoirunnisa', '1996-08-25', 'Jakal km 4,5 gang sumilir no 14, yogyakarta', '55284', '085600929309', 'Kuntinisa250896@gmail.com', 'Male', 'Single', 'Indonesia', '1503311162', '', 'mengaji dan menyanyi'),
(36, '', '4069505413', 'http://pbs.twimg.com/prof', 'http://twitter.com/Aisyah', 'azifah', 'manset', '2017-06-20', 'jakal km 4,5', '55284', '085600929309', 'kuntinisa250896@gmail.com', 'Male', 'Divorced', 'Amerika serikat', '', '', ''),
(38, 'aku', '', '', '', '', NULL, '0000-00-00', '', '', '', NULL, '', 'Single', '', '', '', ''),
(40, 'lalala', '8.5945246177754e17', 'http://abs.twimg.com/stic', 'http://twitter.com/myprof', 'myprofilevip', NULL, '0000-00-00', '', '', '', NULL, '', 'Single', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

DROP TABLE IF EXISTS `education`;
CREATE TABLE `education` (
  `increment` int(11) NOT NULL,
  `id_customer` int(20) NOT NULL,
  `number` int(3) NOT NULL,
  `tingkat_pendidikan` varchar(200) NOT NULL,
  `nama_pendidikan` varchar(200) NOT NULL,
  `status_pendidikan` enum('graduated','deferred','transferred') NOT NULL,
  `completion_date` date NOT NULL,
  `location` varchar(300) NOT NULL,
  `description` text NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`increment`, `id_customer`, `number`, `tingkat_pendidikan`, `nama_pendidikan`, `status_pendidikan`, `completion_date`, `location`, `description`, `status`) VALUES
(1, 35, 1, 'SD', 'SD negeri 2 remu sorong ', 'graduated', '2017-06-10', 'Sorong', 'Awesome school and nice. Nulla volutpat at est sed ultricies. In ac sem consequat, posuere nulla varius, molestie lorem. Duis quis nibh leo. Curabitur a quam eu mi convallis auctor nec id mauris. Nullam mattis turpis eu turpis tincidunt, et pellentesque leo imperdiet. Vivamus malesuada, sem laoreet dictum pulvinar, orci lectus rhoncus sapien, ut consectetur augue nibh in neque. In tincidunt sed enim et tincidunt.', 'on'),
(2, 35, 2, 'SMP', 'SMP Negeri 9 Model Kota Sorong', 'graduated', '2017-06-10', 'Sorong', 'So excited have been schooled here. sequat, posuere nulla varius, molestie lorem. Duis quis nibh leo. Curabitur a quam eu mi convallis auctor nec id mauris. Nullam mattis turpis eu turpis tincidunt, et pellentesque leo imperdiet. Vivamus malesuada, sem laoreet dictum pulvinar, orci lectus rhoncus sapien, ut consectetur augue nibh in neque. In tincidunt sed enim et tincidunt.', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `employment`
--

DROP TABLE IF EXISTS `employment`;
CREATE TABLE `employment` (
  `id_employment` int(11) NOT NULL,
  `id_customer` int(20) NOT NULL,
  `job_title` varchar(200) NOT NULL,
  `company` varchar(200) NOT NULL,
  `location` varchar(300) NOT NULL,
  `start_date` date NOT NULL,
  `presently_employed` tinyint(1) NOT NULL,
  `end_date` date NOT NULL,
  `compensasion` int(10) NOT NULL,
  `mata_uang` int(11) NOT NULL,
  `interval_waktu` enum('annually','monthly','daily','hourly') NOT NULL,
  `description` text NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employment`
--

INSERT INTO `employment` (`id_employment`, `id_customer`, `job_title`, `company`, `location`, `start_date`, `presently_employed`, `end_date`, `compensasion`, `mata_uang`, `interval_waktu`, `description`, `status`) VALUES
(1, 35, 'kasir', 'indomaret', 'jakal', '2016-07-03', 1, '2017-07-04', 600000, 1, 'monthly', 'lumayan lahhh sequat, posuere nulla varius, molestie lorem. Duis quis nibh leo. Curabitur a quam eu mi convallis auctor nec id mauris. Nullam mattis turpis eu turpis tincidunt, et pellentesque leo imperdiet. Vivamus malesuada, sem laoreet dictum pulvinar, orci lectus rhoncus sapien, ut consectetur augue nibh in neque. In tincidunt sed enim et tincidunt.', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
CREATE TABLE `languages` (
  `id_languages` int(11) NOT NULL,
  `id_customer` int(20) NOT NULL,
  `language_name` varchar(200) NOT NULL,
  `level` enum('beginner','conversational','fluent','native') NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id_languages`, `id_customer`, `language_name`, `level`, `status`) VALUES
(1, 35, 'bahasa indonesia', 'native', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
CREATE TABLE `log` (
  `increment` int(11) NOT NULL,
  `id_customer` int(20) NOT NULL,
  `activity` varchar(20) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `where` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`increment`, `id_customer`, `activity`, `datetime`, `where`) VALUES
(14, 35, 'register', '2017-05-25 12:49:54', '::1'),
(15, 35, 'login', '2017-05-25 12:50:15', '::1'),
(16, 35, 'login', '2017-05-25 12:50:55', '::1'),
(17, 35, 'login', '2017-05-25 12:54:51', '::1'),
(18, 35, 'login', '2017-05-25 12:55:11', '::1'),
(19, 36, 'register', '2017-05-25 12:56:26', '::1'),
(20, 36, 'login', '2017-05-25 12:56:39', '::1'),
(21, 35, 'login', '2017-05-25 13:04:25', '::1'),
(22, 36, 'login', '2017-05-26 03:58:24', '::1'),
(23, 36, 'login', '2017-05-30 01:02:24', '::1'),
(24, 36, 'login', '2017-06-07 01:44:44', '::1'),
(25, 36, 'login', '2017-06-07 02:02:41', '::1'),
(26, 36, 'login', '2017-06-09 10:50:41', '::1'),
(27, 36, 'login', '2017-06-09 10:52:23', '::1'),
(28, 36, 'login', '2017-06-09 11:08:53', '::1'),
(29, 36, 'login', '2017-06-09 17:18:34', '::1'),
(30, 35, 'login', '2017-06-10 09:28:11', '::1'),
(31, 35, 'login', '2017-06-11 13:00:39', '::1'),
(32, 35, 'login', '2017-06-14 13:47:20', '::1'),
(33, 35, 'login', '2017-07-05 00:48:46', '::1'),
(34, 35, 'login', '2017-07-09 01:50:55', '::1'),
(35, 35, 'login', '2017-07-11 21:00:09', '::1'),
(36, 35, 'login', '2017-07-12 00:32:20', '::1'),
(37, 35, 'login', '2017-07-13 05:52:04', '::1'),
(38, 35, 'login', '2017-07-15 22:27:54', '::1'),
(39, 35, 'login', '2017-07-17 23:27:25', '::1'),
(40, 35, 'change biodata', '2017-07-17 23:30:17', '::1'),
(41, 35, 'change biodata', '2017-07-18 01:09:23', '::1'),
(42, 35, 'login', '2017-07-18 04:52:41', '::1'),
(43, 35, 'login', '2017-07-21 00:26:43', '::1'),
(44, 37, 'register', '2017-08-14 11:54:27', '127.0.0.1'),
(45, 37, 'login', '2017-08-14 12:03:36', '127.0.0.1'),
(46, 37, 'login', '2017-08-14 12:15:00', '127.0.0.1'),
(47, 37, 'login', '2017-08-14 12:16:28', '127.0.0.1'),
(48, 39, 'register', '2017-08-14 12:17:03', '127.0.0.1'),
(49, 40, 'register', '2017-08-14 12:19:51', '127.0.0.1'),
(50, 40, 'login', '2017-08-14 12:43:46', '127.0.0.1'),
(51, 35, 'login', '2017-08-14 12:48:09', '127.0.0.1'),
(52, 35, 'change biodata', '2017-08-14 12:49:28', '127.0.0.1'),
(53, 35, 'change biodata', '2017-08-14 12:50:14', '127.0.0.1'),
(54, 35, 'login', '2017-08-15 10:54:12', '127.0.0.1'),
(55, 35, 'login', '2017-08-21 02:53:32', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `references_cust`
--

DROP TABLE IF EXISTS `references_cust`;
CREATE TABLE `references_cust` (
  `id_references` int(11) NOT NULL,
  `id_customer` int(20) NOT NULL,
  `reference_name` varchar(200) NOT NULL,
  `company` varchar(200) NOT NULL,
  `phone` int(20) NOT NULL,
  `address` varchar(300) NOT NULL,
  `relationship` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `references_cust`
--

INSERT INTO `references_cust` (`id_references`, `id_customer`, `reference_name`, `company`, `phone`, `address`, `relationship`, `email`, `description`, `status`) VALUES
(1, 35, 'yeahh', 'bumn', 9876543, 'ksjdjs skjdbsdbous', 'friends', 'ksdbsudsiudb@khbckud.com', 'sjugdbsuid usgdbsudbs sequat, posuere nulla varius, molestie lorem. Duis quis nibh leo. Curabitur a quam eu mi convallis auctor nec id mauris. Nullam mattis turpis eu turpis tincidunt, et pellentesque leo imperdiet. Vivamus malesuada, sem laoreet dictum pulvinar, orci lectus rhoncus sapien, ut consectetur augue nibh in neque. In tincidunt sed enim et tincidunt. sequat, posuere nulla varius, molestie lorem. Duis quis nibh leo. Curabitur a quam eu mi convallis auctor nec id mauris. Nullam mattis turpis eu turpis tincidunt, et pellentesque leo imperdiet. Vivamus malesuada, sem laoreet dictum pulvinar, orci lectus rhoncus sapien, ut consectetur augue nibh in neque. In tincidunt sed enim et tincidunt.', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `id_user` int(11) NOT NULL,
  `language` enum('bahasa','english') NOT NULL,
  `template` int(2) NOT NULL,
  `share_public` tinyint(1) NOT NULL,
  `count_view` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
CREATE TABLE `skills` (
  `id_skills` int(11) NOT NULL,
  `id_customer` int(20) NOT NULL,
  `skill_name` varchar(200) NOT NULL,
  `level` enum('beginner','intermediate','advanced','expert') NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id_skills`, `id_customer`, `skill_name`, `level`, `status`) VALUES
(1, 35, 'memasak', 'advanced', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_content`
--

DROP TABLE IF EXISTS `tbl_content`;
CREATE TABLE `tbl_content` (
  `id_content` int(10) NOT NULL,
  `judul_content` varchar(100) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_content`
--

INSERT INTO `tbl_content` (`id_content`, `judul_content`, `content`) VALUES
(1, '1D & 1N Ijen Crater Tour', '<b>Departure time	: 11.00 - 11.30 PM</b>\r\n\r\nOne of jewel in East Java, Ijen Crater have attracted travellers from all over the world, we carries you through coffee and clove plantations around the village of Licin and into one of Java''s last forest, rich wildlife at the park ranger''s station to begin hike the Ijen Crater, along a shady trail with spectaculer views. Rest along in the rim of the volcanic crater lake at an evelation  of 2,883 meters. The lake eerie colors and smoke wafting from bright yellow sulphur deposits along the shore creat a landscape both desolately barren and vibrantly alive. Watch miners cescend into the crater and re-emerge carrying up to 80 kilograms of ore on bamboo baskets along treacherous path.\r\n'),
(2, '2D & 1N Ijen Crater Tour', '<b>Departure time	: 8.00 - 8.30 AM</b>\r\n\r\n<b>Day 01 </b>\r\n\r\nOur staff will pick you up from your hotel in Bali. Then drive to take you to the most western tip of Bali to reach Ferry port of Gilimanuk for about 3 hours by private car with AC then upon arrival in Gilimanuk harbor, proceed to take ferry to cross Bali strait for about 1 hour to reach Ketapang ferry port in Banyuwangi (in the most eastern tip of Java island). The trip goes through the rural landscapes of West Bali and lunch will be served at local restaurant on the way. End of the afternoon drive up to Hotel for stay overnight and having dinner.\r\n\r\n<b>Day 02</b>\r\n\r\nIn the morning, We will go to Paltuding, passing through plantations and rainforest. This is one of the few remaining on the island of Java with giant ferns and plants, big trees, this journey takes approximately 2 hour from the hotel by private car. Arriving at Paltuding. Approximately 1 until 1.5 hours will be required to ascend slope of mount Ijen to reach peak of Ijen Crater and along the path, You will enjoy the stunning natural scenery with fresh air & shady. Resting on the edge of the crater at an altitude of 2883 meters and enjoy best panorama of the lake of sulphate where reflects spectacular view in the surrounding walls to give the impression like doom. The sulfur mining workers go down into the crater and climb back up by passing dangerous path on the edge of Ijen Crater with the load as much as 80 kilograms on their shoulders. Here also, You will enjoy the beautiful scenery in the crater of Ijen as one of God''s amazing creation. Do not forget to take pictures in this area as a proof that you have visited one of the most amazing places on earth. After You enjoyed the natural scenery at Crater of Ijen and then descend the slope of Mount Ijen until vehicles parking area where our vehicle is waiting for escort you back to the City of Banyuwangi for having lunch at a local restaurant. Afterwards, we will drive back to the Bali island with same route and lunch will be served at local restaurant. We will arrive in Bali island or your Bali hotel in the late afternoon or evening.\r\n'),
(3, '2D & 1N Mount Bromo Tour', '<b>Departure time	: 8.00 - 8.30 AM</b>\r\n\r\n<b>Day 01</b>\r\n\r\nOur staff will pick you up from Bali hotel then drive to the most western tip on Bali/Gilimanuk Ferry port for 3-4 hours and the cross Bali strait by ferry to reach Ketapang ferry port in Banyuwangi about an hour. From Ketapang ferry port, we will continue to drive to Mt. Bromo area about 4-5 hours and upon your arrival in Mt. Bromo area, you will stay at the Lava View Lodge or Bromo Cottages or Cemara Indah or Java Banana Hotel Bromo or similar where overlooking to the actives volcano of Mount Bromo, Batok and Mount Kursi around Tengger region for your enjoyable stay.\r\n\r\n<b>Day 02</b>\r\nAt 4 am the 4WD (JEEP) will bring you to the world''s most famous view point at Mount pananjakan on the rim of the Tengger caldera to see sunrise with its young volcanic including Mount Bromo and an active Mount Semeru in the back ground is breathtaking the play light shadow with sunrise reach Mountain succession from the top to the bottom and the usual fog of the caldera. Afterwards, the adventure be continued to an active Mount Bromo volcano by horse riding. Then will take you back to the hotel for breakfast, take shower, packing, loading bags, to the vehicle then we will drive back to the Bali island with same route and lunch will be served at local restaurant. We will arrive in Bali island or your Bali hotel in the late afternoon or evening.'),
(4, '3D & 2N Ijen & Bromo Tour', '<b>Departure time	: 8.00 - 8.30 AM</b>\r\n\r\n<b>Day 01 </b>\r\n\r\nStart from your hotel in Bali (Denpasar, Sanur, Kuta or Ubud area), Our staff will take you to the most western tip of Bali to reach Gilimanuk ferry port for about 3 hours by a private car with AC then from Gilimanuk Harbor, We will take a ferry to cross Bali strait for about 1 hour to reach Ketapang ferry port of Banyuwangi in the most eastern tip of Java Island. On this trip, We will pass through the rural landscapes of West Bali. Lunch will be served at local restaurant on the way. Upon arrival in Ketapang ferry port then proceed for a short city tour in Banyuwangi. End of the afternoon drive up to Hotel for stay over night and having dinner before we can enjoy Ijen Crater Tours on next morning. \r\n\r\n<b>Day 02 </b>\r\n\r\nEarly wake-up call and having Breakfast, our Ijen Discovery vehicle will carry you to Ijen Crater. Lush vegetations, clove and coffee plantation precede the rainforest where humidity, wildlife, giant ferns and big trees cover this 2468 ha nature reserve. From the Park Ranger post starts the 90-minutes hike to Ijen Crater. The stunning unveils at 2383 meters altitude. The lake eerie color and smoke wafting from bright yellow sulfur deposits create the landscape desolate, barren and vibrantly alive. Sulfur miners emerge carrying up to 80 kilograms of ores in bamboo basket on their shoulders, climbing up along the treacherous path. After exploring Ijen Crater, We will drive down back to Banyuwangi Town, then directly drive to Mount Bromo area for about 4-5hours including stop on the way for having lunch at local restaurant. upon your arrival in Mt. Bromo area, you will stay at the Lava View Lodge or Bromo Cottages or Cemara Indah or Java Banana Hotel Bromo or similar where overlooking to the actives volcano of Mount Bromo, Batok and Mount Kursi around Tengger region for your enjoyable stay. \r\n\r\n<b>Day 03 </b>\r\n\r\nAt 4 am the 4WD (JEEP) will bring you to the world''s most famous view point at Mount pananjakan on the rim of the Tengger caldera to see sunrise with its young volcanic including Mount Bromo and an active Mount Semeru in the back ground is breathtaking the play light shadow with sunrise reach Mountain succession from the top to the bottom and the usual fog of the caldera. Afterwards, the adventure be continued to an active Mount Bromo volcano by horse riding. Then will take you back to the hotel for breakfast, take shower, packing, loading bags, to the vehicle then we will drive back to the Bali island.\r\n'),
(5, 'Full Day Yogyakarta Tour', 'Morning call by our staff to your hotel approximately 04.30 am for transfer out the airport to catch the early flight to Jogjakarta. Upon arrival in Jogjakarta you will meet by our experienced tour guide for proceed you to largest Buddhist Temple in the world, Borobudur Temple which consist of hundreds small temple relief on it. The trip will continue to visit Mendut and Pawon as the smaller Buddhist temple, after then visiting to the Keraton Jogja, Batik Home Industry is just near by the Keraton, Bird Market and Kota Gede as the center of silver smith in Jogjakarta, and the last visit to Prambanan Temple as one of Hindu''s Temple while the Hindu''s Kingdom leading in Java. A return transfer to the airport of Adi Sucipto will close your one day experience in Jogjakarta.'),
(6, '2D & 1N Yogyakarta Tour', '<b>Day 01</b>\r\n\r\nEarly morning pick up service by our staff approximately 04.30 AM and transfer to the airport take flight to Jogjakarta, upon arrival our guide will take you drive to biggest temple in the world, the Borobudur Temple as one of nine wonder heritage of the world. After then back to the hotel for overnight.\r\n\r\n<b>Day 02</b>\r\n\r\nMorning breakfast at the hotel and met by our tour guide for the next program to visit : Sultan palace where is the place of the origin Keraton custom is doing daily, continue to Kota Gede as the center of Silver hand made production, Bird Market, and Prambanan Hindu''s Temple which will visit on the way back to Adi Sucipto airport to catch the flight to Bali.\r\n'),
(7, '2D & 1N Komodo Dragon Tour	', '<b>Day 01</b>\r\n\r\nPick up and tranfer to Bali airport to flight to Labuan Bajo. In arriving you will be welcomed by our friendly local guide. We then drive you to the harbour. Sailing with the traditional wooden boat to rinca island where we can found the Komodo Dragon. Upon arriving at the island, you will be accompaned by an experienced local ranger to explore around to see the Komodo lizard at their own nature. On the way trek you may see other animals like deers, wild boar, buffalous, long-tailed macaque also numerous or birds. back to the boat then we sail to Kalong island is its beautiful island with a thousand of flying foxes and many type of birds. Overnight and have a dinner on board.\r\n\r\n<b>Day 02</b>\r\n\r\nEarly morning sail to bidadari island while having a breakfast. In Bidadari island you can swim, snorkeling and relaxing. sailing to Labuan Bajo than transfer to the airport for your flight back to Bali. upon arrival at Bali airport drive you to your hotel.\r\n'),
(8, '3D & 2N Komodo Dragon Tour	', '<b>Day 01</b>\r\n\r\nPick up and tranfer to Bali airport to flight to Labuan Bajo. In arriving our friendly local guide will welcome you. We than drive you to the harbour. Sailing with the traditional wooden boat to rinca island where we can found the Komodo Dragon. Having lunch on board. Upon arriving at the island, you will be accompaned by an experienced local ranger to explore around to see the Komodo Dragon. On the same time you may see other animals like deers, wild boar, buffalous, long-tailed macaque also numerous or birds. Then we sail to Kalong island is its beautiful island with a thousand of flying foxes and many type of birds. Overnight and have a dinner on board. \r\n\r\n<b>Day 02</b>\r\n\r\nEarly morning we sail to komodo island. Enjoy the beautiful sunrise on the way sailing while we have some breakfast. When arrive with pleased an experienced local ranger will accompany  to explore the island to see more Komodo Dragon than sailing to pink beach for snorkling and swmming in unspoilt coral reef amongs colorful tropical fish. Afterward sailing to Bidadari Island with  is its wonderfull island. Having lunch on board. At the island we take relaxing, sunbathing on the white sandy beach, swimming and Snorkling than sailing back to Labuan Bajo. Check in hotel, dinner and overnight.\r\n\r\n<b>Day 03</b>\r\n\r\nMorning pick up to visit Goa Batu Cermin an interested cave with stalactite and stalagmite. Than make city sight seeing before leaving for Bali. After getting Bali airport, take you to the hotel.\r\n'),
(9, '2D & 1N Lombok Tour', '<b>Day 01</b>\r\n\r\nMorning call by our driver for driving to the airport catch the flight to Lombok, upon arrival drive to Banyumulek the traditional pottery maker, continue to Sukarare as the centre of hand weaving, Sade Village is the next destination as the one of original Sasak traditional architecture, Kuta Beach and Tanjung A''An is the next destination, overnight at the hotel.\r\n\r\n<b>Day 02 </b>\r\n\r\nBreakfast at the hotel and then take a trip to visit the city, Mayura the Royal Court of the former, Sweta the daily traditional main market, and then continue to Narmada the Royal Summer Palace and drop to airport for flight to Bali.\r\n'),
(10, 'Uluwatu Tour', '<b>Departure time	: 1.00 - 1.30 PM</b>\r\n\r\nFirstly we will visit to Nusa Dua, where the Water Sport Center Activities, the 5 Stars Hotel & Galeria Nusa Dua Shopping Mall. Than we will visit to Uluwatu Temple, a cliff edge temple at 95 meters above sea level, with fantastic view to the Indian Ocean. This is the masterpiece of Niratha, a holy priest from XVI century, and great place to watch the sunset over the sea that filled with sailing outriggers (jukung). Afterwards, we will witness the performance of Kecak and Fire Dance, the most unique dance among Balinese dances and featuring the Ramayana story. And then we will take you to Jimbaran Bay for a romantic dinner and traditional set up beach cafe.\r\n'),
(11, 'Kintamani Tour', '<b>Departure time	: 8.00 - 8.30 AM</b>\r\n\r\nFirstly we will stop at Tohpati, the center of Balinese hand weaving and hand made Batik process. Then we will see numerous aspects of Balinese life, such as Barong and Kris performance, the famous and colorful dance in Bali which signifies an eternal fight between good and evil spirit at Batubulan. Drive to Celuk to see the processing of Gold and Silver, traditional and modern oil painting you can see at Batuan and the Temple, find wood carvings at Mas or Kemenuh. Afterwards, we will go directly to Kintamani, a Volcano village lies at 1,700 meters above sea level. There is a breathtaking view to the still active Volcano and Lake Batur, from this rim adge village and next we stop at Bali Natural Spice. On the way back, we will pass a superb view of rice terraced fields in Tegalalang.\r\n'),
(12, 'Jatiluwih Tour', '<b>Departure time	: 8.00 - 8.30 AM</b>\r\n\r\nLeaving the traffic behind, you are soon winding your way through small villages surrounded by early morning Balinese Life, driving through traditional village, natural plantation, the best rice field in Bali and your target the mighty Mount Batukaru. Firstly, we will stop at Butterflies Park, a beautiful park where thousand of butterflies from the rarest species are bred and flying around the park, continuing to Hot Spring and Batukaru Temple, the second most scared temple in Bali, located in the middle of tropical rainforest on the slop of Mount Batukaru. On the way back, we will passes through coffee, cocoa, vanilla and clove plantation will lead you to Jatiluwih Village to witness Bali''s true master piece of massive rice terrace.\r\n'),
(13, 'Tanah Lot Tour', '<b>Departure time	: 2.30 - 3.00 PM</b>\r\n\r\nFirstly we will stop at Mengwi, to visit the magnificent Royal Family Temple of Taman Ayun (XVII century), surrounded by an artificial moat. Continuing the trip, we will be visit to Alas Kedaton, the flying fox and monkey forest. Our next stop is The Marine Temple of Tanah Lot, this lovely temple was built on a promontory offshore, truly a perfect setting to watch an Amazing Sunset.\r\n'),
(14, 'Besakih Tour', '<b>Departure time	: 8.00 - 8.30 AM</b>\r\n\r\nBesakih Temple perched high on the slope of Mount Agung, 3142 meters, the highest peak of Bali, thus it is considered to be the holiest place in Bali. This is Bali''s Mother Temple, the biggest, the most important and the holiest temple on this island. On the way to get there, we will stop at Tohpati, the center of Balinese hand weaving and hand made Batik process also to Batuan, the traditional and modern oil painting. We will visit the Elephant Cave (Goa Gajah), an ancient Hindu - Buddhist hermitage dated from XI century. Then we will proceed to Klungkung, the old capital of Bali (1740 - 1908), to see the Court of Justice (Kerta Gosa), and the Floating Pavilion (Bale Kambang). Their murals are decorated by the best examples of classical Balinese painting. Afterwards, we will stop at Bukit Jambul, ''the crested hill'' with nice view of terraced rice fields.\r\n'),
(15, 'Bedugul Tour', '<b>Departure time	: 8.00 - 8.30 AM (morning trip)\r\nDeparture time	: 11.00 - 11.30 AM (afternoon trip)</b>\r\n\r\nThis is one of the ''compulsory'' tours to see some of the most beautiful temples of Bali. Firstly we will stop at Mengwi, to visit the magnificent Royal Family Temple of Taman Ayun (XVII century), surrounded by an artificial moat. We will stop at Pacung a nice view of natural plantation with Mount Batukaru as its background. We will explore Bedugul area, a mountain resort lies over 1.000 meters above the sea level. We will stop at Ulun Danu Bratan Temple. Built on a promontory surrounded by lake''s water, this holy place is dedicated to Dewi Danu (the Goddes of Water). Continuing the trip, we will be visit to Alas Kedaton, the flying fox and monkey forest. Our next stop is The Marine Temple of Tanah Lot, which appears in every brochure on Bali. This lovely temple was built on a promontory offshore, truly a perfect setting to watch an Amazing Sunset.\r\n'),
(16, 'Karangasem Tour', '<b>Departure time	: 8.00 - 8.30 AM</b>\r\n\r\nWe will stop at Bukit Jambul, ''the crested hill'' with nice view of terraced rice fields. Then we proceed to Putung, the beautiful green valley panorama, continuing the trip to Tirta Gangga (the water of Ganges), the royal bathing pools fed by natural springs. Afterwards we will proceed to Candidasa, a beach resort and to Tenganan Pagringsingan Village, the aboriginal Balinese with thousand year traditions and rituals still well preserved until the present day. Our tour to this easternmost region is not complete without visits The Bat Cave (Goa Lawah) with thousands of undulating fruit bats covering every space available on its wall. And then we will back to your hotel.\r\n'),
(17, 'Ubud Tour', '<b>Departure time	: 8.00 - 8.30 AM (morning trip)\r\nDeparture time	: 11.00 - 11.30 AM (afternoon trip)</b>\r\n\r\nUbud and its surroundings is one of the most beautiful villages in Bali where we can find lots of talented artisans. Firstly, we will see the hand made Batik painting at Tohpati, Then we will see numerous aspects of Balinese life, such as: Barong and Kris performance, the most famous & colorful dance in Bali which signifies an eternal fight between good & evil spirit or Kecak and Fire Dance at Batubulan, Gold and Silver works at Celuk, the traditional and modern oil painting at Batuan and the Temple, find woodcarvings at Mas or Kemenuh. Afterwards we will proceed to Ubud, the holy monkeys around the temple. On the way back, we will pass superb views of terraced rice fields in Tegalalang.\r\n'),
(18, 'Singaraja Tour', '<b>Departure time	: 8.00 - 8.30 AM</b>\r\n\r\nThis long tour is arranged in older to appreciate the natural beauty of Bali in a tranguil and peaceful environment (and not so touristy). At first, we will explore Bedugul area, a mountain resort lies over 1,000 meters above the sea level. We will stop at Ulun Danu Bratan Temple. Built on promontory surrounded by lake''s water, this holy is dedicated to Dewi Danu (the goddes of water). Afterwards, we will stop at Puncak to explore the jungle of monkey. Continuing the trip, we search for North Bali, with brief stop for refreshing bath at Munduk Waterfall, the highest and the most beautiful waterfall on the island situated in a serene place among coffee and clove. We will pass trough Lovina Beach, black sandy beach.  Then we proceed to Banjar village, the hot spring and Buddist Monastery. On the way back, we will pass the Pupuan Village. Where an endless stunning view of rice terrace fields, coffee and clove plantation along the mountain ridge.\r\n'),
(19, 'White Water Rafting', 'You served by welcome drink when you arrive at our starting point and you will handled by our profesional guide. When it comes to adrenaline rush, we are the expert. Our adventure begins with a 5 minutes walk through aluscious village. Here you can already intimate your self with the pure nature of Bali jungle and lovely terrace rice field. papling through the breeze water fall and plunge 4 meters drop from the bajing Dam into the churming white water.\r\n\r\nOur Service Include : \r\n\r\n<ul><li>Air Conditioned hotel transfer</li><li>Safety approved rafting equipment with international standard</li><li>Instruction by well trained professional guide</li><li>Shower facilities</li><li>Use of towel with changing room</li><li>Buffet lunch at Lapama</li><li>Restaurant</li><li>Insurance coverage max US$ 500</li></ul>\r\n'),
(20, '4WD ATV Riding', 'Thrilling ATV rides at the feet of Bali''s magical Batukaru Mountain. World famous paddy terrace, flowing mountain streams and luscious forestry are among others. Challenge your adrenaline and conquer the wilderness, while absorbing the pure rhythm of Balinese nature. You will be equipped with top of the line and well maintained vehicles. Profesional Instructors also on hand to ensure a pleasant and save ride.\r\n\r\nPACKAGE INCLUDES :\r\n\r\n<ul><li>Air conditioned transport</li><li>Buffet lunch at Paddy Terrace Restaurant</li><li>Mineral water & tropical fruits as refreshment during the trip</li><li>Free souvenir</li><li>Hyglenic hot/cold shower room facilities</li><li>Clean bath towel</li><li>Safety Insurance coverage</li></ul>\r\n'),
(21, 'Horse Riding', 'Our Stables are located on the coast, at the Seaside village of Yeh Gangga, just west of most photographed and one of Bali''s most sacred places, Tanah Lot. The scenery is beautiful in this peaceful village, where rice farming, fishing and sea salt harvesting are the main activities.\r\n\r\nGently sloping rice terraces fringe a sparkling black mineral shore, trail riding west, we pause at a waterfall *, sea-salt harvesting area, a temple set on the cliffs, a bat cave and a natural rock headland which juts out of the crystal Blue Ocean, but best of all, an opportunity to swim with the horses. \r\nAn idyllic setting, invigorating sea air, crystal clear ocean, spectacular coastline, rural panorama and the local people, completes our trip of natural beauty and Balinese hospitality.\r\n\r\nA glimpse into village life, where culture and tradition entwine, along the small paths, past the traditional family housing compounds, home industries and the friendly smiling faces Bali is Unique.\r\n\r\nIncludes :\r\n<ul><li>Light Refreshments and Softdrink</li><li>Insurance and Transfers</li><li>International Standard Riding Equipment</li></ul>'),
(22, 'Elephant Riding - Full Trek', 'Be prepared to see more of the real Bali from high up on your Sumatran Elephant. Pass through tropical plantations of mango, jackfruit, durian, coffee, bamboo and coconuts. Look out for birds and monkeys as you pass through the jungle and see how other animals such as pigs, cows, and buffalos play a part in the daily lives of farmers and their families as you enter the small local village of Buanga. Pass by the village temple and witness daily life far away from tourist areas. A highlight on the trip is to be invited into the home of a local farmer where you will enjoy a drink of fresh coconut. This such a unique and enjoyable trek as you look down at glimpses of the river and trek through unspoilt rice paddies on your return to the camp. You and your Elephant became a part of your real Balinese experience. When you return to the camp enjoy a delicious Western or Balinese 3 course menu at the "Trunk''n''Mahout" valley-view cafe and relax in the idyllic surroundings.'),
(23, 'Elephant Riding - Short Trek', 'If you want to become friends with a great Sumatran Elephant, then try our shorter Adventure trek. You get to experience the beautiful landscape of our camp as well as venturing out for a trek along  the edge of the valley... the views are incredible, so bring your camera! You may also get to see monkeys and tropical birds in their natural habitat. Look down at the raging Ayung River and discover how much fun riding an Elephant can be. Our Elephant will aso show you his/her pool as he wades through the water to cool off from the hot sun. Fell free to relax and enjoy lunch at the "Trunk''n''Mahour" cafe at the end of the trek and enjoy the stunning valley scenery.'),
(24, 'Mountain Climbing - Mount Batur', 'This trip will take you to the best mountain view in bali. Our 2 hours trekking allow you to walk across the black sand and the lava deposited by eruption hundreds years ago. See the beautiful view of Lake Batur and the fascinating sunrise from the top of the mountain. And while enjoying the view, our trekking guide will show you how to cook egg in the streaming fissures. Lunch will be served at our best recommended restaurant.'),
(25, 'Mountain Climbing - Mount Agung', 'Mount Agung trekking trip will give you a once of a lifetime chance to experience a holy trekking trip, on the holiest mountain in Bali. Start from Pasar Agung temple (Hindu''s temple of the merchants), and see the magnificent of Besakih (Hindu''s mother temple). Enjoy the sunrise from the top and watch Denpasar city, Sanur, Nusa Dua while inhaling the fresh mountain air. Lunch will be served at our best recommended restaurant after the trip.'),
(26, 'Downhill Cycling', 'Not yet to mention our total 40 km excitement route from Batur volcano lake going downhill watching rural life parade special temple caremony, stopping at our traditional tread where you also be entertained by Balinese children . added of our journey will stop in UBUD (the best city in Asia 2009) for lunch and aching muscle in the nice swimming pool, at Bintang Pari Cottage. We guarantee that, this unforgettable adventure concludes your vacation and will remain warmly in your heart that will make you want to return to what world travelers refer to as.\r\n\r\nTOUR SERVICE INCLUDES :\r\n\r\n<ul><li>Covered Insurance</li><li>Air conditioner in/out hotel transfer</li><li>Mountain bike and sefety helmet</li><li>Fruits and cold mineral water</li><li>Breakfast and lunch</li><li>Friendly and knowledge guides</li><li>Swimming pool</li><li>Cold face towel</li>\r\n'),
(27, 'Day Cruises - Bali Hai Cruise', 'Our Island Reef Cruise offers a full day''s activities - above and below the water. The luxury Bali Hai II catamaran moors alongside our purpose-built pontoon in peaceful Lembongan Bay.\r\n\r\nSee the island''s exotic marine life and colourful corals from the comfort of our semi-submersible coral viewer.\r\n\r\nTry snorkeling for a closer look or enjoy a host of other activities: unlimited banana boat rides, a cultural tour of the island or our exciting 35 metre waterslide. And when you''ve worked up an appetite, feast on a delicious buffet served in air-conditioned comfort.\r\n\r\nIncludes:\r\n\r\n<ul><li>Air-conditioned hotel transfers</li><li>Return transfers to Lembongan Island aboard the luxurious catamaran Bali Hai II</li><li>Morning/afternoon tea and snacks</li><li>International Buffet Lunch</li><li>Semi Submersible Coral Viewer</li><li>Village excursion</li><li>Unlimited banana boat rides</li><li>Snorkeling equipment and instruction</li><li>35m Water Slide</li><li>Diving Board</li><li>Locker</li></ul>\r\n'),
(28, 'Day Cruises - Bounty Cruise', 'Join our cruise for a full day of water activities - above and below the sea - on our 48 meter pontoon located in the beautiful, crystal clear waters of Shanghiang Bay on Nusa Lembongan Island. The most fun you can have in one day.\r\n\r\nCruise Includes:\r\n\r\n<ul><li>Return transfer hotel - harbour - hotel(Nusa Dua, Kuta, Sanur areas only)</li><li>Morning and Afternoon Tea with snacks </li><li>International buffet lunch </li><li>Video entertainment aboard boat</li><li>Live entertainment by Trio Batakos Singers</li><li>A Semi Submersible Submarine</li><li>Under water viewing chamber</li><li>44 meter water slide</li><li>Unlimited banana boat rides</li><li>Snorkeling equipment</li><li>Glass bottom boat rides </li><li>Canoeing </li><li>Village tour or access to Day Center at Nusa Lembongan</li></ul>\r\n'),
(29, 'Day Cruises - Bali Fun Ship Cruise', '"Bali Fun Ship" is a 26m fast catamaran with a capacity of 150 passengers. The only boat with a "jacuzzi" and a water slide from the top deck straight into the water.\r\n\r\nDeparting from Benoa Harbour, the crossing time only 40 minutes to Lembongan Island.\r\n\r\nBe adventurous on a truly FUN SHIP. Enjoy your morning tea and coffee with some refreshments (beers and wines at reasonable prices).\r\nThe fun continues as you arrive on Lembongan Island where you have a great BBQ buffet lunch onboard with crisp salads, and join all water activities.\r\n\r\nIncluding: \r\n\r\n<ul><li>Airconditioned hotel transfers </li><li>BBQ buffet lunch all you can eat with crisp salads</li><li>Jacuzzi and Water Slide </li><li>Snorkeling </li><li>Sea Kayaking </li><li>Banana boat riding</li><li>Glass bottom boat </li><li>Seaweed Village Tour</li><li>Pool use at the Coconuts Beach Resort </li><li>Morning tea, fresh fruits, etc.</li></ul>\r\n'),
(30, 'Scuba Diving - Nusa Dua', 'This sites are good for divers who want to dive without travelling far. It''s suitable for people who want quick, easy dive or refresh dive skills before exploring another famous dive sites in Bali. A lot of fishes, corals grow from 3 meters slope down to max depth 18 meters.'),
(31, 'Scuba Diving - Tulamben (Wreck Dive)', '2 hours  45 minutes drive by car from Nusa Dua to Tulamben. And you will do beach entry dive because the ship is about 40 meters from the beach. this is American Cargo Ship built in 1942 and terpedoed by Japanese submarine on January 11, 1942. It sank on sand floor at depth of 35 meters. Interesting corals and variety of fishes, you can see in this area. Night diving on the shipwreck is very populer.'),
(32, 'Scuba Diving - Amed', '2 hours 45 minutes drive by car from Nusa Dua to the east of Bali then 5 minutes by boat to the dive sites, coral grow from 2 meters slope down to 30 meters, some grow on wall down to 50 meters. Napoleon wrasses, Reef Sharks often seen here.'),
(33, 'Scuba Diving - Padang Bay (Blue Lagoon)', '1 hours 15 minutes by car from Nusa Dua to the east of Bali then 5-10 minutes by boat to dive location. Shark and turtle often seen here. Coral and other fishes also very interesting. Water visibility about 15-25 meters, coral grow from 3 meters slope down to 30 meters.'),
(34, 'Scuba Diving - Gili Tepekong (Shark Point)', '1 hour 15 minutes by car from Nusa Dua to the east of Bali then 20 minutes by boat to small island called Gili Tepekong. It''s only in this point most chance to see Sharks in Bali. Coral and other fishes also very interesting. Variety and colorful of them. Turtle and Mola mola can be seen here sometimes. Water visibility about 15 - 25 meters, coral grow from 3 meters slop down to 30 meters. Some corals grow on wall down to 50 meters.'),
(35, 'Scuba Diving - Menjangan (Wall Dive)', 'Rich of corals and fishes. Its interesting for snorkeling too. They are many different dive point around Menjangan island, so you can spend 2 or more days to explore more of the dive sites.'),
(36, 'Scuba Diving - Nusa Penida (Drift Dive)', '10 minutes by car from Nusa Dua area to Tanjung Benoa then 1 hour by boat to Nusa Penida Island. Corals grow from 2 meters slope down to max depth of 50 meters. Besides variety of small fishes and corals, Big fishes like Mola mola, Manta, Sharks often seen here. The currents generally strong, sometimes current present the dive to do by follow / drift the current and the boat will pick you up at the end of the dive.'),
(37, 'Scuba Diving - Manta Point', '10 minutes by car from Nusa Dua area to Tanjung Benoa and 1 hour 20 minutes by boat to Manta point. We don''t promise to guarantee you to see Mantas but according to our experience your chance to see Mantas almost 100%.'),
(38, 'Padi Dive Course - Scuba Diver Course', 'For people who interest to have diving certificate, learn how to dive safely, enjoyable, but has limited time, we offer this option.\r\n\r\nIncludes :\r\n\r\n<ul><li>Diving Theory</li><li>Confined Water Training</li><li>2 Open Water Training Dives</li><li>Certificate that allow you to dive anywhere in the world</li><li>Log Book</li></ul>\r\n'),
(39, 'Padi Dive Course - Open Water Diver Course', 'This course will provide you the basic knowledge and skills you''ll need to safely visit the underwater world.\r\n\r\nIncludes :\r\n\r\n<ul><li>Diving Theory</li><li>Confined Water Training</li><li>4 Open Water Training Dives</li><li>Certificate that allow you to dive anywhere in the world</li><li>Log book</li></ul>\r\n'),
(40, 'Padi Dive Course - Referral Course', 'This option is a course to continue/complete some session of training you don''t finished with previous Instructor to become a PADI certified diver.'),
(41, 'Padi Dive Course - Advanced Diver Course', 'An exciting course designed to develop diving skills that make all your diving safer and more enjoyable.\r\n\r\nIncludes :\r\n\r\n<ul><li>Navigation Dive</li><li>Deep Dive</li><li>Plus any three of the following elective dives:\r\nNight Dive, Boat Dive, Drift Dive, Multilevel Dive, Underwater Naturalist, Wreck Dive, Peak Performance buoyancy, search and recovery.</li></ul>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `oauth_provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `picture_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id_awards`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`increment`);

--
-- Indexes for table `employment`
--
ALTER TABLE `employment`
  ADD PRIMARY KEY (`id_employment`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id_languages`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`increment`);

--
-- Indexes for table `references_cust`
--
ALTER TABLE `references_cust`
  ADD PRIMARY KEY (`id_references`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id_skills`);

--
-- Indexes for table `tbl_content`
--
ALTER TABLE `tbl_content`
  ADD PRIMARY KEY (`id_content`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id_awards` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `increment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `employment`
--
ALTER TABLE `employment`
  MODIFY `id_employment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id_languages` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `increment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `references_cust`
--
ALTER TABLE `references_cust`
  MODIFY `id_references` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id_skills` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_content`
--
ALTER TABLE `tbl_content`
  MODIFY `id_content` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
