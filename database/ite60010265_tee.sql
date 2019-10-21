-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql56
-- Generation Time: May 18, 2019 at 11:03 AM
-- Server version: 5.6.33-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ite60010265_tee`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `ID` bigint(20) NOT NULL,
  `uniform_id` bigint(20) NOT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=tis620;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`ID`, `uniform_id`, `comment`, `userID`) VALUES
(22, 2, 'à¸«à¸²à¸²à¸²', 8),
(23, 2, 'à¸žà¸µà¹ˆà¸”à¸¸à¸™à¸°à¸«à¸™à¸¹à¹„à¸«à¸§à¸«à¸£à¸­', 8),
(24, 5, 'à¸­à¸´à¸­à¸´à¸­à¸´', 8),
(25, 5, 'à¸«à¸™à¹‰à¸²à¸«à¸µ', 8),
(27, 15, 'test', 8),
(28, 15, 'à¸ªà¸§à¸±à¸ªà¸”à¸µ', 8),
(29, 17, 'à¸”à¸µà¸¡à¸²à¸à¹†', 8),
(30, 1, 'sd', 8),
(31, 20, 'à¸ªà¸§à¸¢à¸¡à¸²à¸à¸„à¹ˆà¸°', 3),
(32, 31, 'idv', 3),
(33, 15, '', 15),
(34, 15, '', 15),
(35, 15, '', 15),
(36, 15, '', 15),
(37, 16, 'dfasdf', 15),
(38, 16, 'dfasdf', 15),
(39, 2, 'à¸ªà¸§à¸¢à¸”à¸µà¸„à¸£à¸±à¸š', 3);

-- --------------------------------------------------------

--
-- Table structure for table `full`
--

CREATE TABLE `full` (
  `fullID` bigint(20) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=tis620;

--
-- Dumping data for table `full`
--

INSERT INTO `full` (`fullID`, `image`) VALUES
(1, 'image/add/full/PA082453.jpeg'),
(2, 'image/add/full/PA082453.jpeg'),
(3, 'image/add/full/Shirt.jpg'),
(4, 'image/add/full/Full.jpg'),
(5, 'image/add/full/Full.jpg'),
(6, 'image/add/full/Full.jpg'),
(7, 'image/add/full/mmstrawberry.jpg'),
(8, 'image/add/full/mmstrawberry.jpg'),
(9, 'image/add/full/Full.jpg'),
(10, 'image/add/full/Full.jpg'),
(11, 'image/add/full/Shirt.jpg'),
(12, 'image/add/full/Shoe.jpg'),
(13, 'image/add/full/images.jpg'),
(14, 'image/add/full/katfull.jpg'),
(15, 'image/add/full/katfull.jpg'),
(16, 'image/add/full/katfull.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `UserID` bigint(20) NOT NULL,
  `Username` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`UserID`, `Username`, `Email`, `Password`) VALUES
(2, 'kath', 'kat@hot.com', '0'),
(3, 'kat', 'kat@a.com', '123456'),
(4, 'p', 'p@a.com', '234567'),
(5, 'kat', 'kat@a.com', '123456'),
(6, 'kathaleeya', 'kathaleeya@hot.com', '0'),
(7, 'iice', 'iice@hot.com', '121212'),
(8, 'tee', 'ttp.tee@hotmail.com', '123456'),
(9, 'mm', 'mmm@msmdfkadjf', '123'),
(10, '1', '1@1.1', '1'),
(11, 'oo', 'o@o.o', 'oo'),
(12, 'oat', 'oat@hot.com', 'oat'),
(13, '1testname', 'ds@ef.com', '1234'),
(14, '2test', '2test@gmail.com', '1234'),
(15, 'admin', 'admin@recipy.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pants`
--

