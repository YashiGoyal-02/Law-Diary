-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2023 at 06:36 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawdiary`
--

-- --------------------------------------------------------

--
-- Table structure for table `casedate`
--

CREATE TABLE `casedate` (
  `id` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `caseid` int(10) NOT NULL,
  `caseDate` date NOT NULL,
  `stage` varchar(200) NOT NULL,
  `feepaid` int(10) NOT NULL,
  `magistrateId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `casedate`
--

INSERT INTO `casedate` (`id`, `userid`, `caseid`, `caseDate`, `stage`, `feepaid`, `magistrateId`) VALUES
(1, 1, 1, '2023-05-05', 'Filed', 0, 1),
(2, 1, 1, '2023-05-20', '', 0, 1),
(3, 1, 2, '2023-05-02', 'Filed', 0, 2),
(4, 1, 2, '2023-05-19', 'Notice', 0, 1),
(5, 1, 2, '2023-08-24', '', 0, 1),
(6, 1, 3, '2023-01-02', 'Filed', 500, 1),
(7, 1, 3, '2023-01-05', 'Evidence', 1000, 7),
(9, 1, 3, '2023-01-16', '', 0, 7),
(10, 1, 3, '2023-01-23', '', 500, 1),
(11, 1, 3, '2023-01-27', '', 0, 1),
(12, 1, 3, '2023-02-06', 'Defendant Evidence', 0, 1),
(13, 1, 3, '2023-02-15', 'Defendant Evidence', 0, 1),
(14, 1, 3, '2023-02-23', 'Defendant Evidence', 0, 1),
(15, 1, 3, '2023-03-06', 'Defendant Evidence', 0, 1),
(16, 1, 3, '2023-03-16', 'Defendant Evidence', 0, 1),
(17, 1, 3, '2023-03-28', 'To give Document', 0, 1),
(18, 1, 3, '2023-04-13', 'To give Document', 0, 1),
(19, 1, 3, '2023-07-19', 'Argument', 0, 1),
(20, 1, 4, '2023-01-02', 'Filed', 0, 2),
(21, 1, 4, '2023-02-16', 'Consideration', 0, 2),
(22, 1, 4, '2023-04-20', 'Consideration', 0, 2),
(23, 1, 4, '2023-07-13', 'Replication', 0, 4),
(25, 1, 5, '2023-01-04', 'Filed', 1000, 1),
(26, 1, 5, '2023-01-12', 'Defence', 0, 0),
(28, 1, 6, '2023-01-03', 'Filed', 0, 3),
(29, 1, 6, '2023-01-25', 'Argument', 0, 3),
(30, 1, 6, '2023-03-15', 'Argument', 0, 3),
(31, 1, 6, '2023-05-24', '', 0, 3),
(32, 1, 6, '2023-08-02', '', 0, 1),
(33, 1, 7, '2023-01-04', 'Filed', 0, 1),
(34, 1, 7, '2023-01-25', 'Plaintiff Evidence', 0, 1),
(35, 1, 7, '2023-03-01', 'Plaintiff Evidence', 0, 4),
(36, 1, 7, '2023-05-10', 'Respondent Evidence', 0, 4),
(37, 1, 8, '2023-01-06', 'Filed', 0, 5),
(38, 1, 8, '2023-01-24', '', 0, 5),
(39, 1, 8, '2023-01-25', 'Order', 0, 5),
(40, 1, 8, '2023-01-27', '', 0, 5),
(41, 1, 8, '2023-02-24', 'Order', 0, 5),
(42, 1, 9, '2023-01-07', 'Filed', 0, 1),
(43, 1, 9, '2023-02-01', 'Argument', 0, 1),
(44, 1, 9, '2023-02-13', 'Argument', 0, 2),
(45, 1, 9, '2023-02-16', 'Argument', 0, 2),
(46, 1, 9, '2023-03-03', 'Defendant Evidence', 0, 2),
(47, 1, 9, '2023-03-31', 'Defendant Evidence', 0, 2),
(48, 1, 9, '2023-04-01', '', 0, 2),
(49, 1, 10, '2023-01-07', 'Filed', 1000, 1),
(50, 1, 10, '2023-01-18', 'Plaintiff Evidence', 0, 1),
(51, 1, 10, '2023-02-01', 'Defendant Evidence', 0, 5),
(52, 1, 10, '2023-02-15', 'Defendant Evidence', 0, 5),
(53, 1, 10, '2023-03-02', 'Defendant Evidence', 0, 5),
(54, 1, 10, '2023-03-31', 'Defendant Evidence', 0, 5),
(55, 1, 10, '2023-04-12', 'Defendant Evidence', 0, 5),
(56, 1, 10, '2023-04-25', 'Defendant Evidence', 0, 5),
(57, 1, 10, '2023-05-10', 'Defendant Evidence', 0, 5),
(58, 1, 10, '2023-07-06', '', 0, 5),
(59, 1, 11, '2023-01-09', 'Filed', 0, 1),
(60, 1, 11, '2023-02-15', 'Consideration', 0, 1),
(61, 1, 11, '2023-04-06', 'Reply', 0, 1),
(62, 1, 11, '2023-07-14', '', 0, 1),
(63, 1, 12, '2023-01-09', 'Filed', 0, 1),
(64, 1, 12, '2023-04-06', 'Argument', 0, 1),
(65, 1, 12, '2023-05-02', '', 0, 1),
(66, 1, 12, '2023-05-12', '', 0, 1),
(67, 1, 12, '2023-05-13', '', 0, 1),
(68, 1, 13, '2023-01-10', 'Filed', 0, 1),
(69, 1, 13, '2023-04-11', '', 0, 1),
(70, 1, 14, '2023-01-10', 'Filed', 0, 2),
(71, 1, 14, '2023-02-13', 'Order', 0, 2),
(72, 1, 14, '2023-03-01', 'Reply', 0, 2),
(73, 1, 14, '2023-03-31', 'Reply', 0, 2),
(74, 1, 14, '2023-04-19', 'Reply', 0, 2),
(75, 1, 14, '2023-05-08', 'Plaintiff Evidence', 0, 2),
(76, 1, 14, '2023-08-01', 'Plaintiff Evidence', 0, 2),
(77, 1, 15, '2023-01-10', 'Filed', 500, 3),
(78, 1, 15, '2023-01-11', '', 450, 3),
(79, 1, 15, '2023-01-18', 'Argument', 475, 3),
(80, 1, 15, '2023-03-15', '', 325, 3),
(81, 1, 16, '2023-01-11', 'Filed', 0, 5),
(82, 1, 16, '2023-03-15', 'Reply', 0, 5),
(83, 1, 16, '2023-05-05', '', 0, 5),
(84, 1, 17, '2023-01-11', 'Filed', 0, 5),
(85, 1, 17, '2023-03-15', 'Lower Court Record', 0, 5),
(86, 1, 17, '2023-05-10', 'Consideration', 0, 5),
(87, 1, 17, '2023-08-02', '', 0, 5),
(88, 1, 18, '2023-01-11', 'Filed', 0, 7),
(89, 1, 19, '2023-01-11', 'Filed', 0, 6),
(90, 1, 19, '2023-02-01', '', 0, 6),
(91, 1, 19, '2023-03-15', 'Plaintiff Evidence', 0, 6),
(92, 1, 19, '2023-05-10', 'Plaintiff Evidence', 0, 6),
(93, 1, 19, '2023-07-05', 'Plaintiff Evidence', 0, 6),
(94, 1, 20, '2023-01-11', 'Filed', 0, 5),
(95, 1, 20, '2023-03-15', 'Argument', 0, 5),
(96, 1, 20, '2023-04-19', '', 0, 5),
(97, 1, 21, '2023-01-12', 'Filed', 0, 7),
(99, 1, 21, '2023-05-04', '', 0, 1),
(100, 1, 21, '2023-06-09', '', 0, 2),
(101, 1, 22, '2023-01-12', 'Filed', 0, 2),
(102, 1, 22, '2023-01-20', '', 0, 2),
(103, 1, 23, '2023-01-12', 'Filed', 0, 1),
(104, 1, 23, '2023-02-15', 'Defendant Evidence', 0, 1),
(105, 1, 23, '2023-04-03', '', 0, 1),
(106, 1, 24, '2023-01-12', 'Filed', 0, 10),
(108, 1, 24, '2023-01-24', 'Reply', 0, 1),
(109, 1, 24, '2023-02-08', '', 0, 1),
(110, 1, 24, '2023-02-15', '', 0, 1),
(111, 1, 24, '2023-02-28', 'Argument', 0, 1),
(112, 1, 24, '2023-03-04', '', 0, 1),
(113, 1, 24, '2023-03-15', '', 0, 1),
(114, 1, 25, '2023-01-11', 'Filed', 0, 6),
(115, 1, 25, '2023-02-01', 'Prosecution Evidence', 0, 6),
(116, 1, 25, '2023-03-15', 'Plaintiff Evidence', 0, 6),
(117, 1, 25, '2023-05-10', 'Plaintiff Evidence', 0, 6),
(118, 1, 25, '2023-07-05', 'Plaintiff Evidence', 0, 6),
(119, 1, 26, '2023-01-13', 'Filed', 0, 2),
(120, 1, 26, '2023-04-03', '', 0, 2),
(121, 1, 27, '2023-01-13', 'Filed', 0, 1),
(122, 1, 27, '2023-03-21', '', 0, 1),
(123, 1, 28, '2023-01-13', 'Filed', 0, 2),
(124, 1, 28, '2023-01-19', 'Plaintiff Evidence', 0, 2),
(125, 1, 28, '2023-04-20', '', 0, 2),
(126, 1, 29, '2023-01-16', 'Filed', 0, 2),
(127, 1, 29, '2023-04-29', '', 0, 2),
(128, 1, 30, '2023-01-16', 'Filed', 0, 1),
(129, 1, 30, '2023-02-22', '', 0, 1),
(130, 1, 30, '2023-03-24', '', 0, 1),
(131, 1, 31, '2023-01-16', 'Filed', 0, 1),
(132, 1, 31, '2023-04-17', '', 0, 1),
(133, 1, 32, '2023-01-16', 'Filed', 0, 1),
(134, 1, 32, '2023-03-17', '', 0, 1),
(135, 1, 33, '2023-01-16', 'Filed', 0, 1),
(136, 1, 33, '2023-04-10', '', 0, 1),
(137, 1, 34, '2023-01-17', 'Filed', 0, 2),
(138, 1, 34, '2023-02-06', 'Reply', 0, 2),
(139, 1, 34, '2023-04-25', '', 0, 2),
(140, 1, 35, '2023-01-17', 'Filed', 0, 1),
(141, 1, 35, '2023-05-01', '', 0, 1),
(142, 1, 36, '2023-01-17', 'Filed', 0, 2),
(143, 1, 36, '2023-02-14', 'Consideration', 0, 2),
(144, 1, 37, '2023-01-17', 'Filed', 0, 7),
(145, 1, 37, '2023-01-18', 'Consideration', 0, 7),
(146, 1, 37, '2023-01-21', 'Consideration', 0, 7),
(147, 1, 37, '2023-01-23', 'Order', 0, 7),
(148, 1, 37, '2023-03-27', '', 0, 7),
(149, 1, 38, '2023-01-18', 'Filed', 0, 2),
(150, 1, 38, '2023-04-20', '', 0, 2),
(151, 1, 39, '2023-01-18', 'Reply', 0, 1),
(152, 1, 39, '2023-03-31', '', 0, 1),
(153, 1, 40, '2023-01-18', 'Filed', 0, 6),
(154, 1, 40, '2023-02-22', 'Consideration', 0, 6),
(155, 1, 40, '2023-02-23', 'Consideration', 0, 6),
(156, 1, 40, '2023-04-12', '', 0, 6),
(157, 1, 41, '2023-01-18', 'Filed', 0, 6),
(158, 1, 41, '2023-01-25', 'Argument', 0, 6),
(159, 1, 41, '2023-03-14', '', 0, 6),
(160, 1, 42, '2023-01-18', 'Filed', 0, 8),
(161, 1, 42, '2023-02-21', 'Reply', 0, 8),
(162, 1, 42, '2023-05-05', '', 0, 8),
(163, 1, 43, '2023-01-18', 'Filed', 0, 4),
(164, 1, 43, '2023-03-15', '', 0, 4),
(165, 1, 44, '2023-01-19', 'Filed', 0, 2),
(166, 1, 44, '2023-04-03', '', 0, 2),
(167, 1, 45, '2023-01-19', 'Filed', 0, 2),
(168, 1, 45, '2023-02-17', 'Plaintiff Evidence', 0, 2),
(169, 1, 45, '2023-03-23', '', 0, 2),
(170, 1, 46, '2023-01-19', 'Filed', 0, 1),
(171, 1, 46, '2023-05-08', '', 0, 1),
(172, 1, 47, '2023-01-19', 'Filed', 0, 1),
(173, 1, 48, '2023-01-19', 'Filed', 0, 1),
(174, 1, 48, '2023-03-14', '', 0, 1),
(175, 1, 49, '2023-01-19', 'Filed', 0, 9),
(176, 1, 49, '2023-02-21', 'Defendant Evidence', 0, 9),
(177, 1, 49, '2023-04-11', '', 0, 9),
(178, 1, 50, '2023-01-20', 'Filed', 0, 1),
(179, 1, 50, '2023-07-17', '', 0, 1),
(180, 1, 51, '2023-01-20', 'Filed', 0, 2),
(181, 1, 51, '2023-03-28', '', 0, 2),
(182, 1, 52, '2023-01-20', 'Allowed', 0, 2),
(183, 1, 53, '2023-01-21', 'Notice', 0, 7),
(184, 1, 53, '2023-03-01', '', 0, 7),
(185, 1, 53, '2023-04-21', '', 0, 7),
(186, 1, 54, '2023-01-23', 'Filed', 0, 2),
(187, 1, 54, '2023-06-02', '', 0, 2),
(188, 1, 55, '2023-01-23', 'Filed', 0, 10),
(189, 1, 55, '2023-02-28', 'Argument', 0, 10),
(190, 1, 55, '2023-03-16', '', 0, 10),
(191, 1, 56, '2023-01-23', 'Filed', 0, 1),
(192, 1, 56, '2023-05-01', '', 0, 1),
(193, 1, 57, '2023-01-24', 'Filed', 0, 3),
(194, 1, 57, '2023-01-27', 'Allowed', 0, 3),
(195, 1, 58, '2023-01-24', 'Filed', 0, 2),
(196, 1, 58, '2023-03-16', '', 0, 2),
(197, 1, 59, '0002-01-25', '', 0, 3),
(198, 1, 59, '2023-01-12', 'Filed', 0, 3),
(199, 1, 59, '2023-01-25', 'Defendant Evidence', 0, 3),
(200, 1, 59, '2023-02-14', 'Bailable Warrant', 0, 3),
(202, 1, 59, '2023-03-03', '', 0, 3),
(203, 1, 60, '2023-01-12', 'Filed', 0, 1),
(204, 1, 60, '2023-03-23', '', 0, 1),
(205, 1, 61, '2023-01-25', 'Filed', 0, 5),
(206, 1, 61, '2023-04-05', '', 0, 5),
(207, 1, 62, '2023-01-25', 'Filed', 0, 9),
(208, 1, 62, '2023-03-09', '', 0, 9),
(209, 1, 63, '2023-01-23', 'Filed', 0, 2),
(210, 1, 63, '2023-02-04', '', 0, 2),
(211, 1, 63, '2023-04-03', '', 0, 2),
(212, 1, 64, '2023-01-23', 'Filed', 0, 2),
(213, 1, 64, '2023-01-30', '', 0, 2),
(214, 1, 64, '2023-02-13', 'Defendant Evidence', 0, 2),
(215, 1, 64, '2023-02-20', 'Plaintiff Evidence', 0, 2),
(216, 1, 64, '2023-02-22', 'Argument', 0, 2),
(217, 1, 64, '2023-02-23', '', 0, 2),
(218, 1, 65, '2023-01-23', 'Filed', 1000, 1),
(219, 1, 65, '2023-04-06', '', 0, 1),
(220, 1, 66, '0002-02-27', '', 0, 1),
(221, 1, 66, '2023-01-30', 'Filed', 0, 1),
(222, 1, 66, '2023-02-02', '', 0, 1),
(223, 1, 66, '2023-02-03', '', 0, 1),
(224, 1, 66, '2023-02-27', 'Consideration', 0, 1),
(225, 1, 66, '2023-04-20', '', 0, 1),
(226, 1, 67, '2023-01-31', 'Filed', 0, 1),
(227, 1, 67, '2023-05-05', '', 0, 1),
(228, 1, 68, '2023-01-31', 'Filed', 0, 2),
(229, 1, 68, '2023-02-20', 'Argument', 0, 2),
(230, 1, 68, '2023-03-04', '', 0, 2),
(231, 1, 69, '2023-01-31', 'Filed', 0, 1),
(232, 1, 69, '2023-02-23', 'Report', 0, 1),
(233, 1, 69, '2023-05-19', '', 0, 1),
(234, 1, 70, '2023-01-31', 'Filed', 0, 2),
(235, 1, 70, '2023-03-20', '', 0, 2),
(236, 1, 71, '2023-02-01', 'Filed', 0, 2),
(237, 1, 71, '2023-03-31', '', 0, 2),
(238, 1, 72, '2023-02-01', 'Filed', 0, 2),
(239, 1, 72, '2023-03-31', '', 0, 2),
(240, 1, 73, '2023-02-01', 'Filed', 0, 2),
(241, 1, 73, '2023-05-17', '', 0, 2),
(242, 1, 74, '2023-02-01', 'Filed', 0, 3),
(243, 1, 74, '2023-02-14', 'Notice', 0, 3),
(244, 1, 74, '2023-02-22', '', 0, 3),
(245, 1, 74, '2023-03-15', '', 0, 3),
(246, 1, 75, '2023-02-02', 'Filed', 0, 1),
(247, 1, 75, '2023-04-27', '', 0, 1),
(248, 1, 76, '2023-02-02', 'Filed', 0, 1),
(249, 1, 76, '2023-07-24', '', 0, 1),
(250, 1, 77, '2023-02-03', 'Filed', 0, 2),
(251, 1, 77, '2023-04-17', '', 0, 2),
(252, 1, 78, '2023-02-03', 'Filed', 0, 1),
(253, 1, 78, '2023-02-07', 'Bailable Warrant', 0, 1),
(254, 1, 78, '2023-05-03', '', 0, 1),
(255, 1, 79, '2023-02-03', 'Filed', 0, 1),
(256, 1, 79, '2023-07-24', '', 0, 1),
(257, 1, 80, '2023-02-03', 'Filed', 0, 7),
(258, 1, 80, '2023-02-04', '', 0, 7),
(259, 1, 80, '2023-02-13', '', 0, 7),
(260, 1, 80, '2023-03-22', '', 0, 7),
(261, 1, 81, '2023-02-06', 'Filed', 0, 2),
(262, 1, 81, '2023-06-09', '', 0, 2),
(263, 1, 82, '2023-02-06', 'Filed', 0, 2),
(264, 1, 82, '2023-04-01', '', 0, 2),
(265, 1, 83, '2023-02-06', 'Filed', 0, 2),
(266, 1, 83, '2023-06-03', '', 0, 2),
(267, 1, 84, '2023-02-06', '', 0, 1),
(268, 1, 84, '2023-02-07', 'Filed', 0, 1),
(269, 1, 84, '2023-04-10', '', 0, 1),
(270, 1, 85, '2023-02-07', 'Filed', 0, 2),
(271, 1, 85, '2023-02-14', 'Notice', 0, 2),
(272, 1, 85, '2023-02-16', '', 0, 2),
(273, 1, 85, '2023-03-13', '', 0, 2),
(274, 1, 86, '2023-02-07', 'Filed', 0, 1),
(275, 1, 86, '2023-03-02', '', 0, 1),
(276, 1, 86, '2023-05-22', '', 0, 1),
(277, 1, 87, '2023-02-07', 'Filed', 0, 1),
(278, 1, 87, '2023-03-07', '', 0, 1),
(279, 1, 88, '2023-02-08', 'Filed', 0, 11),
(280, 1, 88, '2023-05-11', '', 0, 11),
(281, 1, 89, '2023-02-09', 'Filed', 0, 5),
(282, 1, 89, '2023-03-15', '', 0, 5),
(283, 1, 90, '2023-02-10', 'Filed', 0, 2),
(284, 1, 90, '2023-07-14', '', 0, 2),
(285, 1, 91, '2023-01-27', 'Filed', 0, 8),
(286, 1, 91, '2023-02-10', '', 0, 8),
(287, 1, 91, '2023-02-27', '', 0, 8),
(288, 1, 91, '2023-03-23', '', 0, 8),
(289, 1, 92, '2023-02-13', 'Filed', 0, 1),
(290, 1, 92, '2023-09-25', '', 0, 1),
(291, 1, 93, '2023-02-13', 'Filed', 0, 1),
(292, 1, 93, '2023-10-09', '', 0, 1),
(293, 1, 94, '2023-02-14', 'Filed', 0, 2),
(294, 1, 94, '2023-04-24', '', 0, 2),
(295, 1, 95, '2023-02-15', 'Filed', 0, 12),
(296, 1, 95, '2023-04-11', '', 0, 12),
(297, 1, 96, '2023-02-15', 'Filed', 0, 12),
(298, 1, 96, '2023-04-11', '', 0, 12),
(299, 1, 97, '2023-02-15', 'Filed', 0, 11),
(300, 1, 97, '2023-05-11', '', 0, 11),
(301, 1, 98, '2023-02-15', 'Filed', 0, 7),
(302, 1, 98, '2023-04-19', '', 0, 7),
(303, 1, 99, '2023-02-15', 'Report', 0, 5),
(304, 1, 99, '2023-03-01', 'Report', 0, 5),
(305, 1, 99, '2023-03-18', '', 0, 5),
(306, 1, 100, '2023-02-17', 'Filed', 0, 2),
(307, 1, 100, '2023-07-18', '', 0, 2),
(308, 1, 101, '2023-02-17', 'Filed', 0, 2),
(309, 1, 101, '2023-04-12', '', 0, 2),
(310, 1, 102, '2023-02-17', 'Filed', 0, 2),
(311, 1, 102, '2023-03-21', '', 0, 2),
(312, 1, 103, '2023-02-20', 'Filed', 0, 2),
(313, 1, 103, '2023-07-15', '', 0, 2),
(314, 1, 104, '2023-02-20', 'Filed', 0, 1),
(315, 1, 104, '2023-04-18', '', 0, 1),
(316, 1, 105, '2023-02-21', 'Filed', 0, 2),
(317, 1, 105, '2023-05-16', '', 0, 2),
(318, 1, 106, '2023-02-21', 'Filed', 0, 1),
(319, 1, 106, '2023-05-26', '', 0, 1),
(320, 1, 107, '2023-02-22', 'Argument', 0, 10),
(321, 1, 107, '2023-03-14', '', 0, 10),
(322, 1, 108, '2023-02-22', 'Reply', 0, 5),
(324, 1, 109, '2023-02-22', 'Reply', 0, 1),
(325, 1, 109, '2023-05-10', '', 0, 1),
(326, 1, 110, '2023-02-22', 'Notice', 0, 12),
(327, 1, 110, '2023-03-01', 'Notice', 0, 12),
(328, 1, 110, '2023-05-13', '', 0, 12),
(329, 1, 111, '2023-02-23', 'Filed', 0, 2),
(330, 1, 111, '2023-07-28', '', 0, 2),
(331, 1, 112, '2023-02-23', 'Filed', 0, 1),
(332, 1, 112, '2023-04-10', '', 0, 1),
(333, 1, 113, '2023-02-23', 'Filed', 0, 2),
(334, 1, 113, '2023-04-25', '', 0, 2),
(335, 1, 114, '2023-02-23', 'Filed', 0, 1),
(336, 1, 114, '2023-05-19', '', 0, 1),
(337, 1, 115, '2023-02-24', 'Filed', 0, 7),
(338, 1, 115, '2023-03-24', '', 0, 7),
(339, 1, 116, '2023-02-24', 'Filed', 0, 1),
(340, 1, 116, '2023-08-18', '', 0, 1),
(341, 1, 117, '2023-01-09', 'Filed', 0, 11),
(342, 1, 117, '2023-02-24', 'Correct Address', 0, 11),
(343, 1, 117, '2023-04-05', '', 0, 11),
(344, 1, 118, '2023-02-27', 'Filed', 0, 1),
(345, 1, 118, '2023-10-23', '', 0, 1),
(346, 1, 119, '2023-02-27', 'Filed', 0, 5),
(347, 1, 119, '2023-05-24', '', 0, 5),
(348, 1, 120, '2023-02-28', 'Written Statement', 0, 1),
(349, 1, 120, '2023-05-16', '', 0, 1),
(350, 1, 121, '2023-02-28', 'Reply', 0, 1),
(351, 1, 121, '2023-05-16', '', 0, 1),
(352, 1, 122, '2023-03-01', 'Filed', 0, 7),
(353, 1, 122, '2023-03-04', '', 0, 7),
(354, 1, 123, '2023-03-01', 'Filed', 0, 7),
(355, 1, 123, '2023-05-12', '', 0, 7),
(356, 1, 124, '2023-03-01', 'Filed', 0, 1),
(357, 1, 124, '2023-05-22', '', 0, 1),
(358, 1, 125, '2023-03-01', 'Filed', 0, 3),
(359, 1, 125, '2023-03-15', '', 0, 3),
(360, 1, 126, '2023-01-12', 'Filed', 0, 2),
(361, 1, 126, '2023-03-02', 'Respondent Evidence', 0, 2),
(362, 1, 126, '2023-03-31', '', 0, 2),
(363, 1, 127, '2023-03-02', 'Filed', 0, 1),
(364, 1, 127, '2023-03-29', '', 0, 1),
(365, 1, 128, '2023-03-03', '313 Cr.P.C.', 0, 1),
(366, 1, 128, '2023-04-10', '', 0, 1),
(367, 1, 129, '2023-03-03', 'Filed', 0, 2),
(368, 1, 129, '2023-07-25', '', 0, 2),
(375, 1, 5, '2023-01-18', '', 0, 8),
(383, 1, 3, '2023-01-12', '', 0, 7),
(398, 1, 5, '2023-01-15', '', 0, 0),
(400, 1, 21, '2023-03-16', '', 0, 7),
(405, 1, 24, '2023-01-19', '', 0, 10),
(408, 1, 36, '2023-06-22', '', 0, 2),
(409, 1, 59, '2023-03-01', '', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `caseNum` int(15) NOT NULL,
  `userId` int(15) NOT NULL,
  `firstParty` varchar(500) NOT NULL,
  `secondParty` varchar(500) NOT NULL,
  `whomRepresent` varchar(400) NOT NULL,
  `oppCouncil` varchar(5000) NOT NULL,
  `oppCouncilPhn` varchar(20) NOT NULL,
  `startedOn` date NOT NULL,
  `type` varchar(500) NOT NULL,
  `courtType` varchar(500) NOT NULL,
  `magistrate` int(15) NOT NULL,
  `remarks` varchar(5000) NOT NULL,
  `isTransferred` varchar(30) NOT NULL,
  `isDecided` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`caseNum`, `userId`, `firstParty`, `secondParty`, `whomRepresent`, `oppCouncil`, `oppCouncilPhn`, `startedOn`, `type`, `courtType`, `magistrate`, `remarks`, `isTransferred`, `isDecided`, `status`) VALUES
