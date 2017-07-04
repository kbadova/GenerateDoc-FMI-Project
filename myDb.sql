-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 04, 2017 at 11:26 AM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.1.6-1~ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myDb`
--

-- --------------------------------------------------------

--
-- Table structure for table `Author`
--

CREATE TABLE `Author` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `fn` bigint(20) NOT NULL,
  `course` int(11) DEFAULT NULL,
  `program` varchar(250) NOT NULL,
  `specialty` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Author`
--

INSERT INTO `Author` (`id`, `name`, `email`, `fn`, `course`, `program`, `specialty`) VALUES
(1, 'krasi', 'krasi_b2@abv.bg', 0, NULL, '', ''),
(2, 'krasito', 'krasi_b3342@abv.bg', 0, NULL, '', ''),
(3, 'krasimira', 'krasi@dsdc.com', 0, NULL, '', ''),
(4, 'ddse', 'sfss@dcd.com', 0, NULL, '', ''),
(5, 'sdes', 'dds@dwd.com', 0, NULL, '', ''),
(6, 'krasimira', 's@wd.com', 34555, NULL, '', ''),
(7, 'adrian', 'adrian@adrian.com', 34, 5, '', ''),
(8, 'krasibadova', 'krasi@krasi.com', 456, 3, '', ''),
(9, 'krasimira badova', 'krasi/@asd.com', 848494, 5, 'Ð±Ð°ÐºÐ°Ð»Ð°Ð²ÑŠÑ€', 'Ð¡Ð˜'),
(10, 'tfyhftf', 'gyttrfthyt@eded.com', 545, 5, 'Ð±Ð°ÐºÐ°Ð»Ð°Ð²ÑŠÑ€', 'ÐšÐ');

-- --------------------------------------------------------

--
-- Table structure for table `Comment`
--

CREATE TABLE `Comment` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `author` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Document`
--

CREATE TABLE `Document` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `author` int(11) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `my_condition` text,
  `has_my_condition` tinyint(1) DEFAULT NULL,
  `introduction` text,
  `has_introduction` tinyint(1) DEFAULT NULL,
  `theory` text,
  `has_theory` tinyint(1) DEFAULT NULL,
  `comment` int(11) DEFAULT NULL,
  `technologies` text,
  `has_technologies` tinyint(1) DEFAULT NULL,
  `settings` text,
  `has_settings` tinyint(1) DEFAULT NULL,
  `guide` text,
  `has_guide` tinyint(1) DEFAULT NULL,
  `example_data` text,
  `has_example_data` tinyint(1) DEFAULT NULL,
  `description` text,
  `has_description` tinyint(1) DEFAULT NULL,
  `contribution` text,
  `has_contribution` tinyint(1) DEFAULT NULL,
  `learned` text,
  `has_learned` tinyint(1) DEFAULT NULL,
  `resources` text,
  `has_resources` tinyint(1) DEFAULT NULL,
  `file1` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Document`
--

