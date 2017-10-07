-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2017 at 07:16 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eprofileinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id_awards` int(11) NOT NULL,
  `id_member` int(20) NOT NULL,
  `award_name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `year` year(4) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `increment` int(11) NOT NULL,
  `id_member` int(20) NOT NULL,
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

INSERT INTO `education` (`increment`, `id_member`, `tingkat_pendidikan`, `nama_pendidikan`, `status_pendidikan`, `completion_date`, `location`, `description`, `status`) VALUES
(1, 1, 'Sa', 'As', 'graduated', '0000-00-00', 'Asa', 'Asas', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `employment`
--

CREATE TABLE `employment` (
  `id_employment` int(11) NOT NULL,
  `id_member` int(20) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id_languages` int(11) NOT NULL,
  `id_member` int(20) NOT NULL,
  `language_name` varchar(200) NOT NULL,
  `level` enum('beginner','conversational','fluent','native') NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `increment` int(11) NOT NULL,
  `id_member` int(20) NOT NULL,
  `activity` varchar(20) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `where` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`increment`, `id_member`, `activity`, `datetime`, `where`) VALUES
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
(55, 35, 'login', '2017-08-21 02:53:32', '::1'),
(56, 35, 'login', '2017-08-26 12:20:31', '::1'),
(57, 35, 'login', '2017-08-27 11:20:44', '::1'),
(58, 35, 'login', '2017-08-28 08:39:41', '::1'),
(59, 35, 'login', '2017-09-09 13:13:31', '::1'),
(60, 35, 'login', '2017-09-15 09:49:37', '::1'),
(61, 35, 'login', '2017-09-19 00:58:42', '::1'),
(62, 35, 'login', '2017-09-19 05:42:55', '::1'),
(63, 35, 'login', '2017-09-19 10:36:05', '::1'),
(64, 35, 'login', '2017-09-19 11:29:38', '::1'),
(65, 41, 'register', '2017-09-20 00:57:34', '::1'),
(66, 41, 'login', '2017-09-20 00:58:00', '::1'),
(67, 35, 'login', '2017-09-20 00:58:48', '::1'),
(68, 35, 'login', '2017-09-21 08:11:30', '::1'),
(69, 35, 'login', '2017-09-25 15:05:07', '::1'),
(70, 41, 'login', '2017-09-27 02:16:57', '::1'),
(71, 41, 'login', '2017-09-27 02:22:19', '::1'),
(72, 42, 'register', '2017-09-27 02:22:46', '::1'),
(73, 50, 'login', '2017-09-29 21:28:18', '::1'),
(74, 50, 'login', '2017-09-29 21:32:53', '::1'),
(75, 50, 'login', '2017-09-29 21:33:03', '::1'),
(76, 50, 'login', '2017-09-29 21:34:18', '::1'),
(77, 51, 'register', '2017-09-29 21:34:53', '::1'),
(78, 51, 'login', '2017-09-29 21:39:45', '::1'),
(79, 52, 'register', '2017-09-29 21:46:00', '::1'),
(80, 52, 'login', '2017-09-29 21:46:05', '::1'),
(81, 52, 'login', '2017-09-29 21:46:17', '::1'),
(82, 52, 'login', '2017-09-29 21:46:25', '::1'),
(83, 52, 'login', '2017-09-29 21:46:44', '::1'),
(84, 52, 'login', '2017-09-29 21:46:52', '::1'),
(85, 52, 'login', '2017-09-29 21:47:29', '::1'),
(86, 53, 'register', '2017-09-29 21:48:23', '::1'),
(87, 53, 'login', '2017-09-29 21:50:31', '::1'),
(88, 53, 'login', '2017-09-29 21:51:51', '::1'),
(89, 53, 'login', '2017-09-29 21:52:16', '::1'),
(90, 53, 'login', '2017-09-29 21:52:42', '::1'),
(91, 53, 'login', '2017-09-29 21:57:28', '::1'),
(92, 54, 'register', '2017-09-29 21:57:30', '::1'),
(93, 55, 'register', '2017-09-29 21:59:00', '::1'),
(94, 53, 'login', '2017-09-29 21:59:01', '::1'),
(95, 55, 'login', '2017-09-29 21:59:21', '::1'),
(96, 55, 'login', '2017-09-29 22:00:20', '::1'),
(97, 55, 'login', '2017-09-29 22:00:38', '::1'),
(98, 56, 'register', '2017-09-29 22:02:30', '::1'),
(99, 55, 'login', '2017-09-29 22:02:32', '::1'),
(100, 53, 'login', '2017-09-29 22:03:58', '::1'),
(101, 55, 'login', '2017-09-29 22:04:22', '::1'),
(102, 53, 'login', '2017-09-29 22:04:29', '::1'),
(103, 53, 'login', '2017-09-29 22:04:34', '::1'),
(104, 55, 'login', '2017-09-29 22:05:35', '::1'),
(105, 55, 'login', '2017-09-29 22:06:10', '::1'),
(106, 53, 'login', '2017-09-29 22:06:45', '::1'),
(107, 55, 'login', '2017-09-29 22:06:47', '::1'),
(108, 57, 'register', '2017-09-29 22:07:45', '::1'),
(109, 53, 'login', '2017-09-29 22:07:46', '::1'),
(110, 53, 'login', '2017-09-29 22:08:49', '::1'),
(111, 57, 'login', '2017-09-29 22:11:02', '::1'),
(112, 53, 'login', '2017-09-29 22:11:08', '::1'),
(113, 58, 'register', '2017-09-29 22:17:52', '::1'),
(114, 59, 'register', '2017-09-29 22:19:13', '::1'),
(115, 58, 'login', '2017-09-29 22:20:18', '::1'),
(116, 58, 'login', '2017-10-01 05:21:12', '::1'),
(117, 59, 'login', '2017-10-01 05:21:35', '::1'),
(118, 59, 'login', '2017-10-01 05:21:50', '::1'),
(119, 58, 'login', '2017-10-01 05:22:19', '::1'),
(120, 59, 'login', '2017-10-01 05:22:26', '::1'),
(121, 57, 'login', '2017-10-02 04:31:42', '127.0.0.1'),
(122, 52, 'login', '2017-10-02 04:31:49', '127.0.0.1'),
(123, 57, 'login', '2017-10-02 04:34:14', '::1'),
(124, 52, 'login', '2017-10-02 04:34:22', '::1'),
(125, 57, 'login', '2017-10-02 04:34:53', '::1'),
(126, 52, 'login', '2017-10-02 04:34:55', '::1'),
(127, 52, 'login', '2017-10-02 04:36:26', '::1'),
(128, 57, 'login', '2017-10-02 04:36:26', '::1'),
(129, 57, 'login', '2017-10-03 02:06:55', '::1'),
(130, 57, 'login', '2017-10-03 02:08:48', '::1'),
(131, 57, 'login', '2017-10-03 02:09:13', '::1'),
(132, 57, 'login', '2017-10-03 02:09:45', '::1'),
(133, 57, 'login', '2017-10-03 02:10:12', '::1'),
(134, 57, 'login', '2017-10-03 02:10:33', '::1'),
(135, 57, 'login', '2017-10-03 02:11:16', '::1'),
(136, 57, 'login', '2017-10-03 02:11:56', '::1'),
(137, 57, 'login', '2017-10-03 02:12:38', '::1'),
(138, 57, 'login', '2017-10-03 02:12:44', '::1'),
(139, 57, 'login', '2017-10-03 02:12:50', '::1'),
(140, 57, 'change biodata', '2017-10-03 02:17:02', '::1'),
(141, 57, 'login', '2017-10-03 03:37:24', '::1'),
(142, 57, 'login', '2017-10-03 03:49:49', '::1'),
(143, 57, 'login', '2017-10-03 04:24:48', '::1'),
(144, 57, 'change education', '2017-10-03 04:46:23', '::1'),
(145, 57, 'change education', '2017-10-03 04:47:11', '::1'),
(146, 57, 'change education', '2017-10-03 04:47:38', '::1'),
(147, 57, 'change education', '2017-10-03 04:48:18', '::1'),
(148, 57, 'change education', '2017-10-03 04:49:15', '::1'),
(149, 57, 'change education', '2017-10-03 04:52:04', '::1'),
(150, 57, 'login', '2017-10-03 07:11:19', '::1'),
(151, 57, 'login', '2017-10-03 09:19:02', '::1'),
(152, 57, 'change education', '2017-10-03 09:27:45', '::1'),
(153, 57, 'change education', '2017-10-03 09:28:02', '::1'),
(154, 57, 'change education', '2017-10-03 09:28:37', '::1'),
(155, 57, 'change education', '2017-10-03 09:32:57', '::1'),
(156, 57, 'change education', '2017-10-03 09:35:11', '::1'),
(157, 57, 'change education', '2017-10-03 09:35:16', '::1'),
(158, 57, 'change education', '2017-10-03 09:35:32', '::1'),
(159, 57, 'change education', '2017-10-03 09:35:44', '::1'),
(160, 57, 'change education', '2017-10-03 09:36:41', '::1'),
(161, 57, 'change education', '2017-10-03 09:39:56', '::1'),
(162, 58, 'login', '2017-10-03 09:42:39', '::1'),
(163, 57, 'change education', '2017-10-03 10:01:48', '::1'),
(164, 57, 'change education', '2017-10-03 10:03:40', '::1'),
(165, 57, 'change education', '2017-10-03 10:04:29', '::1'),
(166, 57, 'change education', '2017-10-03 10:05:56', '::1'),
(167, 57, 'change education', '2017-10-03 10:08:04', '::1'),
(168, 57, 'change biodata', '2017-10-03 10:09:29', '::1'),
(169, 57, 'change education', '2017-10-03 10:10:49', '::1'),
(170, 57, 'change education', '2017-10-03 10:12:45', '::1'),
(171, 57, 'change education', '2017-10-03 10:12:57', '::1'),
(172, 57, 'change education', '2017-10-03 10:13:11', '::1'),
(173, 57, 'change education', '2017-10-03 10:14:42', '::1'),
(174, 57, 'change education', '2017-10-03 10:15:14', '::1'),
(175, 57, 'change education', '2017-10-03 10:17:51', '::1'),
(176, 57, 'change education', '2017-10-03 10:18:23', '::1'),
(177, 57, 'change education', '2017-10-03 10:22:51', '::1'),
(178, 57, 'change education', '2017-10-03 10:37:39', '::1'),
(179, 57, 'change education', '2017-10-03 10:39:12', '::1'),
(180, 57, 'change education', '2017-10-03 10:49:46', '::1'),
(181, 57, 'change education', '2017-10-03 11:02:06', '::1'),
(182, 57, 'change education', '2017-10-03 11:02:19', '::1'),
(183, 57, 'change education', '2017-10-03 11:03:15', '::1'),
(184, 57, 'login', '2017-10-03 11:03:18', '::1'),
(185, 57, 'login', '2017-10-03 11:09:10', '::1'),
(186, 57, 'change education', '2017-10-03 11:09:22', '::1'),
(187, 57, 'change education', '2017-10-03 11:10:02', '::1'),
(188, 57, 'change education', '2017-10-03 11:11:05', '::1'),
(189, 57, 'change education', '2017-10-03 11:11:53', '::1'),
(190, 57, 'change education', '2017-10-03 11:12:08', '::1'),
(191, 57, 'change education', '2017-10-03 11:12:21', '::1'),
(192, 57, 'change education', '2017-10-03 11:13:00', '::1'),
(193, 57, 'change employment', '2017-10-03 11:53:47', '::1'),
(194, 57, 'change skill', '2017-10-03 14:16:56', '::1'),
(195, 57, 'change skill', '2017-10-03 14:18:29', '::1'),
(196, 57, 'change language', '2017-10-03 14:33:10', '::1'),
(197, 57, 'change language', '2017-10-03 14:36:41', '::1'),
(198, 57, 'login', '2017-10-03 23:57:03', '::1'),
(199, 57, 'change employment', '2017-10-03 23:57:36', '::1'),
(200, 57, 'change employment', '2017-10-04 00:00:27', '::1'),
(201, 57, 'change employment', '2017-10-04 00:01:04', '::1'),
(202, 57, 'new award', '2017-10-04 00:37:31', '::1'),
(203, 57, 'new reference', '2017-10-04 01:57:01', '::1'),
(204, 57, 'change reference', '2017-10-04 01:58:58', '::1'),
(205, 57, 'change reference', '2017-10-04 02:00:14', '::1'),
(206, 57, 'change reference', '2017-10-04 02:00:33', '::1'),
(207, 57, 'change reference', '2017-10-04 02:01:13', '::1'),
(208, 57, 'change reference', '2017-10-04 02:02:45', '::1'),
(209, 57, 'change reference', '2017-10-04 02:02:53', '::1'),
(210, 57, 'change reference', '2017-10-04 02:03:02', '::1'),
(211, 57, 'login', '2017-10-04 02:12:47', '::1'),
(212, 57, 'change biodata', '2017-10-04 03:16:48', '::1'),
(213, 57, 'login', '2017-10-04 03:29:09', '::1'),
(214, 57, 'login', '2017-10-04 11:06:55', '127.0.0.1'),
(215, 57, 'login', '2017-10-04 11:06:58', '127.0.0.1'),
(216, 57, 'login', '2017-10-04 11:06:59', '127.0.0.1'),
(217, 57, 'login', '2017-10-04 19:52:51', '127.0.0.1'),
(218, 57, 'login', '2017-10-04 19:52:51', '127.0.0.1'),
(219, 57, 'login', '2017-10-04 19:52:51', '127.0.0.1'),
(220, 57, 'login', '2017-10-04 20:27:24', '127.0.0.1'),
(221, 57, 'login', '2017-10-04 20:28:47', '127.0.0.1'),
(222, 57, 'login', '2017-10-04 20:35:03', '127.0.0.1'),
(223, 58, 'login', '2017-10-04 20:49:59', '127.0.0.1'),
(224, 58, 'login', '2017-10-04 20:50:08', '127.0.0.1'),
(225, 57, 'login', '2017-10-04 20:58:28', '127.0.0.1'),
(226, 60, 'register', '2017-10-04 20:58:51', '127.0.0.1'),
(227, 57, 'login', '2017-10-04 21:03:40', '127.0.0.1'),
(228, 57, 'login', '2017-10-04 23:41:00', '127.0.0.1'),
(229, 57, 'login', '2017-10-05 03:11:16', '127.0.0.1'),
(230, 57, 'login', '2017-10-06 09:34:43', '::1'),
(231, 57, 'login', '2017-10-06 12:06:16', '::1'),
(232, 1, 'login', '2017-10-06 17:21:19', '::1'),
(233, 1, 'new education', '2017-10-06 17:22:17', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `identifier` longtext NOT NULL,
  `photo_url` varchar(25) NOT NULL,
  `nama_depan` varchar(100) NOT NULL,
  `nama_belakang` varchar(200) DEFAULT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat_jalan` text NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `telepon` varchar(30) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `jenis_kelamin` enum('male','female') NOT NULL,
  `status_pernikahan` enum('Single','Married','Divorced') NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `hobbies_interest` text NOT NULL,
  `no_template` int(1) NOT NULL,
  `language_setting` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `username`, `identifier`, `photo_url`, `nama_depan`, `nama_belakang`, `tanggal_lahir`, `alamat_jalan`, `kode_pos`, `telepon`, `email`, `jenis_kelamin`, `status_pernikahan`, `nationality`, `hobbies_interest`, `no_template`, `language_setting`) VALUES
(1, '', 'facebookkuntinisa250896@gmail.com', '', '', NULL, '0000-00-00', '', '', '', 'kuntinisa250896@gmail.com', 'male', 'Single', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `references`
--

CREATE TABLE `references` (
  `id_references` int(11) NOT NULL,
  `id_member` int(20) NOT NULL,
  `reference_name` varchar(200) NOT NULL,
  `company` varchar(200) NOT NULL,
  `phone` int(20) NOT NULL,
  `address` varchar(300) NOT NULL,
  `relationship` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id_skills` int(11) NOT NULL,
  `id_member` int(20) NOT NULL,
  `skill_name` varchar(200) NOT NULL,
  `level` enum('beginner','intermediate','advanced','expert') NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id_awards`);

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
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `references`
--
ALTER TABLE `references`
  ADD PRIMARY KEY (`id_references`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id_skills`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id_awards` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `increment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `employment`
--
ALTER TABLE `employment`
  MODIFY `id_employment` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id_languages` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `increment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `references`
--
ALTER TABLE `references`
  MODIFY `id_references` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id_skills` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