(1, 1, 'Chand Tara', 'Gurmukh Singh', 'Defendant', 'P C Sharma', '7015278894', '2023-05-05', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(2, 1, 'Gurmukh Singh', 'Raj Kumari', 'Plaintiff', 'P C Sharma', '7015278894', '2023-05-02', 'Civil', 'Lower Court', 2, '', '0', '0', '-'),
(3, 1, 'Mohinder', 'Ram Nath', 'Defendant', 'P C Sharma', '7015278894', '2023-01-02', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(4, 1, 'Varinder Sood', 'Central Bank of India', 'Plaintiff', 'Rajeev Goyal', '9999999999', '2023-01-02', 'Civil', 'Lower Court', 2, '', '0', '0', '-'),
(5, 1, 'State of Haryana', 'Balwant', 'Respondent', 'Public Prosecutor', '9999999999', '2023-01-05', 'Criminal', 'Lower Court', 1, '', '0', '0', '-'),
(6, 1, 'Harnek', 'Balwant', 'Plaintiff', 'Adv. Kamal Sharma', '9999999999', '2023-01-03', 'Civil', 'Lower Court', 3, '', '0', '0', '-'),
(7, 1, 'Anand Prakash', 'State of Haryana', 'Plaintiff', 'P C Sharma', '9999999999', '2023-01-04', 'Criminal', 'Lower Court', 4, '', '0', '0', '-'),
(8, 1, 'Yasodha', 'Ram Giri', 'Plaintiff', 'P C Sharma', '9999999999', '2023-01-06', 'Civil', 'Lower Court', 5, '', '0', '0', '-'),
(9, 1, 'Sukhwinder', 'G.P.', 'Defendent', 'P C Sharma', '9999999999', '2023-01-07', 'Civil', 'Lower Court', 2, '', '0', '0', '-'),
(10, 1, 'Babita', 'Virender', 'Plaintiff', 'P C Sharma', '9999999999', '2023-01-07', 'Civil', 'Lower Court', 5, '', '0', '0', '-'),
(11, 1, 'Roshan Lal', 'Balbir', 'Defendent', 'P C Sharma', '9999999999', '2023-01-09', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(12, 1, 'Narendar Pal', 'Acchar Pal', 'Plaintiff', 'P C Sharma', '9999999999', '2023-01-09', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(13, 1, 'Sudesh Rani', 'Maya Devi', 'Defendent', 'P C Sharma', '', '2023-01-10', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(14, 1, 'Jarnail Singh', 'Pritam Singh', 'Defendent', 'P C Sharma', '', '2023-01-10', 'Civil', 'Lower Court', 2, '', '0', '0', '-'),
(15, 1, 'Harnek', 'Balwant', 'Defendent', 'P C Sharma', '', '2023-01-10', 'Civil', 'Lower Court', 3, '', '0', '0', '-'),
(16, 1, 'Gurdhian', 'State of Haryana', 'Plaintiff', 'Rajeev Goyal', '', '2023-01-11', 'Civil', 'Lower Court', 5, '', '0', '0', '-'),
(17, 1, 'Narinder Singh', 'Narinder Pal', 'Defendent', 'P C Sharma', '', '2023-01-11', 'Civil', 'Lower Court', 5, '', '0', '0', '-'),
(18, 1, 'Tara Devi', 'Ifco Tokio', 'Plaintiff', 'P C Sharma', '', '2023-01-11', 'Civil', 'Lower Court', 7, '', '0', '0', '-'),
(19, 1, 'Neelam Kaur', 'Social Welfare', 'Plaintiff', 'P C Sharma', '', '2023-01-11', 'Civil', 'Lower Court', 6, '', '0', '0', '-'),
(20, 1, 'Seema', 'State of Haryana', 'Respondent', 'Rajeev Goyal', '', '2023-01-11', 'Criminal', 'Lower Court', 5, '', '0', '0', '-'),
(21, 1, 'Sahil', 'Vipin', 'Plaintiff', 'Rajeev Goyal', '', '2023-01-12', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(22, 1, 'Babu Ram', 'Union of India', 'Defendent', 'P C Sharma', '', '2023-01-12', 'Civil', 'Lower Court', 2, '', '0', '0', '-'),
(23, 1, 'Mohinder', 'Bant Ram', 'Plaintiff', 'P C Sharma', '', '2023-01-12', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(24, 1, 'Harnam Giri', 'State of Haryana', 'Plaintiff', 'P C Sharma', '', '2023-01-12', 'Civil', 'Lower Court', 5, '', '0', '0', '-'),
(25, 1, 'Tara Devi', 'Ifco Tokio', 'Plaintiff', 'Adv. Kamal Sharma', '', '2023-01-11', 'Civil', 'Lower Court', 6, '', '0', '0', '-'),
(26, 1, 'Rishi Pal', 'Harpal', 'Defendent', 'P C Sharma', '', '2023-01-13', 'Civil', 'Lower Court', 2, '', '0', '0', '-'),
(27, 1, 'Preeta', 'Balbir', 'Defendent', 'Adv. Kamal Sharma', '', '2023-01-13', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(28, 1, 'Narinder Singh', 'Baldev', 'Plaintiff', 'P C Sharma', '', '2023-01-13', 'Civil', 'Lower Court', 2, '', '0', '0', '-'),
(29, 1, 'Sanjay', 'Nisha', 'Defendent', 'Adv. Kamal Sharma', '', '2023-01-16', 'Civil', 'Lower Court', 2, '', '0', '0', '-'),
(30, 1, 'Subhash', 'Vandana', 'Defendent', 'Rajeev Goyal', '', '2023-01-16', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(31, 1, 'Gurbax Singh', 'Hans Raj', 'Plaintiff', 'Rajeev Goyal', '', '2023-01-16', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(32, 1, 'State of Haryana', 'Narendar', 'Respondent', 'P C Sharma', '', '2023-01-16', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(33, 1, 'Ajay', 'Vijay', 'Plaintiff', 'P C Sharma', '', '2023-01-16', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(34, 1, 'Canara Bank', 'A.K.Sondhi', 'Respondent', 'P C Sharma', '', '2023-01-17', 'Criminal', 'Lower Court', 2, '', '0', '0', '-'),
(35, 1, 'State of Haryana', 'Charanjit Mukul', 'Plaintiff', 'P C Sharma', '', '2023-01-17', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(36, 1, 'Anita Bedi', 'Rajender', 'Defendent', 'Rajeev Goyal', '', '2023-01-17', 'Civil', 'Lower Court', 2, '', '0', '0', '-'),
(37, 1, 'Mandakini', 'Ashok', 'Plaintiff', 'P C Sharma', '', '2023-01-17', 'Civil', 'Lower Court', 7, '', '0', '0', '-'),
(38, 1, 'State of Haryana', 'Bimla Kondal', 'Plaintiff', 'P C Sharma', '', '2023-01-18', 'Civil', 'Lower Court', 2, '', '0', '0', '-'),
(39, 1, 'Anita Goyal', 'Harpreet', 'Defendent', 'Adv. Kamal Sharma', '', '2023-01-18', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(40, 1, 'Bhushan Lal', 'Bajaj Finance', 'Plaintiff', 'Rajeev Goyal', '', '2023-01-18', 'Civil', 'Lower Court', 6, '', '0', '0', '-'),
(41, 1, 'Subhash', 'DPS', 'Defendent', 'P C Sharma', '', '2023-01-18', 'Civil', 'Lower Court', 6, '', '0', '0', '-'),
(42, 1, 'Seema', 'Dinesh', 'Plaintiff', 'Rajeev Goyal', '', '2023-01-18', 'Civil', 'Lower Court', 8, '', '0', '0', '-'),
(43, 1, 'SBI', 'M/S Jai Jute', 'Plaintiff', 'P C Sharma', '', '2023-01-18', 'Civil', 'Lower Court', 4, '', '0', '0', '-'),
(44, 1, 'Shiv Kumar', 'Bhupinder Jeet', 'Defendent', 'P C Sharma', '', '2023-01-19', 'Civil', 'Lower Court', 2, '', '0', '0', '-'),
(45, 1, 'Bhag Singh', 'Gewal Builders', 'Plaintiff', 'Rajeev Goyal', '', '2023-01-19', 'Civil', 'Lower Court', 2, '', '0', '0', '-'),
(46, 1, 'Bhupinder ', 'Rajeev Gupta', 'Defendent', 'Adv. Kamal Sharma', '', '2023-01-19', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(47, 1, 'Reena', 'Balbir', 'Plaintiff', 'P C Sharma', '', '2023-01-19', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(48, 1, 'Shardha', 'Munish', 'Defendent', 'P C Sharma', '', '2023-01-19', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(49, 1, 'State of Haryana', 'Sandeep', 'Defendent', 'Rajeev Goyal', '', '2023-01-19', 'Civil', 'Lower Court', 9, '', '0', '0', '-'),
(50, 1, 'Mohinder', 'Shishu Pal', 'Plaintiff', 'P C Sharma', '', '2023-01-20', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(51, 1, 'Rulda', 'Jasbir', 'Plaintiff', 'Adv. Kamal Sharma', '', '2023-01-20', 'Civil', 'Lower Court', 2, '', '0', '0', '-'),
(52, 1, 'Canara Bank', 'Xtreme Fitness', 'Plaintiff', 'Adv. Kamal Sharma', '', '2023-01-20', 'Civil', 'Lower Court', 2, '', '0', '1', 'Won'),
(53, 1, 'Hrikansha', 'Dinesh', 'Defendent', 'P C Sharma', '', '2023-01-21', 'Civil', 'Lower Court', 7, '', '0', '0', '-'),
(54, 1, 'Karandeep', 'Sunita', 'Plaintiff', 'Rajeev Goyal', '', '2023-01-23', 'Civil', 'Lower Court', 2, '', '0', '0', '-'),
(55, 1, 'Surjit Kaur', 'Shiv Kumar', 'Defendant', 'Rajeev Goyal', '', '2023-01-23', 'Civil', 'Lower Court', 10, '', '0', '0', '-'),
(56, 1, 'Rajesh', 'Ramawati', 'Plaintiff', 'Rajeev Goyal', '', '2023-01-23', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(57, 1, 'Surinder', 'State of Haryana', 'Plaintiff', 'P C Sharma', '', '2023-01-24', 'Civil', 'Lower Court', 3, '', '0', '1', 'Won'),
(58, 1, 'Kulwant Ram', 'Ashok', 'Defendant', 'Rajeev Goyal', '', '2023-01-24', 'Civil', 'Lower Court', 2, '', '0', '0', '-'),
(59, 1, 'Balbir Singh', 'Rafiq Mohd.', 'Defendant', 'P C Sharma', '', '2023-01-12', 'Civil', 'Lower Court', 3, '', '0', '0', '-'),
(60, 1, 'Neelam Walia', 'Kuldeep', 'Plaintiff', 'Rajeev Goyal', '', '2023-01-12', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(61, 1, 'Bhag Singh', 'State of Haryana', 'Plaintiff', 'P C Sharma', '', '2023-01-25', 'Civil', 'Lower Court', 5, '', '0', '0', '-'),
(62, 1, 'State of Haryana', 'Snehha Giri', 'Defendant', 'Adv. Kamal Sharma', '', '2023-01-25', 'Civil', 'Lower Court', 9, '', '0', '0', '-'),
(63, 1, 'Kala Devi', 'State of Haryana', 'Plaintiff', 'Adv. Kamal Sharma', '', '2023-01-23', 'Civil', 'Lower Court', 2, '', '0', '0', '-'),
(64, 1, 'Satya Devi', 'State of Haryana', 'Plaintiff', 'Rajeev Goyal', '', '2023-01-23', 'Civil', 'Lower Court', 2, '', '0', '0', '-'),
(65, 1, 'Ranjit', 'Santosh', 'Plaintiff', 'P C Sharma', '', '2023-01-23', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(66, 1, 'Mahakali Mandir', 'Pushpa Budhiraj', 'Plaintiff', 'Rajeev Goyal', '', '2023-01-30', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(67, 1, 'Sahil Garg', 'Naveen', 'Defendant', 'Adv. Kamal Sharma', '', '2023-01-31', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(68, 1, 'Hardeep Kaur', 'GP', 'Plaintiff', 'Adv. Kamal Sharma', '', '2023-01-31', 'Civil', 'Lower Court', 2, '', '0', '0', '-'),
(69, 1, 'Reena', 'Balbir', 'Defendant', 'Rajeev Goyal', '', '2023-01-31', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(70, 1, 'Ritika', 'Bhupinder', 'Plaintiff', 'P C Sharma', '', '2023-01-31', 'Civil', 'Lower Court', 2, '', '0', '0', '-'),
(71, 1, 'Narender Pal', 'Bupinder', 'Defendant', 'P C Sharma', '', '2023-02-01', 'Civil', 'Lower Court', 2, '', '0', '0', '-'),
(72, 1, 'Sunita', 'Bhupinder', 'Plaintiff', 'Rajeev Goyal', '', '2023-02-01', 'Civil', 'Lower Court', 2, '', '0', '0', '-'),
(73, 1, 'Sunil', 'Ravi Kumar', 'Plaintiff', 'Rajeev Goyal', '', '2023-02-01', 'Civil', 'Lower Court', 2, '', '0', '0', '-'),
(74, 1, 'Surjit Kaur', 'Manjit Singh', 'Plaintiff', 'Rajeev Goyal', '', '2023-02-01', 'Civil', 'Lower Court', 3, '', '0', '0', '-'),
(75, 1, 'Surinder Devi', 'Rajinder', 'Defendant', 'Rajeev Goyal', '', '2023-02-02', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(76, 1, 'Kuldeep', 'Neelam Walia', 'Defendant', 'Rajeev Goyal', '', '2023-02-02', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(77, 1, 'Satpal', 'Veena', 'Plaintiff', 'Rajeev Goyal', '', '2023-02-03', 'Civil', 'Lower Court', 2, '', '0', '0', '-'),
(78, 1, 'Jatinder', 'Gurnam', 'Plaintiff', 'Rajeev Goyal', '', '2023-02-03', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(79, 1, 'Nisha Jindal', 'Kewal Puri', 'Defendant', 'P C Sharma', '', '2023-02-03', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(80, 1, 'Kulwant Kaur', 'Prem Chand', 'Plaintiff', 'Rajeev Goyal', '', '2023-02-03', 'Civil', 'Lower Court', 7, '', '0', '0', '-'),
(81, 1, 'Manav Arora', 'Raj Kumar', 'Defendant', 'Rajeev Goyal', '', '2023-02-06', 'Civil', 'Lower Court', 2, '', '0', '0', '-'),
(82, 1, 'Sumit Garg', 'GP', 'Plaintiff', 'P C Sharma', '', '2023-02-06', 'Civil', 'Lower Court', 2, '', '0', '0', '-'),
(83, 1, 'Laxmi Kant', 'Raju Rawat', 'Plaintiff', 'Rajeev Goyal', '', '2023-02-06', 'Civil', 'Lower Court', 2, '', '0', '0', '-'),
(84, 1, 'Subhash', 'Sukesh', 'Plaintiff', 'P C Sharma', '', '2023-02-07', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(85, 1, 'Tarsem ', 'Rakho Devi', 'Defendant', 'Rajeev Goyal', '', '2023-02-07', 'Civil', 'Lower Court', 2, '', '0', '0', '-'),
(86, 1, 'BOI', 'Jitender Kumar', 'Plaintiff', 'Adv. Kamal Sharma', '', '2023-02-07', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(87, 1, 'BOI', 'Jayanti Meharama', 'Plaintiff', 'P C Sharma', '', '2023-02-07', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(88, 1, 'Aman Kumar', 'Flenton India', 'Plaintiff', 'Rajeev Goyal', '', '2023-02-08', 'Civil', 'Lower Court', 11, '', '0', '0', '-'),
(89, 1, 'Rajan Singh', 'Rafiq Mohammad', 'Plaintiff', 'Adv. Kamal Sharma', '', '2023-02-09', 'Civil', 'Lower Court', 5, '', '0', '0', '-'),
(90, 1, 'Bali Deen', 'Priya', 'Plaintiff', 'Rajeev Goyal', '', '2023-02-10', 'Civil', 'Lower Court', 2, '', '0', '0', '-'),
(91, 1, 'Gurbaksh', 'Gurnam', 'Defendant', 'Adv. Kamal Sharma', '', '2023-01-27', 'Civil', 'Lower Court', 8, '', '0', '0', '-'),
(92, 1, 'Jarnail', 'Daya Ram', 'Plaintiff', 'Rajeev Goyal', '', '2023-02-13', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(93, 1, 'Mohinder', 'Gurbaksh', 'Defendant', 'P C Sharma', '', '2023-02-13', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(94, 1, 'Jitender Behra', 'State of Haryana', 'Plaintiff', 'Rajeev Goyal', '', '2023-02-14', 'Civil', 'Lower Court', 2, '', '0', '0', '-'),
(95, 1, 'Sanjay', 'Nisha', 'Plaintiff', 'P C Sharma', '', '2023-02-15', 'Civil', 'Lower Court', 10, '', '0', '0', '-'),
(96, 1, 'Nisha', 'Sanjay', 'Defendant', 'P C Sharma', '', '2023-02-15', 'Civil', 'Lower Court', 10, '', '0', '0', '-'),
(97, 1, 'Surjit Singh', 'HDFC', 'Plaintiff', 'P C Sharma', '', '2023-02-15', 'Civil', 'Lower Court', 11, '', '0', '0', '-'),
(98, 1, 'Vedika', 'Sanjay', 'Plaintiff', 'Rajeev Goyal', '', '2023-02-15', 'Civil', 'Lower Court', 7, '', '0', '0', '-'),
(99, 1, 'Bhag Singh', 'State of Haryana', 'Plaintiff', 'Rajeev Goyal', '', '2023-02-15', 'Civil', 'Lower Court', 5, '', '0', '0', '-'),
(100, 1, 'Ashok', 'Raj Kumar', 'Plaintiff', 'Rajeev Goyal', '', '2023-02-17', 'Civil', 'Lower Court', 2, '', '0', '0', '-'),
(101, 1, 'Ved Parkash', 'Hans Raj', 'Defendant', 'Adv. Kamal Sharma', '', '2023-02-17', 'Civil', 'Lower Court', 2, '', '0', '0', '-'),
(102, 1, 'Union Bank', 'Ranjit Singh', 'Defendant', 'Rajeev Goyal', '', '2023-02-17', 'Civil', 'Lower Court', 2, '', '0', '0', '-'),
(103, 1, 'State of Haryana', 'Vinod', 'Defendant', 'P C Sharma', '', '2023-02-20', 'Civil', 'Lower Court', 2, '', '0', '0', '-'),
(104, 1, 'Sanjeev', 'Sardana', 'Plaintiff', 'P C Sharma', '', '2023-02-20', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(105, 1, 'Canara Bank', 'UHI Industries', 'Defendant', 'Adv. Kamal Sharma', '', '2023-02-21', 'Civil', 'Lower Court', 2, '', '0', '0', '-'),
(106, 1, 'Sahil Garg', 'Anil', 'Plaintiff', 'Rajeev Goyal', '', '2023-02-21', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(107, 1, 'Naina', 'Virender', 'Plaintiff', 'P C Sharma', '', '2023-02-22', 'Civil', 'Lower Court', 10, '', '0', '0', '-'),
(108, 1, 'Sukhdev Singh', 'State of Haryana', 'Plaintiff', 'P C Sharma', '', '2023-02-22', 'Civil', 'Lower Court', 5, '', '0', '0', '-'),
(109, 1, 'Harpal', 'Rishipal', 'Defendant', 'P C Sharma', '', '2023-02-22', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(110, 1, 'Vinay Partap', 'Paramjit Kaur', 'Plaintiff', 'Rajeev Goyal', '', '2023-02-22', 'Civil', 'Lower Court', 12, '', '0', '0', '-'),
(111, 1, 'Gurnam', 'Sukhdev', 'Plaintiff', 'P C Sharma', '', '2023-02-23', 'Civil', 'Lower Court', 2, '', '0', '0', '-'),
(112, 1, 'Parveen', 'Vipin', 'Plaintiff', 'Rajeev Goyal', '', '2023-02-23', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(113, 1, 'Canara Bank', 'Sapna Rani', 'Defendant', 'P C Sharma', '', '2023-02-23', 'Civil', 'Lower Court', 2, '', '0', '0', '-'),
(114, 1, 'Sohil Peplani', 'Neere Chobe', 'Plaintiff', 'Rajeev Goyal', '', '2023-02-23', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(115, 1, 'Sandeep', 'Rimpi', 'Plaintiff', 'P C Sharma', '', '2023-02-24', 'Civil', 'Lower Court', 7, '', '0', '0', '-'),
(116, 1, 'Panipet', 'Dinesh Kaushik', 'Defendant', 'Rajeev Goyal', '', '2023-02-24', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(117, 1, 'Dikshit Sharma', 'Amejon', 'Plaintiff', 'Rajeev Goyal', '', '2023-01-09', 'Civil', 'Lower Court', 11, '', '0', '0', '-'),
(118, 1, 'Gurbaksh', 'Jasbir Singh', 'Defendant', 'P C Sharma', '', '2023-02-27', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(119, 1, 'Sukhdev Singh', 'State of Haryana', 'Plaintiff', 'Adv. Kamal Sharma', '', '2023-02-27', 'Civil', 'Lower Court', 5, '', '0', '0', '-'),
(120, 1, 'Rakesh', 'Daljeet', 'Plaintiff', 'P C Sharma', '', '2023-02-28', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(121, 1, 'Rakesh', 'Daljeet', 'Plaintiff', 'P C Sharma', '', '2023-02-28', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(122, 1, 'Geeta', 'Mukesh', 'Plaintiff', 'Rajeev Goyal', '', '2023-03-01', 'Civil', 'Lower Court', 7, '', '0', '0', '-'),
(123, 1, 'Kalpana', 'Aroop', 'Defendant', 'P C Sharma', '', '2023-03-01', 'Civil', 'Lower Court', 7, '', '0', '0', '-'),
(124, 1, 'Panipat Hire Purchase', 'Gurdev Singh', 'Defendant', 'Rajeev Goyal', '', '2023-03-01', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(125, 1, 'Surjit', 'Manjit', 'Plaintiff', 'P C Sharma', '', '2023-03-01', 'Civil', 'Lower Court', 3, '', '0', '0', '-'),
(126, 1, 'State of Haryana', 'Davinder', 'Respondent', 'Rajeev Goyal', '', '2023-01-12', 'Criminal', 'Lower Court', 2, '', '0', '0', '-'),
(127, 1, 'Raj Kumari', 'Surinder Devi', 'Plaintiff', 'Rajeev Goyal', '', '2023-03-02', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(128, 1, 'Rahul Dhiman', 'Narinder', 'Defendant', 'Adv. Kamal Sharma', '', '2023-03-03', 'Civil', 'Lower Court', 1, '', '0', '0', '-'),
(129, 1, 'Canara Bank', 'Sujata', 'Plaintiff', 'Rajeev Goyal', '', '2023-03-03', 'Civil', 'Lower Court', 2, '', '0', '0', '-');

-- --------------------------------------------------------

--
-- Table structure for table `citations`
--

CREATE TABLE `citations` (
  `idCit` int(15) NOT NULL,
  `userId` int(15) NOT NULL,
  `citation` varchar(5000) NOT NULL,
  `remarks` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `citations`
--

INSERT INTO `citations` (`idCit`, `userId`, `citation`, `remarks`) VALUES
(1, 1, 'hjygipj', 'poyyudfio'),
(2, 1, 'wegr', 'rgtgtrweqer');

-- --------------------------------------------------------

--
-- Table structure for table `citation_cases`
--

CREATE TABLE `citation_cases` (
  `idCit` int(15) NOT NULL,
  `userid` int(15) NOT NULL,
  `caseid` int(15) NOT NULL,
  `citations` varchar(6000) NOT NULL,
  `remarks` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `citation_cases`
--

INSERT INTO `citation_cases` (`idCit`, `userid`, `caseid`, `citations`, `remarks`) VALUES
(1, 1, 9, 'ljhuvyg', 'khuyfugoi'),
(2, 1, 9, 'khgygiu', 'jlgiuguoi'),
(3, 1, 9, 'jhigiug', ''),
(4, 1, 5, 'w4t', '3t4'),
(5, 1, 4, 'fgfgcgfgfgfgf', ''),
(6, 1, 4, 'hkhjhjhjhjh', '');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(15) NOT NULL,
  `userId` int(15) NOT NULL,
  `clientName` varchar(500) NOT NULL,
  `phn` varchar(15) NOT NULL,
  `address` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `userId`, `clientName`, `phn`, `address`) VALUES
(1, 1, 'Chand Tara', '9466741798', 'Manakpur'),
(2, 1, 'Gurmukh Singh', '9466741798', 'Manakpur'),
(3, 1, 'Mohinder', '9999999999', 'Vill Paploha'),
(4, 1, 'Varinder Sood', '9815716821', 'Panchkula'),
(5, 1, 'State of Haryana', '9999999999', '--'),
(6, 1, 'Harnek', '9999999999', '--'),
(7, 1, 'Anand Prakash', '9999999999', '--'),
(8, 1, 'Yasodha', '9999999999', '--'),
(9, 1, 'Sukhwinder', '9999999999', '--'),
(10, 1, 'Babita', '9999999999', '--'),
(11, 1, 'Roshan Lal', '9999999999', '--'),
(12, 1, 'Narendar Pal', '9999999999', '--'),
(13, 1, 'Sudesh Rani', '9999999999', 'Pinjore, Haryana\r\n'),
(14, 1, 'Jarnail Singh', '7521489658', 'Pinjore'),
(15, 1, 'Harnek', '9854125632', ''),
(16, 1, 'Gurdhian', '', ''),
(17, 1, 'Narinder Singh', '', ''),
(18, 1, 'Tara Devi', '', ''),
(19, 1, 'Neelam Kaur', '', ''),
(20, 1, 'Seema', '', ''),
(21, 1, 'Sahil', '', ''),
(22, 1, 'Balev Ram', '', ''),
(23, 1, 'Mohinder', '', ''),
(24, 1, 'Harnam Giri', '', ''),
(26, 1, 'Rishi Pal', '', ''),
(27, 1, 'Preeta', '', ''),
(28, 1, 'Sanjay', '', ''),
(29, 1, 'Subhash', '', ''),
(30, 1, 'Gurbax Singh', '', ''),
(31, 1, 'State of Haryana', '', ''),
(32, 1, 'Ajay', '', ''),
(33, 1, 'Canara Bank', '0188-9294-2234', ''),
(34, 1, 'Anita Bedi', '', ''),
(35, 1, 'Mandakini', '', ''),
(36, 1, 'Anita Goyal', '', ''),
(37, 1, 'Bhushan Lal', '', ''),
(38, 1, 'SBI', '', ''),
(39, 1, 'Shiv Kumar', '', ''),
(40, 1, 'Bhag Singh', '', ''),
(41, 1, 'Bhupinder ', '', ''),
(42, 1, 'Reena', '', ''),
(43, 1, 'Shardha', '', ''),
(44, 1, 'Rulda', '', ''),
(45, 1, 'Karandeep', '', ''),
(46, 1, 'Shiv Kumar', '', ''),
(47, 1, 'Rajesh', '7452639985', ''),
(48, 1, 'Surinder', '', ''),
(49, 1, 'Ashok', '', ''),
(50, 1, 'Rafiq Mohd.', '', ''),
(51, 1, 'Neelam Walia', '', ''),
(52, 1, 'Kala Devi', '', ''),
(53, 1, 'Satya Devi', '', ''),
(54, 1, 'Ranjit', '', ''),
(55, 1, 'Mahakali Mandir', '', ''),
(56, 1, 'Naveen', '', ''),
(57, 1, 'Hardeep Kaur', '', ''),
(58, 1, 'Ritika', '', ''),
(59, 1, 'Bupinder', '', ''),
(60, 1, 'Sunita', '', ''),
(61, 1, 'Sunil', '', ''),
(62, 1, 'Surjit Kaur', '7015748596', ''),
(63, 1, 'Neelam Walia', '', ''),
(64, 1, 'Satpal', '', ''),
(65, 1, 'Jatinder', '', ''),
(66, 1, 'Kewal Puri', '', ''),
(67, 1, 'Kulwant Kaur', '', ''),
(68, 1, 'Raj Kumar', '', ''),
(69, 1, 'Sumit Garg', '', ''),
(70, 1, 'Laxmi Kant', '', ''),
(71, 1, 'Gurnam', '', ''),
(72, 1, 'Rakho Devi', '', ''),
(73, 1, 'BOI', '', ''),
(74, 1, 'Aman Kumar', '', ''),
(75, 1, 'Rajan Singh', '', ''),
(76, 1, 'Bali Deen', '', ''),
(77, 1, 'Jarnail', '', ''),
(78, 1, 'Gurbaksh', '', ''),
(79, 1, 'Jitender Behra', '', ''),
(80, 1, 'Sanjay', '9354310257', ''),
(81, 1, 'Surjit Singh', '', ''),
(82, 1, 'Vedika', '', ''),
(83, 1, 'Hans Raj', '', ''),
(84, 1, 'Ranjit Singh', '', ''),
(85, 1, 'Vinod', '', ''),
(86, 1, 'Sanjeev', '', ''),
(87, 1, 'UHI Industries', '', ''),
(88, 1, 'Sahil Garg', '', ''),
(89, 1, 'Naina', '', ''),
(90, 1, 'Sukhdev Singh', '', ''),
(91, 1, 'Rishipal', '', ''),
(92, 1, 'Vinay Partap', '', ''),
(93, 1, 'Parveen', '', ''),
(94, 1, 'Sapna Rani', '', ''),
(95, 1, 'Sohil Peplani', '', ''),
(96, 1, 'Sandeep', '', ''),
(97, 1, 'Dinesh Kaushik', '', ''),
(98, 1, 'Dikshit Sharma', '', ''),
(99, 1, 'Jasbir Singh', '', ''),
(100, 1, 'Rakesh', '', ''),
(101, 1, 'Geeta', '', ''),
(102, 1, 'Aroop', '', ''),
(103, 1, 'Gurdev Singh', '', ''),
(104, 1, 'Surjit', '', ''),
(105, 1, 'Davinder', '', ''),
(106, 1, 'Raj Kumari', '', ''),
(107, 1, 'Narinder', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `magistrate`
--

CREATE TABLE `magistrate` (
  `userid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(2000) NOT NULL,
  `datemag` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `magistrate`
--

INSERT INTO `magistrate` (`userid`, `id`, `name`, `datemag`) VALUES
(1, 1, 'Jatinder Kumar', '2023-01-05'),
(1, 2, 'Geetanjali Goel', '2023-01-02'),
(1, 3, 'District Judge', '2023-01-03'),
(1, 4, 'Anjali', '2023-01-04'),
(1, 5, 'Sunil Kumar', '2023-01-06'),
(1, 6, 'PLA', '2023-01-11'),
(1, 7, 'Taranjit Kaur', '2023-01-17'),
(1, 8, 'H.G.', '2023-01-18'),
(1, 9, 'Nidhi', '2023-01-19'),
(1, 10, 'P.K. Lal', '2023-01-23'),
(1, 11, 'C.F.', '2023-02-08'),
(1, 12, 'J.H.', '2023-02-22');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `phn` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `paymentMode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`id`, `name`, `phn`, `username`, `password`, `paymentMode`) VALUES
(1, 'Yashi Goyal', '7015720176', 'yashi07', 'Hello@123', 'Visa'),
(2, 'Ramesh Goyal', '9354301275', 'rameshadv12', 'Ramesh12875', 'Visa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `casedate`
--
ALTER TABLE `casedate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`caseNum`,`userId`);

--
-- Indexes for table `citations`
--
ALTER TABLE `citations`
  ADD PRIMARY KEY (`idCit`);

--
-- Indexes for table `citation_cases`
--
ALTER TABLE `citation_cases`
  ADD PRIMARY KEY (`idCit`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`,`userId`);

--
-- Indexes for table `magistrate`
--
ALTER TABLE `magistrate`
  ADD PRIMARY KEY (`userid`,`id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `casedate`
--
ALTER TABLE `casedate`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=410;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