CREATE TABLE `pants` (
  `pantID` bigint(20) NOT NULL,
  `image` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pants`
--

INSERT INTO `pants` (`pantID`, `image`) VALUES
(1, 'image/men/pant/pant1.jpg'),
(2, 'image/men/pant/pant2.jpg'),
(3, 'image/men/pant/pant3.jpg'),
(4, 'image/men/pant/pant4.jpg'),
(5, 'image/men/pant/pant5.jpg'),
(6, 'image/men/pant/pant6.jpg'),
(7, 'image/men/pant/pant7.jpg'),
(8, 'image/men/pant/pant8.jpg'),
(9, 'image/men/pant/pant9.jpg'),
(10, 'image/women/pant/pant10.jpg'),
(11, 'image/women/pant/pant11.jpg'),
(12, 'image/women/pant/pant12.jpg'),
(13, 'image/women/pant/pant13.jpg'),
(14, 'image/women/pant/pant14.jpg'),
(15, 'image/women/pant/pant15.jpg'),
(16, 'image/women/pant/pant16.jpg'),
(17, 'image/women/pant/pant17.jpg'),
(18, 'image/women/pant/pant18.jpg'),
(19, 'image/add/pant/PA082453.jpeg'),
(20, 'image/add/pant/Pant.jpg'),
(21, 'image/add/pant/Pant.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ranking_info`
--

CREATE TABLE `ranking_info` (
  `post_id` bigint(25) NOT NULL,
  `count_like` bigint(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=tis620;

--
-- Dumping data for table `ranking_info`
--

INSERT INTO `ranking_info` (`post_id`, `count_like`) VALUES
(1, 1),
(2, 2),
(3, 2),
(4, 0),
(5, 1),
(6, 2),
(7, 0),
(8, 0),
(9, 0),
(12, 0),
(13, 0),
(14, 1),
(15, 3),
(16, 0),
(17, 0),
(18, 0),
(19, 0),
(20, 0),
(21, 0),
(22, 0),
(23, 0),
(24, 0),
(25, 0),
(26, 0),
(27, 0),
(28, 0),
(29, 0),
(30, 0),
(31, 0),
(32, 0),
(33, 0),
(34, 0),
(35, 0),
(36, 0),
(37, 0),
(38, 0),
(39, 0),
(40, 0),
(41, 0),
(42, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rating_info`
--

CREATE TABLE `rating_info` (
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `rating_action` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=tis620;

--
-- Dumping data for table `rating_info`
--

INSERT INTO `rating_info` (`user_id`, `post_id`, `rating_action`) VALUES
(2, 2, 'like'),
(2, 3, 'like'),
(2, 15, 'like'),
(3, 6, 'like'),
(3, 14, 'like'),
(8, 1, 'like'),
(8, 2, 'like'),
(8, 3, 'like'),
(8, 5, 'like'),
(8, 6, 'like'),
(8, 15, 'like'),
(9, 15, 'like');

-- --------------------------------------------------------

--
-- Table structure for table `shirts`
--

CREATE TABLE `shirts` (
  `shirtID` bigint(20) NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shirts`
--

INSERT INTO `shirts` (`shirtID`, `image`) VALUES
(1, 'image/men/shirt/shirt1.jpg'),
(2, 'image/men/shirt/shirt2.jpg'),
(3, 'image/men/shirt/shirt3.jpg'),
(4, 'image/men/shirt/shirt4.jpg'),
(5, 'image/men/shirt/shirt5.jpg'),
(6, 'image/men/shirt/shirt6.jpg'),
(7, 'image/men/shirt/shirt7.jpg'),
(8, 'image/men/shirt/shirt8.jpg'),
(9, 'image/men/shirt/shirt9.jpg'),
(10, 'image/women/shirt/shirt10.jpg'),
(11, 'image/women/shirt/shirt11.jpg'),
(12, 'image/women/shirt/shirt12.jpg'),
(13, 'image/women/shirt/shirt13.jpg'),
(14, 'image/women/shirt/shirt14.jpg'),
(15, 'image/women/shirt/shirt15.jpg'),
(16, 'image/women/shirt/shirt16.jpg'),
(17, 'image/women/shirt/shirt17.jpg'),
(18, 'image/women/shirt/shirt18.jpg'),
(19, 'image/add/shirt/Screenshot_1556702569.png'),
(20, 'image/add/shirt/Shirt.jpg'),
(21, 'image/add/shirt/PIM-1539615215154-5165d981-d6e4-4643-a903-dddebe18e54a_v1-small.jpg'),
(22, 'image/add/shirt/PIM-1539615215154-5165d981-d6e4-4643-a903-dddebe18e54a_v1-small.jpg'),
(23, 'image/add/shirt/Shirt.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shoes`
--

CREATE TABLE `shoes` (
  `shoeID` bigint(20) NOT NULL,
  `image` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shoes`
--

INSERT INTO `shoes` (`shoeID`, `image`) VALUES
(1, 'image/men/shoe/shoe1.jpg'),
(2, 'image/men/shoe/shoe2.jpg'),
(3, 'image/men/shoe/shoe3.jpg'),
(4, 'image/men/shoe/shoe4.jpg'),
(5, 'image/men/shoe/shoe5.jpg'),
(6, 'image/men/shoe/shoe6.jpg'),
(7, 'image/men/shoe/shoe7.jpg'),
(8, 'image/men/shoe/shoe8.jpg'),
(9, 'image/men/shoe/shoe9.jpg'),
(10, 'image/women/shoe/shoe10.jpg'),
(11, 'image/women/shoe/shoe11.jpg'),
(12, 'image/women/shoe/shoe12.jpg'),
(13, 'image/women/shoe/shoe13.jpg'),
(14, 'image/women/shoe/shoe14.jpg'),
(15, 'image/women/shoe/shoe15.jpg'),
(16, 'image/women/shoe/shoe16.jpg'),
(17, 'image/women/shoe/shoe17.jpg'),
(18, 'image/women/shoe/shoe18.jpg'),
(19, 'image/add/shoe/Screenshot_1556'),
(20, 'image/add/shoe/Shoe.jpg'),
(21, 'image/add/shoe/Shoe.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `uniform`
--

CREATE TABLE `uniform` (
  `ID` bigint(20) NOT NULL,
  `UserID` bigint(20) DEFAULT NULL,
  `shirtID` bigint(20) DEFAULT NULL,
  `pantID` bigint(20) DEFAULT NULL,
  `shoeID` bigint(20) DEFAULT NULL,
  `fullID` bigint(20) DEFAULT NULL,
  `clothesDesc` text CHARACTER SET utf8 COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=tis620;

--
-- Dumping data for table `uniform`
--

INSERT INTO `uniform` (`ID`, `UserID`, `shirtID`, `pantID`, `shoeID`, `fullID`, `clothesDesc`) VALUES
(1, 7, 5, 5, 5, NULL, 'hahaha'),
(2, 3, 3, 4, 6, NULL, NULL),
(3, 2, 2, 8, 6, NULL, NULL),
(4, 8, 9, 8, 9, NULL, NULL),
(5, 8, 9, 2, 3, NULL, NULL),
(6, 8, 2, 9, 5, NULL, NULL),
(7, 8, 6, 5, 4, NULL, 'ddd'),
(13, 2, 5, 4, 4, NULL, 'à¹ƒà¸ªà¹ˆà¸Šà¸¸à¸”à¸™à¸µà¹‰à¹„à¸›à¸—à¸°à¹€à¸¥'),
(14, 2, 14, 16, 11, NULL, 'à¹ƒà¸ªà¹ˆà¹„à¸›à¹€à¸”à¸´à¸™à¸ªà¸¢à¸²à¸¡'),
(15, 2, NULL, NULL, NULL, 1, ''),
(16, 8, 2, 6, 7, NULL, 'à¸žà¸µà¹ˆà¸”à¸¸à¸™à¸°à¸«à¸™à¸¹à¹„à¸«à¸§à¸«à¸£à¸­'),
(17, 8, 1, 1, 1, NULL, 'à¸•à¸µà¹‹'),
(20, 2, 4, 4, 4, NULL, 'à¸ªà¸§à¸¢à¹†'),
(21, 2, 10, 10, 10, NULL, 'ss'),
(30, 12, NULL, NULL, NULL, 12, ''),
(31, 14, 1, 2, 1, NULL, 'test'),
(32, 3, 7, 7, 1, NULL, 'udhyvUHDj'),
(33, 3, 11, 11, 11, NULL, 'à¸Šà¸¸à¸”à¸™à¸µà¹‰à¸™à¹ˆà¸²à¸£à¸±à¸à¸”à¸µ'),
(34, 3, 17, 12, 11, NULL, ''),
(35, 3, 2, 9, 4, NULL, 'à¹ƒà¸ªà¹ˆà¹„à¸›à¸—à¸°à¹€à¸¥'),
(36, 3, 15, 13, 12, NULL, ''),
(37, 3, 9, 7, 3, NULL, ''),
(38, 3, NULL, NULL, NULL, 13, ''),
(39, 2, 20, 20, 20, NULL, 'hhh'),
(40, 2, 15, 10, 10, NULL, 'suay suay'),
(42, 3, 7, 1, 9, NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `uniform_id` (`uniform_id`);

--
-- Indexes for table `full`
--
ALTER TABLE `full`
  ADD PRIMARY KEY (`fullID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `pants`
--
ALTER TABLE `pants`
  ADD PRIMARY KEY (`pantID`);

--
-- Indexes for table `ranking_info`
--
ALTER TABLE `ranking_info`
  ADD UNIQUE KEY `post_id` (`post_id`,`count_like`);

--
-- Indexes for table `rating_info`
--
ALTER TABLE `rating_info`
  ADD UNIQUE KEY `user_id` (`user_id`,`post_id`);

--
-- Indexes for table `shirts`
--
ALTER TABLE `shirts`
  ADD PRIMARY KEY (`shirtID`);

--
-- Indexes for table `shoes`
--
ALTER TABLE `shoes`
  ADD PRIMARY KEY (`shoeID`);

--
-- Indexes for table `uniform`
--
ALTER TABLE `uniform`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fullID` (`fullID`),
  ADD KEY `pantID` (`pantID`),
  ADD KEY `shirtID` (`shirtID`),
  ADD KEY `shoeID` (`shoeID`),
  ADD KEY `UserID` (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `full`
--
ALTER TABLE `full`
  MODIFY `fullID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `UserID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `pants`
--
ALTER TABLE `pants`
  MODIFY `pantID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `shirts`
--
ALTER TABLE `shirts`
  MODIFY `shirtID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `shoes`
--
ALTER TABLE `shoes`
  MODIFY `shoeID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `uniform`
--
ALTER TABLE `uniform`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`uniform_id`) REFERENCES `uniform` (`ID`);

--
-- Constraints for table `uniform`
--
ALTER TABLE `uniform`
  ADD CONSTRAINT `uniform_ibfk_1` FOREIGN KEY (`fullID`) REFERENCES `full` (`fullID`),
  ADD CONSTRAINT `uniform_ibfk_2` FOREIGN KEY (`pantID`) REFERENCES `pants` (`pantID`),
  ADD CONSTRAINT `uniform_ibfk_3` FOREIGN KEY (`shirtID`) REFERENCES `shirts` (`shirtID`),
  ADD CONSTRAINT `uniform_ibfk_4` FOREIGN KEY (`shoeID`) REFERENCES `shoes` (`shoeID`),
  ADD CONSTRAINT `uniform_ibfk_5` FOREIGN KEY (`UserID`) REFERENCES `member` (`UserID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
