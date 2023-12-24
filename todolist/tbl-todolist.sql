-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 15, 2023 at 02:01 AM
-- Server version: 10.10.2-MariaDB
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl-todolist`
--

DROP TABLE IF EXISTS `tbl-todolist`;
CREATE TABLE IF NOT EXISTS `tbl-todolist` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `item` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'PENDING',
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_completed` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=167 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl-todolist`
--

INSERT INTO `tbl-todolist` (`id`, `item`, `status`, `date_added`, `date_completed`) VALUES
(1, 'VSCODE REVIEW', 'COMPLETED', '2023-11-14 19:17:52', '2023-11-15 00:20:41'),
(2, 'PLAYING GAMES', 'COMPLETED', '2023-11-14 19:18:21', '2023-11-15 00:20:54'),
(4, 'UNDERSTANDING CODE', 'COMPLETED', '2023-11-14 19:18:43', NULL),
(5, 'EATING POPCORN', 'COMPLETED', '2023-11-14 19:18:54', '2023-11-15 00:29:59'),
(165, 'playing with freinds', 'COMPLETED', '2023-11-15 00:41:31', '2023-11-15 00:41:34'),
(164, 'play lol', 'COMPLETED', '2023-11-15 00:41:20', '2023-11-15 00:42:21'),
(163, 'play lol', 'COMPLETED', '2023-11-15 00:39:19', '2023-11-15 01:20:31'),
(153, 'playing computer', 'COMPLETED', '2023-11-14 22:06:40', '2023-11-15 00:20:39'),
(155, 'playing computer', 'COMPLETED', '2023-11-14 22:07:36', '2023-11-15 00:39:11'),
(156, 'playing computer', 'COMPLETED', '2023-11-14 22:07:59', '2023-11-15 00:39:11'),
(157, 'playing computer', 'COMPLETED', '2023-11-14 22:08:05', '2023-11-15 00:39:12'),
(159, 'trying query', 'COMPLETED', '2023-11-14 22:09:41', '2023-11-15 00:37:03'),
(162, 'playing with freinds', '', '2023-11-14 22:32:15', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