INSERT INTO `Document` (`id`, `title`, `author`, `created_at`, `my_condition`, `has_my_condition`, `introduction`, `has_introduction`, `theory`, `has_theory`, `comment`, `technologies`, `has_technologies`, `settings`, `has_settings`, `guide`, `has_guide`, `example_data`, `has_example_data`, `description`, `has_description`, `contribution`, `has_contribution`, `learned`, `has_learned`, `resources`, `has_resources`, `file1`) VALUES
(1, 'zagl', 2, '2017-05-27', 'f', 0, ' gtyhy\r\n        ', 0, 's', 0, NULL, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, NULL),
(4, 'fsfs', 1, '2017-05-27', 's', 0, ' s\r\n        ', 0, 's', 0, NULL, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, NULL),
(7, 'fr', 1, '2017-05-27', 'f', 0, ' f\r\n        ', 0, 'f', 0, NULL, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, NULL),
(9, 'rsfrd', 2, '2017-05-27', 'fs', 0, ' dfsds\r\n        ', 0, 'fdf', 0, NULL, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, NULL),
(10, 'fds', 2, '2017-05-27', 'sdc', 0, ' \r\n       dsfc ', 0, 'xdc', 0, NULL, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, NULL),
(11, 'sdrfcd', 1, '2017-05-27', 'dfcrd', 0, ' dvf\r\n        ', 0, 'd', 0, NULL, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, NULL),
(12, 'ed', 2, '2017-05-27', 'sde', 0, ' \r\n        s', 0, 'sd', 0, NULL, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, NULL),
(13, 'sd', 1, '2017-05-27', 's', 0, ' \r\n   sd  ', 0, 'sd', 0, NULL, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, NULL),
(17, 'se', 1, '2017-05-27', 's', 0, ' sd\r\n        ', 0, 'sdc', 0, NULL, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, NULL),
(19, 'es', 1, '2017-05-27', 'es', 0, ' \r\n        de', 0, 'dx', 0, NULL, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, NULL),
(20, 'efs', 1, '2017-05-27', 'scde', 0, ' \r\n       secd ', 0, 's', 0, NULL, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, NULL),
(21, 'Ð ÐµÑ„ÐµÑ€Ð°Ñ‚ Ð½Ð° Ñ‚ÐµÐ¼Ð° Ð²Ð´ÑÐ¹ÐµÐ²ÐºÐ´Ð¾ÐµÑÑ†Ð´ÐºÐºÐ¾ÐºÑ„Ð¾Ñ„ÐºÐ¾', 1, '2017-05-27', ' \r\n        Ð˜Ð·Ð²ÐµÑÑ‚ÐµÐ½ Ñ„Ð°ÐºÑ‚ Ðµ, Ñ‡t Ñ‡Ð¸Ñ‚Ð°Ñ‚ÐµÐ»Ñ Ð¾Ð±Ñ€ÑŠÑ‰Ð° Ð²Ð½Ð¸Ð¼Ð°Ð½Ð¸Ðµ Ð½Ð° ÑÑŠÐ´ÑŠÑ€Ð¶Ð°Ð½Ð¸ÐµÑ‚Ð¾, ÐºÐ¾ÐµÑ‚Ð¾ Ñ‡ÐµÑ‚Ðµ, Ð° Ð½Ðµ Ð½Ð° Ð¾Ñ„Ð¾Ñ€Ð¼Ð»ÐµÐ½Ð¸ÐµÑ‚Ð¾ Ð¼Ñƒ. Ð¡Ð²Ð¾Ð¹ÑÑ‚Ð²Ð¾Ñ‚Ð¾ Ð½Ð° Lorem Ipsum Ðµ, Ñ‡Ðµ Ð´Ð¾ Ð³Ð¾Ð»ÑÐ¼Ð° ÑÑ‚ÐµÐ¿ÐµÐ½ Ð¸Ð¼Ð° Ð½Ð¾Ñ€Ð¼Ð°Ð»Ð½Ð¾ Ñ€Ð°Ð·Ð¿Ñ€ÐµÐ´ÐµÐ»ÐµÐ½Ð¸Ðµ Ð½Ð° Ð±ÑƒÐºÐ²Ð¸Ñ‚Ðµ Ð¸ ÑÐµ Ñ‡ÐµÑ‚Ðµ Ð¿Ð¾-Ð»ÐµÑÐ½Ð¾, Ð·Ð° Ñ€Ð°Ð·Ð»Ð¸ÐºÐ° Ð¾Ñ‚ Ð½Ð¾Ñ€Ð¼Ð°Ð»ÐµÐ½ Ñ‚ÐµÐºÑÑ‚ Ð½Ð° Ð°Ð½Ð³Ð»Ð¸Ð¹ÑÐºÐ¸ ÐµÐ·Ð¸Ðº ÐºÐ°Ñ‚Ð¾ "Ð¢Ð¾Ð²Ð° Ðµ ÑÑŠÐ´ÑŠÑ€Ð¶Ð°Ð½Ð¸Ðµ, \r\n                                                                                                                        ', 0, ' \r\n        Ð˜Ð·Ð²ÐµÑÑ‚ÐµÐ½ Ñ„Ð°ÐºÑ‚ Ðµ, Ñ‡Ðµ Ñ‡Ð¸Ñ‚Ð°Ñ‚ÐµÐ»Ñ Ð¾Ð±Ñ€ÑŠÑ‰Ð° Ð²Ð½Ð¸Ð¼Ð°Ð½Ð¸Ðµ Ð½Ð° ÑÑŠÐ´ÑŠÑ€Ð¶Ð°Ð½Ð¸ÐµÑ‚Ð¾, ÐºÐ¾ÐµÑ‚Ð¾ Ñ‡ÐµÑ‚Ðµ, Ð° Ð½Ðµ Ð½Ð° Ð¾Ñ„Ð¾Ñ€Ð¼Ð»ÐµÐ½Ð¸ÐµÑ‚Ð¾ Ð¼Ñƒ. Ð¡Ð²Ð¾Ð¹ÑÑ‚Ð²Ð¾Ñ‚Ð¾ Ð½Ð° Lorem Ipsum Ðµ, Ñ‡Ðµ Ð´Ð¾ Ð³Ð¾Ð»ÑÐ¼Ð° ÑÑ‚ÐµÐ¿ÐµÐ½ Ð¸Ð¼Ð° Ð½Ð¾Ñ€Ð¼Ð°Ð»Ð½Ð¾ Ñ€Ð°Ð·Ð¿Ñ€ÐµÐ´ÐµÐ»ÐµÐ½Ð¸Ðµ Ð½Ð° Ð±ÑƒÐºÐ²Ð¸Ñ‚Ðµ Ð¸ ÑÐµ Ñ‡ÐµÑ‚Ðµ Ð¿Ð¾-Ð»ÐµÑÐ½Ð¾, Ð·Ð° Ñ€Ð°Ð·Ð»Ð¸ÐºÐ° Ð¾Ñ‚ Ð½Ð¾Ñ€Ð¼Ð°Ð»ÐµÐ½ Ñ‚ÐµÐºÑÑ‚ Ð½Ð° Ð°Ð½Ð³Ð»Ð¸Ð¹ÑÐºÐ¸ ÐµÐ·Ð¸Ðº ÐºÐ°Ñ‚Ð¾ "Ð¢Ð¾Ð²Ð° Ðµ ÑÑŠÐ´ÑŠÑ€Ð¶Ð°Ð½Ð¸Ðµ, Ñ‚Ð¾Ð²Ð° Ðµ ÑÑŠÐ´ÑŠÑ€Ð¶Ð°Ð½Ð¸Ðµ". ÐœÐ½Ð¾Ð³Ð¾ ÑÐ¸ÑÑ‚ÐµÐ¼Ð¸ Ð·Ð° Ð¿ÑƒÐ±Ð»Ð¸ÐºÑƒÐ²Ð°Ð½Ðµ Ð¸ Ñ€ÐµÐ´Ð°ÐºÑ‚Ð¾Ñ€Ð¸ Ð½Ð° Ð£ÐµÐ± ÑÑ‚Ñ€Ð°Ð½Ð¸Ñ†Ð¸ Ð¸Ð·Ð¿Ð¾Ð»Ð·Ð²Ð°Ñ‚ Lorem Ipsum ÐºÐ°Ñ‚Ð¾ Ð¿Ñ€Ð¸Ð¼ÐµÑ€ÐµÐ½ Ñ‚ÐµÐºÑÑ‚Ð¾Ð² Ð¼Ð¾Ð´ÐµÐ» "Ð¿Ð¾ Ð¿Ð¾Ð´Ñ€Ð°Ð·Ð±Ð¸Ñ€Ð°Ð½Ðµ", Ð¿Ð¾Ñ€Ð°Ð´Ð¸ ÐºÐ¾ÐµÑ‚Ð¾ Ð¿Ñ€Ð¸ Ñ‚ÑŠÑ€ÑÐµÐ½Ðµ Ð½Ð° Ñ„Ñ€Ð°Ð·Ð°Ñ‚Ð° "lorem ipsum" Ð² Ð˜Ð½Ñ‚ÐµÑ€Ð½ÐµÑ‚ Ñ‰Ðµ Ð±ÑŠÐ´Ð°Ñ‚ Ð¾Ñ‚ÐºÑ€Ð¸Ñ‚Ð¸ Ð¼Ð½Ð¾Ð³Ð¾ ÑÐ°Ð¹Ñ‚Ð¾Ð²Ðµ Ð² Ð¿Ñ€Ð¾Ñ†ÐµÑ Ð½Ð° Ñ€Ð°Ð·Ñ€Ð°Ð±Ð¾Ñ‚ÐºÐ°. ÐÑÐºÐ¾Ð¹ Ð¾Ñ‚ Ñ‚ÐµÐ·Ð¸ ÑÐ°Ð¹Ñ‚Ð¾Ð²Ðµ Ð±Ð¸Ð²Ð°Ñ‚ Ð¿Ñ€Ð¾Ð¼ÐµÐ½ÑÐ½Ð¸ Ñ Ð²Ñ€ÐµÐ¼ÐµÑ‚Ð¾, Ð° Ð´Ñ€ÑƒÐ³Ð¸ Ð¿Ð¾ ÑÐ»ÑƒÑ‡Ð°Ð¹Ð½Ð¾ÑÑ‚ Ð¸Ð»Ð¸ Ð½Ð°Ñ€Ð¾Ñ‡Ð½Ð¾(Ð·Ð° Ð·Ð°Ð±Ð°Ð²Ð»ÐµÐ½Ð¸Ðµ Ð¸ Ð¿Ñ€.) Ð±Ð¸Ð²Ð°Ñ‚ Ð¾ÑÑ‚Ð°Ð²ÑÐ½Ð¸ Ð² Ñ‚Ð¾Ð·Ð¸ ÑÐ¸ Ð½ÐµÐ·Ð°Ð²ÑŠÑ€ÑˆÐµÐ½ Ð²Ð¸Ð´.\r\n\r\nÐ˜Ð·Ð²ÐµÑÑ‚ÐµÐ½ Ñ„Ð°ÐºÑ‚ Ðµ, Ñ‡Ðµ Ñ‡Ð¸Ñ‚Ð°Ñ‚ÐµÐ»Ñ Ð¾Ð±Ñ€ÑŠÑ‰Ð° Ð²Ð½Ð¸Ð¼Ð°Ð½Ð¸Ðµ Ð½Ð° ÑÑŠÐ´ÑŠÑ€Ð¶Ð°Ð½Ð¸ÐµÑ‚Ð¾, ÐºÐ¾ÐµÑ‚Ð¾ Ñ‡ÐµÑ‚Ðµ, Ð° Ð½Ðµ Ð½Ð° Ð¾Ñ„Ð¾Ñ€Ð¼Ð»ÐµÐ½Ð¸ÐµÑ‚Ð¾ Ð¼Ñƒ. Ð¡Ð²Ð¾Ð¹ÑÑ‚Ð²Ð¾Ñ‚Ð¾ Ð½Ð° Lorem Ipsum Ðµ, Ñ‡Ðµ Ð´Ð¾ Ð³Ð¾Ð»ÑÐ¼Ð° ÑÑ‚ÐµÐ¿ÐµÐ½ Ð¸Ð¼Ð° Ð½Ð¾Ñ€Ð¼Ð°Ð»Ð½Ð¾ Ñ€Ð°Ð·Ð¿Ñ€ÐµÐ´ÐµÐ»ÐµÐ½Ð¸Ðµ Ð½Ð° Ð±ÑƒÐºÐ²Ð¸Ñ‚Ðµ Ð¸ ÑÐµ Ñ‡ÐµÑ‚Ðµ Ð¿Ð¾-Ð»ÐµÑÐ½Ð¾, Ð·Ð° Ñ€Ð°Ð·Ð»Ð¸ÐºÐ° Ð¾Ñ‚ Ð½Ð¾Ñ€Ð¼Ð°Ð»ÐµÐ½ Ñ‚ÐµÐºÑÑ‚ Ð½Ð° Ð°Ð½Ð³Ð»Ð¸Ð¹ÑÐºÐ¸ ÐµÐ·Ð¸Ðº ÐºÐ°Ñ‚Ð¾ "Ð¢Ð¾Ð²Ð° Ðµ ÑÑŠÐ´ÑŠÑ€Ð¶Ð°Ð½Ð¸Ðµ, Ñ‚Ð¾Ð²Ð° Ðµ ÑÑŠÐ´ÑŠÑ€Ð¶Ð°Ð½Ð¸Ðµ". ÐœÐ½Ð¾Ð³Ð¾ ÑÐ¸ÑÑ‚ÐµÐ¼Ð¸ Ð·Ð° Ð¿ÑƒÐ±Ð»Ð¸ÐºÑƒÐ²Ð°Ð½Ðµ Ð¸ Ñ€ÐµÐ´Ð°ÐºÑ‚Ð¾Ñ€Ð¸ Ð½Ð° Ð£ÐµÐ± ÑÑ‚Ñ€Ð°Ð½Ð¸Ñ†Ð¸ Ð¸Ð·Ð¿Ð¾Ð»Ð·Ð²Ð°Ñ‚ Lorem Ipsum ÐºÐ°Ñ‚Ð¾ Ð¿Ñ€Ð¸Ð¼ÐµÑ€ÐµÐ½ Ñ‚ÐµÐºÑÑ‚Ð¾Ð² Ð¼Ð¾Ð´ÐµÐ» "Ð¿Ð¾ Ð¿Ð¾Ð´Ñ€Ð°Ð·Ð±Ð¸Ñ€Ð°Ð½Ðµ", Ð¿Ð¾Ñ€Ð°Ð´Ð¸ ÐºÐ¾ÐµÑ‚Ð¾ Ð¿Ñ€Ð¸ Ñ‚ÑŠÑ€ÑÐµÐ½Ðµ Ð½Ð° Ñ„Ñ€Ð°Ð·Ð°Ñ‚Ð° "lorem ipsum" Ð² Ð˜Ð½Ñ‚ÐµÑ€Ð½ÐµÑ‚ Ñ‰Ðµ Ð±ÑŠÐ´Ð°Ñ‚ Ð¾Ñ‚ÐºÑ€Ð¸Ñ‚Ð¸ Ð¼Ð½Ð¾Ð³Ð¾ ÑÐ°Ð¹Ñ‚Ð¾Ð²Ðµ Ð² Ð¿Ñ€Ð¾Ñ†ÐµÑ Ð½Ð° Ñ€Ð°Ð·Ñ€Ð°Ð±Ð¾Ñ‚ÐºÐ°. ÐÑÐºÐ¾Ð¹ Ð¾Ñ‚ Ñ‚ÐµÐ·Ð¸ ÑÐ°Ð¹Ñ‚Ð¾Ð²Ðµ Ð±Ð¸Ð²Ð°Ñ‚ Ð¿Ñ€Ð¾Ð¼ÐµÐ½ÑÐ½Ð¸ Ñ Ð²Ñ€ÐµÐ¼ÐµÑ‚Ð¾, Ð° Ð´Ñ€ÑƒÐ³Ð¸ Ð¿Ð¾ ÑÐ»ÑƒÑ‡Ð°Ð¹Ð½Ð¾ÑÑ‚ Ð¸Ð»Ð¸ Ð½Ð°Ñ€Ð¾Ñ‡Ð½Ð¾(Ð·Ð° Ð·Ð°Ð±Ð°Ð²Ð»ÐµÐ½Ð¸Ðµ Ð¸ Ð¿Ñ€.) Ð±Ð¸Ð²Ð°Ñ‚ Ð¾ÑÑ‚Ð°Ð²ÑÐ½Ð¸ Ð² Ñ‚Ð¾Ð·Ð¸ ÑÐ¸ Ð½ÐµÐ·Ð°Ð²ÑŠÑ€ÑˆÐµÐ½ Ð²Ð¸Ð´.\r\n\r\n                                                                                                                        ', 0, '                    my therot                    Ñ€Ñ„', 0, NULL, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, NULL),
(22, 'sdc', 4, '2017-05-27', ' \r\n      uhi  ', 0, ' \r\n        ewde', 0, ' \r\n        ded', 0, NULL, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, NULL),
(24, 'ssfcs', 1, '2017-05-29', ' \r\n        fdsfr                    refef                    ', 0, ' \r\n        er                                        ', 0, ' \r\nsdfcds                                        ', 0, NULL, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, NULL),
(27, 'my zaglavie', 4, '2017-07-01', NULL, 1, NULL, 1, NULL, 1, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'ads', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ' \r\n                    asd', 1, ' \r\n                    asd', 1, NULL, NULL, NULL, NULL, NULL, NULL, ' \r\n                    asdf', 1, NULL),
(34, 'my zagalvie e ', 4, NULL, NULL, NULL, ' asdsa\r\n                    adsa', 1, ' \r\n                    asdsdads', 1, NULL, NULL, NULL, ' \r\n                    asdsa', 1, NULL, NULL, ' \r\n                    asdsa', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'Ð¼ÑŠ Ð½ÐµÑ Ñ‚ÐµÑ…ÐµÐ¼Ðµ', 8, NULL, NULL, NULL, ' \r\n                    Ð´ÑÑ„Ð´Ñ', 1, ' \r\n                    ÑÐ´Ñ„Ð´Ð´ÑÑ„Ð´', 1, NULL, ' \r\n                    ÑÐµÑ„ÑÑ„Ð´', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ' \r\n                    ÑÐ´Ñ„Ð´Ñ', 1, ' \r\n                    Ð´ÑÑ„Ð´ÑÑ„', 1, NULL),
(36, 'asfds', 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ' \r\n                    ', 1, ' \r\n                    ', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'nova', 1, '2017-07-01', NULL, NULL, 'asdfds', NULL, NULL, NULL, NULL, 'asdsadfdsafsdf', 1, 'DRUGI sad', 1, 'asdesdfesdfdssd', 1, NULL, NULL, 'sadrsad', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'moqta nai nova tema', 1, '2017-07-02', NULL, NULL, ' \r\n                    vuvedenie tuk', 1, ' \r\n                    teoriq', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ' \r\n                    mnogo', 1, ' \r\n                    iztochnici', 1, NULL),
(39, 'Ð½Ð¾Ð²', 5, '2017-07-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ' \r\n                    ÐºÐ°ÐºÐ²Ð¾ Ð½Ð°ÑƒÑ‡Ð¸Ñ… Ð´ÐµÐ½Ñ', 1, ' \r\n                    Ñ…ÐµÐ»Ð»Ð¾ÑŠ Ð´ÐµÑŠÑ€', 1, ''),
(40, 'my', 5, '2017-07-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ' \r\n                    dfrgfd', 1, NULL, NULL, ' sdfds\r\n                    sdfds', 1, NULL, NULL, ''),
(41, 'temata', 1, '2017-07-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ' \r\n                    sdfds', 1, ' \r\n                    dsfs', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(43, 'sadadadaadsasassddasadssaddddddddddddddd', 1, '2017-07-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ' \r\n                    asd', 1, ' \r\n                    asd', 1, ' \r\n                    ads', 1, NULL, NULL, NULL, NULL, '16426437_1442354112455650_617237694_n.jpg'),
(44, 'zaglavieto', 1, '2017-07-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdfdsfgfds', NULL, NULL, NULL, NULL, NULL, ' \r\n                    dfg', 1, ' \r\n                    dfgfd', 1, 'pasted_image_at_2017_06_29_12_36_pm.png'),
(45, 'dftg', 1, '2017-07-03', NULL, NULL, ' \r\n                    rsdftg', 1, ' \r\n                    dfg', 1, NULL, ' \r\n                    fdg', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(46, 'fgdgfdgdffdfgd', 10, '2017-07-03', 'dsfds', NULL, 'dfgtgfd', 1, ' dfst', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(47, 'dgdfg', 7, '2017-07-03', ' \r\n                    aesfrdes', 1, ' \r\n                    dfgvdfgvsdfds', 1, 'dffdgfd', NULL, NULL, 'sefeds', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(48, 'moqta', 1, '2017-07-04', ' \r\n                    dsxfxd', 1, ' \r\n                    sdfds', 1, ' \r\n                    sdfcds', 1, NULL, 'dsfdsf', NULL, NULL, NULL, 'asdsadsa', NULL, NULL, NULL, 'sefesferes', 1, 'asdsazdsa', 1, ' \r\n                    dsfsfds', 1, 'easdfrdsfdsfds', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `electives`
--

CREATE TABLE `electives` (
  `id` int(11) NOT NULL,
  `title` varchar(128) DEFAULT NULL,
  `description` varchar(1024) DEFAULT NULL,
  `lecturer` varchar(128) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT '2017-04-03 21:28:09'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electives`
--

INSERT INTO `electives` (`id`, `title`, `description`, `lecturer`, `created_at`) VALUES
(1, 'Programming with Go', 'Let\'s learn Go', 'Nikolay Batchiyski', '2017-04-03 21:28:09'),
(2, 'AKDU', 'Let\'s Graduate', 'Svetlin Ivanov', '2017-04-03 21:28:09'),
(3, 'Web technologies', 'Let\'s learn the web', 'Milen Petrov', '2017-04-03 21:28:09'),
(4, 'haha', 'haha', 'haha', '2017-04-03 21:28:09'),
(5, 'haha', 'haha', 'haha', '2017-04-03 21:28:09'),
(6, 'haha', 'haha', 'haha', '2017-04-03 21:28:09'),
(7, 'haha', 'haha', 'haha', '2017-04-03 21:28:09'),
(8, 'ded', 'd', 'd', '2017-04-03 21:28:09'),
(9, 'd', 'd', 'd', '2017-04-03 21:28:09'),
(10, 'd', 'd', 'd', '2017-04-03 21:28:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Author`
--
ALTER TABLE `Author`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `Comment`
--
ALTER TABLE `Comment`
  ADD PRIMARY KEY (`id`,`author`),
  ADD KEY `author` (`author`);

--
-- Indexes for table `Document`
--
ALTER TABLE `Document`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `title` (`title`),
  ADD KEY `comment` (`comment`),
  ADD KEY `author` (`author`);

--
-- Indexes for table `electives`
--
ALTER TABLE `electives`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Author`
--
ALTER TABLE `Author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `Comment`
--
ALTER TABLE `Comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Document`
--
ALTER TABLE `Document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `electives`
--
ALTER TABLE `electives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Comment`
--
ALTER TABLE `Comment`
  ADD CONSTRAINT `Comment_ibfk_1` FOREIGN KEY (`author`) REFERENCES `Author` (`id`);

--
-- Constraints for table `Document`
--
ALTER TABLE `Document`
  ADD CONSTRAINT `Document_ibfk_1` FOREIGN KEY (`author`) REFERENCES `Author` (`id`),
  ADD CONSTRAINT `Document_ibfk_2` FOREIGN KEY (`comment`) REFERENCES `Comment` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
