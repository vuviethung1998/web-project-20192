-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: mysql:3306
-- Generation Time: Jun 10, 2020 at 03:50 AM
-- Server version: 5.7.30
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `midterm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `player_id` int(11) NOT NULL,
  `player_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `player_role` enum('player','host') COLLATE utf8mb4_unicode_ci NOT NULL,
  `player_state` enum('inactive','active') COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`player_id`, `player_name`, `player_role`, `player_state`, `room_id`) VALUES
(2, 'hungvv', 'player', 'active', '131354533'),
(3, 'alo alo ', 'host', 'active', '131354533'),
(4, 'alo alo 2', 'player', 'inactive', '131354533');

-- --------------------------------------------------------

--
-- Stand-in structure for view `player_punishment_view`
-- (See below for the actual view)
--
CREATE TABLE `player_punishment_view` (
`round_num` int(11)
,`room_id` varchar(255)
,`player_name` varchar(255)
,`punishment_content` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `punishment`
--

CREATE TABLE `punishment` (
  `punishment_id` int(11) NOT NULL,
  `room_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `punishment_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('F','I','D') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `punishment`
--

INSERT INTO `punishment` (`punishment_id`, `room_id`, `punishment_content`, `type`) VALUES
(4, '13135463', 'Run', 'I'),
(5, '131354533', 'Eat', 'F'),
(6, '131354533', '1000 pushups', 'D'),
(7, '6', 'a', 'F'),
(8, '6', 'b', 'I'),
(9, '6', 'c', 'D'),
(10, '8', 'x', 'F'),
(11, '8', 'x', 'I'),
(12, '8', 'x', 'D'),
(13, '9', 'x', 'F'),
(14, '9', 'x', 'I'),
(15, '9', 'x', 'D'),
(16, '10', 'x', 'F'),
(17, '10', 'x', 'I'),
(18, '10', 'x', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `player_number` int(11) NOT NULL,
  `is_closed` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `player_number`, `is_closed`) VALUES
('1', 1, 0),
('10', 2, 0),
('123', 3, 0),
('131354533', 2, 0),
('13135463', 4, 0),
('2', 2, 0),
('3', 3, 0),
('4', 4, 0),
('5', 5, 0),
('6', 6, 0),
('7', 7, 0),
('8', 8, 0),
('9', 9, 0);

-- --------------------------------------------------------

--
-- Table structure for table `round`
--

CREATE TABLE `round` (
  `round_id` int(11) NOT NULL,
  `round_num` int(11) NOT NULL,
  `punishment_id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  `room_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `round`
--

INSERT INTO `round` (`round_id`, `round_num`, `punishment_id`, `player_id`, `room_id`) VALUES
(1, 1, 6, 4, '131354533'),
(2, 2, 6, 3, '131354533');

-- --------------------------------------------------------

--
-- Structure for view `player_punishment_view`
--
DROP TABLE IF EXISTS `player_punishment_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`%` SQL SECURITY DEFINER VIEW `player_punishment_view`  AS  select `round`.`round_num` AS `round_num`,`room`.`room_id` AS `room_id`,`player`.`player_name` AS `player_name`,`punishment`.`punishment_content` AS `punishment_content` from (((`round` join `punishment` on((`round`.`punishment_id` = `punishment`.`punishment_id`))) join `room` on((`round`.`room_id` = `room`.`room_id`))) join `player` on((`round`.`player_id` = `player`.`player_id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`player_id`),
  ADD UNIQUE KEY `player_name` (`player_name`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `punishment`
--
ALTER TABLE `punishment`
  ADD PRIMARY KEY (`punishment_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `round`
--
ALTER TABLE `round`
  ADD PRIMARY KEY (`round_id`),
  ADD KEY `punishment_id` (`punishment_id`),
  ADD KEY `player_id` (`player_id`),
  ADD KEY `room_id` (`room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `punishment`
--
ALTER TABLE `punishment`
  MODIFY `punishment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `round`
--
ALTER TABLE `round`
  MODIFY `round_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `player_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`);

--
-- Constraints for table `punishment`
--
ALTER TABLE `punishment`
  ADD CONSTRAINT `punishment_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`);

--
-- Constraints for table `round`
--
ALTER TABLE `round`
  ADD CONSTRAINT `round_ibfk_1` FOREIGN KEY (`punishment_id`) REFERENCES `punishment` (`punishment_id`),
  ADD CONSTRAINT `round_ibfk_2` FOREIGN KEY (`player_id`) REFERENCES `player` (`player_id`),
  ADD CONSTRAINT `round_ibfk_3` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
