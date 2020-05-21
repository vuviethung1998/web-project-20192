-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: mysql:3306
-- Thời gian đã tạo: Th5 14, 2020 lúc 08:04 AM
-- Phiên bản máy phục vụ: 5.7.30
-- Phiên bản PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `test`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Player`
--

CREATE TABLE `Player` (
  `PlayerID` int(11) NOT NULL,
  `PlayerName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PlayerRole` enum('player','host') COLLATE utf8mb4_unicode_ci NOT NULL,
  `PlayerState` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL,
  `RoomID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `Player`
--

INSERT INTO `Player` (`PlayerID`, `PlayerName`, `PlayerRole`, `PlayerState`, `RoomID`) VALUES
(2, 'hungvv', 'player', '1', 131354533),
(3, 'alo alo ', 'host', '1', 131354533),
(4, 'alo alo 2', 'player', '2', 131354533);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Punishment`
--

CREATE TABLE `Punishment` (
  `PunishmentID` int(11) NOT NULL,
  `RoomID` int(11) DEFAULT NULL,
  `FunnyPunishment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `InterestPunishment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DangerousPunishment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `Punishment`
--

INSERT INTO `Punishment` (`PunishmentID`, `RoomID`, `FunnyPunishment`, `InterestPunishment`, `DangerousPunishment`) VALUES
(4, 13135463, 'Run', 'Run', 'Run'),
(5, 131354533, 'Run', 'Run', 'Run'),
(6, 131354533, 'Eat', 'Eat', 'Eat');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Room`
--

CREATE TABLE `Room` (
  `RoomID` int(11) NOT NULL,
  `RoomPassword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PlayerNumber` int(11) NOT NULL,
  `Is_closed` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `Room`
--

INSERT INTO `Room` (`RoomID`, `RoomPassword`, `PlayerNumber`, `Is_closed`) VALUES
(13135463, '6456131331', 4, 0),
(131354533, '6564131331', 2, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Round`
--

CREATE TABLE `Round` (
  `RoundID` int(11) NOT NULL,
  `Round_num` int(11) NOT NULL,
  `PunishmentID` int(11) NOT NULL,
  `PlayerID` int(11) NOT NULL,
  `RoomID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `Round`
--

INSERT INTO `Round` (`RoundID`, `Round_num`, `PunishmentID`, `PlayerID`, `RoomID`) VALUES
(1, 1, 6, 4, 131354533),
(2, 2, 6, 3, 131354533);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `Player`
--
ALTER TABLE `Player`
  ADD PRIMARY KEY (`PlayerID`),
  ADD KEY `RoomID` (`RoomID`);

--
-- Chỉ mục cho bảng `Punishment`
--
ALTER TABLE `Punishment`
  ADD PRIMARY KEY (`PunishmentID`),
  ADD KEY `RoomID` (`RoomID`);

--
-- Chỉ mục cho bảng `Room`
--
ALTER TABLE `Room`
  ADD PRIMARY KEY (`RoomID`);

--
-- Chỉ mục cho bảng `Round`
--
ALTER TABLE `Round`
  ADD PRIMARY KEY (`RoundID`),
  ADD KEY `PunishmentID` (`PunishmentID`),
  ADD KEY `PlayerID` (`PlayerID`),
  ADD KEY `RoomID` (`RoomID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `Player`
--
ALTER TABLE `Player`
  MODIFY `PlayerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `Punishment`
--
ALTER TABLE `Punishment`
  MODIFY `PunishmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `Room`
--
ALTER TABLE `Room`
  MODIFY `RoomID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131354534;

--
-- AUTO_INCREMENT cho bảng `Round`
--
ALTER TABLE `Round`
  MODIFY `RoundID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `Player`
--
ALTER TABLE `Player`
  ADD CONSTRAINT `Player_ibfk_1` FOREIGN KEY (`RoomID`) REFERENCES `Room` (`RoomID`);

--
-- Các ràng buộc cho bảng `Punishment`
--
ALTER TABLE `Punishment`
  ADD CONSTRAINT `Punishment_ibfk_1` FOREIGN KEY (`RoomID`) REFERENCES `Room` (`RoomID`);

--
-- Các ràng buộc cho bảng `Round`
--
ALTER TABLE `Round`
  ADD CONSTRAINT `Round_ibfk_1` FOREIGN KEY (`PunishmentID`) REFERENCES `Punishment` (`PunishmentID`),
  ADD CONSTRAINT `Round_ibfk_2` FOREIGN KEY (`PlayerID`) REFERENCES `Player` (`PlayerID`),
  ADD CONSTRAINT `Round_ibfk_3` FOREIGN KEY (`RoomID`) REFERENCES `Room` (`RoomID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
