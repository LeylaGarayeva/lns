-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2017 at 06:50 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lns`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `con` int(4) NOT NULL,
  `ist_adi` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `l_adi` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `ppp` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(2) NOT NULL,
  `grade` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`con`, `ist_adi`, `l_adi`, `ppp`, `ip`, `status`, `grade`) VALUES
(5, 'orxan', 'orxan', 'd5aadfe00df53c7149cfabac3f2df21311215!@#$%7865****!@!%$$###', '', 0, 0),
(3, 'admin', 'admin', '394339000f69555ba73d4225451aa42511215!@#$%7865****!@!%$$###', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_menu`
--

CREATE TABLE `admin_menu` (
  `id` int(5) NOT NULL,
  `m_id` int(2) NOT NULL,
  `a_id` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_menu`
--

INSERT INTO `admin_menu` (`id`, `m_id`, `a_id`) VALUES
(87, 19, 3),
(86, 18, 4),
(85, 17, 3),
(84, 5, 3),
(83, 3, 3),
(88, 20, 4),
(89, 21, 4),
(90, 22, 3),
(91, 23, 3),
(92, 24, 3),
(93, 25, 3);

-- --------------------------------------------------------

--
-- Table structure for table `a_menu`
--

CREATE TABLE `a_menu` (
  `id` int(5) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `url_tag` varchar(30) CHARACTER SET utf8 NOT NULL,
  `link` varchar(40) CHARACTER SET utf8 NOT NULL,
  `sub_id` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a_menu`
--

INSERT INTO `a_menu` (`id`, `name`, `url_tag`, `link`, `sub_id`) VALUES
(3, 'Adminlər', 'admin', '?menu=admin', 0),
(5, 'Səhifələr', 'pages', '?menu=pages&tip=1', 0),
(17, 'Yuxarı slider', 'topslider', '?menu=topslider&tip=1&pos=1&p_id=1', 0),
(18, 'Aşağı slider', 'jurnal', '?menu=jurnal', 0),
(19, 'Xəbərlər', 'xeberler', '?menu=xeberler', 0),
(20, 'Kurslar', 'kurs', '?menu=kurs', 0),
(21, 'Kursların tarixi', 'kurs_date', '?menu=kurs_date', 0),
(22, 'Kateqoriyalar', 'kateqoriyalar', '?menu=kateqoriyalar', 0),
(23, 'Məhsullar', 'elanlar', '?menu=elanlar', 0),
(24, 'Ölkələr', 'olkeler', '?menu=olkeler', 0),
(25, 'Valyutalar', 'valyuta', '?menu=valyuta', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact_mails`
--

CREATE TABLE `contact_mails` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `elanlar`
--

CREATE TABLE `elanlar` (
  `id` int(11) NOT NULL,
  `home` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `kat_id` int(11) NOT NULL,
  `l_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `elan_id` int(11) NOT NULL,
  `ordering` int(11) NOT NULL,
  `tip` int(11) NOT NULL,
  `price1` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price2` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price3` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `all_country` tinyint(1) DEFAULT '0',
  `different_price_country` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `valyuta_id` int(11) NOT NULL DEFAULT '1',
  `url_tag` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `elanlar`
--

INSERT INTO `elanlar` (`id`, `home`, `name`, `image_url`, `description`, `kat_id`, `l_id`, `s_id`, `elan_id`, `ordering`, `tip`, `price1`, `price2`, `price3`, `all_country`, `different_price_country`, `valyuta_id`, `url_tag`, `add_date`, `status`) VALUES
(1, 0, 'butun olkeler', 'good_1.png', '', 2, 1, 0, 1, 1, 2, '1', '1', '1', 1, '', 1, '', '2017-11-01 05:31:25', 0),
(2, 0, '', 'good_1.png', '', 2, 2, 0, 1, 1, 2, '1', '1', '1', 1, '', 1, '', '2017-11-01 05:31:25', 0),
(3, 0, '', 'good_1.png', '', 2, 3, 0, 1, 1, 2, '1', '1', '1', 1, '', 1, '', '2017-11-01 05:31:25', 0),
(4, 0, 'ferqli olke', 'good_1.png', '', 3, 1, 0, 2, 2, 2, '', '', '', 0, '1,2', 1, '', '2017-11-01 05:33:05', 0),
(5, 0, '', 'good_1.png', '', 3, 2, 0, 2, 2, 2, '', '', '', 0, '1,2', 1, '', '2017-11-01 05:33:05', 0),
(6, 0, '', 'good_1.png', '', 3, 3, 0, 2, 2, 2, '', '', '', 0, '1,2', 1, '', '2017-11-01 05:33:05', 0),
(7, 0, 'eyni ve az ferqli', 'good_1.png', '', 1, 1, 0, 3, 3, 2, '4', '4', '4', 1, '1', 1, '', '2017-11-01 05:34:24', 0),
(8, 0, '', 'good_1.png', '', 1, 2, 0, 3, 3, 2, '4', '4', '4', 1, '1', 1, '', '2017-11-01 05:34:24', 0),
(9, 0, '', 'good_1.png', '', 1, 3, 0, 3, 3, 2, '4', '4', '4', 1, '1', 1, '', '2017-11-01 05:34:24', 0),
(10, 0, 'Turkiye', '', '', 1, 1, 0, 4, 4, 2, '', '', '', 0, '3', 1, '', '2017-11-01 06:03:08', 0),
(11, 0, '', '', '', 1, 2, 0, 4, 4, 2, '', '', '', 0, '3', 1, '', '2017-11-01 06:03:08', 0),
(12, 0, '', '', '', 1, 3, 0, 4, 4, 2, '', '', '', 0, '3', 1, '', '2017-11-01 06:03:09', 0),
(13, 0, 'ttttt', '', '', 2, 1, 0, 5, 5, 2, '333', '333', '333', 1, '', 1, '', '2017-11-02 08:31:40', 0),
(14, 0, '', '', '', 2, 2, 0, 5, 5, 2, '333', '333', '333', 1, '', 1, '', '2017-11-02 08:31:41', 0),
(15, 0, '', '', '', 2, 3, 0, 5, 5, 2, '333', '333', '333', 1, '', 1, '', '2017-11-02 08:31:41', 0),
(16, 0, 'yyyyyyyy', '', '', 1, 1, 0, 6, 6, 2, '', '', '', 0, '1,3', 1, '', '2017-11-02 08:38:11', 0),
(17, 0, '', '', '', 1, 2, 0, 6, 6, 2, '', '', '', 0, '1,3', 1, '', '2017-11-02 08:38:11', 0),
(18, 0, '', '', '', 1, 3, 0, 6, 6, 2, '', '', '', 0, '1,3', 1, '', '2017-11-02 08:38:11', 0),
(19, 0, 'allllllll', '', '', 1, 1, 0, 7, 7, 2, '99999', '999999', '99999999', 1, '2', 1, '', '2017-11-02 08:39:29', 0),
(20, 0, '', '', '', 1, 2, 0, 7, 7, 2, '99999', '999999', '99999999', 1, '2', 1, '', '2017-11-02 08:39:29', 0),
(21, 0, '', '', '', 1, 3, 0, 7, 7, 2, '99999', '999999', '99999999', 1, '2', 1, '', '2017-11-02 08:39:29', 0),
(22, 0, 'Rzefdef', '', '', 1, 1, 0, 8, 8, 2, '123242', '123242', '123242', 1, '', 1, '', '2017-11-02 08:41:00', 0),
(23, 0, '', '', '', 1, 2, 0, 8, 8, 2, '123242', '123242', '123242', 1, '', 1, '', '2017-11-02 08:41:00', 0),
(24, 0, '', '', '', 1, 3, 0, 8, 8, 2, '123242', '123242', '123242', 1, '', 1, '', '2017-11-02 08:41:00', 0),
(25, 0, 'rt', '', '', 1, 1, 0, 9, 9, 2, '8888', '8888', '8888', 1, '', 1, '', '2017-11-02 08:43:20', 0),
(26, 0, '', '', '', 1, 2, 0, 9, 9, 2, '8888', '8888', '8888', 1, '', 1, '', '2017-11-02 08:43:20', 0),
(27, 0, '', '', '', 1, 3, 0, 9, 9, 2, '8888', '8888', '8888', 1, '', 1, '', '2017-11-02 08:43:20', 0),
(28, 0, 'dsssdf', '', '', 1, 1, 0, 10, 10, 2, '3333', '333333', '33333333', 1, '', 1, '', '2017-11-02 09:04:30', 0),
(29, 0, '', '', '', 1, 2, 0, 10, 10, 2, '3333', '333333', '33333333', 1, '', 1, '', '2017-11-02 09:04:30', 0),
(30, 0, '', '', '', 1, 3, 0, 10, 10, 2, '3333', '333333', '33333333', 1, '', 1, '', '2017-11-02 09:04:30', 0),
(31, 0, 'testsss', '', '', 1, 1, 0, 11, 11, 2, '1', '1', '1', 1, '', 1, '', '2017-11-06 14:39:41', 0),
(32, 0, '', '', '', 1, 2, 0, 11, 11, 2, '1', '1', '1', 1, '', 1, '', '2017-11-06 14:39:41', 0),
(33, 0, '', '', '', 1, 3, 0, 11, 11, 2, '1', '1', '1', 1, '', 1, '', '2017-11-06 14:39:41', 0),
(34, 0, 'az', '82460images.jpg', '<p>sdff</p>', 2, 1, 0, 12, 12, 1, '34', '35', '36', 1, '', 1, '', '2017-11-06 14:42:47', 0),
(35, 0, 'sdfsdf', '82460images.jpg', '<p>sdfsdf</p>', 2, 2, 0, 12, 12, 1, '34', '35', '36', 1, '', 1, '', '2017-11-06 14:42:47', 0),
(36, 0, 'sdfsdf', '82460images.jpg', '<p>sdfsdf</p>', 2, 3, 0, 12, 12, 1, '34', '35', '36', 1, '', 1, '', '2017-11-06 14:42:47', 0),
(37, 0, 'test son', '41970slide-83.jpg', '<p>test son</p>', 2, 1, 0, 13, 13, 1, '33', '44', '55', 1, '', 1, '', '2017-11-06 15:04:26', 0),
(38, 0, 'test son', '41970slide-83.jpg', '<p>test son</p>', 2, 2, 0, 13, 13, 1, '33', '44', '55', 1, '', 1, '', '2017-11-06 15:04:26', 0),
(39, 0, 'test son', '41970slide-83.jpg', '<p>test son</p>', 2, 3, 0, 13, 13, 1, '33', '44', '55', 1, '', 1, '', '2017-11-06 15:04:26', 0),
(40, 0, 'ssss', '', '', 3, 1, 0, 14, 14, 2, '3', '3', '3', 1, '', 1, '', '2017-11-06 15:04:56', 0),
(41, 0, '', '', '', 3, 2, 0, 14, 14, 2, '3', '3', '3', 1, '', 1, '', '2017-11-06 15:04:56', 0),
(42, 0, '', '', '', 3, 3, 0, 14, 14, 2, '3', '3', '3', 1, '', 1, '', '2017-11-06 15:04:56', 0),
(43, 0, 'aa', '', '', 1, 1, 0, 15, 15, 2, '1111', '1111', '1111', 1, '', 1, '', '2017-11-06 19:09:22', 0),
(44, 0, 'aa', '', '', 1, 2, 0, 15, 15, 2, '1111', '1111', '1111', 1, '', 1, '', '2017-11-06 19:09:23', 0),
(45, 0, 'aa', '', '', 1, 3, 0, 15, 15, 2, '1111', '1111', '1111', 1, '', 1, '', '2017-11-06 19:09:23', 0),
(46, 0, 'aa', '', '', 1, 1, 0, 16, 16, 2, '1111', '1111', '1111', 1, '', 1, '', '2017-11-06 19:14:53', 0),
(47, 0, 'aa', '', '', 1, 2, 0, 16, 16, 2, '1111', '1111', '1111', 1, '', 1, '', '2017-11-06 19:14:54', 0),
(48, 0, 'aa', '', '', 1, 3, 0, 16, 16, 2, '1111', '1111', '1111', 1, '', 1, '', '2017-11-06 19:14:54', 0),
(49, 0, 'aa', '', '', 1, 1, 0, 17, 17, 2, '1111', '1111', '1111', 1, '', 1, '', '2017-11-06 19:16:26', 0),
(50, 0, 'aa', '', '', 1, 2, 0, 17, 17, 2, '1111', '1111', '1111', 1, '', 1, '', '2017-11-06 19:16:26', 0),
(51, 0, 'aa', '', '', 1, 3, 0, 17, 17, 2, '1111', '1111', '1111', 1, '', 1, '', '2017-11-06 19:16:26', 0),
(52, 0, 'aa', '', '', 1, 1, 0, 18, 18, 2, '1111', '1111', '1111', 1, '', 1, '', '2017-11-06 19:19:08', 0),
(53, 0, 'aa', '', '', 1, 2, 0, 18, 18, 2, '1111', '1111', '1111', 1, '', 1, '', '2017-11-06 19:19:08', 0),
(54, 0, 'aa', '', '', 1, 3, 0, 18, 18, 2, '1111', '1111', '1111', 1, '', 1, '', '2017-11-06 19:19:08', 0),
(55, 0, 'ty', '', '', 2, 1, 0, 19, 19, 2, '', '', '', 0, '3', 1, '', '2017-11-06 19:54:07', 0),
(56, 0, '', '', '', 2, 2, 0, 19, 19, 2, '', '', '', 0, '3', 1, '', '2017-11-06 19:54:07', 0),
(57, 0, '', '', '', 2, 3, 0, 19, 19, 2, '', '', '', 0, '3', 1, '', '2017-11-06 19:54:07', 0),
(58, 0, '', '', '', 3, 1, 0, 20, 20, 2, '', '', '', 0, '1', 1, '', '2017-11-06 19:55:49', 0),
(59, 0, '', '', '', 3, 2, 0, 20, 20, 2, '', '', '', 0, '1', 1, '', '2017-11-06 19:55:49', 0),
(60, 0, '', '', '', 3, 3, 0, 20, 20, 2, '', '', '', 0, '1', 1, '', '2017-11-06 19:55:49', 0),
(61, 0, 'test umumi', '', '', 2, 1, 0, 21, 21, 2, '5', '5', '5', 1, '', 1, '', '2017-11-08 06:48:39', 0),
(62, 0, '', '', '', 2, 2, 0, 21, 21, 2, '5', '5', '5', 1, '', 1, '', '2017-11-08 06:48:39', 0),
(63, 0, '', '', '', 2, 3, 0, 21, 21, 2, '5', '5', '5', 1, '', 1, '', '2017-11-08 06:48:39', 0),
(64, 0, 'ferqli ', '', '', 1, 1, 0, 22, 22, 2, '', '', '', 0, '1', 1, '', '2017-11-08 06:51:31', 0),
(65, 0, '', '', '', 1, 2, 0, 22, 22, 2, '', '', '', 0, '1', 1, '', '2017-11-08 06:51:31', 0),
(66, 0, '', '', '', 1, 3, 0, 22, 22, 2, '', '', '', 0, '1', 1, '', '2017-11-08 06:51:31', 0),
(67, 0, 'all and az ferqli', '', '', 3, 1, 0, 23, 23, 2, '7', '7', '7', 1, '1', 1, '', '2017-11-08 06:53:41', 0),
(68, 0, '', '', '', 3, 2, 0, 23, 23, 2, '7', '7', '7', 1, '1', 1, '', '2017-11-08 06:53:42', 0),
(69, 0, '', '', '', 3, 3, 0, 23, 23, 2, '7', '7', '7', 1, '1', 1, '', '2017-11-08 06:53:42', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ip_error`
--

CREATE TABLE `ip_error` (
  `ip` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `datime` datetime NOT NULL,
  `say` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kateqoriyalar`
--

CREATE TABLE `kateqoriyalar` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kat_id` int(11) NOT NULL,
  `url_tag` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tip` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `l_id` int(11) NOT NULL,
  `ordering` int(11) NOT NULL,
  `image_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_id` int(11) NOT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sub_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kateqoriyalar`
--

INSERT INTO `kateqoriyalar` (`id`, `name`, `kat_id`, `url_tag`, `tip`, `date`, `l_id`, `ordering`, `image_url`, `s_id`, `link`, `sub_id`, `status`) VALUES
(1, 'For women', 1, 'women', 0, '2017-10-18 05:04:56', 1, 1, '', 0, '', 0, 0),
(2, 'For women', 1, '', 0, '2017-10-18 05:04:56', 2, 1, '', 0, '', 0, 0),
(3, 'For women', 1, '', 0, '2017-10-18 05:04:56', 3, 1, '', 0, '', 0, 0),
(4, 'men', 2, '', 0, '2017-10-26 08:48:04', 1, 2, '', 0, '', 0, 0),
(5, 'men', 2, '', 0, '2017-10-26 08:48:04', 2, 2, '', 0, '', 0, 0),
(6, 'men', 2, '', 0, '2017-10-26 08:48:04', 3, 2, '', 0, '', 0, 0),
(7, 'kat3', 3, '', 0, '2017-10-31 06:59:17', 1, 3, '', 0, '', 0, 0),
(8, 'kat3', 3, '', 0, '2017-10-31 06:59:17', 2, 3, '', 0, '', 0, 0),
(9, 'kat3', 3, '', 0, '2017-10-31 06:59:17', 3, 3, '', 0, '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mehsul_olke`
--

CREATE TABLE `mehsul_olke` (
  `id` int(11) NOT NULL,
  `elan_id` int(11) NOT NULL DEFAULT '0',
  `olke_id` int(11) NOT NULL DEFAULT '0',
  `price1` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price2` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price3` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `valyuta_id` int(11) NOT NULL DEFAULT '0',
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mehsul_olke`
--

INSERT INTO `mehsul_olke` (`id`, `elan_id`, `olke_id`, `price1`, `price2`, `price3`, `valyuta_id`, `add_date`, `status`) VALUES
(1, 1, 1, '5', '3', '2', 1, '2017-10-24 07:17:43', 0),
(2, 2, 1, '24', '21', '20', 1, '2017-10-24 07:22:11', 0),
(3, 2, 2, '33', '30', '27', 1, '2017-10-24 07:22:11', 0),
(4, 3, 2, '44', '40', '35', 1, '2017-10-24 07:23:07', 0),
(5, 5, 1, '444', '444', '444', 1, '2017-10-30 06:31:21', 0),
(6, 5, 2, '555', '555', '555', 1, '2017-10-30 06:31:21', 0),
(7, 6, 1, '333', '333', '333', 1, '2017-10-30 06:38:06', 0),
(8, 2, 1, '2', '2', '2', 1, '2017-11-01 05:33:05', 0),
(9, 2, 2, '3', '3', '3', 1, '2017-11-01 05:33:05', 0),
(10, 3, 1, '5', '5', '5', 1, '2017-11-01 05:34:24', 0),
(11, 4, 3, '6', '6', '6', 1, '2017-11-01 06:03:09', 0),
(12, 6, 1, '77777', '77777', '777777', 1, '2017-11-02 08:38:11', 0),
(13, 6, 3, '111111', '11111', '1111', 1, '2017-11-02 08:38:11', 0),
(14, 7, 2, '2222', '22222', '222222', 1, '2017-11-02 08:39:29', 0),
(15, 19, 3, '33', '33', '33', 1, '2017-11-06 19:54:07', 0),
(16, 20, 1, '555', '555', '555', 1, '2017-11-06 19:55:49', 0),
(17, 22, 1, '4', '4', '4', 1, '2017-11-08 06:51:31', 0),
(18, 23, 1, '6', '6', '6', 1, '2017-11-08 06:53:42', 0);

-- --------------------------------------------------------

--
-- Table structure for table `olkeler`
--

CREATE TABLE `olkeler` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kat_id` int(11) NOT NULL,
  `url_tag` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tip` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `l_id` int(11) NOT NULL,
  `ordering` int(11) NOT NULL,
  `image_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_id` int(11) NOT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sub_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `olkeler`
--

INSERT INTO `olkeler` (`id`, `name`, `kat_id`, `url_tag`, `tip`, `date`, `l_id`, `ordering`, `image_url`, `s_id`, `link`, `sub_id`) VALUES
(1, 'Azərbaycan', 1, 'azerbaijan', 0, '2017-10-12 06:57:23', 1, 1, 'Azerbaijan-icon.png', 0, '', 0),
(2, 'Azərbaycan', 1, 'azerbaijan', 0, '2017-10-12 06:57:23', 2, 1, 'Azerbaijan-icon.png', 0, '', 0),
(3, 'Azərbaycan', 1, 'azerbaijan', 0, '2017-10-12 06:57:23', 3, 1, 'Azerbaijan-icon.png', 0, '', 0),
(4, 'Rusiya', 2, 'rusiya', 0, '2017-10-18 07:07:28', 1, 2, 'Azerbaijan-icon.png', 0, '', 0),
(5, 'Rusiya', 2, 'rusiya', 0, '2017-10-18 07:07:28', 2, 2, 'Azerbaijan-icon.png', 0, '', 0),
(6, 'Rusiya', 2, 'rusiya', 0, '2017-10-18 07:07:28', 3, 2, 'Azerbaijan-icon.png', 0, '', 0),
(7, 'Turkiye', 3, 'turkiye', 0, '2017-11-01 05:37:58', 1, 3, 'Azerbaijan-icon.png', 0, '', 0),
(8, 'Turkiye', 3, 'turkiye', 0, '2017-11-01 05:37:58', 2, 3, 'Azerbaijan-icon.png', 0, '', 0),
(9, 'Turkiye', 3, 'turkiye', 0, '2017-11-01 05:37:58', 3, 3, 'Azerbaijan-icon.png', 0, '', 0),
(10, 'baki', 4, '', 0, '2017-11-08 07:39:50', 1, 4, '', 0, '', 1),
(11, 'baki', 4, '', 0, '2017-11-08 07:39:50', 2, 4, '', 0, '', 1),
(12, 'baki', 4, '', 0, '2017-11-08 07:39:50', 3, 4, '', 0, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `olke_kateqoriya`
--

CREATE TABLE `olke_kateqoriya` (
  `id` int(11) NOT NULL,
  `olke_id` int(11) NOT NULL,
  `kat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `olke_kateqoriya`
--

INSERT INTO `olke_kateqoriya` (`id`, `olke_id`, `kat_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 3, 2),
(5, 1, 3),
(6, 1, 2),
(7, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_cat`
--

CREATE TABLE `product_cat` (
  `id` int(11) NOT NULL,
  `sub_id` int(4) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `l_id` tinyint(2) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `tip` tinyint(2) NOT NULL,
  `ordering` int(11) NOT NULL,
  `date` date NOT NULL,
  `u_id` int(11) NOT NULL,
  `view_home` int(11) NOT NULL,
  `foto` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_cat`
--

INSERT INTO `product_cat` (`id`, `sub_id`, `name`, `text`, `l_id`, `status`, `tip`, `ordering`, `date`, `u_id`, `view_home`, `foto`) VALUES
(18, 0, 'Digital Cameras', '', 3, 1, 0, 62, '2014-07-20', 2, 0, 'prod_5.svg'),
(17, 0, 'Digital Cameras', '', 2, 1, 0, 62, '2014-07-20', 2, 0, 'prod_5.svg'),
(16, 0, 'Digital Cameras', '', 1, 1, 0, 62, '2014-07-20', 2, 0, 'prod_5.svg'),
(22, 0, 'Watches', '', 1, 0, 0, 20, '2014-07-20', 4, 0, 'prod_5.svg'),
(23, 0, 'Watches', '', 2, 0, 0, 20, '2014-07-20', 4, 0, 'prod_5.svg'),
(24, 0, 'Watches', '', 3, 0, 0, 20, '2014-07-20', 4, 0, 'prod_5.svg'),
(25, 0, 'Watch Straps', '', 1, 0, 0, 30, '2014-07-24', 5, 0, 'prod_5.svg'),
(26, 0, 'Watch Straps', '', 2, 0, 0, 30, '2014-07-24', 5, 0, 'prod_5.svg'),
(27, 0, 'Watch Straps', '', 3, 0, 0, 30, '2014-07-24', 5, 0, 'prod_5.svg'),
(36, 0, 'Life Travel', '', 3, 1, 0, 40, '2014-10-18', 6, 0, 'prod_5.svg'),
(35, 0, 'Life Travel', '', 2, 1, 0, 40, '2014-10-18', 6, 0, 'prod_5.svg'),
(34, 0, 'Life Travel', '', 1, 1, 0, 40, '2014-10-18', 6, 0, 'prod_5.svg'),
(52, 0, 'Mobiles & Accessories', '', 1, 1, 0, 60, '2014-11-26', 12, 0, 'prod_5.svg'),
(53, 0, 'Mobiles & Accessories', '', 2, 1, 0, 60, '2014-11-26', 12, 0, 'prod_5.svg'),
(54, 0, 'Mobiles & Accessories', '', 3, 1, 0, 60, '2014-11-26', 12, 0, 'prod_5.svg'),
(55, 0, 'Hot sale', '', 1, 1, 0, 10, '2014-11-30', 13, 0, 'prod_5.svg'),
(56, 0, 'Hot sale', '', 2, 1, 0, 10, '2014-11-30', 13, 0, 'prod_5.svg'),
(57, 0, 'Hot sale', '', 3, 1, 0, 10, '2014-11-30', 13, 0, 'prod_5.svg'),
(58, 0, 'Laptops', '', 1, 1, 0, 50, '2015-01-24', 14, 0, 'prod_5.svg'),
(59, 0, 'Laptops', '', 2, 1, 0, 50, '2015-01-24', 14, 0, 'prod_5.svg'),
(60, 0, 'Laptops', '', 3, 1, 0, 50, '2015-01-24', 14, 0, 'prod_5.svg'),
(61, 0, 'Video Game Consoles', '', 1, 1, 0, 63, '2015-01-24', 15, 0, 'prod_5.svg'),
(62, 0, 'Video Game Consoles', '', 2, 1, 0, 63, '2015-01-24', 15, 0, 'prod_5.svg'),
(63, 0, 'Video Game Consoles', '', 3, 1, 0, 63, '2015-01-24', 15, 0, 'prod_5.svg'),
(64, 0, 'Tablet & Accessories', '', 1, 1, 0, 61, '2015-01-24', 16, 0, 'prod_5.svg'),
(65, 0, 'Tablet & Accessories', '', 2, 1, 0, 61, '2015-01-24', 16, 0, 'prod_5.svg'),
(66, 0, 'Tablet & Accessories', '', 3, 1, 0, 61, '2015-01-24', 16, 0, 'prod_5.svg'),
(67, 0, 'Televisions', '', 1, 1, 0, 64, '2015-01-25', 17, 0, 'prod_5.svg'),
(68, 0, 'Televisions', '', 2, 1, 0, 64, '2015-01-25', 17, 0, 'prod_5.svg'),
(69, 0, 'Televisions', '', 3, 1, 0, 64, '2015-01-25', 17, 0, 'prod_5.svg'),
(75, 0, 'Jewellery', '', 3, 0, 0, 66, '2015-01-25', 18, 0, 'prod_5.svg'),
(74, 0, 'Jewellery', '', 2, 0, 0, 66, '2015-01-25', 18, 0, 'prod_5.svg'),
(73, 0, 'Jewellery', '', 1, 0, 0, 66, '2015-01-25', 18, 0, 'prod_5.svg'),
(76, 0, 'Fashion Accessories', '', 1, 1, 0, 66, '2015-01-25', 19, 0, 'prod_5.svg'),
(77, 0, 'Fashion Accessories', '', 2, 1, 0, 66, '2015-01-25', 19, 0, 'prod_5.svg'),
(78, 0, 'Fashion Accessories', '', 3, 1, 0, 66, '2015-01-25', 19, 0, 'prod_5.svg'),
(79, 0, 'Personal Care', '', 1, 1, 0, 67, '2015-01-25', 20, 0, 'prod_5.svg'),
(80, 0, 'Personal Care', '', 2, 1, 0, 67, '2015-01-25', 20, 0, 'prod_5.svg'),
(81, 0, 'Personal Care', '', 3, 1, 0, 67, '2015-01-25', 20, 0, 'prod_5.svg'),
(82, 0, 'Merchandise', '', 1, 1, 0, 68, '2015-01-25', 21, 0, 'prod_5.svg'),
(83, 0, 'Merchandise', '', 2, 1, 0, 68, '2015-01-25', 21, 0, 'prod_5.svg'),
(84, 0, 'Merchandise', '', 3, 1, 0, 68, '2015-01-25', 21, 0, 'prod_5.svg'),
(85, 0, 'Alfa Romeo Giulietta', '', 1, 1, 0, 69, '2015-01-25', 22, 0, 'prod_5.svg'),
(86, 0, 'Alfa Romeo Giulietta', '', 2, 1, 0, 69, '2015-01-25', 22, 0, 'prod_5.svg'),
(87, 0, 'Alfa Romeo Giulietta', '', 3, 1, 0, 69, '2015-01-25', 22, 0, 'prod_5.svg'),
(88, 0, 'Music Center', '', 1, 1, 0, 70, '2015-02-18', 23, 0, 'prod_5.svg'),
(89, 0, 'Music Center', '', 2, 1, 0, 70, '2015-02-18', 23, 0, 'prod_5.svg'),
(90, 0, 'Music Center', '', 3, 1, 0, 70, '2015-02-18', 23, 0, 'prod_5.svg'),
(94, 0, 'Vacuum Cleaner', '', 1, 1, 0, 72, '2015-10-01', 25, 0, 'prod_5.svg'),
(95, 0, 'Vacuum Cleaner', '', 2, 1, 0, 72, '2015-10-01', 25, 0, 'prod_5.svg'),
(96, 0, 'Vacuum Cleaner', '', 3, 1, 0, 72, '2015-10-01', 25, 0, 'prod_5.svg'),
(97, 0, 'Meat Grinder', '', 1, 1, 0, 73, '2015-10-01', 26, 0, 'prod_5.svg'),
(98, 0, 'Meat Grinder', '', 2, 1, 0, 73, '2015-10-01', 26, 0, 'prod_5.svg'),
(99, 0, 'Meat Grinder', '', 3, 1, 0, 73, '2015-10-01', 26, 0, 'prod_5.svg'),
(100, 0, 'Juice Extractor', '', 1, 1, 0, 74, '2015-10-01', 27, 0, 'prod_5.svg'),
(101, 0, 'Juice Extractor', '', 2, 1, 0, 74, '2015-10-01', 27, 0, 'prod_5.svg'),
(102, 0, 'Juice Extractor', '', 3, 1, 0, 74, '2015-10-01', 27, 0, 'prod_5.svg'),
(103, 0, 'Water Purification System ', '', 1, 1, 0, 75, '2015-10-01', 28, 0, 'prod_5.svg'),
(104, 0, 'Water Purification System ', '', 2, 1, 0, 75, '2015-10-01', 28, 0, 'prod_5.svg'),
(105, 0, 'Water Purification System ', '', 3, 1, 0, 75, '2015-10-01', 28, 0, 'prod_5.svg'),
(106, 0, 'Smart Watches', '', 1, 0, 0, 76, '2016-07-27', 29, 0, 'prod_5.svg'),
(107, 0, 'Smart Watches', '', 2, 0, 0, 76, '2016-07-27', 29, 0, 'prod_5.svg'),
(108, 0, 'Smart Watches', '', 3, 0, 0, 76, '2016-07-27', 29, 0, 'prod_5.svg'),
(109, 0, 'TV ', '', 1, 0, 0, 77, '2016-10-13', 30, 0, 'prod_5.svg'),
(110, 0, 'TV', '', 2, 0, 0, 77, '2016-10-13', 30, 0, 'prod_5.svg'),
(111, 0, 'TV', '', 3, 0, 0, 77, '2016-10-13', 30, 0, 'prod_5.svg'),
(112, 0, 'Notebook', '', 1, 0, 0, 78, '2016-10-13', 31, 0, 'prod_5.svg'),
(113, 0, 'Notebook', '', 2, 0, 0, 78, '2016-10-13', 31, 0, 'prod_5.svg'),
(114, 0, 'Notebook', '', 3, 0, 0, 78, '2016-10-13', 31, 0, 'prod_5.svg'),
(115, 0, 'Electric Samovar', '', 1, 0, 0, 79, '2016-11-27', 32, 0, 'prod_5.svg'),
(116, 0, 'Electric Samovar', '', 2, 0, 0, 79, '2016-11-27', 32, 0, 'prod_5.svg'),
(117, 0, 'Electric Samovar', '', 3, 0, 0, 79, '2016-11-27', 32, 0, 'prod_5.svg'),
(118, 0, 'Stove', '', 1, 0, 0, 80, '2016-11-27', 33, 0, 'prod_5.svg'),
(119, 0, 'Stove', '', 2, 0, 0, 80, '2016-11-27', 33, 0, 'prod_5.svg'),
(120, 0, 'Stove', '', 3, 0, 0, 80, '2016-11-27', 33, 0, 'prod_5.svg'),
(124, 0, 'perfume', '', 1, 0, 0, 82, '2017-04-20', 35, 0, 'prod_5.svg'),
(125, 0, 'perfume', '', 2, 0, 0, 82, '2017-04-20', 35, 0, 'prod_5.svg'),
(126, 0, 'perfume', '', 3, 0, 0, 82, '2017-04-20', 35, 0, 'prod_5.svg'),
(127, 0, 'King', '', 1, 0, 0, 83, '2017-06-26', 36, 0, 'prod_5.svg'),
(128, 0, 'King', '', 2, 0, 0, 83, '2017-06-26', 36, 0, 'prod_5.svg'),
(129, 0, 'King', '', 3, 0, 0, 83, '2017-06-26', 36, 0, 'prod_5.svg'),
(130, 0, 'Iron', '', 1, 0, 0, 84, '2017-09-11', 37, 0, 'prod_5.svg'),
(131, 0, 'Iron', '', 2, 0, 0, 84, '2017-09-11', 37, 0, 'prod_5.svg'),
(132, 0, 'Iron', '', 3, 0, 0, 84, '2017-09-11', 37, 0, 'prod_5.svg');

-- --------------------------------------------------------

--
-- Table structure for table `site_admin`
--

CREATE TABLE `site_admin` (
  `con` int(4) NOT NULL,
  `ist_adi` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `l_adi` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `ppp` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `site_admin`
--

INSERT INTO `site_admin` (`con`, `ist_adi`, `l_adi`, `ppp`, `ip`, `status`) VALUES
(5, 'orxan', 'orxan', '394339000f69555ba73d4225451aa42511215!@#$%7865****!@!%$$###', '', 0),
(3, 'admin', 'admin', '394339000f69555ba73d4225451aa42511215!@#$%7865****!@!%$$###', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `site_admin_menu`
--

CREATE TABLE `site_admin_menu` (
  `id` int(5) NOT NULL,
  `m_id` int(2) NOT NULL,
  `a_id` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_admin_menu`
--

INSERT INTO `site_admin_menu` (`id`, `m_id`, `a_id`) VALUES
(87, 19, 3),
(86, 18, 3),
(85, 17, 3),
(84, 5, 3),
(83, 3, 3),
(88, 20, 3),
(89, 21, 3);

-- --------------------------------------------------------

--
-- Table structure for table `site_a_menu`
--

CREATE TABLE `site_a_menu` (
  `id` int(5) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `url_tag` varchar(30) CHARACTER SET utf8 NOT NULL,
  `link` varchar(40) CHARACTER SET utf8 NOT NULL,
  `sub_id` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_a_menu`
--

INSERT INTO `site_a_menu` (`id`, `name`, `url_tag`, `link`, `sub_id`) VALUES
(3, 'Adminlər', 'admin', '?menu=admin', 0),
(5, 'Səhifələr', 'pages', '?menu=pages&tip=1', 0),
(17, 'Yuxarı slider', 'topslider', '?menu=topslider&tip=1&pos=1&p_id=1', 0),
(18, 'Aşağı slider', 'jurnal', '?menu=jurnal', 0),
(19, 'Xəbərlər', 'xeberler', '?menu=xeberler', 0),
(20, 'Kurslar', 'kurs', '?menu=kurs', 0),
(21, 'Kursların tarixi', 'kurs_date', '?menu=kurs_date', 0);

-- --------------------------------------------------------

--
-- Table structure for table `site_ip_error`
--

CREATE TABLE `site_ip_error` (
  `ip` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `datime` datetime NOT NULL,
  `say` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `site_ip_error`
--

INSERT INTO `site_ip_error` (`ip`, `datime`, `say`) VALUES
('194.135.162.176', '2016-11-29 08:00:48', 1),
('95.86.181.131', '2017-01-05 14:50:48', 2),
('194.135.161.181', '2017-02-14 05:18:16', 1),
('94.20.27.76', '2017-04-07 13:58:28', 1),
('46.22.237.248', '2017-09-08 00:30:18', 2),
('5.44.36.255', '2017-09-08 00:33:00', 1),
('109.237.119.128', '2017-09-11 01:38:09', 1),
('46.22.233.144', '2017-09-18 01:02:45', 1),
('46.22.227.210', '2017-09-19 07:27:23', 2),
('194.135.153.24', '2017-09-20 06:54:13', 1),
('::1', '2017-10-08 23:57:46', 1),
('::1', '2017-10-08 23:58:33', 1),
('::1', '2017-10-08 23:58:37', 1),
('::1', '2017-10-09 00:00:31', 1),
('::1', '2017-10-09 00:01:08', 1),
('::1', '2017-10-09 00:04:49', 1),
('::1', '2017-10-09 00:07:10', 1),
('::1', '2017-10-09 00:07:22', 1),
('::1', '2017-10-09 00:11:15', 1),
('::1', '2017-10-09 00:12:17', 1),
('::1', '2017-10-09 00:14:06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `site_langs`
--

CREATE TABLE `site_langs` (
  `id` int(4) NOT NULL,
  `lang` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tip` tinyint(2) NOT NULL,
  `status` tinyint(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `site_langs`
--

INSERT INTO `site_langs` (`id`, `lang`, `tip`, `status`) VALUES
(1, 'az', 0, 0),
(2, 'ru', 1, 0),
(3, 'en', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `site_menu`
--

CREATE TABLE `site_menu` (
  `id` int(4) NOT NULL,
  `sub_id` int(4) NOT NULL,
  `l_id` tinyint(4) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(2) NOT NULL,
  `tip` tinyint(2) NOT NULL,
  `ordering` int(4) NOT NULL,
  `date` datetime NOT NULL,
  `u_id` int(11) NOT NULL,
  `url_tag` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `text2` text COLLATE utf8_unicode_ci NOT NULL,
  `footer` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `site_menu`
--

INSERT INTO `site_menu` (`id`, `sub_id`, `l_id`, `name`, `text`, `status`, `tip`, `ordering`, `date`, `u_id`, `url_tag`, `title`, `keyword`, `description`, `link`, `photo`, `text2`, `footer`) VALUES
(810, 1, 1, 'LNS haqqında', '<p><img src=\"../../upload/images.jpg\" alt=\"\"><img src=\"../upload/images.jpg\" alt=\"\" width=\"300\" height=\"168\"></p>\r\n<p><img src=\"../upload/images.jpg\" alt=\"\" width=\"300\" height=\"168\">LNS is a kind of investment revolution, the likes of which have not yet been seen anywhere in the 21st Century. LNS has completely eradicated the sordid notions associated with home based work and even has compelled people from established jobs to say good bye to their hectic office lives and embrace the comfort of their homes while making an incredible amount of profit from LNS. LNS International, formerly involved in custom made designer invest started their network marketing venture at the cusp of the new millennium. This e-commerce endeavor of LNS has proved so fruitful that LNS has never looked back ever since then. LNS refines the term network marketing with its near perfect system that is only fueled by dedication and hard work. LNS offers its customers a slick, easy to use and flexible network marketing system that enables them to take reigns of the their own business right from the comfort of their homes as the LNS Network Marketing System is easily manageable through internet. In return, the customers get a handsome residual income that never expires or need to be renewed as it continues to flow uninterruptedly for the rest of the customers&rsquo; posterity. Upon choosing to join LNS, the customer is given a choice of plans to take that varies in terms of efforts and earnings. Once choosing the appropriate plan for his or her liking, the customer is ready to make profit without any delay or annoying activation period what so ever. LNS puts an unbelievable level of freedom into their customer&rsquo;s hands thus making them the master of their own business and not burdening them with hidden or subtext dues. This is the sole reason for LNS&rsquo;s success as from a bird&rsquo;s eye view; it is LNS that keeps on giving its customers without taking anything in return. By providing you with the means of setting up your own business where you are the boss and employee at a negligible initial investment, you are ready to take on the world from the comfort of your own living room and take charge of your own financial life. And the crux of the matter is this: by becoming a part of LNS just once, you can reap the benefits of your efforts forever. Yes that&rsquo;s right. In</p>\r\n<p><img src=\"../upload/images.jpg\" alt=\"\" width=\"300\" height=\"168\"></p>\r\n<p>a world where even blood bonds don&rsquo;t last longer, LNS gives you the chance to earn a handsome living for a life time without any hidden This perfect and unbeatable system single handedly blows a crushing defeat to the troubles of a simple man such as too much hours and not enough income, job insecurity, corporate layoffs, retirement or unemployment. LNS guarantees that with a little bit of dedication and hard work, the road towards becoming a millionaire can easily be paved and it has been proven. Firmly believing that the customer satisfaction is more important than profit, LNS facilitates its esteemed customer with round the clock and state of the art online tech support as well as valuable guidance&rsquo;s of veteran LNS customers who have made earned millions with the aid of LNS. By doing this, LNS ties all its customers into a knot of brotherhood or fraternity where each customer can prosper by helping the other customer. This in return develops true duplication and totally lives up the soul of Network Marketing. Simply putting it down, LNS offers: Everlasting residual income Easy and flexible duplication system, true to the spirit of network marketing Round the clock support from LNS tech team or veteran customers that are regarded in LNS fraternity as The Leaders The ability to work from home at anytime and anywhere Minimal investment and 100% money back guarantee in case of dissatisfaction Worldwide community Alliance with high profile corporations and certified Absolutely zero risk In an unpredictable world where nothing is reliable, LNS gives you a solid, tried and tested and simple way to put you on the path of becoming a millionaire.</p>', 0, 3, 3, '0000-00-00 00:00:00', 3, 'about_us', '', '', 'qisa text', '', '517487459ef04f435de5.jpg', '', 1),
(809, 0, 1, 'Xəbərlər', 'qweqweqweqwe', 0, 1, 2, '0000-00-00 00:00:00', 2, 'news', '', '', 'qisa text', '', 'news_3.jpg', '', 0),
(811, 2, 1, 'Xəbərlər sub', 'qweqweqweqwe', 0, 3, 4, '0000-00-00 00:00:00', 4, 'news', '', '', 'qisa text', 'news', 'news_3.jpg', '', 0),
(813, 0, 1, 'Diger', '<p>qweqweqweqwe</p>', 0, 1, 6, '0000-00-00 00:00:00', 6, 'other', '', '', 'qisa texttt', '', 'news_3.jpg', '', 0),
(815, 0, 1, 'Support', '<p>qweqweqweqwe</p>', 0, 1, 8, '0000-00-00 00:00:00', 8, 'support_email', '', '', 'qisa text', 'support_email', 'news_3.jpg', '', 0),
(816, 0, 1, 'Bu necə işləyir?', '<p>qweqweqweqwe</p>', 0, 1, 9, '0000-00-00 00:00:00', 9, 'how_work', '', '', 'qisa text', '', 'news_3.jpg', '', 1),
(817, 9, 1, 'Sisteme daxil ol', 'sef\\sfsfafqweraefrwer wr', 0, 3, 3, '0000-00-00 00:00:00', 5, 'login', '', '', 'qisa text', '', 'news_3.jpg', '', 0),
(808, 0, 3, 'About us', '', 0, 1, 1, '0000-00-00 00:00:00', 1, 'about', '', '', 'short text', '', 'news_3.jpg', '', 0),
(807, 0, 1, 'Haqqımızda', '<p>sefsfsfafqweraefrwer wr</p>', 0, 1, 1, '0000-00-00 00:00:00', 1, 'about', '', '', 'qisa text', '', 'news_3.jpg', '', 1),
(822, 2, 1, 'alt', '', 0, 3, 10, '0000-00-00 00:00:00', 10, 'alt', '', '', '', '', '', '', 0),
(823, 2, 2, '', '', 0, 3, 10, '0000-00-00 00:00:00', 10, '', '', '', '', '', '', '', 0),
(824, 2, 3, '', '', 0, 3, 10, '0000-00-00 00:00:00', 10, '', '', '', '', '', '', '', 0),
(825, 2, 1, 'suuuuuuuuuu', '', 0, 3, 11, '0000-00-00 00:00:00', 11, 'sy', '', '', '', '', '', '', 0),
(826, 2, 2, '', '', 0, 3, 11, '0000-00-00 00:00:00', 11, '', '', '', '', '', '', '', 0),
(827, 2, 3, '', '', 0, 3, 11, '0000-00-00 00:00:00', 11, '', '', '', '', '', '', '', 0),
(828, 8, 1, 'support alt', '', 0, 3, 12, '0000-00-00 00:00:00', 12, 'sub_support', '', '', '', '', '', '', 0),
(829, 8, 2, 'support alt', '', 0, 3, 12, '0000-00-00 00:00:00', 12, 'sub_support', '', '', '', '', '', '', 0),
(830, 8, 3, 'support alt', '', 0, 3, 12, '0000-00-00 00:00:00', 12, 'sub_support', '', '', '', '', '', '', 0),
(831, 0, 1, 'Shop', '', 0, 1, 13, '0000-00-00 00:00:00', 13, 'shop', '', '', '', 'shop', '', '', 0),
(832, 0, 2, 'Shop', '', 0, 1, 13, '0000-00-00 00:00:00', 13, 'shop', '', '', '', 'shop', '', '', 0),
(833, 0, 3, 'Shop', '', 0, 1, 13, '0000-00-00 00:00:00', 13, 'shop', '', '', '', 'shop', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `site_topslider`
--

CREATE TABLE `site_topslider` (
  `id` int(4) NOT NULL,
  `u_id` int(11) NOT NULL,
  `l_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `ordering` int(4) NOT NULL,
  `name` varchar(200) NOT NULL,
  `text` text NOT NULL,
  `new_price` int(11) NOT NULL,
  `old_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `site_topslider`
--

INSERT INTO `site_topslider` (`id`, `u_id`, `l_id`, `s_id`, `photo`, `ordering`, `name`, `text`, `new_price`, `old_price`) VALUES
(31, 2, 1, 0, 'slide_2.jpg', 3, 'dsgzsfg', 'dfssad', 50, 100),
(32, 2, 2, 0, 'slide_2.jpg', 3, 'dsgdfzg', 'aff', 50, 100),
(33, 2, 3, 0, 'slide_2.jpg', 3, 'dsdvgg', 'sdfsav', 50, 100),
(43, 4, 1, 0, 'slide_2.jpg', 1, 'dsggv', 'dav sad', 50, 100),
(44, 4, 2, 0, 'slide_2.jpg', 1, 'dvsvvd', 'ds sdasvf', 50, 100),
(49, 6, 1, 0, 'slide_2.jpg', 0, 's\\sa', 'd\\vfvf', 56, 150),
(50, 6, 2, 0, 'slide_2.jpg', 0, 's\\sfs', 'a\\wg\\srg', 15, 25),
(51, 6, 3, 0, 'slide_2.jpg', 0, 'dv\\v dsv', '\\dsvfaebgrshg', 546, 600),
(61, 7, 1, 0, 'slide_2.jpg', 13, 'sa\\f', 'sa\\gv\\dvg', 15, 30),
(62, 7, 2, 0, 'slide_2.jpg', 13, 'dsvzgf', '\\sgvfzbgz', 15, 30),
(63, 7, 3, 0, 'slide_2.jpg', 13, 'szdvds', 'dszvfdz', 15, 30);

-- --------------------------------------------------------

--
-- Table structure for table `site_xeberler`
--

CREATE TABLE `site_xeberler` (
  `id` int(4) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `l_id` tinyint(2) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `tip` tinyint(2) NOT NULL,
  `ordering` int(4) NOT NULL,
  `date` date NOT NULL,
  `u_id` int(4) NOT NULL,
  `url_tag` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `text2` text COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `checkbox` int(2) NOT NULL,
  `current_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `site_xeberler`
--

INSERT INTO `site_xeberler` (`id`, `name`, `text`, `l_id`, `status`, `tip`, `ordering`, `date`, `u_id`, `url_tag`, `title`, `keyword`, `description`, `text2`, `photo`, `checkbox`, `current_date`) VALUES
(3, 'byutufuyv', '<p>uihtuigrthgscr grgihtg ggnjng ngjtgntrgnhjnxgkntr ngxjknbhdngjkndihduit hf hguifhgnjngj fgnjfksngs nbj gdngjkxn jn&nbsp;uihtuigrthgscr grgihtg ggnjng ngjtgntrgnhjnxgkntr ngxjknbhdngjkndihduit hf hguifhgnjngj fgnjfksngs nbj gdngjkxn jn &nbsp;uihtuigrthgscr grgihtg ggnjng ngjtgntrgnhjnxgkntr ngxjknbhdngjkndihduit hf hguifhgnjngj fgnjfksngs nbj gdngjkxn jn&nbsp;uihtuigrthgscr grgihtg ggnjng ngjtgntrgnhjnxgkntr ngxjknbhdngjkndihduit hf hguifhgnjngj fgnjfksngs nbj gdngjkxn jn&nbsp;uihtuigrthgscr grgihtg ggnjng ngjtgntrgnhjnxgkntr ngxjknbhdngjkndihduit hf hguifhgnjngj fgnjfksngs nbj gdngjkxn jn</p>', 3, 0, 0, 10, '2015-07-29', 1, 'byutufuyv', 'byutufuyv', 'byutufuyv', 'byutufuyv', '<p>uihtuigrthgscr grgihtg ggnjng&nbsp;uihtuigrthgscr grgihtg ggnjng&nbsp;uihtuigrthgsc&nbsp;uihtuigrthgscr grgihtg ggnjng&nbsp;uihtuigrthgscr grgihtg ggnjng&nbsp;uihtuigrthgsc&nbsp;uihtuigrthgscr grgihtg ggnjng&nbsp;uihtuigrthgscr grgihtg ggnjng&nbsp;uihtuigrthgsc</p>', 'news_3.jpg', 1, '2017-10-10 07:25:38'),
(16, 'wDEWEDGTFD', '<p>SAFRSEGT</p>', 1, 0, 0, 60, '2016-10-16', 6, 'aaaaa', '', '', '', '<p>AGVFFDSZD</p>', 'news_3.jpg', 1, '2017-10-10 07:25:38'),
(6, 'erdtfyguhjk', '<p>gyufgbregf uyreifgbreuyx fvrseyufgoxyd &nbsp;hvgersbyiuxdfkuj ghbryfduxij gv&nbsp;gyufgbregf uyreifgbreuyx fvrseyufgoxyd &nbsp;hvgersbyiuxdfkuj ghbryfduxij gv&nbsp;gyufgbregf &nbsp;uyreifgbreuyx fvrseyufgoxyd &nbsp;hvgersbyiuxdfkuj ghbryfduxij &nbsp;gv &nbsp;gyufgbregf uyreifgbreuyx fvrseyufgoxyd hvgersbyiuxdfkuj ghbryfduxij gv&nbsp;gyufgbregf uyreifgbreuyx fvrseyufgoxyd hvgersbyiuxdfkuj &nbsp;ghbryfduxij gv&nbsp;gyufgbregf &nbsp;uyreifgbreuyx fvrseyufgoxyd hvgersbyiuxdfkuj &nbsp;ghbryfduxij gv&nbsp;gyufgbregf uyreifgbreuyx fvrseyufgoxyd hv gersbyiuxdfkuj ghbryfduxij gv&nbsp;gyufgbregf uyreifgbreuyx fvrseyufgoxyd hvgersbyiuxdfkuj ghbryfduxij gv&nbsp;</p>', 3, 0, 0, 20, '2015-08-11', 2, 'erdtfyguhjk', '', '', '', '<p>gyufgbregf uyreifgbreuyx fvrseyufgoxyd hvgersb &nbsp;yiuxdfkuj ghbryfduxij gv&nbsp;gyufgbregf uyreifgbreuyx &nbsp;fvrseyufgoxyd hvgersbyiuxdfkuj ghbryfduxij gv&nbsp;gyufgbregf &nbsp;uyreifgbreuyx fvrseyufgoxyd &nbsp;hvgersbyiuxdfkuj ghbryfduxij gv</p>', 'news_3.jpg', 1, '2017-10-10 07:25:38'),
(9, '', '<p>xxxxxxx xxxxxxxxxxxxxxx xxxxxxxxxxxxxx xxxxxxxxxxxxxxxxxx xxxxxxxxxxxxxxxx xxxxxxxxxxxxxxx xxxxxxxxxxxxxx xxxxxxxxxxxxxxx &nbsp;xxxxxxxxxxxxxx xxxxxxxxxxxxxxxxxxxxx xxxxxxxxxxxxxxxxx xxxxxxxxxx xxxxxxxx xxxxxxxxxxx xxxxxxxxxxx xxxxxxxxxxxx xxxxxxxxxxxx xxxxxxxxxxxx xxxxxxxxxxxx xxxxxxxxxxx xxxxxxxxx &nbsp;xxxxxxx xxxxxxxxxxxxxxx xxxxxxxxxxxxxx xxxxxxxxxxxxxxxxxx xxxxxxxxxxxxxxxx xxxxxxxxxxxxxxx xxxxxxxxxxxxxx xxxxxxxxxxxxxxx &nbsp;xxxxxxxxxxxxxx xxxxxxxxxxxxxxxxxxxxx xxxxxxxxxxxxxxxxx xxxxxxxxxx xxxxxxxx xxxxxxxxxxx xxxxxxxxxxx xxxxxxxxxxxx xxxxxxxxxxxx xxxxxxxxxxxx xxxxxxxxxxxx xxxxxxxxxxx xxxxxxxxx&nbsp;</p>', 3, 0, 0, 30, '2016-06-06', 3, 'xxxxxxxx', 'xxxxxxxxx', 'xxxxxxxxx', 'xxxxxxxxx', '<p>xxxxxxxxxxxxxxxx xxxxxxxxxxxx xxxxxxxxxxx xxxxxxxxxxxx xxxxxxxxxx xxxxxxx xxxxxx</p>', 'news_3.jpg', 1, '2017-10-10 07:25:38'),
(12, 'bbbbbbbb', '<p>bbbbbbbb&nbsp;bbbbbbbb&nbsp;bbbbbbbbbb bbbbbbbbbbbbb bb bbbbbbb &nbsp;bbbbbbbb &nbsp;bbbbbbbb &nbsp;bbbbbbbb &nbsp;bbbbbbbb &nbsp;bbbbbbbb &nbsp;bbbbbbbbbbbbbbbb &nbsp;bbbbbbbbbbbbb &nbsp;bbbbbbbbbbb &nbsp;bbbbbbbb&nbsp;bbbbbbbb&nbsp;bbbbbbbbbb bbbbbbbbbbbbb bb bbbbbbb &nbsp;bbbbbbbb &nbsp;bbbbbbbb &nbsp;bbbbbbbb &nbsp;bbbbbbbb &nbsp;bbbbbbbb &nbsp;bbbbbbbbbbbbbbbb &nbsp;bbbbbbbbbbbbb &nbsp;bbbbbbbbbbb &nbsp;bbbbbbbb&nbsp;bbbbbbbb&nbsp;bbbbbbbbbb bbbbbbbbbbbbb bb bbbbbbb &nbsp;bbbbbbbb &nbsp;bbbbbbbb &nbsp;bbbbbbbb &nbsp;bbbbbbbb &nbsp;bbbbbbbb &nbsp;bbbbbbbbbbbbbbbb &nbsp;bbbbbbbbbbbbb &nbsp;bbbbbbbbbbb&nbsp;</p>', 3, 0, 0, 40, '2016-06-06', 4, 'bbbbbbbb', 'bbbbbbbb', 'bbbbbbbb', 'bbbbbbbb', '<p>bbbbbbbb&nbsp;bbbbbbbb&nbsp;bbbbbbbbbb bbbbbbbbbbbbb bb bbbbbbb &nbsp;bbbbbbbb &nbsp;bbbbbbbb &nbsp;bbbbbbbb &nbsp;bbbbbbbb &nbsp;bbbbbbbb &nbsp;bbbbbbbbbbbbbbbb &nbsp;bbbbbbbbbbbbb &nbsp;bbbbbbbbbbb&nbsp;</p>', 'news_3.jpg', 1, '2017-10-10 07:25:38'),
(15, '', '', 3, 0, 0, 50, '2016-10-14', 5, '', '', '', '', '', 'news_3.jpg', 1, '2017-10-10 07:25:38'),
(17, '', '', 2, 0, 0, 60, '2016-10-16', 6, '', '', '', '', '', 'news_3.jpg', 1, '2017-10-10 07:25:38'),
(18, '', '', 3, 0, 0, 60, '2016-10-16', 6, '', '', '', '', '', 'news_3.jpg', 1, '2017-10-10 07:25:38'),
(19, 'VERGİ MƏCƏLLƏSİNDƏ DƏYİŞİKLİKLƏR_2017', '<p style=\"text-align: center;\"><span style=\"font-size: 12pt;\"><strong>VER</strong><strong>Gİ MƏCƏLLƏSİNDƏ DƏYİŞİKLİKLƏR_2017</strong></span></p>\r\n<p><span style=\"font-size: 12pt;\"><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</strong></span></p>\r\n<p><span style=\"font-size: 12pt;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 16 dekabr 2016-cı il tarixində Vergi Məcəlləsinə dəyişikliklər təsdiq olunmuşdur. Aşağıda onlardan bir hissəsini diqqətinizə &ccedil;atdırırıq:&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>\r\n<p><span style=\"font-size: 12pt;\"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></span></p>\r\n<ul>\r\n<li><span style=\"font-size: 12pt;\"><strong>Kameral yoxlamalar g&ouml;rə tələb olunan sənədləri vaxtında g&ouml;ndərməyən şəxslər <span style=\"text-decoration: underline;\">100 AZN</span> cərimə olunacaq:</strong></span></li>\r\n</ul>\r\n<p><span style=\"font-size: 12pt;\">57.3. Bu Məcəllənin 23.1.2-ci və 23.1.2-1-ci maddələrində g&ouml;stərilən sənədlərin (o c&uuml;mlədən elektron formatda məlumatların) m&uuml;əyyən edilmiş m&uuml;ddətlərdə təqdim edilməməsinə və ya bilərəkdən təhrif olunmaqla təqdim edilməsinə, o c&uuml;mlədən vergi orqanlarının bu Məcəllənin 42.4-c&uuml; maddəsinə əsasən edilmiş m&uuml;raciətinin həmin maddədə g&ouml;stərilən m&uuml;ddətdə icra edilməməsinə, habelə sənədlərin və ya məlumatların bu Məcəllənin 71.4-c&uuml; maddəsi ilə m&uuml;əyyən edilmiş m&uuml;ddətdə &uuml;zrl&uuml; səbəb olmadan saxlanılmamasına g&ouml;rə vergi &ouml;dəyicisinə 100 manat məbləğində maliyyə sanksiyası tətbiq edilir.;</span></p>\r\n<p><span style=\"font-size: 12pt;\">&nbsp;</span></p>\r\n<ul>\r\n<li><span style=\"font-size: 12pt;\"><strong>Malların alış və mədaxil sənədinin olmamasına g&ouml;rə alınmış malların dəyərinin <span style=\"text-decoration: underline;\">40%-ə</span> qədəri miqdarında cərimə oluna bilər:</strong></span></li>\r\n</ul>\r\n<p><span style=\"font-size: 12pt;\">58.8.2. malların alışını və ya mədaxilini təsdiq edən bu Məcəllənin 58.8-ci maddəsində nəzərdə tutulan sənədlərdən ən azı biri olmadıqda &ndash; alıcıya təqvim ili ərzində belə hala birinci dəfə yol verdikdə alınmış malların 10 faizi, ikinci dəfə yol verdikdə 20 faizi, &uuml;&ccedil; və daha &ccedil;ox dəfə yol verdikdə 40 faizi&nbsp; miqdarında;&rdquo;</span></p>\r\n<p><span style=\"font-size: 12pt;\">&nbsp;</span></p>\r\n<ul>\r\n<li><span style=\"font-size: 12pt;\"><strong>2017-ci ildən başlayaraq mənfəət vergisi &ouml;dəyiciləri nəzarət-kassa aparatının &ccedil;ekini xərc və alış sənədi kimi tanıya bilməyəcəklər və m&uuml;tləq kassa &ccedil;ekinin arxasına ayrıca qaimə fakturanın yazılmasına da zərurət olacaqdır.</strong></span></li>\r\n</ul>\r\n<p><span style=\"font-size: 12pt;\">&ldquo;109.8. Nəzarət-kassa aparatının &ccedil;eki və ya qəbz malların alınması ilə bağlı &ccedil;əkilən xərcləri təsdiq edən sənəd hesab olunmur.&rdquo;;&nbsp;</span></p>\r\n<p><span style=\"font-size: 12pt;\">16.1.11-7. pərakəndə ticarət və (və ya) ictimai iaşə fəaliyyəti zamanı malların (işlərin, xidmətlərin) alıcılarına onların tələbinə əsasən nəzarət-kassa aparatının &ccedil;eki ilə yanaşı, qaimə-faktura və ya elektron qaimə-faktura və ya elektron vergi hesab-faktura təqdim etmək.</span></p>\r\n<p><span style=\"font-size: 12pt;\">&nbsp;</span></p>\r\n<ul>\r\n<li><span style=\"font-size: 12pt;\"><strong>2017-ci ildən başlayaraq elektron qaimə faktura tətbiq olunacaq</strong></span></li>\r\n</ul>\r\n<p><span style=\"font-size: 12pt;\">Maddə 71-1. <span style=\"text-decoration: underline;\">Elektron qaimə-fakturaları</span></span></p>\r\n<p><span style=\"font-size: 12pt;\">71-1.1. Bu Məcəllə ilə m&uuml;əyyən edilən hallarda fərdi sahibkarlara və h&uuml;quqi şəxslərə malları təqdim edən, işləri g&ouml;rən və xidmətləri g&ouml;stərən şəxs onlara <span style=\"text-decoration: underline;\">elektron qaimə-faktura</span> verir. Vergi &ouml;dəyicisi kimi vergi orqanlarında u&ccedil;ota alınmayan şəxslərin <span style=\"text-decoration: underline;\">elektron qaimə-faktura</span> vermək h&uuml;ququ yoxdur.</span></p>\r\n<p><span style=\"font-size: 12pt;\">71-1.2. <span style=\"text-decoration: underline;\">Elektron qaimə-fakturanın</span> forması, tətbiqi, u&ccedil;otu və istifadəsi qaydaları m&uuml;vafiq icra hakimiyyəti orqanı tərəfindən m&uuml;əyyən edilir;</span></p>\r\n<p><span style=\"font-size: 12pt;\">&nbsp;</span></p>\r\n<p><span style=\"font-size: 12pt;\">58.8. Səyyar vergi yoxlaması və operativ vergi nəzarəti zamanı vergi &ouml;dəyicisinə məxsus pul vəsaitlərinin u&ccedil;otdan yayındırılmasına g&ouml;rə, habelə vergi &ouml;dəyicisinin sahibliyində olan malların alışını təsdiq edən qaimə-faktura və ya <span style=\"text-decoration: underline;\">elektron qaimə-faktura</span> və ya elektron vergi hesab-faktura, idxal mallarına m&uuml;nasibətdə idxal g&ouml;mr&uuml;k bəyannaməsi, həmin mallar vergi &ouml;dəyicisinin &ouml;z&uuml; tərəfindən istehsal edildikdə isə bu Məcəllənin 130-1-ci maddəsi ilə m&uuml;əyyən edilmiş qaydada tərtib edilən sənədlərdən ən azı biri olmadıqda:</span></p>\r\n<p><span style=\"font-size: 12pt;\">58.8.1 pul vəsaitinin 1000 manatdan &ccedil;ox olan məbləğdə u&ccedil;otdan gizlədilməsinə və ya u&ccedil;ota alınmamasına g&ouml;rə &ndash; 1000 manatdan &ccedil;ox olan hissəsinin 5 faizi, il ərzində belə hala təkrar yol verdikdə 1000 manatdan &ccedil;ox olan hissəsinin 10 faizi miqdarında maliyyə sanksiyası tətbiq edilir;</span></p>\r\n<p><span style=\"font-size: 12pt;\">&nbsp;</span></p>\r\n<p><span style=\"font-size: 12pt;\">&nbsp;</span></p>\r\n<ul>\r\n<li><span style=\"font-size: 12pt;\"><strong>2017-ci ildən başlayaraq elektron audit tətbiq olunacaq</strong></span></li>\r\n</ul>\r\n<p><span style=\"font-size: 12pt;\">13.2.68. <span style=\"text-decoration: underline;\">elektron audit</span> &ndash; vergi &ouml;dəyicisinin elektron formatda saxlanılan maliyyə (m&uuml;hasibat) məlumatlarına x&uuml;susi proqram təminatı vasitəsilə birbaşa və ya məsafədən &ccedil;ıxış imkanı yaradılmaqla aparılan vergi yoxlaması;</span></p>\r\n<p><span style=\"font-size: 12pt;\">23.1.2. vergi &ouml;dəyicilərində b&uuml;t&uuml;n maliyyə sənədlərini, m&uuml;hasibat kitablarını, hesabatları, smetaları, nağd vəsaitləri, qiymətli kağızları və başqa qiymətliləri, bəyannamələri və vergilərin hesablanması və &ouml;dənilməsi ilə bağlı olan digər sənədləri qanunvericiliklə m&uuml;əyyən edilmiş qaydada yoxlamaq, habelə yoxlamaların ke&ccedil;irilməsi zamanı yoxlamaya aid olan məsələlərlə bağlı vergi &ouml;dəyicilərindən və ya onun vəzifəli şəxslərindən lazımi izahatlar, arayışlar və məlumat almaq, habelə m&uuml;hasibat u&ccedil;otu elektron formatda aparıldığı halda <span style=\"text-decoration: underline;\">elektron auditin</span> <span style=\"text-decoration: underline;\">məqsədləri &uuml;&ccedil;&uuml;n</span> vergi &ouml;dəyicisinin və onun filiallarının elektron daşıyıcılarındakı məlumatlarının verilməsini, həmin məlumatlara birbaşa və ya məsafədən &ccedil;ıxış imkanının yaradılmasını tələb etmək;</span></p>\r\n<p><span style=\"font-size: 12pt;\">38.1. Səyyar vergi yoxlaması, o c&uuml;mlədən <span style=\"text-decoration: underline;\">elektron audit</span> vergi orqanının qərarına əsasən həyata ke&ccedil;irilir;</span></p>\r\n<p><span style=\"font-size: 12pt;\">38.8. <span style=\"text-decoration: underline;\">Elektron auditin aparılması qaydaları</span> m&uuml;vafiq icra hakimiyyəti orqanı tərəfindən m&uuml;əyyən edilir;</span></p>\r\n<p><span style=\"font-size: 12pt;\">&nbsp;</span></p>\r\n<ul>\r\n<li><span style=\"font-size: 12pt;\"><strong>2017-ci ildən başlayaraq maşın və avadanlıqların amortizasiya normasında m&uuml;əyyən azalma baş verəcək</strong></span></li>\r\n</ul>\r\n<p><span style=\"font-size: 12pt;\">114.3. Amortizasiya olunan aktivlər &uuml;zrə illik amortizasiya normaları aşağıdakı kimi m&uuml;əyyən edilir:</span></p>\r\n<p><span style=\"font-size: 12pt;\">114.3.2. maşınlar və avadanlıq &mdash; 20%-dək;</span></p>\r\n<p><span style=\"font-size: 12pt;\">114.3.2-1. y&uuml;ksək texnologiyalar məhsulu olan hesablama texnikası &uuml;zrə &ndash; 25 faizədək;&rdquo;.</span></p>\r\n<p><span style=\"font-size: 12pt;\">&nbsp;</span></p>\r\n<ul>\r\n<li><span style=\"font-size: 12pt;\"><strong>2017-ci ildən başlayaraq sadələşdirilmiş vergi &ouml;dəyiciləri əmlak vergisi &ouml;dəyəcəklər.</strong></span></li>\r\n</ul>\r\n<p><span style=\"font-size: 12pt;\">219.5. Sadələşdirilmiş vergini &ouml;dəyən h&uuml;quqi şəxs ƏDV-nin, mənfəət vergisinin, fiziki şəxs (h&uuml;quqi şəxs yaratmadan sahibkarlıq fəaliyyətini həyata ke&ccedil;irən fiziki şəxs də daxil olmaqla) isə gəlir vergisinin və ƏDV-nin &ouml;dəyicisi deyil.</span></p>\r\n<p><span style=\"font-size: 12pt;\">&nbsp;</span></p>\r\n<ul>\r\n<li><span style=\"font-size: 12pt;\"><strong>2017-ci ildən kəndə təsərr&uuml;fatı məhsullarının pərakəndə satışı ilə məşğul olan m&uuml;əssiələrdə ƏDV ticarət əlavəsinə tətbiq olunacaq.</strong></span></li>\r\n</ul>\r\n<p><span style=\"font-size: 12pt;\">Maddə 153. Əlavə dəyər vergisi anlayışı: Əlavə dəyər vergisi (bundan sonra ƏDV) vergi tutulan d&ouml;vriyyədən hesablanan verginin məbləği ilə bu Məcəllənin m&uuml;ddəalarına uyğun olaraq verilən elektron vergi hesab-fakturalara və ya idxalda ƏDV-nin &ouml;dənildiyini g&ouml;stərən sənədlərə m&uuml;vafiq surətdə əvəzləşdirilməli olan verginin məbləği arasındakı fərqdir. Azərbaycan Respublikası ərazisində istehsal olunan <span style=\"text-decoration: underline;\">kənd təsərr&uuml;fatı məhsullarının pərakəndə satışı zamanı əlavə dəyər vergisi ticarət əlavəsindən hesablanan verginin məbləğidir</span>;</span></p>\r\n<p><span style=\"font-size: 12pt;\">159.1. Malların təqdim edilməsi, işlərin g&ouml;r&uuml;lməsi, xidmətlərin g&ouml;stərilməsi, Azərbaycan Respublikası ərazisində istehsal olunan <span style=\"text-decoration: underline;\">kənd təsərr&uuml;fatı məhsullarının pərakəndə satışı</span> zamanı tətbiq edilən <span style=\"text-decoration: underline;\">ticarət əlavəsi</span> və vergi tutulan idxal vergitutma obyektidir;</span></p>\r\n<p><span style=\"font-size: 12pt;\">&nbsp;</span></p>\r\n<p><span style=\"font-size: 12pt;\">174.3. Azərbaycan Respublikası ərazisində istehsal olunan <span style=\"text-decoration: underline;\">kənd təsərr&uuml;fatı məhsullarının</span> <span style=\"text-decoration: underline;\">pərakəndə satışı zamanı tətbiq olunmuş ticarət əlavəsindən ƏDV hesablayan pərakəndə ticarət fəaliyyəti ilə məşğul olan vergi &ouml;dəyiciləri həmin malların u&ccedil;otunu ayrıca aparır</span>. Belə u&ccedil;ot aparılmadıqda, bu Məcəllənin digər maddələrində g&ouml;stərilən m&uuml;ddəalardan asılı olmayaraq həmin malların pərakəndə satışı zamanı ƏDV &uuml;mumi d&ouml;vriyyədən hesablanır.</span></p>\r\n<p><span style=\"font-size: 12pt;\">&nbsp;</span></p>\r\n<p><span style=\"font-size: 12pt;\"><strong>N&uuml;munə:</strong> Kənd təsərr&uuml;fatı məhsullarının pərakəndə satışı ilə məşğul olan ticarət obyekti maya dəyəri 45.000 manat olan malların &uuml;zərinə 5.000 manat ticarət əlavəsi qoymaqla 50.000 manata satır. Bu zaman ticarət əlavəsinə 18% ƏDV dərəcəsi tətbiq edilərək (5000*18%) &nbsp;900 manat ƏDV məbləği m&uuml;əyyən edir.</span></p>\r\n<p><span style=\"font-size: 12pt;\">&nbsp;</span></p>\r\n<ul>\r\n<li><span style=\"font-size: 12pt;\"><strong>2017-ci ildən bəzi fəaliyyətlər &uuml;zrə Sadələşdirilmiş vergi &uuml;zrə aylıq sabit məbləğ tətbiq olunacaq.</strong></span></li>\r\n</ul>\r\n<p><span style=\"font-size: 12pt;\">220.10. Bu maddədə nəzərdə tutulan fəaliyyət n&ouml;vləri ilə fərdi qaydada (muzdlu iş&ccedil;i cəlb etmədən) məşğul olan bu Məcəllənin 218.4.4-c&uuml; maddəsində g&ouml;stərilən fiziki şəxslər &uuml;&ccedil;&uuml;n&nbsp; sadələşdirilmiş vergi aşağıdakı kimi m&uuml;əyyən edilir:</span></p>\r\n<p>&nbsp;</p>\r\n<table border=\"1\" width=\"587\">\r\n<tbody>\r\n<tr>\r\n<td width=\"436\">\r\n<p><strong>Fəaliyyət n&ouml;v&uuml;n&uuml;n adı</strong></p>\r\n</td>\r\n<td width=\"151\">\r\n<p><strong>Sadələşdirilmiş vergi &uuml;zrə aylıq sabit məbləğ (manatla)</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width=\"436\">\r\n<p>Toylarda, şənliklərdə və digər tədbirlərdə aparıcılıq, &ccedil;alğı&ccedil;ılıq, rəqqaslıq,&nbsp; aşıqlıq,&nbsp; məzhəkə&ccedil;ilik və digər oxşar fəaliyyət</p>\r\n</td>\r\n<td width=\"151\">\r\n<p>30</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width=\"436\">\r\n<p>Fərdi foto, audio-video xidmətləri (foto studiyalar istisna olmaqla) sahəsində fəaliyyət</p>\r\n</td>\r\n<td width=\"151\">\r\n<p>30</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width=\"436\">\r\n<p>&Ccedil;əkmə&ccedil;i, pinə&ccedil;i</p>\r\n</td>\r\n<td width=\"151\">\r\n<p>5</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width=\"436\">\r\n<p>Saat, televizor, soyuducu və digər məişət cihazlarının təmiri</p>\r\n</td>\r\n<td width=\"151\">\r\n<p>10</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width=\"436\">\r\n<p>Fərdi yaşayış evlərində və mənzillərdə ev qulluq&ccedil;usu,&nbsp; xəstələrə, qocalara və uşaqlara qulluq xidməti, dayə, fərdi s&uuml;r&uuml;c&uuml;l&uuml;k, ev təsərr&uuml;fatında təmizlik, bağban, aşbaz, g&ouml;zət&ccedil;i &nbsp;və digər analoji işlər</p>\r\n</td>\r\n<td width=\"151\">\r\n<p>10</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width=\"436\">\r\n<p>Nəqqaşlıq emalatxanalarının fəaliyyəti</p>\r\n</td>\r\n<td width=\"151\">\r\n<p>20</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>', 1, 0, 0, 70, '2016-11-29', 7, 'vergi_mecellesinde', 'VERGİ MƏCƏLLƏSİNDƏ DƏYİŞİKLİKLƏR_2017', 'VERGİ MƏCƏLLƏSİNDƏ DƏYİŞİKLİKLƏR_2017', 'VERGİ MƏCƏLLƏSİNDƏ DƏYİŞİKLİKLƏR_2017', '<p>16 dekabr 2016-cı il tarixində Vergi Məcəlləsinə dəyişikliklər təsdiq olunmuşdur. Aşağıda onlardan bir hissəsini diqqətinizə &ccedil;atdırırıq:</p>', 'news_3.jpg', 1, '2017-10-10 07:25:38'),
(20, '', '', 2, 0, 0, 70, '2016-11-29', 7, '', '', '', '', '', 'news_3.jpg', 1, '2017-10-10 07:25:38'),
(21, 'efrae', '<p>dargevftfdsfrgthtfrd</p>', 1, 0, 0, 80, '2017-10-10', 8, 'fafra', 'ergfreage', 'fafrgtae', 'afvrag', '<p>eafgregrtesgtetet</p>', '817297259dc8523d0ef2.jpg', 0, '2017-10-10 08:30:27'),
(22, '', '', 2, 0, 0, 80, '2017-10-10', 8, '', '', '', '', '', '817297259dc8523d0ef2.jpg', 0, '2017-10-10 08:30:27'),
(23, '', '', 3, 0, 0, 80, '2017-10-10', 8, '', '', '', '', '', '817297259dc8523d0ef2.jpg', 0, '2017-10-10 08:30:27'),
(24, 'Daewf', '<p>efefaeee</p>', 1, 0, 0, 90, '2017-10-10', 9, 'azerbaijan', 'fefrdwag', 'feragr', 'fee', '<p>afargt</p>', '675623859dc85494b71a.jpg', 0, '2017-10-10 08:31:05'),
(25, '', '', 2, 0, 0, 90, '2017-10-10', 9, '', '', '', '', '', '675623859dc85494b71a.jpg', 0, '2017-10-10 08:31:05'),
(26, '', '', 3, 0, 0, 90, '2017-10-10', 9, '', '', '', '', '', '675623859dc85494b71a.jpg', 0, '2017-10-10 08:31:05'),
(27, 'errf', '<p>reer</p>', 1, 0, 0, 100, '2017-11-02', 10, 'rree', '', '', '', '<p>ererrere</p>', '900161059fb153bd9f8f.jpg', 0, '2017-11-02 12:53:15'),
(28, '', '', 2, 0, 0, 100, '2017-11-02', 10, '', '', '', '', '', '900161059fb153bd9f8f.jpg', 0, '2017-11-02 12:53:15'),
(29, '', '', 3, 0, 0, 100, '2017-11-02', 10, '', '', '', '', '', '900161059fb153bd9f8f.jpg', 0, '2017-11-02 12:53:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `s_id` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `pass`, `s_id`, `create_date`, `status`, `u_id`) VALUES
(1, 'Leyla', 'bla@mail.ru', '+9945555555', '123456', 0, '2017-08-25 06:43:07', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `valyuta`
--

CREATE TABLE `valyuta` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kat_id` int(11) NOT NULL,
  `url_tag` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tip` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `l_id` int(11) NOT NULL,
  `ordering` int(11) NOT NULL,
  `image_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_id` int(11) NOT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sub_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `valyuta`
--

INSERT INTO `valyuta` (`id`, `name`, `kat_id`, `url_tag`, `tip`, `date`, `l_id`, `ordering`, `image_url`, `s_id`, `link`, `sub_id`) VALUES
(1, 'AZN', 1, '', 0, '2017-10-12 07:17:45', 1, 1, '', 0, '', 0),
(2, 'AZN', 1, '', 0, '2017-10-12 07:17:45', 2, 1, '', 0, '', 0),
(3, 'AZN', 1, '', 0, '2017-10-12 07:17:45', 3, 1, '', 0, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`con`);

--
-- Indexes for table `admin_menu`
--
ALTER TABLE `admin_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a_menu`
--
ALTER TABLE `a_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_mails`
--
ALTER TABLE `contact_mails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `elanlar`
--
ALTER TABLE `elanlar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kateqoriyalar`
--
ALTER TABLE `kateqoriyalar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mehsul_olke`
--
ALTER TABLE `mehsul_olke`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `olkeler`
--
ALTER TABLE `olkeler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `olke_kateqoriya`
--
ALTER TABLE `olke_kateqoriya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_admin`
--
ALTER TABLE `site_admin`
  ADD PRIMARY KEY (`con`);

--
-- Indexes for table `site_admin_menu`
--
ALTER TABLE `site_admin_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_a_menu`
--
ALTER TABLE `site_a_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_langs`
--
ALTER TABLE `site_langs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_menu`
--
ALTER TABLE `site_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_topslider`
--
ALTER TABLE `site_topslider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_xeberler`
--
ALTER TABLE `site_xeberler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `valyuta`
--
ALTER TABLE `valyuta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `con` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `admin_menu`
--
ALTER TABLE `admin_menu`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `a_menu`
--
ALTER TABLE `a_menu`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `contact_mails`
--
ALTER TABLE `contact_mails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `elanlar`
--
ALTER TABLE `elanlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `kateqoriyalar`
--
ALTER TABLE `kateqoriyalar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `mehsul_olke`
--
ALTER TABLE `mehsul_olke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `olkeler`
--
ALTER TABLE `olkeler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `olke_kateqoriya`
--
ALTER TABLE `olke_kateqoriya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `site_admin`
--
ALTER TABLE `site_admin`
  MODIFY `con` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `site_admin_menu`
--
ALTER TABLE `site_admin_menu`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `site_a_menu`
--
ALTER TABLE `site_a_menu`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `site_langs`
--
ALTER TABLE `site_langs`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `site_menu`
--
ALTER TABLE `site_menu`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=834;
--
-- AUTO_INCREMENT for table `site_topslider`
--
ALTER TABLE `site_topslider`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `site_xeberler`
--
ALTER TABLE `site_xeberler`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `valyuta`
--
ALTER TABLE `valyuta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
